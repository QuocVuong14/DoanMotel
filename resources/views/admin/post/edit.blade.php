@extends('admin.layouts.master')

@section('title_page') <h4>Chỉnh Sửa Phòng Trọ</h4> @endsection
@section('main')

<form method="post" action="/post/update/{{$post->motel_id}}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="edit_main">
        <div class="edit_left">
        <div class="form-group">
        <label for="">Tiêu đề</label>
        <input type="text" class="form-control" name="title" value="{{$post -> title}}">
    </div>
    <div class="form-group">
        <label for="">Chi tiết phòng trọ</label>
        <textarea class="form-control" id="" rows="4" name="des">{{$post -> information}}</textarea>
    </div>
    <div class="form-group">
        <label for="">Đối tượng cho thuê</label>
        <select class="form-control" id="" name="gender">
            <option value="1" @if($post -> gender_id == 1) selected @endif >Nam</option>
            <option value="2" @if($post -> gender_id == 2) selected @endif>Nữ</option>
            <option value="3" @if($post -> gender_id == 3) selected @endif>Nam và Nữ</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Loại phòng trọ</label>
        <select class="form-control" id="" name="cate">
            <option value="0" @if($post -> category_id == 0) selected @endif>Phòng trọ</option>
            <option value="1" @if($post -> category_id == 1) selected @endif>Nhà nguyên căn</option>
            <option value="2" @if($post -> category_id == 2) selected @endif>Căn hộ</option>
        </select>
    </div>
    <div class="input-group mb-3">
        <label for="">Gía phòng</label>
        <input style="margin-bottom: 20px;" type="text" class="form-control" value="{{$post -> price}}" aria-label="Recipient's username" aria-describedby="basic-addon2" name="price">
        {{-- <div class="input-group-append">--}}
        {{-- <span class="input-group-text" id="basic-addon2">@example.com</span>--}}
        {{-- </div>--}}
    </div>
    <div class="input-group mb-3">
        <label for="">Diện tích</label>
        <input type="text" class="form-control" value="{{$post -> acreage}}" aria-label="Recipient's username" aria-describedby="basic-addon2" name="area">
    </div>
        </div>
        <div class="edit_right">
        <div class="form-group">
        <label for="exampleFormControlFile1">Chọn hình ảnh</label>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($images as $key => $value)
                @if($key==0)
                <div class="item active">
                    <img src="{{$value->url}}" alt="New York">
                </div>
                @endif
                @if($key!=0)
                <div class="item">
                    <img src="{{$value->url}}" alt="New York">
                </div>
                @endif
                @endforeach

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--chojn anrh-->
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="att[]" multiple>
    </div>

    <div class="input-group mb-3">
        <label for="">Địa chỉ cũ : </label>
        <p>{{$post->address->street}}</p>
        <br>

    </div>





    <div class="input-group mb-3">
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

        </div>
    </div>





    <div class="input-group mb-3">
        <label for="">Đường</label>
        <input type="text" class="form-control" value="{{$post -> street}}" aria-label="Recipient's username" aria-describedby="basic-addon2" name="street">
    </div>
        </div>
    </div>


  
    <button class="bt_edit" type="submit"> Sửa bài đăng</button>

</form>
<style>
    .carousel-inner>.item>img,
    .carousel-inner>.item>a>img {
        height: 300px !important;
        width: 300px !important;
    }

    .carousel-control.left {
        display: none;
    }

    .carousel-control.right {
        right: 100px;
    }
    .edit_main {
        display: flex;
        margin: 20px;
    }
    .edit_left {
        width: 50%;
        padding-right: 20px;
    }
    .edit_right {
        width: 50%;
        padding-left: 20px;

    }
    .bt_edit {
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
    .bt_edit:hover {
        background-color: #0b5ed7;
        border-color: #0a58ca;
    }
</style>

@endsection


<script>
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

</script>
