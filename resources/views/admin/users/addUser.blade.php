@extends('layouts.adminlayout')

@section('content')

<div class="container px-5 py-2">
    <form method="POST" action="<?= route('submitdata')?>" id="signup" enctype="multipart/form-data">
        @csrf
        <h2 class="text-center mt-3 text-primary">Add User</h2>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control bg-white p-2" placeholder="Enter First Name" name="fname">
            </div>
            <div class="col-md-6">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control bg-white p-2" placeholder="Enter Last Name" name="lname">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Date of Birth</label>
                <input type="date" class="form-control bg-white p-2" name="dob">
            </div>
            <div class="col-md-6">
                <label class="form-label">Age</label>
                <input type="number" class="form-control bg-white p-2" placeholder="Enter Age" name="age">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Mobile No</label>
                <input type="number" class="form-control bg-white p-2" placeholder="Enter Mobile No" name="mobile">
            </div>
            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" class="form-control bg-white p-2" placeholder="name@example.com" name="email">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3">
                <label class="form-label">Department</label>
                <select class="form-control bg-white p-2" name="department">
                    <option value="" disabled selected>Select Department</option>
                    <option value="hr">Human Resources</option>
                    <option value="it">Information Technology</option>
                    <option value="finance">Finance</option>
                    <option value="marketing">Marketing</option>
                    <option value="sales">Sales</option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label">Position</label>
                <select class="form-control bg-white p-2" name="position">
                    <option value="" disabled selected>Select Position</option>
                    <option value="manager">Manager</option>
                    <option value="developer">Developer</option>
                    <option value="analyst">Analyst</option>
                    <option value="assistant">Assistant</option>
                    <option value="executive">Executive</option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label">Hire Date</label>
                <input type="date" class="form-control bg-white p-2" name="hiredate">
            </div>

            <div class="col-md-3">
                <label class="form-label">Salary</label>
                <input type="number" class="form-control bg-white p-2" placeholder="Enter Salary" name="salary">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Profile Picture</label>
            <input type="file" class="form-control bg-white p-2" name="profile" accept="image/*">
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea class="form-control bg-white p-2" placeholder="Enter Address" name="address" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('list')}}" class="btn btn-danger">Cancel</a>

        <div class="mt-3">
        <p class="text-danger"><?= session('errorMsg')?></p>
        </div>
    </form>
</div>

@if (Session::get('error'))
    <script>
        Swal.fire({
            title: "{{ Session::get('error') }}",
            text: "",
            icon: "error"
        });
    </script>
@endif

@endsection