@extends('Top.top')

@section('title')
Dashboard
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-5">
                    <h3 style="font-family: 'Aclonica';">Welcome {{ ucfirst(Auth()->user()->username) }}</h3>
            </div>
            <div class="col-md-7">
                    <a class="btn btn-outline-dark" href="{{url('logout')}}" style="float: right;margin-top: 12px">Logout</a>
            </div>
        </div>

        <div class="row">
                <div class="col-md-3" id="left-side">
                    <div class="row" id="lefttopheader">

                    </div>
                </div>
                <div class="col-md-9" id="right-side">
                    <div class="row" id="topheader">

                    </div>
                    <div class="row">

                    </div>
                </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')

@endsection

