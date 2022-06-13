<?php
namespace App\Services;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;


class UserService {

    //Save data 
    public function save(array $data, int $id = null){
        // return User::updateOrCreate(
        //     [
        //         'id' => $id
        //     ],
        //     [
        //         'name' => $data['name']
        //     ],
        //     [
        //         'email' => $data['email']
        //     ],
        //     [
        //         'password' => $data['password']
        //     ]


        // );
        return User::create($data);

    }

    public function updateInfo(array $data, int $id){
        $user = User::updateOrCreate(
            [
                'id' => $id,
            ],
            [
                'name' => $data['name'],
                'email' => $data['email'],
            ]
        );

        UserDetail::updateOrCreate(
            [
                'id' => $user -> user_details -> id,
            ],
            [
                'birthday' => $data['birthday'],
                'phone' => $data['phone'],
                'gender' => $data['gender'],
            ]
        );
        return $user;
    }

    public function updateAddress(string $address, int $id){
        $user = User::find($id);

        UserDetail::updateOrCreate(
            [
                'id' => $user -> user_details -> id,
            ],
            [
                'address' => $address,
            ]
        );
    }


    public function updatePassword(string $current_password, string $new_password, int $id){

        $stt=0;
        $user = User::find($id);
        $password = $user -> password;

        if (!Hash::check($current_password, $password)) {
            $stt=3;
            // return back()->withErrors(['current_password'=>'password not match']);
        }else{

            $user = User::updateOrCreate(
                [
                    'id' => $id,
                ],
                [
                    'password' =>  Hash::make($new_password),
                ]
            );

        }
        return $stt;
    }


    public function updateAvatar($pathCloudinary){
        $id = Auth::user()-> id;
        
        $userDetail = UserDetail::where('user_id',$id);
        // $userDetail -> update(['avatar' => '/avatar/'.$id.'.jpg']);
        $userDetail -> update(['avatar' => $pathCloudinary]);

        return 1;
        

    }



}







?>