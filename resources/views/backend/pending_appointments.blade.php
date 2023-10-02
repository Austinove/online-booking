 @extends('layouts.app')

@section('content')
    <div class="pagetitle">
      <h1>Pending Appointments</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Pending Appoitments</li>
        </ol>
      </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pending Appointments</h5>
                        <p>List of all appointments, please use the inputs to filter the list</p>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">Names</th>
                                <th scope="col">Location</th>
                                <th scope="col">Age</th>
                                <th scope="col">App'n Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Brandon Jacob</td>
                                <td>Kampala|Nakawa|Mutungo</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>
                                    <a name="" id="" class="btn btn-outline btn-sm btn-primary" href="#" role="button">More...</a>
                                </td>
                            </tr>
                             <tr>
                                <td>Bridie Kessler</td>
                                <td>Mukono|Central|Ward</td>
                                <td>35</td>
                                <td>2014-12-05</td>
                                <td>
                                    <a name="" id="" class="btn btn-outline btn-sm btn-primary" href="#" role="button">More...</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashleigh Langosh</td>
                                <td>Kampala|Kawempe|Karwere</td>
                                <td>45</td>
                                <td>2011-08-12</td>
                                <td>
                                    <a name="" id="" class="btn btn-outline btn-sm btn-primary" href="#" role="button">More...</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bridie Kessler</td>
                                <td>Mukono|Central|Ward</td>
                                <td>35</td>
                                <td>2014-12-05</td>
                                <td>
                                    <a name="" id="" class="btn btn-outline btn-sm btn-primary" href="#" role="button">More...</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashleigh Langosh</td>
                                <td>Kampala|Kawempe|Karwere</td>
                                <td>45</td>
                                <td>2011-08-12</td>
                                <td>
                                    <a name="" id="" class="btn btn-outline btn-sm btn-primary" href="#" role="button">More...</a>
                                </td>
                            </tr>
                             <tr>
                                <td>Bridie Kessler</td>
                                <td>Mukono|Central|Ward</td>
                                <td>35</td>
                                <td>2014-12-05</td>
                                <td>
                                    <a name="" id="" class="btn btn-outline btn-sm btn-primary" href="#" role="button">More...</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashleigh Langosh</td>
                                <td>Kampala|Kawempe|Karwere</td>
                                <td>45</td>
                                <td>2011-08-12</td>
                                <td>
                                    <a name="" id="" class="btn btn-outline btn-sm btn-primary" href="#" role="button">More...</a>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection