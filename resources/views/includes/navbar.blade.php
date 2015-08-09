<!-- NAVIGATION START -->
<nav id="navigation" class="navbar navbar-fixed-top center-menu" role="navigation">
    <div class="container navbar-container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".berg-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand visible-xs visible-sm" href="#page-top">page-top</a>
        </div>
        <!-- //.navbar-header -->

        <div class="navbar-collapse collapse berg-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>

                <li>
                    <a href="{{ url('#services') }}">Servicios</a>
                </li>

                <li>
                    <a href="{{ url('profile') }}"> Perfil </a>
                </li>

                <li>
                    <a href="{{ url('portafolio') }}">Portfolio</a>
                </li>

                <li>
                    <a href="{{ url('resume') }}">Currículum</a>
                </li>

                <li>
                    <a href="{{ url('references') }}">Referencias</a>
                </li>

                <li>
                    <a href="{{ url('http://www.paolodavila.com/mediawiki') }}">MediaWiki</a>
                </li>

                <li>
                    <a href="{{ url('http://www.google.com') }}">Contacto</a>
                </li>
            </ul>
        </div>
        <!-- //.navbar-collapse -->
    </div>
    <!-- //.navbar-container -->
</nav>
<!-- //NAVIGATION END -->