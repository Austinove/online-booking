 @extends('layouts.app')

@section('content')
    <div class="pagetitle">
      <h1 class="my-3">{{$data->surname}} {{$data->given_name}} Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('appointments') }}">Applications</a></li>
          <li class="breadcrumb-item active">Applicant Details</li>
        </ol>
      </nav>
    </div>
    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-title p-3 text-align-left">
              @if(!empty($data))
              <h5>Applications Status:
                 @if($data->step == 0)
                <strong class="text-warning">Pending</strong>
                @elseif($data->step == 10)
                <strong class="text-primary">Appointment Sent</strong>
                @else
                <strong class="text-success">Appointment Completed</strong>
                @endif
              </h5>
              @endif
                <div class="btn-group float-end" role="group" aria-label="Basic outlined example">
                    <button type="button" class="btn btn-primary"><i class="bi bi-reply"></i> Request Changes</button>
                    <button type="button" class="btn btn-success">Completed <i class="bi bi-check"></i></button>
                </div>
            </div>
            <div class="card-body">
              <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100 active" id="personal-info" data-bs-toggle="tab" data-bs-target="#bordered-justified-personal-info" type="button" role="tab" aria-controls="personal-info" aria-selected="true">Personal Information</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="residence" data-bs-toggle="tab" data-bs-target="#bordered-justified-residence" type="button" role="tab" aria-controls="residence" aria-selected="true">Place of Residence</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="spause" data-bs-toggle="tab" data-bs-target="#bordered-justified-spause" type="button" role="tab" aria-controls="spause" aria-selected="true">Spause</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="father" data-bs-toggle="tab" data-bs-target="#bordered-justified-father" type="button" role="tab" aria-controls="father" aria-selected="true">Father's Details</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="mother" data-bs-toggle="tab" data-bs-target="#bordered-justified-mother" type="button" role="tab" aria-controls="mother" aria-selected="true">Mother's Details</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="guardian" data-bs-toggle="tab" data-bs-target="#bordered-justified-guardian" type="button" role="tab" aria-controls="guardian" aria-selected="false">Guardian Details</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="officials" data-bs-toggle="tab" data-bs-target="#bordered-justified-officials" type="button" role="tab" aria-controls="officials" aria-selected="false">Documents</button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                <div class="tab-pane fade show active" id="bordered-justified-personal-info" role="tabpanel" aria-labelledby="personal-info">
                  <h5 class="card-title">Personal information</h5>
                  <p class="small fst-italic">Here you will find the personal Informationof the applicant</p>

                  <div class="row">
                    <div class="row col-md-6 my-2">
                      <strong>
                        <span class="text-muted me-3">Full Name:</span>  
                        {{$data->surname}} {{$data->given_name}} {{$data->other_name}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Maiden Name:</span>  {{$data->maiden_name}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Date of Birth:</span>  {{$data->dob}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Email:</span>  {{$data->email}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Mobile Number:</span>  {{$data->mob_number}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Highest Education:</span>  {{$data->education_level}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Occupation:</span>  {{$data->occupation}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Religion:</span>  {{$data->religion}}</strong>  
                    </div>
                    <div class="row col-md-8 mt-4">
                      <strong>Place of Birth</strong>
                      <hr/>
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Country:</span>  {{$data->birthplace->country}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">District:</span>  {{$data->birthplace->ditrict}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Sub County:</span>  {{$data->birthplace->sub_county}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Parish:</span>  {{$data->birthplace->parish}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Village:</span>  {{$data->birthplace->village}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">City:</span>  {{$data->birthplace->city}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Health Facility:</span>  {{$data->birthplace->health_facility}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Weight on Birth:</span>  {{$data->birthplace->birth_weight}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Parity on Mother:</span>  {{$data->birthplace->parity}}</strong>  
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="bordered-justified-residence" role="tabpanel" aria-labelledby="residence">
                  <h5 class="card-title">Residence</h5>
                  <p class="small fst-italic">Here you find the residence for the applicant</p>
                  <div class="row">
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Residence Type:</span>  {{$data->residence->type}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Country:</span>  {{$data->residence->country}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">District:</span>  {{$data->residence->ditrict}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Sub County:</span>  {{$data->residence->sub_county}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Parish:</span>  {{$data->residence->parish}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Village:</span>  {{$data->residence->village}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Street:</span>  {{$data->residence->street}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">House Number:</span>  {{$data->residence->house_no}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Year Lived in Address:</span>  {{$data->residence->years_lived}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Previous District:</span>  {{$data->residence->previous_district}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Previous Address:</span>  {{$data->residence->previous_address}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Citzenship:</span>  {{$data->residence->citzenship}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Years Lived in Adress:</span>  {{$data->residence->citzenship_years}}</strong>  
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="bordered-justified-spause" role="tabpanel" aria-labelledby="spause">
                  <h5 class="card-title">Spause Details</h5>
                  <p class="small fst-italic">Here you find the Spouse details for the applicant</p>
                  @if(!empty($data->spouse))
                  <div class="row">
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  {{$data->spouse->surname}} {{$data->spouse->given_name}} {{$data->spouse->other_name}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Maiden Name:</span>  {{$data->spouse->maiden_name}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">NIN:</span>  {{$data->spouse->nin}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Date of Marriage:</span>  {{$data->spouse->dom}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Place of Marriage:</span>  {{$data->spouse->marriage_place}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Marriage Type:</span>  {{$data->spouse->marriage_type}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Marriage Certificate:</span>  {{$data->spouse->marriage_cert}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Citzenship:</span>  {{$data->spouse->citzenship}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">No of spouse:</span>  {{$data->spouse->spouce_number}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">State/Nationality:</span>  {{$data->spouse->state_nationality}}</strong>  
                    </div>
                  </div>
                  @else
                  <div class="row">
                    <div class="row col-md-6 my-2">
                      <strong>No Spouse Details Put...</strong>  
                    </div>
                  </div>
                  @endif
                </div>
                <div class="tab-pane fade" id="bordered-justified-father" role="tabpanel" aria-labelledby="father">
                  <h5 class="card-title">Father's Details</h5>
                  <p class="small fst-italic">Here you find the Father's details for the applicant</p>
                  <div class="row">
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  {{$data->father->surname}} {{$data->father->given_name}} {{$data->father->other_name}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">NIN:</span>  {{$data->father->nin}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Citzenship:</span>  {{$data->father->citzenship}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Living State:</span>  {{$data->father->living_state}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Occupation:</span>  {{$data->father->occupation}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">State/Nationality:</span>  {{$data->father->state_nationality}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Country:</span>  {{$data->father->country}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">District:</span>  {{$data->father->ditrict}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Sub County:</span>  {{$data->father->sub_county}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Parish:</span>  {{$data->father->parish}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Village:</span>  {{$data->father->village}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Street:</span>  {{$data->father->street}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">House Number:</span>  {{$data->father->house_no}}</strong>  
                    </div>
                    <div class="row col-md-8 mt-4">
                      <strong>Place of Origin</strong>
                      <hr/>
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Country:</span>  {{$data->father->ocountry}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">District:</span>  {{$data->father->oditrict}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Sub County:</span>  {{$data->father->osub_county}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Parish:</span>  {{$data->father->oparish}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Village:</span>  {{$data->father->ovillage}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Street:</span>  {{$data->father->ostreet}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">House Number:</span>  {{$data->father->ohouse_no}}</strong>  
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="bordered-justified-mother" role="tabpanel" aria-labelledby="mother">
                  <h5 class="card-title">Mother's Details</h5>
                  <p class="small fst-italic">Here you find the Mother's details for the applicant</p>
                  <div class="row">
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  {{$data->mother->surname}} {{$data->mother->given_name}} {{$data->mother->other_name}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Maiden Name:</span>  {{$data->mother->maiden_name}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">NIN:</span>  {{$data->mother->nin}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Citzenship:</span>  {{$data->mother->citzenship}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Living State:</span>  {{$data->mother->living_state}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Occupation:</span>  {{$data->mother->occupation}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">State/Nationality:</span>  {{$data->mother->state_nationality}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Country:</span>  {{$data->mother->country}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">District:</span>  {{$data->mother->ditrict}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Sub County:</span>  {{$data->mother->sub_county}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Parish:</span>  {{$data->mother->parish}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Village:</span>  {{$data->mother->village}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Street:</span>  {{$data->mother->street}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">House Number:</span>  {{$data->mother->house_no}}</strong>  
                    </div>
                    <div class="row col-md-8 mt-4">
                      <strong>Place of Origin</strong>
                      <hr/>
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Country:</span>  {{$data->mother->ocountry}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">District:</span>  {{$data->mother->oditrict}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Sub County:</span>  {{$data->mother->osub_county}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Parish:</span>  {{$data->mother->oparish}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Village:</span>  {{$data->mother->ovillage}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Street:</span>  {{$data->mother->ostreet}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">House Number:</span>  {{$data->mother->ohouse_no}}</strong>  
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="bordered-justified-guardian" role="tabpanel" aria-labelledby="guardian">
                  <h5 class="card-title">Guardian's Details</h5>
                  <p class="small fst-italic">Here you find the Guardian details for the applicant</p>
                  @if(!empty($data->guardian))
                  <div class="row">
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  {{$data->guardian->surname}} {{$data->guardian->given_name}} {{$data->guardian->other_name}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Passport No:</span>  {{$data->guardian->passport}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">NIN:</span>  {{$data->guardian->nin}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Citzenship:</span>  {{$data->guardian->citzenship}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">State/Nationality:</span>  {{$data->guardian->state_nationality}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Country:</span>  {{$data->guardian->country}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">District:</span>  {{$data->guardian->ditrict}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Sub County:</span>  {{$data->guardian->sub_county}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Parish:</span>  {{$data->guardian->parish}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Village:</span>  {{$data->guardian->village}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Street:</span>  {{$data->guardian->street}}</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">House Number:</span>  {{$data->guardian->house_no}}</strong>  
                    </div>
                    
                  </div>
                  @else
                  <div class="row">
                    <div class="row col-md-6 my-2">
                      <strong>No Guardian Details Put...</strong>  
                    </div>
                  </div>
                  @endif
                </div>
                <div class="tab-pane fade" id="bordered-justified-officials" role="tabpanel" aria-labelledby="officials">
                  <h5 class="card-title">Guardian's Details</h5>
                  <div class="row">
                    <div class="row col-md-8 my-2">
                      <strong>
                        <span class="text-muted me-3">LC1 Letter: </span> 
                        <a href="{{ url('/') }}/applicants/{{$data->lc_letter}}" target="_blank">Click to open document</a>
                      </strong>  
                    </div>
                    <div class="row col-md-8 my-2">
                      <strong>
                        <span class="text-muted me-3">DISO Letter: </span> 
                        <a href="{{ url('/') }}/applicants/{{$data->diso_letter}}" target="_blank">Click to open document</a>
                      </strong>  
                    </div>
                    <div class="row col-md-8 my-2">
                      <form method="POST" action="{{ route('appointment_date') }}">
                        @csrf
                          <div class="col-md-10 mt-4">
                            <strong>Set Appointment</strong>
                          </div>
                          <hr />
                          @if($data->step == 0)
                          <div class="col-md-8 mb-4">
                            <input class="form-control main" type="hidden" name="id" value="{{ $data->id }}">
                            <label for="dob" class="form-label">Select Date <small class="text-danger">*</small></label>
                            <input class="form-control main" name="app_date" min="<?php echo date('Y-m-d') ?>" type="date" placeholder="Set Appointment Date" required>
                          </div>
                          <div class="col-md-8 d-flex mt-4">
                            <button type="submit" class="btn btn-primary ms-auto">Submit Appointment <i class="ti-check"></i></button>
                          </div>
                          @else
                          <div class="col-md-8 d-flex mt-4">
                            <strong class="text-primary">Appointment Already sent or Finished</strong>
                          </div>
                          @endif
                      </form>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br/><br/><br/><br/>
    </section>
@endsection
