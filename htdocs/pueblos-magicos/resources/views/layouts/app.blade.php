<!doctype html>
<html lang="es">
    <head>
        <title>
        @yield('title')
        </title>
        @include('partials.head')
    </head>
    <body>
    
          <!-- Header y Nav -->   
        <header>
        @include('partials.header')
        </header>
       <!-- Pueblos sugeridos y comentarios visitantes -->
        <section>
        <article>
        @include('partials.pueblossugeridos')
        </article>

        <article>
        @include('partials.comentarios')
        </article>
        </section>
        
        <!-- footer -->
        <footer class="footer footer-black footer-big">
         @include('partials.footer')   
        </footer>
        @include('partials.javascript')
    </body>
</html>
