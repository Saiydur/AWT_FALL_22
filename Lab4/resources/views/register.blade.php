@extends('layouts.app')

@section('title',"Register")

@section('container')
    <h1>This is Registration Page</h1>
    <form action="{{route("register.post")}}" method="post">
        @csrf
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" value="{{old("name")}}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email" value="{{old("email")}}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" value="{{old("password")}}">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label><br>
            <input type="password" name="password_confirmation" id="password_confirmation">
            @error('password_confirmation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <div>
        <div>
            <label for="phone">Phone Number</label><br>
            <input type="tel" name="phone" id="phone" value="{{old("phone")}}">
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="age">Age</label><br>
            <input name="number" id="age" value={{old("age")}}>
            @error('age')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
            <button type="submit" class="btn btn-primary mt-2">Sign up</button>
        </div>
    </form>
@endsection