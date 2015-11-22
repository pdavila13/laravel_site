@extends('layouts.default')

@section('content')
    <!-- HERO START -->
    <header id="home" class="hero">
        <div class="pattern-overlay"></div>

        <div class="hero-body">
            <div class="hero-text text-center">
                <div id="text-slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <!--
                            <h1 class="small">
                                <span class="blinker"></span>
                            </h1>
                            -->

                            <h1>Servicio técnico
                                <!--<span class="blinker"></span>-->
                            </h1>

                            <p>Reparación de ordenadores, Smartphones y tablets</p>

                            <br/><br/>

                            <div>
                                <a href="{{ url('profile') }}" class="btn btn-lg btn-custom">
                                    Más sobre mí
                                </a>
                            </div>
                            <!-- //.page-scroll -->
                        </div>
                        <!-- //.item -->

                        <div class="item">
                            <!--
                            <h1 class="small">
                                <span class="blinker"></span>
                            </h1>-->

                            <h1>Administración de sistemas
                                <!--<span class="blinker"></span>-->
                            </h1>

                            <p>GNU/Linux, Microsoft Windows y Macintosh</p>

                            <br/><br/>

                            <div>
                                <a href="{{ url('profile') }}" class="btn btn-lg btn-custom">
                                    Más sobre mí
                                </a>
                            </div>
                            <!-- //.page-scroll -->
                        </div>
                        <!-- //.item -->

                        <div class="item">
                            <!--
                            <h1 class="small">
                                <span class="blinker"></span>
                            </h1>-->

                            <h1>Administración de redes
                                <!--<span class="blinker"></span>-->
                            </h1>

                            <p>Instalación, configuración y mantenimiento</p>

                            <br/><br/>

                            <div>
                                <a href="{{ url('profile') }}" class="btn btn-lg btn-custom">
                                    Más sobre mí
                                </a>
                            </div>
                            <!-- //.page-scroll -->
                        </div>
                        <!-- //.item -->

                        <div class="item">
                            <!--
                            <h1 class="small">
                                <span class="blinker"></span>
                            </h1>-->

                            <h1>Desarrollo web
                                <!--<span class="blinker"></span>-->
                            </h1>

                            <p>Aplicaciones web 100% a su medida</p>

                            <br/><br/>

                            <div>
                                <a href="{{ url('profile') }}" class="btn btn-lg btn-custom">
                                    Más sobre mí
                                </a>
                            </div>
                            <!-- //.page-scroll -->
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.carousel-inner -->
                </div>
                <!-- //.carousel -->
            </div>
            <!-- //.hero-text -->
        </div>
        <!-- //.hero-body -->
    </header>
    <!-- //HERO END -->
@stop

@section('container')
    <!-- SERVICES SECTION START -->
    <section id="services" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title uppercase">Servicios<h2>

                                <p class="section-subtitle">
                                    Servicio y tecnología al mejor precio
                                </p>

                                <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->

                <!-- SERVICES START -->
                <div class="services">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 item top dark-bg">
                            <div class="inner-content">
                                <i class="icon-Computer-2 colored-text"></i>

                                <h4 class="uppercase">1. Ordenadores y servidores</h4>

                                <p class="text-grey">
                                    Reparación y limpieza de ordenadores de sobremesa, portátiles, netbooks, etc. <br/><br/>
                                    Reinstalación y optimización de sistemas operativos. <br/><br/>
                                    Soporte y mantenimiento remoto linux.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-4 col-md-4 item top">
                            <div class="inner-content">
                                <i class="icon-Tablet-Phone colored-text"></i>

                                <h4 class="uppercase">2. SmarthPhones y tablets</h4>

                                <p class="text-grey">
                                    Reparación de SmartPhones, iPhones, iPods, Tablets, etc. <br/><br/>
                                    Repuestos de alta calidad y de todas las marcas. <br/><br/>
                                    Amplia gama de servicios de reparación. Técnico cualificado con experiencia.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-4 col-md-4 item top dark-bg">
                            <div class="inner-content">
                                <i class="icon-Monitor-Tablet colored-text"></i>

                                <h4 class="uppercase">3. Diseño web</h4>

                                <p class="text-grey">
                                    Diseño y creación de sitios web. Gestión de contenidos CMS. <br/><br/>
                                    <strong>Tecnologias: </strong>PHP, JavaScript, HTML5, CCS3, Responsive Design. <br/><br/>
                                    <strong>Framework: </strong>CodeIgniter y Laravel 5.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.row -->

                    <div class="row">
                        <div class="col-sm-4 col-md-4 item">
                            <div class="inner-content">
                                <i class="icon-Communication-Tower colored-text"></i>

                                <h4 class="uppercase">4. Redes y internet</h4>

                                <p class="text-grey">
                                    Instalación de Internet sin cables de alta velocidad. <br/><br/>
                                    Implementación, mantenimiento y diseño de redes LAN y WLAN. <br/><br/>
                                    Análisis de vulnerabilidades.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-4 col-md-4 item dark-bg">
                            <div class="inner-content">
                                <i class="icon-Credit-Card2 colored-text"></i>

                                <h4 class="uppercase">5. Ventas</h4>

                                <p class="text-grey">
                                    Venta de ordenadores de série y diferentes marcas. <br/><br/>
                                    Venta de ordenadores a gusto y medida del cliente. <br/><br/>
                                    Venta de periféricos, teléfonos móviles y tablets.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->

                        <div class="col-sm-4 col-md-4 item">
                            <div class="inner-content">
                                <i class="icon-Consulting colored-text"></i>

                                <h4 class="uppercase">6. Consultoria</h4>

                                <p class="text-grey">
                                    Asesoramiento de sistemas y herramientas informáticas. <br/><br/>
                                    Solicita tu presupuesto de reparación gratuita, servicio técnico disponible las 24h.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.row -->
                </div>
                <!-- //SERVICES END -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //SERVICES SECTION END -->

    <!-- CONTACT SECTION START -->
    <section id="contact" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!--<h2 class="section-title uppercase">Contacto</h2>-->

                        <p class="section-subtitle">
                            Nunca confíes en un ordenador que no puedas lanzar por una ventana.
                        </p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-md-12">

                        <!-- CONTACT DETAILS START -->
                        <div class="contact-details text-center">
                            <!--
                            <div class="speech-bubble">
                                <i class="icon-Speach-Bubble11"></i>

                                <h4 class="uppercase text-grey">
                                    WhatsApp
                                </h4>

                            </div>
                            -->
                            <!-- //.speech-bubble -->

                            <h2 class="uppercase">Paolo <strong>Dávila</strong></h2>

                            <h4 class="text-grey">info@paolodavila.com</h4>

                            <span class="divider center"></span>
                        </div>
                        <!-- //CONTACT DETAILS END -->
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //CONTACT SECTION END -->

    <!-- MAP START -->
    <div id="map">
        <div class="address">
            <h4>Sant Gregori, 2-2n - Roquetes</h4>
        </div>
        <!-- //.address -->

        <div id="cd-google-map">
            <div id="google-container"></div>
        </div>
        <!-- //.cd-google-map -->
    </div>
    <!-- //MAP END -->
@stop