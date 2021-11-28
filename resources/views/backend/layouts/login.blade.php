
	
    <style>
    
*{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}
.login
{
	height: 100%;
	width: 100%;
	background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4));
	background-position: center;
	background-size: cover;
	position: absolute;
}
.form-box
{
	width: 380px;
	height: 300px;
	position: relative;
	margin: 6% auto;
	background: #fff;
	padding: 5px;
	overflow: hidden;
}

.input-group
{
	top: 80px;
	position: absolute;
	width: 280px;
	transition: .5s;
}
.input-field
{
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
.submit-btn
{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: linear-gradient(to right, #ff105f,#ffad06);
	border: 0;
	outline: none;
	border-radius: 30px;

}


#login
{
	left: 50px;

}

    </style>

<body>
<?php  
	  $background_url = asset('/images/banner.jpg');
	
	?>
    <div class="login" style="background:url(<?php echo $background_url ?>);" id="alsdjflkjaklsdjfkl">

		<div class="form-box">
		 
		@if(session()->has('message'))
    <span class="alert alert-danger">
        {{ session()->get('message') }}
	</span>
@endif
<br>
		<h2 style="text-align: center;">Please Login </h2>
		<hr>
			<form id="login" class="input-group"action="{{route('admin.login.post')}}"method="post">
            @csrf
				<input type="email" name="email" class="input-field" placeholder="Email" required="">
				<input type="password" name="password" class="input-field" placeholder=" Password" required="">
				<br>
                <br>
				<button type="submit" class="submit-btn">Log in</button>
				
			</form>		
	</div>
</div>

	<!-- <script type="text/javascript">
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

		function register()
		{
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";

		}
		function login()
		{
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0";

		}

	</script> -->

</body>
