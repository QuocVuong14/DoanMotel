<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="/admin/images/favicon.png">

    <title>Login</title>

    <!--Core CSS -->
    <link href="/admin/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/bootstrap-reset.css" rel="stylesheet">
    <link href="/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="/admin/css/style.css" rel="stylesheet">
    <link href="/admin/css/style-responsive.css" rel="stylesheet" />

</head>

<body class="login-body">

    <div class="container">

        <form class="form-signin" method="post" action="{{ route('user.store') }}">

            <!-- <form class="form-signin" method="get" action="/email/verify"> -->

            @csrf
            <h2 class="form-signin-heading">registration now</h2>
            <div class="login-wrap">

                <input type="text" class="form-control" placeholder="Name" autofocus name="name">
                <!-- <input type="text" class="form-control" placeholder="Address" autofocus> -->
                <input type="text" class="form-control" placeholder="Email" autofocus name="email">
                <!-- <input type="text" class="form-control" placeholder="City/Town" autofocus> -->
                <!-- <div class="radios">
                    <label class="label_radio col-lg-6 col-sm-6" for="radio-01">
                        <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> Male
                    </label>
                    <label class="label_radio col-lg-6 col-sm-6" for="radio-02">
                        <input name="sample-radio" id="radio-02" value="1" type="radio" /> Female
                    </label>
                </div> -->

                <!-- <input type="text" class="form-control" placeholder="User Name" autofocus> -->
                <input type="password" class="form-control" placeholder="Password" name="password">
                <input type="password" class="form-control" placeholder="Re-type Password" name="repassword">

                <!-- <div>
                    <label class="">
                        <input type="checkbox" value="2" name="cb_motel"> Chu tro
                    </label>
                    <label class="" style="margin-left: 50px;">
                        <input type="checkbox" value="3" name="cb_guest"> Khach
                    </label>
                </div> -->

                <!-- <label class="checkbox">
                    <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
                </label> -->
                <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

        </form>

        <div class="registration">
            Already Registered ?
            <a class="" href="{{ route('login') }}">
                Login
            </a>
        </div>
    </div>



    </div>
    <style>
        .form-signin h2.form-signin-heading {
            background-color: #3961fb;
            border-bottom: none;
        }

        .form-signin .btn-login {
            background-color: #3961fb;

        }
    </style>
    <!--Core js-->
    <script src="/admin/js/jquery.js"></script>
    <script src="/admin/bs3/js/bootstrap.min.js"></script>

</body>

</html>