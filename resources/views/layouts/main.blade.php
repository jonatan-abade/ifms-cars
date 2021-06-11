<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  </head>

  <body  class="h-screen relative">
    <nav class="bg-gray-700">
            <div class="nav-wrapper container ">
            <a href="#!" class="brand-logo"><i class="fas fa-car"></i>IFMS Cars</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                <li><a href="badges.html">Carros</a></li>
                <li><a href="collapsible.html">Motos</a></li>
                <li><a href="mobile.html">Login</a></li>
            </ul>
            </div>
      </nav>
    
      <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Home</a></li>
        <li><a href="badges.html">Carros</a></li>
        <li><a href="collapsible.html">Motos</a></li>
        <li><a href="mobile.html">Login</a></li>
      </ul>
   
    <div class="pt-5">
        @yield('principal')
    </div>
    

    <footer class="bg-current absolute bottom-0 w-full">
       <div class="container text-center text-white	py-5">
            @php Date('Y') @endphp &copy; Alguns direitos reservados
       </div>
    </footer>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script> M.AutoInit();</script>
  </body>
</html>
   