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
                <li>
                    <a href="users">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>Admin Profile</p>
                    </a>
                </li>
                <li class="active">
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
              <h2 class="title">Tables</h2>
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

                <div class="col-md-12">

                    <div class="card  card-tasks">
                        <div class="card-header ">

                            <h4 class="card-title">All Users</h4>
                        </div>
                        <div class="card-body ">
                            <div class="table-full-width table-responsive">
                                
                                <table class="table table-striped table-dark" border = "1">
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>                                                              
                                        <th>Status</th>
                                    </tr>
                                    @php($count=0)
                                    @foreach ($data as $usr)
                                    <tr>
                                        @php ($count++)
                                        <td>{{ $count }}</td>
                                        <td>{{ $usr->user_id }}</td>
                                        <td>{{ $usr->username }}</td>
                                        <td>{{ $usr->email }}</td>
                                        <td> @if($usr->approved==0)Inactive @else Active @endif </td>
                                    </tr>
                                    @endforeach    
                                </table>    
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
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
</div>


@endsection
