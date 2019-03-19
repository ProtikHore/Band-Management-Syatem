<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="http://vjs.zencdn.net/6.2.8/video-js.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- If you'd like to support IE8 -->
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('css')


</head>
<body style="overflow-x: hidden">
<!-- Include Navigation menu from the ext folder and file name navmenu.blade.php-->
@include('ext.navmenu');
<div class="empty-separator">

</div>

<!-- nav menu end -->
<!-- Content Section Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">@include('ext.sidebar')</div>
        <div class="col-md-10 mainContent">@yield('maincontent')</div>

    </div>
</div>
<!-- Content Section End -->



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="http://vjs.zencdn.net/6.2.8/video.js"></script>
<!-- Plyr core script -->
<script src="{{asset('js/plyr.js')}}"></script>

<!-- Docs script -->
<script src="{{asset('js/demo.js')}}"></script>
<script>plyr.setup();</script>
<!-- Rangetouch to fix <input type="range"> on touch devices (see https://rangetouch.com) -->
<script src="https://cdn.rangetouch.com/1.0.1/rangetouch.js" async></script>

<!-- Sharing libary (https://shr.one) -->
<script src="https://cdn.shr.one/1.0.1/shr.js"></script>
<script>
    if (window.shr) { window.shr.setup({ count: { classname: 'btn__count' } }); }
    (function() {
        // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
        // e.g. just plyr.setup(); and leave it at that if you have no need for events
        var instances = plyr.setup({
            // Output to console
            debug: true
        });

        // Get an element
        function get(selector) {
            return document.querySelector(selector);
        }

        // Custom event handler (just for demo)
        function on(element, type, callback) {
            if (!(element instanceof HTMLElement)) {
                element = get(element);
            }
            element.addEventListener(type, callback, false);
        }

        // Loop through each instance
        instances.forEach(function(instance) {
            // Play
            on('.js-play', 'click', function() {
                instance.play();
            });

            // Pause
            on('.js-pause', 'click', function() {
                instance.pause();
            });

            // Stop
            on('.js-stop', 'click', function() {
                instance.stop();
            });

            // Rewind
            on('.js-rewind', 'click', function() {
                instance.rewind();
            });

            // Forward
            on('.js-forward', 'click', function() {
                instance.forward();
            });
        });
    })();
</script>
<script>

    $(function() {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '1970:2017'
        });
    });

</script>
</body>
</html>