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
                <div class="col-lg-4 col-lg-offset-4 center-div">
                  <div class="col-lg-12 background-color-green">
                    <h1 class="font-color-white">Title Here</h1>
                  </div>
                  <div class="col-lg-12 background-color-grey">
                    {!! FORM::open(array('url' => 'login')) !!}
                      <div class="form-group">
                        {!!FORM::text('username','',['class'=>'col-lg-1 col-lg-push-2 form-control no-border-radius text-box-plain'])!!}
                      </div>
                    {!! FORM::close() !!}
                  </div>
                  <div>
                </div>
            </div>
        </div>
    </body>
</html>
