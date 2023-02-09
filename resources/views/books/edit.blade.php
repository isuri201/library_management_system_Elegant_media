@extends('layouts.app')

@section('content')
<div class="container">
<div class="card mt-5 ">

<div class="card-header bg-secondary">
  <h3 class="text-white text-center">Books Edit Form</h3>
</div>
<div class="card-body bg-light">
<form action="{{route('books.update',$book->id)}}" method="post">
@method('put')
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
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control" value="{{$book->name}}">
  </div>
  <div class="form-group row">
      <label for="price">Price</label>
      <input type="price" name="price" id="price" class="form-control" value="{{$book->price}}">
  </div>
  <div class="form-group row">
  <label for="phone">Select Book Type</label>
        <select name="type" class="form-select">
        <option>--select book type--</option>
        {{$booktypeid = $book->book_type_id}}
            @foreach($booktypes as $booktype)
            {{$booktype_id = $booktype->id}}
        <option value="{{$booktype->id}}" {{$booktypeid == $booktype_id ? 'selected':''}}>  {{$booktype->type}}</option>
        @endforeach
        </select>
  </div>
 
</div>
  <div class="form-group">
      <input type="submit" class="btn btn-success" value="update">
  </div>
</form>
</div>
<div class="card-footer text-muted bg-secondary">

</div>
</div>   
</div>

@endsection