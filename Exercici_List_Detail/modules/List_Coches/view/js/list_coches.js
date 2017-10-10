function load_coches() {
    var jqxhr = $.get("modules/List_Coches/controller/controller_list_coches.class.php?load_coches=true", function (data) {
        json = JSON.parse(data);
        i=0;
        limit=1;
        //console.log(data);
        pintar_coche(json,limit);
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
function scroll() {
    var jqxhr = $.get("modules/List_Coches/controller/controller_list_coches.class.php?scroll=true", function (data) {
        var datos = JSON.parse(data);
        limit+=datos.valor;
        //console.log(json);
        pintar_coche(json,limit);
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
    var json;
    var limit;
    var i;
    load_coches();
});
$(window).scroll(function(){
  if($(window).scrollTop() + $(window).height()+2 >= $(document).height()){
     scroll();
     }
});
function pintar_coche(data, limit) {
    var content = document.getElementById("data");
    var div_user = document.createElement("div");
    var parrafo = document.createElement("p");
    var limites= data.length;
    if (i === 0) {
      for (i; i < limit;i++) {
              console.log(i);
              var dat = document.createElement("div");
              var button=document.createElement("button");
              var view=document.createTextNode("Mas info");
              button.appendChild(view);
              var Matricula=data[i].Matricula;
              var Tipo=data[i].Tipo;
              var Marca=data[i].marca;
              //console.log(valor);
              dat.innerHTML = avatar(data[i].avatar) + " " + Matricula +" "+Tipo+" "+Marca + "<br>";
              View_More(button,Matricula);
              parrafo.appendChild(dat).appendChild(button);
      }
      i=limit;
      div_user.appendChild(parrafo);
      content.appendChild(div_user);
    }
    else {
      var final=limit+limit
      if (final>limites) {
        final=limites
      }
      for (i; i < final;i++) {
              console.log(i);
              var dat = document.createElement("div");
              var button=document.createElement("button");
              var view=document.createTextNode("Mas info");
              button.appendChild(view);
              var Matricula=data[i].Matricula;
              var Tipo=data[i].Tipo;
              var Marca=data[i].marca;
              //console.log(valor);
              dat.innerHTML = avatar(data[i].avatar) + " " + Matricula +" "+Tipo+" "+Marca + "<br>";
              View_More(button,Matricula);
              parrafo.appendChild(dat).appendChild(button);
      }

    div_user.appendChild(parrafo);
    content.appendChild(div_user);
    }



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
            //alert(identificador);
            $.get("modules/List_Coches/controller/controller_list_coches.class.php?load_coche="+identificador, function(){
            window.location.href="index.php?module=List_Coches&view=details_coches";
          });
          });
        }
    }
