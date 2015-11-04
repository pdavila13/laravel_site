@extends('layouts.nav')

@section('container')
    <!-- PROFILE SECTION START -->
    <section id="profile" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">

                    <!-- PROFILE PICTURE START -->
                    <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                        <div class="profile-picture style-two">
                            <img src="{{ asset('assets/images/profile.png') }}" alt="profile picture" class="img-responsive"/>

                            <h4 class="title uppercase">Técnico informático</h4>
                        </div>
                    </div>
                    <!-- //PROFILE PICTURE END -->

                    <div class="col-md-8 match-height">

                        <!-- PROFILE TEXT START -->
                        <div class="profile-text padding-left-yes">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="section-title uppercase">Información</h2>

                                    <p>
                                        Paolo Dávila, 24 años. Nació y creció en Perú. Viajó a Europa para estudiar y acabar la ESO.
                                        Al finalizar los estudios obligatorios, siguió estudiando y se formó como técnico en
                                        <strong>Sistemas Microinformáticos y Redes</strong>. Unos años después continuó estudiando
                                        <strong>Administración de Sistemas Informáticos en Red</strong>.
                                        Recientemente está cursando <strong>Desarrollo de Aplicaciones Multiplataforma</strong> y otros cursos on-line.
                                    </p>

                                    <span class="divider"></span>

                                    <p class="text-grey">
                                        Actualmente está trabajando como autónomo en el<a href="http://www.iesebre.com" target="_blank"> Institut de l'Ebre</a> de formación profesional como técnico informático.
                                        Está capacitado profesionalmente en el campo de las tecnologías de la información y la comunicación.
                                    </p>

                                    <p class="text-grey">

                                    </p>
                                </div>
                                <!-- //.col-md-12 -->
                            </div>
                            <!-- //.row -->
                        </div>
                        <!-- //PROFILE TEXT END -->

                        <!-- CONTACT DETAILS START -->
                        <div class="contact-details padding-left-yes">
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                    <h4 class="uppercase">Detalles de contacto</h4>

                                    <ul class="list-unstyled text-grey">
                                        <li>Paolo Dávila</li>
                                        <li>Sant Gregori,2-2n, Roquetes</li>
                                        <li>+34 672 65 45 26</li>
                                        <li>info@paolodavila.com</li>
                                        <li>www.paolodavila.com</li>
                                    </ul>
                                </div>
                                <!-- //.col-md-5 -->

                                <div class="col-sm-6 col-md-7">
                                    <a href="{{ url('download') }}" class="btn btn-lg btn-custom">
                                        <i class="icon-File-Download"></i> Descargar Currículum
                                    </a>
                                </div>
                                <!-- //.col-md-6 -->
                            </div>
                            <!-- //.row -->
                        </div>
                        <!-- //CONTACT DETAILS END -->

                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //PROFILE SECTION END -->
@stop