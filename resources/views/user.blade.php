@extends('layouts.user_app')

@section('content')
<div class="container">
<div class="card text-center mt-5 ">
  <div class="card-header bg-warning">
    Online Support System
  </div>
  <div class="card-body bg-light">
    <h5 class="card-title">Check Your Prefered Book from Here</h5>
    <p class="card-text">We are ready to assist you online in any technical problem</p>
    <a href="{{route('books.index')}}" class="btn btn-dark">Get the Book</a>
  </div>
  <div class="card-footer text-muted bg-warning">
   
  </div>
</div>

</div>

@endsection