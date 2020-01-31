@extends('./Top.top') @section('title') Dashboard @endsection
@section('content')
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
          <div class="container-fluid">
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

            <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Notifications Style</h4>
                    </div>
                    <div class="card-body">
                      <div class="alert alert-info">
                        <span>This is a plain notification</span>
                      </div>
                      <div class="alert alert-info">
                        <button type="button" aria-hidden="true" class="close">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <span>This is a notification with close button.</span>
                      </div>
                      <div class="alert alert-info alert-with-icon" data-notify="container">
                        <button type="button" aria-hidden="true" class="close">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                        <span data-notify="message">This is a notification with close button and icon.</span>
                      </div>
                      <div class="alert alert-info alert-with-icon" data-notify="container">
                        <button type="button" aria-hidden="true" class="close">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                        <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Notification states</h4>
                    </div>
                    <div class="card-body">
                      <div class="alert alert-primary">
                        <button type="button" aria-hidden="true" class="close">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <span>
                          <b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
                      </div>
                      <div class="alert alert-info">
                        <button type="button" aria-hidden="true" class="close">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <span>
                          <b> Info - </b> This is a regular notification made with ".alert-info"</span>
                      </div>
                      <div class="alert alert-success">
                        <button type="button" aria-hidden="true" class="close">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <span>
                          <b> Success - </b> This is a regular notification made with ".alert-success"</span>
                      </div>
                      <div class="alert alert-warning">
                        <button type="button" aria-hidden="true" class="close">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <span>
                          <b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
                      </div>
                      <div class="alert alert-danger">
                        <button type="button" aria-hidden="true" class="close">
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <span>
                          <b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
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
                                <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('top','left')">Top Left</button>
                              </div>
                              <div class="col-md-4">
                                <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('top','center')">Top Center</button>
                              </div>
                              <div class="col-md-4">
                                <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('top','right')">Top Right</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-8 ml-auto mr-auto">
                            <div class="row">
                              <div class="col-md-4">
                                <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','left')">Bottom Left</button>
                              </div>
                              <div class="col-md-4">
                                <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','center')">Bottom Center</button>
                              </div>
                              <div class="col-md-4">
                                <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','right')">Bottom Right</button>
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
