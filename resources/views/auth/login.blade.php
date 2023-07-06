@extends('layouts.pages')
@section('content')

	<style>
		.distance {
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 2rem;
			background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
		}
		.body-here{
			margin: 0;
			padding: 2rem auto;
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100%;
			font-family: 'Jost', sans-serif;
		}
		.main-here{
			width: 350px;
			height: 500px;
			background: red;
			overflow: hidden;
			background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
			border-radius: 10px;
			box-shadow: 5px 20px 50px #000;
		}
		#chk{
			display: none;
		}
		.signup-here{
			position: relative;
			width:100%;
			height: 100%;
		}
		label{
			color: #E4D035;
			font-size: 2.3em;
			justify-content: center;
			display: flex;
			margin: 60px;
			font-weight: bold;
			cursor: pointer;
			transition: .5s ease-in-out;
		}
		.input-here{
			width: 60%;
			height: 20px;
			background: #e0dede;
			justify-content: center;
			display: flex;
			margin: 20px auto;
			padding: 10px;
			border: none;
			outline: none;
			border-radius: 5px;
		}
		.button-here{
			width: 60%;
			height: 40px;
			margin: 10px auto;
			justify-content: center;
			display: block;
			color: #E4D035;
			background: #573b8a;
			font-size: 1em;
			font-weight: bold;
			margin-top: 20px;
			outline: none;
			border: none;
			border-radius: 5px;
			transition: .2s ease-in;
			cursor: pointer;
		}
		.button-here:hover{
			background: #6d44b8;
		}
		.login-here{
			height: 460px;
			background: #eee;
			border-radius: 60% / 10%;
			transform: translateY(-180px);
			transition: .8s ease-in-out;
		}
		.login-here label{
			color: #573b8a;
			transform: scale(.6);
		}

		#chk:checked ~ .login-here{
			transform: translateY(-500px);
		}
		#chk:checked ~ .login-here label{
			transform: scale(1);	
		}
		#chk:checked ~ .signup-here label{
			transform: scale(.6);
		}
		.forgot-password {
			font-size: 15px;
			width: 60%;
			height: 40px;
			margin: 10px auto;
			justify-content: center;
			display: block;
			color: #E4D035;
			margin-top: 20px;
			outline: none;
			border: none;
			transition: .2s ease-in;
			cursor: pointer;
		}
		.forgot-password:hover {
			text-decoration: underline;
			color: #E4D035;
		}
	</style>
	<div class="distance">
		<div class="body-here">
			<div class="main-here">  	
				<input type="checkbox" id="chk" aria-hidden="true">

					<div class="signup-here">
						@if (session()->has('success_message'))
							<div class="alert alert-success alert-dismissible">
								<button class="close" type="button"
									data-dismiss="alert">x</button>
								{{ session()->get('success_message') }}
							</div>
						@endif
						
						
						@if (session()->has('error_message'))
							<div class="alert alert-danger alert-dismissible">
								<button class="close" type="button"
									data-dismiss="alert">x</button>
								{{ session()->get('error_message') }}
							</div>
						@endif
						<x-jet-validation-errors
						style="color:red; font-weight:bold; margin:10px"
						class="mb-5" />

						<form method="POST" action="{{ route('login') }}">
						@csrf
						<label for="chk" aria-hidden="true">Sign in</label>
						<input class="input-here" type="email" name="email" placeholder="Email" required="">
						<input class="input-here" type="password" name="password" placeholder="Password" required="">
						<button class="button-here" type="submit">Sign in</button>
						@if (Route::has('password.request'))
							<a class="forgot-password" href="{{ route('password.request') }}">
							{{ __('Forgot your password?') }}
							</a>
						@endif
					</form>
					</div>
			</div>
		</div>
	</div>
@endsection

