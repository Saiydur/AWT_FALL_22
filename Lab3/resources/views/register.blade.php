@extends('layouts.app')

@section('title',"Registration")
    
@section('main')
<h1>Registration</h1>
    <form action="" method="post">
        <div>
            <label>First Name</label>
            <input type="text" value="{{$fname}}">
        </div>
        <div>
            <label>Last Name</label>
            <input type="text" value="{{$lname}}">
        </div>
        <div>
            <label>Age</label>
            <input type="text" value="{{$age}}">
        </div>
        <div>
            <label>Email</label>
            <input type="text" value="{{$email}}">
        </div>
        <div>
            <label for="">Phone</label>
            <input type="tel" name="" id="" value="{{$mobile}}">
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
        
    </form>
@endsection