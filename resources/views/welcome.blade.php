<html>
<head>
  <title>@yield('title')</title>
  @include('resources.css')
  @include('resources.js')
  @include('resources.font')
</head>
<body>
  <div class="container-fluid">
    <div class="col-lg-12">
      <div class="col-lg-4 center-div">
        <div class=" drop-shadow">
          <div class="col-lg-12 background-color-green cursive">
            <h1 class="font-color-white text-shadow">Login here</h1>
          </div>
          <div class="col-lg-12 background-color-white">
            {!! FORM::open(array('url' => 'login')) !!}
            <div class="form-group col-lg-offset-1">
              <div class="inner-addon left-addon col-lg-9 col-lg-offset-1 padding-top-1">
                <i class="glyphicon glyphicon-user"></i>
                {!!FORM::text('username','',['class'=>'form-control text-box-plain no-border-radius','placeholder'=>'Username'])!!}
              </div>
            </div>
            <div class="form-group col-lg-offset-1">
              <div class="inner-addon left-addon col-lg-9 col-lg-offset-1 padding-top-1">
                <i class="glyphicon glyphicon-lock"></i>
                {!!FORM::password('password',['class'=>'form-control text-box-plain no-border-radius','placeholder'=>'Password'])!!}
              </div>
            </div>
            <div class="form-group col-lg-offset-1 ">
              <div class="pull-right col-lg-5" style="margin-top:20px;">
                <span><a href="#" style="font-size:14px;">Forgot Password</a></span>
              </div>
            </div>
            <div class="form-group col-lg-offset-1">
              <div class="inner-addon left-addon col-lg-9 col-lg-offset-1 padding-top-2">
                {!!FORM::button('Login',['class'=>'btn btn-primary no-border-radius col-lg-12'])!!}
              </div>
            </div>
            <div class="form-group col-lg-offset-1">
              <div class="inner-addon left-addon col-lg-12 padding-top-2">
                <span><a href="#" style="font-size:14px;"></a></span>
              </div>
            </div>
            {!! FORM::close() !!}
          </div>
        </div>
        <div>
        </div>
      </div>
        <div class="col-lg-12 col-lg-push-3">
          <h1 class="cursive">Long College Name Goes Here and here and here</h1>
      <div>
    </div>
  </body>
  </html>
