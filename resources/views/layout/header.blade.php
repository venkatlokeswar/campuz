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
          <li><a href="#"> </a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Quick Links
              <span class="caret"></span></a>
              <div class="dropdown-menu">
                  <table>
                    <tr>
                      <td>
                        <h4><span class="glyphicon glyphicon-th"></span></h4>
                      </td>
                      <td>
                        <h4><span class="glyphicon glyphicon-th"></span></h4>
                      </td>
                      <td>
                        <h4><span class="glyphicon glyphicon-th"></span></h4>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h4><span class="glyphicon glyphicon-th"></span></h4>
                      </td>
                      <td>
                        <h4><span class="glyphicon glyphicon-th"></span></h4>
                      </td>
                      <td>
                        <h4><span class="glyphicon glyphicon-th"></span></h4>
                      </td>
                    </tr>
                  </table>
              </div>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Settings
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Page 1-1</a></li>
                <li><a href="#">Page 1-2</a></li>
                <li><a href="#">Page 1-3</a></li>
              </ul>
            </li>
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
              <img src="/images/IMG_5975.png" class="img-responsive" alt="">
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
                <li class="{{$active==="dashboard"?"active":""}}">
                  <a href="/dashboard">
                    <i class="glyphicon glyphicon-dashboard"></i>
                    Dashboard </a>
                  </li>
                  <li class="{{$active==="academics"?"active":""}}">
                    <a href="/academics">
                      <i class="glyphicon glyphicon-list-alt"></i>
                      Academics </a>
                    </li>
                    <li>
                      <li class="{{$active==="notifications"?"active":""}}">
                        <a href="/notifications">
                          <i class="glyphicon glyphicon-comment"></i>
                          Notifications </a>
                        </li>
                        <li class="{{$active==="todolist"?"active":""}}">
                          <a href="/toDoList">
                            <i class="glyphicon glyphicon-calendar"></i>
                            To-Do List </a>
                          </li>
                          <li class="{{$active==="placement"?"active":""}}">
                            <a href="/placement">
                              <i class="glyphicon glyphicon-home"></i>
                              Placement Cell </a>
                            </li>
                            <li class="{{$active==="account"?"active":""}}">
                              <a href="/settings">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                              </li>
                              <li class="{{$active==="help"?"active":""}}">
                                <a href="/help">
                                  <i class="glyphicon glyphicon-flag"></i>
                                  Help </a>
                                </li>
                              </ul>
                            </div>
                            <!-- END MENU -->
                          </div>
                          <div class="col-lg-12">
                            <form class="" role="search">
                              <h6>Search</h6>
                              <div class="input-group">
                                <input type="text" class="form-control no-border-radius" placeholder=" Student/Employee" name="q">
                                <div class="input-group-btn">
                                  <button class="btn btn-default inline-button no-border-radius" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                        <div class="col-lg-10">
                          <ol class="breadcrumb no-border-radius background-color-white">
                            <li class="active"><a href="#">{{$currentPage}}</a></li>
                            <li><a href="#"></a></li>
                          </ol>
                          @yield('content')
                        </div>
                      </div>

                    </div>

                  </div>
                </body>
                </html>
