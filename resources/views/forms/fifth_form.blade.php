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
					<button style="width: 300px" class="nav-link my-2 text-start active" id="v-pills-partcm-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcm" type="button" role="tab" aria-controls="v-pills-partcm" aria-selected="false">
						PART C (Mother's Details)
					</button>
					@if(!empty($step6))
					<a style="width: 300px" class="nav-link my-2 text-start" href="{{ route('sixth_form', ['token' => $token,'id' => $person_id]) }}" id="v-pills-partcg-tab" type="button" role="tab" aria-controls="v-pills-partcg" aria-selected="false">
						PART C (Guardian's Details)
					</a>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-partcg-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcg" type="button" role="tab" aria-controls="v-pills-partcg" aria-selected="false">
						PART C (Guardian's Details)
					</button>
					@endif
					@if(!empty($step7))
					<a style="width: 300px" class="nav-link my-2 text-start" href="{{ route('seventh_form', ['token' => $token,'id' => $person_id]) }}" id="v-pills-confirm-tab" type="button" role="tab" aria-controls="v-pills-confirm" aria-selected="false">
						CONFIRM INFORMATION
					</a>
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
							<form method="POST" action="{{ route('mother') }}">
								@csrf
								<div class="row">
									<div class="col-md-10 mb-2">
										<strong>Mother's Details</strong>
									</div>
									<hr />
									@if(!empty($person_id))
									<input class="form-control main" type="hidden" name="personal_id" value="{{ $person_id }}">
									@endif
									@if(!empty($data))
									<input class="form-control main" type="hidden" name="mother_id" value="{{ $data->id }}">
									@endif
									<div class="col-md-6 mb-2">
										<label for="mother_surname" class="form-label">Surname <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->surname : "" }}'  name="mother_surname" id="mother_surname" type="text" placeholder="Surname" required>
										<span id="mother_surname_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_givenname" class="form-label">Given Name <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->given_name : "" }}' name="mother_givenname" id="mother_givenname" type="text" placeholder="Given Name" required>
										<span id="mother_givenname_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_othername" class="form-label">Other Name</label>
										<input class="form-control main" value='{{!empty($data)? $data->other_name : "" }}' name="mother_othername" id="mother_othername" type="text" placeholder="Other Name">
										<span id="mother_othername_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_maiden" class="form-label">Maiden Name <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->maiden_name : "" }}' name="mother_maiden" id="mother_maiden" type="text" placeholder="Maiden Name" required>
										<span id="mother_maiden_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_nin" class="form-label">National ID Number (NIN) <small class="text-danger">*</small> </label>
										<input class="form-control main" value='{{!empty($data)? $data->nin : "" }}' name="mother_nin" id="mother_nin" type="text" placeholder="Mother NIN">
										<span id="mother_nin_span" class="text-danger"></span>
									</div>
									<div class="col-md-10 mb-2">
										<strong>Citzenship Type</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="mother_citz" class="form-label">Citzenship<small class="text-danger">*</small></label>
										<select class="form-select form-select-lg" name="mother_citz" aria-label="Default select example" required>
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
										<label for="mother_dual" class="form-label">State Citzenship and Country <small>(If Dual Citzenship)</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->state_nationality : "" }}' name="mother_dual" id="mother_dual" type="text" placeholder="Enter Citzenship/Country">
										<span id="mother_dual_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_living_status" class="form-label">Living Status <small class="text-danger">*</small></label>
										<select class="form-select form-select-lg" name="mother_living_status" aria-label="Default select example" required>
											@if(!empty($data))
											<option selected value="{{$data->living_state}}">{{$data->living_state}}</option>
											@else
											<option selected>Select Status</option>
											@endif
											<option value="Alive">Alive</option>
											<option value="Deceased">Deceased</option>
											<option value="Unknown">Unknown</option>
										</select>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_occupation" class="form-label">Occupation<small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->occupation : "" }}' type="text" name="mother_occupation" id="mother_occupation" placeholder="Occupation">
										<span id="mother_occupation_span" class="text-danger"></span>
									</div>

									<div class="col-md-10 mb-2">
										<strong>Mother's Place of Residence</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="mother_country" class="form-label">Country <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->country : "" }}' name="mother_country" id="mother_country" type="text" placeholder="Country" required>
										<span id="mother_country_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_district" class="form-label">District <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->ditrict : "" }}' name="mother_district" id="mother_district" type="text" placeholder="District" required>
										<span id="mother_district_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_county" class="form-label">County <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->county : "" }}' name="mother_county" id="mother_county" type="text" placeholder="County" required>
										<span id="mother_county_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_subcounty" class="form-label">Sub-County <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->sub_county : "" }}' name="mother_subcounty" id="mother_subcounty" type="text" placeholder="Sub-County" required>
										<span id="mother_subcounty_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_parish" class="form-label">Parish/Ward <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->parish : "" }}' name="mother_parish" id="mother_parish" type="text" placeholder="Parish/Ward" required>
										<span id="mother_parish_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_village" class="form-label">Village <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->village : "" }}' name="mother_village" id="mother_village" type="text" placeholder="Village" required>
										<span id="mother_village_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_street" class="form-label">Street <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->street : "" }}' name="mother_street" id="mother_street" type="text" placeholder="Street" required>
										<span id="mother_street_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mother_plot" class="form-label">Plot/House No. <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->house_no : "" }}' name="mother_plot" id="mother_plot" type="text" placeholder="Plot/House No." required>
										<span id="mother_plot_span" class="text-danger"></span>
									</div>

									<div class="col-md-10 mb-2">
										<strong>Mother's Place of Origin</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="omother_country" class="form-label">Country <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->ocountry : "" }}' name="omother_country" id="omother_country" type="text" placeholder="Country" required>
										<span id="omother_country_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="omother_district" class="form-label">District <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->oditrict : "" }}' name="omother_district" id="omother_district" type="text" placeholder="District" required>
										<span id="omother_district_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="omother_county" class="form-label">County <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->ocounty : "" }}' name="omother_county" id="omother_county" type="text" placeholder="County" required>
										<span id="omother_county_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="omother_subcounty" class="form-label">Sub-County <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->osub_county : "" }}' name="omother_subcounty" id="omother_subcounty" type="text" placeholder="Sub-County" required>
										<span id="omother_subcounty_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="omother_parish" class="form-label">Parish/Ward <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->oparish : "" }}' name="omother_parish" id="omother_parish" type="text" placeholder="Parish/Ward" required>
										<span id="omother_parish_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="omother_village" class="form-label">Village <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->ovillage : "" }}' name="omother_village" id="omother_village" type="text" placeholder="Village" required>
										<span id="omother_village_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="omother_street" class="form-label">Street <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->ostreet : "" }}' name="omother_street" id="omother_street" type="text" placeholder="Street" required>
										<span id="omother_street_span" class="text-danger"></span>
									</div>
									<div class="col-md-6 mb-2">
										<label for="omother_plot" class="form-label">Plot/House No. <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->ohouse_no : "" }}' name="omother_plot" type="text" placeholder="Plot/House No." required>
									</div>
									<hr />
									<div class="col-md-12 d-flex mt-2">
										<a name="" id="" class="btn btn-sm btn-secondary me-auto" href="{{ route('fourth_form', ['token' => $token,'id' => $person_id]) }}" role="button"> 
											<i class="ti-arrow-left"></i> Previous
										</a>
										<button type="submit" id="fifth_submit" class="btn btn-primary ms-auto">
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