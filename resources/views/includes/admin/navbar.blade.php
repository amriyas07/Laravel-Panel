<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-3">

    <div class="navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-between align-items-center" id="navbar">

      <!-- Left Side: Hamburger and Profile Icon -->
      <div class="d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-body p-0 me-3 d-xl-none" id="iconNavbarSidenav">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </a>
        <a class="nav-link p-0" href="{{route('profile')}}">
          <div class="text-white text-center">
            <img src="{{url('admin/assets/img/logos/profile.png')}}" class="img-fluid" style="max-height: 35px;" />
          </div>
        </a>
      </div>

      <!-- Center: Type here -->
      <div class="flex-grow-1 d-flex justify-content-center">
        <div class="input-group input-group-outline w-50">
          <label class="form-label">Type here...</label>
          <input type="text" class="form-control">
        </div>
      </div>

      <!-- Right Side: Settings Icon -->
      <div class="d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-body p-0">
          <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
        </a>
      </div>

    </div>
  </div>
</nav>
