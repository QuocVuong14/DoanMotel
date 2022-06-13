@extends('admin.layouts.master')

@section('title_page') <h4>Thêm Mới Phòng Trọ</h4> @endsection
@section('main')

{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




    <form method="post" action="/post/store" enctype="multipart/form-data">
        @csrf
        <div class="create_main" style=" margin: 20px">
            <div class="main_cr">
                <div class="create_left">
                    <div class="form-group">
                        <label for="">Tiêu đề</label>
                        <input type="text" class="form-control" name="title" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Chi tiết phòng trọ</label>
                        <textarea class="form-control" id="" rows="4" name="des"></textarea>
                    </div>
                    <div style="max-width: 200px; width: 100%;" class="form-group">
                        <label >Đối tượng cho thuê</label>
                        <select class="form-control" id="" name="gender">
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                            <option value="3">Nam và Nữ</option>
                        </select>
                    </div>
                    <div  style="max-width: 200px; width: 100%;" class="form-group">
                        <label for="">Loại phòng trọ</label>
                        <select class="form-control" id="" name="cate">
                            <option value="1">Phòng trọ</option>
                            <option value="2">Nhà nguyên căn</option>
                            <option value="3">Tìm người ở ghép</option>
                            <option value="4">Căn hộ</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label for="">Gía phòng</label>
                        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" name="price">

                    </div>
                    <div class="input-group mb-3">
                        <label for="">Diện tích</label>
                        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" name="area">
                    </div>
                </div>

                <div class="create_right">





                    <div class="input-group mb-3">
                        <div class="div-right div-right2 none">
                            <div class="error2">   </div>

                            <div style="margin-top: 20px" class="form-group row">
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

                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <label for="">Đường</label>
                        <input style="margin-bottom: 20px" type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" name="street">
                    </div>


                    <div>
                        <label for="">Iframe</label>
                        <input  type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" name="iframe">
                    </div>
                    <div class="form-group">
                        <label style="margin-top: 20px" for="exampleFormControlFile1">Chọn hình ảnh</label>
                        <input  type="file" class="form-control-file" id="exampleFormControlFile1" name="att[]" multiple >
                    </div>
                </div>
            </div>



            <button class="bt_dang" type="submit" style="margin-bottom: 30px; margin-top: 30px"> Đăng tin </button>
        </div>



   <!-- ================ -->






    </form>



@endsection

<style>
    .main_cr {
        display: flex;
    }
    .create_left {
        width: 50%;
        padding-right: 20px;
    }
    .create_right {
        width: 50%;
        padding-left: 20px;

    }
    .bt_dang {
        margin-bottom: 30px;
        margin-top: 30px;
        width: 250px;
        height: 40px;
        font-size: 16px;
        font-weight: 600;
        margin-left: 35%;
        background-color: #0d6efd;
        border: none;
        color: white;
        border-radius: 5px;
    }
    .bt_dang:hover {
        background-color: #0b5ed7;
        border-color: #0a58ca;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script>



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




</script>



