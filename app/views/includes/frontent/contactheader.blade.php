    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
     @if($getContectSlide)
		 <header class="intro-header" style="background-image: url('/assets/fileupload/contact/{{$getContectSlide->contact_image}}')">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
						<div class="page-heading">
							<h1>{{$getContectSlide->title}}</h1>
							<hr class="small">
							<span class="subheading">{{$getContectSlide->tag_line}}</span>
						</div>
					</div>
				</div>
			</div>
		</header>
     @else
		<header class="intro-header" style="background-image: url('/assets/frontend/img/contact-bg.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
						<div class="page-heading">
							<h1>Contact Me</h1>
							<hr class="small">
							<span class="subheading">Have questions? I have answers (maybe).</span>
						</div>
					</div>
				</div>
			</div>
		</header>
	@endif
