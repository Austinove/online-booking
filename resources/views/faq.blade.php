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
				<h1>Frequently Asked Questions</h1>
				<!-- Page Description -->
				<p>Welcome to our FAQs section. Here, we address common questions and provide clear answers to assist you in using our national ID registration system effectively. Explore our Frequently Asked Questions to find quick answers to queries that many users about the registration process. If you don't find the information you need, please feel free to contact our support team.</p>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--=================================
=            FAQ Section            =
==================================-->
<section class="faq section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 m-auto">
				<div class="block shadow">
					<!-- Getting Started -->
					<div class="faq-item">
						<!-- Title -->
						<div class="faq-item-title">
							<h2>
								Getting Started
							</h2>
						</div>
						<!-- Get Started Accordion -->
						<div id="gstAccordion" data-children=".item">
						  <!-- Accordion Item 01 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#gstAccordion" href="#gstAccordion1">
							      How do I begin the national ID registration process?
							    </a>
						  	</div>
						    <div id="gstAccordion1" class="collapse show accordion-block">
						      <p>
						        To start your registration, visit the registration portal and follow the on-screen instructions. You'll be guided through the necessary steps to complete your application.
						      </p>
						    </div>
						  </div>
						  <!-- Accordion Item 02 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#gstAccordion" href="#gstAccordion2">
							      Can I register online, or do I need to visit a physical registraion center?
							    </a>
						  	</div>
						    <div id="gstAccordion2" class="collapse accordion-block">
						      <p>
						        You can initiate your registration online. However a physical visit to a registration center may be required for biometric data capture. Check the system for available appointment slots.
						      </p>
						    </div>
						  </div>
						  <!-- Accordion Item 03 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#gstAccordion" href="#gstAccordion3">

							      How can I truck my application status?
							    </a>
						  	</div>
						    <div id="gstAccordion3" class="collapse accordion-block">
						      <p>
						        Yo can check your application status by entering your unique application code in the Application Status section on the home page.
						      </p>
						    </div>
						  </div>
						  <!-- Accordion Item 04 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#gstAccordion" href="#gstAccordion4">
							      What if I encounter technical issues during registration?
							    </a>
						  	</div>
						    <div id="gstAccordion4" class="collapse accordion-block">
						      <p>
						        If you experience technical problems,please contact our support teamthrough the provided channels. We're here to assist you with issues you may face.
						      </p
						    </div>
						  </div>
						  <!-- Accordion Item 05 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#gstAccordion" href="#gstAccordion5">
							      Is there any fee for national ID registration?
							    </a>
						  	</div>
						    <div id="gstAccordion5" class="collapse accordion-block">
						      <p>
						        No, there are no fees required for national ID registration. This process is free of charge for eligible applicants.
						      </p>
						    </div>
						  </div>
						  <!-- Accordion Item 06 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#gstAccordion" href="#gstAccordion6">
							      Is there a deadline for completing the national ID registration process, or can I register any time?
							    </a>
						  	</div>
						    <div id="gstAccordion6" class="collapse accordion-block">
						      <p>
						        There may not be a strict deadline for national ID registration in many cases, but it's advisable to complete the process as soon as possible, especially if it's a legal requirement or necessary for accessimg government services. Timely registration ensures that you have proper identification when you need it.
						      </p>
						    </div>
						  </div>
						</div>
					</div>
					<!-- Account Accordion -->
					<div class="faq-item">
						<!-- Title -->
						<div class="faq-item-title">
							<h2>
								Account
							</h2>
						</div>
						<!-- Account Accordion -->
						<div id="accountAccordion" data-children=".item">
						  <!-- Accordion Item 01 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#accountAccordion" href="#accountAccordion1">
							      How do I create an account for national ID registration?
							    </a>
						  	</div>
						    <div id="accountAccordion1" class="collapse accordion-block">
						      <p>
								To create an account, visit the registration portal and select the "Sign Up" or "Create Account" option. Follow the on-screen instructions to provide the required information and create account.
						      </p>
						    </div>
						  </div>
						  <!-- Accordion Item 02 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#accountAccordion" href="#accountAccordion2">
							    What should I do if I forget my account password?
							    </a>
						  	</div>
						    <div id="accountAccordion2" class="collapse accordion-block">
						      <p>
						        If you forget your password, click on the "Forgot Password" or "Reset password" option on the login page. Follow the prompts to reset your password via email or other verification methods.
						      </p>
						    </div>
						  </div>
						  <!-- Accordion Item 03 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#accountAccordion" href="#accountAccordion3">
							      How can I ensure the security of my account and personal information?
							    </a>
						  	</div>
						    <div id="accountAccordion3" class="collapse accordion-block">
						      <p>
						        To enhance the security of your account, use strong and unique passwords, enable two-factor authentication if available, and avoid sharing your account crudentials with anyone. Regularly review and update your password for added protection.
						      </p>
						    </div>
						  </div>
						  <!-- Accordion Item 04 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#accountAccordion" href="#accountAccordion4">
							      Can I multiple accounts for different family members in the same household?
							    </a>
						  	</div>
						    <div id="accountAccordion4" class="collapse accordion-block">
						      <p>
						        Typically, each individual should have their own separate account for national ID registration. It's important to register individually to ensure accurate and unique identification for each person. If you have questions about this, plese contact our support team for guidance.
						      </p>
						    </div>
						  </div>
						  <!-- Accordion Item 05 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#accountAccordion" href="#accountAccordion5">
							      Is it possible to deactivate or close my national ID registration account?
							    </a>
						  	</div>
						    <div id="accountAccordion5" class="collapse accordion-block">
						      <p>
						        Typically, account deactivation or closure may not be possible once the registration process is initiated, as your account is essential for accessing government services. However, if you have specific concerns or need assistance, please contact our support team forguidance on your situation.
						      </p>
						    </div>
						  </div>
						</div>
					</div>
					<!-- Pricing & License Accordion -->
					<div class="faq-item">
						<!-- Title -->
						<div class="faq-item-title">
							<h2>
								Pricing & License
							</h2>
						</div>
						<!-- Account Accordion -->
						<div id="plAccordion" data-children=".item">
						  <!-- Accordion Item 01 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#plAccordion" href="#plAccordion1">
							      Is there a fee for obtaining a national ID card?
							    </a>
						  	</div>
						    <div id="plAccordion1" class="collapse accordion-block">
						      <p>
						        No, obtaining a national ID card is typically free of charge for eligible citizens or residents. There should not be a direct fee associated with receiving the card itself.
						      </p>
						    </div>
						  </div>
						  <!-- Accordion Item 02 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#plAccordion" href="#plAccordion2">
							      Are there any additional costs or fees during the national ID registration process?
							    </a>
						  	</div>
						    <div id="plAccordion2" class="collapse accordion-block">
						      <p>
						        Generally,there are no additional costs or fees during the registration process.
						      </p>
						    </div>
						  </div>
						  <!-- Accordion Item 03 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#plAccordion" href="#plAccordion3">
							      Can I transfer or sell my national ID card to another person?
							    </a>
						  	</div>
						    <div id="plAccordion3" class="collapse accordion-block">
						      <p>
						        National ID cards are non-transferable and cannot be sold or exchanged. they are issued to individuals for their personal identification and use only.
						      </p>
						    </div>
						  </div>
						  <!-- Accordion Item 04 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#plAccordion" href="#plAccordion4">
							      Can I use the national ID registration system for commercial purposes or develop third-party applications using its data?
							    </a>
						  	</div>
						    <div id="plAccordion4" class="collapse accordion-block">
						      <p>
									The national ID registration system is typically intended for government use and personalidentification purposes. Commercial us or development of third-party applications using its data may be subject to specific licensing agreements and legal regulations. To inquire about such usage, please contct the relaevant authorities or licensing entity for guidance and permissions.
						      </p>
						    </div>
						  </div>
						  <!-- Accordion Item 05 -->
						  <div class="item">
						  	<div class="item-link">
							    <a data-toggle="collapse" data-parent="#plAccordion" href="#plAccordion5">
							    	How does the licensing of the national ID registration system work?
							    </a>
						  	</div>
						    <div id="plAccordion5" class="collapse accordion-block">
						      <p>
						        The licensing of the national ID registration system is typically governed by national or regional authorities. The system and it's software are usually licensed to operate within the legal framework defined by these authorities. Users are required to adhere to the terms and conditions outlined in the licensing agreement while using the system for registration.
						      </p>
						    </div>
						  </div>
						</div>
					</div>
					<!-- Getting Started Accordion -->
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of FAQ Section  ====-->
@endsection