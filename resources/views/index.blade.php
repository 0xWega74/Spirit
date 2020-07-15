<!DOCTYPE html>
<html lang="en">
    <head>


		
		<!-- Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<!-- Title -->
		@foreach ($settings as $setting)
			
		<title>{{ $setting->blog_name }}</title>
		<link rel="icon" href="{{ $setting->logo }}">
		@endforeach
		<!-- CSS Plugins -->
        <link rel="stylesheet"  href="{{ asset('css/plugins/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/plugins/fontawesome.css') }}">
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"> --}}
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
		
		<!-- Main Site -->
		<div id="home">
  		<div id="about">
    	<div id="resume">
     	<div id="portfolio">
        <div id="blog">
		<div id="contact">
			
			<div class="header-mobile">
				<a class="header-toggle"><i class="fas fa-bars"></i></a>
				@foreach ($settings as $setting)
				<h2>{{ $setting->blog_name }}</h2>
			@endforeach
            </div>
			
			<!-- Left Block -->
			<nav class="header-main" data-simplebar>
		
				<!-- Logo -->
				<div style="padding:10px" class="logo">
					@foreach ($settings as $setting)
            		<img  width="80px" src="{{ asset($setting->logo) }}" alt="">
					@endforeach
            	</div>
				
          		<ul>

					<li data-tooltip="home" data-position="top">
            			<a href="#home" class="icon-h fas fa-house-damage"></a>
					</li>
					<li data-tooltip="about" data-position="top">
            			<a href="#about" class="icon-a fas fa-user-tie"></a>
					</li>
					<li data-tooltip="resume" data-position="top">
            			<a href="#resume" class="icon-r fas fa-address-book"></a>
					</li>
					<li data-tooltip="portfolio" data-position="top">
            			<a href="#portfolio" class="icon-p fas fa-briefcase"></a>
					</li>
					<li data-tooltip="blog" data-position="top">
            			<a href="#blog" class="icon-b fas fa-receipt"></a>
					</li>
					<li data-tooltip="contact" data-position="bottom">
						<a href="#contact" class="icon-c fas fa-envelope"></a>
					</li>
          		
          		</ul>
				
				<!-- Sound wave -->
				<a class="music-bg" style="visibility: visible;">
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
			
			<!-- Home Section -->
			@foreach ($settings as $item)
				<div class="pt-home" style="background-image: url('{{ $item->home_photo }}')"> 
			@endforeach
             	<section>
					
					<!-- Banner -->
					<div class="banner">
  						<h1>Hesham Abdullah</h1>
						<p class="cd-headline rotate-1">
							<span>I am a</span>
							<span style="width: auto !important" class="cd-words-wrapper">
								<b class="is-visible">Developer</b>
								<b>Photographer</b>
								<b>Designer</b>
								<b>Freelancer</b>
							</span>
						</p>
					</div>
					
					<!-- Language -->
					{{-- <div class="lang">
                		<ul>
                   			<li><a href="#" class="active">eng</a></li>
                    		<li><a href="#">ar</a></li>
                		</ul>
            		</div> --}}
		
					<!-- Social -->
					<div class="social">
            			<ul>
                			<li><a href="#"><i style="display:inline-block" class="fab fa-facebook-f"></i></a></li>
                			<li><a href="#"><i style="display:inline-block" class="fab fa-twitter"></i></a></li>
                			<li><a href="#"><i style="display:inline-block" class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i style="display:inline-block" class="fab fa-youtube"></i></a></li>
            			</ul>
        			</div>
			  	</section>  
          	</div>
			
			<!-- About Section -->
			<div class="page pt-about" data-simplebar>
				<section class="container">
					
					<!-- Section Title -->
					<div class="header-page mt-70 mob-mt">
						<h2>About Me</h2>
						<span></span>
					</div>
				
					<!-- Personal Info Start -->
					<div class="row mt-100">
					
						<!-- Information Block -->
						<div class="col-lg-12 col-sm-12">
    						<div class="info box-1">
								<div class="row">
									<div class="col-lg-3 col-sm-4">
										<div class="photo">
										<img style="border-radius: 0px" alt="" src="{{ asset($profile->user_photo) }}">		
										</div>	
									</div>
									<div class="col-lg-9 col-sm-8">
										<h4>{{ $profile->name }}</h4>
										<div class="loc">
											<i class="icon-map-marker"></i> {{ $profile->location }}
										</div> 
										<p>{{ $profile->desc }}</p>
									</div>
									
									<!-- Icon Info -->
									<div class="col-lg-3 col-sm-4">
                                		<div class="info-icon">
                                     		<i class="fas fa-award"></i>
                                     		<div class="desc-icon">
											 <h6>{{ date('Y') - $profile->job_year}} Years</h6>
                                            	<p>Experience</p>
                                       		</div>
                                		</div>
                                	</div>
									
									<!-- Icon Info -->
									<div class="col-lg-3 col-sm-4">
                                		<div class="info-icon">
                                     		<i class="fas fa-certificate"></i>
                                     		<div class="desc-icon">
											 <h6>{{ $profile->proj }} Projects</h6>
                                            	<p>Completed</p>
                                      		</div>
                                		</div>
                                	</div>
									
									<!-- Icon Info -->
									<div class="col-lg-3 col-sm-4">
                                		<div class="info-icon">
                                     		<i class="fas fa-user-astronaut"></i>
                                     		<div class="desc-icon">
												<h6>Freelance</h6>
											 <p>{{ $profile->status }}</p>
                                        	</div>
                                		</div>
                                	</div>
									<div class="col-lg-3 col-sm-12 pt-50">
									<a href="{{ $profile->cv }}" class="btn-st" download>Download CV</a>
                                	</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Interests Row Start -->
					<div class="row mt-100">
					
						<!-- Header Block -->
						<div class="col-md-12">
							<div class="header-box mb-50">
								<h3>My Interests</h3>
							</div>
						</div>
					
						<div class="col-lg-12 col-sm-12">
							<div class="box-2">
								<div class="row">
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                     		<i class="fas fa-music"></i>
                                    	 	<div class="desc-inter">
												<h6>Music</h6>
                               	        	</div>
										</div>
									</div>
								
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                     		<i class="fas fa-route"></i>
                                     		<div class="desc-inter">
												<h6>Travelling</h6>
                                       		</div>
                                		</div>
									</div>
								
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                 	    	<i class="far fa-image"></i>
                                  		   	<div class="desc-inter">
												<h6>Photos</h6>
                                  	     	</div>
                                		</div>
									</div>
								
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                    	 	<i class="fas fa-film"></i>
                                     		<div class="desc-inter">
												<h6>Movies</h6>
                                   	    	</div>
                                		</div>
									</div>
								
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                 	    	<i class="fas fa-space-shuttle"></i>
                                 	    	<div class="desc-inter">
												<h6>Space</h6>
                                	       	</div>
                                		</div>
									</div>
								
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
                                    	 	<i class="fas fa-book"></i>
                                     		<div class="desc-inter">
												<h6>Books</h6>
                                    	   	</div>
                                		</div>
									</div>
								
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
        	                             	<i class="fas fa-gamepad"></i>
            	                         	<div class="desc-inter">
												<h6>Video games</h6>
                    	                   	</div>
                        	        	</div>
									</div>
								
									<!-- Interests Item -->
									<div class="col-lg-3 col-sm-6">
										<div class="inter-icon">
        	                             	<i class="fas fa-tree"></i>
            	                         	<div class="desc-inter">
												<h6>Forest</h6>
                    	                   	</div>
                        	        	</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
					<!-- Service Row Start -->
					<div class="row mt-100">
					
						<!-- Header Block -->
						<div class="col-md-12">
							<div class="header-box mb-50">
								<h3>Services</h3>
							</div>
						</div>
					
						<!-- Service Item -->
						<div class="col-lg-6 col-sm-6">
							<div class="service box-1 mb-40">
								<i class="fas fa-desktop"></i>
								<h4>Web Design</h4>
								<p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
							</div>
						</div>

						<!-- Service Item -->
						<div class="col-lg-6 col-sm-6">
							<div class="service box-2 mb-40">
								<i class="fas fa-laptop-code"></i>
								<h4>Web Development</h4>
								<p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
							</div>
						</div>

						<!-- Service Item -->
						<div class="col-lg-6 col-sm-6">
							<div class="service box-2 mb-40">
								<i class="fas fa-mobile-alt"></i>
								<h4>Responsive Design</h4>
								<p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
							</div>
						</div>

						<!-- Service Item -->
						<div class="col-lg-6 col-sm-6">
							<div class="service box-1 mb-40">
								<i class="fas fa-medkit"></i>
								<h4>Quick Support</h4>
								<p>Lorem Ipsum is simply dummy text of the Lorem has been the industry's standard dummy text ever.</p>
							</div>
						</div>
					</div>
				
					<!-- Testimonial Row Start -->
					{{-- <div class="row testimonial mt-60">
					
						<!-- Header Block -->
						<div class="col-md-12">
							<div class="header-box mb-50">
								<h3>Testimonials</h3>
							</div>
						</div>
						
						<div class="owl-carousel owl-theme">
	
							<!-- Testimonail Item -->
							<div class="testimonial-item">
								<div class="media">
									<img src="img/testimonials/testimonial-1.jpg" alt="">
									<div class="content">
										<h4>John Doe</h4>
										<p>Web Development</p>
									</div>
									<ul class="rating">
										<li><i class="far fa-star"></i></li>
										<li><i class="far fa-star"></i></li>
										<li><i class="far fa-star"></i></li>
										<li><i class="far fa-star"></i></li>
										<li><i class="far fa-star"></i></li>
                                 	</ul>
								</div>
								<div class="comment pt-30">
									<p>
										Curabitur eleifend tempor gnceleris eget placeratvel phasellus eget
										sem just metup consequat gestas facilisis eleifend posure tempor
										metus sem just metup consequat gestas facilisis eleifend posures
										temporureture.
									</p>
								</div>
							</div>

							<!-- Testimonail Item -->
							<div class="testimonial-item">
								<div class="media">
									<img src="img/testimonials/testimonial-2.jpg" alt="">
									<div class="content">
										<h4>Alex Doe</h4>
										<p>UI/UX Designer</p>
									</div>
									<ul class="rating">
										<li><i class="far fa-star"></i></li>
										<li><i class="far fa-star"></i></li>
										<li><i class="far fa-star"></i></li>
										<li><i class="far fa-star"></i></li>
										<li><i class="far fa-star-half"></i></li>
                                 	</ul>
								</div>
								<div class="comment pt-30">
									<p>
										Curabitur eleifend tempor gnceleris eget placeratvel phasellus eget
										sem just metup consequat gestas facilisis eleifend posure tempor
										metus sem just metup consequat gestas facilisis eleifend posures
										temporureture.
									</p>
								</div>
							</div>
						
							<!-- Testimonail Item -->
							<div class="testimonial-item">
								<div class="media">
									<img src="img/testimonials/testimonial-3.jpg" alt="">
									<div class="content">
										<h4>David Doe</h4>
										<p>UI/UX Designer</p>
									</div>
									<ul class="rating">
										<li><i class="far fa-star"></i></li>
										<li><i class="far fa-star"></i></li>
										<li><i class="far fa-star"></i></li>
										<li><i class="far fa-star"></i></li>
                                 	</ul>
								</div>
								<div class="comment pt-30">
									<p>
										Curabitur eleifend tempor gnceleris eget placeratvel phasellus eget
										sem just metup consequat gestas facilisis eleifend posure tempor
										metus sem just metup consequat gestas facilisis eleifend posures
										temporureture.
									</p>
								</div>
							</div>
						</div>
					</div> --}}

					
				
					<!-- Price Row Start -->
					<div class="row mt-100 mb-60">
						
						<!-- Header Block -->
						<div class="col-md-12">
							<div class="header-box mb-90">
								<h3>Price</h3>
							</div>
						</div>


						@foreach ($prices as $price)
						<!-- Price Item -->
						<div class="col-lg-4 col-sm-12">
							<div class="price box-1">
								<div class="head-price">
									<i class="{{ $price->price_icon }}"></i>
								<h4>{{ $price->price_status }}</h4>
								</div>
								<div class="body-price">
									<div class="price-plan">
										<span class="currency">$</span>
									<span class="number">{{ $price->price }}</span>
										<span class="period">month</span>
									</div>
									<div class="list-price">
										{!! $price->services !!}
									</div>
								</div>
								<div class="footer-price">
									<a href="#" class="btn-st">Buy Now</a>
								</div>
							</div>
						</div>
						
					@endforeach

					</div>

			  	</section>
         	</div>
			 
			<!-- Resume Section -->
          	<div class="page pt-resume" data-simplebar>
            	<section class="container">
					
					<!-- Section Title -->
					<div class="header-page mt-70 mob-mt">
						<h2>Resume</h2>
    					<span></span>
					</div>
					
					<!-- Experience & Education Row Start -->
					<div class="row mt-100">
					
						<!-- Experience Column Start -->
						<div class="col-lg-6 col-sm-12">
						
							<!-- Header Block -->
							<div class="header-box mb-50">
								<h3>Experience</h3>
							</div>
						
							<div class="experience box-1">
								
							
								@foreach ($resume as $item)
								@if ($item->status == 'Experience')

								<!-- Experience Item -->
								<div class="item">
									<div class="main">
									<h4>{{ $item->title }}</h4>
									<p><i class="far fa-calendar-alt"></i>{{ $item->place }}</p>
									</div>
								<p>{{ $item->desc }}</p>
								</div>
								@endif
								@endforeach

							</div>
						</div>
							
						<!-- Education Column Start -->
						<div class="col-lg-6 col-sm-12">
						
							<!-- Header Block -->
							<div class="header-box mb-50 mob-box-mt">
								<h3>Education</h3>
							</div>
						
							<div class="experience box-2">

								<!-- Education Item -->
								@foreach ($resume as $item)
								@if ($item->status == 'Education')

								<!-- Experience Item -->
								<div class="item">
									<div class="main">
									<h4>{{ $item->title }}</h4>
									<p><i class="far fa-calendar-alt"></i>{{ $item->place }}</p>
									</div>
								<p>{{ $item->desc }}</p>
								</div>
								@endif
								@endforeach
							</div>
						</div>
					</div>
				
					<!-- Skills Row Start -->
					<div class="row mt-100">
					
						<!-- Header Block -->
						<div class="col-md-12">
							<div class="header-box mb-50">
								<h3>Skills</h3>
							</div>
						</div>
					</div>
					
					<div class="box-1 skills">
						<div class="row">

							@foreach ($skills as $skill)
								
							<div class="col-lg-6 col-sm-6">
								<!-- Skill Item -->
								<div class="skill-item">
								<h4 class="progress-title">{{ $skill->skill }}</h4>
									<div class="progress">
									<div class="progress-bar" style="width: {{$skill->num}}% ">
										<div class="progress-value">{{ $skill->num }}%</div>
									</div>
									</div>
								</div>
							</div>
							@endforeach




							{{-- <div class="col-lg-6 col-sm-6">
								<div class="row">
									
									<!-- Skill Item -->
									<div class="col-lg-6 col-sm-6">
										<div class="chart" data-percent="80" data-bar-color="#fff"> 80% <p>PHP</p></div>
									</div>
									
									<!-- Skill Item -->
									<div class="col-lg-6 col-sm-6">
										<div class="chart" data-percent="70" data-bar-color="#fff"> 70% <p>Illustrator</p></div>
									</div>
									
									<!-- Skill Item -->
									<div class="col-lg-6 col-sm-6">
										<div class="chart" data-percent="60" data-bar-color="#fff"> 60% <p>Photoshop</p></div>
									</div>
									
									<!-- Skill Item -->
									<div class="col-lg-6 col-sm-6">
										<div class="chart" data-percent="90" data-bar-color="#fff"> 90% <p>AngularJS</p></div>
									</div>
								</div>
							</div> --}}
						</div>
					</div>
				
					<!-- Work Process Row Start -->
					<div class="row mt-100">
					
						<!-- Header Block -->
						<div class="col-md-12">
							<div class="header-box mb-50">
								<h3>My Working Process</h3>
							</div>
						</div>
					</div>
					
					<div class="box-2 work-process mb-100">
						<div class="row">
							<div class="col-lg-4 col-sm-12 ltr">
							
                    			<!-- Working Process Item-->
                          	 	<div class="single-wp width-sm process-1">
									<p class="wp-step">01</p>
									<h4 class="wp-title">Discuss idea</h4>
									<p>I could describe these conceptions, also impress upon paper all that is living.</p>
								</div>

								<!-- Working Process Item-->
								<div class="single-wp width-sm process-2">
									<p class="wp-step">02</p>
									<h4 class="wp-title">Creative concept</h4>
									<p>I could describe these conceptions, also impress upon paper all that is living.</p>
								</div>
							</div>
					
							<div class="col-lg-4 hidden-sm">
							
								<!-- Working Process Circle-->
								<div class="wp-circle">
									<h4>Working Process</h4>
									<span class="dots top-l"></span>
									<span class="dots bottom-l"></span>
									<span class="dots top-r"></span>
									<span class="dots bottom-r"></span>
								</div>
							</div>
					
							<div class="col-lg-4 col-sm-12 rtl">
						
								<!-- Working Process Item-->
								<div class="single-wp width-sm process-3">
									<p class="wp-step">03</p>
									<h4 class="wp-title">Web concept</h4>
									<p>I could describe these conceptions, also impress upon paper all that is living.</p>
								</div>
	
								<!-- Working Process Item-->
								<div class="single-wp width-sm process-4">
									<p class="wp-step">04</p>
									<h4 class="wp-title">Final concept</h4>
									<p>I could describe these conceptions, also impress upon paper all that is living.</p>
								</div>
							</div>
						</div>
					</div>
			  	</section>
         	</div>
			 
			<!-- Portfolio Section -->
          	<div class="page pt-portfolio" data-simplebar>
            	<section class="container">
					
					<!-- Section Title -->
					<div class="header-page mt-70 mob-mt">
						<h2>Portfolio</h2>
    					<span></span>
					</div>
					
					<!-- Portfolio Filter Row Start -->
					<div class="row mt-100">
						<div class="col-lg-12 col-sm-12 portfolio-filter">
							<ul>
								<li class="active" data-filter="*">All</li>
								@foreach ($gallery as $item)
									
								<li data-filter=".{{ $item->tag_name }}">{{ ucfirst(trans( str_replace('_', ' ', $item->tag_name))) }}</li>
								@endforeach
							</ul>
						</div>
					</div>
					
					<!-- Portfolio Item Row Start -->
					<div class="row portfolio-items mt-100 mb-100">
					


						@foreach ($gallery as $item)
							
						{{-- Portfolio Item --}}
					<div class="item col-lg-4 col-sm-6 {{ $item->tag_name }}">
							<figure>
							<img alt="" src="{{ $item->photo }}">
								<figcaption>
								<h3>{{ $item->title }}</h3>
								<p>{{ ucfirst(trans( str_replace('_', ' ', $item->tag_name))) }}</p><i class="fas fa-search-plus"></i>
									<a class="image-link" href="{{ $item->photo }}"></a>
								</figcaption>
							</figure>
						</div>
						@endforeach

						
					</div>
				</section>
       	   	</div>
			 <!-- Blog Section -->
          	<div class="page pt-blog" data-simplebar>
            	<section class="container">
					
					<!-- Section Title -->
             		<div class="header-page mt-70 mob-mt">
						<h2>Blog</h2>
    					<span></span>
					</div>
					
					<!-- Blog Row Start -->
					<div class="row blog-masonry mt-100 mb-50">
						@foreach ($blogs as $blog)
							
						<!-- Blog Item -->
						<div class="col-lg-4 col-sm-6">
							<div class="blog-item">
								<div class="thumbnail">
								<a href="{{ route('blog.show', ['slug' => $blog->slug]) }}">
									<img alt="" src="{{ $blog->photo }}">
								</a>
								</div>
							<h4><a href="{{ route('blog.show', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a></h4>
								<ul>
								<li>{{ $blog->created_at->diffForHumans() }}</li>
								<li><a href="#">{{ $blog->tag_name }}</a></li>
                           		</ul>
								<div class="blog-btn">
									<a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class="btn-st">Read More</a>
								</div>
							</div>
						</div>

						@endforeach



					</div>
            	</section>
			</div>
			 
			<!-- Contact Section -->
         	<div class="page pt-contact" data-simplebar>
            	<section class="container">
					
					<!-- Section Title -->
              		<div class="header-page mt-70 mob-mt">
						<h2>Contact</h2>
    					<span></span>
					</div>
					
					<!-- Form Start -->
					<div class="row mt-100">
						<div class="col-lg-12 col-sm-12">
							<div class="contact-form ">
							<form action="{{ route('message.store') }}" method="POST" class="box-1">

								{{ csrf_field() }}

								@if(count($errors) > 0)
								@foreach ($errors->all() as $error)
									<ul>
									  <li>{{ $error }}</li>
									</ul>
								@endforeach
								@endif



									<div class="row">
                            			<div class="col-lg-6 col-sm-12">
                                			<input type="text" name="name" id="name" class="form-control" placeholder="Name *">
                            			</div>
                            			<div class="col-lg-6 col-sm-12">
                                			<input type="email" name="email" id="email" class="form-control" placeholder="Email *">
                            			</div>
                            			<div class="col-lg-12 col-sm-12">
                                			<textarea class="form-control" name="message"  id="note" placeholder="Your Message"></textarea>
                            			</div>
                             			<div class="col-lg-12 col-sm-12 text-center">
                                			<button type="submit" class="btn-st">Send Message</button>
                                			{{-- <div id="loader">
                                    			<i class="fas fa-sync"></i>
                                			</div> --}}
                            			</div>
										{{-- <div class="col-lg-12 col-sm-12">
                            				<div class="error-messages">
                                				<div id="success">
													<i class="far fa-check-circle"></i>Thank you, your message has been sent.
												</div>
                                				<div id="error">
													<i class="far fa-times-circle"></i>Error occurred while sending email. Please try again later.
												</div>
											</div>
                            			</div> --}}
									</div>
								</form>
								




                    		</div>
						</div>
					</div>
					
					<!-- Contact Info -->
					<div class="box-2 contact-info">
						<div class="row">
							@foreach ($settings as $setting)
								
							<div class="col-lg-4 col-sm-12 info">
								<i class="fas fa-paper-plane"></i>
							<p>{{ $setting->email }}</p>
          						<span>Email</span>
							</div>
							<div class="col-lg-4 col-sm-12 info">
								<i class="fas fa-map-marker-alt"></i>
							<p>{{ $setting->address }}</p>
          						<span>Address</span>
							</div>	
							<div class="col-lg-4 col-sm-12 info">
								<i class="fas fa-phone"></i>
							<p>(+20) {{ $setting->phone_number }}</p>
          						<span>Phone</span>
							</div>	
						</div>
					</div>
					@endforeach
					
					<!--Google Map Start-->
					<div class="google-map box-1 mt-100 mb-100">
						<div class="row">
							<div class="col-lg-12">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d110550.3995996246!2d31.2596834!3d30.0167698!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458469235579697%3A0x4e91d61f9878fc52!2z2KfZhNis2YrYstip2Iwg2YLYs9mFINin2YTYudmF2LHYp9mG2YrYqdiMINin2YTYrNmK2LLYqQ!5e0!3m2!1sar!2seg!4v1594595333824!5m2!1sar!2seg" width="1050" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>							</div>
						</div>
					</div>
            	</section>
          	</div> 
			
        </div>
      	</div>
    	</div>
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
		<script src="https://kit.fontawesome.com/6d5c4c9dd2.js" crossorigin="anonymous"></script>

		{{-- <script>
			$(window).on('load', function() {

				$('body').append('<audio loop autoplay volume="1" id="audio-player"><source src="{{asset(upload/blogs/)}}" type="audio/mpeg"></audio>');
				var audio = document.getElementById("audio-player");
				audio.volume = 0.2;
			
			if($(window).length) {
				$('.music-bg').css({'visibility':'visible'});
				$('body').addClass("audio-on");
				if ($('body').hasClass('audio-off')) {
					$('body').removeClass('audio-on');
				} 
				$(".music-bg").on('click', function() {
					$('body').toggleClass("audio-on audio-off");         
					if ($('body').hasClass('audio-off')) {
						audio.pause();
					} 
					if ($('body').hasClass('audio-on')) {
						audio.play();
					}
				});
			}
		};
		</script> --}}

		
    </body>
</html>