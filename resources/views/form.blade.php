@extends('layouts.layout')

@section('layout-content')
<!-- <section class="page-title my-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 m-auto">
				<h1>Registration</h1>
			</div>
		</div>
	</div>
</section> -->

<section class="my-5 address">
	<div class="container d-flex">
		<div class="d-flex align-items-start mx-auto">
			<div class="nav flex-column nav-pills align-items-start mt-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<button style="width: 300px" class="nav-link my-2 text-start active" id="v-pills-parta-tab" data-bs-toggle="pill" data-bs-target="#v-pills-parta" type="button" role="tab" aria-controls="v-pills-parta" aria-selected="true">
					PART A (Personal Information)
				</button>
				<button style="width: 300px" class="nav-link my-2 text-start align-items-start" id="v-pills-parta_place-tab" data-bs-toggle="pill" data-bs-target="#v-pills-parta_place" type="button" role="tab" aria-controls="v-pills-parta_place" aria-selected="false">
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
				<!-- <button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-partd-tab" data-bs-toggle="pill" data-bs-target="#v-pills-partd" type="button" role="tab" aria-controls="v-pills-partd" aria-selected="false">
					FORM PART D
				</button> -->
				<button style="width: 300px" class="nav-link my-2 text-start" id="v-pills-confirm-tab" data-bs-toggle="pill" data-bs-target="#v-pills-confirm" type="button" role="tab" aria-controls="v-pills-confirm" aria-selected="false">
					CONFIRM INFORMATION
				</button>
			</div>
			<div class="tab-content" id="v-pills-tabContent">







				<div class="tab-pane fade show active row" id="v-pills-parta" role="tabpanel" aria-labelledby="v-pills-parta-tab" tabindex="0">
					<div class="col-sm-10 m-auto text-center my-4">
						<h2>PART A</h2>
					</div>
					<div class="col-10 mx-auto">
						<form action="">
							<div class="row">
								<div class="col-md-10 mb-2">
									<strong>Personal Information</strong>
								</div>
								<hr />
								<div class="col-md-6 mb-2">
									<label for="surname" class="form-label">Surname <small class="text-danger">*</small></label>
									<input class="form-control main" type="text" placeholder="Surname" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="givenname" class="form-label">Given Name <small class="text-danger">*</small></label>
									<input class="form-control main" type="text" placeholder="Given Name" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="othername" class="form-label">Other Name</label>
									<input class="form-control main" type="text" placeholder="Other Name">
								</div>
								<div class="col-md-6 mb-2">
									<label for="maidenname" class="form-label">Maiden Name</label>
									<input class="form-control main" type="text" placeholder="Maiden Name">
								</div>
								<div class="col-md-6 mb-2">
									<label for="previousname" class="form-label">Previous Name</label>
									<input class="form-control main" type="text" placeholder="Previous Name">
								</div>
								<div class="col-md-6 mb-2">
									<label for="dob" class="form-label">Date of Birth <small class="text-danger">*</small></label>
									<input class="form-control main" max="<?php echo date('Y-m-d') ?>" type="date" placeholder="Date of Birth" required>
								</div>
								<div class="col-md-10 mb-2">
									<span>Contacts</span>
								</div>
								<hr />
								<div class="col-md-6 mb-2">
									<label for="email" class="form-label">Email Address</label>
									<input class="form-control main" type="email" placeholder="Your Email Address">
								</div>
								<div class="col-md-6 mb-2">
									<label for="mobile" class="form-label">Home/Mobile No. <small class="text-danger">*</small></label>
									<input class="form-control main" type="number" placeholder="Mobile No" required>
								</div>
								<div class="col-md-10 mb-2">
									<span>Others</span>
								</div>
								<hr />
								<div class="col-md-6 mb-2">
									<label for="levelofeduc" class="form-label">Highest Level of Education <small class="text-danger">*</small></label>
									<input class="form-control main" type="text" placeholder="Level of Education" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="occupation" class="form-label">Occupation</label>
									<input class="form-control main" type="text" placeholder="Occupation">
								</div>
								<div class="col-md-6 mb-2">
									<label for="religion" class="form-label">Religion <small class="text-danger">*</small></label>
									<input class="form-control main" type="text" placeholder="Religion" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="disability" class="form-label">Disabilities</label>
									<select class="form-select form-select-lg" name="disability" aria-label="Default select example">
										<option selected>Select Disability</option>
										<option value="blind">blind</option>
										<option value="Deaf">Deaf</option>
										<option value="Physical">Physical</option>
										<option value="Mental">Mental</option>
										<option value="Dumb">Dumb</option>
									</select>
								</div>
								<hr />
								<div class="col-md-12 d-flex mt-2">
									<button type="submit" class="btn btn-primary ms-auto">Next Form <i class="ti-arrow-right"></i></button>
								</div>
								
							</div>
						</form>
					</div>
				</div>







				
				<div class="tab-pane fade" id="v-pills-parta_place" role="tabpanel" aria-labelledby="v-pills-parta_place-tab" tabindex="0">
					<div class="col-sm-10 m-auto text-center my-4">
						<h2>PART A</h2>
					</div>
					<div class="col-10 mx-auto">
						<form action="">
							<div class="row">
								<div class="col-md-10 mb-2">
									<strong>Place of Residence</strong>
								</div>
								<hr />
								<div class="col-md-6 mb-2">
									<label for="residence_type" class="form-label">Choose Appropriate <small class="text-danger">*</small></label>
									<select class="form-select form-select-lg" name="residence_type" aria-label="Default select example">
										<option selected disabled>Select Residence Type</option>
										<option value="local">Local</option>
										<option value="foreign">Foreign</option>
									</select>
								</div>
								<div class="col-md-6 mb-2">
									<label for="country" class="form-label">Country <small class="text-danger">*</small></label>
									<input class="form-control main" name="rcountry" type="text" placeholder="Country" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="district" class="form-label">District <small class="text-danger">*</small></label>
									<input class="form-control main" name="rdistrict" type="text" placeholder="District" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="county" class="form-label">County <small class="text-danger">*</small></label>
									<input class="form-control main" name="rcounty" type="text" placeholder="County" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="rsubcounty" class="form-label">Sub-County <small class="text-danger">*</small></label>
									<input class="form-control main" name="rsubcounty" type="text" placeholder="Sub-County" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="rparish" class="form-label">Parish/Ward <small class="text-danger">*</small></label>
									<input class="form-control main" name="rparish" type="text" placeholder="Parish/Ward" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="rvillage" class="form-label">Village <small class="text-danger">*</small></label>
									<input class="form-control main" name="rvillage" type="text" placeholder="Village" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="rstreet" class="form-label">Street <small class="text-danger">*</small></label>
									<input class="form-control main" name="rstreet" type="text" placeholder="Street" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="rplot" class="form-label">Plot/House No. <small class="text-danger">*</small></label>
									<input class="form-control main" name="rplot" type="text" placeholder="Plot/House No." required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="ryears" class="form-label">Number of Years Lived at this Adress <small class="text-danger">*</small></label>
									<input class="form-control main" name="ryears" type="number" placeholder="Mobile No" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="rpdistrict" class="form-label">District of Previous Place of Residence</label>
									<input class="form-control main" name="rpdistrict" type="text" placeholder="District">
								</div>
								<div class="col-md-6 mb-2">
									<label for="rpaddress" class="form-label">Postal Address</label>
									<input class="form-control main" name="rpaddress" type="number" placeholder="Postal Address">
								</div>


								<div class="col-md-10 mb-2">
									<strong>Place of birth</strong>
								</div>
								<hr />
								<div class="col-md-6 mb-2">
									<label for="bcountry" class="form-label">Country <small class="text-danger">*</small></label>
									<input class="form-control main" name="bcountry" type="text" placeholder="Country" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="bdistrict" class="form-label">District <small class="text-danger">*</small></label>
									<input class="form-control main" name="bdistrict" type="text" placeholder="District" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="bcounty" class="form-label">County</label>
									<input class="form-control main" name="bcounty" type="text" placeholder="County" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="bsubcounty" class="form-label">Sub-County <small class="text-danger">*</small></label>
									<input class="form-control main" name="bsubcounty" type="text" placeholder="Sub-County" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="bparish" class="form-label">Parish/Ward <small class="text-danger">*</small></label>
									<input class="form-control main" name="bparish" type="text" placeholder="Parish/Ward" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="bvillage" class="form-label">Village <small class="text-danger">*</small></label>
									<input class="form-control main" name="bvillage" type="text" placeholder="Village" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="bcity" class="form-label">City/Town <small class="text-danger">*</small></label>
									<input class="form-control main" name="bcity" type="text" placeholder="City/Town" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="bfacility" class="form-label">Health Facility <small class="text-danger">*</small></label>
									<input class="form-control main" name="bfacility" type="text" placeholder="Health Facility" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="bweight" class="form-label">Weight at Birth <small class="text-danger">*</small></label>
									<input class="form-control main" name="bweight" type="number" placeholder="Weight at Birth" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="bparity" class="form-label">Parity of Child (In regard to Mother e.g 1st, 2nd born) <small class="text-danger">*</small></label>
									<input class="form-control main" name="bparity" type="text" placeholder="Weight at Birth" required>
								</div>


								<div class="col-md-10 mb-2">
									<strong>Place of Origin</strong>
								</div>
								<hr />
								<div class="col-md-6 mb-2">
									<label for="ocountry" class="form-label">Country <small class="text-danger">*</small></label>
									<input class="form-control main" name="ocountry" type="text" placeholder="Country" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="odistrict" class="form-label">District <small class="text-danger">*</small></label>
									<input class="form-control main" name="odistrict" type="text" placeholder="District" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="ocounty" class="form-label">County <small class="text-danger">*</small></label>
									<input class="form-control main" name="ocounty" type="text" placeholder="County" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="osubcounty" class="form-label">Sub-County<small class="text-danger">*</small></label>
									<input class="form-control main" name="osubcounty" type="text" placeholder="Sub-County" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="oparish" class="form-label">Parish/Ward <small class="text-danger">*</small></label>
									<input class="form-control main" name="oparish" type="text" placeholder="Parish/Ward" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="ovillage" class="form-label">Village <small class="text-danger">*</small></label>
									<input class="form-control main" name="ovillage" type="text" placeholder="Village" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="otribe" class="form-label">Tribe <small class="text-danger">*</small></label>
									<input class="form-control main" name="otribe" type="text" placeholder="Tribe" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="oclan" class="form-label">Clan <small class="text-danger">*</small></label>
									<input class="form-control main" name="oclan" type="text" placeholder="Clan" required>
								</div>

								<div class="col-md-10 mb-2">
									<span>Citizenship Type</span>
								</div>
								<hr />
								<div class="col-md-6 mb-2">
									<label for="citz" class="form-label">Citzenship<small class="text-danger">*</small></label>
									<select class="form-select form-select-lg" name="citz" aria-label="Default select example" required>
										<option selected>Select Citzenship</option>
										<option value="by_birth">By Birth</option>
										<option value="by_registration">By Registration</option>
										<option value="by_naturalization">By Naturalization</option>
										<option value="dual_citzenship">Dual Citzenship</option>
										<option value="before_1995">Citzenship before 1995</option>
									</select>
								</div>
								<div class="col-md-6 mb-2">
									<label for="citz_certificate" class="form-label">Citzenship Certificate (if naturalization, Registration or Dual) </label>
									<input class="form-control main" name="citz_certificate" type="file" placeholder="Citzenship Certificate">
								</div>
								<div class="col-md-6 mb-2">
									<label for="dual_nationality" class="form-label">State Citzenship and Nationality  <small>(for Dual Citizenship)</small> </label>
									<input class="form-control main" name="dual_nationality" type="text" placeholder="State and Nationality">
								</div>
								<div class="col-md-6 mb-2">
									<label for="ryears" class="form-label">Number of Years Lived at this Adress </label>
									<input class="form-control main" name="ryears" type="number" placeholder="Mobile No" required>
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









				<div class="tab-pane fade" id="v-pills-partb" role="tabpanel" aria-labelledby="v-pills-partb-tab" tabindex="0">
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
									<label for="spreviousname" class="form-label">Previous Name</label>
									<input class="form-control main" name="spreviousname" type="text" placeholder="Previous Name">
								</div>
								<div class="col-md-6 mb-2">
									<label for="snin" class="form-label">National ID Number (NIN) </label>
									<input class="form-control main" name="snin" type="text" placeholder="Previous Name">
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
										<option value="Customary">Customary</option>
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









				
				<div class="tab-pane fade" id="v-pills-partcf" role="tabpanel" aria-labelledby="v-pills-partcf-tab" tabindex="0">
					<div class="col-sm-10 m-auto text-center my-4">
						<h1>PART C </h1>
					</div>
					<div class="col-10 mx-auto">
						<form action="">
							<div class="row">
								<div class="col-md-10 mb-2">
									<strong>Father's Details</strong>
								</div>
								<hr />
								<div class="col-md-6 mb-2">
									<label for="father_surname" class="form-label">Surname <small class="text-danger">*</small></label>
									<input class="form-control main" name="father_surname" type="text" placeholder="Surname" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="father_givenname" class="form-label">Given Name <small class="text-danger">*</small></label>
									<input class="form-control main" name="father_givenname" type="text" placeholder="Given Name" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="father_othername" class="form-label">Other Name</label>
									<input class="form-control main" name="father_othername" type="text" placeholder="Other Name">
								</div>
								<div class="col-md-6 mb-2">
									<label for="father_previousname" class="form-label">Previous Name</label>
									<input class="form-control main" name="father_previousname" type="text" placeholder="Previous Name">
								</div>
								<div class="col-md-6 mb-2">
									<label for="father_nin" class="form-label">National ID Number (NIN) <small class="text-danger">*</small> </label>
									<input class="form-control main" name="father_nin" type="text" placeholder="Father NIN">
								</div>
								<div class="col-md-10 mb-2">
									<strong>Citzenship Type</strong>
								</div>
								<hr />
								<div class="col-md-6 mb-2">
									<label for="father_citz" class="form-label">Citzenship<small class="text-danger">*</small></label>
									<select class="form-select form-select-lg" name="father_citz" aria-label="Default select example" required>
										<option selected>Select Citzenship</option>
										<option value="by_birth">By Birth</option>
										<option value="by_registration">By Registration</option>
										<option value="by_naturalization">By Naturalization</option>
										<option value="dual_citzenship">Dual Citzenship</option>
										<option value="before_1995">Citzenship before 1995</option>
									</select>
								</div>
								<div class="col-md-6 mb-2">
									<label for="father_citz_number" class="form-label">Citzenship Number <small>(If Naturalization, Registration or Dual Citzenship)</small></label>
									<input class="form-control main" name="father_citz_number" type="text" placeholder="Enter Citzenship/Country">
								</div>
								<div class="col-md-6 mb-2">
									<label for="father_dual" class="form-label">State Citzenship and Country <small>(If Dual Citzenship)</small></label>
									<input class="form-control main" name="father_dual" type="text" placeholder="Enter Citzenship/Country">
								</div>
								<div class="col-md-6 mb-2">
									<label for="father_living_status" class="form-label">Living Status <small class="text-danger">*</small></label>
									<select class="form-select form-select-lg" name="father_living_status" aria-label="Default select example" required>
										<option selected>Select Status</option>
										<option value="Alive">Alive</option>
										<option value="Deceased">Deceased</option>
										<option value="Unknown">Unknown</option>
									</select>
								</div>
								<div class="col-md-6 mb-2">
									<label for="father_occupation" class="form-label">Occupation<small class="text-danger">*</small></label>
									<input class="form-control main" type="text" name="father_occupation" placeholder="Occupation">
								</div>

								<div class="col-md-10 mb-2">
									<strong>Father's Place of Residence</strong>
								</div>
								<hr />
								<div class="col-md-6 mb-2">
									<label for="father_country" class="form-label">Country <small class="text-danger">*</small></label>
									<input class="form-control main" name="father_country" type="text" placeholder="Country" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="father_district" class="form-label">District <small class="text-danger">*</small></label>
									<input class="form-control main" name="father_district" type="text" placeholder="District" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="father_county" class="form-label">County <small class="text-danger">*</small></label>
									<input class="form-control main" name="father_county" type="text" placeholder="County" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="father_subcounty" class="form-label">Sub-County <small class="text-danger">*</small></label>
									<input class="form-control main" name="father_subcounty" type="text" placeholder="Sub-County" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="father_parish" class="form-label">Parish/Ward <small class="text-danger">*</small></label>
									<input class="form-control main" name="father_parish" type="text" placeholder="Parish/Ward" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="father_village" class="form-label">Village <small class="text-danger">*</small></label>
									<input class="form-control main" name="father_village" type="text" placeholder="Village" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="father_street" class="form-label">Street <small class="text-danger">*</small></label>
									<input class="form-control main" name="father_street" type="text" placeholder="Street" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="father_plot" class="form-label">Plot/House No. <small class="text-danger">*</small></label>
									<input class="form-control main" name="father_plot" type="text" placeholder="Plot/House No." required>
								</div>

								<div class="col-md-10 mb-2">
									<strong>Father's Place of Origin</strong>
								</div>
								<hr />
								<div class="col-md-6 mb-2">
									<label for="ofather_country" class="form-label">Country <small class="text-danger">*</small></label>
									<input class="form-control main" name="ofather_country" type="text" placeholder="Country" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="ofather_district" class="form-label">District <small class="text-danger">*</small></label>
									<input class="form-control main" name="ofather_district" type="text" placeholder="District" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="ofather_county" class="form-label">County <small class="text-danger">*</small></label>
									<input class="form-control main" name="ofather_county" type="text" placeholder="County" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="ofather_subcounty" class="form-label">Sub-County <small class="text-danger">*</small></label>
									<input class="form-control main" name="ofather_subcounty" type="text" placeholder="Sub-County" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="ofather_parish" class="form-label">Parish/Ward <small class="text-danger">*</small></label>
									<input class="form-control main" name="ofather_parish" type="text" placeholder="Parish/Ward" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="ofather_village" class="form-label">Village <small class="text-danger">*</small></label>
									<input class="form-control main" name="ofather_village" type="text" placeholder="Village" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="ofather_street" class="form-label">Street <small class="text-danger">*</small></label>
									<input class="form-control main" name="ofather_street" type="text" placeholder="Street" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="ofather_plot" class="form-label">Plot/House No. <small class="text-danger">*</small></label>
									<input class="form-control main" name="ofather_plot" type="text" placeholder="Plot/House No." required>
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






				<div class="tab-pane fade" id="v-pills-partcm" role="tabpanel" aria-labelledby="v-pills-partcm-tab" tabindex="0">
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
									<input class="form-control main" name="mother_maiden" type="text" placeholder="Given Name" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="mother_previousname" class="form-label">Previous Name</label>
									<input class="form-control main" name="mother_previousname" type="text" placeholder="Previous Name">
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
									<label for="mother_citz_number" class="form-label">Citzenship Number <small>(If Naturalization, Registration or Dual Citzenship)</small></label>
									<input class="form-control main" name="mother_citz_number" type="text" placeholder="Enter Citzenship/Country">
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






				<div class="tab-pane fade" id="v-pills-partcg" role="tabpanel" aria-labelledby="v-pills-partcg-tab" tabindex="0">
					<div class="col-sm-10 m-auto text-center my-4">
						<h1>PART C </h1>
					</div>
					<div class="col-10 mx-auto">
						<form action="">
							<div class="row">
								<div class="col-md-10 mb-2">
									<strong>1st Adoptive/Responsible Guardian's Details</strong>
								</div>
								<hr />
								<div class="col-md-6 mb-2">
									<label for="guardian_surname" class="form-label">Surname <small class="text-danger">*</small></label>
									<input class="form-control main" name="guardian_surname" type="text" placeholder="Surname" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="guardian_givenname" class="form-label">Given Name <small class="text-danger">*</small></label>
									<input class="form-control main" name="guardian_givenname" type="text" placeholder="Given Name" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="guardian_othername" class="form-label">Other Name</label>
									<input class="form-control main" name="guardian_othername" type="text" placeholder="Other Name">
								</div>
								<div class="col-md-6 mb-2">
									<label for="guardian_pasport_no" class="form-label">Passport No. <small>(A must for Foreigners)</small> </label>
									<input class="form-control main" name="guardian_pasport_no" type="text" placeholder="Guardian Passport No">
								</div>
								<div class="col-md-6 mb-2">
									<label for="guardian_nin" class="form-label">National ID Number (NIN) <small class="text-danger">*</small> </label>
									<input class="form-control main" name="guardian_nin" type="text" placeholder="guardian NIN" required>
								</div>
								<div class="col-md-10 mb-2">
									<strong>Citzenship Type</strong>
								</div>
								<hr />
								<div class="col-md-6 mb-2">
									<label for="guardian_citz" class="form-label">Citzenship<small class="text-danger">*</small></label>
									<select class="form-select form-select-lg" name="guardian_citz" aria-label="Default select example" required>
										<option selected>Select Citzenship</option>
										<option value="by_birth">By Birth</option>
										<option value="by_registration">By Registration</option>
										<option value="by_naturalization">By Naturalization</option>
										<option value="dual_citzenship">Dual Citzenship</option>
										<option value="before_1995">Citzenship before 1995</option>
									</select>
								</div>
								<div class="col-md-6 mb-2">
									<label for="guardian_citz_number" class="form-label">Citzenship Number <small>(If Naturalization, Registration or Dual Citzenship)</small></label>
									<input class="form-control main" name="guardian_citz_number" type="text" placeholder="Enter Citzenship/Country">
								</div>
								<div class="col-md-6 mb-2">
									<label for="guardian_dual" class="form-label">State Citzenship and Country <small>(If Dual Citzenship)</small></label>
									<input class="form-control main" name="guardian_dual" type="text" placeholder="Enter Citzenship/Country">
								</div>
								<div class="col-md-6 mb-2">
									<label for="guardian_occupation" class="form-label">Occupation<small class="text-danger">*</small></label>
									<input class="form-control main" type="text" name="guardian_occupation" placeholder="Occupation">
								</div>

								<div class="col-md-10 mb-2">
									<strong>guardian's Residence Address</strong>
								</div>
								<hr />
								<div class="col-md-6 mb-2">
									<label for="guardian_country" class="form-label">Country <small class="text-danger">*</small></label>
									<input class="form-control main" name="guardian_country" type="text" placeholder="Country" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="guardian_district" class="form-label">District <small class="text-danger">*</small></label>
									<input class="form-control main" name="guardian_district" type="text" placeholder="District" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="guardian_county" class="form-label">County <small class="text-danger">*</small></label>
									<input class="form-control main" name="guardian_county" type="text" placeholder="County" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="guardian_subcounty" class="form-label">Sub-County <small class="text-danger">*</small></label>
									<input class="form-control main" name="guardian_subcounty" type="text" placeholder="Sub-County" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="guardian_parish" class="form-label">Parish/Ward <small class="text-danger">*</small></label>
									<input class="form-control main" name="guardian_parish" type="text" placeholder="Parish/Ward" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="guardian_village" class="form-label">Village <small class="text-danger">*</small></label>
									<input class="form-control main" name="guardian_village" type="text" placeholder="Village" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="guardian_street" class="form-label">Street <small class="text-danger">*</small></label>
									<input class="form-control main" name="guardian_street" type="text" placeholder="Street" required>
								</div>
								<div class="col-md-6 mb-2">
									<label for="guardian_plot" class="form-label">Plot/House No. <small class="text-danger">*</small></label>
									<input class="form-control main" name="guardian_plot" type="text" placeholder="Plot/House No." required>
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








				<!-- <div class="tab-pane fade" id="v-pills-partd" role="tabpanel" aria-labelledby="v-pills-partd-tab" tabindex="0">
					<div class="col-sm-10 m-auto text-center my-4">
						<h1>PART D </h1>
					</div>
				</div> -->





				<div class="tab-pane fade" id="v-pills-confirm" role="tabpanel" aria-labelledby="v-pills-confirm-tab" tabindex="0">
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
										<strong for="surname" class="form-label">Previous Name: </strong>
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
										<strong for="surname" class="form-label">Previous Name: </strong>
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
</section>
@endsection