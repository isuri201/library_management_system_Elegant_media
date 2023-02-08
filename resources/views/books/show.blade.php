
@extends('layouts.app')


@section('content')
<div class="container">
  <div class="card mt-5">
   <div class="card-title">
      <h3>Book Details</h3>
   </div>
  
  <table class="table table-striped">
   <tbody>
      <tr>
         <th>Name:</th>
         <td>{{$book->name}}</td>
      </tr>
      <tr>
         <th>Price:</th>
         <td>{{$book->price}}</td>
      </tr>
      <tr>
         <th>Book Type:</th>
         <td>{{$book->bookType->type}}</td>
      </tr>
      
      <tr>
         <th>Created At:</th>
         <td>{{$book->created_at}}</td>
      </tr>
      @guest
      <tr>
        <th>
       <a href="{{route('requests.create',['book'=>$book->id])}}" class="btn btn-success">request</a>
         <th>
      </tr>
      @endguest
   </tbody>
  </table>
</div>
 
</div>
 
</div>

@endsection
