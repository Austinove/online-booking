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
					@if(session('step') == 3)
					<button style="width: 300px" class="nav-link my-2 text-start active" id="v-pills-partb-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partb" type="button" role="tab" aria-controls="v-pills-partb" aria-selected="false">
						PART B (For Adults)
					</button>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-partb-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partb" type="button" role="tab" aria-controls="v-pills-partb" aria-selected="false">
						PART B (For Adults)
					</button>
					@endif
					@if(session('step') == 4)
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partcf-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcf" type="button" role="tab" aria-controls="v-pills-partcf" aria-selected="false">
						PART C (Father's Details)
					</button>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-partcf-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcf" type="button" role="tab" aria-controls="v-pills-partcf" aria-selected="false">
						PART C (Father's Details)
					</button>
					@endif
					@if(session('step') == 5)
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partcm-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcm" type="button" role="tab" aria-controls="v-pills-partcm" aria-selected="false">
						PART C (Mother's Details)
					</button>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-partcm-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcm" type="button" role="tab" aria-controls="v-pills-partcm" aria-selected="false">
						PART C (Mother's Details)
					</button>
					@endif
					@if(session('step') == 6)
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partcg-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcg" type="button" role="tab" aria-controls="v-pills-partcg" aria-selected="false">
						PART C (Guardian's Details)
					</button>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-partcg-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcg" type="button" role="tab" aria-controls="v-pills-partcg" aria-selected="false">
						PART C (Guardian's Details)
					</button>
					@endif
					@if(session('step') == 7)
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-confirm-tab" data-bs-toggle="pill" data-bs-target="#v-pills-confirm" type="button" role="tab" aria-controls="v-pills-confirm" aria-selected="false">
						CONFIRM INFORMATION
					</button>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-confirm-tab" data-bs-toggle="pill" data-bs-target="#v-pills-confirm" type="button" role="tab" aria-controls="v-pills-confirm" aria-selected="false">
						CONFIRM INFORMATION
					</button>
					@endif
				</div>
				<div class="tab-content" id="v-pills-tabContent">
					@elseif(session('step') == 3)
					<div class="tab-pane fade show active" id="v-pills-partb" role="tabpanel" aria-labelledby="v-pills-partb-tab" tabindex="0">
						<div class="col-sm-10 m-auto text-center my-4">
							<h1>PART B</h1>
						</div>
						<div class="col-10 mx-auto">
							<form action="">
								<div class="row">
									<div class="col-md-10 mb-2">
										<strong>Spouse Details</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="ssurname" class="form-label">Surname <small class="text-danger">*</small></label>
										<input class="form-control main" name="ssurname" type="text" placeholder="Surname" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="sgivenname" class="form-label">Given Name <small class="text-danger">*</small></label>
										<input class="form-control main" name="sgivenname" type="text" placeholder="Given Name" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="sothername" class="form-label">Other Name</label>
										<input class="form-control main" name="sothername" type="text" placeholder="Other Name">
									</div>
									<div class="col-md-6 mb-2">
										<label for="smaidenname" class="form-label">Maiden Name</label>
										<input class="form-control main" name="smaidenname" type="text" placeholder="Maiden Name">
									</div>
									<div class="col-md-6 mb-2">
										<label for="snin" class="form-label">National ID Number (NIN) </label>
										<input class="form-control main" name="snin" type="text" placeholder="NIN">
									</div>
									<div class="col-md-10 mb-2">
										<span>Citzenship Type</span>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="ssitz" class="form-label">Citzenship<small class="text-danger">*</small></label>
										<select class="form-select form-select-lg" name="ssitz" aria-label="Default select example" required>
											<option selected>Select Citzenship</option>
											<option value="by_birth">By Birth</option>
											<option value="by_registration">By Registration</option>
											<option value="by_naturalization">By Naturalization</option>
											<option value="dual_citzenship">Dual Citzenship</option>
											<option value="before_1995">Citzenship before 1995</option>
										</select>
									</div>
									<div class="col-md-6 mb-2">
										<label for="sdual" class="form-label">State Citzenship and Country <small>(If Dual Citzenship)</small></label>
										<input class="form-control main" name="sdual" type="text" placeholder="Enter Citzenship/Country">
									</div>
									<div class="col-md-6 mb-2">
										<label for="smariage_place" class="form-label">Place of Marriage <small class="text-danger">*</small></label>
										<input class="form-control main" name="smariage_place" type="text" placeholder="Place of Marriage" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="dom" class="form-label">Date of Marriage <small class="text-danger">*</small></label>
										<input class="form-control main" name="dom" max="<?php echo date('Y-m-d') ?>" type="date" placeholder="Date of Mariage" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mariage_type" class="form-label">Type of Marriage<small class="text-danger">*</small></label>
										<select class="form-select form-select-lg" name="mariage_type" aria-label="Default select example" required>
											<option selected disabled>Select Type</option>
											<option value="Civil">Civil</option>
											<option value="Religious">Religious</option>
											<option value="Cultural">Cultural</option>
										</select>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mariage_number" class="form-label">Marriage Certificate No.<small class="text-danger">*</small></label>
										<input class="form-control main" type="text" name="mariage_number" placeholder="Certificate Number">
									</div>
									<div class="col-md-6 mb-2">
										<label for="other_spouses" class="form-label">Number of Other Spouses<small>(Optional)</small></label>
										<input class="form-control main" type="number" name="other_spouses" placeholder="Other Spouces Number">
									</div>
									<hr />
									<div class="col-md-12 d-flex mt-2">
										<button type="submit" class="btn btn-secondary me-auto">
											<i class="ti-arrow-left"></i> Previous 
										</button>
										<button type="submit" class="btn btn-primary ms-auto">
											Next Form <i class="ti-arrow-right"></i>
										</button>
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