<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
    body{
        background-color: #ccccff;
        padding-left: 20px;
    }

    label{
        color: #336600;
    }

    th{
        text-align: left;
    }


    .td1{
        width: 35%;
        padding-right: 20px;
    }
    .td2{
        width: 20%;
    }
    .td3{
        width: 25%;
        text-align: center;
    }
    .td4{
        width: 20%;
    }

</style>


<body style="background-color: #ccccff; padding-left: 20px;">

    <h1> Mail được gửi từ: Jackeylove Company </h1>
    
    <h2> Thông tin đơn hàng</h2>
    <h4> Mã đơn hàng: <label style="color: #336600;"> ĐH{{ $order -> id }}  </hlabel>  </h4> 
    <h4> Phí ship: <label style="color: #336600;"> đ{{ number_format( $order -> shipping_fee ,0) }}    </hlabel> </h4>
    <h4> Tổng order:  <label style="color: #336600;"> đ{{ number_format( $order -> total ,0) }}   </hlabel>  </h4>


    <h2> Thông tin người nhận</h2>
    <h4> Họ tên người nhận: <label style="color: #336600;"> {{ $user -> name }}   </hlabel>  </h4> 
    <h4> Email: <label style="color: #336600;"> {{ $user -> email }}   </hlabel>  </h4>
    <h4> Địa chỉ mua hàng: <label style="color: #336600;"> {{ $user -> user_details -> address ?? "null" }}  </hlabel>  </h4>
    <h4> Số điện thoại: <label style="color: #336600;"> {{ $user -> user_details -> phone }}  </hlabel>  </h4>
    <h4> Ghi chú đơn hàng: <label style="color: #336600;"> {{ $order -> message_to_seller }}   </hlabel>  </h4>
    <h4> Hình thức thanh toán: <label style="color: #336600;"> {{  $order -> payment }}   </hlabel>  </h4>


    <h2> Thông tin đơn hàng</h2>

    <table>
        <tr>

            <th class="td1 col-md-10" >Sản phẩm</th>
            <th class="td2">Số tiền</th>
            <th class="td3">Số lượng đặt</th>
            <th class="td4">Thành tiền</th>

        </tr>

        @foreach($orderItems as $item)
            <tr>
                <td class="td1" style="padding-right: 20px;">{{ $item -> products -> name }}  </td>
                <td class="td2" style="padding-right: 10px;">đ{{ number_format( $price = $item -> products -> price ,0) }}  </td>
                <td class="td3" style="padding-right: 10px;">{{ $quantity = $item -> quantity }}  </td>
                <td class="td4">  đ{{ number_format( $price * $quantity ,0) }}  </td>
            </tr>
        @endforeach

    </table>

    <h3 style="margin-top: 30px;"> Tổng đơn hàng: <label> {{ number_format( $order -> total ,0) }} </label> Đồng </h3>





</body>
</html>