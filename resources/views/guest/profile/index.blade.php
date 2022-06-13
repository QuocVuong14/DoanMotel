@extends('guest.layouts.master_order')


@section('title') My Info @endsection
@section('main')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<style>
    .main{
        display: flex;
        padding: 0px 190px 50px 190px;
        height: 700px;
        
    }

    .div-left{
        border: 1px solid #99ccff;
        border-right: none;
        background-color: #fff;        
        width: 24%;
    }
    .div-right{
        border: 1px solid #99ccff;
        background-color: #fff;
        width: 76%;
        padding: 40px 40px 30px 30px;
    }

    .avatar{
        border-radius: 50%;
        width: 90px;
        height: 90px;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    .div-img{
        padding-top: 8%; 
    }

    .div-img label{
        font-family: "Times New Roman", Times, serif;
        font-size: 23px;
        margin-top: 22px;
        display: block;
        text-align: center;
        line-height: 150%;

    }
    .menu{
        margin-top: 15%;
        

    }

    .menu-item:hover{
        background-color: #66ffff;
    }

    .menu-item{
        border: 1px solid #99ccff;
        border-left: none;
        border-right: none;
        border-bottom: none;
        height: 60px;
        display: flex;
    }

    .menu3{
        border-bottom: 1px solid #99ccff;
    }
    .p-item{
        font-size: 22px;
        font-family: "Times New Roman", Times, serif;
        font-weight: lighter; 
        display: inline;
        margin-left: 9%;
        margin-top: 8%;
    }


    .active{
        background-color: red;
        width: 2px;
        height: 59px;
    }
    
    .col-form-label{
        font-size: 17px;
        font-weight: bold;
    }

    .form-control{
        height: 40px;
        font-size: 15px;
    }

    .row{
        margin-top: 30px;
    }

    select{
        height: 30px;
        width: 110px;
        font-size: 15px;
    }

    .bt-save{
        margin-top: 70px;
        margin-left: 40%;
        font-size: 15px;
    }

    .none{
        display: none;
    }

    .pass{
        width: 40%;
    }

    .div-right3 {
        padding: 90px 0px 50px 100px;
    }
    .div-right2{
        padding: 90px 0px 50px 100px;
    }

    .bt3{
        margin-left: 130px ;
    }

    .select-province{
        height: 40px;
        width: 250px;
        padding-left: 10px;
    }

    .house{
        height: 200px;
        width: 350px;
        border: 1px dotted red;
    }

    h3{
        color: red;
        font-style: italic;
    }

    input.show-hide-pass{
        height: 20px;
        width: 20px;
        margin-right: 10px;
        margin-left: 27%;
    }

</style>

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

<style>
    #file{
        display: none;
    }

    .bt-save-image{
        height: 25px;
        width: 50px;
        color: #fff;
        background-color: red;
        font-size: 12px;
        padding-top: 0px;
        border-radius: 10%;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 10px;
    }

    .bt-save-image:hover{
        background-color: green;
    }

</style>

<div class="main">

    <div class="div-left">
        
        <form method="post" action="{{ route('profile.uploadAvatar') }}" enctype="multipart/form-data">

            @csrf

            <div class="div-img" for="file-input">
                <label for="file">
                    <img id="output" for="file" class="avatar" src="<?php echo $user -> user_details -> avatar ?? '' ?>" alt="Avatar">

                    <input type="file" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])"
                        id="file" name="file" accept="image/png, image/jpeg, image/gif" >

                </label>
                <button type="submit" class="bt-save-image"> Lưu </button>

                <label id="lb-name"> {{ $user -> name }} </label>
            </div>
        </form>    

        <div class="menu">
            <div class="menu-item menu1" onclick="underLine(1);ShowOrHide(1)">
                <div class="line line1 active"></div>
                <p class="p-item">Chỉnh sửa thông tin </p>
            </div>

            <div class="menu-item menu2" onclick="underLine(2);ShowOrHide(2)">
                <div class="line line2"></div>
                <p class="p-item"> Địa chỉ </p>
            </div>

            <div class="menu-item menu3" onclick="underLine(3);ShowOrHide(3)">
                <div class="line line3"></div>
                <p class="p-item"> Đổi mật khẩu </p>
            </div>


        </div>

    </div>

    <div  class="div-right div-right1">

        <div class="error">
            @if($errors->any())
                <h3> {{$errors->first()}} </h3>
            @endif     
        </div>

    
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input id="name" type="text" class="form-control" name="name" value="<?php echo $user -> name ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input id="email" type="text" class="form-control" name="email" value="<?php echo $user -> email ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Birthday</label>
            <div class="col-sm-10">
                <input id="birthday" class="form-control" name="birthday"  value="<?php echo $user -> user_details -> birthday ?? '' ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input id="phone" type="text" class="form-control" name="phone"  value="<?php echo $user -> user_details -> phone ?? '' ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
                <select id="gender" name = "gender">
                    <?php if($user -> user_details -> gender ?? 1 == 1){ ?>

                        <option selected value="1">Nam</option>
                        <option value="0">Nữ</option>

                    <?php }else{ ?>

                        <option  value="1">Nam</option>
                        <option selected value="0">Nữ</option>

                    <?php } ?>

                </select>
                
            </div>
        </div>

        <button id="save-info" class="btn btn-danger bt-save" onclick="SaveInfo()"> Lưu </button>  
            
            
        
    </div>


    <!-- ================ -->
    

    <div class="div-right div-right3 none"> 
        <div class="error3"> </div>
                        
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label lbpass">Current Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control pass"  id="current-password">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label lbpass">New Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control pass"  id="new-password">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label lbpass">Repassword</label>
            <div class="col-sm-9">
                <input type="password" class="form-control pass"  id="re-password">
            </div>               
        </div>

        <div class="form-group row">
            <input type="checkbox" class="show-hide-pass" onclick="ShowOrHidePassword()"> <h4>Show Password</h4>
        </div>

        <button id="save-password" class="btn btn-danger bt-save bt3" onclick="SavePassword()"> Lưu </button>         
    </div>

    
    <!-- ================ -->
    <div class="div-right div-right2 none">
        <div class="error2">   </div> 
        
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label lbpass">Chọn tỉnh</label>
            <div class="col-sm-9">
                <select class="select-province province" name="province" onchange="District(value)">
                    
                    <option disabled selected hidden> 
                        <label> -- Chọn tỉnh (thành phố) -- </label>
                    </option>

                    @if(isset($provinces))
                        @foreach($provinces as $key => $province)
                            
                            <option 
                                value="{{ $province -> province_id }}"> 
                                <label>{{ $province -> province_name }} </label>
                            </option>

                        @endforeach
                    @endif

                </select>
            </div>
        </div>


        <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label lbpass">Chọn Quận</label>
            <div class="col-sm-9">
                <select class="select-province district" name="district" onchange="Ward(value)">
                    <option> 
                        <label> -- Chọn quận (huyện) -- </label>
                    </option>

                </select>
            </div>
        </div>


        <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label lbpass">Chọn Phường</label>
            <div class="col-sm-9">
                <select class="select-province ward"  name="ward">
                    
                    <option> 
                        <label> -- Chọn xã (phường) -- </label>
                    </option>

                </select>
            </div>
        </div>

        
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label lbpass">Số Nhà:</label>
            <div class="col-sm-9">
                <textarea rows="4" type="password" class="form-control house" name="house"> </textarea> 
            </div>
        </div>


        <button id="save-house" class="btn btn-danger bt-save bt3" onclick="SaveAddress()"> Lưu </button>         
    </div>


</div>


@endsection
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script>

    function ShowOrHidePassword() {
        var x = document.querySelectorAll(".pass");
        for (var i = 0; i < x.length; i++){
            if (x[i].type === "password") {
                x[i].type = "text";
            } else {
                x[i].type = "password";
            }
        }
    }

    function underLine(id){
        $('.line').removeClass('active');
        $('.line'+id).addClass('active');
    }

    function ShowOrHide(id){
        $('.div-right').addClass('none');
        $('.div-right'+id).removeClass('none');
    }

    
    // window.onload = function()
    // {
    //     Province();
    // };

    // https://vapi.vnappmob.com/province.html  -- API
    function District(id){
        $.ajax({
            url: "https://vapi.vnappmob.com/api/province/district/"+id,
            method: "get",          
            
            error: function (xhr, error) {
                alert(error + 'District');
            }
        }).done(function(responsive){
            var html = "";
            for(var i=0; i<responsive.results.length; i++){
                html += `<option value="`+responsive.results[i].district_id+`">`
                    + responsive.results[i].district_name+
                "</option>"
            }
            console.log(html);
            $('.district').html(html);
        });
    }

    function Ward(id){
        $.ajax({
            url: "https://vapi.vnappmob.com/api/province/ward/"+id,
            method: "get",          
            
            error: function (xhr, error) {
                alert(error + 'Ward');
            }
        }).done(function(responsive){    
            var html = "";
            for(var i=0; i<responsive.results.length; i++){
                html += `<option value="`+responsive.results[i].ward_id+`">`
                    + responsive.results[i].ward_name+
                "</option>"
            }
            console.log(html);
            $('.ward').html(html);
        });
    }


    function SaveInfo(){

        name = document.querySelector('#name').value;
        email = document.querySelector('#email').value;
        birthday = document.querySelector('#birthday').value;
        phone = document.querySelector('#phone').value;
        gender = document.querySelector('#gender').value;

        $.ajax({ 
            // url: "http://localhost:8001/profile/updateInfo",
            url: "{{url('/profile/updateInfo') }}",

            method: "put",
            data: {
                "_token": "{{ csrf_token() }}",
                "name" : name,
                "email" : email,
                "birthday" : birthday,
                "phone" : phone,
                "gender" : gender,
            },
            
            success: function(data){
                $('#lb-name').html(name);
                alertify.success('<h3>Chỉnh sửa thành công  !!!</h3>');
                $('.error').hide();
            },
            
            error: function (xhr, error) {
                location.reload(); 
            }
        }).done(function(responsive){
            console.log(responsive);
        });
    }



    function SaveAddress(){

        province = $('.province').find(":selected").text();
        district = $('.district').find(":selected").text();
        ward = $('.ward').find(":selected").text();
        house = $('.house').val();

        $.ajax({ 
            // url: "http://localhost:8001/profile/updateAddress",
            url: "{{ url('/profile/updateAddress') }}",
            method: "put",
            data: {
                "_token": "{{ csrf_token() }}",
                "province" : province,
                "district" : district,
                "ward" : ward,
                "house": house,
            },
            
            success: function(data){
                alertify.success('Chỉnh sửa thành công  !!!');
                $('.error2').hide();
            },
            
            error: function (xhr, error) {
                $('.error2').show();
                html = `<h3> Địa chỉ không được trống !!! </h3>`
                $('.error2').html(html);
                $('.error2').delay(4000).slideUp(500);
            }
        }).done(function(responsive){
            console.log(responsive);
        });
    }



    function SavePassword(){

        current_password = $('#current-password').val();
        new_password = $('#new-password').val();
        re_password = $('#re-password').val();

        $.ajax({ 
            // url: "http://localhost:8001/profile/updatePassword",
            url: "{{ url('/profile/updatePassword') }}",

            method: "put",
            data: {
                "_token": "{{ csrf_token() }}",
                "current_password" : current_password,
                "new_password" : new_password,
                "re_password" : re_password,
            },
            
            error: function (xhr, error) {
                $('.error3').show();  
         
            }
        }).done(function(responsive){
            console.log(responsive);
            if(responsive == 0){
                $('.error3').html('<h3>Chỉnh sửa thành công !!!</h3>');
                alertify.success('<h3>Chỉnh sửa thành công  !!!</h3>');
            }
            if(responsive == 1){
                $('.error3').html('<h3>Kkhông được để trống !!!</h3>');
            }
            if(responsive == 2){
                $('.error3').html('<h3>Nhập lại không đúng !!!</h3>');
            }
            if(responsive == 3){
                $('.error3').html('<h3>Mật khẩu sai !!!</h3>');
            }
        });
    }


</script>



<script type="text/javascript">
    $(() =>{
        $('.error').delay(4000).slideUp(500);
    });
</script>