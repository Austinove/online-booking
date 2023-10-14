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
					<button style="width: 300px" class="nav-link my-2 text-start active" id="v-pills-partcf-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcf" type="button" role="tab" aria-controls="v-pills-partcf" aria-selected="false">
						PART C (Father's Details)
					</button>
					@if(!empty($step5))
					<a style="width: 300px" class="nav-link my-2 text-start" href="{{ route('fifth_form', ['token' => $token,'id' => $person_id]) }}" id="v-pills-partcm-tab" type="button" role="tab" aria-controls="v-pills-partcm" aria-selected="false">
						PART C (Mother's Details)
					</a>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-partcm-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcm" type="button" role="tab" aria-controls="v-pills-partcm" aria-selected="false">
						PART C (Mother's Details)
					</button>
					@endif
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
					<div class="tab-pane fade show active" id="v-pills-partcf" role="tabpanel" aria-labelledby="v-pills-partcf-tab" tabindex="0">
						<div class="col-sm-10 m-auto text-center my-4">
							<h1>PART C </h1>
						</div>
						<div class="col-10 mx-auto">
							<form method="POST" action="{{ route('father') }}">
								@csrf
								<div class="row">
									<div class="col-md-10 mb-2">
										<strong>Father's Details</strong>
									</div>
									<hr />
									@if(!empty($person_id))
									<input class="form-control main" type="hidden" name="personal_id" value="{{ $person_id }}">
									@endif
									@if(!empty($data))
									<input class="form-control main" type="hidden" name="father_id" value="{{ $data->id }}">
									@endif
									<div class="col-md-6 mb-2">
										<label for="father_surname" class="form-label">Surname <small class="text-danger">*</small></label>
										<input class="form-control main"  value='{{!empty($data)? $data->surname : "" }}' name="father_surname" type="text" placeholder="Surname" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="father_givenname" class="form-label">Given Name <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->given_name : "" }}' name="father_givenname" type="text" placeholder="Given Name" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="father_othername" class="form-label">Other Name</label>
										<input class="form-control main" value='{{!empty($data)? $data->other_name : "" }}' name="father_othername" type="text" placeholder="Other Name">
									</div>
									<div class="col-md-6 mb-2">
										<label for="father_nin" class="form-label">National ID Number (NIN) <small class="text-danger">*</small> </label>
										<input class="form-control main" value='{{!empty($data)? $data->nin : "" }}' name="father_nin" type="text" placeholder="Father NIN">
									</div>
									<div class="col-md-10 mb-2">
										<strong>Citzenship Type</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="father_citz" class="form-label">Citzenship<small class="text-danger">*</small></label>
										<select class="form-select form-select-lg" name="father_citz" aria-label="Default select example" required>
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
										<label for="father_dual" class="form-label">State Citzenship and Country <small>(If Dual Citzenship)</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->state_nationality : "" }}' name="father_dual" type="text" placeholder="Enter Citzenship/Country">
									</div>
									<div class="col-md-6 mb-2">
										<label for="father_living_status" class="form-label">Living Status <small class="text-danger">*</small></label>
										<select class="form-select form-select-lg" name="father_living_status" aria-label="Default select example" required>
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
										<label for="father_occupation" class="form-label">Occupation<small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->occupation : "" }}' type="text" name="father_occupation" placeholder="Occupation">
									</div>

									<div class="col-md-10 mb-2">
										<strong>Father's Place of Residence</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="father_country" class="form-label">Country <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->country : "" }}' name="father_country" type="text" placeholder="Country" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="father_district" class="form-label">District <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->ditrict : "" }}' name="father_district" type="text" placeholder="District" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="father_county" class="form-label">County <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->county : "" }}'  name="father_county" type="text" placeholder="County" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="father_subcounty" class="form-label">Sub-County <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->sub_county : "" }}' name="father_subcounty" type="text" placeholder="Sub-County" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="father_parish" class="form-label">Parish/Ward <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->parish : "" }}' name="father_parish" type="text" placeholder="Parish/Ward" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="father_village" class="form-label">Village <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->village : "" }}'  name="father_village" type="text" placeholder="Village" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="father_street" class="form-label">Street <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->street : "" }}'   name="father_street" type="text" placeholder="Street" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="father_plot" class="form-label">Plot/House No. <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->house_no : "" }}'   name="father_plot" type="text" placeholder="Plot/House No." required>
									</div>

									<div class="col-md-10 mb-2">
										<strong>Father's Place of Origin</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="ofather_country" class="form-label">Country <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->ocountry : "" }}'  name="ofather_country" type="text" placeholder="Country" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="ofather_district" class="form-label">District <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->oditrict : "" }}'  name="ofather_district" type="text" placeholder="District" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="ofather_county" class="form-label">County <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->ocounty : "" }}' name="ofather_county" type="text" placeholder="County" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="ofather_subcounty" class="form-label">Sub-County <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->osub_county : "" }}'  name="ofather_subcounty" type="text" placeholder="Sub-County" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="ofather_parish"  class="form-label">Parish/Ward <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->oparish : "" }}' name="ofather_parish" type="text" placeholder="Parish/Ward" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="ofather_village" class="form-label">Village <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->ovillage : "" }}' name="ofather_village" type="text" placeholder="Village" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="ofather_street" class="form-label">Street <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->ostreet : "" }}' name="ofather_street" type="text" placeholder="Street" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="ofather_plot" class="form-label">Plot/House No. <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->ohouse_no : "" }}' name="ofather_plot" type="text" placeholder="Plot/House No." required>
									</div>
									<hr />
									<div class="col-md-12 d-flex mt-2">
										<a name="" id="" class="btn btn-sm btn-secondary me-auto" href="{{ route('third_form', ['token' => $token,'id' => $person_id]) }}" role="button"> 
											<i class="ti-arrow-left"></i> Previous
										</a>
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