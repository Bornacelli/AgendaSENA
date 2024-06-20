@extends('layouts.layout')

@section('content')
<h1>User Details</h1>
    <p>Full Name: {{ $user->full_name }}</p>
    <p>Username: {{ $user->username }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Phone Number: {{ $user->phone_number }}</p>
    <a href="{{ route('users.index') }}">Back to List</a>
@endsection
