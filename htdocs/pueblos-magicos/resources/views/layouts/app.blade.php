<!doctype html>
<html lang="en">
    <head>
        <title>
        @yield('title')
        </title>
        @include('partials.head')
    </head>
    <body class="theme-orange box_layout">
    <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="../assets/images/icon.svg" width="40" height="40" alt="Osam"></div>
                <p>Please wait...</p>
            </div>
        </div>
    <!-- Theme Setting -->
        <div class="themesetting">
            <a href="javascript:void(0);" class="theme_btn"><i class="icon-magic-wand"></i></a>
            <ul class="choose-skin list-unstyled mb-0">
                <li data-theme="green"><div class="green"></div></li>
                <li data-theme="orange" class="active"><div class="orange"></div></li>
                <li data-theme="blush"><div class="blush"></div></li>
                <li data-theme="cyan"><div class="cyan"></div></li>
            </ul>
        </div>
    <!-- Overlay For Sidebars -->
        <div class="overlay">
            <div id="wrapper">
                @yield('content')
            </div>
        </div>
        <footer></footer>
        @include('partials.javascript')
    </body>
</html>
