<?php

namespace App\Services;
use Illuminate\Support\Facades\Auth;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

class MyOrderService {

    
    public function getAll($status_id, $orderBys = [],  $limit = 10) {

        $idCurrent = Auth::id();  

        if($status_id == 10){
            $query = Order::query()  -> where('user_id',$idCurrent);
        }else{
            $query = Order::query()  -> where('user_id',$idCurrent) -> where('status_id',$status_id);
        }
        
        if($orderBys){
            $query->orderBy($orderBys['column'], $orderBys['sort']);
        }
        return $query-> paginate($limit);
    }




    
    //payment
    public function save(array $data){
        $idCurrent = Auth::id(); 
        $orderItems = $data['orderItems'];

        //add to orders
        $order = Order::Create(
            [
                'user_id' => $idCurrent,
                'shipping_fee' => $data['shipping_fee'],
                'total' => $data['total'],
                'payment' => $data['payment'],
                'status_id' => 1,
                'message_to_seller' => $data['message_to_seller'],
            ]
        );

        foreach($orderItems as $item){

            //add to order_items
            OrderItem::Create([
                'order_id' => $order -> id, 
                'product_id' => $item -> product_id,
                'quantity' => $item->quantity,
            ]);

            //minus the number of products
            $product = Product::find($item -> product_id);
            $quantityProductCurrent = $product->quantity;
            $quantityProductAfterPayment = $quantityProductCurrent - ($item->quantity);
            $product -> update(['quantity' => $quantityProductAfterPayment ]);

            //update quantity_sold after payment
            // $quantitySoldCurrent = $product -> quantity_sold;
            // $quantityOrder = $item -> quantity;
            // $quntitySoldFinishOrder = $quantitySoldCurrent + $quantityOrder;
            // $product -> update(['quantity_sold' => $quntitySoldFinishOrder ]);
        }

        return $order;
    }


    
    public function findById($id){
        return Order::find($id);
    }
    

}