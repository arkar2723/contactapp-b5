@extends('layouts.sb')
@section('content')
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Company Details</strong>
              </div>           
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="first_name" class="col-md-3 col-form-label">#</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{$companies->id}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="last_name" class="col-md-3 col-form-label">Name</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{$companies->name}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Email</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{$companies->email}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="phone" class="col-md-3 col-form-label">Age</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{$companies->age}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">Address</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{$companies->address}}r</p>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="company_id" class="col-md-3 col-form-label">Website</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{$companies->website}}</p>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <a href="#" class="btn btn-info">Edit</a>
                          <a href="#" class="btn btn-outline-danger">Delete</a>
                          <a href="{{route('companies.index')}}" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection