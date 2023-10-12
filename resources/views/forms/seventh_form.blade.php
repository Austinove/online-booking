@extends('layouts.layout')

@section('layout-content')
<!-- <script>
	window.onbeforeunload = function() {
	return "Take note of the Unique CodeData";
	};
</script> -->
@if(session('data'))
print_r(data)
@endif
@if(session('token'))
<div class="modal fade" data-bs-backdrop="static" id="verticalycentered" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">Caution!</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="alert alert-info" role="alert">
				<h4 class="alert-heading"><strong>Please Note!</strong></h4>
				<h2>Code: <strong>{{ session('token') }}</strong></h2>
				<hr>
				<p class="mb-0">Please take note of the <strong>Unique Code</strong>, you will use it to resume application</p>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">
				Noted <i class="bi bi-check-circle"></i>
			</button>
		</div>
		</div>
	</div>
</div>
@endif
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
						<p>As you are registering, the system will provide you with a <strong>Unigue Code</strong> that you will use to resume your registration process</p>
					</div>
					@if(session('token'))
					<div class="col-md-4">
						<div class="alert alert-info" role="alert">
							<h4 class="alert-heading"><strong>Please Note!</strong></h4>
							<h2><strong>{{ session('token') }}</strong></h2>
							<hr>
							<p class="mb-0">Please take note of the <strong>Unique Code</strong>, you will use it to resume application</p>
						</div>
					</div>
					@endif
				</div>
				<hr/>
				@if(session('message'))
				<div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
					<strong>{{ session('message') }}</strong>
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
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-parta-tab" data-bs-toggle="pill" data-bs-target="#v-pills-parta" type="button" role="tab" aria-controls="v-pills-parta" aria-selected="true">
						PART A (Personal Information)
					</button>
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-parta_place-tab" data-bs-toggle="pill" data-bs-target="#v-pills-parta_place" type="button" role="tab" aria-controls="v-pills-parta_place" aria-selected="false">
						PART A (Place of Residence/birth/Origin)
					</button>
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partb-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partb" type="button" role="tab" aria-controls="v-pills-partb" aria-selected="false">
						PART B (For Adults)
					</button>
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partcf-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcf" type="button" role="tab" aria-controls="v-pills-partcf" aria-selected="false">
						PART C (Father's Details)
					</button>
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partcm-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcm" type="button" role="tab" aria-controls="v-pills-partcm" aria-selected="false">
						PART C (Mother's Details)
					</button>
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partcg-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcg" type="button" role="tab" aria-controls="v-pills-partcg" aria-selected="false">
						PART C (Guardian's Details)
					</button>
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
										<input class="form-check-input mx-4" name="declaration" type="checkbox" value="" id="declaration" style="width: 25px; height: 25px;">
										<h5 class="form-check-label" for="declaration">
											I <u class="mx-4">John Doe</u> declare that the information above pertaining to the birth of the child/applicant and particulars above is true and correct and that I know this of my own knowledge.
										</h5>
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