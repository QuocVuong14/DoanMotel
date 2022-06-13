<?php

namespace App\Http\Controllers\Api;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Auth\Events\Registered;
 use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;




class UserController extends Controller
{

    private  $userService;

    public function __construct(UserService $userService){
        $this -> userService = $userService;
    }


    //API
    public function login(Request $request)
    {
        $credentials = request(['email', 'password']); // lấy dữ liệu

        if (Auth::attempt($credentials)) {
            $userid = auth()->user()->id;  
        }

        $user = User::where('email', $request->email)->first();
        // so sánh mk
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;



        $response = [
            'user' => $user,
            'token' => $token,
            'id' => $userid
        ];
        return response($response, 201);

    }



    ////////////////////////////////
    /////////////////////////////////////

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    public function updateprofile()
    {
        $user =  UserDetail::where("user_id", Auth::user()->id)->first();
        return view('admin.profile.index',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //tạo user 
    public function store(Request $request)
    {
        // dd($request -> get('name'), $request -> get('email'),$request -> get('password'));
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|max:255',
            'password' => 'required',
            'repassword' => 'required',
        ]);


        // lấy dữ liệu từ input
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');
    

        try{
            $user = $this -> userService -> save(['name' => $name,
                                                  'email' => $email,
                                                  'password' => bcrypt($password),
                                               
                                                ]);
            // role =2 
            // if($request -> get('cb_motel') == 2 ){
                $user -> roles() -> syncWithoutDetaching([2]);
            // }

            // if($request -> get('cb_guest') == 3){
            //     $user -> roles() -> syncWithoutDetaching([3]);
            // }




            UserDetail::Create(
                [
                    'user_id' => $user -> id,
                    'birthday' => '',
                    'phone' => '',
                    'avatar' => '',
                ]
            );

            Auth::login($user, $remember = true);
            event(new Registered($user));

            // return redirect()->route('verification.notice');
            return redirect('home.index');


        }catch(\Exception $e){
            return response() -> json([
                'status' => false,
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
            ]);
        }


    }
    public function saveprofile (Request $request){
        // dd(Session::get('idUser'));
      
    //    dd($request->all());
       $user_id =  UserDetail::where("user_id", Auth::user()->id)->first();
    //    dd($user_id);
       $data = $request->all();
       $user_id->gender=$data['gender'];
       $user_id->phone=$data['phone'];
    //    $user_id->avatar=$data['file']['name'];
      $filename= $request->file->getClientOriginalName();
      
      $user_id->avatar= '/admin/images/posts/'.$filename;
    

    $user_id->save();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout(){
        // Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        session() -> pull('user');

        $user = request()->user(); //or Auth::user()
        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();

        return response()->json([
            'status_code' => 200,
            'message' => 'Logout successfull',
        ]);
    }

    public function member(Request $request){
        $user = Auth::user();
//        dd($user -> user_details -> address);

        return response() -> json([
            'name' => $user -> name,
            'email' => $user -> email,
            'address' => $user -> user_details ->  address,
            'avatar' => $user -> user_details ->  avatar,
            'gender' => $user -> user_details ->  gender,
            'birthday' => $user -> user_details ->  birthday,
            'phone' => $user -> user_details ->  phone

        ]);
    }

}
