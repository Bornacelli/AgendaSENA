@extends('layouts.layout')

@section('content')
<h1>Create User</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label>Full Name:</label>
        <input type="text" name="full_name">
        <label>Username:</label>
        <input type="text" name="username">
        <label>Email:</label>
        <input type="email" name="email">
        <label>Phone Number:</label>
        <input type="text" name="phone_number">
        <label>Password:</label>
        <input type="password" name="password">
        <button type="submit">Create</button>
    </form>
@endsection
