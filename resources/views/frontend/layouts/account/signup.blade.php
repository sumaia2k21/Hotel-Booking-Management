<!DOCTYPE html>
<html>

<head>
    <title>login and registration form</title>
    <!-- <link rel="stylesheet" href="account.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .hero {
            height: 100%;
            width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4));
            background-position: center;
            background-size: cover;
            position: absolute;
        }

        .form-box {
            width: 380px;
            height: 480px;
            position: relative;
            margin: 6% auto;
            background: #fff;
            padding: 5px;
            overflow: hidden;
        }

        .button-box {
            width: 220px;
            margin: 35px auto;
            position: relative;
            box-shadow: 0 0 20px 9px #ff61241f;
            border-radius: 30px;

        }

        .toggle-btn {
            padding: 10px 30px;
            cursor: pointer;
            background: transparent;
            border: 0;
            outline: none;
            position: relative;
        }

        #btn {
            top: 0;
            left: 0;
            position: absolute;
            width: 110px;
            height: 100%;
            background: linear-gradient(to right, #ff105f, #ffad06);
            border-radius: 30px;
            transition: .5s;

        }

        .social-icons {
            margin: 30px auto;
            text-align: center;
        }

        .social-icons img {
            width: 30px;
            margin: 0 12px;
            box-shadow: 0 0 20 0 #7f7f7f3d;
            cursor: pointer;
            border-radius: 50%;
        }

        .input-group {
            top: 120px;
            position: absolute;
            width: 280px;
            transition: .5s;
        }

        .input-group-login {
            top: 180px;
            position: absolute;
            width: 280px;
            transition: .5s;
        }

        .input-field {
            width: 100%;
            padding: 10px 0;
            margin: 5px 0;
            border-left: 0;
            border-right: 0;
            border-top: 0;
            border-bottom: 1px solid #999;
            outline: none;
            background: transparent;

        }

        .submit-btn {
            width: 85%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: auto;
            background: linear-gradient(to right, #ff105f, #ffad06);
            border: 0;
            outline: none;
            border-radius: 30px;

        }

        .check-box {
            margin: 30px 10px 30px 0;
        }

        span {
            color: #777;
            font-size: 12px;
            bottom: 68px;
            position: absolute;
        }

        #login {
            left: 50px;

        }

        #register {
            left: 450px;
        }

    </style>
</head>

<body>
    <?php  
	  $background_url = asset('/images/banner.jpg');
	
	?>
    <div class="hero" style="background:url(<?php echo $background_url ?>);" id="alsdjflkjaklsdjfkl">

        <!-- <img src="{{asset('images/banner.jpg')}}" alt="image"> -->
        <div class="form-box">
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif





            <div class="button-box">

                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">log in</button>
                <button type="button" class="toggle-btn" onclick="register()">sign up</button>

            </div>

            <form action="{{route('user.do.login')}}" method="post" id="login" class="input-group-login">
                @csrf

                <input type="email" name="email" class="input-field" placeholder="User email" required>
                <input type="password" name="password" class="input-field" placeholder="Enter your Password" required>
                <!-- <input type="checkbox" class="check-box"><span>Remember Password</span> -->
                <br>
                <br>
                <button type="submit" class="submit-btn">Log in</button>

            </form>

            <form id="register" class="input-group" action="{{route('user.signup.store')}}" method="post">
                @csrf

                <input type="text" name="guest_name" class="input-field" placeholder="Name">
                <input type="email" name="guest_email" class="input-field" placeholder="Email">
                <input type="password" name="guest_password" class="input-field" placeholder="password">
                <input type="text" name="guest_mobile_no" class="input-field" placeholder="Mobile no">
                <select class="input-field" id="type" name="type">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>


                <!-- <input type="checkbox" class="check-box"><span>I am agree to terms and condition</span> -->

                <br>
                <br>
                <button type="submit" class="submit-btn">Register</button>

            </form>
        </div>
    </div>

    <script type="text/javascript">
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";

        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";

        }

    </script>

</body>

</html>
