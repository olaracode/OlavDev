<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <link rel="shortcut icon" href="{{'images/untitled.ico'}}">
    <title>OlavDev</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{'css/main.css'}}" />
    <noscript><link rel="stylesheet" href="{{'/css/noscript.css'}}" /></noscript>
</head>
<body class="is-preload">

<!-- Page Wrapper -->

    <!-- Header -->
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <h1><a href="index.html">OlavDev</a></h1>
            <nav>
                <a href="#menu">Menu</a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <div class="inner">
                <h2>Menu</h2>
                <ul class="links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="generic.html">Generic</a></li>
                    <li><a href="elements.html">Elements</a></li>
                    <li><a href="#">Log In</a></li>
                    <li><a href="#">Sign Up</a></li>
                </ul>
                <a href="#" class="close">Close</a>
            </div>
        </nav>
        @yield('content')

    </div>

<!-- Scripts -->
<script src="{{'/js/jquery.min.js'}}"></script>
<script src="{{'/js/jquery.scrollex.min.js'}}"></script>
<script src="{{'js/browser.min.js'}}"></script>
<script src="{{'js/breakpoints.min.js'}}"></script>
<script src="{{'js/util.js'}}"></script>
<script src="{{'js/main.js'}}"></script>

</body>
