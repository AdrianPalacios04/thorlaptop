$(document).ready(function () {
    $('#cbo_pais').on('change', function () {
        let cp = $("#cbo_pais").val();
        $("#id_codPais").val(cp);

        // $.ajax({
        //     cache: false,
        //     url: 'models/config.php/ver_paisxid',
        //     type: "POST",
        //     data: $("#cbo_pais").val(),
        //     dataType: "json",
        //     beforeSend: function() {
        //         debugger;
        //     },
        //     success: function(data) {
        //         alert("Success!!!");
        //     },
        //     error: function(xhr, ajaxOptions, thrownError) {
        //         alert("Ha ocurrido un error :c");
        //         alert(xhr.status);
        //         alert(thrownError);
        //     }
        // })
    });
    $('#btn_modal').click(function () {
        $.ajax({
            cache: false,
            url: 'modal.blade.php',
            type: "POST",
            data: { correo: $("#email").val() },
            dataType: "html",
            beforeSend: function () {
                debugger;
            },
            success: function (data) {
                debugger;

                // Get the modal
                var modal = document.getElementById("myModal");
                // open the modal 
                modal.style.display = "block";
                modal.innerHTML = "" + data + "";
                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("y_close")[0];
                // When the user clicks on <span> (x), close the modal
                span.onclick = function () {
                    modal.style.display = "none";
                }
                // $('#id_modal').html(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                debugger;
                alert("Ha ocurrido un error :c");
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });



    // Get the button that opens the modal
    var btn = document.getElementById("btn_modal");



    // When the user clicks the button, open the modal 
    // btn.onclick = function() {
    //     modal.style.display = "block";
    // }



    // When the user clicks anywhere outside of the modal, close it
    // window.onclick = function(event) {
    //     if (event.target == modal) {
    //         modal.style.display = "none";
    //     }
    // }
});