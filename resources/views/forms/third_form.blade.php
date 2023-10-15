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
					<button style="width: 300px" class="nav-link my-2 text-start active" id="v-pills-partb-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partb" type="button" role="tab" aria-controls="v-pills-partb" aria-selected="false">
						PART B (For Adults)
					</button>
					<a style="width: 300px" class="nav-link my-2 text-start" href="{{ route('fourth_form', ['token' => $token,'id' => $person_id]) }}" id="v-pills-partcf-tab" type="button" role="tab" aria-controls="v-pills-partcf" aria-selected="false">
						PART C (Father's Details)
					</a>
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
					<div class="tab-pane fade show active" id="v-pills-partb" role="tabpanel" aria-labelledby="v-pills-partb-tab" tabindex="0">
						<div class="col-sm-10 m-auto text-center my-4">
							<h1>PART B</h1>
						</div>
						<div class="col-10 mx-auto">
							<form method="POST" action="{{ route('spouse') }}">
								@csrf
								<div class="row">
									<div class="col-md-10 mb-2">
										<strong>Spouse Details</strong>
									</div>
									<hr />
									@if(!empty($person_id))
									<input class="form-control main" type="hidden" name="personal_id" value="{{ $person_id }}">
									@endif
									@if(!empty($data))
									<input class="form-control main" type="hidden" name="spouse_id" value="{{ $data->id }}">
									@endif
									<div class="col-md-6 mb-2">
										<label for="ssurname" class="form-label">Surname <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->surname : "" }}' name="ssurname" type="text" placeholder="Surname" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="sgivenname" class="form-label">Given Name <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->given_name : "" }}' name="sgivenname" type="text" placeholder="Given Name" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="sothername" class="form-label">Other Name</label>
										<input class="form-control main" value='{{!empty($data)? $data->other_name : "" }}' name="sothername" type="text" placeholder="Other Name">
									</div>
									<div class="col-md-6 mb-2">
										<label for="smaidenname" class="form-label">Maiden Name</label>
										<input class="form-control main" value='{{!empty($data)? $data->maiden_name : "" }}' name="smaidenname" type="text" placeholder="Maiden Name">
									</div>
									<div class="col-md-6 mb-2">
										<label for="snin" class="form-label">National ID Number (NIN) </label>
										<input class="form-control main" value='{{!empty($data)? $data->nin : "" }}' name="snin" type="text" placeholder="NIN">
									</div>
									<div class="col-md-10 mb-2">
										<span>Citzenship Type</span>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="ssitz" class="form-label">Citzenship<small class="text-danger">*</small></label>
										<select class="form-select form-select-lg" name="ssitz" aria-label="Default select example" required>
											@if(!empty($data))
											<option selected value="{{$data->citzenship}}">{{$data->citzenship}}</option>
											@else
											<option selected>Select Citzenship</option>
											@endif
											<option value="By Birth">By Birth</option>
											<option value="By Registration">By Registration</option>
											<option value="By Naturalization">By Naturalization</option>
											<option value="Dual Citzenship">Dual Citzenship</option>
											<option value=">Citzenship before 1995">Citzenship before 1995</option>
										</select>
									</div>
									<div class="col-md-6 mb-2">
										<label for="sdual" class="form-label">State Citzenship and Country <small>(If Dual Citzenship)</small></label>
										<input class="form-control main" name="sdual" value='{{!empty($data)? $data->state_nationality : "" }}' type="text" placeholder="Enter Citzenship/Country">
									</div>
									<div class="col-md-6 mb-2">
										<label for="smariage_place" class="form-label">Place of Marriage <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->marriage_place : "" }}' name="smariage_place" type="text" placeholder="Place of Marriage" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="dom" class="form-label">Date of Marriage <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->dom : "" }}' name="dom" max="<?php echo date('Y-m-d') ?>" type="date" placeholder="Date of Mariage" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mariage_type" class="form-label">Type of Marriage <small class="text-danger">*</small></label>
										<select class="form-select form-select-lg" name="mariage_type" aria-label="Default select example" required>
											@if(!empty($data))
											<option selected value="{{$data->marriage_type}}">{{$data->marriage_type}}</option>
											@else
											<option selected disabled>Select Type</option>
											@endif
											<option value="Civil">Civil</option>
											<option value="Religious">Religious</option>
											<option value="Cultural">Cultural</option>
										</select>
									</div>
									<div class="col-md-6 mb-2">
										<label for="mariage_number" class="form-label">Marriage Certificate No.<small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->marriage_cert : "" }}' type="text" name="mariage_number" placeholder="Certificate Number">
									</div>
									<div class="col-md-6 mb-2">
										<label for="other_spouses" class="form-label">Number of Other Spouses<small>(Optional)</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->spouse_number : "" }}' type="number" name="other_spouses" placeholder="Other Spouces Number">
									</div>
									<hr />
									<div class="col-md-12 d-flex mt-2">
										<a name="" id="" class="btn btn-sm btn-secondary me-auto" href="{{ route('return_step2', ['token' => $token,'id' => $person_id]) }}" role="button"> 
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