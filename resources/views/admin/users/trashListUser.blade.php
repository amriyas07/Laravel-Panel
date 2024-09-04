@extends('layouts.adminlayout')

@section('content')

<div class="container px-5 py-2">
    <div class="mt-1">
        <h1 class="text-center text-primary my-4">Deleted User</h1>
        <div class="d-flex justify-content-between">
            <a href="{{route('list')}}" class="btn btn-primary my-3"><i class="fa-solid fa-arrow-left mx-1" style="color: #ffffff;"></i> Back</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Backup</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                
                @foreach ($users as $user)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->age}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->mobile}}</td>
                    <td>
                        <a href="{{route('restore',['id'=>$user->id])}}" class="btn btn-danger"><i class="fa-solid fa-trash mx-1" style="color: #ffffff;"> </i> Restore</a>
                    </td>
                </tr>

                @php
                $i++;
                @endphp

                @endforeach
                
            </tbody>
          </table>

    </div>
</div>
    
@endsection