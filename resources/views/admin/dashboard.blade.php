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
<div class="container" style="margin-top: 20%;">
<div class="wrapper">
    <div class="sidebar" data-color="orange" style="margin-top: 100px; height: 560px">

       <br/>
        <hr/>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">
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
                <li>
                    <a href="tables">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                        <p>Users</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">

        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
          <div class="container-fluid">
            <div class="navbar-wrapper">

              <div class="col-md-5">
              <h2 class="title">Dashboard</h2>
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
            

            <div class="card" style="background-color: antiquewhite;height: max-content;width: max-content;padding: 5px;">
                @if(count($data)>0)
                        <div class="card-body" style="width: fit-content;background-color: azure;margin: 1px;margin-left: 1px;">
                            
                            <legend>Hardware</legend>
                        <table class="table table-striped table-dark" border = "1">
                            <tr>
                                <th>ID</th>
                                <th>Computer<br>Lab</th>
                                <th>Machine<br>Serial</th>
                                <th>Type</th>
                                <th>Discription</th>                        
                                <th>Action</th>
                            </tr>
            
                            @foreach ($data as $err)
                            <tr>
                                <td>{{ $err->user_id }}</td>
                                <td>{{ $err->ComputerLab }}</td>
                                <td>{{ $err->machineSerial }}</td>
                                <td>{{ $err->type }}</td>
                                <td>{{ $err->discription }}</td>
                                <td><a href="{{ route('CorrectAdminH',['id'=>$err->id]) }}" class="btn btn-light btn-sm">@if($err->status==1)Inactive @else Mark as Fixed @endif</a></td>
                            </tr>
                            @endforeach    
                        </table>  
                    </div> 
                        @endif 
                   
                
                
                    @if(count($data2)>0)
                        <div class="card-body" style="width: fit-content;background-color: azure;margin: 2px;">
                            
                            <legend>Software</legend>
                        <table class="table table-striped table-dark" border = "1">
                            <tr>
                                <th>ID</th>
                                <th>Computer Lab</th>
                                <th>Machine Serial</th>
                                <th>Discription</th>                        
                                <th>Action</th>
                            </tr>
            
                            @foreach ($data2 as $err)
                            <tr>
                                <td>{{ $err->user_id }}</td>
                                <td>{{ $err->ComputerLab }}</td>
                                <td>{{ $err->machineSerial }}</td>
                                <td>{{ $err->softwarediscription }}</td>
                                <td><a href="{{ route('CorrectAdminS',['id'=>$err->id]) }}" class="btn btn-light btn-sm">@if($err->status==1)Inactive @else Mark as Fixed @endif</a></td>
                            </tr>
                            @endforeach    
                        </table> 
                        
                    </div>
                    @endif
                    @if(count($data)<1 && (count($data2)<1))
<h5>There is no new issues reported</h5>
                    @endif
                    
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
