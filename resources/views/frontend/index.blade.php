@extends('layout.app')

@section('content')

    <section id="slideshow">
        <div class="container-fluid px-0">

            <div id="carouselExampleIndicators" class="carousel slide slider-home" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('frontend/images/slide1.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('frontend/images/slide2.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('frontend/images/slide3.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="main-content">

        <div class="container my-5">

            <div class="row">

                <div class="col-md-6">

                    <img src="{{asset('frontend/images/thumbnail1.jpg')}}" alt="school" class="img-fluid shadow-lg">
    
                </div>
                <div class="col-md-6 px-5" id="img1">

                    <h3 class="my-4 content-header-font"> <span class="custom-primary-text content-header-font">Columban College</span> Events </h3>
                    <p class="text-muted my-4">
                        Lorem Ipsum is simply dummy text of the printing and 
                        typesetting industry. Lorem Ipsum has been the industry's 
                    </p>
                    <p class="text-muted my-4">
                        standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not 
                        only five centuries, but also the leap into electronic typesetting,
                    </p>
                    <p class="text-muted my-4">
                        remaining essentially unchanged. It was popularised in 
                        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    
                </div>

            </div>

        </div>

        <div class="container-fluid px-0 py-4 custom-primary-bg">

            <div class="row justify-content-center">

                <div class="col-md-6 px-5 text-end shadow-lg py-4">

                    <h3 class="content-header-font my-4">Calendar Events System</h3>
                    <p class="text-white my-4">
                        Lorem Ipsum is simply dummy text of the printing and 
                        typesetting industry. Lorem Ipsum has been the industry's 
                    </p>
                    <p class="text-white my-4">
                        standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not 
                        only five centuries, but also the leap into electronic typesetting,
                    </p>
                    <p class="text-white my-4">
                        remaining essentially unchanged. It was popularised in 
                        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                
                </div>
                <div class="col-md-6 px-5">
    
                    <img src="{{asset('frontend/images/thumbnail2.jpg')}}" alt="school" class="img-fluid">
    
                </div>

            </div>

        </div>

        <div class="container my-5">

            <div class="row">

                <div class="col-md-6">

                    <img src="{{asset('frontend/images/thumbnail3.jpg')}}" alt="school" class="img-fluid shadow-lg">
    
                </div>
                <div class="col-md-6 px-5">

                    <h3 class="my-4 content-header-font"> <span class="custom-primary-text content-header-font">About</span> Columban College </h3>
                    <p class="text-muted my-4">
                        is a Catholic basic and higher education institution run by the Roman Catholic Diocese of 
                        Iba in Olongapo City, Zambales, Philippines.
                    </p>
                    <p class="text-muted my-4">
                        It was founded in 1961. 
                        It is dedicated to serve the educational needs of the city of Olongapo 
                        and the provinces of Zambales and Bataan.
                    </p>
                    <p class="text-muted my-4">
                        The institution was first known as Naval Reservation Junior College during the 1950s when it was 
                        operated by the Joben Admana family. In 1961 administration of the school was passed on by the Joben 
                        Admana Family to the Columban Fathers
                    </p>
                    <a href="#" class="card-link">Read More >></a>
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

