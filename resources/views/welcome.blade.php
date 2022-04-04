@extends('layouts.master')

@section('content')


<h2><a href="{{route('create.user')}}"class="btn btn-sm btn-primary" style="float:right">new </a></h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($users as $user)
      <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td><a href="{{route('edit.user')}}" class="btn btn-primary">Edit</a>
      <a href="" class="btn btn-danger">Update</a>
    </td>
    </tr>
      @endforeach
    
    
  </tbody>
</table>
@endsection