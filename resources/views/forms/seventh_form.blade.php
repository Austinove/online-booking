@extends('layouts.layout')

@section('layout-content')
<!-- <script>
	window.onbeforeunload = function() {
	return "Take note of the Unique CodeData";
	};
</script> -->
 @if(!empty($Confrimed))
	<div class="modal fade" data-bs-backdrop="static" id="confirmed" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Successfully Applied</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="alert alert-info" role="alert">
					<h4 class="alert-heading"><strong>Details Submitted Successfully</strong></h4>
					<hr>
					<p class="mb-0">Please take note of the <strong>Appointment Date</strong>, you can find it details on your email/Phone Number when confirmed</p>
				</div>
			</div>
			<div class="modal-footer">
				<a name="" id="" class="btn btn-sm btn-secondary me-auto" href="{{ route('welcome') }}" role="button"> 
					Close <i class="bi bi-check-circle"></i>
				</a>
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
							<form method="POST" action="{{ route('confirm') }}">
								@csrf
								<div class="row">
									@if(!empty($person_id))
									<input class="form-control main" type="hidden" name="personal_id" value="{{ $person_id }}">
									@endif
									<div class="col-md-10 mb-2">
										<h3 class="text-weight-bold">PART A (Personal Details)</h3>
										<strong>Personal Information</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Surname: </strong>
											{{$personal_info->surname}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Given Name: </strong>
											{{$personal_info->given_name}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Other Name: </strong>
											{{$personal_info->other_name}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Maiden Name: </strong>
											{{$personal_info->maiden_name}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Date of Birth: </strong>
											{{$personal_info->dob}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Email Address: </strong>
											{{$personal_info->email}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Home/Mobile No: </strong>
											{{$personal_info->mob_number}}
										</span>
									</div>

									<br/><br/>
									<div class="col-md-10 mb-2">
										<strong>Others</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Highest Level of Education: </strong>
											{{$personal_info->education_level}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Occupation: </strong>
											{{$personal_info->occupation}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Religion: </strong>
											{{$personal_info->religion}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Disabilities: </strong>
											{{$personal_info->diabilities}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">LC1 Letter: </strong>
											{{$personal_info->lc_letter}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">DISO Letter: </strong>
											{{$personal_info->diso_letter}}
										</span>
									</div>


									<br/><br/><br/>
									<div class="col-md-10 mb-2">
										<h3 class="text-weight-bold">PART A (Residence Details)</h3>
										<strong>Place of Residence</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Residence Type: </strong>
											{{$residence_info->type}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Country: </strong>
											{{$residence_info->country}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">District: </strong>
											{{$residence_info->ditrict}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">County: </strong>
											{{$residence_info->county}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Sub-County: </strong>
											{{$residence_info->sub_county}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Parish: </strong>
											{{$residence_info->parish}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Village: </strong>
											{{$residence_info->village}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Street: </strong>
											{{$residence_info->street}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">House Number: </strong>
											{{$residence_info->house_no}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Number of Years Lived: </strong>
											{{$residence_info->years_lived}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Previous Residence: </strong>
											{{$residence_info->previous_district}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Postal Address: </strong>
											{{$residence_info->previous_address}}
										</span>
									</div>


									<br/><br/>
									<div class="col-md-10 mb-2">
										<strong>Place of Birth</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Country: </strong>
											{{$birth_info->country}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">District: </strong>
											{{$birth_info->ditrict}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">County: </strong>
											{{$birth_info->county}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Sub-County: </strong>
											{{$birth_info->sub_county}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Parish: </strong>
											{{$birth_info->parish}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Village: </strong>
											{{$birth_info->village}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">City: </strong>
											{{$birth_info->city}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Healthy Facility: </strong>
											{{$birth_info->health_facility}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Birth Weight: </strong>
											{{$birth_info->birth_weight}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Parity (Mother): </strong>
											{{$birth_info->parity}}
										</span>
									</div>


									<br/><br/>
									<div class="col-md-10 mb-2">
										<strong>Place of Origin</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Country: </strong>
											{{$origin_info->country}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">District: </strong>
											{{$origin_info->ditrict}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">County: </strong>
											{{$origin_info->county}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Sub-County: </strong>
											{{$origin_info->sub_county}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Parish: </strong>
											{{$origin_info->parish}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Village: </strong>
											{{$origin_info->village}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Tribe: </strong>
											{{$origin_info->tribe}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Clan: </strong>
											{{$origin_info->clan}}
										</span>
									</div>


									<br/><br/>
									<div class="col-md-10 mb-2 ">
										<strong>Citzenship Details</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Citzenship Type: </strong>
											{{$residence_info->citzenship}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">State Citzenship and Nationality (for Dual Citizenship): </strong>
											{{$residence_info->state_nationality}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Number of Years Lived at this Adress: </strong>
											{{$residence_info->citzenship_years}}
										</span>
									</div>















									<br/><br/><br/>
									<div class="col-md-10 mb-2">
										<h3 class="text-weight-bold">PART B (For Adults)</h3>
										<strong>Spause Details</strong>
									</div>
									<hr />
									@if(!empty($spouse_info))
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Surname: </strong>
											{{$spouse_info->surname}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Given Name: </strong>
											{{$spouse_info->given_name}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Other Name: </strong>
											{{$spouse_info->other_name}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Maiden Name: </strong>
											{{$spouse_info->maiden_name}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">NIN: </strong>
											{{$spouse_info->nin}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Date of Marriage: </strong>
											{{$spouse_info->dom}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Place of Marriage: </strong>
											{{$spouse_info->marriage_place}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Marriage Type: </strong>
											{{$spouse_info->marriage_type}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Marriage Certificate No: </strong>
											{{$spouse_info->marriage_cert}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Citzenship: </strong>
											{{$spouse_info->citzenship}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">No. of Spouses: </strong>
											{{$spouse_info->spouse_number}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">State Citzenship and Country (If Dual Citzenship): </strong>
											{{$spouse_info->state_nationality}}
										</span>
									</div>
									@else
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">No Spouse Details Found</strong>
										</span>
									</div>
									@endif
									











									<br/><br/><br/>
									<div class="col-md-10 mb-2">
										<h3 class="text-weight-bold">PART C (Father's Details)</h3>
										<strong>Details</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Surname: </strong>
											{{$father_info->surname}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Given Name: </strong>
											{{$father_info->given_name}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Other Name: </strong>
											{{$father_info->other_name}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">NIN: </strong>
											{{$father_info->nin}}
										</span>
									</div>


									<br/><br/>
									<div class="col-md-10 mb-2 ">
										<strong>Citzenship Details</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Citzenship Type: </strong>
											{{$father_info->citzenship}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">State Citzenship and Nationality (for Dual Citizenship): </strong>
											{{$father_info->state_nationality}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Number of Years Lived at this Adress: </strong>
											{{$father_info->citzenship_years}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Occupation: </strong>
											{{$father_info->occupation}}
										</span>
									</div>


									<br/><br/>
									<div class="col-md-10 mb-2 ">
										<strong>Father's Place of Residence</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Country: </strong>
											{{$father_info->country}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">District: </strong>
											{{$father_info->ditrict}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">County: </strong>
											{{$father_info->county}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Sub-County: </strong>
											{{$father_info->sub_county}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Parish: </strong>
											{{$father_info->parish}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Village: </strong>
											{{$father_info->village}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Street: </strong>
											{{$father_info->street}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">House Number: </strong>
											{{$father_info->house_no}}
										</span>
									</div>



									<br/><br/>
									<div class="col-md-10 mb-2 ">
										<strong>Father's Place of Origin</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Country: </strong>
											{{$father_info->ocountry}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">District: </strong>
											{{$father_info->oditrict}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">County: </strong>
											{{$father_info->ocounty}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Sub-County: </strong>
											{{$father_info->osub_county}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Parish: </strong>
											{{$father_info->oparish}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Village: </strong>
											{{$father_info->ovillage}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Street: </strong>
											{{$father_info->ostreet}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">House Number: </strong>
											{{$father_info->ohouse_no}}
										</span>
									</div>












									<br/><br/><br/>
									<div class="col-md-10 mb-2">
										<h3 class="text-weight-bold">PART C (Mother's Details)</h3>
										<strong>Details</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Surname: </strong>
											{{$mother_info->surname}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Given Name: </strong>
											{{$mother_info->given_name}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Other Name: </strong>
											{{$mother_info->other_name}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Maiden Name: </strong>
											{{$mother_info->maiden_name}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">NIN: </strong>
											{{$mother_info->nin}}
										</span>
									</div>


									<br/><br/>
									<div class="col-md-10 mb-2 ">
										<strong>Citzenship Details</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Citzenship Type: </strong>
											{{$mother_info->citzenship}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">State Citzenship and Nationality (for Dual Citizenship): </strong>
											{{$mother_info->state_nationality}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Number of Years Lived at this Adress: </strong>
											{{$mother_info->citzenship_years}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Occupation: </strong>
											{{$mother_info->occupation}}
										</span>
									</div>


									<br/><br/>
									<div class="col-md-10 mb-2 ">
										<strong>Mother's Place of Residence</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Country: </strong>
											{{$mother_info->country}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">District: </strong>
											{{$mother_info->ditrict}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">County: </strong>
											{{$mother_info->county}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Sub-County: </strong>
											{{$mother_info->sub_county}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Parish: </strong>
											{{$mother_info->parish}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Village: </strong>
											{{$mother_info->village}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Street: </strong>
											{{$mother_info->street}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">House Number: </strong>
											{{$mother_info->house_no}}
										</span>
									</div>



									<br/><br/>
									<div class="col-md-10 mb-2 ">
										<strong>Mother's Place of Origin</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Country: </strong>
											{{$mother_info->ocountry}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">District: </strong>
											{{$mother_info->oditrict}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">County: </strong>
											{{$mother_info->ocounty}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Sub-County: </strong>
											{{$mother_info->osub_county}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Parish: </strong>
											{{$mother_info->oparish}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Village: </strong>
											{{$mother_info->ovillage}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Street: </strong>
											{{$mother_info->ostreet}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">House Number: </strong>
											{{$mother_info->ohouse_no}}
										</span>
									</div>








									<br/><br/><br/>
									<div class="col-md-10 mb-2">
										<h3 class="text-weight-bold">PART C (Guardian's Details)</h3>
										<strong>Details</strong>
									</div>
									<hr />
									@if(!empty($guardian_info))
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Surname: </strong>
											{{$guardian_info->surname}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Given Name: </strong>
											{{$guardian_info->given_name}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Other Name: </strong>
											{{$guardian_info->other_name}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Passport Number: </strong>
											{{$guardian_info->passport}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">NIN: </strong>
											{{$guardian_info->nin}}
										</span>
									</div>


									<br/><br/>
									<div class="col-md-10 mb-2 ">
										<strong>Citzenship Details</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Citzenship Type: </strong>
											{{$guardian_info->citzenship}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">State Citzenship and Nationality (for Dual Citizenship): </strong>
											{{$guardian_info->state_nationality}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Occupation: </strong>
											{{$guardian_info->occupation}}
										</span>
									</div>


									<br/><br/>
									<div class="col-md-10 mb-2 ">
										<strong>Guardian's Place of Residence</strong>
									</div>
									<hr />
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Country: </strong>
											{{$guardian_info->country}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">District: </strong>
											{{$guardian_info->ditrict}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">County: </strong>
											{{$guardian_info->county}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Sub-County: </strong>
											{{$guardian_info->sub_county}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Parish: </strong>
											{{$guardian_info->parish}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Village: </strong>
											{{$guardian_info->village}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">Street: </strong>
											{{$guardian_info->street}}
										</span>
									</div>
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">House Number: </strong>
											{{$guardian_info->house_no}}
										</span>
									</div>
									@else
									<div class="col-md-6 mb-2">
										<span>
											<strong class="form-label">No Spouse Details Found</strong>
										</span>
									</div>
									@endif








									




									<br/><br/><br/>
									<hr />
									<div class="col-md-10 mb-2">
										<h3 class="text-weight-bold">Declaration</h3>
										<strong>(Confirm by checking the checkbox)</strong>
									</div>
									<div class="form-check my-3">
										<input class="form-check-input" required name="declaration" type="checkbox" value="" id="declaration" style="width: 20px; height: 20px;">
										<p class="form-check-label ms-2" for="declaration">
											I <u class="mx-2"><strong>{{$personal_info->surname}} {{$personal_info->given_name}}</strong></u> declare that the information above pertaining to the birth of the child/applicant and particulars above is true and correct and that I know this of my own knowledge.
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