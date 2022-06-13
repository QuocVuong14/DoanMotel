<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Phòng Trọ Đà Nẵng</title>
    <link rel="stylesheet" href="./guest/libs/Css/bootstrap.min.css" />
    <link rel="stylesheet" href="./guest/libs/Css/animate.css" />
    <link rel="stylesheet" href="./guest/libs/Css/all.css" />
    <link rel="stylesheet" href="./guest/libs/Css/slick-theme.css" />
    <link rel="stylesheet" href="./guest/libs/Css/slick.css" />
    <link rel="stylesheet" href="./guest/Assets/fontawesome-free-6.0.0-web/fontawesome-free-6.0.0-web/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="./guest/Assets/Css/style.css" />
    <link rel="stylesheet" href="./guest/Assets/Css/responsive.css" />

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
                        <p class="header-user-name">Phòng trọ Đà Nẵng xin chào
                            @if( Auth::user()!= null)
                            {{ Auth::user()->name }}
                            @else
                            xin chào
                            @endif
                            !
                        </p>
                        @if(session('role') == 1 || session('role')== 2)
                        <a href="/post/create" class="btn header-user-btn btn-secondary" role="button" aria-pressed="true">Đăng tin mới</a>
                        @else
                        <a href="/login" class="btn header-user-btn btn-secondary" role="button" aria-pressed="true">Đăng tin mới</a>
                        @endif

                        @if( Auth::user() != null )
                        <a href="/post" class="btn header-user-btn btn-primary" role="button" aria-pressed="true">Quản lý phòng trọ</a>
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
                                <img src="./Assets/image/logo.png" alt="logo">
                            </div>
                            <div class="menu__mobile__authen">
                                <ul>
                                    <li><a href="#"> Đăng Nhập </a></li>
                                    <li><a href="#">Đăng Ký</a></li>
                                </ul>
                            </div>
                            <div class="menu__mobile__list">
                                <ul>
                                    <li><a href="#"> Trang Chủ </a></li>

                                    <li><a href="#"></a></li>
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
                            <a href="home?category_id={{$value->id}}" class="header-menu-link"> {{$value->names}}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="filter">
            <div class="container">
                <div class="row">
                    <form action="" method="get">
                        <div class="filter-body">
                            <div class="filter-item filter-type">
                                <select name="category_id" id="category_id" class="form-control">
                                    <option selected disabled>---- Loại phòng ----</option>
                                    @foreach($categories as $value )
                                    <option value="{{$value->id}}">{{$value->names}}</option>
                                    @endforeach
                                    <!-- <option value="">Nhà nguyên căn</option>
                                <option value="">Căn hộ</option>
                                <option value="">Ở ghép</option> -->
                                </select>
                            </div>

                            <div class="filter-item filter-price">
                                <select name="price" id="price" class="form-control">
                                    <option selected disabled>---- Giá tiền ----</option>
                                    <option value="1">Dưới 1 triệu</option>
                                    <option value="2">Từ 1 triệu đên 2 triệu</option>
                                    <option value="3">Từ 2 triệu đên 3 triệu</option>
                                    <option value="4">Từ 3 triệu đên 5 triệu</option>
                                    <option value="5">Từ 5 triệu đên 7 triệu</option>
                                    <option value="6">Từ 7 triệu trở lên</option>
                                </select>
                            </div>
                            <div class="filter-item filter-acreage">
                                <select name="acreage" id="acreage" class="form-control">
                                    <option selected disabled>---- Diện tích ----</option>
                                    <option value="1">Dưới 20m²</option>
                                    <option value="2">Từ 20m² đên 30m²</option>
                                    <option value="3">Từ 30m² đên 50m²</option>
                                    <option value="4">Từ 50m² đên 70m²</option>
                                    <option value="5">Từ 70m² trở lên</option>
                                </select>
                            </div>
                            <button class="filter-item filter-submit btn btn-primary">Tìm kiếm</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <h1 class="page-header-title">Cho Thuê Phòng Trọ Đà Nẵng, Giá Rẻ, Tiện Nghi, Mới Nhất 2022</h1>
                    <p class="page-header-description">Cho thuê phòng trọ Đà Nẵng, tất cả tin đăng nhà trọ Đà Nẵng mới nhất năm
                        2022: giá rẻ, không chung chủ, WC riêng. Tìm phòng trọ Đà Nẵng : diện tích, mức giá khác nhau.</p>
                </div>
            </div>
        </section>
        <section class="location">
            <div class="container">
                <div class="row">
                    <ul class="location-destrict">
                        @foreach($quan as $value)
                        <li class="location-destrict-item">
                            <a href="?district_id={{$value->district_id}}" class="location-destrict-link">{{$value->district_name}}<span> ({{$value->sl}})</span></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-8 p-0">
                        <section class="section-listing">
                            <div class="section-listing-top">
                                <h2 class="section-listing-title">Danh sách tin đăng</h2>
                                <span class="section-listing-update-time">
                                    cập nhật :
                                    <time title="Thứ 6, 06:27 15/04/2022">06:27 15/04/2022</time>
                                </span>
                            </div>
                            <div class="section-listing-main ">
                                <p class="section-listing-sort">Sắp xếp:</p>
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link section-listing-button-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Mặc định</button>
                                    </li>
                                    <!-- <li class="nav-item" role="presentation">
                                        <button class="nav-link section-listing-button-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Mới nhất</button>
                                    </li> -->
                                     <li class="nav-item" role="presentation">
                                     <button class="nav-link section-listing-button-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                    aria-selected="false">Đánh giá</button>
                                   </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <ul class="section-listing-list">
                                            @foreach($motels as $motel)

                                            <div class="section-listing-item">

                                                <img src="{{$motel->motel_image->Image->first()->url}}" alt="" class="section-listing-item-img">
                                                <div class="section-listing-info">
                                                    <a href="/home/detail/{{$motel['id']}}">
                                                        <h5 class="section-listing-info-title">
                                                            {{$motel -> title }}
                                                        </h5>
                                                    </a>
                                                    <div class="section-listing-info-meta">
                                                        <p class="section-listing-info-price"> {{number_format($motel->price)}} VNĐ</p>
                                                        <p class="section-listing-info-acreage">{{$motel->acreage}} m²</p>
                                                        <p class="section-listing-info-location thunho">{{$motel->address->street}}</p>
                                                        <span class="section-listing-info-time">{{ $motel->created_at->format('d/n/Y') }}</span>
                                                    </div>
                                                    <p class="section-listing-info-desc thunho3">
                                                        {{$motel->information}}
                                                    </p>
                                                    <div class="section-listing-info-author">
                                                        <img src="{{$motel->user->user_details->avatar}}" alt="" class="section-listing-info-author-avt">
                                                        <p  class="section-listing-info-author-name">{{$motel->user->name}}</p>
                                                        @if($motel->status == 0)
                                                        <p style="padding: 0;margin: 0 0 0 20px;color: #8a8d91;"> Còn phòng</p>
                                                        @else
                                                        <p style="padding: 0;margin: 0 0 0 20px;color: #8a8d91;">Hết Phòng</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <ul class="section-listing-list">
                                            <div class="section-listing-item">
                                                <img src="./Assets/image/nha3.jpg" alt="" class="section-listing-item-img">
                                                <div class="section-listing-info">
                                                    <h5 class="section-listing-info-title">
                                                        Cho thuê phòng trọ sạch đẹp, khu an ninh tốt. Phòng rộng 24m2, Giá thuê 2,7…
                                                    </h5>
                                                    <div class="section-listing-info-meta">
                                                        <p class="section-listing-info-price">1.8 triệu/tháng</p>
                                                        <p class="section-listing-info-acreage">18m²</p>
                                                        <p class="section-listing-info-location">Quận Hải Châu, Đà Nẵng</p>
                                                        <span class="section-listing-info-time">1 ngày trước</span>
                                                    </div>
                                                    <p class="section-listing-info-desc">
                                                        Cho thuê phòng cho trọ ở q Hải Châu, thoáng mát sạch đẹp, yên tĩnh giá chỉ từ 1,7 tr/th/ng
                                                        phòng nhỏ. 1tr8/th/1ng, 2tr/th/2ng có Tolet, bếp nấu, 2,3tr / th/ 2 ng có
                                                    </p>
                                                    <div class="section-listing-info-author">
                                                        <img src="./Assets/image/user.png" alt="" class="section-listing-info-author-avt">
                                                        <p class="section-listing-info-author-name">your name</p>
                                                    </div>
                                                </div>
                                            </div>
                                     
                                            
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <ul class="section-listing-list">
                                            
                                        @foreach($data as $motelrating)
                                            <div class="section-listing-item">
                                                <img src="{{$motelrating->motel_image->Image->first()->url}}" alt="" class="section-listing-item-img">
                                                <div class="section-listing-info">
                                                <a href="/home/detail/{{$motelrating['id']}}">
                                                    <h5 class="section-listing-info-title">
                                                       {{$motelrating->title}}
                                                    </h5>
                                                </a>
                                                    <div class="section-listing-info-meta">
                                                        <p class="section-listing-info-price">{{number_format($motelrating->price)}} VNĐ</p>
                                                        <p class="section-listing-info-acreage">{{$motelrating->acreage}} m²</p>
                                                        <p class="section-listing-info-location">{{$motelrating->address->street}}</p>
                                                        <span class="section-listing-info-time">{{ $motelrating->created_at->format('d/n/Y') }}</span>
                                                    </div>
                                                    <p class="section-listing-info-desc thunho3">
                                                    {{$motelrating->information}}
                                                    </p>
                                                    <div class="section-listing-info-author">
                                                        <img src="{{$motelrating->user->user_details->avatar}}" alt="" class="section-listing-info-author-avt">
                                                        <p class="section-listing-info-author-name">{{$motelrating->user->name}}</p>
                                                        @if($motelrating->status == 0)
                                                        <p style="padding: 0;margin: 0 0 0 20px;color: #8a8d91;"> Còn phòng</p>
                                                        @else
                                                        <p style="padding: 0;margin: 0 0 0 20px;color: #8a8d91;">Hết Phòng</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section-navigation">
                            <nav aria-label="Page navigation example">

                                @if ($motels->lastPage() > 1)
                                <ul class="pagination pagination-lg justify-content-center">
                                    <li class="page-item{{ ($motels->currentPage() == 1) ? ' disabled' : '' }}">
                                        <a class="page-link" href="{{  $currentURL . $motels->currentPage()-1 }}">Previous</a>
                                    </li>
                                    @for ($i = 1; $i <= $motels->lastPage(); $i++)
                                        <li class="page-item{{ ($motels->currentPage() == $i) ? ' active' : '' }}">
                                            <a class="page-link" href="{{ $currentURL . $i }}">{{ $i }}</a>
                                        </li>
                                        @endfor
                                        <li class="page-item{{ ($motels->currentPage() == $motels->lastPage()) ? ' disabled' : '' }}">
                                            <a class="page-link" href="{{  $currentURL . $motels->currentPage()+1 }}">Next</a>
                                        </li>
                                </ul>
                                @endif
                            </nav>
                        </section>
                    </div>
                    <div class="col-md-4">
                        <section class="section-aside">
                            <div class="section-sublink">
                                <h2 class="section-sublink-title"> Xem theo giá</h2>
                                <ul class="section-sublink-price">
                                    <li class="section-sublink-item">
                                        <a href="?price=1" class="section-sublink-link">
                                            Dưới 1 triệu
                                        </a>
                                    </li>
                                    <li class="section-sublink-item">
                                        <a href="?price=2" class="section-sublink-link">
                                            Từ 1 - 2 triệu
                                        </a>
                                    </li>
                                    <li class="section-sublink-item">
                                        <a href="?price=3" class="section-sublink-link">
                                            Từ 2 - 3 triệu
                                        </a>
                                    </li>
                                    <li class="section-sublink-item">
                                        <a href="?price=4" class="section-sublink-link">
                                            Từ 3 - 5 triệu
                                        </a>
                                    </li>
                                    <li class="section-sublink-item">
                                        <a href="?price=5" class="section-sublink-link">
                                            Từ 5 - 7 triệu
                                        </a>
                                    </li>
                                    <li class="section-sublink-item">
                                        <a href="?price=6" class="section-sublink-link">
                                            Trên 7 triệu
                                        </a>
                                    </li>


                                </ul>
                            </div>
                            <div class="section-sublink">
                                <h2 class="section-sublink-title"> Xem theo diện tích</h2>
                                <ul class="section-sublink-acreage">
                                    <li class="section-sublink-item">
                                        <a href="?acreage=1" class="section-sublink-link">
                                            Dưới 20m<sup>2</sup>
                                        </a>
                                    </li>
                                    <li class="section-sublink-item">
                                        <a href="?acreage=2" class="section-sublink-link">
                                            Từ 20 - 30m<sup>2</sup>
                                        </a>
                                    </li>
                                    <li class="section-sublink-item">
                                        <a href="?acreage=3" class="section-sublink-link">
                                            Từ 30 - 50m<sup>2</sup>
                                        </a>
                                    </li>
                                    <li class="section-sublink-item">
                                        <a href="?acreage=4" class="section-sublink-link">
                                            Từ 50 - 70m<sup>2</sup>
                                        </a>
                                    </li>
                                    <li class="section-sublink-item">
                                        <a href="?acreage=5" class="section-sublink-link">
                                            Trên 70m<sup>2</sup>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                            <section class="section-newPost">
                                <h2 class="section-newPost-title">Tin Mới Đăng</h2>
                                <ul class="section-newPost-list">
                                    @foreach($motelnews as $new)
                                    {{-- {{dd($new->first()->id)}}--}}
                                    <li class="section-newPost-item">
                                        <a href="/home/detail/{{$new['id']}}" class="section-newPost-link">
                                            <div class="section-newPost-img">
                                                <img style="width: 60px" src="{{$new->motel_image->Image->first()->url}}"></img>
                                            </div>
                                            <div class="section-newPost-info">
                                                <h4 class="section-newPost-name"> {{$new->title}} </h4>
                                                <div class="section-newPost-sub">
                                                    <p class="section-newPost-price">{{number_format($new->price)}} vnđ/tháng</p>
                                                    <time class="section-newPost-time">{{$new->created_at}}</time>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    @endforeach

                                </ul>
                            </section>
                        </section>
                    </div>
                </div>
            </div>

        </section>
        <section class="section_about">
            <div class="container">
                <div class="row">
                    <div class="section_about_main">

                        <h2 class="section_about_title">
                            CHO THUÊ PHÒNG TRỌ NHÀ TRỌ TẠI ĐÀ NẴNG
                        </h2>
                        <div class="section_about_box">
                            <p>
                                Hiện có 895 tin đăng cho thuê phòng trọ Đà Nẵng để bạn có thể tự do lựa chọn theo đúng các nhu cầu về
                                giá, an ninh, diện tích phòng. Với kinh nghiệm lâu năm của mình, chúng tôi tự tin có thể giúp bạn trong
                                việc tìm thuê nhà trọ Đà Nẵng, phòng trọ ở Đà Nẵng và trên cả nước. Dưới đây là một số chia sẻ xoay
                                quanh vấn đề thuê nhà trọ Đà Nẵng mà các bạn sinh viên, người đi thuê phòng trọ nên biết để hạn chế tối
                                thiểu rủi ro.
                            </p>
                            <h3>
                                <h3>Thực trạng vấn đề tìm thuê phòng trọ tại Đà Nẵng</h3>
                            </h3>
                            <p>Đà Nẵng luôn có vị thế là thành phố đi đầu về phát triển kinh tế, du lịch vì vậy lượng người dân nhập
                                cư từ các tỉnh thành khác là rất đông, từ đó kéo theo nhu cầu&nbsp;<strong>tìm phòng trọ</strong>, tìm
                                nhà ở, căn hộ để sinh sống, an cư lạc nghiệp.&nbsp;Vì có lượng nhu cầu cao nên việc tìm thuê nhà trọ tại
                                Đà Nẵng đôi khi là khó khăn với những người mới, đặc biệt là sinh viên muốn tìm phòng trọ với tiêu
                                chí&nbsp;<strong>giá rẻ, gần trường</strong>, thì còn khó hơn vì chưa có kinh nghiệm với việc tìm phòng,
                                nhiều trường hợp đi thuê phòng trọ còn bị lừa đảo rất đáng tiếc.</p>
                            <p class="section_about_img">
                                <img src="./Assets/image/phong-tro-phongtro123_1617613181.png" alt="">
                            </p>
                            <h3>Cách để thuê nhà trọ Đà Nẵng, phòng trọ giá rẻ Đà Nẵng</h3>
                            <p>Nhu cầu tìm&nbsp;<strong>phòng trọ Đà Nẵng</strong>&nbsp;luôn vượt lượng cung, đặc biệt là các tiêu chí
                                giá rẻ,&nbsp;<strong>phòng trọ đẹp</strong>, an ninh... Đầu tiên muốn thuê được nhà trọ đúng nhu cầu thì
                                phải xem nhiều nơi, nhiều phòng trọ để có thể chọn lựa, nhưng việc chạy xe ngoài đường để tìm kiếm phòng
                                trọ cho thuê tại Đà Nẵng thì tốn rất nhiều thời gian cũng như công sức. Vậy để đạt được mục đích 1 cách
                                dễ dàng thì người đi thuê nhà nên lên mạng tra cứu, tìm hiểu thông tin trước, ví dụ như website
                                phongtro123.com chuyên dịch vụ tìm phòng trọ, nhà trọ cho thuê tại Đà Nẵng và phòng trọ cả nước. Sau khi
                                đã tham khảo, lựa chọn được&nbsp;<strong>phòng trọ đúng nhu cầu</strong>&nbsp;(xem bài đăng có hình ảnh,
                                video, giới thiệu thông tin phòng trọ) thì có thể liên lạc với&nbsp;<strong>chủ nhà trọ</strong>&nbsp;để
                                thuê nhà rất dễ dàng và thuận tiện.</p>
                            <h3>Mẹo tìm nhà trọ Đà Nẵng, phòng trọ Đà Nẵng trên mạng online.</h3>
                            <p>Thông tin online thì rất nhiều và nên được chọn lọc kĩ để tránh mất thời gian và lừa đảo. Người thuê
                                nhà nên chọn các đơn vị có&nbsp;<strong>uy tín, kinh nghiệm lâu năm</strong>&nbsp;để xem. Ví dụ như
                                website&nbsp;PhongTroDaNang, đơn vị chuyên cung cấp dịch vụ&nbsp;đăng tin cho thuê nhà
                                trọ,&nbsp;<strong>cho thuê phòng&nbsp;trọ</strong>&nbsp;tại các tỉnh thành lớn trên cả nước (phòng trọ
                                tp.hcm, phòng trọ hà nội, đà nẵng,...).</p>
                            <p>Hãy luôn tỉnh táo, sáng suốt đọc kỹ thông tin phòng để lựa chọn được phòng trọ theo đúng các tiêu chí
                                (giá rẻ, gần trường, gần cơ quan, diện&nbsp;tích rộng, phòng đẹp, mới...). Việc tìm phòng
                                trọ,&nbsp;<strong>nhà trọ&nbsp;Đà Nẵng </strong>sẽ không còn khó khăn như bạn nghĩ, chúc các bạn may
                                mắn.</p>
                        </div>
                        <h4 class="section_about_more">
                            Xem Thêm
                        </h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="contact_main">
                        <h3 class="contact_heading">
                            Tại sao lại chọn PhongTroDaNang?
                        </h3>
                        <p class="contact_info">Chúng tôi biết bạn có rất nhiều lựa chọn, nhưng PhongTroDaNang tự hào là trang web đứng top google về các từ khóa: <a href="/cho-thue-phong-tro" title="Cho thuê phòng trọ">
                                <strong>cho thuê phòng trọ</strong></a>, <strong>nhà trọ</strong>, <a href="/nha-cho-thue" title="Cho thuê nhà nguyên căn"><strong>thuê nhà nguyên căn</strong></a>, <a href="/cho-thue-can-ho" title="Cho thuê căn hộ"><strong>cho thuê căn hộ</strong></a>, <a href="/tim-nguoi-o-ghep" title="Tìm người ở ghép"><strong>tìm người ở ghép</strong></a>, <a href="/cho-thue-mat-bang" title="Cho thuê mặt bằng"><strong>cho thuê mặt bằng</strong></a>...Vì vậy tin của bạn đăng trên website
                            sẽ tiếp cận được với nhiều khách hàng hơn, do đó giao dịch nhanh hơn, tiết kiệm chi phí hơn</p>
                        <h5 class="contact_title">Chi phí thấp, hiệu quả tối đa</h5>
                        <div class="contact_star">
                            <span class="contact_star_icon"></span>
                        </div>
                        <p class="contact_testimonial">
                            "Trước khi biết website PhongtroĐN, mình phải tốn nhiều công sức và chi phí cho việc đăng tin cho thuê: từ việc phát tờ rơi, dán giấy, và đăng lên các website khác nhưng hiệu quả không cao. Từ khi biết website PhongTroDaNang, mình đã thử đăng tin lên và đánh giá hiệu quả khá cao trong khi chi phí khá thấp, không còn tình trạng phòng trống kéo dài."
                            <br>

                        </p>
                        <h6 class="contact_title">Bạn đang có phòng trọ / căn hộ cho thuê?</h6>
                        <p class="text-center">Không phải lo tìm người cho thuê, phòng trống kéo dài</p>
                        <a class="btn contact_btn" style="padding: 10px 30px;" rel="nofollow" href="https://phongtro123.com/quan-ly/dang-tin-moi.html">Đăng tin ngay</a>
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
                            @foreach($categories as $value )

                            <li class="footer-top-item">
                                <a href="/home?category_id={{$value->id}}" class="footer-top-link">{{$value->names}}</a>
                                <span class="footer-top-arrowDown"></span>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="footer-main">
                        <div class="footer-main-col">
                            <a class="footer-main-logo">
                                <img src="{{asset('admin/imgs/logopt2.jpg')}}" alt="" srcset="">
                            </a>
                            <div class="footer-main-desc">
                                PhongtroĐN tự hào có lượng dữ liệu bài đăng lớn nhất trong lĩnh vực cho thuê phòng trọ.
                            </div>
                        </div>
                        <div class="footer-main-col">
                            <span class="footer-main-col-title">Về PHONGTROĐN</span>
                            <ul class="footer-main-col-menu">
                                <li class="footer-main-col-item">
                                    <a href="#" class="footer-main-col-link">Trang chủ</a>
                                </li>
                                <li class="footer-main-col-item">
                                    <a href="#" class="footer-main-col-link">Giới thiệu</a>
                                </li>

                                <li class="footer-main-col-item">
                                    <a href="#" class="footer-main-col-link">Liên hệ</a>
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
            <div class="bottom-bar">
                <div class="bottom-bar-wrap">
                    <div class="bottom-bar-item">
                        <a href="#">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>
                                <a href="/home">Trang chủ</a>

                            </span>
                        </a>
                    </div>
                    <!-- <div class="bottom-bar-item">
                        <a href="#">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <span>
                                Yêu thích
                            </span>
                        </a>
                    </div> -->
                    <div class="bottom-bar-item">
                        @if(session('role') == 1 || session('role')== 2)
                        <a href="/post/create">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            <span>
                                Đăng tin
                            </span>
                        </a>
                        @else
                        <a href="/login">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            <span>
                                Đăng tin
                            </span>
                        </a>
                        @endif
                    </div>

                    <div class="bottom-bar-item">
                        @if( Auth::user() != null )
                        <a href="/post">
                            <i class="fa fa-file" aria-hidden="true"></i>
                            <span>
                                Quản lý tin
                            </span>
                        </a>
                        @else
                        <a href="/login">
                            <i class="fa fa-file" aria-hidden="true"></i>
                            <span>
                                Quản lý tin
                            </span>
                        </a>
                        @endif
                    </div>
                    <div class="bottom-bar-item">
                        <a href="#">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>
                                Cá nhân
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </footer>
    </main>
    <style>
        @media (max-width: 420px) {}
    </style>

    <script src="./guest/libs/Js/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="./guest/libs/Js/bootstrap.min.js"></script>
    <script src="./guest/libs/Js/all.js"></script>
    <script src="./guest/libs/Js/slick.min.js"></script>
    <script src="./guest/libs/Js/wow.js"></script>
    <script src="./guest/Assets/Js/main.js"></script>
    <style>
        .thunho {
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 0 5px;
            line-height: 20px;
            -webkit-line-clamp: 1;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            white-space: unset !important;
        }
        .thunho3 {
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 0 5px;
            line-height: 20px;
            -webkit-line-clamp: 3;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            white-space: unset !important;
        }
    </style>
</body>

</html>
