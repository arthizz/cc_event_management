<nav class="navbar navbar-expand-lg navbar-light bg-light px-5 shadow">
    <a class="navbar-brand fw-bold content-header-font" href="/"><img src="{{asset('frontend/images/cclogo.png')}}" alt="cclogo">
        <span class="custom-primary-text content-header-font"> CC</span> - Event
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse me-5" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/event/calendar">Calendar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/event/events">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
        @if (auth()->check())
            <div class="form-inline my-2 my-lg-0">
                <div class="dropdown">
                    <button class="btn btn-transparent dropdown-toggle shadow-none" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('frontend/images/user_icon.png')}}" alt="" class="img-fluid user-icon">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="javascript:void(0)" id="logout-user">Logout</a></li>
                      <li><a class="dropdown-item" href="/student/profile">Profile</a></li>
                      <li><a class="dropdown-item" href="#">Event History</a></li>
                    </ul>
                </div>
            </div>
        @else
            <div class="form-inline my-2 my-lg-0">
                <button class="btn custom-primary-bg my-2 my-sm-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
                <a href="/register"><button type="button" class="btn btn-secondary my-2 my-sm-0" type="button">Register</button></a>
            </div>
        @endif
    </div>
  </nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
</form>