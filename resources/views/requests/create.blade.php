@extends('layouts.user_app')

@section('content')

<div class="container">
<div class="card mt-5 ">

  <div class="card-header bg-secondary">
    <h3 class="text-white text-center">Request Form</h3>
  </div>
  <div class="card-body bg-light">
  <form action="{{route('requests.store')}}" method="post">
  @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
  @if ($errors->any())
     <div class='alert alert-danger'>
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
  @endif

    @csrf
    <div>
    <div class="form-group row">
        <label for="book_name">Book Name</label>
        <input type="text" name="book_name" id="book_name" class="form-control" value="{{$book->name}}" readonly>
    </div>
    <div class="form-group row">
        <label for="name">Your Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group row">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="form-control">
    </div>
    <div class="form-group row">
        <label for="contact_number">Contact Number</label>
        <input type="text" name="contact_number" id="contact_number" class="form-control">
    </div>
    <div class="form-group row">
        
        <input type="hidden" name="id" id="id" class="form-control" value="{{$book->id}}">
    </div>
</div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>
  </div>
  <div class="card-footer text-muted bg-secondary">

  </div>
</div>
</div>
@endsection