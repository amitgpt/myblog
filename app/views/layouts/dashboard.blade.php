<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="/assets/admin/images/favicon.png">
    <title>Demo blog</title>
    <!--Core CSS -->
    <link href="/assets/admin/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/admin/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="/assets/admin/css/bootstrap-reset.css" rel="stylesheet">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link href="/assets/admin/js/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="/assets/css/clndr.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/admin/css/style.css" rel="stylesheet">
    <link href="/assets/admin/css/style-responsive.css" rel="stylesheet"/>
    <link href="/assets/datepicker/css/datepicker.css" rel="stylesheet"/>
    
    <!--table CSS -->
    <link rel="stylesheet" href="/assets/admin/js/data-tables/DT_bootstrap.css" />
    
    <!--Core js-->
	<script src="/assets/admin/js/jquery.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script>
	
	<script src="/assets/js/jquery.rtnotify.js"></script>
	<!-- CKTEXT Editer -->
	@if(Request::segment(2)=="samplepost")
		<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
	@endif
	
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<section id="container">
		@include('includes.topnav')
		@include('includes.leftnav')
		<!--main content start-->
		<section id="main-content">
			@yield('content')
		</section>
		<!--main content end-->
		@include('includes.notifications')
	</section>
<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="/assets/admin/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="/assets/admin/bs3/js/bootstrap.min.js"></script>
<script src="/assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/assets/admin/js/jquery.scrollTo.min.js"></script>
<script src="/assets/admin/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="/assets/admin/js/jquery.nicescroll.js"></script>


<!--common script init for all pages-->
<script src="/assets/admin/js/scripts.js"></script>
<!--script for this page-->
</body>
</html>
