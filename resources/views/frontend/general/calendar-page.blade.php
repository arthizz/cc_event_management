@extends('layout.app')

@section('content')

    <div class="container my-5 p-5 h-75 w-75 shadow-lg">

        <div id="event-calendar">

        </div>

    </div>

    <section id="footer">

        <div class="container-fluid custom-primary-bg py-5 px-5">
            
            <div class="row">

                <div class="col-md-4">

                    <h3 class="content-header-font">Contact Us</h3>
                    
                    <p>
                        <i class="fas fa-map-marker-alt"></i> #1 first St. New Asinan, Olongapo City
                    </p>

                    <p>
                        <i class="fas fa-phone"></i> +47 - 222 - 3329
                    </p>
                    
                    <p>
                        <i class="fas fa-envelope"></i> info@columban.edu.ph
                    </p>

                    <div class="d-flex">

                        <button class="btn btn-transparent text-white"> <i class="fab fa-facebook fa-2x"></i> </button>
                        <button class="btn btn-transparent text-white"> <i class="fab fa-twitter fa-2x"></i> </button>
                        <button class="btn btn-transparent text-white"> <i class="fab fa-instagram fa-2x"></i> </button>

                    </div>
                    
                </div>
    
                <div class="col-md-4">

                    <h3 class="content-header-font">Barretto/Sta. Cruz Campus</h3>
                    
                    <p>
                        <i class="fas fa-map-marker-alt"></i> Rizal St. Bo. Barretto, Olongapo City
                    </p>

                    <p>
                        <i class="fas fa-phone"></i> +47 - 611- 2094
                    </p>

                    <p>
                        <i class="fas fa-map-marker-alt"></i> Nat'l Highway , Bo. Naulo , Sta Cruz      Zambales
                    </p>

                    <p>
                        <i class="fas fa-phone"></i> +47 - 611- 2094
                    </p>

    
                </div>
    
                <div class="col-md-4">
    
                    <img src="{{asset('frontend/images/cclogo.png')}}" alt="cclogo" class="img-fluid cc-logo-bottom mx-auto d-block">

                </div>

            </div>

            <hr>

            <p class="text-center">
                © Royets CC-Event Project, All Rights Reserved.
            </p>

        </div>

    </section>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
<script src="{{asset('frontend/js/event_calendar.js')}}"></script>
@endsection

<!-- Added exclusive css and js -->