@extends('layouts.layout')

@section('content')
<h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Full Name:</label>
        <input type="text" name="full_name" value="{{ $user->full_name }}">
        <label>Username:</label>
        <input type="text" name="username" value="{{ $user->username }}">
        <label>Email:</label>
        <input type="email" name="email" value="{{ $user->email }}">
        <label>Phone Number:</label>
        <input type="text" name="phone_number" value="{{ $user->phone_number }}">
        <label>Password:</label>
        <input type="password" name="password" value="{{ $user->password }}">
        <button type="submit">Update</button>
    </form>
@endsection
