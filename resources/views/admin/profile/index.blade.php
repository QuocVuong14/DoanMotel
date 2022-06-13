@extends('admin.layouts.master')
@section('title_page') <h4>Chỉnh sửa thông tin cá nhân</h4> @endsection
@section('main')
<style>
    

    .div-img {
    
        text-align: center;
    }
    .div-img img {
        width: 100px;
        height: 100px;
        margin-bottom: 15px;
        text-align: center;
        margin-right: 60px;
    }
</style>

<div class="main">
<form method="post" action="{{route('profile.update')}}" enctype="multipart/form-data">
    <div class="div-left">
        
       

            @csrf

            <div class="div-img" for="file-input" >
                <label for="file">
                    <img id="output" for="file" class="avatar" src="<?php echo $user->avatar ?? '' ?>" alt="Avatar">

                    <input type="file" 
                        id="file" name="file" accept="image/png, image/jpeg, image/gif" >

                </label>
        

                <label id="lb-name"></label>
            </div>
    </div>
    <div style="margin-top: 20px" class="div-right div-right1">
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Tên</label>
            <div class="col-sm-10">
                <input id="name" type="text" class="form-control" name="name" value="">
            </div>
        </div>
        <!-- <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input id="email" type="text" class="form-control" name="email" value="">
            </div>
        </div> -->
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Số điện thoại</label>
            <div class="col-sm-10">
                <input id="phone" type="text" class="form-control" name="phone"  value="">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Giới tính</label>
            <div class="col-sm-10">
                <select id="gender" name = "gender">
                   
                        <option selected value="1">Nam</option>
                        <option value="0">Nữ</option>
                </select>
                
            </div>
        </div>

    </div>


    <!-- ================ -->
    

    
    <!-- ================ -->
    <div class="div-right div-right2 none">
        <div class="error2">   </div> 
        

  


        <button style="margin-left: 45%; margin-bottom: 30px" id="save-house" class="btn btn-danger bt-save bt3" > Lưu </button>         
    </div>
    </form>  

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



   


   


</script>



<script type="text/javascript">
    $(() =>{
        $('.error').delay(4000).slideUp(500);
    });
</script>