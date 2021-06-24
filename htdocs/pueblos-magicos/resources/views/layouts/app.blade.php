<!doctype html>
<html lang="en">
    <head>
        <title>
        @yield('title')
        </title>
        @include('partials.head')
    </head>
    <body>
    <!-- Page Loader -->

         <!-- Header y Nav -->   
        @include('partials.header')

        <section>
        <article>
        @include('partials.pueblossugeridos')
        </article>

        <article>
        @include('partials.comentarios')
        </article>
        </section>
        

        <footer class="footer footer-black footer-big">
         @include('partials.footer')   
        </footer>
        @include('partials.javascript')
    </body>
</html>
