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
<div class="container" style="margin-top: 20%;height: 360px;margin-bottom: 50%;">
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

                <li class="active ">
                    <a href="notification">
                        <i class="now-ui-icons ui-1_bell-53"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li>
                    <a href="users">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>User Profiles</p>
                    </a>
                </li>
                <li>
                    <a href="tables">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                        <p>Table List</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">

        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
          <div class="container-flid">
            <div class="navbar-wrapper">

              <div class="col-md-5">
              <h2 class="title">Notifications</h2>
            </div>
            <div class="col-md-7">
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
            @php($count=0)
            <div class="row">
                <div class="col-md-7">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Notifications</h4>
                    </div>
                    <div class="card-body">
                        @if(count($data)>0)
                      <div class="alert alert-info">

                        <table border = "1">
                        <tr>
                        <td>No</td>

                        <td>User Name</td>
                        <td>ID</td>
                        <td>Email</td>

                        <td>Action</td>

                        </tr>



                        @foreach ($data as $u)
                        <tr>
                            @php ($count++)
<td> {{$count}}</td>
<td>{{ $u->username }}</td>

<td>{{ $u->user_id }}</td>
<td>{{ $u->email }}</td>

<td><a href="{{ route('approve',['id'=>$u->user_id]) }}">@if($u->approved==1)Inactive @else Active @endif</a></td>
</tr>
                        @endforeach


                    </table>


                      </div>
                      @endif
                      <div class="alert alert-danger">
                        <button type="button" aria-hidden="true" class="close">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <span>New registed users must have admin approval for lag dashboard.</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Notification states</h4>
                    </div>
                    <div class="card-body">

                        @if(count($data3)>0)
                      <div class="alert alert-primary">
               <h4>There are {{ count($data3) }} issues must be fix.</h4>
                    </div>
                    @endif

                    @if(count($data)>0)
                    <div class="alert alert-primary">
                        <h4> {{ count($data) }} users are pending for admin aproval</h4>
                    </div>
                             @endif


                            @if(count($data1)>0)
                            <div class="alert alert-success">
                                <h4> {{ count($data1) }} users can succefuuly log to the user dashboard.</h4>
                            </div>
                             @endif

                      </div>


                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="places-buttons">
                        <div class="row">
                          <div class="col-md-6 ml-auto mr-auto text-center">
                            <h4 class="card-title">
                              Notifications Places
                              <p class="category">Click to view notifications</p>
                            </h4>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-8 ml-auto mr-auto">
                            <div class="row">
                              <div class="col-md-4">
                                <button class="btn btn-primary btn-block" onclick="nowidashboard.showNotification('top','left')">Top Left</button>
                              </div>
                              <div class="col-md-4">
                                <button class="btn btn-primary btn-block" onclick="nowidashboard.showNotification('top','center')">Top Center</button>
                              </div>
                              <div class="col-md-4">
                                <button class="btn btn-primary btn-block" onclick="nowidashboard.showNotification('top','right')">Top Right</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-8 ml-auto mr-auto">
                            <div class="row">
                              <div class="col-md-4">
                                <button class="btn btn-primary btn-block" onclick="nowidashboard.showNotification('bottom','left')">Bottom Left</button>
                              </div>
                              <div class="col-md-4">
                                <button class="btn btn-primary btn-block" onclick="nowidashboard.showNotification('bottom','center')">Bottom Center</button>
                              </div>
                              <div class="col-md-4">
                                <button class="btn btn-primary btn-block" onclick="nowidashboard.showNotification('bottom','right')">Bottom Right</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

        </div>

    </div>
</div>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
</div>


@endsection
