<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  @include('resources.js')
  @include('resources.css')
  @include('resources.font')
  <title>{{"Dashboard"}}</title>
</head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-inverse no-border-radius">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </div>
    </nav>
    <div class="col-lg-12">
      <div class="row profile">
        <div class="col-md-3 col-lg-2">
          <div class="profile-sidebar ">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic">
              <img src="https://secure.gravatar.com/avatar/3b6e40d8a242b1a01a8a7d20c1d16022?s=100&r=g&d=mm" class="img-responsive" alt="">
            </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
              <div class="profile-usertitle-name">
                Venkat Lokeswar
              </div>
              <div class="profile-usertitle-job">
                Developer
              </div>
            </div>
            <!-- END SIDEBAR USER TITLE -->
            <!-- SIDEBAR BUTTONS -->
            <div class="profile-userbuttons">
              <button type="button" class="btn btn-success btn-sm">Follow</button>
              <button type="button" class="btn btn-danger btn-sm">Message</button>
            </div>
            <!-- END SIDEBAR BUTTONS -->
            <!-- SIDEBAR MENU -->
            <div class="profile-usermenu">
              <ul class="nav">
                <li class="active">
                  <a href="#">
                    <i class="glyphicon glyphicon-dashboard"></i>
                    Dashboard </a>
                  </li>
                  <li class="">
                    <a href="#">
                      <i class="glyphicon glyphicon-list-alt"></i>
                      Academics </a>
                    </li>
                  <li>
                    <li class="">
                      <a href="#">
                        <i class="glyphicon glyphicon-comment"></i>
                        Notifications </a>
                      </li>
                      <li class="">
                        <a href="#">
                          <i class="glyphicon glyphicon-calendar"></i>
                          To-Do List </a>
                        </li>
                        <li class="">
                          <a href="#">
                            <i class="glyphicon glyphicon-home"></i>
                            Placement Cell </a>
                          </li>
                    <li>
                    <a href="#">
                      <i class="glyphicon glyphicon-user"></i>
                      Account Settings </a>
                    </li>
                      <li>
                        <a href="#">
                          <i class="glyphicon glyphicon-flag"></i>
                          Help </a>
                        </li>
                      </ul>
                    </div>
                    <!-- END MENU -->
                  </div>
                </div>
                <div class="col-lg-10">
                  <ol class="breadcrumb no-border-radius">
                    <li class="active"><a href="#">Dashboard</a></li>
                    <li><a href="#"></a></li>
                  </ol>
                  @yield('content')
                </div>
              </div>

            </div>

          </div>
        </body>
        </html>
