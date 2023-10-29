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
					<button style="width: 300px" class="nav-link my-2 text-start active" id="v-pills-partcg-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcg" type="button" role="tab" aria-controls="v-pills-partcg" aria-selected="false">
						PART C (Guardian's Details)
					</button>
					<a style="width: 300px" class="nav-link my-2 text-start" href="{{ route('seventh_form', ['token' => $token,'id' => $person_id]) }}" id="v-pills-confirm-tab" type="button" role="tab" aria-controls="v-pills-confirm" aria-selected="false">
						CONFIRM INFORMATION
					</a>
				</div>
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-partcg" role="tabpanel" aria-labelledby="v-pills-partcg-tab" tabindex="0">
						<div class="col-sm-10 m-auto text-center my-4">
							<h1>PART C </h1>
						</div>
						<div class="col-10 mx-auto">
							<form method="POST" action="{{ route('guardian') }}">
								@csrf
								<div class="row">
									<div class="col-md-10 mb-2">
										<strong>1st Adoptive/Responsible Guardian's Details</strong>
									</div>
									<hr />
									@if(!empty($person_id))
									<input class="form-control main" type="hidden" name="personal_id" value="{{ $person_id }}">
									@endif
									@if(!empty($data))
									<input class="form-control main" type="hidden" name="guardian_id" value="{{ $data->id }}">
									@endif
									<div class="col-md-6 mb-2">
										<label for="guardian_surname" class="form-label">Surname <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->surname : "" }}' name="guardian_surname" id="guardian_surname" type="text" placeholder="Surname" required>
										<span id="guardian_surname_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="guardian_givenname" class="form-label">Given Name <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->given_name : "" }}' name="guardian_givenname" id="guardian_givenname" type="text" placeholder="Given Name" required>
										<span id="guardian_givenname_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="guardian_othername" class="form-label">Other Name</label>
										<input class="form-control main" value='{{!empty($data)? $data->other_name : "" }}' name="guardian_othername" id="guardian_othername" type="text" placeholder="Other Name">
										<span id="guardian_othername_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="guardian_pasport_no" class="form-label">Passport No. <small>(A must for Foreigners)</small> </label>
										<input class="form-control main" value='{{!empty($data)? $data->passport : "" }}' name="guardian_pasport_no" type="text" placeholder="Guardian Passport No">
									</div>
									<div class="col-md-6 mb-2">
										<label for="guardian_nin" class="form-label">National ID Number (NIN) </label>
										<input class="form-control main" value='{{!empty($data)? $data->nin : "" }}' name="guardian_nin" id="guardian_nin" type="text" placeholder="Guardian NIN">
										<span id="guardian_nin_span" class="text-danger"></span>
									</div>
									<div class="col-md-10 mb-2">
										<strong>Citzenship Type</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="guardian_citz" class="form-label">Citzenship<small class="text-danger">*</small></label>
										<select class="form-select form-select-lg" name="guardian_citz" aria-label="Default select example" required>
											@if(!empty($data))
											<option selected value="{{$data->citzenship}}">{{$data->citzenship}}</option>
											@else
											<option selected>Select Citzenship</option>
											@endif
											<option value="By Birth">By Birth</option>
											<option value="By Registration">By Registration</option>
											<option value="By Naturalization">By Naturalization</option>
											<option value="Dual Citzenshi">Dual Citzenship</option>
											<option value="Citzenship before 1995">Citzenship before 1995</option>
										</select>
									</div>
									<div class="col-md-6 mb-2">
										<label for="guardian_dual" class="form-label">State Citzenship and Country <small>(If Dual Citzenship)</small></label>
										<input class="form-control main"  value='{{!empty($data)? $data->state_nationality : "" }}' name="guardian_dual" id="guardian_dual" type="text" placeholder="Enter Citzenship/Country">
										<span id="guardian_dual_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="guardian_occupation" class="form-label">Occupation<small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->occupation : "" }}' type="text" name="guardian_occupation" id="guardian_occupation" placeholder="Occupation">
										<span id="guardian_occupation_span" class="text-danger"></span>
									</div>

									<div class="col-md-10 mb-2">
										<strong>Guardian's Residence Address</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="guardian_country" class="form-label">Country <small class="text-danger">*</small></label>
										<input class="form-control main"  value='{{!empty($data)? $data->country : "" }}' name="guardian_country" id="guardian_country" type="text" placeholder="Country" required>
										<span id="guardian_country_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="guardian_district" class="form-label">District <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->ditrict : "" }}' name="guardian_district" id="guardian_district" type="text" placeholder="District" required>
										<span id="guardian_district_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="guardian_county" class="form-label">County <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->county : "" }}' name="guardian_county" id="guardian_county" type="text" placeholder="County" required>
										<span id="guardian_county_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="guardian_subcounty" class="form-label">Sub-County <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->sub_county : "" }}' name="guardian_subcounty" id="guardian_subcounty" type="text" placeholder="Sub-County" required>
										<span id="guardian_subcounty_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="guardian_parish" class="form-label">Parish/Ward <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->parish : "" }}' name="guardian_parish" id="guardian_parish" type="text" placeholder="Parish/Ward" required>
										<span id="guardian_parish_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="guardian_village" class="form-label">Village <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->village : "" }}' name="guardian_village" id="guardian_village" type="text" placeholder="Village" required>
										<span id="guardian_village_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="guardian_street" class="form-label">Street <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->street : "" }}' name="guardian_street" id="guardian_street" type="text" placeholder="Street" required>
										<span id="guardian_street_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="guardian_plot" class="form-label">Plot/House No. <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->house_no : "" }}' name="guardian_plot" type="text" placeholder="Plot/House No." required>
									</div>
									<hr />
									<div class="col-md-12 d-flex mt-2">
										<a name="" id="" class="btn btn-sm btn-secondary me-auto" href="{{ route('fifth_form', ['token' => $token,'id' => $person_id]) }}" role="button"> 
											<i class="ti-arrow-left"></i> Previous
										</a>
										<button type="submit" id="sixth_submit" class="btn btn-primary ms-auto">
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