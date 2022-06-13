<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Services\UserService;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;







class ProfileController extends Controller
{

    private  $userService;

    public function __construct(UserService $userService){
        $this -> userService = $userService;
    }


    public function uploadAvatar(Request $request){
        $idUser = Auth::id();

        $file = Cloudinary::upload($request -> file('file') -> getRealPath(),[
            'folder' => "Avatar", 'use_filename' => true, 'public_id' => $idUser,
        ]) -> getSecurePath();

        $x = $this -> userService -> updateAvatar($file);

        return redirect('/profile');









        // $id = Auth::user()-> id;
        // if($request->file != null){
        //     $path = Storage::putFileAs(
        //         'public/avatar', $request->file, $id.'.jpg'
        //     );

        // }
        // $x = $this -> userService -> updateAvatar();
        // return redirect('/profile');



    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();


        $provinces = Http::get("https://vapi.vnappmob.com/api/province");
        $provinces = json_decode($provinces) -> results;
        // dd($provinces );


        // $test = Http::get("https://vapi.vnappmob.com/api/province/district/48");
        // $test = json_decode($test);
        // dd($test);


        
        // $test = Http::get("https://vapi.vnappmob.com/api/province/ward/497");
        // $test = json_decode($test);
        // dd($test);

        

        // $arr = array();
        // foreach ($test as $item){
        //     array_push($arr,$item->name);
        // }

        // dd($arr);



        
        return view('guest.profile.index', compact('user','provinces'));


        // return response() -> json([
        //     'name' => $user -> name,
        //     'email' => $user -> email,
        //     'address' => $user -> user_details ->  address,
        //     'avatar' => $user -> user_details ->  avatar,
        //     'gender' => $user -> user_details ->  gender,
        //     'birthday' => $user -> user_details ->  birthday,
        //     'phone' => $user -> user_details ->  phone

        // ]);
    }

    public function updateInfo(Request $request)
    {
        $idUser = Auth::user()-> id;
        // return $request -> all();

        $validator = Validator::make($request -> all(), [
            'name' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'phone' => 'required',
            'gender' => 'required'
        ]);



        if ($validator->fails()) {
            return redirect() -> back()->withInput()->withErrors(['Không được bỏ trống !!!']);

        }

        $user = $this -> userService -> updateInfo(['name' => $request->name,
                                                    'email' => $request->email,
                                                    'birthday' => $request->birthday,
                                                    'phone' => $request->phone,
                                                    'gender' => $request->gender,

                                                ], $idUser );

        return $user;
    }

    // ==================================
    public function updateAddress(Request $request)
    {
        $idUser = Auth::user()-> id;
        // return $request -> all();

        $validator = Validator::make($request -> all(), [
            'province' => 'required',
            'district' => 'required',
            'house' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect() -> back()->withInput()->withErrors(['']);
        }

        $province = $request -> province;
        $district = $request -> district;
        $ward = $request -> ward;
        $house = $request -> house;

        $address = $house.','.$province.','.$district.','.$ward;

        // return $address;

        $user = $this -> userService -> updateAddress($address, $idUser);

        return $user;
    }

        // ==================================
        public function updatePassword(Request $request)
        {
            $stt=0;
            $idUser = Auth::user()-> id;
            // return $request -> all();
    
            $validator = Validator::make($request -> all(), [
                'current_password' => 'required',
                'new_password' => 'required',
                're_password' => 'required'
            ]);
    
            if ($validator->fails()) {
                $stt=1;
                // return redirect() -> back()->withInput()->withErrors(['asas']);
            }else{

                $current_password = $request -> current_password;
                $new_password = $request -> new_password;
                $re_password = $request -> re_password;
    
                if($new_password != $re_password) {
                    $stt=2;
                    // return redirect() -> back()->withErrors(['msg' => 'SAIII']);
                }else{
                    $user = $this -> userService -> updatePassword($current_password, $new_password, $idUser);
                    $stt=$user;
                }

            }

            
            return $stt;
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


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
}
