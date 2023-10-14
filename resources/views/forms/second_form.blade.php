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
					<a style="width: 300px" class="nav-link my-2 text-start" href="{{ route('return_step1', ['token' => $token,'id' => $person_id]) }}" id="v-pills-parta-tab" type="button" role="tab" aria-controls="v-pills-parta" aria-selected="true">
						PART A (Personal Information)
					</a>
					<button style="width: 300px" class="nav-link my-2 text-start active" id="v-pills-parta_place-tab" data-bs-toggle="pill" data-bs-target="#v-pills-parta_place" type="button" role="tab" aria-controls="v-pills-parta_place" aria-selected="false">
						PART A (Place of Residence/birth/Origin)
					</button>
					@if(!empty($step3))
					<a style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partb-tab" href="{{ route('third_form', ['token' => $token,'id' => $person_id]) }}" type="button" role="tab" aria-controls="v-pills-partb" aria-selected="false">
						PART B (For Adults)
					</a>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-partb-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partb" type="button" role="tab" aria-controls="v-pills-partb" aria-selected="false">
						PART B (For Adults)
					</button>
					@endif
					@if(!empty($step4))
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partcf-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcf" type="button" role="tab" aria-controls="v-pills-partcf" aria-selected="false">
						PART C (Father's Details)
					</button>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-partcf-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcf" type="button" role="tab" aria-controls="v-pills-partcf" aria-selected="false">
						PART C (Father's Details)
					</button>
					@endif
					@if(!empty($step5))
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partcm-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcm" type="button" role="tab" aria-controls="v-pills-partcm" aria-selected="false">
						PART C (Mother's Details)
					</button>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-partcm-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcm" type="button" role="tab" aria-controls="v-pills-partcm" aria-selected="false">
						PART C (Mother's Details)
					</button>
					@endif
					@if(!empty($step6))
					<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partcg-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcg" type="button" role="tab" aria-controls="v-pills-partcg" aria-selected="false">
						PART C (Guardian's Details)
					</button>
					@else
					<button style="width: 300px" disabled class="nav-link my-2 text-start" id="v-pills-partcg-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partcg" type="button" role="tab" aria-controls="v-pills-partcg" aria-selected="false">
						PART C (Guardian's Details)
					</button>
					@endif
					@if(!empty($step7))
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
					<div class="tab-pane fade show active" id="v-pills-parta_place" role="tabpanel" aria-labelledby="v-pills-parta_place-tab" tabindex="0">
						<div class="col-sm-10 m-auto text-center my-4">
							<h2>PART A</h2>
						</div>
						<div class="col-10 mx-auto">
							<form method="POST" action="{{ route('residence') }}" enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-md-10 mb-2">
										<strong>Place of Residence</strong>
									</div>
									<hr />
									@if(!empty($person_id))
									<input class="form-control main" type="hidden" name="personal_id" value="{{ $person_id }}">
									@endif
									<div class="col-md-6 mb-2">
										<label for="residence_type" class="form-label">Residence Type<small class="text-danger">*</small></label>
										<select class="form-select form-select-lg" name="residence_type" aria-label="Default select example">
											@if(!empty($data))
											<option selected value="{{$data->type}}">{{$data->type}}</option>
											@else
											<option selected disabled>Select Type</option>
											@endif
											<option value="local">Local</option>
											<option value="foreign">Foreign</option>
										</select>
									</div>
									<div class="col-md-6 mb-2">
										<label for="country" class="form-label">Country <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->country : "" }}' name="rcountry" type="text" placeholder="Country" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="district" class="form-label">District <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->ditrict : "" }}' name="rdistrict" type="text" placeholder="District" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="county" class="form-label">County <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->county : "" }}'  name="rcounty" type="text" placeholder="County" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="rsubcounty" class="form-label">Sub-County <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->sub_county : "" }}'  name="rsubcounty" type="text" placeholder="Sub-County" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="rparish" class="form-label">Parish/Ward <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->parish : "" }}' name="rparish" type="text" placeholder="Parish/Ward" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="rvillage" class="form-label">Village <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->village : "" }}' name="rvillage" type="text" placeholder="Village" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="rstreet" class="form-label">Street <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->street : "" }}'  name="rstreet" type="text" placeholder="Street" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="rplot" class="form-label">Plot/House No. <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->house_no : "" }}'  name="rplot" type="text" placeholder="Plot/House No." required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="ryears" class="form-label">Number of Years Lived at this Adress <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($data)? $data->years_lived : "" }}'  name="ryears" type="number" placeholder="Mobile No" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="rpdistrict" class="form-label">District of Previous Place of Residence</label>
										<input class="form-control main" value='{{!empty($data)? $data->previous_district : "" }}' name="rpdistrict" type="text" placeholder="District">
									</div>
									<div class="col-md-6 mb-2">
										<label for="rpaddress" class="form-label">Postal Address</label>
										<input class="form-control main" value='{{!empty($data)? $data->previous_address : "" }}' name="rpaddress" type="number" placeholder="Postal Address">
									</div>


									<div class="col-md-10 mb-2">
										<strong>Place of birth</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="bcountry" class="form-label">Country <small class="text-danger">*</small></label>
										<input class="form-control main"  value='{{!empty($birth)? $birth->country : "" }}' name="bcountry" type="text" placeholder="Country" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="bdistrict" class="form-label">District <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($birth)? $birth->ditrict : "" }}' name="bdistrict" type="text" placeholder="District" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="bcounty" class="form-label">County</label>
										<input class="form-control main" value='{{!empty($birth)? $birth->county : "" }}' name="bcounty" type="text" placeholder="County" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="bsubcounty" class="form-label">Sub-County <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($birth)? $birth->sub_county : "" }}' name="bsubcounty" type="text" placeholder="Sub-County" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="bparish" class="form-label">Parish/Ward <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($birth)? $birth->parish : "" }}' name="bparish" type="text" placeholder="Parish/Ward" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="bvillage" class="form-label">Village <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($birth)? $birth->village : "" }}' name="bvillage" type="text" placeholder="Village" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="bcity" class="form-label">City/Town <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($birth)? $birth->city : "" }}' name="bcity" type="text" placeholder="City/Town" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="bfacility" class="form-label">Health Facility <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($birth)? $birth->health_facility : "" }}'  name="bfacility" type="text" placeholder="Health Facility" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="bweight" class="form-label">Weight at Birth <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($birth)? $birth->birth_weight : "" }}' name="bweight" type="number" placeholder="Weight at Birth" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="bparity" class="form-label">Parity of Child (In regard to Mother e.g 1,2 for (1st, 2nd) born) <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($birth)? $birth->parity : "" }}' name="bparity" type="number" placeholder="Mother Parity" required>
									</div>


									<div class="col-md-10 mb-2">
										<strong>Place of Origin</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="ocountry" class="form-label">Country <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($origin)? $origin->country : "" }}' name="ocountry" type="text" placeholder="Country" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="odistrict" class="form-label">District <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($origin)? $origin->ditrict : "" }}' name="odistrict" type="text" placeholder="District" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="ocounty" class="form-label">County <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($origin)? $origin->county : "" }}' name="ocounty" type="text" placeholder="County" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="osubcounty" class="form-label">Sub-County<small class="text-danger">*</small></label>
										<input class="form-control main" name="osubcounty" value='{{!empty($origin)? $origin->sub_county : "" }}'  type="text" placeholder="Sub-County" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="oparish" class="form-label">Parish/Ward <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($origin)? $origin->parish : "" }}' name="oparish" type="text" placeholder="Parish/Ward" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="ovillage" class="form-label">Village <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($origin)? $origin->village : "" }}' name="ovillage" type="text" placeholder="Village" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="otribe" class="form-label">Tribe <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($origin)? $origin->tribe : "" }}' name="otribe" type="text" placeholder="Tribe" required>
									</div>
									<div class="col-md-6 mb-2">
										<label for="oclan" class="form-label">Clan <small class="text-danger">*</small></label>
										<input class="form-control main" value='{{!empty($origin)? $origin->clan : "" }}' name="oclan" type="text" placeholder="Clan" required>
									</div>

									<div class="col-md-10 mb-2">
										<span>Citizenship Type</span>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<label for="citz" class="form-label">Citzenship<small class="text-danger">*</small></label>
										<select class="form-select form-select-lg" name="citz" aria-label="Default select example" required>
											@if(!empty($data))
											<option selected value="{{$data->citzenship}}">{{$data->citzenship}}</option>
											@else
											<option selected>Select Citzenship</option>
											@endif
											<option value="by_birth">By Birth</option>
											<option value="by_registration">By Registration</option>
											<option value="by_naturalization">By Naturalization</option>
											<option value="dual_citzenship">Dual Citzenship</option>
											<option value="before_1995">Citzenship before 1995</option>
										</select>
									</div>
									<div class="col-md-6 mb-2">
										<label for="dual_nationality" class="form-label">State Citzenship and Nationality  <small>(for Dual Citizenship)</small> </label>
										<input class="form-control main" value='{{!empty($data)? $data->state_nationality : "" }}'  name="dual_nationality" type="text" placeholder="State and Nationality">
									</div>
									<div class="col-md-6 mb-2">
										<label for="cyears" class="form-label">Number of Years Lived at this Adress </label>
										<input class="form-control main" value='{{!empty($data)? $data->citzenship_years : "" }}'  name="cyears" type="number" placeholder="Enter Number of years" required>
									</div>

									<hr />
									<div class="col-md-12 d-flex mt-2">
										<a name="" id="" class="btn btn-sm btn-secondary me-auto" href="{{ route('return_step1', ['token' => $token,'id' => $person_id]) }}" role="button"> 
											<i class="ti-arrow-left"></i> Back
										</a>
										<button type="submit" class="btn btn-sm btn-primary ms-auto">
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