@extends('Layouts.master')

@section('title')
Dashboard
@endsection
@section('content')
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
<div class="container">
<div class="wrapper ">
    <div class="sidebar" data-color="orange" style="margin-top: 100px; height: 560px">

       <br/>
        <hr/>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="dashboardAdmin">
                        <i class="now-ui-icons design_app"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li>
                    <a href="notification">
                        <i class="now-ui-icons ui-1_bell-53"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="active ">
                    <a href="users">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>Admin Profile</p>
                    </a>
                </li>
                <li>
                    <a href="tables">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                        <p>Users</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel" style="margin-top: 20px;">

        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
          <div class="container-fluid">
            <div class="navbar-wrapper">

              <div class="col-md-10">
              <h2 class="title">Admin Profile</h2>
            </div>
            <div class="col-md-2">
                <a class="btn btn-outline-dark" href="{{url('logout')}}" style="float: right;margin-top: 12px">Logout</a>
        </div>
        </div>

          </div>
        </nav>

        <div class="panel-header" style="height: 30px;margin-top: 5px">
          <div class="header text-center">

        </div>
    </div>



    <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Password</h5>
              </div>
              <div class="card-body">
                <form action="{{url('EditProfile')}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" name="user_id" value={{ old('user_id', $data[0]->user_id) }}>
                  <div class="row">

                    <div class="col-md-12 px-1">
                      <div class="form-group">
                        <label>User name</label>
                        <input type="text" class="form-control" name="username" value={{ old('username', $data[0]->username) }}>
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">

                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="*****" value={{ old('password', $data[0]->password) }}>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Edit</button>

                </form>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
</div>

</div>


@endsection
