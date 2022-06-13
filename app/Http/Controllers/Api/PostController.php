<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Motel;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\PostService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;
use GuzzleHttp\Client;
use App\Models\MotelImage;

class PostController extends Controller
{
    private $postService;
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }


    function index(Request $request)
    {
        $limit = $request->get('limit') ?? config('app.paginate.per_page');  //constan tu khai bao trong config
        $orderBys = [];

        $orderBys = [
            'column' => 'created_at',
            'sort' => 'desc'
        ];

        $posts = $this->postService->getAll($orderBys, $limit);

        $postsArr = array();
        foreach ($posts as $key => $value) {

            //get district name
            $apiDistrict = Http::get("https://vapi.vnappmob.com/api/province/district/48");
            $apiDistrict =  json_decode($apiDistrict, true);

            foreach ($apiDistrict['results'] as $key1 => $value1) {
                if ($value1['district_id'] = $value->district_id) {
                    $value->district_name = $value1['district_name'];
                }
            }

            //get ward name
            $apiWard = Http::get("https://vapi.vnappmob.com/api/province/ward/" . $value->district_id);
            $apiWard =  json_decode($apiWard, true);

            foreach ($apiWard['results'] as $key2 => $value2) {
                if ($value2['ward_id'] = $value->ward_id) {
                    $value->ward_name = $value2['ward_name'];
                }
            }

            $postsArr[] = $value;
        }

//                dd($postsArr);

        return view('admin.post.index', compact('postsArr'));
    }

    function UpdateStatus(Request $request)
    {
        // dd($request);
        $user_id = $request->user_id;
        $status = $request->status;
        // dd([$user_id, $status]);
        return $this->postService->updateStatus($user_id, $status);
    }

    function UpdateStt(Request $request)
    {
        // dd($request);
        $user_id = $request->user_id;
        $stt = $request->stt;
        // dd([$user_id, $status]);
        return $this->postService->updateStt($user_id, $stt);
    }

    public function create()
    {
//        dd(1);
        $provinces = Http::get("https://vapi.vnappmob.com/api/province");
        $provinces = json_decode($provinces) -> results;
        return view('admin.post.create', compact('provinces'));
    }

    public function store(Request $request)
    {
        $title = $request->title;
        $des = $request->des;
        $gender = $request->gender;
        $cate = $request->cate;
        $price = $request->price;
        $area = $request->area;
        $street = $request->street;
        $province = $request->province;
        $district = $request->district;
        $ward = $request->ward;
        $files = $request->file('att');
        $iframe =$request->iframe;

        $data = array(
            'title' => $title,
            'des' => $des,
            'gender' => $gender,
            'cate' => $cate,
            'price' => $price,
            'area' => $area,
            'street' => $street,
            'province' => $province,
            'district' => $district,
            'ward' => $ward,
            'files' => $files,
            'iframe' =>$iframe,
        );

        $rs = $this->postService->save($data);
        return $rs;
    }

    public function edit($id)
    {
        $provinces = Http::get("https://vapi.vnappmob.com/api/province");
        $provinces = json_decode($provinces) -> results;

        $post = $this->postService->getPostById($id);
        $images = MotelImage::where('motel_id', $id)
            ->join('images', 'motel_image.image_id', '=', 'images.id')
            ->get("url");




      // lấy địa chỉ
        //get district name
        $apiDistrict = Http::get("https://vapi.vnappmob.com/api/province/district/48");
        $apiDistrict =  json_decode($apiDistrict, true);

        foreach ($apiDistrict['results'] as  $value1) {
            if ($value1['district_id'] = $post->Address->district_id) {
                $post->district_name = $value1['district_name'];
            }
        }


        //get ward name
        $apiWard = Http::get("https://vapi.vnappmob.com/api/province/ward/" .  $post->Address->district_id);
        $apiWard =  json_decode($apiWard, true);

        foreach ($apiWard['results'] as $key2 => $value2) {
            if ($value2['ward_id'] = $post->Address->ward_id) {
                $post->ward_name = $value2['ward_name'];
            }
        }

        $post->address->street .= ', ' . $post->ward_name . ', ' .  $post->district_name;
        // kết thúc lấy địa chỉ
        //  dd($post->address->street);

        return view('admin.post.edit', compact(['post','images', 'provinces']));
    }

    public function update(Request $request, $id)
    {
        $title = $request->title;
        $des = $request->des;
        $gender = $request->gender;
        $cate = $request->cate;
        $price = $request->price;
        $area = $request->area;
        $street = $request->street;
        $province = $request->province;
        $district = $request->district;
        $ward = $request->ward;
        $files = $request->file('att');

        $data = array(
            'title' => $title,
            'des' => $des,
            'gender' => $gender,
            'cate' => $cate,
            'price' => $price,
            'area' => $area,
            'street' => $street,
            'province' => $province,
            'district' => $district,
            'ward' => $ward,
            'files' => $files
        );

//        dd($data);

        $rs = $this->postService->update($id, $data);

        return redirect('/post');
    }

    public function destroy($id)
    {
        $rs = $this->postService->delete($id);
        return $rs;
    }

    public function statistic()
    {
        // lấy user
        $user_id = Auth::user() -> id;
        $motelall = Motel::where('user_id',$user_id)->get()->count();


        $motelsumall = Motel::where('user_id',$user_id)->get()->sum('price');
        $motelstt = Motel::where('user_id',$user_id)->where('status',1)->get()->count();
        $motelsum = Motel::where('user_id',$user_id)->where('status',1)->get()->sum('price');


        $countallmotel= Motel::all()->count();
        $countblock = Motel::where('is_active', 1)->count();
        $countaccept = Motel::where('is_active', 0)->count();



        $countuser = User::all()->count();
        $countuserblock = User::where('is_active',1)->count() ;
        $countuseraccept = User::where('is_active',0)->count();
//        dd($countuserblock);
//        dd($countaccept);
//        dd($motelstt);
        return view('admin.statistic.index', compact('motelall','motelsumall','motelstt','motelsum',
            'countallmotel','countblock','countaccept', 'countuser','countuseraccept','countuserblock'));
    }
}
