@extends('layouts.sb')
    
@section('title', 'Country') 
@section('content')
<div class="container py-5">

<div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">Country Details</h2>
                    <div class="ml-auto">
                      <a href="{{route('countries.index')}}" class="btn btn-danger"></i> Cancel</a>
                    </div>
                  </div>
                </div>

<table class="table table-dark">
  <thead>
  <tr>
      <th scope="col">#</th>
      <th scope="col">Country Name</th>
      <th scope="col">Zipcode</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated_at At</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
    <tr>
      <th scope="row">{{$countries->id}}</th>
      <td>{{$countries->countryName}}</td>
      <td>{{$countries->zipcode}}</td>
      <td>{{$countries->created_at}}</td>
      <td>{{$countries->updated_at}}</td>
    </tr>
    </tr>
  </tbody>
</table>

</div>
@endsection