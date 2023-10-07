 @extends('layouts.app')

@section('content')
    <div class="pagetitle">
      <h1>Faith Details</h1>
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
                <div class="btn-group float-end" role="group" aria-label="Basic outlined example">
                    <button type="button" class="btn btn-sm btn-outline-danger"><i class="bi bi-x-circle"></i> Impersonation</button>
                    <button type="button" class="btn btn-sm btn-outline-info"><i class="bi bi-reply"></i> Request Changes</button>
                    <button type="button" class="btn btn-sm btn-sm btn-outline-success">Accept App <i class="bi bi-check-circle"></i></button>
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
                  <button class="nav-link w-100" id="officials" data-bs-toggle="tab" data-bs-target="#bordered-justified-officials" type="button" role="tab" aria-controls="officials" aria-selected="false">Official Forms</button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                <div class="tab-pane fade show active" id="bordered-justified-personal-info" role="tabpanel" aria-labelledby="personal-info">
                  <h5 class="card-title">Personal infor</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                  <div class="row">
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  Kevin Anderson</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  Kevin Anderson</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  Kevin Anderson</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  Kevin Anderson</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  Kevin Anderson</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  Kevin Anderson</strong>  
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="bordered-justified-residence" role="tabpanel" aria-labelledby="residence">
                  <h5 class="card-title">Residence</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>
                  <div class="row">
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  Kevin Anderson</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  Kevin Anderson</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  Kevin Anderson</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  Kevin Anderson</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  Kevin Anderson</strong>  
                    </div>
                    <div class="row col-md-6 my-2">
                      <strong><span class="text-muted me-3">Full Name:</span>  Kevin Anderson</strong>  
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="bordered-justified-spause" role="tabpanel" aria-labelledby="spause">
                  Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde. 1
                </div>
                <div class="tab-pane fade" id="bordered-justified-father" role="tabpanel" aria-labelledby="father">
                  Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde. 2
                </div>
                <div class="tab-pane fade" id="bordered-justified-mother" role="tabpanel" aria-labelledby="mother">
                  Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde. 3
                </div>
                <div class="tab-pane fade" id="bordered-justified-guardian" role="tabpanel" aria-labelledby="guardian">
                  Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
                </div>
                <div class="tab-pane fade" id="bordered-justified-officials" role="tabpanel" aria-labelledby="officials">
                  Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
