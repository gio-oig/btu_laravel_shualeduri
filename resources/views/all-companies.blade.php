@extends('layouts.layout')

@section('content')
<div class="card">
        <div class="card-header">
            <h2>All Companies</h2>
        </div>
        <div class="card-body">

            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Country</th>
                </tr>
                <form action="{{ route('company.add') }}" method="POST">
                  @csrf
                <tr>
                    <td colspan="2"><input class="form-control" name="name" type="text" placeholder="name"></td>
                    <td><input class="form-control" name="code" type="text" placeholder="code"></td>
                    <td><input class="form-control" name="address" type="text" placeholder="address"></td>
                    <td><input class="form-control" name="city" type="text" placeholder="city"></td>
                    <td><input class="form-control" name="country" type="text" placeholder="country"></td>
                    <td><button class="btn btn-success" type="submit">Add</button></td>
                </tr>
                </form>
                @forEach($companies as $company)
                    <tr>
                        <td>{{$company->id}}</td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->code}}</td>
                        <td>{{$company->address}}</td>
                        <td>{{$company->city}}</td>
                        <td>{{$company->country}}</td>
                        <td>
                            <a href="{{ route('company.edit',['id' => $company->id]) }}" style="margin-bottom: 5px" class="btn btn-primary">edit</a>
                            
                            <form action="{{ route('company.delete') }}" method="POST">
                                @csrf
                                <input type="hidden" name="company_id" value="{{ $company->id }}"/>
                                <Button class="btn btn-danger">Delete</Button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </table>
        
        </div>
    </div>
@endsection
