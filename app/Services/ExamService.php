<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;


class ExamService {

    //show data
    public function getAll($orderBys = [],  $limit = 10) {
        $query = User::query();
        $query = $query -> join('user_details', 'user_details.user_id', '=', 'users.id');
        if($orderBys){
            $query->orderBy($orderBys['column'], $orderBys['sort']);
        }
        return $query-> paginate($limit);
    }

    //Update status
    public function UpdateStatus($user_id, $status)
    {
        $rs = User::where('id', $user_id)
            -> update([
                'is_active' => $status
            ]);
        return $rs;
    }

    //Update password
    public function updatePassword($user_id, $password)
    {
        $rs = User::where('id', $user_id)
            -> update([
                'password' => bcrypt($password)
            ]);
        return $rs;
    }



    //Save data
    public function save(array $data, int $id = null){
        // return Exam::updateOrCreate(
        //     [
        //         'id' => $id
        //     ],
        //     [
        //         'name' => $data['name']
        //     ]
        // );

        if($id == null){
            $maxId = DB::table('exams')->max('id');
            $exam = User::create([
                'id' => $maxId + 1,
                'name' => $data['name']
            ]);
        }else{
            $exam = User::find($id);
            $exam -> update( ['name' => $data['name'] ] );
        }
        return $exam;

    }

    public function findById($id){
        return User::find($id);
    }

    public function delete($ids = []){
        return User::destroy($ids);
    }

    public function findByName($name){
        return User::where('name',$name)->get();
    }
}
