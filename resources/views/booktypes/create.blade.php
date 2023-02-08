@extends('layouts.app')

@section('content')

<div class="container">
<div class="card mt-5 ">

  <div class="card-header bg-secondary">
    <h3 class="text-white text-center">Add new Book Type</h3>
  </div>
  <div class="card-body bg-light">
  <form action="{{route('booktypes.store')}}" method="post">
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
        <label for="type">Book Type</label>
        <input type="text" name="type" id="type" class="form-control">
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