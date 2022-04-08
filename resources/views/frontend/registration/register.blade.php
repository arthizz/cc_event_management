@extends('layout.app')

@section('content')
    <div class="container mx-auto px-2 mt-3 w-75 shadow-lg">
        <form id="user_register" class="py-3" data-action="/register-process">
            @csrf
            <div class="text-center my-5">
                <h3 class="content-header-font">Registration Form</h3>
            </div>
            <div class="row justify-content-center">
               <div class="col-lg-5">
                    <div class="col-md-9 rounded img-container-bg mx-auto">

                        <img src="{{asset('frontend/images/user_icon.png')}}" id="register-profile" alt="register_img" class="img-fluid student-register-icon d-block mx-auto">
                        
                    </div>
                    <div class="col-md-9 d-grid mx-auto">
                        <button class="btn custom-primary-bg" id="register-upload-btn" type="button"> Upload </button>
                        <input type="file" name="register_image" id="register-upload" class="d-none">
                    </div>
               </div>
               <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-5 mx-auto">
                            <div class="form-floating mb-4">
                                <input type="text" name="first_name" class="shadow-none form-control border-top-0 border-end-0 border-start-0" placeholder="name@example.com">
                                <label for="floatingInput" class="text-black-50">First name</label>
                                <small id="first_name_error" class="text-danger error" style="display:none;"></small>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" name="last_name" class="shadow-none form-control border-top-0 border-end-0 border-start-0" placeholder="name@example.com">
                                <label for="floatingInput" class="text-black-50">Last Name</label>
                                <small id="last_name_error" class="text-danger error" style="display:none;"></small>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="email" name="email" class="shadow-none form-control border-top-0 border-end-0 border-start-0" placeholder="name@example.com">
                                <label for="floatingInput" class="text-black-50">Email</label>
                                <small id="email_error" class="text-danger error" style="display:none;"></small>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="shadow-none form-control border-top-0 border-end-0 border-start-0" placeholder="name@example.com">
                                <label for="floatingInput" class="text-black-50">Password</label>
                                <small id="password_error" class="text-danger error" style="display:none;"></small>
                            </div>
                            <div class="form-floating mb-4">
                                <textarea class="form-control border-top-0 border-end-0 border-start-0 shadow-none" name="address" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingInput" class="text-black-50">Address</label>
                            </div>
                        </div>
                        <div class="col-md-5 mx-auto">
                            <div class="form-floating mb-4">
                                <input type="number" name="phone_number" class="shadow-none form-control border-top-0 border-end-0 border-start-0" placeholder="name@example.com">
                                <label for="floatingInput" class="text-black-50">Phone number</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="number" name="student_number" class="shadow-none form-control border-top-0 border-end-0 border-start-0" placeholder="name@example.com">
                                <label for="floatingInput" class="text-black-50">Student number</label>
                                <small id="student_number_error" class="text-danger error" style="display:none;"></small>
                            </div>
                            <div class="form-floating mb-4">
                                <select class="form-select" id="floatingSelect" name="department" aria-label="Floating label select example">
                                    <option selected disabled></option>
                                    <option value="1">CCS</option>
                                    <option value="2">CBA</option>
                                    <option value="3">ENGR</option>
                                    <option value="4">ARCH</option>
                                </select>
                                <label for="floatingSelect">Select Department</label>
                                <small id="department_error" class="text-danger error" style="display:none;"></small>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" name="year_level" class="shadow-none form-control border-top-0 border-end-0 border-start-0" placeholder="name@example.com">
                                <label for="floatingInput" class="text-black-50">Year level</label>
                                <small id="year_level_error" class="text-danger error" style="display:none;"></small>
                            </div>
                            <div class="form-floating mb-4">
                                <select class="form-select" id="floatingSelectGender" name="gender" aria-label="Floating label select example">
                                    <option selected disabled></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <label for="floatingSelect">Select Gender</label>
                                <small id="gender_error" class="text-danger error" style="display:none;"></small>
                            </div>
                            <button type="submit" class="btn custom-primary-bg float-end register-submit">Register</button>
                        </div>
                    </div>
               </div>
            </div>
            
        </form>
    </div>
@endsection