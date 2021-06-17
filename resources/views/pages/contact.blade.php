@extends('layouts.yesbus')
@section('content')

<!DOCTYPE HTML>
<html>

	<body>	
	<div class="gtco-loader"></div>
	<div id="page">
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(assets/images/img_bg_3.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Don't be shy</span>
							<h1>Get In Touch</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form method="post" action="{{route('messages.store')}}">
						@csrf
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="firstname">Name</label>
								<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Your firstname">
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Email</label>
								<input type="text" name="email" id="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="subject">Subject</label>
								<input type="text"  name="subject" id="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="messages">Message</label>
								<textarea name="messages" id="messages" cols="30" rows="10" class="form-control" placeholder="Write us something"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">Jl Soekarno Hatta <br> Malang</li>
							<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li class="email"><a href="derogerbaggio19@gmail.com">info@yesbus.com</a></li>
							<li class="url"><a href="https://freehtml5.co">FreeHTML5.co</a></li>
						</ul>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>	
	</body>
</html>
@endsection