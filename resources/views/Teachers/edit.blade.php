@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Teacher's Details</div>
  <div class="card-body">
      
      <form action="{{ url('teachers/' .$teachers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />

        <label> Full Name:</label></br>
        <input type="text" name="FullName" id="name" value="{{$teachers->FullName}}" class="form-control"></br>

        <label>Address:</label></br>
        <input type="text" name="address" id="address" value="{{$teachers->address}}" class="form-control"></br>

        <label>Mobile:</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$teachers->mobile}}" class="form-control"></br>

        <label>Gender:</label></br>
        <input type="text" name="gender" id="gender" value="{{$teachers->gender}}" class="form-control"></br>

        <label>Class:</label></br>
        <input type="text" name="class" id="class" value="{{$teachers->class}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

@stop