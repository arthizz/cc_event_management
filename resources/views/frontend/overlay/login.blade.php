<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered login-modal rounded" role="document">
    <div class="modal-content">
      <div class="modal-header login-header">
          <img src="{{asset('frontend/images/cclogo.png')}}" alt="" class="img-fluid mx-auto d-block cc-logo">
          <h3 class="text-center mt-3 content-header-font">Login <span class="text-primary content-header-font">CC</span>-Event</h3>
      </div>
      <form id="login-user" action="{{route('login')}}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="container-fluid py-3">
              <div class="form-floating mb-4">
                <input type="email" name="email" class="shadow-none custom-input form-control border-top-0 border-end-0 border-start-0" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput" class="text-black-50">Email address</label>
                <small id="email_error" class="text-danger d-none"></small>
              </div>
              <div class="form-floating mb-4">
                <input type="password" name="password" class="shadow-none custom-input form-control border-top-0 border-end-0 border-start-0" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword" class="text-black-50">Password</label>
              </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Keep me login?</label>
                    <a href="#" class="float-end">forgot password?</a>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="/register"><button type="button" class="btn btn-secondary" type="button">Register</button></a>
            <button type="button" class="btn custom-primary-bg d-block" type="submit" id="login-submit">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>