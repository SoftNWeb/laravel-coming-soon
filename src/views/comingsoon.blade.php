<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coming Soon!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/comingsoon.css')}}">
    </head>
    <body>
    <div id="particles-js"></div>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md " >
                    Coming Soon
                </div>
                <div class="title m-b-md" id="clock"></div>
                @if ($value['snw_enable_email_form'])
                <form class="m-b-md" action="/" method="post">
                    @csrf
                    <input class="form-control" type="email" name="email" required placeholder="Email">
                    <input class="btn" type="submit" value="Submit">
                </form>
                @endif
                <ul class="links">
                    <li><a href="{{$value['snw_facebook']}}">Facebook</a></li>
                    <li><a href="{{$value['snw_twitter']}}">twitter</a></li>
                    <li><a href="{{$value['snw_instagram']}}">instagram</a></li>
                    <li><a href="{{$value['snw_github']}}">github</a></li>
                    <li><a href="mailto:{{$value['snw_mail']}}">mail</a></li>
</ul>
            </div>
        </div>
    </body>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('/js/particles.min.js')}}"></script>
    <script src="{{asset('/js/comingsoon.js')}}"></script>
    
    <script>
    var $clock = $('#clock');
    $('#clock').countdown('{{$dt}}', function(event) {
        var $this = $(this).html(event.strftime(''
            + '<span>%D<div>days</div></span>'
            + '<span>%H<div>hr</div></span>'
            + '<span>%M<div>min</div></span>'
            + '<span>%S<div>sec</div></span>'));
        });
    </script>
</html>
