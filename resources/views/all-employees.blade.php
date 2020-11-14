@extends('layouts.layout')

@section('content')
<div class="card">
        <div class="card-header">
            <h2>All Employees</h2>
        </div>
        <div class="card-body">

            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Birth Date</th>
                    <th>Persinal Id</th>
                    <th>Salary</th>


                </tr>
                <form action="{{ route('employee.add') }}" method="POST">
                  @csrf
                <tr>
                    <td colspan="2"><input class="form-control" name="name" type="text" placeholder="name"></td>
                    <td><input class="form-control" name="lastname" type="text" placeholder="last name"></td>
                    <td><input type="date" name="birthdate" placeholder="birthdate"></td>
                    <td><input class="form-control" name="personal_id" type="number" placeholder="personal_id"></td>
                    <td><input class="form-control" name="salary" type="number" placeholder="salary"></td>
                    <td><button class="btn btn-success" type="submit">Add</button></td>
                </tr>
                </form>
                @forEach($employees as $employee)
                    <tr>
                        <td>{{$employee->id}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->lastname}}</td>
                        <td>{{$employee->birthdate}}</td>
                        <td>{{$employee->personal_id}}</td>
                        <td>{{$employee->salary}}</td>
                        <td>
                            <a href="{{ route('employee.edit',['id' => $employee->id]) }}" class="btn btn-primary" style="margin-bottom: 5px;">edit</a>
                            
                            <form action="{{ route('employee.delete') }}" method="POST">
                                @csrf
                                <input type="hidden" name="employee_id" value="{{ $employee->id }}"/>
                                <Button class="btn btn-danger">Delete</Button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </table>
        
        </div>
    </div>
@endsection
