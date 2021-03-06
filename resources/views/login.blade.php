@extends('Layouts.master')

@section('title')
Login
@endsection

@section('content')
<div style="margin-bottom: 92px;margin-top: 90px;">
<form action="{{ route('login.custom')}}" method="POST">
{{ csrf_field() }}
<br>
@if(count($errors)>0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dissmiss="alert">x</button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if($message= Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dissmiss="alert">x</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
        <div class="row">
        <div class="col-md-3">
            </div>

            <div class="col-md-6" id="col-md-6" style="background-color:dodgerblue; color: antiquewhite;">

                <h1 id="h1register" class="text-center">LOGIN</h1>

                <div class="form-row">
                    <div class="col-md-3">
                        <label class="label col-md-3 control-label" id="nameTag">Id</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control" name="id" placeholder="EX:15APC0000">

                       </div>
					@if ($errors->has('id'))
                  <span class="error">{{ $errors->first('id') }}</span>
                  @endif
                </div>

                <div class="form-row">
                    <div class="col-md-3">
                        <label class="label col-md-3 control-label" id="nameTag">Password</label>
                    </div>
                    <div class="col-md-7">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
					@if ($errors->has('password'))
                  <span class="error">{{ $errors->first('password') }}</span>
                  @endif
                </div>
        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign In</button>
                <div class="text-center">If you have not an account?</p>
                  <a class="small" href="{{url('registration')}}">Sign Up</a></div>
            </div>
        </div>

        </form>
</div>
@endsection

@section('scripts')

@endsection
