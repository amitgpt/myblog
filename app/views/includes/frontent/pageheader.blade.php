 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
        {{--*/	$getSlider = Sliders::where('status','1')->first(); /*--}}
    @if($getSlider)
    <header class="intro-header" style="background-image: url('/assets/frontend/img/{{$getSlider->slider_image}}')">
    <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>{{$getSlider->slider_heading}}</h1>
                        <hr class="small">
                        <span class="subheading">{{$getSlider->slider_sub_heading}}</span>
                    </div>
                </div>
            </div>
        </div>
      </header>
    
     @else
	<header class="intro-header" style="background-image: url('/assets/frontend/img/home-bg.jpg')">
				<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
						<div class="site-heading">
							<h1>Clean Blog</h1>
							<hr class="small">
							<span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
						</div>
					</div>
				</div>
			</div>
		</header>
     @endif	   
