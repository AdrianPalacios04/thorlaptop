    
{{-- <?php
// $tra = new Carrera();

// if (isset($_POST["estado"]) and $_POST["estado"] == 1) {
//     $usu = $tra->registrar_usuarios();
//     exit;
// }

// $valor = $tra->ver_monedero_usuarios($_SESSION["id"]);
?> --}}

<div class="monedero-options">
    <div class="option">
        <div><img src="imagen/monedero/mas28x28.png" alt=""></div>
        <div>
            <img src="imagen/monedero/tickets42x48.png" alt="">
        </div>

        <div>
            <span class="cant">
                {{--  --}}

            </span>
            <br>
            <span class="desc">TICKETS</span>
        </div>
    </div>
    <div class="option">
        <div><img src="imagen/monedero/dinero42x48.png" alt=""></div>
        <div><span class="cant"></span><br><span class="desc">SALDO</span></div>
    </div>
</div>

<div class="oficial-time">
    <div id="clock">
        <p>HORA OFICIAL
            <img src="imagen/monedero/banderaperu35x35.png" class="bandera" class="img-fluid">
        </p>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="js/reloj.js"></script>