@extends('layouts.app')

@section('content')
<div class="container">
<form class="" action="{{route('books.index')}}" method="post">
    @method('get')
    @csrf
        <div class="row">
            <div class="col-3">
                <select class="form-control" name="sort">
                    <option value="customer_name" {{ request('sort', 'customer_name') == 'customer_name' ? 'selected' : null }} >Customer Name</option>
                    <option value="created_at" {{ request('sort', 'created_at') == 'created_at' ? 'selected' : null }}>Opened Time</option>
                    <option value="updated_at" {{ request('sort', 'updated_at') == 'updated_at' ? 'selected' : null }}>Last Updated Time</option>
                    <option value="status" {{ request('sort', 'status') == 'status' ? 'selected' : null }} >Status</option>
                </select>
            </div> 
             <div class="col-3">
                <select class="form-control" name="sort_dir">
                    <option value="asc" {{ request('sort_dir', 'asc') == 'asc' ? 'selected' : null }} >Ascending</option>
                    <option value="desc" {{ request('sort_dir', 'desc') == 'desc' ? 'selected' : null }} >Descending</option>
                </select>
            </div>
            <div class="col-4">
                <input type="text" name="search" value="{{ request('search') }}" class="form-control mb-5" placeholder="Reference, customer name or phone number">
            </div>
            <div class="col-2">
                <button type="submit" name="submit" class="btn btn-primary w-100">Search</button>
            </div>
        </div>
    </form>
    <table class="table">
    
<thead>
    <tr>
        
        <th>Name</th>
        <th>Book Name</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    
    @foreach($bookrequests as $bookrequest)
    <tr>
        <td>{{$bookrequest->name}}</td>
        <td>{{$bookrequest->book->name}}</td>
        
        
        <td>
          <a href="{{route('requests.show',$bookrequest->id)}}" class="btn btn-info" >view</a>
         
    </tr>
     
    @endforeach
   
</tbody>

    </table>
    {!! $bookrequests->links() !!}
</div>
@endsection