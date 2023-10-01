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
                            <p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
							tempore ipsam dignissimos molestias.</p>
                        </a>
					</div>
					<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                        <a href="{{ route('resume') }}" style="text-decoration: none;">
                            <i class="ti-loop text-primary h1"></i>
                            <h3 class="mt-4 text-capitalize h5 ">Resume Registration</h3>
                            <p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
                                tempore ipsam dignissimos molestias.</p>
                        </a>
					</div>
					<div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
                        <a href="{{ route('status') }}" style="text-decoration: none;">
                            <i class="ti-eye text-primary h1"></i>
                            <h3 class="mt-4 text-capitalize h5 ">Check Status</h3>
                            <p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
                                tempore ipsam dignissimos molestias.</p>
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
						<h2>Increase your productivity with </h2>
						<!-- Feature Description -->
						<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
							aliquip ex ea commodo consequat.</p>
					</div>
					<!-- Testimonial Quote -->
					<div class="testimonial">
						<p>
							"InVision is a window into everything that's being designed at Twitter. It gets all of our best work in one
							place."
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection