<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    <title>Carrinho</title>
</head>
<body style="height: 100%;">

    {{-- MENU DO TOPO --}}
    <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo right">Adonai PetCenter</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="">Início</a></li>
            <li><a href="">Loja</a></li>
            <li><a href="">Carrinho</a></li>
          </ul>
        </div>
      </nav>

    {{-- CORPO DA PÁGINA --}}
    <div class="container">
        @yield('conteudo-principal')
    </div>

    {{-- FOOTER DA PÁGINA --}}
    <footer class="page-footer" style="bottom: 0; position: fixed; width: 100%;">
          <div class="footer-copyright">
            <div class="container">
            © 2020 All Rights Reserveds
            </div>
          </div>
    </footer>
</body>
</html>
