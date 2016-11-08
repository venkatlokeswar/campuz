<html>
    <head>
        <title>@yield('title')</title>
        @include('resources.css')
        @include('resources.js')
        @include('resources.font')
    </head>
    <body>
        <div class="container logo-default">
            <h1>
                Title Here
            </h1>


            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12 circle-overflow">
                        <button class="half-circle btn btn-primary">
                               
                        </button>
                    </div>
                    <div class="col-lg-6 circle-overflow">
                        <div class="col-lg-6 circle-overflow-left">
                            <button class="half-circle-left btn btn-primary">

                            </button>
                        </div>
                        <div class="col-lg-6 circle-overflow-right">
                            <a class="half-circle-right btn btn-primary">

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
