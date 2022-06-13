@extends('admin.layouts.master')
@section('title_page') <h4>Quản lí tài khoản</h4> @endsection
@section('main')


<form method="get" action="{{ route('exams.show') }}">
    <input type="text" name="name" >
    <button type="submit" class=""> Search </button>
</form>
    <!-- <a href="{{ route('exams.create')}}" type="button" class="btn btn-danger"> Create </a> -->




<!-- @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif -->

<table class="table table-striped">
    <tr>
        <td> STT </td>
        <td> Id </td>
        <td> Tên </td>
        <td> Email </td>
        <td> Địa chỉ </td>
        <td> Số điện thoại </td>
        <th>Trạng thái</th>
        <th>Đổi mật khẩu</th>

    </tr>

    @if(isset($exams))
        @foreach($exams as $key => $value)
            <tr>
                <th scope="row"> {{ $key+1 }} </th>
                <td> {{ $value -> id }} </td>
                <td> {{ $value -> name }} </td>
                <td> {{ $value -> email }} </td>
                <td> {{ $value -> address }} </td>
                <td> {{ $value -> phone }} </td>

                <td>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        @if( $value -> is_active == 0)
                            <label class="btn btn-secondary active" @endif @if( $value -> is_active != 0)
                            <label class="btn btn-secondary" @endif onclick="updateStatus(<?php echo $value->user_id ?>, 0)">
                                <input type="radio" name="options" id="option1" autocomplete="off"> Kích hoạt

                            </label>
                            @if( $value -> is_active == 1)
                                <label class="btn btn-secondary active" @endif @if( $value -> is_active != 1)
                                <label class="btn btn-secondary" @endif onclick="updateStatus(<?php echo $value->user_id ?>, 1)">
                                    <input type="radio" name="options" id="option2" autocomplete="off">Chặn
                                </label>
                    </div>
                </td>


                <td>
                    <div class="text-center">
                        <a href="" class="btn btn-default btn-rounded" data-toggle="modal" id="launch"
                           onclick="test(<?php echo $value->user_id ?>);" data-target="#modalLoginAvatar">
                            Đổi mật khẩu</a>
                    </div>
                </td>

            </tr>
        @endforeach
    @endif


    @if(isset($exam))
            @foreach($exam as $key => $value)
                <tr>
                    <th scope="row"> {{ $key+1 }} </th>
                    <td> {{ $value -> id }} </td>
                    <td> {{ $value -> name }} </td>
                    <td> {{ $value -> email }} </td>
                </tr>
            @endforeach
    @endif
</table>


<!--Modal: Login with Avatar Form-->
<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header">
                <h2>Đổi mật khẩu</h2>
            </div>
            <!--Body-->
            <div class="modal-body text-center mb-1">

                <h5 class="mt-1 mb-2" id="fullnamee"></h5>

                <div class="md-form ml-0 mr-0">
                    <input type="text" type="text" id="input_password"
                           class="form-control form-control-sm validate ml-0">
                    <label data-error="wrong" data-success="right" for="form29" class="ml-0"></label>
                </div>

                <div class="text-center mt-4">
                    <button class="btn btn-cyan mt-1" onclick="UpdatePassword()">Lưu</button>
                </div>
            </div>

        </div>
    </div>
</div>
<!--Modal: Login with Avatar Form-->


@endsection


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    var user_id = '';

    function test(id) {
        user_id = id;
    }

    function UpdatePassword() {
        var password = $('#input_password').val();

        console.log(password + "-" + user_id);
        $.ajax({
            url: "{{ url('/api/admin/account/update-password') }}",
            method: "PUT",
            data: {
                "_token": "{{ csrf_token() }}",
                'user_id': user_id,
                'password': password
            },
        }).done(function(res) {
            $('#modalLoginAvatar').hide();
            $('.modal-backdrop').hide();
            console.log(res);
        });
    }


    function updateStatus(id, status) {
        // console.log('id'+id);
        // console.log('stt'+status);

        
        $.ajax({
            url: "{{ url('/api/admin/account/update-status') }}",
            method: "PUT",

            data: {
                "_token": "{{ csrf_token() }}",
                'user_id': id,
                'status': status
            },

        }).done(function(res) {

            console.log(res);

        });

    }
    // function updateStatus(id, status) {
    //     $.ajax({
    //         url: "{{ url('/api/admin/post/update-status') }}",
    //         method: "PUT",
    //         data: {
    //             "_token": "{{ csrf_token() }}",
    //             'user_id': id,
    //             'status': status
    //         },
    //     }).done(function(res) {
    //         console.log(res);
    //     });
    // }

</script>


<style>
    .active {
        background-color: red;
        color: white;

    }



    .btn-secondary {

        width: 80px;
        height: 30px;
        font-size: 12px;

    }
</style>
