@extends('layouts.app')

@section('content')
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Applications <br /><span> Today</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar-check-fill"></i>
                    </div>
                    <div class="ps-3">
                      @if(!empty($today_applications))
                      <h6>{{$today_applications}}</h6>
                      @else
                      <h6>0</h6>
                      @endif
                    </div>
                  </div>
                </div>

              </div>
            </div>
            
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Applications <br /><span> This Month</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar-fill"></i>
                    </div>
                    <div class="ps-3">
                      @if(!empty($month_applications))
                      <h6>{{$month_applications}}</h6>
                      @else
                      <h6>0</h6>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Applications <br /><span> This Year</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-intersect"></i>
                    </div>
                    <div class="ps-3">
                      @if(!empty($year_applications))
                      <h6>{{$year_applications}}</h6>
                      @else
                      <h6>0</h6>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Applicants</h5>
                  <canvas id="barChart" style="max-height: 400px;"></canvas>
                </div>
              </div>
            </div>

            <!-- Reports -->
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Completed Vs Unattended</span></h5>
                  <!-- Line Chart -->
                  <div id="reportsChart"></div>
                  <!-- End Line Chart -->
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Right side columns -->
        <div class="col-lg-4">
          <!-- <div class="card">
            <div class="card-body pb-0">
              <h5 class="card-title">Gender</h5>
              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Male'
                        },
                        {
                          value: 735,
                          name: 'Female'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div> -->
          <div class="card">
            <div class="card-body pb-0">
              <h5 class="card-title">Adults Vs Children</h5>
              <div id="adultsVsChildren" style="min-height: 400px;" class="echart"></div>
            </div>
          </div>
      </div>
    </section>
@endsection
