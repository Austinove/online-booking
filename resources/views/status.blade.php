@extends('layouts.layout')

@section('layout-content')
<section class="my-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 m-auto">
				<h2>Your Application Status</h2>
				<p class="my-5">Enter your application code to access the current status of your registration. Stay updated on your application progress by simply inputting your unique code to see where it stands.</p>
			</div>
		</div>
	</div>
</section>

<section class="address mb-5">
	<div class="container mb-5">
		<div class="row">
			<div class="col-md-10 d-flex mx-auto">
                <form method="POST" action="{{ route('resume_status') }}" class="col-10 mx-auto">
                    @csrf
                    <div class="row d-flex">
                        <div class="col-md-6 mb-2">
                            <label for="application_code" class="form-label">Application Code <small class="text-danger">*</small></label>
                            <input class="form-control main" name="token" type="text" placeholder="Application Code" required>
                            @if(session('message'))
                                <span class="text-danger">{{session('message')}}</span>
                            @endif
                            
                        </div>
                        <div class="col-md-6 mt-3">
                            <button type="submit" class="btn btn-primary ms-5 mt-4"><i class="ti-check"></i> Resume Application</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <div class="col-md-9 mt-5 mx-auto">
                <div class="progress" style="height: 30px; font-size: 20px;">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        Application Progress 75%
                    </div>
                </div>
            </div> -->
		</div>
	</div>
    <br><br><br><br><br><br>
</section>
@endsection