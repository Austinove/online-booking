 @extends('layouts.app')

@section('content')
 @if(!empty($send_changes) || !empty($message))
	<div class="modal fade" data-bs-backdrop="static" id="changes_sent" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Successfully Sent</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
                @if(!empty($message))
				<div class="alert alert-info my-4" role="alert">
					<h6 class="alert-heading"><strong>{{$message}}</strong></h6>
				</div>
                @else
                <div class="alert alert-info" role="alert">
					<h6 class="alert-heading"><strong>Change Request Submitted Successfully</strong></h6>
					<h6 class="mb-0">Please note this has been sent to the applicant's email/Phone SMS</h6>
				</div>
                @endif
			</div>
			<div class="modal-footer">
				<a name="" id="" class="btn btn-secondary" href="#" data-bs-dismiss="modal" aria-label="Close" role="button"> 
              Okay <i class="ti-check"></i>
            </a>
			</div>
			</div>
		</div>
	</div>
@endif
    <div class="pagetitle">
      <h1>All Appointments</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Appoitments</li>
        </ol>
      </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Appointments</h5>
                        <p>List of all appointments, please use the inputs to filter the list</p>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        Name
                                    </th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">App'n Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($data))
                                    @foreach ($data as $info_row)
                                    <tr>
                                        <td>
                                            {{$info_row->surname}} {{$info_row->given_name}}
                                        </td>
                                        <td>Kampala|Nakawa|Mutungo {{$info_row->residence->country}}| {{$info_row->residence->ditrict}}|{{$info_row->residence->county}}</td>
                                        <td>{{$info_row->dob}}</td>
                                        <td>{{$info_row->appointment_date}}</td>
                                        <td>
                                            <a name="" id="" class="btn btn-outline btn-sm btn-primary" href="{{ route('applicant', ['id' => $info_row->id]) }}" role="button">More...</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                <tr>
                                    No Applications Found
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection