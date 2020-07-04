<html xmlns:v-on="http://www.w3.org/1999/xhtml">
    <head>
        <title>Olarav</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{asset('/css/visual/main.css')}}" />
        <noscript><link rel="stylesheet" href="{{asset('/css/visual/noscript.css')}}" /></noscript>
    </head>
    <body class="is-preload">
        <div id="demo">
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <main-page></main-page>
        </div>
    </body>
    <script src="{{asset('js/visual/jquery.min.js')}}"></script>
    <script src="{{asset('js/visual/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('js/visual/jquery.poptrox.min.js')}}"></script>
    <script src="{{asset('js/visual/browser.min.js')}}"></script>
    <script src="{{asset('js/visual/breakpoints.min.js')}}"></script>
    <script src="{{asset('js/visual/util.js')}}"></script>
    <script src="{{asset('js/visual/main.js')}}"></script>
    <script src="{{('/js/app.js')}}"></script>
</html>
