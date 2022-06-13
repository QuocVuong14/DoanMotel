<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Phòng Trọ Đà Nẵng</title>
    <link rel="stylesheet" href="{{asset('./guest/libs/Css/bootstrap.min.css ')}}" />
    <link rel="stylesheet" href="{{asset('./guest/libs/Css/animate.css ')}}" />
    <link rel="stylesheet" href="{{asset('./guest/libs/Css/all.css ')}}" />
    <link rel="stylesheet" href="{{asset('./guest/libs/Css/slick-theme.css ')}}" />
    <link rel="stylesheet" href="{{asset('./guest/libs/Css/slick.css ')}}" />
    <link rel="stylesheet" href="{{asset('./guest/Assets/fontawesome-free-6.0.0-web/fontawesome-free-6.0.0-web/css/all.min.css ')}}" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="{{asset('./guest/Assets/Css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('./guest/Assets/Css/responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('./guest/Assets/Css/responsive.css ')}}"/>

    <link rel="stylesheet" href="{{asset('template/admin/plugins/fontawesome-free/css/all.min.css')}}">
</head>

<body>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="header-top">
                <a href="#" class="header-logo">
                    <img src="{{asset('admin/imgs/logopt2.jpg')}}" alt="" />
                </a>
                <div class="header-user-welcome">
                    <p class="header-user-name">Phòng trọ Đà Nẵng
                        @if( Auth::user()!= null)
                            {{ Auth::user()->name }}
                        @else
                            xin chào
                        @endif
                        !</p>
                    @if(session('role') == 1 || session('role')== 2)
                        <a href="/post/create" class="btn header-user-btn btn-secondary" role="button" aria-pressed="true">Đăng tin mới</a>
                    @else
                        <a href="/login" class="btn header-user-btn btn-secondary" role="button" aria-pressed="true">Đăng tin mới</a>
                    @endif

                    @if( Auth::user() != null )
                        <a href="/post" class="btn header-user-btn btn-primary" role="button" aria-pressed="true">Quản lý phòng  trọ</a>
                        <a href="/logout" class="btn header-user-btn btn-primary" role="button" aria-pressed="true">Đăng xuất</a>
                    @else
                        <a href="/login" class="btn header-user-btn btn-primary" role="button" aria-pressed="true">Đăng nhập</a>
                        <a href="/user/create" class="btn header-user-btn btn-primary" role="button" aria-pressed="true">Đăng ký</a>
                    @endif



                </div>
                <div class="header__action">
                    <div class="header__action__wrap">
                        <div class="menu__icon">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="menu__overlay"></div>
                    <div class="menu__mobile__wrap">
                        <div class="menu__mobile__logo">
                            <img src="{{asset('admin/imgs/logopt2.jpg')}}" alt="logo">
                        </div>
                        <div class="menu__mobile__authen">
                            <ul>
                                <li><a href="#">  Đăng Nhập </a></li>
                                <li><a href="#">Đăng Ký</a></li>
                            </ul>
                        </div>
                        <div class="menu__mobile__list">
                            <ul>
                                <li><a href="#"> Trang Chủ </a></li>
                                <li><a href="#"> Cho Thuê Phòng Trọ</a></li>
                                <li><a href="#"> Nhà Cho Thuê </a></li>
                                <li><a href="#"> Cho Thuê Căn Hộ</a></li>
                                <li><a href="#"> Tìm người ở ghép</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="header-nav">
        <div class="container">
            <div class="row">
            <ul class="header-menu">
                        <li class="header-menu-item">
                            <a href="/home" class="header-menu-link"> Trang Chủ </a>
                        </li>

                        @foreach($categories as $value )
                        <li n class="header-menu-item">
                            <a href="/home?category_id={{$value->id}}" class="header-menu-link"> {{$value->names}}</a>
                        </li>
                        @endforeach

                    </ul>
            </div>
        </div>
    </nav>
</header>
<main>
{{--    </section>--}}
    <section class="section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-8 p-0">
                    <section class="post">
                        <div class="container">
                            <div class="row">



                                <div class="post-slider">
                                    @foreach($images as $image)
                                    <div class="post-slider-img">
                                        <img src="{{$image->url}}" alt="">
                                    </div>
                                    @endforeach
                                </div>
                                <div class="post-header">
{{--                                   {{dd($post->motel_image->Image->first()->url)}}--}}
                                    <h1 class="post-header-title">{{$post->title}}</h1>
                                    <p class="post-address">
                                        <i></i>
                                        <span>Địa chỉ: {{$post->address->street}}, Đà Nẵng</span>
                                    </p>
                                    <div class="post-header-attributes">
                                        <div class="post-price">
                                            <i    style="background: url('https://phongtro123.com/images/price-icon.svg') center no-repeat;" ></i>
                                            <span style="margin-right: 15px"> Gía : {{number_format($post->price)}} VNĐ/THÁNG</span>
                                        </div>
                                        <div class="post-header-acreage">
                                            <i></i>
                                            <span>{{$post->acreage}}m<sup>2</sup></span>
                                        </div>
                                        <div class="post-header-published">
                                            <i></i>
                                            <span>{{ $post->created_at->format('d/n/Y') }}</span>
                                        </div>
                                        <div class="post-header-hashtag">
{{--                                            <i></i>--}}
{{--                                            <span></span>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="post-main">
                                    <h2 class="post-main-title">Thông tin mô tả</h2>
                                    <div class="post-main-content">
{{--                                        <p>Cho thuê phòng trọ tại 404 Đường Trần Cao Vân, Phường Xuân Hà, Quận Thanh Khê, Đà Nẵng</p>--}}
{{--                                        <p>Phòng có diện tích 18m2, có hiên, có mê lửng, cửa đi riêng,</p>--}}
{{--                                        <p>khu vực trọ rất an ninh xung quanh lại có đầy đủ các tiện ích nên sinh hoạt rất thuận tiện.--}}
{{--                                        </p>--}}
{{--                                        <p>Ưu tiên sinh viên và người đang đi làm.</p>--}}
{{--                                        <p>Giá thuê 1.800.000/Tháng</p>--}}
{{--                                        <p>Thông tin chi tiết liên hệ 0898204320 để trao đổi thêm</p>--}}
                                        <p style="line-height: 30px">{{$post->information}}</p>
                                    </div>
                                </div>
                                <div class="post-overview">
                                    <h2 class="post-overview-title">Đặc điểm tin đăng</h2>
                                    <table class="table">
                                        <tbody>
{{--                                        <tr>--}}
{{--                                            <td class="name">Mã tin:</td>--}}
{{--                                            <td>#600931</td>--}}
{{--                                        </tr>--}}
                                        <tr>
                                            <td class="name">Khu vực</td>
                                            <td>Đà Nẵng</td>
                                        </tr>
                                        <tr>
                                            <td class="name">Loại tin rao:</td>
                                            <td> {{$post->category->names}}</td>

                                        </tr>
                                        <tr>
                                            <td class="name">Đối tượng thuê:</td>
                                            <td>{{$post->gender->name}}</td>
                                        </tr>
{{--                                        <tr>--}}
{{--                                            <td class="name">Gói tin:</td>--}}
{{--                                            <td>Tin thường</td>--}}
{{--                                        </tr>--}}
                                        <tr>
                                            <td class="name">Ngày đăng:</td>
                                            <td> {{ $post->created_at->format('d/n/Y') }}</td>
                                        </tr>
{{--                                        <tr>--}}
{{--                                            <td class="name">Ngày hết hạn:</td>--}}
{{--                                            <td>Chủ Nhật, 22:03 22/05/2022</td>--}}
{{--                                        </tr>--}}

                                        </tbody>
                                    </table>
                                </div>
                                <div class="post-contact">
                                    <h2 class="post-contact-title">Thông tin liên hệ</h2>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td class="name">Liên hệ:</td>
                                            <td>{{$post->user->name}}</td>

                                        </tr>
                                        <tr>
                                            <td class="name">Điện thoại:</td>
                                            <td>  {{$post->user->user_details->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td class="name">Zalo</td>
                                            <td>  {{$post->user->user_details->phone}}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="post-map">
                                    <h2 class="post-map-title">Bản Đồ</h2>
{{--                                    <p class="post-map-address">{{$post->street}}</p>--}}
                                    <div class="post-map-content">

                                       {!!  $post->iframe!!}

                                    </div>
                                    <p class="post-map-desc">
                                        Bạn đang xem nội dung tin đăng: "Phòng trọ 18m2 khu yên tĩnh,lối đi riêng, mê lửng, an ninh - Mã
                                        tin: 600931". Mọi thông tin liên quan đến tin đăng này chỉ mang tính chất tham khảo. Nếu bạn có
                                        phản hồi với tin đăng này (báo xấu, tin đã cho thuê, không liên lạc được,...), vui lòng thông
                                        báo để PhòngTrọ123 có thể xử lý.
                                    </p>
                                    <a class="btn btn-primary" style="width: 100px; margin-left: auto; margin-right: auto ; justify-content: center;" href="/home/sendmail{{$post->id}}" role="button">Hẹn gặp</a>


{{--                                        <form style="width: 100%" >--}}
{{--                                    đánh giá sao--}}
                                    <p> Đánh giá sao</p>
                                    <ul class="list-inline" title="Average rating" style="display: flex">
                                        @for($count=1 ; $count<=5; $count++)
                                            @php

                                                if($count<=$rating){
                                                $color = 'color:#ffcc00;';

                                                }else{
                                                    $color = 'color:#ccc;';
                                                }
                                            @endphp
                                        <li title="đánh giá sao"
                                        id="{{$post->id}}-{{$count}}"
                                        data-index="{{$count}}"
                                        data-motel_id="{{$post->id}}"
                                        data-rating="{{$rating}}"
                                        class="rating"
                                        style="cursor: pointer;{{$color}}; font-size: 30px; padding-right: 10px;">
                                            &#9733;

                                        </li>
                                        @endfor
                                    </ul>



                                            <div  class="form-group">
                                                <label style="font-size: 17px; font-weight: 500; padding-top: 20px;padding-bottom: 20px;"for="exampleInputEmail1">Viết Bình luận</label>
                                                <input type="text" class="form-control" id="content"
                                                       name="content">
{{--                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                                            </div>

                                            <button onclick="sendMail(<?php echo $post -> id ?>)" type="submit" class="btn btn-primary" style=" margin-top: 20px;margin-bottom: 20px; margin-left: auto;margin-right: auto;" >Bình Luận</button>

{{--                                            Danh sach binh luan--}}
{{--                                            <div class="comment-list" id="comment-list">--}}
{{--                                                @foreach($comments as $value)--}}
{{--                                                    <div>--}}
{{--                                                        <label style="margin-bottom: 10px; font-size: 16px; font-weight: 500"> Người bình luận:  </label>--}}
{{--                                                        <label> {{$value->name}} </label>--}}
{{--                                                    </div>--}}
{{--                                                    <div st>--}}
{{--                                                        <label style="margin-bottom: 15px; font-size: 16px; font-weight: 500" > Nội dung: </label>--}}
{{--                                                        <label> {{$value->content}} </label>--}}
{{--                                                    </div>--}}
{{--                                                @endforeach--}}
{{--                                            </div>--}}

                                    {{--                                        binh luan--}}
                                    <section style="background-color: #e7effd;">
                                        <div >
                                            <div class="row d-flex justify-content-center">
                                                <div >
                                                    <div class=" flex-start mb-4">
                                                        @foreach($comments as $value)

                                                        <div  style="margin-bottom: 10px" class="card w-100">
                                                            <div class="card-body p-3">
                                                                <div class="">
                                                                    <h5>{{$value->name}}</h5>
{{--                                                                    <p class="small">3 hours ago</p>--}}
                                                                    <p>
                                                                       Nội dung:  {{$value->content}}
                                                                    </p>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </section>


{{--                                        </form>--}}
{{--
{{--                                        viết bình luận--}}

                                </div>
                                <div class="post-report"></div>
                            </div>
                        </div>
                    </section>
{{--                    <section class="section-listing">--}}
{{--                        <h2 class="section-listing-title">Cho thuê phòng trọ </h2>--}}
{{--                        <ul class="section-listing-list">--}}
{{--                            <div class="section-listing-item">--}}
{{--                                <img src="./Assets/image/nha1.jpg" alt="" class="section-listing-item-img">--}}
{{--                                <div class="section-listing-info">--}}
{{--                                    <h5 class="section-listing-info-title">--}}
{{--                                        Cho thuê phòng trọ sạch đẹp, khu an ninh tốt. Phòng rộng 24m2, Giá thuê 2,7…--}}
{{--                                    </h5>--}}
{{--                                    <div class="section-listing-info-meta">--}}
{{--                                        <p class="section-listing-info-price">1.8 triệu/tháng</p>--}}
{{--                                        <p class="section-listing-info-acreage">18m²</p>--}}
{{--                                        <p class="section-listing-info-location">Quận Hải Châu, Đà Nẵng</p>--}}
{{--                                        <span class="section-listing-info-time">1 ngày trước</span>--}}
{{--                                    </div>--}}
{{--                                    <p class="section-listing-info-desc">--}}
{{--                                        Cho thuê phòng cho trọ ở q Hải Châu, thoáng mát sạch đẹp, yên tĩnh giá chỉ từ 1,7 tr/th/ng--}}
{{--                                        phòng nhỏ. 1tr8/th/1ng, 2tr/th/2ng có Tolet, bếp nấu, 2,3tr / th/ 2 ng có--}}
{{--                                    </p>--}}
{{--                                    <div class="section-listing-info-author">--}}
{{--                                        <img src="./Assets/image/user.png" alt="" class="section-listing-info-author-avt">--}}
{{--                                        <p class="section-listing-info-author-name">your name</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </ul>--}}
{{--                    </section>--}}
                </div>
                <div class="col-md-4">
                    <section class="aside">
                        <div class="aside-author">
                            <img src="  {{$post->user->user_details->avatar}}" alt="" class="aside-author-avatar">
                            <p class="aside-author-name">{{$post->user->name}} </p>
                            <!-- <div class="aside-author-status">
                                <i></i>
                                <span>Hoạt động vài giờ trước</span>
                            </div> -->
                            <div class="aside-author-contact">
                                <button class="aside-author-btnPhone btn btn--secondary">
                                    <i></i>
                                    <a rel="" href="tel:{{$post->user->user_details->phone}}">   {{$post->user->user_details->phone}} </a>
                                </button>
                                <button class="aside-author-btnZalo btn btn--outline">
                                    <i></i>
                                    <a rel="" target="_blank" href="https://zalo.me/{{$post->user->user_details->phone}}">   {{$post->user->user_details->phone}}</a>
                                </button>
                                <button class="aside-author-btnLove btn btn--outline">
                                    <i></i>
                                    Yêu thích
                                </button>
                            </div>

                        </div>
           
                        <div class="aside-address">
                            <h3 class="aside-address-title">
                                Khu vực Đà Nẵng
                            </h3>
                            <ul class="aside-address-list">
                            @foreach($district as $value)
                                <li class="aside-address-item">
                                    <a href="/home?district_id={{$value->district_id}}" class="aside-address-link">
                                        cho thuê phòng trọ {{$value->district_name}}
                                        <span>({{$value->sl}})</span>
                                    </a>
                                </li>
                            @endforeach
                                <!-- <li class="aside-address-item">
                                    <a href="#" class="aside-address-link">
                                        cho thuê phòng trọ Cẩm Lệ
                                        <span>(3)</span>
                                    </a>
                                </li>
                                <li class="aside-address-item">
                                    <a href="#" class="aside-address-link">
                                        cho thuê phòng trọ Hải Châu
                                        <span>(3)</span>
                                    </a>
                                </li>
                                <li class="aside-address-item">
                                    <a href="#" class="aside-address-link">
                                        cho thuê phòng trọ Liên Chiễu
                                        <span>(3)</span>
                                    </a>
                                </li>
                                <li class="aside-address-item">
                                    <a href="#" class="aside-address-link">
                                        cho thuê phòng trọ Ngũ Hành Sơn
                                        <span>(3)</span>
                                    </a>
                                </li>
                                <li class="aside-address-item">
                                    <a href="#" class="aside-address-link">
                                        cho thuê phòng trọ Sơn Trà
                                        <span>(3)</span>
                                    </a>
                                </li>
                                <li class="aside-address-item">
                                    <a href="#" class="aside-address-link">
                                        cho thuê phòng trọ Thanh Khê
                                        <span>(3)</span>
                                    </a>
                                </li> -->


                            </ul>
                        </div>
                        <!-- <div class="section-sublink">
                            <h2 class="section-sublink-title"> Có thể bạn quan tâm</h2>
                            <ul class="section-sublink-acreage clearfix">
                                <li class="section-sublink-item w-100">
                                    <a href="#" class="section-sublink-link">
                                        Mẫu hợp đồng cho thuê phòng trọ
                                    </a>
                                </li>
                                <li class="section-sublink-item w-100">
                                    <a href="#" class="section-sublink-link">
                                        Cẩn thận các kiểu lừa đảo khi thuê phòng trọ
                                    </a>
                                </li>
                                <li class="section-sublink-item w-100">
                                    <a href="#" class="section-sublink-link">
                                        Kinh nghiệm thuê phòng trọ Sinh Viên
                                    </a>
                                </li>

                            </ul>
                        </div> -->
                    </section>
                </div>
            </div>
        </div>

    </section>

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="contact_main">
                    <h3 class="contact_heading">
                        Tại sao lại chọn Phòng trọ Đà Nẵng?
                    </h3>
                    <p class="contact_info">Chúng tôi biết bạn có rất nhiều lựa chọn, nhưng PhongtroDaNang tự hào là trang web
                        đứng top google về các từ khóa: <a href="/cho-thue-phong-tro" title="Cho thuê phòng trọ">
                            <strong>cho thuê phòng trọ</strong></a>, <strong>nhà trọ</strong>, <a href="/nha-cho-thue"
                                                                                                  title="Cho thuê nhà nguyên căn"><strong>thuê nhà nguyên căn</strong></a>, <a href="/cho-thue-can-ho"
                                                                                                                                                                               title="Cho thuê căn hộ"><strong>cho thuê căn hộ</strong></a>, <a href="/tim-nguoi-o-ghep"
                                                                                                                                                                                                                                                title="Tìm người ở ghép"><strong>tìm người ở ghép</strong></a>, <a href="/cho-thue-mat-bang"
                                                                                                                                                                                                                                                                                                                   title="Cho thuê mặt bằng"><strong>cho thuê mặt bằng</strong></a>...Vì vậy tin của bạn đăng trên website
                        sẽ tiếp cận được với nhiều khách hàng hơn, do đó giao dịch nhanh hơn, tiết kiệm chi phí hơn</p>

                    <h5 class="contact_title">Chi phí thấp, hiệu quả tối đa</h5>
                    <div class="contact_star">
                        <span class="contact_star_icon"></span>
                    </div>
                    <p class="contact_testimonial">
                        "Trước khi biết website phongtro, mình phải tốn nhiều công sức và chi phí cho việc đăng tin cho thuê:
                        từ việc phát tờ rơi, dán giấy, và đăng lên các website khác nhưng hiệu quả không cao. Từ khi biết website
                        phongtro123.com, mình đã thử đăng tin lên và đánh giá hiệu quả khá cao trong khi chi phí khá thấp, không
                        còn tình trạng phòng trống kéo dài."
                        <br>

                    </p>
                    <h6 class="contact_title">Bạn đang có phòng trọ / căn hộ cho thuê?</h6>
                    <p class="text-center">Không phải lo tìm người cho thuê, phòng trống kéo dài</p>
                    <a class="btn contact_btn" style="padding: 10px 30px;" rel="nofollow"
                       href="https://phongtro123.com/quan-ly/dang-tin-moi.html">Đăng tin ngay</a>
                </div>
            </div>
        </div>
    </section>
    <section class="support">
        <div class="container">
            <div class="row">
                <div class="support_main">
                    <div class="support_bg">
                    </div>
                    <div class="support_box">
                        <p class="support_title">Liên hệ với chúng tôi nếu bạn cần hỗ trợ:</p>
                        <ul class="support_list">
                            <!-- <li class="support_item">
                              <span class="support_item_title">Hỗ trợ thanh toán</span>
                              <a rel="nofollow" href="tel:0917686101">Điện thoại: 0917686101</a>
                              <a rel="nofollow" target="_blank" href="https://zalo.me/0917686101">Zalo: 0917686101</a>
                            </li> -->
                            <li class="support_item">
                                <span class="support_item_title">Hỗ trợ Đăng tin</span>
                                <a rel="nofollow" href="tel:0932422840">Điện thoại: 0932422840</a>
                                <a rel="nofollow" target="_blank" href="https://zalo.me/0932422840">Zalo: 0932422840</a>
                            </li>
                            <li class="support_item">
                                <span class="support_item_title">Hotline 24/7</span>
                                <a rel="nofollow" href="tel:0932422840">Điện thoại: 0932422840</a>
                                <a rel="nofollow" target="_blank" href="https://zalo.me/0932422840">Zalo: 0932422840</a>
                            </li>
                        </ul>
                        <a class="btn btn-primary support_btn" rel="nofollow" href="https://zalo.me/0932422840">Gửi liên hệ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-top">
                    <ul class="footer-top-list">
                        <li class="footer-top-item">
                            <a href="" class="footer-top-link">Cho thuê phòng trọ, nhà trọ</a>
                            <span class="footer-top-arrowDown"></span>
                        </li>
                        <li class="footer-top-item">
                            <a href="" class="footer-top-link">Cho thuê nhà nguyên căn</a>
                            <span class="footer-top-arrowDown"></span>
                        </li>
                        <li class="footer-top-item">
                            <a href="" class="footer-top-link">Cho thuê căn hộ</a>
                            <span class="footer-top-arrowDown"></span>
                        </li>
                        <li class="footer-top-item">
                            <a href="" class="footer-top-link">Cho thuê mặt bằng</a>
                            <span class="footer-top-arrowDown"></span>
                        </li>
                        <li class="footer-top-item">
                            <a href="" class="footer-top-link">Tìm người ở ghép</a>
                            <span class="footer-top-arrowDown"></span>
                        </li>
                    </ul>
                </div>
                <div class="footer-main">
                    <div class="footer-main-col">
                        <a class="footer-main-logo">
                            <img src="{{asset('admin/imgs/logopt2.jpg')}}" alt="" srcset="">
                        </a>
                        <div class="footer-main-desc">
                            Phongtro123.com tự hào có lượng dữ liệu bài đăng lớn nhất trong lĩnh vực cho thuê phòng trọ.
                        </div>
                    </div>
                    <div class="footer-main-col">
                        <span class="footer-main-col-title">Về PHONGTRODANANG</span>
                        <ul class="footer-main-col-menu">
                            <li class="footer-main-col-item">
                                <a href="#" class="footer-main-col-link">Trang chủ</a>
                            </li>
                            <li class="footer-main-col-item">
                                <a href="#" class="footer-main-col-link">Giới thiệu</a>
                            </li>

                        </ul>
                    </div>
                    <div class="footer-main-col">
                        <span class="footer-main-col-title">Hỗ trợ khách hàng</span>
                        <ul class="footer-main-col-menu">
                            <li class="footer-main-col-item">
                                <a href="#" class="footer-main-col-link">Câu hỏi thường gặp</a>
                            </li>
                            <li class="footer-main-col-item">
                                <a href="#" class="footer-main-col-link">Hướng dẫn đăng tin</a>
                            </li>


                        </ul>
                    </div>
                    <div class="footer-main-col">
                        <span class="footer-main-col-title">Liên hệ với chúng tôi</span>
                        <div class="footer-main-col-social">
                            <a href="https://www.facebook.com/timlai.quakhu.94695/" class="footer-main-col-facebook">
                                <i></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCJdv8UB3wBUWktmUv88-_7A" class="footer-main-col-youtube">
                                <i></i>
                            </a>
                            <a href="http://zalo.me/0932422840" class="footer-main-col-zalo">
                                <i></i>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="footer-bottom"></div>
            </div>
        </div>
    </footer>
</main>

<script src="{{asset('./guest/libs/Js/jquery-3.5.1.slim.min.js ')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js "></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="{{asset('./guest/libs/Js/bootstrap.min.js ')}}"></script>
<script src="{{asset('./guest/libs/Js/all.js ')}}"></script>
<script src="{{asset('./guest/libs/Js/slick.min.js ')}}"></script>
<script src="{{asset('./guest/libs/Js/wow.js ')}}"></script>
<script src="{{asset('./guest/Assets/Js/main.js ')}}"></script>
<script src="{{asset('./guest/Assets/Js/details.js ')}}"></script>



<script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
<script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    $('.menu__icon').click(function(){
        $('.menu__overlay').show();
        $('.menu__mobile__wrap').addClass('active');
    });
    $('.menu__overlay').click(function(){
        // $('.menu__overlay').show();
        $('.menu__mobile__wrap').removeClass('active');
        $(this).hide();
    });
</script>
</body>

</html>

<script>
    function sendMail(id){
        let content = $('#content').val();
        $.ajax({
            url: "/home/send-comment/"+id,
            method: "POST",

            data: {
                "_token": "{{ csrf_token() }}",
                'content': content,
                // 'status': status
            },

        }).done(function(res) {
            console.log(res);
            console.log(res.content);

            let html = `                        <div>
                                                    <label> Nguoi binh luan: </label>
                                                    <label> ${res['userNameComment']} </label>
                                                </div>
                                                <div>
                                                    <label> Noi dung: </label>
                                                    <label> ${res['content']} </label>
                                                </div>`;

            $('#comment-list').append(html);

        });
    }

    function remove_background(motel_id){
        for(var count =1 ; count<=5 ;count++){
            $('#'+motel_id+'-'+count).css('color','#ccc');
        }
    }
    // hover đánh giá sao
    $(document).on('mouseenter','.rating',function(){
        var index = $(this).data("index");
        var motel_id = $(this).data('motel_id');
        remove_background(motel_id);
        for(var  count =1 ; count<=index; count++){
            $('#'+motel_id+'-'+count).css('color','#ffcc00');
        }
    });
    // nhả chuột không đánh giá
    $(document).on('mouseleave','.rating',function(){
        var index = $(this).data("index");
        var motel_id = $(this).data('motel_id');
        var rating = $(this).data('rating');
        remove_background(motel_id);
        for(var  count =1 ; count<=rating; count++){
            $('#'+motel_id+'-'+count).css('color','#ffcc00');
        }
    });

    //click đánh giá sao
    $(document).on('click','.rating',function (){
        var index = $(this).data("index");
        var motel_id = $(this).data('motel_id');
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url:"{{url('insert-rating')}}",
            method:"POST",
            data:{
                // {{--index:index,--}}
                // {{--motel_id:motel_id,--}}
                // {{--_token:{{ csrf_token() }},--}}
                "_token": "{{ csrf_token() }}",
                'motel_id': motel_id,
                'index':index,
            },
            success:function(data) {
                if (data == 'done') {
                    alert("bạn đã đánh giá " + index + " trên 5 sao");
                } else {
                    alert("Đánh giá lỗi");
                }
            }
        });
    });
</script>


