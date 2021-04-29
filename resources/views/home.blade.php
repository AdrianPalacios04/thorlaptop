@extends('layouts.app')
            <?php
        date_default_timezone_set('America/Lima');
        // require_once('models/config.php');
        ?>
<div class="flex-container-body">
    @include('layouts.left')
    <div id="id_sideCenter">
        <div class="flex-container-page">
            <div class="container-monedero">
                <div class="reglas-back">
                    <img src="imagen/partida/logoconletra300x157.png" alt="Logo" class="">
                </div>

                 <div class="monedero">
                    @include('monedero')
                </div>
            </div>
            <div class="container-page-body">
                <h1 class="title">INSCRÍBETE Y JUEGA</h1>
                <div class="partidas">
                    <div>
                        <img src="imagen/partida/circulethor.png" alt="">
                        <a href=""><img src="img/partida/jugarboton.png" alt="" class="btnjugar"></a>
                    </div>
                    <div>
                        <img src="imagen/partida/circuleticket.png" alt="">
                        <a href=""><img src="img/partida/jugarboton.png" alt="" class="btnjugar"></a>
                    </div>
                    <div>
                        <img src="imagen/partida/circleequi.png" alt="">
                    </div>
                </div>
                <!-- <div class="reglas-right">
                    <img src="img/header/logo150x204.png" alt="">
                </div>
                <div class="reglas-center">
                    <div class="regla-center-body">
                        <div class="regla-title">
                            <h1>REGLAS DEL JUEGO</h1>
                        </div>
                    </div>

                </div>
                <div class="reglas-left">
                    <img src="img/header/logo150x204.png" alt="">
                </div> -->
            </div>
            <div class="container-page-footer">
                <div class="footer-left"><img src="imagen/partida/squarecoment.png" alt=""></div>
                <div class="footer-right">
                    <div></div>
                    <div><a href=""> <img src="imagen/partida/btncarrera.png" alt="" class="carreras"></a></div>
                    <div>
                        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <!-- <a class="navbar-brand" href="#">Navbar</a>
                            <a class="navbar-brand" href="#">that</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button> -->
                            <div class="navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                                    <a class="nav-item nav-link" href="#">Features</a>
                                    <a class="nav-item nav-link" href="#">Pricing</a>
                                    <a class="nav-item nav-link disabled" href="#">Disabled</a>
                                </div>
                            </div>
                        </nav> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.right')
</div>

