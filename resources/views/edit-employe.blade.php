@extends('layouts.layout')


@section('content')
<form action="{{ route('employee.update', ['id' => $employee->id]) }}" method="post">
  @csrf
  <div class="card">
    <div class="card-header ">
      <h3>Edit Company</h3>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $employee->name }}">
      </div>
      <div class="form-group">
        <label for="name">Last Name</label>
        <input type="text" class="form-control" name="lastname" value="{{ $employee->lastname }}">
      </div>
      <div class="form-group">
        <label for="name">Birth Date</label>
        <input type="date" class="form-control" name="birthdate" value="{{ $employee->birthdate }}">
      </div>
      <div class="form-group">
        <label for="name">Personal Id</label>
        <input type="number" class="form-control" name="personal_id"  value="{{ $employee->personal_id }}">
      </div>
      <div class="form-group">
        <label for="name">Salary</label>
        <input type="number" class="form-control" name="salary"  value="{{ $employee->salary }}">
      </div>
    </div>
    <div class="card-footer">
      <button class="btn btn-success">Save</button>
      <a href="#" class="btn btn-danger" >Cancel</a>
    </div>
  </div>
</form>

@endsection
