@extends('layout.app')

@section('title')
Update Interviewer Profile
@endsection

@section('content')


<div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-8">
        <form action="" id="interviewRegister" method="post" class="shadow-lg p-5 m-3 bg-white" novalidate>
            {{@csrf_field()}}
            <fieldset>
                <legend>Update Interviewer Profile</legend>
                <div class="form-group">
                    <label for="uname" class="form-label">User Name :</label>
                    <input type="text" class="form-control" name="uname" id="uname" value="{{$val->uname ?? old('uname')}}">
                    @if($errors->has('uname'))
                    <span class=" text text-danger">
                        <strong>{{$errors->first('uname')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="mail" class="form-label">Email :</label>
                    <input type="email" class="form-control" name="mail" id="mail" value="{{$val->email ?? old('mail')}}">
                    @if($errors->has('mail'))
                    <span class=" text text-danger">
                        <strong>{{$errors->first('mail')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="pass" class="form-label">Password :</label>
                    <input type="password" class="form-control" name="pass" id="pass" value="{{$val->password ?? old('pass')}}">
                    @if($errors->has('pass'))
                    <span class="text text-danger">
                        <strong>{{$errors->first('pass')}}</strong>
                    </span>
                    @endif
                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary">Update Profile</button>
            <a href="/" class="btn btn-primary">Go Back</a>
        </form>
    </div>
    <div class="col-lg-2"></div>
</div>
<script>
    let form = $("#interviewRegister");
    form.submit(function(e) {

        e.preventDefault();
        // console.log(.serialize());
        $.ajax({
            type: "POST",
            url: "http://localhost:8000/api/updateInterviewerAccount-{{$val->id}}",
            data: form.serialize(),
            dataType: "json",
            success: function(data) {
                alert(`${data.msg}`);
                form.children("input").val("");
            },
            error: function(data) {

                console.log("Error sending data");
            }
        });
    })
</script>

@endsection