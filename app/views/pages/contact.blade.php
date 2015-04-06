
    <!-- Set your background image for this header on the line below. -->
  
     @if($getContectSlide)
		 <header class="intro-header" style="background-image: url('/assets/img/{{$getContectSlide->contact_image}}')">
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


        <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
               @if($getContectSlide)
					<p>{{$getContectSlide->	description}}</p>
               @else 
					<p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>
				@endif
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                @if ($errors->has())
				<div class="alert alert-danger">
						@foreach ($errors->all() as $error)
							{{ $error }}<br>        
						@endforeach
				</div>
				@endif
				@if(Session::has('conformetion'))
					<div class="alert alert-success">{{ Session::get('conformetion')}}</div>
				@endif
				
                <form Action="/contact/message" method="post" name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Message" id="message" name="message"required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>
    


