
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
   {{--*/	$getSlider = Sliders::where('status','1')->first(); /*--}}
   @if($getSlider)
    <header class="intro-header" style="background-image: url('assets/img/{{$getSlider->slider_image}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
						
                        <h1>{{$getSlider->slider_heading}}</h1>
                       
                        <hr class="small">
                        <span class="subheading">{{$getSlider->slider_sub_heading}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @else
    <header class="intro-header" style="background-image: url('assets/img/home-bg.jpg')">
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

    <!-- Main Content -->
    <div class="container">
        <div class="row">
			@if(count($getBlogs)>0)
	
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<div class="post-preview">
				 @foreach($getBlogs as $get)
				<a href="/post/{{$get->id}}">
					<h2 class="post-title">
						{{$get->title}}
					</h2>
					<h3 class="post-subtitle">
						{{$get->tag_line}}
					</h3>
				</a>
				<p class="post-meta">Posted by <a href="#">{{$get->postedby}}</a> {{--*/
			$createsDate=$get->created_at;
			$createsDate=explode(" ", $createsDate);
			$createsDate=$createsDate[0];
			$createsDate= date('F j,Y',strtotime($createsDate));
			/*--}}{{$createsDate}}</p>
				@endforeach
			</div>
			<hr>
		@else
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Man must explore, and this is exploration at its greatest
                        </h2>
                        <h3 class="post-subtitle">
                            Problems look mighty small from 150 miles up
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                        </h2>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Science has not yet mastered prophecy
                        </h2>
                        <h3 class="post-subtitle">
                            We predict too much for the next year and yet far too little for the next ten.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Failure is not an option
                        </h2>
                        <h3 class="post-subtitle">
                            Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
                </div>
                <hr>
            @endif
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
						{{$getBlogs->links()}} 
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    
