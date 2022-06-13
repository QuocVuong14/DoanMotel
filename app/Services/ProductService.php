<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Exam;
use Illuminate\Support\Facades\Auth;

class ProductService {
    //show data 
    public function getAll($category_id ,$orderBys = [],  $limit = 10) {    
        if($category_id == null){
            $query = Product::query();
        }else{
            $query = Product::query() -> where('category_id',$category_id);
        }

        if($orderBys){
            $query->orderBy($orderBys['column'], $orderBys['sort']);
        }
        return $query-> paginate($limit);
    }

    /////////////////////////////
    public function search($value_search,$orderBys = [],  $limit = 10){

        // if($value_search!=null){
            $query = Product::query() -> where('name','LIKE', '%'.$value_search.'%');
        // }
        if($orderBys){
            $query->orderBy($orderBys['column'], $orderBys['sort']);
        }
        return $query-> paginate($limit);
    }



    //Save data 
    public function save(array $data, int $id = null){
        $categoryName = $data['categoryName'];
        // dd($categoryName);
        $category_id = Exam::where('name',$categoryName)->first()->id;
        return Product::updateOrCreate(
            [
                'id' => $id
            ],
            [
                'name' => $data['name'],
                'description' => $data['description'],
                'price' => $data['price'],
                'images' => $data['images'],
                'category_id' => $category_id
            ]
        );
    }

    //Vote 
    public function vote($id_product){
        $id_user = Auth::id() ?? -1; 
        $product = Product::find($id_product);
        $quantityVoteOld =  $product -> quantity_vote;
        $userVotedOld = $product -> user_voted;
        $rs = 0;

        $arr_user_voted = explode(",", $userVotedOld);

        for($i=0; $i < count($arr_user_voted); $i++) {
            //Nếu đã vote
            if($arr_user_voted[$i] == $id_user){
                $rs = 1;
            }
        }

        //Nếu đã vote
        if($rs == 1){
            //Chuỗi cần thay/ chuỗi thay vào/ Chuỗi nguồn
            $userVoteNew = str_replace( ','.$id_user, '', $userVotedOld );
            $quantityVoteNew = $quantityVoteOld - 1;

        //Nếu chưa vote
        }else{
            $userVoteNew = $userVotedOld . ',' . $id_user;
            $quantityVoteNew = $quantityVoteOld + 1;
        }

        $product -> update([
            'quantity_vote' => $quantityVoteNew,
            'user_voted' => $userVoteNew,
        ]);

        return $rs;


    }

    public function delete($ids = []){ 
        return Product::destroy($ids);
    }

    public function findById($id){
        return Product::find($id);
    }


}