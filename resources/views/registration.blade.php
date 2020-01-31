@extends('Top.top')

@section('title')
Registration
@endsection

@section('content')
<div style="margin-bottom: 20px;">
<form action="{{url('post-registration')}}" method="POST">
{{ csrf_field() }}
        <div class="row">
    <div class="col-md-3">
        </div>

        <div class="col-md-6" id="col-md-6" style="background-color: dodgerblue; color: antiquewhite">

            <h1 id="h1register" class="text-center">REGISTER</h1>


            <div class="form-row">
                <div class="col-md-3">
                    <label class="label col-md-3 control-label" id="nameTag">Username</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="username" placeholder="User Name">
                </div>
				@if ($errors->has('username'))
                  <span class="error">{{ $errors->first('username') }}</span>
                  @endif
            </div>

            <div class="form-row">
                <div class="col-md-3">
                    <label class="label col-md-3 control-label" id="nameTag">Id</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="id" placeholder="Ex: 15APC0000">
                </div>
				@if ($errors->has('id'))
                  <span class="error">{{ $errors->first('id') }}</span>
                  @endif
            </div>

            <div class="form-row">
                <div class="col-md-3">
                    <label class="label col-md-3 control-label" id="nameTag">Password</label>
                </div>

                <div class="col-md-4">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
				@if ($errors->has('password'))
                  <span class="error">{{ $errors->first('password') }}</span>
                  @endif
                <div class="col-md-4">
                    <input type="password" class="form-control" name="confirmation" id="confirm_password" placeholder="Confirm Password">
                </div>
                <div class="col-md-3"></div>
                <div class="row-md-4">
            <small>Password must be 6 character</small>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-3">
                    <label class="label col-md-3 control-label" id="nameTag">E-mail</label>
                </div>
                <div class="col-md-8">
                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                </div>
				@if ($errors->has('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
                  @endif
            </div>

            <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign Up</button>
                <div class="text-center">If you have an account?
                  <a class="small" href="{{ url('login')}}">Sign In</a></div>
        </div>
            <!--
            <div class="col-md-3">

            </div><div class="col-md-3">
            <button type="submit">Register</button>

            </div>-->

        </div>
    </form>
</div>
<script>

    var password=document.getElementById("password"),
    confirm_password =document.getElementById("confirm_password");

    function validatePassword(){
        if(password.value!=confirm_password.value){
            confirm_password.setCustomValidity("Passwords Don't Match");
        }else{
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange=validatePassword;
    confirm_password.onkeyup=validatePassword;

</script>
@endsection

@section('scripts')

@endsection
