<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NIRA Online Booking</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
        <link rel="stylesheet" href="{{ asset('/assets/plugins/themify-icons/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/plugins/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/plugins/slick/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/plugins/fancybox/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/plugins/aos/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
        <nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
            <div class="container py-1">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/assets/images/logo.png')}}" alt="logo" style="height: 55px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('instructions') }}">Instructions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li> -->
                </ul>
                </div>
            </div>
        </nav>

        <main>
            @if(!empty($token))
            <div class="modal fade" data-bs-backdrop="static" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Caution!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info" role="alert">
                            <h4 class="alert-heading"><strong>Please Note!</strong></h4>
                            <h2>Code: <strong>{{$token}}</strong></h2>
                            <hr>
                            <p class="mb-0">Please take note of the <strong>Unique Code</strong>, you will use it to resume application</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">
                            Noted <i class="bi bi-check-circle"></i>
                        </button>
                    </div>
                    </div>
                </div>
            </div>
            @endif
            @yield('layout-content')
        </main>
    

        <footer>
            <div class="text-center bg-dark py-4">
                <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Uganda Institute of Information and Communications Technology. All Rights Reserved.</small class="text-secondary">
            </div>
        </footer>


        <!-- To Top -->
        <div class="scroll-top-to">
            <i class="ti-angle-up"></i>
        </div>
	
        <!-- JAVASCRIPTS -->
        <script src="{{ asset('/assets/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('/assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/assets/plugins/slick/slick.min.js') }}"></script>
        <script src="{{ asset('/assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('/assets/plugins/syotimer/jquery.syotimer.min.js') }}"></script>
        <script src="{{ asset('/assets/plugins/aos/aos.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
        <script src="{{ asset('/assets/plugins/google-map/gmap.js') }}"></script>
        <script src="{{ asset('/assets/plugins/script.js') }}"></script>
        @if(!empty($Confrimed))
        <script>
            //opening modal on form page
            $(document).ready(function(){
                $('#confirmed').modal('show'); 
            });
        </script>
        @else
            @if(!empty($token))
            <script>
            //opening modal on form page
            $(document).ready(function(){
                $('#verticalycentered').modal('show'); 
            });
            </script>
            @endif
        @endif
        <script>
            $(document).ready(function(){
                var pageErrors = [];
                function textInput(text, inputId, errorDisplayer, errorText, errorText2 = ""){
                    var hasNumber = /\d/;
                    if(text.length < 3){
                        if(!pageErrors.includes(errorText)){
                            pageErrors.push(errorText);
                            $(`#${errorDisplayer}`).append(errorText);
                            $(`#${inputId}`).addClass("is-invalid");
                        }
                    }else{
                        pageErrors = pageErrors.filter(errors => errors != errorText);
                        if(hasNumber.test(text)){
                            if(!pageErrors.includes(errorText2)){
                                pageErrors.push(errorText2);
                                $(`#${errorDisplayer}`).append(errorText2);
                                $(`#${inputId}`).addClass("is-invalid");
                            }
                        }else{
                            pageErrors = pageErrors.filter(errors => errors != errorText2);
                            $(`#${errorDisplayer}`).html("");
                            $(`#${inputId}`).removeClass("is-invalid");
                        }
                    }
                    disableBtn()
                }

                function validateEmail(text, inputId, errorDisplayer, errorText) 
                {
                    const emailCheck = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    if (!emailCheck.test(text)) {
                        if(!pageErrors.includes(errorText)){
                            pageErrors.push(errorText);
                            $(`#${errorDisplayer}`).append(errorText);
                            $(`#${inputId}`).addClass("is-invalid");
                        }
                    } else {
                        pageErrors = pageErrors.filter(errors => errors != errorText);
                        $(`#${errorDisplayer}`).html("");
                        $(`#${inputId}`).removeClass("is-invalid");
                    }
                }

                function validateNumber(text, inputId, errorDisplayer, errorText, type="") 
                {
                    if(type=""){
                        if (text.length != 9 || (text.charAt(0) != 7 && text.charAt(0) != 3 && text.charAt(0) != 2 && text.charAt(0) != 4)) {
                            if(!pageErrors.includes(errorText)){
                                pageErrors.push(errorText);
                                $(`#${errorDisplayer}`).append(errorText);
                                $(`#${inputId}`).addClass("is-invalid");
                            }
                        } else {
                            pageErrors = pageErrors.filter(errors => errors != errorText);
                            $(`#${errorDisplayer}`).html("");
                            $(`#${inputId}`).removeClass("is-invalid");
                        }
                    } else {
                        if (text.length != 14) {
                            if(!pageErrors.includes(errorText)){
                                pageErrors.push(errorText);
                                $(`#${errorDisplayer}`).append(errorText);
                                $(`#${inputId}`).addClass("is-invalid");
                            }
                        } else {
                            pageErrors = pageErrors.filter(errors => errors != errorText);
                            $(`#${errorDisplayer}`).html("");
                            $(`#${inputId}`).removeClass("is-invalid");
                        }
                    }
                }

                function disableBtn(){
                    //disabling first form button
                    if(pageErrors.length > 0){
                        $( "#first_submit" ).attr("type", "button");
                        $( "#first_submit" ).attr("disabled", true);
                    } else {
                        $( "#first_submit" ).attr("type", "submit");
                        $( "#first_submit" ).attr("disabled", false);
                    }

                    //disabling second form button
                    if(pageErrors.length > 0){
                        $( "#second_submit" ).attr("type", "button");
                        $( "#second_submit" ).attr("disabled", true);
                    } else {
                        $( "#second_submit" ).attr("type", "submit");
                        $( "#second_submit" ).attr("disabled", false);
                    }

                    //disabling third form button
                    if(pageErrors.length > 0){
                        $( "#third_submit" ).attr("type", "button");
                        $( "#third_submit" ).attr("disabled", true);
                    } else {
                        $( "#third_submit" ).attr("type", "submit");
                        $( "#third_submit" ).attr("disabled", false);
                    }

                    //disabling fourth form button
                    if(pageErrors.length > 0){
                        $( "#fourth_submit" ).attr("type", "button");
                        $( "#fourth_submit" ).attr("disabled", true);
                    } else {
                        $( "#fourth_submit" ).attr("type", "submit");
                        $( "#fourth_submit" ).attr("disabled", false);
                    }

                    //disabling fifth form button
                    if(pageErrors.length > 0){
                        $( "#fifth_submit" ).attr("type", "button");
                        $( "#fifth_submit" ).attr("disabled", true);
                    } else {
                        $( "#fifth_submit" ).attr("type", "submit");
                        $( "#fifth_submit" ).attr("disabled", false);
                    }

                     //disabling sixth form button
                    if(pageErrors.length > 0){
                        $( "#sixth_submit" ).attr("type", "button");
                        $( "#sixth_submit" ).attr("disabled", true);
                    } else {
                        $( "#sixth_submit" ).attr("type", "submit");
                        $( "#sixth_submit" ).attr("disabled", false);
                    }
                }

                
                //first form validation
                $( "#surname" ).on( "keyup", function() {
                    textInput($( "#surname" ).val(), "surname", "username_span", " Enter at least three(3) characters", " Please enter without Numbers");
                } );
                $( "#givenname" ).on( "keyup", function() {
                    textInput($( "#givenname" ).val(), "givenname", "givenname_span", " Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#othername" ).on( "keyup", function() {
                    textInput($( "#othername" ).val(), "othername", "othername_span", " Othername enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#maidenname" ).on( "keyup", function() {
                    textInput($( "#maidenname" ).val(), "maidenname", "maidenname_span", " Maiden nameEnter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#email" ).on( "keyup", function() {
                    validateEmail($( "#email" ).val(), "email", "email_span", "Please enter a valid email");
                });
                $( "#mobile" ).on( "keyup", function() {
                    validateNumber($( "#mobile" ).val(), "mobile", "mobile_span", "Please enter a valid number");
                });
                $( "#levelofeduc" ).on( "keyup", function() {
                    textInput($( "#levelofeduc" ).val(), "levelofeduc", "levelofeduc_span", " Level Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#occupation" ).on( "keyup", function() {
                    textInput($( "#occupation" ).val(), "occupation", "occupation_span", " Occupation Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#religion" ).on( "keyup", function() {
                    textInput($( "#religion" ).val(), "religion", "religion_span", " Religion Enter at least three(3) characters", " Please enter without Numbers");
                });

                //validate second form
                $( "#rcountry" ).on( "keyup", function() {
                    textInput($( "#rcountry" ).val(), "rcountry", "rcountry_span", " Country Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#rdistrict" ).on( "keyup", function() {
                    textInput($( "#rdistrict" ).val(), "rdistrict", "rdistrict_span", " District Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#rcounty" ).on( "keyup", function() {
                    textInput($( "#rcounty" ).val(), "rcounty", "rcounty_span", " County Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#rsubcounty" ).on( "keyup", function() {
                    textInput($( "#rsubcounty" ).val(), "rsubcounty", "rsubcounty_span", " Sub-County Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#rparish" ).on( "keyup", function() {
                    textInput($( "#rparish" ).val(), "rparish", "rparish_span", " Parish Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#rvillage" ).on( "keyup", function() {
                    textInput($( "#rvillage" ).val(), "rvillage", "rvillage_span", " Village Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#rstreet" ).on( "keyup", function() {
                    textInput($( "#rstreet" ).val(), "rstreet", "rstreet_span", " Street Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#rplot" ).on( "keyup", function() {
                    textInput($( "#rplot" ).val(), "rplot", "rplot_span", " Plot Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#rpdistrict" ).on( "keyup", function() {
                    textInput($( "#rpdistrict" ).val(), "rpdistrict", "rpdistrict_span", " Previous District Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#ocountry" ).on( "keyup", function() {
                    textInput($( "#ocountry" ).val(), "ocountry", "ocountry_span", " Origin Country Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#odistrict" ).on( "keyup", function() {
                    textInput($( "#odistrict" ).val(), "odistrict", "odistrict_span", " Origin District Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#ocounty" ).on( "keyup", function() {
                    textInput($( "#ocounty" ).val(), "ocounty", "ocounty_span", " Origin County Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#osubcounty" ).on( "keyup", function() {
                    textInput($( "#osubcounty" ).val(), "osubcounty", "osubcounty_span", " Origin Sub-County Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#oparish" ).on( "keyup", function() {
                    textInput($( "#oparish" ).val(), "oparish", "oparish_span", " Origin Parish Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#ovillage" ).on( "keyup", function() {
                    textInput($( "#ovillage" ).val(), "ovillage", "ovillage_span", " Origin Village Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#otribe" ).on( "keyup", function() {
                    textInput($( "#otribe" ).val(), "otribe", "otribe_span", " Tribe Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#oclan" ).on( "keyup", function() {
                    textInput($( "#oclan" ).val(), "oclan", "oclan_span", " Clan Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#dual_nationality" ).on( "keyup", function() {
                    textInput($( "#dual_nationality" ).val(), "dual_nationality", "dual_nationality_span", " Nationality Enter at least three(3) characters", " Please enter without Numbers");
                });

                //validation of third form
                $( "#ssurname" ).on( "keyup", function() {
                    textInput($( "#ssurname" ).val(), "ssurname", "ssurname_span", " Spouce surname Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#sgivenname" ).on( "keyup", function() {
                    textInput($( "#sgivenname" ).val(), "sgivenname", "sgivenname_span", " Spouce given name Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#sothername" ).on( "keyup", function() {
                    textInput($( "#sothername" ).val(), "sothername", "sothername_span", " Spouce other name Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#smaidenname" ).on( "keyup", function() {
                    textInput($( "#smaidenname" ).val(), "smaidenname", "smaidenname_span", " Spouce maiden name Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#snin" ).on( "keyup", function() {
                    validateNumber($( "#snin" ).val(), "snin", "snin_span", "Spouce NIN, Please enter a valid NIN number 14 characters required","nin");
                });
                $( "#sdual" ).on( "keyup", function() {
                    textInput($( "#sdual" ).val(), "sdual", "sdual_span", " Spouce nationality Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#smariage_place" ).on( "keyup", function() {
                    textInput($( "#smariage_place" ).val(), "smariage_place", "smariage_place_span", " Place of Marriage Enter at least three(3) characters", " Please enter without Numbers");
                });

                //validation on fourth form
                $( "#father_surname" ).on( "keyup", function() {
                    textInput($( "#father_surname" ).val(), "father_surname", "father_surname_span", " Father surname Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#father_givenname" ).on( "keyup", function() {
                    textInput($( "#father_givenname" ).val(), "father_givenname", "father_givenname_span", " Father given name Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#father_othername" ).on( "keyup", function() {
                    textInput($( "#father_othername" ).val(), "father_othername", "father_othername_span", " Father other name Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#father_nin" ).on( "keyup", function() {
                    validateNumber($( "#father_nin" ).val(), "father_nin", "father_nin_span", "Father NIN, Please enter a valid NIN number 14 characters required","nin");
                });
                $( "#father_dual" ).on( "keyup", function() {
                    textInput($( "#father_dual" ).val(), "father_dual", "father_dual_span", " Father nationality Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#father_occupation" ).on( "keyup", function() {
                    textInput($( "#father_occupation" ).val(), "father_occupation", "father_occupation_span", " Father occupation Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#father_country" ).on( "keyup", function() {
                    textInput($( "#father_country" ).val(), "father_country", "father_country_span", " Father country Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#father_district" ).on( "keyup", function() {
                    textInput($( "#father_district" ).val(), "father_district", "father_district_span", " Father district Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#father_county" ).on( "keyup", function() {
                    textInput($( "#father_county" ).val(), "father_county", "father_county_span", " Father county Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#father_subcounty" ).on( "keyup", function() {
                    textInput($( "#father_subcounty" ).val(), "father_subcounty", "father_subcounty_span", " Father sub-county Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#father_parish" ).on( "keyup", function() {
                    textInput($( "#father_parish" ).val(), "father_parish", "father_parish_span", " Father parish Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#father_village" ).on( "keyup", function() {
                    textInput($( "#father_village" ).val(), "father_village", "father_village_span", " Father village Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#father_street" ).on( "keyup", function() {
                    textInput($( "#father_street" ).val(), "father_street", "father_street_span", " Father street Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#father_plot" ).on( "keyup", function() {
                    textInput($( "#father_plot" ).val(), "father_plot", "father_plot_span", " Father plot No Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#ofather_country" ).on( "keyup", function() {
                    textInput($( "#ofather_country" ).val(), "ofather_country", "ofather_country_span", " Father origin country Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#ofather_district" ).on( "keyup", function() {
                    textInput($( "#ofather_district" ).val(), "ofather_district", "ofather_district_span", " Father origin district Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#ofather_county" ).on( "keyup", function() {
                    textInput($( "#ofather_county" ).val(), "ofather_county", "ofather_county_span", " Father origin county Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#ofather_subcounty" ).on( "keyup", function() {
                    textInput($( "#ofather_subcounty" ).val(), "ofather_subcounty", "ofather_subcounty_span", " Father origin sub-county Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#ofather_parish" ).on( "keyup", function() {
                    textInput($( "#ofather_parish" ).val(), "ofather_parish", "ofather_parish_span", " Father origin parish Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#ofather_village" ).on( "keyup", function() {
                    textInput($( "#ofather_village" ).val(), "ofather_village", "ofather_village_span", " Father origin village Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#ofather_street" ).on( "keyup", function() {
                    textInput($( "#ofather_street" ).val(), "ofather_street", "ofather_street_span", " Father origin street Enter at least three(3) characters", " Please enter without Numbers");
                });

                //validation on fifth form
                $( "#mother_surname" ).on( "keyup", function() {
                    textInput($( "#mother_surname" ).val(), "mother_surname", "mother_surname_span", " Mother surname Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#mother_givenname" ).on( "keyup", function() {
                    textInput($( "#mother_givenname" ).val(), "mother_givenname", "mother_givenname_span", " Mother given name Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#mother_othername" ).on( "keyup", function() {
                    textInput($( "#mother_othername" ).val(), "mother_othername", "mother_othername_span", " Mother other name Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#mother_maiden" ).on( "keyup", function() {
                    textInput($( "#mother_maiden" ).val(), "mother_maiden", "mother_maiden_span", " Mother maiden name Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#mother_nin" ).on( "keyup", function() {
                    validateNumber($( "#mother_nin" ).val(), "mother_nin", "mother_nin_span", "mother NIN, Please enter a valid NIN number 14 characters required","nin");
                });
                $( "#mother_dual" ).on( "keyup", function() {
                    textInput($( "#mother_dual" ).val(), "mother_dual", "mother_dual_span", " Mother nationality Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#mother_occupation" ).on( "keyup", function() {
                    textInput($( "#mother_occupation" ).val(), "mother_occupation", "mother_occupation_span", " Mother occupation Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#mother_country" ).on( "keyup", function() {
                    textInput($( "#mother_country" ).val(), "mother_country", "mother_country_span", " Mother country Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#mother_district" ).on( "keyup", function() {
                    textInput($( "#mother_district" ).val(), "mother_district", "mother_district_span", " Mother district Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#mother_county" ).on( "keyup", function() {
                    textInput($( "#mother_county" ).val(), "mother_county", "mother_county_span", " Mother county Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#mother_subcounty" ).on( "keyup", function() {
                    textInput($( "#mother_subcounty" ).val(), "mother_subcounty", "mother_subcounty_span", " Mother sub-county Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#mother_parish" ).on( "keyup", function() {
                    textInput($( "#mother_parish" ).val(), "mother_parish", "mother_parish_span", " Mother parish Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#mother_village" ).on( "keyup", function() {
                    textInput($( "#mother_village" ).val(), "mother_village", "mother_village_span", " Mother village Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#mother_street" ).on( "keyup", function() {
                    textInput($( "#mother_street" ).val(), "mother_street", "mother_street_span", " Mother street Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#mother_plot" ).on( "keyup", function() {
                    textInput($( "#mother_plot" ).val(), "mother_plot", "mother_plot_span", " Mother plot No Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#omother_country" ).on( "keyup", function() {
                    textInput($( "#omother_country" ).val(), "omother_country", "omother_country_span", " Mother origin country Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#omother_district" ).on( "keyup", function() {
                    textInput($( "#omother_district" ).val(), "omother_district", "omother_district_span", " Mother origin district Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#omother_county" ).on( "keyup", function() {
                    textInput($( "#omother_county" ).val(), "omother_county", "omother_county_span", " Mother origin county Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#omother_subcounty" ).on( "keyup", function() {
                    textInput($( "#omother_subcounty" ).val(), "omother_subcounty", "omother_subcounty_span", " Mother origin sub-county Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#omother_parish" ).on( "keyup", function() {
                    textInput($( "#omother_parish" ).val(), "omother_parish", "omother_parish_span", " Mother origin parish Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#omother_village" ).on( "keyup", function() {
                    textInput($( "#omother_village" ).val(), "omother_village", "omother_village_span", " Mother origin village Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#omother_street" ).on( "keyup", function() {
                    textInput($( "#omother_street" ).val(), "omother_street", "omother_street_span", " Mother origin street Enter at least three(3) characters", " Please enter without Numbers");
                });

                //sixth form validation
                $( "#guardian_surname" ).on( "keyup", function() {
                    textInput($( "#guardian_surname" ).val(), "guardian_surname", "guardian_surname_span", " Guardian surname Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#guardian_givenname" ).on( "keyup", function() {
                    textInput($( "#guardian_givenname" ).val(), "guardian_givenname", "guardian_givenname_span", " Guardian given name Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#guardian_othername" ).on( "keyup", function() {
                    textInput($( "#guardian_othername" ).val(), "guardian_othername", "guardian_othername_span", " Guardian othername Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#guardian_nin" ).on( "keyup", function() {
                    validateNumber($( "#guardian_nin" ).val(), "guardian_nin", "guardian_nin_span", "Guardian NIN, Please enter a valid NIN number 14 characters required","nin");
                });
                $( "#guardian_dual" ).on( "keyup", function() {
                    textInput($( "#guardian_dual" ).val(), "guardian_dual", "guardian_dual_span", " Guardian nationality Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#guardian_occupation" ).on( "keyup", function() {
                    textInput($( "#guardian_occupation" ).val(), "guardian_occupation", "guardian_occupation_span", " Guardian occupation Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#guardian_country" ).on( "keyup", function() {
                    textInput($( "#guardian_country" ).val(), "guardian_country", "guardian_country_span", " Guardian country Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#guardian_district" ).on( "keyup", function() {
                    textInput($( "#guardian_district" ).val(), "guardian_district", "guardian_district_span", " Guardian district Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#guardian_county" ).on( "keyup", function() {
                    textInput($( "#guardian_county" ).val(), "guardian_county", "guardian_county_span", " Guardian county Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#guardian_subcounty" ).on( "keyup", function() {
                    textInput($( "#guardian_subcounty" ).val(), "guardian_subcounty", "guardian_subcounty_span", " Guardian sub-county Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#guardian_parish" ).on( "keyup", function() {
                    textInput($( "#guardian_parish" ).val(), "guardian_parish", "guardian_parish_span", " Guardian parish Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#guardian_village" ).on( "keyup", function() {
                    textInput($( "#guardian_village" ).val(), "guardian_village", "guardian_village_span", " Guardian village Enter at least three(3) characters", " Please enter without Numbers");
                });
                $( "#guardian_street" ).on( "keyup", function() {
                    textInput($( "#guardian_street" ).val(), "guardian_street", "guardian_street_span", " Guardian street Enter at least three(3) characters", " Please enter without Numbers");
                });
            })
        </script>
    </body>
</html>