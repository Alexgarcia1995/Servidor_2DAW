function load_coches() {
    var jqxhr = $.get("modules/List_Coches/controller/controller_list_coches.class.php?load_coches=true", function (data) {
        var json = JSON.parse(data);
        //console.log(data);
        pintar_coche(json);
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
    load_coches();
});

function pintar_coche(data) {
    //alert(data.user.avatar);
    var content = document.getElementById("content");
    var div_user = document.createElement("div");
    var parrafo = document.createElement("p");

    for (i = 0; i < data.length; i++) {
            //avatar(data[i].avatar);
            var dat = document.createElement("div");
            var button=document.createElement("button");
            var view=document.createTextNode("Mas info");
            button.appendChild(view);
            var Matricula=data[i].Matricula;
            var Tipo=data[i].Tipo;
            var Marca=data[i].marca;
            //console.log(valor);
            dat.innerHTML = avatar(data[i].avatar) + " " + Matricula +" "+Tipo+" "+Marca;
            View_More(button,Matricula);
            parrafo.appendChild(dat).appendChild(button);

    }
    div_user.appendChild(parrafo);
    content.appendChild(div_user);

    //function to print dynamically divs
    function avatar(names) {
        if (names != null) {
                var html = '<img src="' + names + '" height="75" width="75"> ';
                return html;
            } else {
              var html = '<img src="" height="75" width="75"> ';
              return html;
            }
        }
        function View_More(button,identificador){
          button.addEventListener("click",function(){
            alert(identificador);
            $.get("modules/List_Coches/controller/controller_list_coches.class.php?load_coche="+identificador, function(){
            window.location.href="index.php?module=List_Coches&view=details_coches";
          });
          });
        }
    }
