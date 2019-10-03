
<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('welcome') }}">Blog de Cheffy</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('welcome') }}"><i class="fa fa-home"></i> Inicio</a>
                </li>
                <li>
                    <a href="https://cheffy.mx/about" target="_blank"><i class="fa fa-users"></i> Sobre Cheffy</a>
                </li>
                <li>
                    <a href="https://cheffy.mx/" target="_blank"><i class="fa fa-hamburger"></i> Ir a Cheffy</a>
                </li>
                {{-- TODO Contact form --}}
                {{-- <li>
                    <a href="{{ route('contact') }}">Contact</a>
                </li> --}}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
