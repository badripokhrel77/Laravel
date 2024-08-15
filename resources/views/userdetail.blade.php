@extends('layout.main')
@section('title','User Details')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
">
<div class="detail">
    <h1>User Details</h1>
    <table class="table table-bordered border-primary">
        <thead>
         <tr>
           <th scope="col">S.N</th>
           <th scope="col">Name</th>
           <th scope="col">Address</th>
           <th scope="col">Phone</th>
           <th scope="col">Email</th>
           {{-- <th scope="col">Password</th> --}}
           <th scope="col">Action</th>
         </tr>
       </thead>
       <tbody>
        <?php $i=0;?>
         @foreach ($users as $user)
             
         <tr>
           <td>{{++$i}}</td>
           <td>{{ $user->f_name }} {{ $user->l_name }}</td>
           <td>{{$user->address}}</td>
           <td>{{$user->ph}}</td>
           <td>{{$user->email}}</td>
           {{-- <td>{{$user->password}}</td> --}}
           <td>
            <a href="/edit/{{ $user->id }}" value="{{ $user->id}}" class="btn btn-primary">Edit</a>
            <a href="/delete/{{ $user->id}}" class="btn btn-danger">Delete</a>
           </td>
         </tr>
         @endforeach
       </tbody>
    </table>
</div>
@endsection
 