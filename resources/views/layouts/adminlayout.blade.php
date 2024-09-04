<!DOCTYPE html>
<html lang="en">
@include('includes.admin.head')


<body class="g-sidenav-show  bg-gray-200">
  @include('includes.admin.sidebar')

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('includes.admin.navbar')
   
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">

        @yield('content') {{-- Change the Content --}}

      </div>

      {{-- <div class="row mt-4">

      </div>

      <div class="row mb-4">

      </div> --}}
      

      @include('includes.admin.footer')

    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="{{asset('admin/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/plugins/chartjs.min.js')}}"></script>
 
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
<script>
  $().ready(function () {
    $("#signup").validate({
        rules: {
            fname: {
                required: true,
                minlength: 2,
                maxlength: 50
            },
            lname: {
                required: true,
                minlength: 2,
                maxlength: 50
            },
            dob: {
                required: true,
                date: true
            },
            age: {
                required: true,
                number: true,
                min: 1,
                max: 100
            },
            mobile: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 12
            },
            email: {
                required: true,
                email: true
            },
            department: {
                required: true
            },
            position: {
                required: true
            },
            hiredate: {
                required: true,
                date: true
            },
            salary: {
                required: true,
                number: true,
                min: 0
            },
            profile: {
                required: true,
                extension: "jpg|jpeg|png" // Assuming image file types
            },
            address: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            fname: {
                required: "Please enter your first name",
                minlength: "First name must be at least 2 characters long",
                maxlength: "First name must not exceed 50 characters"
            },
            lname: {
                required: "Please enter your last name",
                minlength: "Last name must be at least 2 characters long",
                maxlength: "Last name must not exceed 50 characters"
            },
            dob: {
                required: "Please enter your date of birth",
                date: "Please enter a valid date"
            },
            age: {
                required: "Please enter your age",
                number: "Please enter a valid number",
                min: "Age must be at least 1",
                max: "Age must not exceed 100"
            },
            mobile: {
                required: "Please enter your mobile number",
                digits: "Please enter only digits",
                minlength: "Your mobile number must be at least 10 digits long",
                maxlength: "Your mobile number must not exceed 12 digits"
            },
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            },
            department: {
                required: "Please select a department"
            },
            position: {
                required: "Please select a position"
            },
            hiredate: {
                required: "Please enter your hire date",
                date: "Please enter a valid date"
            },
            salary: {
                required: "Please enter your salary",
                number: "Please enter a valid number",
                min: "Salary must be a positive number"
            },
            profile: {
                required: "Please upload a profile picture",
                extension: "Please upload a valid image file (jpg, jpeg, png)"
            },
            address: {
                required: "Please enter your address",
                minlength: "Address must be at least 5 characters long"
            }
        },
        submitHandler: function(form) {
            form.submit();  // Submit the form if validation is successful
        }
    });
  });
</script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('admin/assets/js/material-dashboard.min.js?v=3.1.0')}}"></script>
</body>

</html>