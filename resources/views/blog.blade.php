<!DOCTYPE html>
<html lang="en">
    <head>
		
		<!-- Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<!-- Title -->
		<title>{{ $settings->blog_name }} - {{ $blogs->title }}</title>
		<link rel="icon" href="{{ asset($settings->logo) }}">


		<!-- CSS Plugins -->
        <link rel="stylesheet"  href="{{ asset('css/plugins/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/plugins/fontawesome.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{ asset('css/plugins/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('css/plugins/simplebar.css') }}">
		<link rel="stylesheet" href="{{ asset('css/plugins/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/plugins/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/plugins/jquery.animatedheadline.css') }}">
		
		<!-- CSS Base -->
		<link rel="stylesheet" class="back-color" href="{{ asset('css/style-dark.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style-demo.css') }}">
			
			<!-- Settings Style -->
		<link rel="stylesheet" class="posit-nav" href="{{ asset('css/settings/left-nav.css') }}" />
		<link rel="stylesheet" class="theme-color" href="{{ asset('css/settings/green-color.css') }}" />
		<link rel="stylesheet" class="box-st" href="{{ asset('css/settings/circle-box.css') }}" />
		
    </head>
    <body>
		
		<!--Theme Options Start-->
        {{-- <div class="style-options">
            <div class="toggle-btn">
                <span><i class="fas fa-cog"></i></span>
            </div>
            <div class="style-menu">
                <div class="style-nav">
                    <h4 class="mt-15 mb-10">Menu Position</h4>
                    <ul>
						<li><a href="css/settings/top-nav.css"><i class="fas fa-caret-up"></i> Top</a></li>
                        <li><a href="css/settings/left-nav.css"><i class="fas fa-caret-left"></i> Left</a></li>
                        <li><a href="css/settings/right-nav.css"><i class="fas fa-caret-right"></i> Right</a></li>
                        <li><a href="css/settings/bottom-nav.css"><i class="fas fa-caret-down"></i> Bottom</a></li>
                    </ul>
                </div>
				<div class="style-back">
                    <h4 class="mt-85 mb-10">Style Color</h4>
                    <ul>
                        <li><a href="css/style-dark.css"><i class="fas fa-moon"></i> Dark</a></li>
                        <li><a href="css/style-light.css"><i class="far fa-lightbulb"></i> Light</a></li>
                    </ul>
                </div>
				<div class="style-box">
                    <h4 class="mt-55 mb-10">Box Style</h4>
                    <ul>
						<li><a href="css/settings/hexagon-box.css"><i class="fab fa-jira"></i> Hexagon</a></li>
                        <li><a href="css/settings/circle-box.css"><i class="fas fa-dot-circle"></i> Circle</a></li>
                    </ul>
                </div>
				<div class="style-color">
                    <h4 class="mt-55 mb-10">Theme Color</h4>
                    <ul>
                        <li><a href="css/settings/green-color.css" style="background-color: #25ca7f;"></a></li>
						<li><a href="css/settings/blue-color.css" style="background-color: #00a3e1;"></a></li>
                        <li><a href="css/settings/red-color.css" style="background-color: #d94c48;"></a></li>
                        <li><a href="css/settings/purple-color.css" style="background-color: #bb68c8;"></a></li>
						<li><a href="css/settings/sea-color.css" style="background-color: #0dcdbd;"></a></li>
                        <li><a href="css/settings/yellow-color.css" style="background-color: #eae328;"></a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
		
		<!-- Preloader -->
		<div id="preloader">
  			<div class="loading-area">
    			<div class="circle"></div>
  			</div>
  			<div class="left-side"></div>
  			<div class="right-side"></div>
		</div>
		
		<div class="header-mobile">
        	<a class="header-toggle"><i class="fas fa-bars"></i></a>
        	<h2>{{ $settings->blog_name }}</h2>
        </div>
			
		<!-- Left Block -->
		<nav class="header-main" data-simplebar>
		
			<!-- Logo -->
			<div class="logo">
			<img style="width: 80px !important" src="{{ asset($settings->logo) }}" alt="">
            </div>
				
          	<ul>
				<li data-tooltip="home" data-position="top">
				<a href="{{ route('index') }}" class="icon-h icon-home"></a>
				</li>
				<li>
            		<span class="active icon-b icon-file"></span>
				</li>
				<li data-tooltip="back to blog" data-position="top">
            		<a href="{{ route('index') }}/#blog" class="icon-long-arrow-left"></a>
				</li>
          	</ul>
				
			<!-- Sound wave -->
    		<a class="music-bg">
      			<div class="lines">
        			<span></span>
        			<span></span>
        			<span></span>
        			<span></span>
					<span></span>
					<span></span>
      			</div>
				<p> Sound </p>
    		</a>
		 </nav>
		
		<!--Blog Page-->
		<div class="blog-page" data-simplebar>
			<nav class="blog-nav">
            	<a href="#" data-tooltip="prev" data-position="left">
					<i class="fas fa-long-arrow-alt-left"></i>
				</a>
            	<a href="/#blog">
					<i class="fas fa-bars"></i>
				</a>
            	<a href="#" data-tooltip="next" data-position="right">
					<i class="fas fa-long-arrow-alt-right"></i>
				</a>
            </nav>
			<div class="blog-image">
			<img src="{{ asset($blogs->photo) }}" alt="">
			</div>
			<div class="row blog-container">
				<div class="col-md-10 offset-md-1">
						
					<!-- Heading -->
					<div class="blog-heading pt-70 pb-100">
					<h2>{{ $blogs->title }}</h2>
					<span><i class="fas fa-home"></i><a href="#">{{ ucfirst(trans( str_replace('_', ' ', $blogs->tag_name))) }}</a></span>
						<span><i class="fas fa-comment"></i><a href="#">5 comments</a></span>
					<span><i class="fas fa-calendar-alt"></i>{{ $blogs->created_at->diffForHumans() }}</span>
					</div>

					<!-- Content -->
					<div class="blog-content">
					<p>{{ $blogs->content }}</p>
						<blockquote>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.
						<span><img src="{{ asset($profile->user_photo) }}" alt=""> {{ $profile->name }}</span>
						</blockquote>
					</div>

					<!-- Comments -->
					<div class="blog-comments mt-100 mb-100">
						<div class="header-box mb-50">
							<h3>Comments</h3>
						</div>

						@include('layouts.disqus')

						{{-- <ul>
							<li>
								<div class="author-img">
									<img src="img/blog/authors/author-1.png" alt="">
								</div>
								<div class="comment-text">
									<a href="#"><i class="fas fa-reply"></i>Reply</a>
									<h4>Alex Doe</h4>
									<span>Aug 15, 2018 at 8:11 am</span>
									<p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
								</div>
								<ul>
									<li>
										<div class="author-img">
											<img src="img/blog/authors/author-2.png" alt="">
										</div>
										<div class="comment-text">
											<h4>Kriss Doe</h4>
											<span>Aug 15, 2018 at 8:11 am</span>
											<p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus, nec dapibus felis tempus in. Quisque eget elementum sem, cursus tristique orci.</p>
										</div>
									</li>
								</ul>
							</li>
								
							<li>
								<div class="author-img">
									<img src="img/blog/authors/author-3.png" alt="">
								</div>
								<div class="comment-text">
									<a href="#"><i class="fas fa-reply"></i>Reply</a>
									<h4>Emma Doe</h4>
									<span>Aug 15, 2018 at 8:11 am</span>
									<p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
								</div>
							</li>
						</ul> --}}
					</div>

					{{-- <!--Blog Form-->
					<div class="header-box mb-50">
						<h3>Leave a comment</h3>
					</div> --}}
					
					{{-- <div class="contact-form mb-100">
                        <form method="post" class="box contact-valid" id="contact-form">
							<div class="row">
                            	<div class="col-lg-6 col-sm-12">
                               		<input type="text" name="name" id="name" class="form-control" placeholder="Name *">
                            	</div>
                            	<div class="col-lg-6 col-sm-12">
                               		<input type="email" name="email" id="email" class="form-control" placeholder="Email *">
                            	</div>
                            	<div class="col-lg-12 col-sm-12">
                                	<textarea class="form-control" name="note"  id="note" placeholder="Your Message"></textarea>
                            	</div>
                             	<div class="col-lg-12 col-sm-12 text-center">
                               		<button type="submit" class="btn-st">Send Message</button>
                               		<div id="loader">
                              			<i class="fas fa-sync"></i>
                               		</div>
                            	</div>
								<div class="col-lg-12 col-sm-12">
                            		<div class="error-messages">
                                		<div id="success">
											<i class="far fa-check-circle"></i>Thank you, your message has been sent.
										</div>
                                		<div id="error">
											<i class="far fa-times-circle"></i>Error occurred while sending email. Please try again later.
										</div>
									</div>
                            	</div>
							</div>
                    	</form>
                   	</div> --}}
				</div>
			</div>
		</div>
		
		<!-- All Script -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/simplebar.js') }}"></script>
		<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('js/jquery.animatedheadline.min.js') }}"></script>
		<script src="{{ asset('js/jquery.easypiechart.js') }}"></script>
		<script src="{{ asset('js/jquery.validation.js') }}"></script>
		<script src="{{ asset('js/tilt.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
		<script src="{{ asset('js/main-demo.js') }}"></script>
		<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
		<script src="{{ asset('js/fontawesome.js') }}"></script>
    </body>
</html>