@extends('layouts.layout')

@section('layout-content')
<!--================================
=            Page Title            =
=================================-->

<section class="my-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 m-auto">
				<!-- Page Title -->
				<h2>Resume Application</h2>
				<!-- Page Description -->
				<p class="my-5">Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta.</p>
			</div>
		</div>
	</div>
</section>

<section class="address my-5">
	<div class="container my-5">
		<div class="row my-5">
			<div class="col-10 d-flex mx-auto">
                <form action="" class="col-10 mx-auto">
                    <div class="row d-flex">
                        <div class="col-md-6 mb-2">
                            <label for="application_code" class="form-label">Application Code <small class="text-danger">*</small></label>
                            <input class="form-control main" type="text" placeholder="Application Code" required>
                        </div>
                        <div class="col-md-6 mt-3">
                            <button type="submit" class="btn btn-primary ms-5 mt-4"><i class="ti-check"></i> Resume Application</button>
                        </div>
                    </div>
                </form>
            </div>
		</div>
	</div>
    <br><br><br><br><br><br>
</section>
@endsection