@extends('layouts.app')

@section('content')
<h2>User Profile</h2>
<p>ID: {{ $id }}</p>
<p>Name: {{ $name }}</p>
<form method="GET" action="/user/{{ $id }}/name/">
    <input type="text" name="name" placeholder="Enter New Name">
    <button type="submit" class="btn btn-primary">Change Name</button>
</form>
@endsection
