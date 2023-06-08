@extends('layouts.header')

@section('content')
<div class="container">
    
        <div class="row">
            <div class="col-12">
                <h4 class="text-center">Users List</h4>
                <!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>

    <div class="card-columns">
        @foreach ($users as $user)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">{{ $user->email }}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>


<!-- <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email Address</th>
        </tr>
    </thead>
</br>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div> -->
@endsection