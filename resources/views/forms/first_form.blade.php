@extends('layouts.layout')

@section('layout-content')
<!-- <script>
	window.onbeforeunload = function() {
	return "Take note of the Unique CodeData";
	};
</script> -->
 @if(!empty($token))
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
				<h2>Code: <strong>{{$token}}</strong></h2>
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
				<div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
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
					<button style="width: 300px" class="nav-link my-2 text-start active" id="v-pills-parta-tab" data-bs-toggle="pill" data-bs-target="#v-pills-parta" type="button" role="tab" aria-controls="v-pills-parta" aria-selected="true">
						PART A (Personal Information)
					</button>
					@if(!empty($step1))
					<a style="width: 300px" class="nav-link my-2 text-start" href="{{ route('second_form', ['token' => $token,'id' => $person_id]) }}"  id="v-pills-parta_place-tab" type="button" role="tab" aria-controls="v-pills-parta_place" aria-selected="false">
						PART A (Place of Residence/birth/Origin)
					</a>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-parta_place-tab" data-bs-toggle="pill" data-bs-target="#v-pills-parta_place" type="button" role="tab" aria-controls="v-pills-parta_place" aria-selected="false">
						PART A (Place of Residence/birth/Origin)
					</button>
					@endif
					@if(session('step3'))
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partb-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partb" type="button" role="tab" aria-controls="v-pills-partb" aria-selected="false">
						PART B (For Adults)
					</button>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-partb-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partb" type="button" role="tab" aria-controls="v-pills-partb" aria-selected="false">
						PART B (For Adults)
					</button>
					@endif
					@if(session('step4'))
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partcf-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcf" type="button" role="tab" aria-controls="v-pills-partcf" aria-selected="false">
						PART C (Father's Details)
					</button>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-partcf-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcf" type="button" role="tab" aria-controls="v-pills-partcf" aria-selected="false">
						PART C (Father's Details)
					</button>
					@endif
					@if(session('step5'))
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partcm-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcm" type="button" role="tab" aria-controls="v-pills-partcm" aria-selected="false">
						PART C (Mother's Details)
					</button>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-partcm-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcm" type="button" role="tab" aria-controls="v-pills-partcm" aria-selected="false">
						PART C (Mother's Details)
					</button>
					@endif
					@if(session('step6'))
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partcg-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcg" type="button" role="tab" aria-controls="v-pills-partcg" aria-selected="false">
						PART C (Guardian's Details)
					</button>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-partcg-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcg" type="button" role="tab" aria-controls="v-pills-partcg" aria-selected="false">
						PART C (Guardian's Details)
					</button>
					@endif
					@if(session('step7'))
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
					<div class="tab-pane fade show active row" id="v-pills-parta" role="tabpanel" aria-labelledby="v-pills-parta-tab" tabindex="0">
						<div class="col-sm-10 m-auto text-center my-4">
							<h2>PART A</h2>
						</div>
						<div class="col-10 mx-auto">
							<form method="POST" action="{{ route('personal_info') }}" enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-md-10 mb-2">
										<strong>Personal Information</strong>
									</div>
									<hr />
									@if(!empty($person_id))
									<input class="form-control main" type="hidden" name="personal_id" value="{{ $person_id }}">
									@endif
									<div class="col-md-6 mb-2">
										<label for="surname" class="form-label">Surname<small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($personal_data)? $personal_data->surname : "" }}' type="text" name="surname" placeholder="Surname" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="givenname" class="form-label">Given Name <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($personal_data)? $personal_data->given_name : "" }}' name="givenname" type="text" placeholder="Given Name" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="othername" class="form-label">Other Name</label>
										<input class="form-control main" value='{{!empty($personal_data)? $personal_data->other_name : "" }}' name="othername" type="text" placeholder="Other Name">
									</div>
									<div class="col-md-6 mb-2">
										<label for="maidenname" class="form-label">Maiden Name</label>
										<input class="form-control main" value='{{!empty($personal_data)? $personal_data->maiden_name : "" }}' name="maidenname" type="text" placeholder="Maiden Name">
									</div>
									<div class="col-md-6 mb-2">
										<label for="dob" class="form-label">Date of Birth <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($personal_data)? $personal_data->dob : "" }}' name="dob" max="<?php echo date('Y-m-d') ?>" type="date" placeholder="Date of Birth" required>
									</div>
									<div class="col-md-10 mb-2">
										<span>Contacts</span>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="email" class="form-label">Email Address</label>
										<input class="form-control main" value='{{!empty($personal_data)? $personal_data->email : "" }}' name="email" type="email" placeholder="Your Email Address">
									</div>
									<div class="col-md-6 mb-2">
										<label for="mobile" class="form-label">Home/Mobile No. <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($personal_data)? $personal_data->mob_number : "" }}' name="mobile" type="number" placeholder="Mobile No" required>
									</div>
									<div class="col-md-10 mb-2">
										<span>Others</span>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="levelofeduc" class="form-label">Highest Level of Education <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($personal_data)? $personal_data->education_level : "" }}' name="levelofeduc" type="text" placeholder="Level of Education" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="occupation" class="form-label">Occupation</label>
										<input class="form-control main" value='{{!empty($personal_data)? $personal_data->occupation : "" }}' name="occupation" type="text" placeholder="Occupation">
									</div>
									<div class="col-md-6 mb-2">
										<label for="religion" class="form-label">Religion <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($personal_data)? $personal_data->religion : "" }}' name="religion" type="text" placeholder="Religion" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="disability" class="form-label">Disabilities</label>
										<select class="form-select form-select-lg" value='{{!empty($personal_data)? $personal_data->diabilities : "" }}' name="disability" aria-label="Default select example">
												<option value="none">None</option>
												<option value="blind">blind</option>
												<option value="Deaf">Deaf</option>
												<option value="Physical">Physical</option>
												<option value="Mental">Mental</option>
												<option value="Dumb">Dumb</option>
										</select>
									</div>
									<div class="col-md-10 mb-2">
										<span>
											Official Documents. 
											<strong>
												<em> Note: Please move with original on appointment!</em>
											</strong>
										</span>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="lc_letter" class="form-label">
											LCI Letter 
											<small class="text-primary">(.pdf, .doc .docx)</small>
											<small class="text-danger">*</small></label>
										<input class="form-control main @error('lc_letter') is-invalid @enderror" name="lc_letter"  type="file" placeholder="LCI Letter" accept="application/msword, application/pdf" required>
										@error('lc_letter')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="col-md-6 mb-2">
										<label for="diso_letter" class="form-label">
											DISO Letter
											<small class="text-primary">(.pdf, .doc .docx)</small>
											<small class="text-danger">*</small></label>
										</label>
										<input class="form-control main" name="diso_letter" type="file" placeholder="DISO Letter" accept="application/msword, application/pdf" required>
									</div>
									<hr />
									<div class="col-md-12 d-flex mt-2">
										<button type="submit" class="btn btn-primary ms-auto">Next Form <i class="ti-arrow-right"></i></button>
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