@extends('layouts.app')

@section('content')

<div class="container">
<div class="card mt-5 ">

  <div class="card-header bg-secondary">
    <h3 class="text-white text-center">Add new book</h3>
  </div>
  <div class="card-body bg-light">
  <form action="{{route('books.store')}}" method="post">
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
        <label for="name">Book Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group row">
        <label for="price">Price (Rs.)</label>
        <input type="price" name="price" id="price" class="form-control">
    </div>
    <div class="form-group row">
        <label for="phone">Select Book Type</label>
        <select name="type" class="form-select">
        <option>--select book type--</option>
            @foreach($booktypes as $booktype)
        <option value="{{$booktype->id}}">{{$booktype->type}}</option>
        @endforeach
        </select>
    </div>
   
</div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Add">
    </div>
</form>
  </div>
  <div class="card-footer text-muted bg-secondary">

  </div>
</div>
</div>



@endsection