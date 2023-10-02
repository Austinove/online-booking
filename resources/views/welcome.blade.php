@extends('layouts.layout')

@section('layout-content')
<!--====================================
=            Hero Section            =
=====================================-->
	<section class="section gradient-banner" style="height: 20px;">
		<div class="shapes-container">
			<div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
			<div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
			<div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
			<div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
			<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
			<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
			<div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
			<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
			<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
			<div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
			<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
			<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
			<div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
			<div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
			<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
			<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
		</div>
	</section>
<!--====  End of Hero Section  ====-->

	<section class="section pt-0 position-relative pull-top">
		<div class="container">
			<div class="rounded shadow p-5 bg-white">
				<div class="row">
					<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                        <a href="{{ route('forms') }}" style="text-decoration: none;">
                            <i class="ti-target text-primary h1"></i>
                            <h3 class="mt-4 text-capitalize h5 ">Start Registration</h3>
                            <p class="regular text-muted">Begin your national ID registration and access government services seamlessly. start your journey to secure identification in just a few steps.</p>
                        </a>
					</div>
					<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                        <a href="{{ route('resume') }}" style="text-decoration: none;">
                            <i class="ti-loop text-primary h1"></i>
                            <h3 class="mt-4 text-capitalize h5 ">Resume Registration</h3>
                            <p class="regular text-muted">Continiue your national ID registration where you left off. Pick up where you paused and complete your registration process.</p>
                        </a>
					</div>
					<div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
                        <a href="{{ route('status') }}" style="text-decoration: none;">
                            <i class="ti-eye text-primary h1"></i>
                            <h3 class="mt-4 text-capitalize h5 ">Check Status</h3>
                            <p class="regular text-muted">Track the status of your national ID application in real-time. Stay updated on the progress of your ID registration with just a few clicks.</p>
                            </p>
                        </a>
					</div>
				</div>
			</div>
		</div>
	</section>

<!--==================================
=            Feature Grid            =
===================================-->
	<section class="feature section pt-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 ms-auto justify-content-center">
					<!-- Feature Mockup -->
					<div class="image-content" data-aos="fade-right">
						<img class="img-fluid" src="{{ asset('/assets/images/feature/feature-new-01.jpg') }}" alt="iphone">
					</div>
				</div>
				<div class="col-lg-6 mr-auto align-self-center">
					<div class="feature-content">
						<!-- Feature Title -->
						<h2>Effortless Registration Made Secure. </h2>
						<!-- Feature Description -->
						<p class="desc">Discover the streamlined, secure, and user-friendly path to national ID registration, ensuring efficiency and data protection.</p>
					</div>
					<!-- Testimonial Quote -->
					<div class="testimonial">
						<p>
							"Empowering citizens with secure, efficient and user-centric national ID registration-where your identity."
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection