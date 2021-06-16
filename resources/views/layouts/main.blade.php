<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
  </head>

  <body  class="h-screen bg-gray-200 relative">
    <nav class="bg-gray-700">
            <div class="nav-wrapper container ">
            <a href="#!" class="brand-logo">
              <i class="fas fa-car text-red-500"></i>
              IFMS <span class="text-red-500">Auto</span>
            </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                <li><a href="/carros">Carros</a></li>
                <li><a href="/motos">Motos</a></li>
                <li><a href="/categorias">Categorias</a></li>
                
                @if (Auth::check())
                <li class="nav-item">
                  <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="bg-red-500 nav-link btn text-decoration-underline fw-bold text-uppercase"
                          href="/logout">Sair</button>
                  </form>
                </li>
                @else
                <li><a href="login">Login</a></li>
                @endif
            </ul>
            </div>
      </nav>
    
      <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Home</a></li>
        <li><a href="badges.html">Carros</a></li>
        <li><a href="collapsible.html">Motos</a></li>
        <li><a href="mobile.html">Login</a></li>
      </ul>

    @if (session('sucesso'))
      <div id="alert-message" class="p-3 bg-green-500 text-white mb-3" role="alert">
        <div class="container">
          {{ session('sucesso') }}
        </div>
      </div>
    @endif
    
    <div class="pt-5 h-full">
        @yield('principal')
    </div>
    

    <footer class="mt-5 bg-current absolute w-full">
       <div class="container text-center text-white	py-5">
            @php echo Date('Y') @endphp &copy; Alguns direitos reservados
       </div>
    </footer>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>           

    <script>
      M.AutoInit();
      $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
      });
    </script>
    
  </body>
</html>
   