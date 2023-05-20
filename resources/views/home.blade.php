@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
        <button type="button" class="btn btn-primary">
  Company <span class="badge badge-light">{{$company}}</span>
</button>

<button type="button" class="btn btn-success">
  Contact <span class="badge badge-light">{{$contact}}</span>
</button>

<button type="button" class="btn btn-danger">
  Country <span class="badge badge-light">{{$country}}</span>
</button>

        </div>
    </div>
</div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>

@endsection
