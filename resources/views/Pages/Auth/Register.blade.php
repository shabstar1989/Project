{{--@extends("Layouts.AuthMaster")--}}

@if (count($errors))

    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

@endif

<form action="{{ route("Register") }}" method="post">
    @csrf
    <input type="name" name="name" placeholder="name" value="{{ old("name") }}"><br>
    <input type="family" name="family" placeholder="family" value="{{ old("family") }}"><br>
    <input type="age" name="age" placeholder="age" value="{{ old("age") }}"><br>
    <input type="email" name="email" placeholder="email" value="{{ old("email") }}"><br>
    <input type="password" name="password" placeholder="password"><br>
    male<input type="radio" name="gender" id="" value="1">    female<input type="radio" name="gender" id="" value="0"><br>
    <input type="city" name="city" placeholder="city" value="{{ old("city") }}"><br>
    <textarea name="address" placeholder="dsgg">{{ old("address") }}</textarea><br>
    <input type="submit" value="Register">

</form>
