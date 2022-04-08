@extends('layout.app')

@section('content')

    <section class="student_profile">

        <div class="container mt-5">
            
            <div class="row">

                <div class="col-md-4">

                    <div class="col-md-12 rounded img-container-bg">
                        <img src="{{ auth()->user()->profile_photo ? \Storage::url('public/uploads/student-profile/' . auth()->user()->profile_photo) : asset('frontend/images/user_icon.png')}}" id="student-profile" alt="" class="img-fluid student-profile-icon d-block mx-auto">

                    </div>

                    <div class="col-md-12 d-grid mt-2">
                        <button class="btn custom-primary-bg" id="upload-btn" type="button"> Upload </button>
                        <input type="file" id="profile-upload" class="d-none">
                    </div>

                    {{-- <div class="col-md-12 mt-3 description-content">

                        <p class="text-muted">Description:</p>

                        <p class=""></p>

                    </div> --}}
    
                </div>
    
                <div class="col-md-8 px-4 py-5">

                    <div class="col-md-12 px-5">

                        <h1 class="fw-bolder d-inline-block">
                            {{auth()->user()->full_name}}
                        </h1>
                        <button class="btn custom-primary-bg mt-1 d-inline-block float-end" data-bs-toggle="modal" data-bs-target="#modal-update-user">Edit Profile</button>
                        

                    </div>

                    <div class="col-md-12 px-5">

                        <p class="text-muted fs-3 mt-3">
                            Profile:
                        </p>
                        <hr>
                        <div class="text-muted mt-5 lh-lg">
    
                            <div class="col-md-10">

                                <div class="row">
                                    <div class="col-md-6">
    
                                        <p>Year level:</p>
            
                                    </div>
                                    <div class="col-md-6">
    
                                        <p>{{auth()->user()->year_level_id}}</p>
            
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
    
                                        <p>Student Number:</p>
            
                                    </div>
                                    <div class="col-md-6">
    
                                        <p>{{auth()->user()->student_number}}</p>
            
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
    
                                        <p>Email:</p>
            
                                    </div>
                                    <div class="col-md-6">
    
                                        <p>{{auth()->user()->email}}</p>
            
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
    
                                        <p>Address:</p>
            
                                    </div>
                                    <div class="col-md-6">
    
                                        <p>{{isset(auth()->user()->address) ? auth()->user()->address : 'N/A'}}</p>
            
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
    
                                        <p>Gender:</p>
            
                                    </div>
                                    <div class="col-md-6">
    
                                        <p>{{isset(auth()->user()->gender) ? auth()->user()->gender : 'N/A'}}</p>
            
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    

                </div>

            </div>

        </div>

    </section>

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
 
@endsection

@include('frontend.overlay._edit-profile-overlay')

