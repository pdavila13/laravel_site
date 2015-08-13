@extends('layouts.nav')

@section('container')
    <!-- STRENGHTS SECTION START -->
    <section id="strenghts" class="section bg-image-yes">

    </section>
    <!-- //STRENGHTS SECTION END -->

    <!-- CONTACT SECTION START -->
    <section id="contact" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title uppercase">Contacto</h2>
                        <!--
                        <p class="section-subtitle">
                            Descripción
                        </p>
                        -->
                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        <!-- CONTACT FORM START -->
                        <form action="{{ asset('contactMail/send_mail.php') }}" method="post" name="contact-form" id="contact-form" class="contact-form validate element-line" role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <input type="text" name="name" id="name" class="form-control required" placeholder="Nombre y apellidos" autocomplete="off">
                                        </div>
                                        <!-- //.input-group -->
                                    </div>
                                    <!-- //.form-group -->
                                </div>
                                <!-- //.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <input type="email" name="email" id="email" class="form-control required email" placeholder="Email" autocomplete="off">
                                        </div>
                                        <!-- //.input-group -->
                                    </div>
                                    <!-- //.form-group -->
                                </div>
                                <!-- //.col-md-6 -->
                            </div>
                            <!-- //.row -->

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <input type="text" name="subject" id="subject" class="form-control required" placeholder="Asunto" autocomplete="off">
                                        </div>
                                        <!-- //.input-group -->
                                    </div>
                                    <!-- //.form-group -->
                                </div>
                                <!-- //.col-md-12 -->
                            </div>
                            <!-- //.row -->

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <textarea name="message" id="message" class="form-control required" placeholder="Mensaje"></textarea>
                                        </div>
                                        <!-- //.input-group -->
                                    </div>
                                    <!-- //.form-group -->
                                </div>
                                <!-- //.col-md-12 -->
                            </div>
                            <!-- //.row -->

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="submit" type="submit">Enviar</button>
                                    </div>
                                    <!-- //.form-group -->
                                </div>
                                <!-- //.col-md-12 -->
                            </div>
                            <!-- //.row -->
                        </form>
                        <!-- //CONTACT FORM END -->

                    </div>
                    <!-- //.col-md-8 -->
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