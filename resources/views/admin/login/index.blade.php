<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Login</title>

    <!--Core CSS -->
    <link href="/admin/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/bootstrap-reset.css" rel="stylesheet">
    <link href="/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="/admin/css/style.css" rel="stylesheet">
    <link href="/admin/css/style-responsive.css" rel="stylesheet" />

</head>

    <style>
        .form-signin-heading{
            background-color: #3961fb !important;
            width: 400px;
            border-bottom: 0px solid #a0b87e !important;
        }



        .container{
            background-color: #ccc;
        }
        .login-body{
            background-color: #ccc;

        }
        .login-wrap{
            background-color: #3961fb;
            width: 400px;
        }
        .registration{
            color: #000;
            margin-right: 110px;
        }
        .registration a{
            color: #000;
            font-size: 13px;
        }
        .form-signin{
            display: block;
            margin-right: 40%;
            margin-left: 33%;
        }
        .user-login-info .form-control{
            font-size: 17px;
        }
        .form-signin .btn-login {
            background: #53f81fd4;
        }
        @media (max-width: 420px) {
            .login-wrap {
                width: 330px;
            }
            .form-signin-heading {
                width: 330px;
            }
            .form-signin {
                margin-left: auto;
                margin-right: auto;
            }
            .registration {
                margin-right: 30px;
            }
        }
    </style>

  <body class="login-body">

    <div class="container">

        <form class="form-signin" method="post" >
            @csrf

            @if($errors->any())
                <h5>{{$errors->first()}}</h5>
            @endif


            <h2 class="form-signin-heading">sign in now</h2>
            <div class="login-wrap">
                <div class="user-login-info">
                    <input type="text" class="form-control" placeholder="User ID" name="email" autofocus>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me
                    <span class="pull-right">
                        <!-- <a data-toggle="modal" href="#myModal"> Forgot Password?</a> -->
                    </span>
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>


                <div class="registration">
                    Don't have an account yet?
                    <a class="" href="{{ route('user.create') }}"> Create an account  </a>

{{--                    </br>--}}

{{--                    <a href="{{ url('/auth/facebook') }}"> Login Facebook |</a>--}}
{{--                    --}}
{{--                    <a href="{{ url('/auth/google') }}"> Login Google |</a>--}}

                </div>
            </div>

        </form>





    <!--Core js-->
    <script src="/admin/js/jquery.js"></script>
    <script src="/admin/bs3/js/bootstrap.min.js"></script>

  </body>
</html>

