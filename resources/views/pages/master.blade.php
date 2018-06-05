<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <title>CRUD</title>
    
</head>
<body style="font-family: 'Play', sans-serif;">
    <div class="container-fluid" style="margin-top: 80px; padding-bottom: 60px; background-color: black;">
         <div class="col-md-5 col-md-offset-4" style="margin-top: 120px;">
            @yield('content')
        </div>
        <div class="col-md-4 col-md-offset-4 " style="margin-top: 80px;">
            <div class="row">
                <div class="col-md-3">
                    <a href="http://facebook.com/rafal.fidurski" target="_blank">
                        <img src="{{ URL::to('/asset/icons/fb.png') }}">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="http://instagram.com/fidur_r" target="_blank">
                        <img src="{{ URL::to('/asset/icons/instagram.png') }}">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="http://linkedin/rafalfidurski" target="_blank">
                        <img src="{{ URL::to('/asset/icons/linkedin.png') }}">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="http://github.com/gitRafau" target="_blank">
                        <img src="{{ URL::to('/asset/icons/github.png') }}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>