@extends('layouts.sb')
@section('title', 'Company')
@section('content')
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Add New Company</strong>
              </div>           
              <div class="card-body">

                <form action="{{route('companies.store')}}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">name</label>
                      <div class="col-md-9">
                        <input type="text" name="name" id="name" class="form-control">
                    
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="age" class="col-md-3 col-form-label">Age</label>
                      <div class="col-md-9">
                        <input type="text" name="age" id="age" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="website" class="col-md-3 col-form-label">Website</label>
                      <div class="col-md-9">
                        <input type="text" name="website" id="website" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="address" class="col-md-3 col-form-label">Address</label>
                      <div class="col-md-9">
                        <input type="text" name="address" id="address" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Email</label>
                      <div class="col-md-9">
                        <input type="text" name="email" id="email" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a href="{{route('companies.index')}}" class="btn btn-outline-secondary">Cancel</a>
                      </div>

                  </div>
                </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    @endsection

    @section('title','Create New Contacts')