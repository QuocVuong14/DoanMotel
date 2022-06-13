@extends('admin.layouts.master')

@section('title_page') <h4>Quản lí bài đăng</h4>
<!-- <a  href="/post/create" class=" btn btn-info"> Đăng tin mới</a> -->
@endsection

@section('main')
@if(session('role')== 2)
<a style="margin:30px" href="/post/create" class=" btn btn-info"> Đăng tin mới</a>
@endif
    <table class="table  table-hover general-table">
        <thead>
        <tr>
            <th> STT </th>
            <th class="hidden-phone">Tiêu đề</th>
            <th>Thông tin</th>
            <th>Hình ảnh</th>
            <th style="width: 200px;">Địa chỉ</th>
            <th>Gía</th>
            <th>Diện tích</th>
            <th>Loại phòng</th>
            <th>Đối tượng </th>
            @if(session('role') == 1)
            <th> Duyệt bài</th>
            @endif
            @if(session('role')== 2)
                <th>Thao tác</th>
            @endif
            @if(session('role')== 2)
                <th>Trạng thái</th>
            @endif
        </tr>
        </thead>
        <tbody>

        @if(isset($postsArr))
            @foreach($postsArr as $key => $value)
{{--      {{dd($value->status)}}--}}
                <tr class="tr-<?php echo $value->id ?>">
                    <td><a href="#" scope="row"> {{ $key+1 }}</a></td>
                    <td class="hidden-phone">{{ $value -> title }}</td>
                    <td>{{ $value -> information }} </td>
                    <td>
                        <img style="width: 100px; height: 100px;" src="{{ asset($value->url) }}" alt="Image"/>
                    </td>
                    <td> {{ $value -> street }}, {{ $value -> ward_name }}, {{ $value -> district_name }}  </td>
                    <td>{{ $value -> price }}</td>
                    <td>{{ $value -> acreage }} </td>
                    <td>{{ $value -> names }} </td>
                    <td>{{ $value -> name }} </td>
                    @if(session('role') == 1)
                    <td>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            @if( $value -> is_active == 0)
                                <label class="btn btn-secondary active"
                            @endif
                            @if( $value -> is_active != 0)
                                <label class="btn btn-secondary"
                           @endif onclick="updateStatus(<?php echo $value->id ?>, 0)">

                                    <input type="radio" name="options" id="option1" autocomplete="off"> Duyệt

                                </label>

                            @if( $value -> is_active == 1)
                                <label class="btn btn-secondary active"
                            @endif
                            @if( $value -> is_active != 1)
                                <label class="btn btn-secondary"
                           @endif onclick="updateStatus(<?php echo $value->id ?>, 1)">
                                    <input type="radio" name="options" id="option2" autocomplete="off">Ẩn
                                </label>

                        </div>
                    </td>
                    @endif

                    @if(session('role')==2)
                        <td>
                            <a href="/post/edit/<?php echo $value->id ?>" class=" btn btn-info" style="margin-bottom: 15px;margin-right: 15px;width: 70px;"> Sửa</a>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Có chắc muốn xóa ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button onclick="delPost(<?php echo $value->id ?>)"
                                                type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- end modal--}}
                        </td>
                    @endif
                    @if(session('role')==2)
                    <td>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        @if( $value -> status == 0)
                            <label style="width: 100px" class="btn btn-secondary active" @endif @if( $value -> status != 0)
                            <label style="width: 100px" class="btn btn-secondary" @endif onclick="updateStt(<?php echo $value->id ?>, 0)">
                                <input type="radio" name="options" id="option1" autocomplete="off"> Còn phòng

                            </label>
                            @if( $value -> status == 1)
                                <label style="width: 100px"  class="btn btn-secondary active" @endif @if( $value -> status != 1)
                                <label style="width: 100px" class="btn btn-secondary" @endif onclick="updateStt(<?php echo $value->id ?>, 1)">
                                    <input type="radio" name="options" id="option2" autocomplete="off">Hết phòng
                                </label>
                    </div>

                    </td>
                        @endif
                </tr>

            @endforeach
        @endif

        </tbody>

    </table>







@endsection
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
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>

    function delPost(id) {

        $.ajax({
            url: '/post/destroy/'+id,
            method: "DELETE",
            data: {
                "_token": "{{ csrf_token() }}",
            },
        }).done(function(res) {
            // console.log(res);
            $(".tr-"+id).remove();
            $('.modal-backdrop').hide();
            alertify.success('Success message');
        });
    }

    function updateStatus(id, status) {
        $.ajax({
            url: "{{ url('/api/admin/post/update-status') }}",
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

    function updateStt(id, stt) {
        $.ajax({
            url: "{{ url('/api/admin/post/update-stt') }}",
            method: "PUT",
            data: {
                "_token": "{{ csrf_token() }}",
                'user_id': id,
                'stt': stt
            },
        }).done(function(res) {
            console.log(res);
        });
    }
</script>

<script>
    function formatprice (price) {
        var x = price;
        x = x.toLocaleString('vn-VN', {style : 'currency', currency : 'VND'});
        document.write(x);
    }

</script>
<script type="text/javascript">


</script>
<style>
    .active {
        background-color: red;
        color: white;

    }

    .alertify-notifier{
        margin-left: 1100px;
    }



    .btn-secondary {

        width: 80px;
        height: 30px;
        font-size: 12px;

    }
</style>
