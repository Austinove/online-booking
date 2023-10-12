<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NIRA Online Booking</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
        <link rel="stylesheet" href="{{ asset('/assets/plugins/themify-icons/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/plugins/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/plugins/slick/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/plugins/fancybox/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/plugins/aos/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <!-- <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
        </div>
    </body> -->
    <body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


	<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
		<div class="container py-1">
			<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/assets/images/logo.png')}}" alt="logo" style="height: 55px;"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="ti-menu"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{ url('/') }}">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('instructions') }}">Instructions</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('faq') }}">FAQ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('contact') }}">Contact</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">Login</a>
				</li> -->
				<!-- <li class="nav-item">
					<a class="nav-link" href="{{ route('register') }}">Register</a>
				</li> -->
			</ul>
			</div>
		</div>
	</nav>

    <main>
        @yield('layout-content')
    </main>
    

	<footer>
	<div class="text-center bg-dark py-4">
		<small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Uganda Institute of Information and Communications Technology. GROUP 31</small class="text-secondary">
	</div>
	</footer>


	<!-- To Top -->
	<div class="scroll-top-to">
		<i class="ti-angle-up"></i>
	</div>
	
	<!-- JAVASCRIPTS -->
    <script src="{{ asset('/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/syotimer/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/aos/aos.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
    <script src="{{ asset('/assets/plugins/google-map/gmap.js') }}"></script>
    <script src="{{ asset('/assets/plugins/script.js') }}"></script>
    @if(!empty($token))
    <script>
    //opening modal on form page
      $(document).ready(function(){
        $('#verticalycentered').modal('show'); 
    });
    </script>
    @endif
</body>
</html>