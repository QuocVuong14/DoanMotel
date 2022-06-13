<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Product;

class OrderService {

    //show data 
    public function getAll($orderBys = [],  $limit = 2) {
        $query = Order::query();
        if($orderBys){
            $query->orderBy($orderBys['column'], $orderBys['sort']);
        }
        return $query-> paginate($limit);
    }

    public function save(array $data, int $id = null){
        return Order::updateOrCreate(
            [
                'id' => $id
            ],
            [
                'status_id' => $data['status_id']
            ]
        );
    }

    
    public function findById($id){
        return Order::find($id);
    }


    public function updateQuantitySoldFinishOrder(int $idProduct, int $quantityOrder){
        $product = Product::find($idProduct);
        $quantitySoldCurrent = $product -> quantity_sold;
        $quntitySoldFinishOrder = $quantitySoldCurrent + $quantityOrder;
        $product -> update(['quantity_sold' => $quntitySoldFinishOrder ]);
    }
    

}