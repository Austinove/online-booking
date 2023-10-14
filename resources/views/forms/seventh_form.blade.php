@extends('layouts.layout')

@section('layout-content')
<!-- <script>
	window.onbeforeunload = function() {
	return "Take note of the Unique CodeData";
	};
</script> -->
<section class="mt-4">
	<div class="container">
		<div class="row">
			<div class="col-md-10 mx-auto">
				<!-- Page Title -->
				<h2>Registration Forms</h2>
				<!-- Page Description -->
				<div class="row">
					<div class="col-md-8">
						<h5 class="mt-5"><strong>Plesse Note:</strong></h5>
						<p>As you are registering, the system will provide you with a <strong>Unique Code</strong> that you will use to resume your registration process</p>
					</div>
					@if(!empty($token))
					<div class="col-md-4">
						<div class="alert alert-info" role="alert">
							<h4 class="alert-heading"><strong>Please Note!</strong></h4>
							<h2><strong>{{ $token }}</strong></h2>
							<hr>
							<p class="mb-0">Please take note of the <strong>Unique Code</strong>, you will use it to resume application</p>
						</div>
					</div>
					@endif
				</div>
				<hr/>
				@if(!empty($message))
				<div class="alert alert-{{ $status }} alert-dismissible fade show" role="alert">
					<strong>{{ $message }}</strong>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				@endif
			</div>
		</div>
	</div>
</section>
<section class="my-2 address">
	<div class="container mb-5">
		<div class="row">
			<div class="d-flex col-md-10 align-items-start mx-auto">
				<div class="nav flex-column nav-pills align-items-start mt-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a style="width: 300px" href="{{ route('return_step1', ['token' => $token,'id' => $person_id]) }}" class="nav-link my-2 text-start" id="v-pills-parta-tab" type="button" role="tab" aria-controls="v-pills-parta" aria-selected="true">
						PART A (Personal Information)
					</a>
					<a style="width: 300px" href="{{ route('return_step2', ['token' => $token,'id' => $person_id]) }}" class="nav-link my-2 text-start" id="v-pills-parta_place-tab" type="button" role="tab" aria-controls="v-pills-parta_place" aria-selected="false">
						PART A (Place of Residence/birth/Origin)
					</a>
					<a style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partb-tab" href="{{ route('third_form', ['token' => $token,'id' => $person_id]) }}" type="button" role="tab" aria-controls="v-pills-partb" aria-selected="false">
						PART B (For Adults)
					</a>
					<a style="width: 300px" class="nav-link my-2 text-start" href="{{ route('fourth_form', ['token' => $token,'id' => $person_id]) }}" id="v-pills-partcf-tab" type="button" role="tab" aria-controls="v-pills-partcf" aria-selected="false">
						PART C (Father's Details)
					</a>
					<a style="width: 300px" class="nav-link my-2 text-start" href="{{ route('fifth_form', ['token' => $token,'id' => $person_id]) }}" id="v-pills-partcm-tab" type="button" role="tab" aria-controls="v-pills-partcm" aria-selected="false">
						PART C (Mother's Details)
					</a>
					<a style="width: 300px" class="nav-link my-2 text-start" href="{{ route('sixth_form', ['token' => $token,'id' => $person_id]) }}" id="v-pills-partcg-tab" type="button" role="tab" aria-controls="v-pills-partcg" aria-selected="false">
						PART C (Guardian's Details)
					</a>
					<button style="width: 300px" class="nav-link my-2 text-start active" id="v-pills-confirm-tab" data-bs-toggle="pill" data-bs-target="#v-pills-confirm" type="button" role="tab" aria-controls="v-pills-confirm" aria-selected="false">
						CONFIRM INFORMATION
					</button>
				</div>
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-confirm" role="tabpanel" aria-labelledby="v-pills-confirm-tab" tabindex="0">
						<div class="col-sm-10 m-auto text-center my-4">
							<h1>Confirm Your Information </h1>
						</div>
						<div class="col-10 mx-auto">
							<form action="">
								<div class="row">
									<div class="col-md-10 mb-2">
										<h3 class="text-weight-bold">PART A</h3>
										<strong>Personal Information</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Surname: </strong>
											John
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Given Name: </strong>
											Doe
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Other Name: </strong>
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Maiden Name: </strong>
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Date of Birth: </strong>
											26-09-2023
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Email Address: </strong>
											test@email.com
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Home/Mobile No: </strong>
											+256777999888
										</span>
									</div>
									<div class="col-md-10 mb-2">
										<span>Others</span>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Highest Level of Education: </strong>
											Masters
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Occupation: </strong>
											Software Engineer
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Religion: </strong>
											Christian
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Disabilities: </strong>
										</span>
									</div>
									<hr />



									<div class="col-md-10 mb-2">
										<h3 class="text-weight-bold">PART B</h3>
										<strong>Personal Information</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Surname: </strong>
											John
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Given Name: </strong>
											Doe
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Other Name: </strong>
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Maiden Name: </strong>
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Date of Birth: </strong>
											26-09-2023
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Email Address: </strong>
											test@email.com
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Home/Mobile No: </strong>
											+256777999888
										</span>
									</div>
									<div class="col-md-10 mb-2">
										<span>Others</span>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Highest Level of Education: </strong>
											Masters
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Occupation: </strong>
											Software Engineer
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Religion: </strong>
											Christian
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong for="surname" class="form-label">Disabilities: </strong>
										</span>
									</div>
									<hr />
									<div class="col-md-10 mb-2">
										<h3 class="text-weight-bold">Declaration</h3>
										<strong>(Confirm by checking the checkbox)</strong>
									</div>
									<div class="form-check my-3">
										<input class="form-check-input" name="declaration" type="checkbox" value="" id="declaration" style="width: 20px; height: 20px;">
										<p class="form-check-label ms-2" for="declaration">
											I <u class="mx-2"><strong>John Doe</strong></u> declare that the information above pertaining to the birth of the child/applicant and particulars above is true and correct and that I know this of my own knowledge.
										</p>
									</div>
									<hr />
									<div class="col-md-12 d-flex mt-2">
										<button type="submit" class="btn btn-primary ms-auto">Submit Form <i class="ti-check"></i></button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection