<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NIRA Online Booking</title>

    <!-- Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

      <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" >
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" >
  <link rel="stylesheet" href="{{ asset('/assets/plugins/themify-icons/themify-icons.css') }}">
  <!-- <link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}"> -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/quill/quill.snow.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/quill/quill.bubble.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/simple-datatables/style.css') }}">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/caleandar-master/css/theme3.css') }}" />

    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>
<body>
 
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block"><img src="{{ asset('/assets/images/logo.png')}}" alt="logo" style="max-height: 50px;"></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <!-- <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>
          </ul>
        </li> -->
        <li class="nav-item dropdown pe-3 me-5">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{auth()->user()->name}}</span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{auth()->user()->email}}</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('profile') }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('logout_user') }}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul>
        </li>
      </ul>
    </nav>
  </header>
  
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('home') }}">
          <i class="bi bi-grid-fill"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('appointments') }}">
          <i class="bi bi-bookmark-fill"></i>
          <span>Applications</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('new_appointments') }}">
          <i class="bi bi-person-lines-fill"></i>
          <span>Appointments</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('pending_appointments') }}">
          <i class="bi bi-hourglass-split"></i>
          <span>Pending Applications</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('profile') }}">
          <i class="bi bi-person-square"></i>
          <span>My Profile</span>
        </a>
      </li>
    </ul>

  </aside>
  <main id="main" class="main">
     @yield('content')
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>. Uganda Institute of Information and Communications Technology. All Rights Reserved</span></strong>. All Rights Reserved
    </div>
  </footer>
    <script src="{{ asset('/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/caleandar-master/js/caleandar.js') }}"></script>
    <script src="{{ asset('/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>

    @if(!empty($send_changes) || !empty($message))
    <script>
        //opening modal on form page
        $(document).ready(function(){
            $('#changes_sent').modal('show'); 
        });
    </script>
    @endif
    @if(!empty($year_applications))
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        //fetching bar chart data
        $.ajax( "/bar_chart" )
          .done(function(response) {
            new Chart(document.querySelector('#barChart'), {
                type: 'bar',
                data: {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                  datasets: [{
                    label: 'Applicants',
                    data: response,
                    backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(255, 159, 64, 0.2)',
                      'rgba(255, 205, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(201, 203, 207, 0.2)',
                      'rgba(255, 100, 102, 0.2)',
                      'rgba(205, 109, 130, 0.2)',
                      'rgba(250, 190, 132, 0.2)',
                      'rgba(215, 89, 12, 0.2)',
                      'rgba(215, 109, 120, 0.2)',
                    ],
                    borderColor: [
                      'rgb(255, 99, 132)',
                      'rgb(255, 159, 64)',
                      'rgb(255, 205, 86)',
                      'rgb(75, 192, 192)',
                      'rgb(54, 162, 235)',
                      'rgb(153, 102, 255)',
                      'rgb(201, 203, 207)',
                      'rgb(211, 201, 207)',
                      'rgb(231, 213, 17)',
                      'rgb(20, 203, 27)',
                      'rgb(201, 23, 107)',
                      'rgb(21, 203, 127)'
                    ],
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                }
              });
          })
          .fail(function(jqXHR, textStatus, errorThrown) {
            //handle error here
          })

          //fetching apex chart data
          $.ajax( "/apex_chart" )
          .done(function(response) {
            new ApexCharts(document.querySelector("#reportsChart"), {
              series: [{
                name: 'Completed',
                data: response.monthly_completed,
              }, {
                name: 'Pending',
                data: response.monthly_pending
              }],
              chart: {
                height: 350,
                type: 'area',
                toolbar: {
                  show: false
                },
              },
              markers: {
                size: 4
              },
              colors: ['#2eca6a', 'red'],
              fill: {
                type: "gradient",
                gradient: {
                  shadeIntensity: 1,
                  opacityFrom: 0.3,
                  opacityTo: 0.4,
                  stops: [0, 90, response.max_value]
                }
              },
              dataLabels: {
                enabled: false
              },
              stroke: {
                curve: 'smooth',
                width: 1
              },
              xaxis: {
                type: 'string',
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"]
              },
              tooltip: {
                x: {
                  format: 'Month'
                },
              }
            }).render();
          })
          .fail(function(jqXHR, textStatus, errorThrown) {
            //handle error here
          })

          //fetching adaultvschildren
          $.ajax( "/adults_children" )
          .done(function(response) {
            console.log(response);
            echarts.init(document.querySelector("#adultsVsChildren")).setOption({
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
                    value: response.adult,
                    name: 'Adult'
                  },
                  {
                    value: response.child,
                    name: 'Child'
                  }
                ]
              }]
            });
          })
          .fail(function(jqXHR, textStatus, errorThrown) {
            //handle error here
          })
      });
    </script>
    @endif
    <script>
      //fetching appointments data
      document.addEventListener("DOMContentLoaded", () => {
        $.ajax( "/appointments_data" )
          .done(function(response) {
            var events = [];
            response.appointments.map((appointment) => {
              const appDate = new Date(appointment.appointment_date);
              const route = `/application/${appointment.id}`
              const appdates = appointment.appointment_date.split(" ")[0];
              const dateArray = appdates.split("-");
              events.push(
                {
                    Date: new Date(dateArray[0], dateArray[1]-1, dateArray[2]),
                    Title: `${appointment.surname} ${appointment.given_name} | Time: ${appDate.getHours()}:${appDate.getMinutes()}`,
                    Link: route
                },
              )
            });
            var settings = {};
            var element = document.getElementById("caleandar");
            caleandar(element, events, settings);
          })
          .fail(function(jqXHR, textStatus, errorThrown) {
            //handle error here
          })
      });
    </script>
</body>
</html>
