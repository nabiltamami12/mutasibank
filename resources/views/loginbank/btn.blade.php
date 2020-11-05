<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login BTN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset ('/Login_v3/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/Login_v3/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/Login_v3/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" autocomplete="off" action="{{url('/btn/scrap')}}" method="POST">
					@csrf
					<span class="login100-form-logo">

    
				<img src="/Login_v3/images/btn.png" style="width: 150px; height: auto; padding-top: 10px">
					</span>
					
					<span class="login100-form-title  p-b-34 p-t-27">
						 @if(session('alert'))
    <div class="alert" role="alert" id="myAlert">
            <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-danger"></span> {{ session('alert') }}
                <button type="button" onclick="closeAlert()" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    </div>

    @else
  Log in
    @endif

	</span>
  
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" required type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" required type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" required type="text" name="jawaban3" placeholder="Tahun Berapa Ayah Anda Lahir?">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" >
				<input class="input100" required type="text" name="jawaban2" placeholder="Tahun Berapa Ibu Anda Lahir?">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" required type="text" name="jawaban1" placeholder="Dimana Kota Anda Dilahirkan?">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<!-- <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<!-- <div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset('/Login_v3/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/Login_v3/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/Login_v3/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('/Login_v3/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/Login_v3/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/Login_v3/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('/Login_v3/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/Login_v3/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/Login_v3/js/main.js')}}"></script>

</body>
</html>