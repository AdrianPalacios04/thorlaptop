function change(obj) {


    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var domicilio = document.getElementById("domicilio");
    var email = document.getElementById("email");

    if (selected === '1') {
        domicilio.style.display = "block";
        email.style.display = "none";
    }
    else {
        domicilio.style.display = "none";
        email.style.display = "block";
    }
}
