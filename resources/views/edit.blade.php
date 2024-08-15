@extends('layout.main')
@section('title','Edit')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
">
<form action="/update/{{ $User->id }}" method="post">
    @csrf
    <h1>Edit User Details</h1>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">First Name</label>
        <input type="text" class="form-control" name="f_name" value="{{ $User->f_name }}" id="exampleFormControlInput1"
            placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Last Name</label>
        <input type="text" class="form-control" name="l_name" value="{{ $User->l_name }}"
            id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" value="{{ $User->address }}"
            id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Phone</label>
        <input type="text" class="form-control" name="phone" value="{{ $User->ph }}"
            id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="{{ $User->email }}"
            id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection
