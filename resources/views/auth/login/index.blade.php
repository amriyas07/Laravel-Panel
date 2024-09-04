@include('auth.includes.head')

<body class="bg-gray-200">
    <main class="main-content  mt-0">
      <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
              <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Login</h4>
                    
                </div>
                <div class="card-body">
                  <form role="form" class="text-start" method="POST" action="{{route('checklogin')}}" id="login">
                    @csrf
                    <div class="input-group input-group-outline my-3">
                      {{-- <label class="form-label">Email</label> --}}
                      <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      {{-- <label class="form-label">Password</label> --}}
                      <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-check form-switch d-flex align-items-center mb-3">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                      <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                    </div>
                    <p class="mt-4 text-sm text-center">
                      Don't have an account?
                      <a href="{{route('register')}}" class="text-primary text-gradient font-weight-bold">Sign up</a>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </main>
  </body>
  
  <script src="{{url('admin/assets/js/core/popper.min.js')}}"></script>
    <script src="{{url('admin/assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{url('admin/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{url('admin/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
      $().ready(function () {
      $("#login").validate({
          rules: {

              email: {
                  required: true,
              },
              
              password: {
                  required: true,
              }
          },
          messages: {

              email: {
                  required: "Please enter your email address",
              },
              
              password: {
                  required: "Please provide a password",
              }
          },
          submitHandler: function(form) {
              form.submit();  // Submit the form if validation is successful
          }
      });
    });
    </script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->

@if (Session::get('error'))
    <script>
        Swal.fire({
            title: "{{ Session::get('error') }}",
            text: "",
            icon: "error"
        });
    </script>
@endif
