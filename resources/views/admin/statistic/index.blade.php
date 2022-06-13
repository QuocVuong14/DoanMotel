<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
// tiền phòng của chủ trọ
        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['Tổng tiền trọ còn lại ', {{$motelsumall}}-{{$motelsum}}],
                ['Tổng tiền đã cho thuê phòng', {{$motelsum}}],


            ]);

            // Set chart options
            var options = {'title':'Biểu đồ hiển thị giá tiền phòng trọ ',
                'width':600,
                'height':600};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
// số phòng của chủ trọ
        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart1);
        function drawChart1() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['Tổng số phòng còn lại', {{$motelall}}-{{$motelstt}}],
                ['Tổng số phòng đã cho thuê ', {{$motelstt}}],

            ]);

            // Set chart options
            var options = {'title':'Biểu đồ hiển thị số phòng',
                'width':600,
                'height':600};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
            chart.draw(data, options);
        }

        // ql phòng admin
        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart2);
        function drawChart2() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['Tổng bài đăng đã duyệt', {{$countaccept}}],
                ['Tổng bài đăng đã ẩn ', {{$countblock}}],

            ]);

            // Set chart options
            var options = {'title':'Biểu đồ hiển thị số phòng',
                'width':600,
                'height':600};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
            chart.draw(data, options);
        }
// ql user
// Load the Visualization API and the corechart package.
google.charts.load('current', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(drawChart3);
function drawChart3() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
        ['Tổng tài khoản  đã duyệt', {{$countuseraccept}} - 1],
        ['Tổng tài khoản đã chặn ', {{$countuserblock}}],

    ]);

    // Set chart options
    var options = {'title':'Biểu đồ hiển thị số tài khoản',
        'width':600,
        'height':600};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
    chart.draw(data, options);
}
    </script>
</head>
@extends('admin.layouts.master')

@section('title_page') <h4>Thống kê</h4> @endsection

@section('main')
    @if(session('role') == 2)
    <div class="row">
        <div class="col-md-3">
            <div class="mini-stat clearfix">
                <span  class="mini-stat-icon orange"><i  style="padding-top: 15px;"class="fa fa-gavel"></i></span>
                <div class="mini-stat-info">
                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$motelall}}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Tất cả bài đăng
                        </font></font></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mini-stat clearfix">
{{--                <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>--}}
                <span  class="mini-stat-icon tar"><i  style="padding-top: 15px;" class="fa fa-money"></i></span>
                <div class="mini-stat-info">
                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{number_format($motelsumall)}} VNĐ</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Tổng tiền các phòng đã đăng
                        </font></font></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mini-stat clearfix">
                <span class="mini-stat-icon pink"><i style="padding-top: 15px;" class="fa fa-money"></i></span>
                <div class="mini-stat-info">
                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{number_format($motelsum)}} VNĐ</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Tổng tiền các phòng đã cho thuê/tháng
                        </font></font></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mini-stat clearfix">
                <span class="mini-stat-icon green"><i style="padding-top: 15px;" class="fa fa-eye"></i></span>
                <div class="mini-stat-info">
                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$motelstt}}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Số lượng phòng đã cho thuê
                        </font></font></div>
            </div>
        </div>
    </div>


    <div class="chart_main">
        <!--Div that will hold the pie chart-->
        <div id="chart_div"></div>
        <div id="chart_div1"></div>
    </div>
    @endif

    @if(session('role') == 1)
        <div class="row">
            <div class="col-md-2">
                <div class="mini-stat clearfix">
                    <span  class="mini-stat-icon orange"><i  style="padding-top: 15px;"class="fa fa-gavel"></i></span>
                    <div class="mini-stat-info">
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$countallmotel}}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Tất cả bài đăng
                            </font></font></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="mini-stat clearfix">
                    {{--                <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>--}}
                    <span  class="mini-stat-icon tar"><i  style="padding-top: 15px;" class="fa fa-newspaper-o"></i></span>
                    <div class="mini-stat-info">
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{$countaccept}} </font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Bài đăng đã duyệt
                            </font></font></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="mini-stat clearfix">
                    <span class="mini-stat-icon pink"><i style="padding-top: 15px;" class="fa fa-newspaper-o"></i></span>
                    <div class="mini-stat-info">
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$countblock}}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Bài đăng đã ẩn
                            </font></font></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="mini-stat clearfix">
                    <span class="mini-stat-icon green"><i style="padding-top: 15px;" class="fa fa-user"></i></span>
                    <div class="mini-stat-info">
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$countuser - 1}}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Tổng tài khoản
                            </font></font></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="mini-stat clearfix">
                    <span class="mini-stat-icon orange"><i style="padding-top: 15px;" class="fa fa-user-times"></i></span>
                    <div class="mini-stat-info">
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$countuserblock}}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Số tài khoản bị chặn
                            </font></font></div>
                </div>
            </div>
        </div>


        <div class="chart_main">
            <!--Div that will hold the pie chart-->
            <div id="chart_div2"></div>
            <div id="chart_div3"></div>
        </div>
    @endif



    <style>
        .chart_main {
            display: flex;
        }
    </style>
@endsection

