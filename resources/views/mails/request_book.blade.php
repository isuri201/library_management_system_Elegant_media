@extends('layouts.app')
@section('content')
<p>
    Hi {{ $requestbook->name }},
</p>

<p>
    Thank you for contacting the support system.
    Your ticket is successfully created and details are shown below:
</p>

<br>

<table class="table table-bordered table-striped">
    <tbody>
        <tr>
            <td><strong>Book:</strong></td>
            <td>{{ $requestbook->book_name }}</td>
        </tr>
        <tr>
            <td><strong>Name:</strong></td>
            <td>{{ $requestbook->name }}</td>
        </tr>
        <tr>
            <td><strong>Email:</strong></td>
            <td>{{ $requestbook->email }}</td>
        </tr>
        <tr>
            <td><strong>Phone:</strong></td>
            <td>{{ $requestbook->contact_number }}</td>
        </tr>
       
    </tbody>
</table>

<br><br>


<br>

<p>Thank you.</p>





@endsection