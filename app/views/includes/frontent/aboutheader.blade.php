 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    {{--*/	$getAbout = Aboutus::where('status','1')->first(); /*--}}
    @if($getAbout)
    <header class="intro-header" style="background-image: url('/assets/fileupload/about/{{$getAbout->about_image}}')">
    <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>{{$getAbout->title}}</h1>
                        <hr class="small">
                        <span class="subheading">{{$getAbout->tag_line}}</span>
                    </div>
                </div>
            </div>
        </div>
      </header>
    @else
	<header class="intro-header" style="background-image: url('/assets/frontend/img/about-bg.jpg')">
	
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>About Me</h1>
                        <hr class="small">
                        <span class="subheading">This is what I do.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
     @endif	  
