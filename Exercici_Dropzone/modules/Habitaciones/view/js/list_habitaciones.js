function load_users() {
    var jqxhr = $.get("modules/Habitaciones/controller/Habitaciones.php?load=true", function (data) {
        console.log(data);
        var json = JSON.parse(data);
        console.log(json);
        pintar_user(json);
        //alert( "success" );
    }).done(function () {
        //alert( "second success" );
    }).fail(function () {
        //alert( "error" );
    }).always(function () {
        //alert( "finished" );
    });
    jqxhr.always(function () {
        //alert( "second finished" );
    });
}

$(document).ready(function () {
    load_users();
});

function pintar_user(data) {
    //alert(data.user.avatar);
    var content = document.getElementById("content");
    var div_user = document.createElement("div");
    var parrafo = document.createElement("p");

    var msje = document.createElement("div");
    msje.innerHTML = "msje = ";
    msje.innerHTML += data.user.Tipo;

    var name = document.createElement("div");
    name.innerHTML = "name = ";
    name.innerHTML += data.user.Nombre_hotel;

    var last_name = document.createElement("div");
    last_name.innerHTML = "last_name = ";
    last_name.innerHTML += data.user.Direccion;

    var date_birthday = document.createElement("div");
    date_birthday.innerHTML = "date_birthday = ";
    date_birthday.innerHTML += data.user.Fecha_disponibilidad;

    /*var title_date = document.createElement("div");
    title_date.innerHTML = "title_date = ";
    title_date.innerHTML += data.user.title_date;

    var address = document.createElement("div");
    address.innerHTML = "address = ";
    address.innerHTML += data.user.address;

    var user = document.createElement("div");
    user.innerHTML = "user = ";
    user.innerHTML += data.user.user;

    var pass = document.createElement("div");
    pass.innerHTML = "pass = ";
    pass.innerHTML += data.user.pass;

    var email = document.createElement("div");
    email.innerHTML = "email = ";
    email.innerHTML += data.user.email;

    var en_lvl = document.createElement("div");
    en_lvl.innerHTML = "en_lvl = ";
    en_lvl.innerHTML += data.user.en_lvl;
*/
    var interests = document.createElement("div");
    interests.innerHTML = "interests = ";
    for(var i =0;i < data.user.Opciones.length;i++){
    interests.innerHTML += " - "+data.user.Opciones[i];
    }

    //arreglar ruta IMATGE!!!!!

    var cad = data.user.avatar;
    //console.log(cad);
    //var cad = cad.toLowerCase();
    var img = document.createElement("div");
    var html = '<img src="' + cad + '" height="75" width="75"> ';
    img.innerHTML = html;
    //alert(html);

    div_user.appendChild(parrafo);
    parrafo.appendChild(msje);
    parrafo.appendChild(name);
    parrafo.appendChild(last_name);
    parrafo.appendChild(date_birthday);
    /*parrafo.appendChild(title_date);
    parrafo.appendChild(address);
    parrafo.appendChild(en_lvl);
    parrafo.appendChild(user);
    parrafo.appendChild(pass);
    parrafo.appendChild(email);*/
    parrafo.appendChild(interests);
    content.appendChild(div_user);
    content.appendChild(img);
}
