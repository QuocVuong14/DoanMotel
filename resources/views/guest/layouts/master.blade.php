<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" href="/guest/assets/css/base.css">
	<link rel="stylesheet" href="/guest/assets/css/main.css">
	<link rel="stylesheet" href="/guest/assets/css/grid.css">
	<link rel="stylesheet" href="/guest/assets/css/responsive.css">
	<link rel="stylesheet" href="/guest/assets/fonts/fontawesome/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

	<!-- ////////////// -->
	<!-- JavaScript -->
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	<!-- Default theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
	<!-- Semantic UI theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
	<!-- Bootstrap theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

	<!-- 
		RTL version
	-->
	<!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/> -->

</head>

<style>
	.header{
		background: #000 !important;
	}
	.a-login{
		text-decoration: none;
		color: #fff;
	}

	.header__navbar-user-name{
		padding-top:2px;
	}
	.a-location{
		color: #fff;
		text-decoration: none;
		margin-top: 2px;
	}
	.a-location:hover{
		color: yellow !important;
		font-size: 15px !important;
	}
	#form-search{
		width: 80%;
		margin-left: 30px;
	}
</style>

<body>
	<div class="app">
		<!-- header -->
		<header class="header">
			<div class="grid wide">

				<!-- header navbar -->
				<nav class="header__navbar hide-on-mobile-tablet">

					<!-- header navbar left -->
					<ul class="header__navbar-list">
						<li class="header__navbar-item header__navbar-item-has-qr header__navbar-item--separate">
							<a target="_blank" class="a-location" href="{{ route('home.location ') }}"> Xem v??? tr?? c???a h??ng tr??n b???n ????? </a>

							<!-- <div class="header__qr">
								<img src="guest/assets/img/qrcode.png" alt="QR code" class="header__qr-img">
								<div class="header__qr-apps">
									<a class="header__qr-link">
										<img src="guest/assets/img/ch_play.png" alt="CH Play" class="header__qr-download-img">
									</a>
									<a class="header__qr-link">
										<img src="guest/assets/img/apstore.png" alt="Apstore" class="header__qr-download-img">
									</a>
								</div>
							</div> -->

						</li>
						<li class="header__navbar-item">
							<span class="header__navbar-item-no-pointer">K???t n???i</span>
							<a href="https://www.facebook.com/pham.long.9849912/" class="header__navbar-icon-link">
								<i class="header__navbar-icon fab fa-facebook"></i>
							</a>
							<a href="https://www.instagram.com/megatron_exe/" class="header__navbar-icon-link">
								<i class="header__navbar-icon fab fa-instagram"></i>
							</a>
						</li>
					</ul>
					<!--rnd header navbar left -->

					<!-- header navbar right -->
					<ul class="header__navbar-list">
						<li class="header__navbar-item header__navbar-item-has-notity">
							<a href="#" class="header__navbar-item-link">
								<i class="header__navbar-icon far fa-bell"></i>
								Th??ng b??o
							</a>
							<div class="header__notify">
								<header class="header__notify-header">
									<h3>Th??ng b??o m???i nh???n</h3>
								</header>
								<ul class="header__notify-list">

									<li class="header__notify-item header__notify-item-viewed">
										<a href="#" class="header__notify-link">
											<img src="" alt="" class="header__notify-img">
											<div class="header__notify-info">
												<div class="header__notify-name">Laptop c???c x???n</div>
												<div class="header__notify-descrition">X???n qu?? tr???i x???n lu??n</div>
											</div>
										</a>
									</li>

								</ul>
								<div class="header__notify-footer">
									<a href="#" class="header__notity-footer-link">Xem t???t c???</a>
								</div>
							</div>
						</li>
						<li class="header__navbar-item">
							<a href="#" class="header__navbar-item-link">
								<i class="header__navbar-icon far fa-question-circle"></i>
								Tr??? gi??p
							</a>
						</li>	

						<!-- <li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate">????ng k??</li>
							<li class="header__navbar-item header__navbar-item--strong">????ng nh???p</li> -->

							<li class="header__navbar-item header__navbar-user">

								@if( Auth::user() != null )
									@if( (Auth::user()-> user_details) != null )
										<img src="
											{{ Auth::user()-> user_details -> avatar }}
										" class="header__navbar-user-img">
									@endif

									<span class="header__navbar-user-name">  {{ Auth::user()-> name }}  </span>
									<ul class="header__navbar-user-menu">
										<li class="header__navbar-user-item">
											<a href="{{ route('profile.index') }}">T??i kho???n c???a t??i</a>
										</li>
										<!-- <li class="header__navbar-user-item">
											<a href="#">?????a ch??? c???a t??i</a>
										</li> -->
										<li class="header__navbar-user-item">
											<a href="{{ route('myorder.index') }}">????n mua</a>
										</li>

										<!-- <li class="header__navbar-user-item header__navbar-user-item--separate">
											<form  method="post" action="{{ route('logout') }}">
												@csrf
													</i><input type="submit" name="submit" value="Logout 1" />
											</form>
										</li> -->

										<li class="header__navbar-user-item header__navbar-user-item--separate">
											<a href="" onclick="logoutAjax()">????ng xu???t</a>
										</li>


								@else	
									<span class="header__navbar-user-name span-login"><a class="a-login" href="{{ route('login') }}">????ng nh???p</a>  </span>
									
								@endif


									


								</ul>
							</li>		
						</ul>
						<!--end header navbar right -->
					</nav>

					<!-- end header-navbar -->


					<!-- header-search -->
					<div class="header-with-search">
						
						<label for="header-bars-input" class="header__bars-btn">
							<i class="fas fa-bars header__bars-icon"></i>
						</label>
						
						<input type="checkbox" class="header__bars-input" id="header-bars-input">
						<div class="header__mobile">
							<!-- <div class="header__mobile-search-wrap">
								<div class="header__mobile-search">
									<input type="text" class="header__mobile-search-btn" placeholder="T??m ki???m s???n ph???m...">
									<button class="header__search-moblie-btn">
										<i class="fas fa-search header__search-mobile-btn-icon"></i>
									</button>
								</div>
							</div> -->
							<ul class="header__mobile-list">
								<li class="header__mobile-item">
									<a href="" class="header__mobile-link">Trang ch???</a>
								</li>

								<li class="header__mobile-item">
									<a href="" class="header__mobile-link">Gi??? h??ng</a>
								</li>
								
								<li class="header__mobile-item">
									<a href="" class="header__mobile-link">????ng k??</a>
								</li>

								<li class="header__mobile-item">
									<a href="" class="header__mobile-link">????ng nh???p</a>
								</li>

							</ul>
							<label for="header-bars-input">
								<i class="fas fa-times header__mobile-close"></i>
							</label>
							
						</div>

						<label for="header-bars-input" class="modal">
							<div class="modal__overlay"></div>
						</label>
						<!-- logo -->
						<div class="header__logo">
							<a href="{{ route('home.index') }}" class="header__logo-link">
								<img class="header__logo-img" src="/guest/assets/img/jackeylove.png" alt="">
							</a>
						</div>

						<!-- end logo -->

						<!-- search -->
						<form id="form-search" action="">
							<div class="header__search hide-on-mobile">
								<div class="header__search-input-wrap">
									<input id="value_search" type="text" class="header__search-input" placeholder="T??m ki???m s???n ph???m t???i ????y">

									<div class="header__search-history">
										<h3 class="header__search-history-heading">L???ch s??? t??m ki???m</h3>
										<ul class="header__search-history-list">
											<li class="header__search-history-item">
												<a href="#">Laptop g??i xinh</a>
											</li>
											<li class="header__search-history-item">
												<a href="#">Laptop g??i c???c xinh</a>
											</li>
										</ul>
									</div>
								</div>

								<button type="submit" class="header__search-btn" onclick="Search()">
									<i class="fas fa-search header__search-btn-icon"></i>
								</button>
						</form>

						</div>
						<!--end search -->

						<!-- cart -->
						<div class="header__cart">
							@if(Auth::user() != null)
							<div class="header__cart-wrap">
								<span class="header__cart-notice"> {{ session('countCart'); }} </span>

								<i class="fas fa-shopping-cart header__cart-icon"></i>
								<div class="header__cart-list">
									<img src="guest/assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
									<p class="header__cart-no-cart-msg">
										Ch??a c?? s???n ph???m
									</p>

									<h4 class="header__cart-heading">S???n ph???n ???? th??m</h4>
									<ul class="header__cart-list-item">

										@include('guest.components.cart.index')


									</ul>

									<ul class="header__cart-list-item2">

									</ul>

									<button class="btn btn--primary header__cart-view-cart">
										<a style="color: #fff; text-decoration: none;" href="{{ route('cart.index') }}"> Xem gi??? h??ng </a>
									</button>
								</div>
							</div>
							@endif
						</div>
						<!--end cart -->
					</div>

					<!--end header-search -->
				</div>
			</div>

			<!-- <ul class="header__sort-bar">
				<li class="header__sort-item">
					<a href="#" class="header__sort-link">Li??n quan</a>
				</li>

				<li class="header__sort-item header__sort-item--active">
					<a href="#" class="header__sort-link">M???i nh???t</a>
				</li>

				<li class="header__sort-item">
					<a href="#" class="header__sort-link">B??n ch???y</a>
				</li>

				<li class="header__sort-item">
					<a href="#" class="header__sort-link">Gi??</a>
				</li>
			</ul> -->

		</header>
		<!--end header -->

		<!-- container -->
		<div class="app__container">
			<div class="grid wide">
				<div class="row sm-gutter app__content">

					<!-- aside -->
					<div class="col l-2 m-0 c-0 categories-component">
				
						@include('guest.components.category.index')


					</div>
					<!-- end aside -->

					<!-- article -->
					<div class="col l-10 m-12 c-12">

						<!-- home filter -->
						<div class="home-filter hide-on-mobile-tablet">
							<span class="home-filter__label">
								S???p x???p theo
							</span>
							<button class="btn home-filter__btn">Ph??? bi???n</button>
							<button class="btn btn--primary home-filter__btn">M???i nh???t</button>
							<button class="btn home-filter__btn">B??n ch???y</button>

							<div class="select-input">
								<span class="select-input__label">Gi??</span>
								<i class="fas fa-chevron-down select-input__icon"></i>
								<ul class="select-input__list">
									<li class="select-input__item">
										<a href="#" class="select-input__link">Gi??: Th???p ?????n cao</a>
									</li>
									<li class="select-input__item">
										<a href="#" class="select-input__link">Gi??: Cao ?????n th???p</a>
									</li>

								</ul>
							</div>

							<!-- <div class="home-filter__page">
								<span class="home-filter__page-num">
									<span class="home-filter__page-current">1</span>/
									<span class="home-filter__page-total">14</span>
								</span>
								<div class="home-filter__page-control">
									<a href="#" class="home-filter__page-btn home-filter__page-btn--disable">
										<i class="fas fa-angle-left home-filter__page-icon"></i>
									</a>
									<a href="#" class="home-filter__page-btn">
										<i class="fas fa-angle-right home-filter__page-icon"></i>
									</a>
								</div>
							</div> -->
						</div>

						<!--end home filter -->
						
						<!-- <nav class="mobile-category">
							<ul class="mobile-category__list">
								<li class="mobile-category__item">
									<a href="#" class="mobile-category__link">M?? b???o hi???m LS2 ?????p</a>
								</li>
								<li class="mobile-category__item">
									<a href="#" class="mobile-category__link">M?? b???o hi???m</a>
								</li>
								<li class="mobile-category__item">
									<a href="#" class="mobile-category__link">M?? b???o hi???m</a>
								</li>
								<li class="mobile-category__item">
									<a href="#" class="mobile-category__link">M?? b???o hi???m</a>
								</li>
								<li class="mobile-category__item">
									<a href="#" class="mobile-category__link">M?? b???o hi???m</a>
								</li>
								<li class="mobile-category__item">
									<a href="#" class="mobile-category__link">M?? b???o hi???m</a>
								</li>
								<li class="mobile-category__item">
									<a href="#" class="mobile-category__link">M?? b???o hi???m</a>
								</li>
								<li class="mobile-category__item">
									<a href="#" class="mobile-category__link">M?? b???o hi???m</a>
								</li>
								<li class="mobile-category__item">
									<a href="#" class="mobile-category__link">M?? b???o hi???m</a>
								</li>
								<li class="mobile-category__item">
									<a href="#" class="mobile-category__link">M?? b???o hi???m</a>
								</li>
							</ul>
						</nav> -->
						<!-- main -->
                        @yield('main')

						<!--end main -->

					</div>
					<!--end article -->
				</div>
			</div>
		</div>
		<!--end container -->

		<!-- footer -->
		<footer class="footer">
			<div class="grid wide">
				<div class="grid__row">
					<div class="col l-2-4 m-4 c-6">
						<h3 class="footer__heading">Ch??m s??c kh??ch h??ng</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="#" class="footer-item__link">Trung t??m tr??? gi??p</a>
							</li>
							<li class="footer-item">
								<a href="#" class="footer-item__link"Shop Mall</a>
							</li>
							<li class="footer-item">
								<a href="#" class="footer-item__link">H?????ng d???n mua h??ng</a>
							</li>
						</ul>
					</div>
					<div class="col l-2-4 m-4 c-6">
						<h3 class="footer__heading">Gi???i thi???u</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="#" class="footer-item__link">Gi???i thi???u</a>
							</li>
							<li class="footer-item">
								<a href="#" class="footer-item__link">Tuy???n d???ng</a>
							</li>
							<li class="footer-item">
								<a href="#" class="footer-item__link">??i???u kho???n</a>
							</li>
						</ul>
					</div>
					<div class="col l-2-4 m-4 c-6">
						<h3 class="footer__heading">Theo d??i</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="https://www.facebook.com/pham.long.9849912/" class="footer-item__link">
									<i class="fab fa-facebook footer-item__icon"></i>
									Facebook
								</a>
							</li>
							<li class="footer-item">
								<a href="https://www.instagram.com/megatron_exe/" class="footer-item__link">
									<i class="fab fa-instagram footer-item__icon"></i>
									Instagram
								</a>
							</li>
							<!-- <li class="footer-item">
								<a href="#" class="footer-item__link">
									<i class="fab fa-linkedin footer-item__icon"></i>
								Linkedin</a>
							</li> -->
						</ul>
					</div>
					<div class="col l-2-4 m-4 c-6">
						<h3 class="footer__heading">Danh m???c</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="#" class="footer-item__link">Laptop Dell</a>
							</li>
							<li class="footer-item">
								<a href="#" class="footer-item__link">Laptop Asus</a>
							</li>
							<li class="footer-item">
								<a href="#" class="footer-item__link">Laptop Hp</a>
							</li>
						</ul>
					</div>
					<!-- <div class="col l-2-4 m-8 c-6">
						<h3 class="footer__heading">V??o c???a h??ng tr??n ???ng d???ng</h3>
						<div class="footer__download">
							<img src="guest/assets/img/qrcode.png" class="footer__download-qr">
							<div class="footer__download-apps">
								<a href="#" class="footer__download-app-link">
									<img src="guest/assets/img/ch_play.png" class="footer__download-app-img">
								</a>

								<a href="#" class="footer__download-app-link">
									<img src="guest/assets/img/apstore.png" class="footer__download-app-img">
								</a>
							</div>
						</div>

					</div> -->
				</div>
			</div>
			<div class="footer__bottom">
				<div class="grid wide">
					<p class="footer__text">@2021 - Shop Jackeylove</p>
				</div>
			</div>
		</footer>

		<!--end footer -->
	</div>
	
	</body>
	</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<script type="text/javascript">
	function logoutAjax(){
		if(confirm("Are you sure you want to logout")){
			$.ajax({
				url: "{{url('/logout')}}",
				type:'POST',
				data: {
					"_token": "{{ csrf_token() }}",
				},

				// headers: {
				// 	"_token": "{{ csrf_token() }}",
				// },
				
				success:function(data){
					location.reload(); 
				},

				error: function (xhr, error) {
					alert(error);
					console.debug(xhr); 
					console.debug(error);
				}
			})
		}
	}

</script>

<script>

    window.onload = function()
    {
        Categories(10);
    };

    function Categories(id){
        $.ajax({
			url: "{{ url('/exams/component') }}",
            method: "get",        
            success: function(data){
                // console.log(responsive);        
            },          
            error: function (xhr, error) {
                // alert(error + '11111');
            }
        }).done(function(responsive){
            $('.categories-component').html(responsive);
			// $('.categories-component').innerHTML = responsive;
        });
    }

</script>


<script>

    function All(id){
        $.ajax({
			url: "{{ url('/product/component') }}",
            method: "get",  
            data:{
                "category_id": id,
            },         
            success: function(data){
                // alert('All');       
            },          
            error: function (xhr, error) {
                alert(error + '11111');
            }
        }).done(function(responsive){
            $('.home-product').html(responsive);
			// $('.home-product').textContent = responsive;
            $('.item').removeClass('catgory-item--active');
            $('.category-item'+id).addClass('catgory-item--active');
        });
    }


	// function Search(){
	// 	value_search = $('#value_search').val();
    //     $.ajax({
    //         url: "http://127.0.0.1:8001/home/search",
    //         method: "get",  
    //         data:{
	// 			"value_search": value_search, 
    //         },         
    //         success: function(data){
    //             // alert('All');           
    //         },          
    //         error: function (xhr, error) {
    //             alert(error + '11111');
    //         }
    //     }).done(function(responsive){
	// 		console.log(responsive);
    //         $('.home-product').html(responsive);
    //     });
    // }

	$("#form-search").submit(function(e) {
		e.preventDefault();
		value_search = $('#value_search').val();
		$.ajax({
			url: "{{ url('/home/search') }}",

			method: "GET",  
			data:{
				"value_search": value_search, 
			},         
			success: function(data){
				// alert('All');           
			},          
			error: function (xhr, error) {
				alert(error + '11111');
			}
		}).done(function(responsive){
			console.log(responsive);
			$('.home-product').html(responsive);
		});



	});


</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>