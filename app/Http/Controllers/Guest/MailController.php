<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;



class MailController extends Controller
{

    public function mailConfirmOrder(Request $request){
        $ss = $request->session()->all();

        try{
            $order = $ss['order'];
            // $order = session('order');
            $orderItems = $ss['orderItems'];
            $shipCost = $ss['shipCost'];
            $sumOrder = $ss['sumOrder'];
            $user = Auth::user();
            $email = Auth::user()->email;

            $to_name = "Tiến Long DECEPTICON";  //tên người gửi
            $to_email = $email;// gửi tới email

            $data = array(  "nameCompany"=>"Shop Jackeylove",
                            "order"=> $order,
                            "orderItems"=> $orderItems,
                            "shipCost"=> $shipCost,
                            "sumOrder"=> $sumOrder,
                            "user" => $user,

            );

            Mail::send('guest.mail.send_mail',$data,function($message) use ($to_name,$to_email){
                $message->to($to_email)->subject('Đặt hàng thành công');  //tiêu đề
                $message->from($to_email,$to_name);
            });


            // return view('guest.mail.send_mail',
            //         compact('order', 'orderItems', 'shipCost', 'sumOrder', 'user')
            // );

        }catch(\Exception $e){
            return $e;
        }

    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
