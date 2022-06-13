<?php
namespace App\Http\Controllers\Guest;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;
use GuzzleHttp\Client;
//use App\Models\Cart;
use App\Services\CartService;
use App\Services\ProductService;
use App\Models\Product;
use App\Services\PostService;

class CategoryController  extends Controller {

//    //show data
//    public function getCate() {
//        $categories = Category::all();
//        return view('guest.home.index')->compact(['categories'=>$categories])  ;
//    }
}
