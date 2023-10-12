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
					<button style="width: 300px" class="nav-link my-2 text-start active" id="v-pills-partcm-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcm" type="button" role="tab" aria-controls="v-pills-partcm" aria-selected="false">
						PART C (Mother's Details)
					</button>
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
					<div class="tab-pane fade show active" id="v-pills-partcm" role="tabpanel" aria-labelledby="v-pills-partcm-tab" tabindex="0">
						<div class="col-sm-10 m-auto text-center my-4">
							<h1>PART C </h1>
						</div>
						<div class="col-10 mx-auto">
							<form action="">
								<div class="row">
									<div class="col-md-10 mb-2">
										<strong>Mother's Details</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="mother_surname" class="form-label">Surname <small class="text-danger">*</small></label>
										<input class="form-control main" name="mother_surname" type="text" placeholder="Surname" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_givenname" class="form-label">Given Name <small class="text-danger">*</small></label>
										<input class="form-control main" name="mother_givenname" type="text" placeholder="Given Name" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_othername" class="form-label">Other Name</label>
										<input class="form-control main" name="mother_othername" type="text" placeholder="Other Name">
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_maiden" class="form-label">Maiden Name <small class="text-danger">*</small></label>
										<input class="form-control main" name="mother_maiden" type="text" placeholder="Maiden Name" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_nin" class="form-label">National ID Number (NIN) <small class="text-danger">*</small> </label>
										<input class="form-control main" name="mother_nin" type="text" placeholder="Mother NIN">
									</div>
									<div class="col-md-10 mb-2">
										<strong>Citzenship Type</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="mother_citz" class="form-label">Citzenship<small class="text-danger">*</small></label>
										<select class="form-select form-select-lg" name="mother_citz" aria-label="Default select example" required>
											<option selected>Select Citzenship</option>
											<option value="by_birth">By Birth</option>
											<option value="by_registration">By Registration</option>
											<option value="by_naturalization">By Naturalization</option>
											<option value="dual_citzenship">Dual Citzenship</option>
											<option value="before_1995">Citzenship before 1995</option>
										</select>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_dual" class="form-label">State Citzenship and Country <small>(If Dual Citzenship)</small></label>
										<input class="form-control main" name="mother_dual" type="text" placeholder="Enter Citzenship/Country">
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_living_status" class="form-label">Living Status <small class="text-danger">*</small></label>
										<select class="form-select form-select-lg" name="mother_living_status" aria-label="Default select example" required>
											<option selected>Select Status</option>
											<option value="Alive">Alive</option>
											<option value="Deceased">Deceased</option>
											<option value="Unknown">Unknown</option>
										</select>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_occupation" class="form-label">Occupation<small class="text-danger">*</small></label>
										<input class="form-control main" type="text" name="mother_occupation" placeholder="Occupation">
									</div>

									<div class="col-md-10 mb-2">
										<strong>Mother's Place of Residence</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="mother_country" class="form-label">Country <small class="text-danger">*</small></label>
										<input class="form-control main" name="mother_country" type="text" placeholder="Country" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_district" class="form-label">District <small class="text-danger">*</small></label>
										<input class="form-control main" name="mother_district" type="text" placeholder="District" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_county" class="form-label">County <small class="text-danger">*</small></label>
										<input class="form-control main" name="mother_county" type="text" placeholder="County" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_subcounty" class="form-label">Sub-County <small class="text-danger">*</small></label>
										<input class="form-control main" name="mother_subcounty" type="text" placeholder="Sub-County" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_parish" class="form-label">Parish/Ward <small class="text-danger">*</small></label>
										<input class="form-control main" name="mother_parish" type="text" placeholder="Parish/Ward" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_village" class="form-label">Village <small class="text-danger">*</small></label>
										<input class="form-control main" name="mother_village" type="text" placeholder="Village" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_street" class="form-label">Street <small class="text-danger">*</small></label>
										<input class="form-control main" name="mother_street" type="text" placeholder="Street" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_plot" class="form-label">Plot/House No. <small class="text-danger">*</small></label>
										<input class="form-control main" name="mother_plot" type="text" placeholder="Plot/House No." required>
									</div>

									<div class="col-md-10 mb-2">
										<strong>Mother's Place of Origin</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="omother_country" class="form-label">Country <small class="text-danger">*</small></label>
										<input class="form-control main" name="omother_country" type="text" placeholder="Country" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="omother_district" class="form-label">District <small class="text-danger">*</small></label>
										<input class="form-control main" name="omother_district" type="text" placeholder="District" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="omother_county" class="form-label">County <small class="text-danger">*</small></label>
										<input class="form-control main" name="omother_county" type="text" placeholder="County" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="omother_subcounty" class="form-label">Sub-County <small class="text-danger">*</small></label>
										<input class="form-control main" name="omother_subcounty" type="text" placeholder="Sub-County" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="omother_parish" class="form-label">Parish/Ward <small class="text-danger">*</small></label>
										<input class="form-control main" name="omother_parish" type="text" placeholder="Parish/Ward" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="omother_village" class="form-label">Village <small class="text-danger">*</small></label>
										<input class="form-control main" name="omother_village" type="text" placeholder="Village" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="omother_street" class="form-label">Street <small class="text-danger">*</small></label>
										<input class="form-control main" name="omother_street" type="text" placeholder="Street" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="omother_plot" class="form-label">Plot/House No. <small class="text-danger">*</small></label>
										<input class="form-control main" name="omother_plot" type="text" placeholder="Plot/House No." required>
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