    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    @if($getSliderImage)
		<header class="intro-header" style="background-image: url('/assets/fileupload/postslider/{{$getSliderImage->post_slider_image}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
						@if(isset($getBlogById))
							<h1>{{$getBlogById->title}}</h1>
							<h2>{{$getBlogById->tag_line}}</h2>
							<span class="meta">Posted by <a href="#">{{$getBlogById->postedby}}</a> {{--*/
								$createsDate=$getBlogById->created_at;
								$createsDate=explode(" ", $createsDate);
								$createsDate=$createsDate[0];
								$createsDate= date('F j,Y',strtotime($createsDate));
								/*--}}{{$createsDate}}
							</span>
						@else
							<h1>Man must explore, and this is exploration at its greatest</h1>
							<h2 class="subheading">Problems look mighty small from 150 miles up</h2>
							<span class="meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
		</header>
    @else
		<header class="intro-header" style="background-image: url('/assets/frontend/img/post-bg.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
						<div class="post-heading">
							<h1>Man must explore, and this is exploration at its greatest</h1>
							<h2 class="subheading">Problems look mighty small from 150 miles up</h2>
							<span class="meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</span>
						</div>
					</div>
				</div>
			</div>
		</header>
    @endif
