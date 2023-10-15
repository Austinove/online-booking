@extends('layouts.layout')

@section('layout-content')
<!-- <script>
	window.onbeforeunload = function() {
	return "Take note of the Unique CodeData";
	};
</script> -->
 @if(!empty($Confrimed))
	<div class="modal fade" data-bs-backdrop="static" id="confirmed" tabindex="-1">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Successfully Applied</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="alert alert-info" role="alert">
					<h4 class="alert-heading"><strong>Details Submitted Successfully</strong></h4>
					<h6 class="mb-0">Please take note of the <strong>Appointment Date</strong>, you can find more details about the appointment in your email/Phone SMS</h6>
				</div>
			</div>
			<div class="modal-footer">
				<a name="" id="" class="btn btn-sm btn-secondary ms-auto" href="{{ route('welcome') }}" role="button"> 
					Noted <i class="bi bi-check-circle"></i>
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
				</div>
			</div>
		</div>
	</div>
</section>
@endsection