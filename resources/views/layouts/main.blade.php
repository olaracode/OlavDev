<html xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <title>Visual</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('/css/visual/main.css')}}" />
    <noscript><link rel="stylesheet" href="{{asset('/css/visual/noscript.css')}}" /></noscript>
</head>
<body class="is-preload">
<div id="demo">
    @yield('content')
</div>
<section id="footer">
    <ul class="icons">
        <li><a href="#footer" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#footer" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
        <li><a href="#footer" class="icon brands fa-google-plus-g"><span class="label">Google+</span></a></li>
        <li><a href="#footer" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
        <li><a href="https://www.instagram.com/olvdev/?hl=es" class="icon brands fa-instagram"><span class="label">Dribbble</span></a></li>
        <li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
    </ul>
    <div class="copyright">
        <ul class="menu">
            <li>&copy;Visual.</li>
            <li>Diseño: Octavio Lara</li>
        </ul>
    </div>
</section>

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

