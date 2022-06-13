<?php
//
//namespace App\Services;
//
//use App\Models\Cart;
//use App\Models\Product;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Session;
//use Illuminate\Http\Request;
//
//
//class CartService {
//
//    public function getAll($orderBys = [],  $limit = 10) {
//        // $idCurrent = session('idUser') ;  //=> null
//        $idCurrent = Auth::id();  //=> null
//
//        // $idCurrent = Session::get('idUser')  ?? -1;
//
//        // $idCurrent = $request->session()->get('idUser') ;
//
//
//        $query = Cart::query()  -> where('user_id',$idCurrent);
//        if($orderBys){
//            $query->orderBy($orderBys['column'], $orderBys['sort']);
//        }
//        return $query-> paginate($limit);
//    }
//
//
//    public function save(array $data){
//        $idCurrent = Auth::id() ?? -1;
//        return Cart::updateOrCreate(
//            [
//                'user_id' => $idCurrent,
//                'product_id' => $data['product_id'],
//                'quantity' => $data['quantity']
//            ]
//        );
//    }
//
//    public function delete($id){
//        $idCurrent = Auth::id() ?? -1;
//
//        $item = Cart::where([
//
//                'user_id' => $idCurrent,
//                'product_id' => $id,
//
//        ])->first()->delete();
//
//        return $item;
//    }
//
//    public function updateQuantity($id_product, $act){
//        $idCurrent = Auth::id() ?? -1;
//
//        $status_edit = 1;
//        $item = Cart::where([
//                'user_id' => $idCurrent,
//                'product_id' => $id_product,
//        ]) -> first();
//
//        $product = Product::find($id_product);
//        $quantityProduct = $product -> quantity;
//        $quantityItemCart = $item -> quantity;
//
//        if($act == 1)
//        {
//            //nếu product đủ quantity
//            if($quantityProduct > $quantityItemCart){
//                $item -> update(['quantity' => $item->quantity + 1]);
//            }else{
//                $status_edit = 0;
//            }
//
//        }else{
//
//            if($item ->quantity > 1){
//                $item -> update(['quantity' => $item->quantity - 1]);
//            }
//        }
//
//        return $status_edit;
//    }
//
//
//}
