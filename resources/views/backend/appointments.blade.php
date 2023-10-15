 @extends('layouts.app')

@section('content')
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
                        <!-- Table with stripped rows -->
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
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection