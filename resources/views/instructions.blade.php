@extends('layouts.layout')

@section('layout-content')
<!--================================
=            Page Title            =
=================================-->

<section class="section page-title">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 m-auto">
				<!-- Page Title -->
				<h1>How to Register</h1>
				<!-- Page Description -->
				<p>Welcome to our instructions page. Here, you'll find step-by-step guidance on how to complete your national ID registration. Get started with your registration process by following our comprehensive instructions for a seamless experience</p>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--====================================
=            Privacy Policy            =
=====================================-->
<section class="privacy section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<nav class="privacy-nav">
					<ul>
						<li><a class="nav-link scrollTo" href="#userLicense" class="scrollTo">User License</a></li>
						<li><a class="nav-link scrollTo" href="#disclaimer" class="scrollTo">Disclaimer</a></li>
						<li><a class="nav-link scrollTo" href="#limitations" class="scrollTo">Limitations</a></li>
						<li><a class="nav-link scrollTo" href="#governigLaw" class="scrollTo">Governing Law</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-lg-9">
				<div class="block">
					<!-- User License -->
					<div id="userLicense" class="policy-item">
						<div class="title">
							<h3>Use License</h3>
						</div>
						<div class="policy-details">
							<p>Please review the terms and conditions of the use for this sytem. You use of this platform is subject to our licensing agreement. Before proceeding, take a moment to familiarize yourself with the usage terms and conditions outlined in our license agreement for this registration system.</p>
							<p>By using this system, you agree to adhere to the terms of our license, ensuring responsible and lawful usage. Our licensing terms aim to maintain the security and integrity of the registration process, providing a safe and reliable experience for all users.</p>
						</div>
					</div>
					<!-- Disclaimer -->
					<div id="disclaimer" class="policy-item">
						<div class="title">
							<h3>Disclaimer</h3>
						</div>
						<div class="policy-details">
							<p>This system is intended solely for national ID registration purposes. Any misuse or unauthorised access is strictly prohibited. he information provided in this system is for registration purposes only and should not be considered legal advice or official documentation.</p>
							<p> While every effort is made to ensure the accuracy of the information, we cannot guarantee that all data is error-free. Users are encouraged to review their details during the registration process. Please read and acknowledge our disclaimer, emphasizing responsible and lawful usage of this platform for national ID registration.</p>
						</div>
					</div
					<!-- Limitations -->
					<div id="limitations" class="policy-item">
						<div class="title">
							<h3>Limitations</h3>
						</div>
						<div class="policy-details">
							<p>Please be aware that this system has certain constraints. It does not provide legal advice, and the registration process may not be available during maintenance periods. While we strive for accuracy, we cannot gurantee the completeness of data entered by users. Additionally, this system does not handle issues unrelated to national ID registration.</p>
						</div>
					</div>
					<!-- Governing Law -->
					<div id="governigLaw" class="policy-item">
						<div class="title">
							<h3>Governing Law</h3>
						</div>
						<div class="policy-details">
							<p>The use of this system is subject to the laws and regulations of Uganda. Users are required to comply with these legal provisions while accessing and using the platform We advise users to familiarize themselves with the governing laws of Uganda to ensure compliance and a clear understanding of their rights and responsiblities while using this system.</p>
							<p>By using this system, you acknowledge that it operates under the jurisdiction of Uganda, and any legal matters related to its usage will be governed by the laws of this jurisdiction. Please note that any disputes or leagl issues arising from the use of this system will be resolved in accordance with the laws of Uganda.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Privacy Policy  ====-->
@endsection