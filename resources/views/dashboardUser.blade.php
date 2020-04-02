@extends('Layouts.master')

@section('title')
UserDashboard
@endsection

@section('content')

<div class="card" id="dash1" style="background-color:#FBF7F9;margin-top: 5%;">
        <div class="row">
                <div class="col-md-6">
                        <h3 style="color: indigo;">Welcome {{ ucfirst(Auth()->user()->username) }}</h3>
                </div>
                <div class="col-md-6">
                    <a class="btn btn-outline-dark" href="{{url('logout')}}" style="float: right;background-color: cadetblue;">Logout</a>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-10">

                        <div class="container" style="background-color: #FBF7F9;margin-top: 5%;margin-bottom: 6%;width:100%;">
                            @include('UDashLink')
                            @yield('sub_content')
                        </div>
                </div>
                <div class="col-md-1"></div>

            </div>




</div>

@endsection

@section('scripts')

@endsection



