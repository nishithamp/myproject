@extends('layouts.master')
@section('content')
<div class="container">
<form action="{{route('save.user')}}" method="post">
    @csrf
  <div class="form-group">
    <label>name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name">
   
  <div class="form-group">
  <label>email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
</div>
<div class="form-group">
  <label>dob</label>
    <input type="text" class="form-control" name="dob" placeholder="Enter date of birth">
</div>
<div class="form-group">
    <label>status</label>
    <select class="form-control" name="status">
        <option value="1">active</option>
        <option value="0">Inactive</option>

    </select>

</div>

    


  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection