@extends('layouts.adminlayout')

@section('content')

<div class="container px-5 py-2">
    <div class="mt-1">
        <h1 class="text-center text-primary my-4">List User</h1>
        <div class="d-flex justify-content-between">
            <a href="{{route('adduser')}}" class="btn btn-primary my-3"><i class="fa-solid fa-plus mx-1" style="color: #ffffff;"></i> Add User</a>
            <a href="{{route('trash')}}" class="btn btn-danger my-3"><i class="fa-solid fa-trash-can mx-1" style="color: #ffffff;"></i> Trash</a>
        </div>
        {{-- <button onclick="deleteItem()">Click Me</button> --}}
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                
                @foreach ($users as $user)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$user->fname.' '.$user->lname}}</td>
                    <td>{{$user->age}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->mobile}}</td>
                    <td>
                        @if($user->status == 'active')
                            <button class="btn btn-success"><i class="fa-solid fa-circle-check mx-1" style="color: #ffffff;"></i> Active</button>
                        @else
                            <button class="btn btn-danger"><i class="fa-solid fa-circle-xmark mx-1" style="color: #ffffff;"></i> InActive</button>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('edit',['id'=>$user->id])}}" class="btn btn-primary"><i class="fa-regular fa-pen-to-square mx-1" style="color: #ffffff;"></i> Edit</a>
                        <a class="btn btn-danger" href="{{route('delete',['id'=>$user->id])}}"><i class="fa-solid fa-trash mx-1" style="color: #ffffff;"></i> Delete</a>
                    </td>
                    
                </tr>

                @php
                $i++;
                @endphp

                @endforeach
                
            </tbody>
          </table>
          <p class="text-success text-center"><?= session('message')?></p>
          
    </div>
</div>

@if (Session::get('msgs'))
    <script>
        Swal.fire({
        position: "top-end",
        icon: "success",
        title: "{{ Session::get('msgs') }}",
        showConfirmButton: false,
        timer: 1500
        });
    </script>
@endif


@endsection