@extends('layouts.adminlayout')

@section('content')

<body class="bg-light">
    <div class="container my-5">
        <!-- Header -->
        <div class="text-center mb-5">
            <h1 class="fw-bold" style="color: #E1326F;">User Dashboard</h1>
        </div>

        <!-- User Count Cards -->
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card shadow-lg border-0" style="background-color: #f0f2f5;">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color: #E1326F;">Active Users</h5>
                        <p class="display-4 fw-bold" style="color: #E1326F;">{{$activeCount}}</p>
                        <i class="bi bi-person-check-fill" style="font-size: 2rem; color: #E1326F;"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg border-0" style="border: 5px solid #E1326F; background-color: #ffffff;">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color: #E1326F;">Inactive Users</h5>
                        <p class="display-4 fw-bold" style="color: #E1326F;">{{$inactiveCount}}</p>
                        <i class="bi bi-person-dash-fill" style="font-size: 2rem; color: #E1326F;"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg border" style="background-color: #E1326F; border: 5px dashed #E1326F;">
                    <div class="card-body text-center text-white">
                        <h5 class="card-title fw-bold">Total Users</h5>
                        <p class="display-4 fw-bold">{{$totalCount}}</p>
                        <i class="bi bi-people-fill" style="font-size: 2rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@if (Session::get('msg'))
    <script>
        Swal.fire({
            title: "{{ Session::get('msg') }}",
            text: "",
            icon: "success"
        });
    </script>
@endif
   
@endsection