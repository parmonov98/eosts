<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
=======
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>




    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/material-design-iconic-font.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">




    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>




<header>
			<!-- header-top-area-start -->
			<div class="header-top-area header-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
							<div class="header-wrapper">
								<ul class="header-text">
									<li>Have any question?</li>
									<li>+88 123 456 789</li>
									<li>admin@skillup.com</li>
								</ul>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
							<div class="header-right-wrapper">
								<ul class="header-right-text d-none d-md-none d-lg-block">
									<li><a href="#">Login</a></li>
									<li><a href="#">Register</a></li>
								</ul>
								<div class="header-icon">
									<a href="#"><i class="fab fa-google-plus-g"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-youtube"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-transparent pl-60 pr-60">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-xl-3 col-lg-3">
                           <div class="logo">
                               <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                           </div>
                       </div>
                       <div class="col-xl-7 col-lg-7">
                           <div class="main-menu text-center">
                               <nav id="mobile-menu">
                                   <ul>
                                       <li><a href="index.html">home</a>
											<ul class="submenu">
                                                <li><a href="index.html">Home 01</a></li>
												<li><a href="index2.html">Home 02</a></li>
												<li><a href="index3.html">Home 03</a></li>
												<li><a href="index4.html">Home 04</a></li>
                                            </ul>
									   </li>
									   <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="about.html">about</a></li>
												<li><a href="membership.html">membership</a></li>
											    <li><a href="our-teachers.html">our teachers</a></li>
											    <li><a href="portfolio.html">portfolio</a></li>
											    <li><a href="testimonial.html">testimonial</a></li>
											    <li><a href="notices.html">notices</a></li>
											    <li><a href="404.html">404</a></li>
											    <li><a href="cart.html">cart</a></li>
												<li><a href="courses-details.html">courses details</a></li>
											   <li><a href="events-details.html">events details</a></li>
                                            </ul>
                                        </li>
										<li><a href="courses.html">courses</a></li>
										<li><a href="events.html">events</a></li>
										<li><a href="blog.html">News</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="blog.html">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="blog-details.html">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li>
										<li><a href="shop.html">Shop</a>
											<ul class="submenu">
                                                <li>
                                                    <a href="shop-details.html">shop details</a>
                                                </li>
                                            </ul>
										</li>
										<li><a href="contact.html">contact</a> </li>
                                   </ul>
                               </nav>
                           </div>
                           <div class="mobile-menu"></div>
                       </div>
					   <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                           <div class="header-right f-right">
                               <ul>
                                   <li><a href="#"><i class="fas fa-search"></i></a>
                                        <div class="search-form">
                                            <form action="#">
                                                <input type="text" placeholder="Search">
                                                <button><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </li>
                                   <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                   <li class="info-bar"><a href="#"><i class="fas fa-bars"></i></a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="extra-info">
                <div class="close-icon">
                    <button><i class="far fa-window-close"></i></button>
                </div>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrudexe rc itation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure.</p>
               <div class="instagram">
                   <a href="#"><img src="img/instagram/insta1.png" alt=""></a>
                   <a href="#"><img src="img/instagram/insta2.png" alt=""></a>
                   <a href="#"><img src="img/instagram/insta3.png" alt=""></a>
                   <a href="#"><img src="img/instagram/insta4.png" alt=""></a>
                   <a href="#"><img src="img/instagram/insta5.png" alt=""></a>
                   <a href="#"><img src="img/instagram/insta6.png" alt=""></a>
               </div>
                <div class="social-icon-right mt-30">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
           </div>
		<!-- header-top-area-start -->
		</header>
		<!-- slider-area-start -->
		<div class="slider-area ">
			<div class="slider-active">
				<div class="slider-wrapper vh d-flex align-items-center" style="background-image:url(img/slider/slider3.jpg)">
					<div class="container">
						<div class="slider-content text-center">
							<h1 data-animation="fadeInUp" data-delay=".5s">unlock the golden door <br> of freedom.</h1>
							<div class="slider-button">
								<a class="read-more" href="#" data-animation="fadeInLeft" data-delay="1.5s">Get started</a>
								<a class="see-more" href="#" data-animation="fadeInRight" data-delay="1.5s">Take a tour</a>
							</div>
						</div>
					</div>
				</div>
				<div class="slider-wrapper vh d-flex align-items-center" style="background-image:url(img/slider/slider3.jpg)">
					<div class="container">
						<div class="slider-content text-center">
							<h1 data-animation="fadeInUp" data-delay=".5s">unlock the golden door <br> of freedom.</h1>
							<div class="slider-button">
								<a class="read-more" href="#" data-animation="fadeInLeft" data-delay="1.5s">Get started</a>
								<a class="see-more" href="#" data-animation="fadeInRight" data-delay="1.5s">Take a tour</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- slider-area-end -->
		<!-- features-area-start -->
		<div class="features2-area">
			<div class="container">
				<div class="features">
					<div class="row no-gutters">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="features2-wrapper text-center">
								<div class="features2-text">
									<span>Look at</span>
									<h3>next scheduled</h3>
									<a href="#">VIEW ALL EVENTS <i class="fas fa-long-arrow-alt-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="features2-wrapper text-center">
								<div class="features2-text">
									<span>Get your</span>
									<h3>education equipment</h3>
									<a href="#">GO TO SHOP <i class="fas fa-long-arrow-alt-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="features2-wrapper text-center">
								<div class="features2-text">
									<span>Go to</span>
									<h3>online coures</h3>
									<a href="#">LEARN COURES <i class="fas fa-long-arrow-alt-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- features-area-end -->
		<!-- courses-area-start -->
		<div class="courses-area gray-bg pt-170 pb-100">
			<div class="container">
				<div class="section-title text-center mb-45">
					<h1>available courses</h1>
					<p>It gives us the potential to do something different, challenge the way that people behave and change</p>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="coures-wrapper text-center mb-30">
							<div class="coures-img">
								<a href="courses-details.html"><img src="img/course/course1.jpg" alt="" /></a>
							</div>
							<div class="courses-text">
								<span class="course-tag"><a href="courses-details.html">Free</a></span>
								<h4><a href="courses-details.html">Designing Meaningful <br> Tattoos</a></h4>
								<div class="course-meta">
									<span><i class="fas fa-bookmark"></i>8 Lessons</span>
									<span><i class="fas fa-users"></i> 36</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="coures-wrapper text-center mb-30">
							<div class="coures-img">
								<a href="courses-details.html"><img src="img/course/course2.jpg" alt="" /></a>
							</div>
							<div class="courses-text">
								<span class="course-tag"><a href="courses-details.html">$12.00</a></span>
								<h4><a href="courses-details.html">Become a PHP Master and <br> Make Money Fast</a></h4>
								<div class="course-meta">
									<span><i class="fas fa-bookmark"></i>8 Lessons</span>
									<span><i class="fas fa-users"></i> 36</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="coures-wrapper text-center mb-30">
							<div class="coures-img">
								<a href="courses-details.html"><img src="img/course/course3.jpg" alt="" /></a>
							</div>
							<div class="courses-text">
								<span class="course-tag"><a href="courses-details.html">$22.00</a></span>
								<h4><a href="courses-details.html">Spanish for Beginners to <br> Advanced Training</a></h4>
								<div class="course-meta">
									<span><i class="fas fa-bookmark"></i>8 Lessons</span>
									<span><i class="fas fa-users"></i> 36</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="coures-wrapper text-center mb-30">
							<div class="coures-img">
								<a href="courses-details.html"><img src="img/course/course4.jpg" alt="" /></a>
							</div>
							<div class="courses-text">
								<span class="course-tag"><a href="courses-details.html">$22.00</a></span>
								<h4><a href="courses-details.html">Graphic Illustration: Design <br> with Color and Shape</a></h4>
								<div class="course-meta">
									<span><i class="fas fa-bookmark"></i>8 Lessons</span>
									<span><i class="fas fa-users"></i> 36</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="couses-button text-center">
					<a href="#">view all courses</a>
				</div>
			</div>
		</div>
		<!-- courses-area-end -->
		<!-- counter-area-start -->
		<div class="counter-area pt-100 pb-70 blue-bg">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
						<div class="counter-wrapper text-center mb-30">
							<div class="counter-icon">
								<i class="fas fa-graduation-cap"></i>
							</div>
							<div class="counter-text">
								<h1 class="counter">261</h1>
								<span>Graduates</span>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
						<div class="counter-wrapper text-center mb-30">
							<div class="counter-icon">
								<i class="fas fa-trophy"></i>
							</div>
							<div class="counter-text">
								<h1 class="counter">361</h1>
								<span>Students</span>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
						<div class="counter-wrapper text-center mb-30">
							<div class="counter-icon">
								<i class="fas fa-briefcase"></i>
							</div>
							<div class="counter-text">
								<h1 class="counter">35</h1>
								<span>Courses</span>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
						<div class="counter-wrapper text-center mb-30">
							<div class="counter-icon">
								<i class="fas fa-users"></i>
							</div>
							<div class="counter-text">
								<h1 class="counter">16</h1>
								<span>Teachers</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- counter-area-end -->
		<!-- free-course-area-start -->
		<div class="free-course-area yellow-bg pt-50 pb-30">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-8">
						<div class="free-course-wrapper mb-20">
							<div class="free-course-icon">
								<a href="#"><i class="far fa-thumbs-up"></i></a>
							</div>
							<div class="free-course-text">
								<h3>Try Our Free Trial Courses</h3>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-4">
						<div class="free-course-button text-md-right mt-10 mb-20">
						<a href="#">JOIN NOW</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- free-course-area-end -->
		<!-- pricing-area-start -->
		<div class="pricing-area pt-90 pb-70">
			<div class="container">
				<div class="section-title section1-title text-center mb-45">
					<h1>Pricing Tables</h1>
					<p>Lorem ipsum dolor sit amet consectetuer adipiscing elit</p>
				</div>
				<div class="row justify-content-between">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 pricing-custom">
						<div class="pricing-wrapper text-center mb-30">
							<div class="pricing-top">
								<h4>Standard</h4>
								<div class="pricing-text">
									<h1><span>$</span>40</h1>
								</div>
								<span>We are just getting started</span>
							</div>
							<ul class="pricing-menu">
								<li>Access to 3 courses</li>
								<li>Example code available</li>
								<li>Medium quality videos</li>
								<li>Medium quality videos</li>
								<li>Certiﬁcate after completion</li>
								<li>Private sessions</li>
							</ul>
							<div class="pricing-button">
								<a href="#">Get it now</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 pricing-custom">
						<div class="pricing-wrapper active text-center mb-30">
							<div class="pricing-top">
								<h4>Professional</h4>
								<div class="pricing-text">
									<h1><span>$</span>60</h1>
								</div>
								<span>The most popular plan</span>
							</div>
							<ul class="pricing-menu">
								<li>Access to 3 courses</li>
								<li>Example code available</li>
								<li>Medium quality videos</li>
								<li>Medium quality videos</li>
								<li>Certiﬁcate after completion</li>
								<li>Private sessions</li>
							</ul>
							<div class="pricing-button active">
								<a href="#">Get it now</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 pricing-custom">
						<div class="pricing-wrapper text-center mb-30">
							<div class="pricing-top">
								<h4>Advanced</h4>
								<div class="pricing-text">
									<h1><span>$</span>90</h1>
								</div>
								<span>Expelience the best for e-learning</span>
							</div>
							<ul class="pricing-menu">
								<li>Access to 3 courses</li>
								<li>Example code available</li>
								<li>Medium quality videos</li>
								<li>Medium quality videos</li>
								<li>Certiﬁcate after completion</li>
								<li>Private sessions</li>
							</ul>
							<div class="pricing-button">
								<a href="#">Get it now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pricing-area-end -->
		<!-- testimonial-area-start -->
		<div class="testimonial-area pt-90 pb-100 gray1-bg">
			<div class="container">
				<div class="row">
					<div class="offset-xl-2 col-xl-8">
						<div class="testimonial-active owl-carousel">
							<div class="testimonial-wrapper">
								<div class="testimonial-text text-center">
									<h1>what people say</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p>
								</div>
								<div class="testimonial-information">
									<div class="testimonial-img">
										<img src="img/testimonial/1.png" alt="">
									</div>
									<div class="testimonial-name">
										<h4>Nathaneal Down</h4>
										<span>Front-end Developer</span>
									</div>
								</div>
							</div>
							<div class="testimonial-wrapper">
								<div class="testimonial-text text-center">
									<h1>what people say</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p>
								</div>
								<div class="testimonial-information">
									<div class="testimonial-img">
										<img src="img/testimonial/1.png" alt="">
									</div>
									<div class="testimonial-name">
										<h4>Nathaneal Down</h4>
										<span>Front-end Developer</span>
									</div>
								</div>
							</div>
							<div class="testimonial-wrapper">
								<div class="testimonial-text text-center">
									<h1>what people say</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p>
								</div>
								<div class="testimonial-information">
									<div class="testimonial-img">
										<img src="img/testimonial/1.png" alt="">
									</div>
									<div class="testimonial-name">
										<h4>Nathaneal Down</h4>
										<span>Front-end Developer</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- testimonial-area-end -->
		<!-- news-area-start -->
		<div class="news-area pt-90 pb-70">
			<div class="container">
				<div class="section-title text-center mb-45">
					<h1>letest news</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="news-wrapper mb-30">
							<div class="news-img">
								<a href="blog-details.html"><img src="img/news/news1.jpg" alt="" /></a>
							</div>
							<div class="news-border">
								<div class="news-text">
									<h4><a href="blog-details.html">Top 20 WordPress Themes For Local Businesses</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore</p>
								</div>
								<div class="news-meta">
									<span><i class="fas fa-calendar-alt"></i>12 april 2018</span>
									<span><i class="fas fa-comments"></i>15 comments</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="news-wrapper mb-30">
							<div class="news-img">
								<a href="blog-details.html"><img src="img/news/news2.jpg" alt="" /></a>
							</div>
							<div class="news-border">
								<div class="news-text">
									<h4><a href="blog-details.html">Top 10 Mobile UX Design Trends For 2018</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore</p>
								</div>
								<div class="news-meta">
									<span><i class="fas fa-calendar-alt"></i>12 april 2018</span>
									<span><i class="fas fa-comments"></i>15 comments</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 offset-md-3 offset-lg-0">
						<div class="news-wrapper mb-30">
							<div class="news-img">
								<a href="blog-details.html"><img src="img/news/news3.jpg" alt="" /></a>
							</div>
							<div class="news-border">
								<div class="news-text">
									<h4><a href="blog-details.html">How to Standout at Start of Your UX Career</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore</p>
								</div>
								<div class="news-meta">
									<span><i class="fas fa-calendar-alt"></i>12 april 2018</span>
									<span><i class="fas fa-comments"></i>15 comments</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- news-area-start -->
		<!-- free-course-area-start -->
		<div class="free-course-area yellow-bg pt-50 pb-30">
			<div class="container">
				<div class="row">
					<div class="col-xl-9 col-lg-9 col-md-12">
						<div class="free-course-wrapper mb-30">
							<div class="free-course-icon">
								<a href="#"><i class="fas fa-users"></i></a>
							</div>
							<div class="free-course-text">
								<h3>350+ People already Joined to our club, it’s the first step</h3>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-12">
						<div class="free-courses-button text-center mt-10 mb-30">
						<a href="#">Join to us now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- free-course-area-end -->
		<footer>
			<!-- footer-top-area-start -->
			<div class="footer-top-area blue-bg pt-100 pb-70">
				<div class="container">
					<div class="footer-border pb-20">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="footer-wrapper mb-30">
									<h3 class="footer-title">About us</h3>
									<div class="footer-text">
										<p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed doeiu smod tempor incididunt ipsum</p>
									</div>
									<div class="footer-icon">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-google-plus-g"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
								</div>
								</div>
							</div>
							<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 d-sm-none d-md-block">
								<div class="footer-wrapper mb-30">
									<h3 class="footer-title">Quick Links</h3>
									<ul class="footer-menu">
										<li><a href="#"><i class="fas fa-angle-right"></i>About Us</a></li>
										<li><a href="#"><i class="fas fa-angle-right"></i>Contact Us</a></li>
										<li><a href="#"><i class="fas fa-angle-right"></i>News</a></li>
										<li><a href="#"><i class="fas fa-angle-right"></i>shop</a></li>
										<li><a href="#"><i class="fas fa-angle-right"></i>Team members</a></li>
										<li><a href="#"><i class="fas fa-angle-right"></i>Success Stories</a></li>
										<li><a href="#"><i class="fas fa-angle-right"></i>FAQ’s</a></li>
										<li><a href="#"><i class="fas fa-angle-right"></i>Privacy policy</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
								<div class="footer-wrapper mb-30">
									<h3 class="footer-title">Newsletter</h3>
									<div class="footer-info">
										<p>Subscribe to the newsletter to be informed of recent news.</p>
									</div>
									<form id="footer-form" action="#">
										<input placeholder="Your Email ..." type="text">
										<button><i class="fas fa-long-arrow-alt-right"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-icon-area pt-50">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="footer-icon-wrapper mb-30">
									<div class="footers-icon">
										<a href="#"><i class="fas fa-phone"></i></a>
									</div>
									<div class="footer-icon-text">
										<h4>call us</h4>
										<span>406-258-5992</span>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="footer-icon-wrapper mb-30">
									<div class="footers-icon">
										<a href="#"><i class="fas fa-envelope"></i></a>
									</div>
									<div class="footer-icon-text">
										<h4>mail us</h4>
										<span>support@mugli.com</span>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 d-sm-none d-md-block">
								<div class="footer-icon-wrapper mb-30">
									<div class="footers-icon">
										<a href="#"><i class="fas fa-home"></i></a>
									</div>
									<div class="footer-icon-text">
										<h4>visit us</h4>
										<span>1 Dhaka St, Tanta , AlGharbia, Egypt.</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-top-area-end -->
			<!-- footer-bottom-area-start -->
			 <div class="footer-bottom-area blue2-bg ptb-20">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-4 col-sm-12">
							<div class="copyright">
								<p>Copyright <i class="far fa-copyright"></i> 2018 Mugli.</p>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-8 col-sm-12">
							<div class="footer-bottom-wrapper">
								<ul class="footer-link  text-md-right">
									<li><a href="#">About</a></li>
									<li><a href="#"> Terms & Conditions </a></li>
									<li><a href="#">Privacy Policy </a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			 </div>
			<!-- footer-bottom-area-end -->
		</footer>















    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>


</body>
>>>>>>> Stashed changes
</html>
