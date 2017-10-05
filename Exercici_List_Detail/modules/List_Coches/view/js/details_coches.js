$(document).ready(function () {
  $.get("modules/List_Coches/controller/controller_list_coches.class.php?load_coche=", function(data){
    //var json = JSON.parse(data);
    console.log(data);
});
});
