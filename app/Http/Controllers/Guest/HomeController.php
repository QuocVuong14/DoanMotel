<?php

namespace App\Http\Controllers\Guest;

use App\Models\Category;
use App\Models\Motel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;
use GuzzleHttp\Client;
use App\Models\Cart;
use App\Services\ProductService;
use App\Models\Product;
use App\Services\PostService;
use App\Models\Address;
use App\Models\Image;
use App\Models\MotelImage;
use Illuminate\Mail\Mailable;
use App\Mail\HelloMail;
use App\Models\Comment;
use App\Models\MotelComment;
use App\Models\Rating;
use Illuminate\Support\Facades\DB;

require_once "../vendor/autoload.php";


class HomeController extends Controller
{

    private $postService;

    public function __construct(PostService $postService, ProductService $productService)
    {
        $this->postService = $postService;
        $this->productService = $productService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::all(); //hiển thị trên menu

        $motels = Motel::where('is_active', '=', '0'); // hiển thị bài đăng

        // lọc theo category
        if ($request->category_id != null) {
            $motels->where('category_id', '=', $request->category_id);
        }

        //lọc theo giá
        if ($request->price != null) {
            switch ($request->price) {
                case 1:
                    $motels->where('price', '<', 1000000);
                    break;
                case 2:
                    $motels->whereBetween('price', [1000000, 2000000]);
                    break;
                case 3:
                    $motels->whereBetween('price', [2000000, 3000000]);
                    break;
                case 4:
                    $motels->whereBetween('price', [3000000, 5000000]);
                    break;
                case 5:
                    $motels->whereBetween('price', [5000000, 7000000]);
                    break;
                case 6:
                    $motels->where('price', '>=', 7000000);
                    break;
            }
        }
        // lọc theo diện tích
        if ($request->acreage != null) {
            switch ($request->acreage) {
                case 1:
                    $motels->where('acreage', '<', 497);
                    break;
                case 2:
                    $motels->whereBetween('acreage', [20, 30]);
                    break;
                case 3:
                    $motels->whereBetween('acreage', [30, 50]);
                    break;
                case 4:
                    $motels->whereBetween('acreage', [50, 70]);
                    break;
                case 5:
                    $motels->where('acreage', '>=', 70);
                    break;
            }
        }
//        // lọc theo quận
        if ($request->district_id != null) {
            $adresses = Address::where('district_id', '=', $request->district_id)->get('id');
            $listid = array();

            foreach ($adresses as $value) {
                $listid[] = $value->id;
            }

            $motels->whereIn('address_id', $listid);
        }

        // hiển thị bài đăng sắp xếp giảm dần
        $motels = $motels
            ->orderBy('motels.created_at', 'desc')
            ->orderBy('motels.updated_at', 'desc')
            ->Paginate(10);
//
//        // lấy địa chỉ
        foreach ($motels as $key => $value) {

            //get district name
            $apiDistrict = Http::get("https://vapi.vnappmob.com/api/province/district/48");
            $apiDistrict = json_decode($apiDistrict, true);

            foreach ($apiDistrict['results'] as $key1 => $value1) {
                if ($value1['district_id'] = $value->Address->district_id) {
                    $value->district_name = $value1['district_name'];
                }
            }

            //get ward name
            $apiWard = Http::get("https://vapi.vnappmob.com/api/province/ward/" . $value->Address->district_id);
            $apiWard = json_decode($apiWard, true);

            foreach ($apiWard['results'] as $key2 => $value2) {
                if ($value2['ward_id'] = $value->Address->ward_id) {
                    $value->ward_name = $value2['ward_name'];
                }
            }

            $value->address->street .= ', ' . $value->ward_name . ', ' . $value->district_name;
            //$value->ward_name . ', ' . $value->district_name;

        }


        $motelnews = Motel::all()->where('is_active', '=', '0')->sortByDesc('created_at')->take(10);

//sắp xếp theo đánh giá giảm dần
        $data= Motel::where('motels.is_active',0)
        ->withCount(['rating as average_rating' => function($query) {
            $query->select(DB::raw('coalesce(avg(rating),0)'));
        }])->orderByDesc('average_rating')->get();
      
        // đến số lượng bài đăng theo quận
        //data quan huyen + count so luong
        $quan = Motel::join('addresses', 'motels.address_id', '=', 'addresses.id')
            ->select(Motel::raw('count(*) as sl, district_id'))
            ->groupBy('district_id')
            ->get();


        if(count($motels) >0){
            // dd($apiDistrict);
            foreach ($quan as $value1) {
                foreach ($apiDistrict['results'] as $value2) {
                    if ($value1->district_id == $value2['district_id']) {
                        $value1->district_name = $value2['district_name'];
                    }
                }
            }

        }

        $currentURL = url()->current() . "?category_id=" . $request->category_id . "&price=" . $request->price . "&acreage=" . $request->acreage . "&district_id=" . $request->district_id . "&page=";
//        "currentURL",
        return view("guest.home.index", compact(["categories", "motels", "motelnews", "currentURL", "quan","data"]));
    }


    //////////////////////////////
    public function detail($id)
    {
        $categories = Category::all(); //hiển thị trên menu
        $post = Motel::where('motels.id', $id)
            ->firstOrFail();

        $images = MotelImage::where('motel_id', $id)
            ->join('images', 'motel_image.image_id', '=', 'images.id')
            ->get("url");

        //get district name
        $apiDistrict = Http::get("https://vapi.vnappmob.com/api/province/district/48");
        $apiDistrict = json_decode($apiDistrict, true);

        foreach ($apiDistrict['results'] as $key1 => $value1) {
            if ($value1['district_id'] = $post->Address->district_id) {
                $post->district_name = $value1['district_name'];
            }
        }

        //get ward name
        $apiWard = Http::get("https://vapi.vnappmob.com/api/province/ward/" . $post->Address->district_id);
        $apiWard = json_decode($apiWard, true);

        foreach ($apiWard['results'] as $key2 => $value2) {
            if ($value2['ward_id'] = $post->Address->ward_id) {
                $post->ward_name = $value2['ward_name'];
            }
        }

        $post->address->street .= ', ' . $post->ward_name . ', ' . $post->district_name;

        // đến số lượng bài đăng theo quận
        //data quan huyen + count so luong
        $district = Motel::join('addresses', 'motels.address_id', '=', 'addresses.id')
            ->select(Motel::raw('count(*) as sl, district_id'))
            ->groupBy('district_id')
            ->get();

        foreach ($district as $value1) {
            foreach ($apiDistrict['results'] as $value2) {
                if ($value1->district_id == $value2['district_id']) {
                    $value1->district_name = $value2['district_name'];
                }
            }
        }

        $comments = MotelComment::join('comments', 'motel_comments.comment_id', '=', 'comments.id')
                                -> leftjoin('users', 'comments.created_by', '=', 'users.id')
                                -> where('motel_comments.motel_id', $post -> id)
                                -> get();
//        dd($comments);



//dd($post->id);
        $rating= Rating::where('motel_id',$post->id)->avg('rating');
        $rating= round($rating);
//        dd($rating);

        return view('guest.home.detail', compact(['post', 'images', 'district','comments','rating','categories']));
        //        return view('guest.home.detail',['motel'=>$motel]);
    }

// đánh giá sao
    public function insert_rating(Request $request){
        $data =$request->all();
        $rating = new Rating();
        $rating->motel_id = $data['motel_id'];
        $rating->rating = $data['index'];
        $rating->save();
        echo 'done';
    }
    //comment
    public function sendComment(Request $request, $post_id){
        $content = $request -> content;
        $rs = $this -> postService -> sendComment($content, $post_id);
        return $rs;
    }

    public function sendmail($id)
    {
//        dd($id);
        $post = Motel::where('motels.id', $id)
            ->firstOrFail();
        $user = Auth::user();
//        dd($post);
        $emailuser = $user->email;
        $nameuser = $user->name;

        config([


            'mail.from.name' => $nameuser,
        ]);

        $emailct = $post->user->email;

        $namect = $post->user->name;

        $mailable = new HelloMail($user);
        Mail::to($emailct)->send($mailable);

        return redirect('/home/detail/'.$id);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
