@extends('layouts.adminlayout')

@section('content')

<div class="container px-5 py-2">
    <form method="POST" action="<?= route('update',['id'=>$users->id])?>">
        @csrf
        <h2 class="text-center mt-3 text-primary">Edit User</h2>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="fname" value="{{$users->fname}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="number" class="form-control" placeholder="Enter Age" name="age" value="{{$users->age}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Mobile No</label>
            <input type="number" class="form-control" placeholder="Enter Mobile No" name="mobile" value="{{$users->mobile}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="name@example.com" name="email" value="{{$users->email}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route('list')}}" class="btn btn-danger">Cancel</a>

        <div class="mt-3">
        <p class="text-success"><?= session('message')?></p>
        </div>
    </form>
    </div>

@endsection