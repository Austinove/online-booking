@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Scheduled Appointments</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Scheduled Appointments</li>
    </ol>
    </nav>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 row d-flex">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Appointment Schedules</h5>
                    <div id='caleandar'></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection