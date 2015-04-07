<!DOCTYPE HTML>
<html>
<head>
<title>MyBlog:login</title>
<!-- Custom Theme files -->
<link href="/assets/css/loginstyle.css" rel="stylesheet" type="text/css" media="all"/>
 <link href="/assets/css/jquery.rtnotify.css" rel="stylesheet">
<script src="/assets/js/jquery.rtnotify.js"></script>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
 <script src="/assets/js/jquery-1.8.3.min.js"></script>
</head>
<body>
<!--header start here-->
			<div class="login-top">
				<h1>User login</h1>
				 <form class="form-signin" action="/auth/login" method="post">
					  @if ($errors->has())
						<div class="alert alert-danger">
								@foreach ($errors->all() as $error)
									{{ $error }}<br>        
								@endforeach
						</div>
						@endif
					<input type="text"  value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}" class="user-name" name="email"/>
					<input type="password"  value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" class="password" name="password"/>
				<label class="checkbox"><input type="checkbox" name="checkbox" checked><i> </i> Remember Me</label>
				<p><a href="#"> Forget Password </a></p>
				<div class="clear"> </div>
				<div class="log-bwn">
					<!--a href="javascript:void(0);">Sign in</a-->
					<input type="submit" class="but but-sign-in" value="Sign in"/>
					
				</div>
				</form>
			</div>
			@include('includes.notifications')
<!--header start here-->
</body>
</html>
