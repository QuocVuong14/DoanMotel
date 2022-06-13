<?php

namespace App\Services;

use App\Models\Address;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Motel;
use App\Models\MotelImage;
use App\Models\Comment;
use App\Models\MotelComment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
Use \Carbon\Carbon;


class PostService
{

    //show data
    public function getAll($orderBys = [], $limit = 10)
    {
        // dd(1);
        $query = Motel::query();
        $query = $query->join('categories', 'motels.category_id', '=', 'categories.id')
            ->join('genders', 'motels.gender_id', '=', 'genders.id')
            ->join('addresses', 'motels.address_id', '=', 'addresses.id');
//                        -> join('wards', 'addresses.ward_id', '=', 'wards.id')
//                        -> join('districts', 'addresses.district_id', '=', 'districts.id')
//                        -> leftjoin('motel_image', 'motels.id', '=', 'motel_image.motel_id')
//                        -> leftjoin('images', 'motel_image.image_id', '=', 'images.id');

        if ($orderBys) {
            $query->orderBy($orderBys['column'], $orderBys['sort']);
        }
        $posts = $query->paginate($limit,
            $columns = [
                'motels.id', 'motels.information', 'motels.title', 'motels.price', 'motels.acreage', 'motels.is_active', 'motels.user_id', 'motels.status','motels.created_at',
                'addresses.street', 'addresses.district_id', 'addresses.ward_id',
                'categories.names',
                'genders.name',
//                'images.url',
//                'wards.name as ward_name',
//                'districts.name as district_name'
            ]);

        // dd($posts);

        $role = Auth::user()->roles->first()->id;
        $postsArr = array();
        foreach ($posts as $key => $value) {
            $listUrl = MotelImage::where('motel_id', $value->id)
                ->join('images', 'motel_image.image_id', '=', 'images.id')
                ->get('url')->first();

            $value->url = $listUrl->url;

            if ($role == 1) {
                $postsArr[] = $value;
            } else {
//                dd([$value -> user_id , Auth::user() -> id]);
                if ($value->user_id == Auth::user()->id) {
                    $postsArr[] = $value;
                }
            }


        }

        return $postsArr;

    }

    //Update is_active posts
    public function updateStatus($user_id, $status)
    {
        $rs = Motel::where('id', $user_id)
            ->update([
                'is_active' => $status
            ]);
        return $rs;
    }


    //Update status posts
    public function updateStt($user_id, $stt)
    {
        $rs = Motel::where('id', $user_id)
            ->update([
                'status' => $stt
            ]);
        return $rs;
    }

    //    //Save data
    public function save(array $data)
    {
        if (Auth::user()->is_active == 1) {
//            return redirect('/post/create');
            return view('common.error');
        }

        $imageIdArr = array();
        foreach ($data['files'] as $file) {
            $fileName = time() . $file->getClientOriginalName();
            $file->move(public_path('admin/images/posts/'), $fileName);
//            Storage::putFileAs('posts', $file, $fileName);

            $image = Image::create([
                'url' => '/admin/images/posts/' . $fileName
            ]);
            $imageIdArr[] = $image->id;
        }

        $address = Address::create([
            'street' => $data['street'],
            'ward_id' => $data['ward'],
            'district_id' => $data['district']
        ]);

        $motel = Motel::create([
            'user_id' => Auth::user()->id,
            'title' => $data['title'],
            'information' => $data['des'],
            'gender_id' => $data['gender'],
            'category_id' => $data['cate'],
            'price' => $data['price'],
            'acreage' => $data['area'],
            'address_id' => $address->id,
            'image_id' => 1,
            'is_active' => 1,
            'status' => 0,
            'iframe' => $data['iframe'],
        ]);

        for ($i = 0; $i < count($imageIdArr); $i++) {
            MotelImage::create([
                'motel_id' => $motel->id,
                'image_id' => $imageIdArr[$i]
            ]);
        }
        return redirect('post');
    }

    //Update
    public function update($id, $data)
    {
        $post = Motel::where('id', $id)->first();

        //neu khong ton tai motel nao co id = $id
        if ($post == null) {
            return view('common.error');
        }

        //neu nhu co thay doi hinh anh
        // => xu ly hinh anh
        if ($data['files'] != null) {

            //xoa toan bo hinh anh cu
            $images = MotelImage::where('motel_id', $post->id)->get();
            //neu ton tai hinh anh
            if (count($images) > 0) {
                $images->each->delete();
            }

            //them hinh anh moi
            $imageIdArr = array();
            foreach ($data['files'] as $file) {
                $fileName = time() . $file->getClientOriginalName();
                $file->move(public_path('admin/images/posts/'), $fileName);

                $image = Image::create([
                    'url' => '/admin/images/posts/' . $fileName
                ]);
                $imageIdArr[] = $image->id;
            }


            for ($i = 0; $i < count($imageIdArr); $i++) {
                MotelImage::create([
                    'motel_id' => $post->id,
                    'image_id' => $imageIdArr[$i]
                ]);
            }

        }
        //ket thuc xu ly hinh anh

        $rs = $post->update([
            'user_id' => Auth::user()->id,
            'title' => $data['title'],
            'information' => $data['des'],
            'gender_id' => $data['gender'],
            'category_id' => $data['cate'],
            'price' => $data['price'],
            'acreage' => $data['area'],
        ]);


        $address = Address::where('id', $post->address_id)->first();

        $rs1 = $address->update([
            'street' => $data['street'],
            'ward_id' => $data['ward'],
            'district_id' => $data['district']
        ]);


        return $rs;

    }

    public function getPostById($id)
    {
        $post = Motel::where('motels.id', $id)
            ->join('addresses', 'addresses.id', '=', 'motels.address_id')
            ->get([
                '*', 'motels.id as motel_id'
            ])->first();

        return $post;
    }

    public function delete($id)
    {
        $post = Motel::where('id', $id)->first();
        $rs = $post->delete();
        return $rs;
    }

    //send comment
    public function sendComment($content, $post_id)
    {
//        dd([$comment, $post_id]);

        $comment = Comment::create([
            'content' => $content,
            'created_by' => Auth::user() -> id
        ]);

        $motelComment = MotelComment::create([
            'motel_id' => $post_id,
            'comment_id' => $comment->id
        ]);

        $userNameComment = User::where('id', $comment -> created_by) -> get() -> first() -> name;
        $comment -> userNameComment = $userNameComment;

        return $comment;

    }

}


