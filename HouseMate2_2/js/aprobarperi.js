
//    $("#confirmar5").click(function(){
    //obtenemos el texto introducido
//    var Municipio = $("#Municipio").val();
//    var valor_local1 = $("#valor_local1").val();
//    var valor_local2 = $("#valor_local2").val();
//    var valor_local3 = $("#valor_local3").val();
    //ingresar usuario
//    $.ajax({
//        type: "POST",
//        url: "Call/Funciones/Peritaje5.php",
//        data: {Municipio:Municipio, valor_local1: valor_local1, valor_local2: valor_local2, valor_local3: valor_local3},
//        dataType: "html",
//        error: function(){
//              alert("error petición ajax");
//        },
//        success: function(data){
//            $("#Municipio").val("");
//            $("#valor_local1").val("");
//            $("#valor_local2").val("");
//            $("#valor_local3").val("");
//
//            $("#mesangemostra5").empty();
//            $("#mesangemostra5").append(data);
//            loadData5();
//                }
//          });
//
//    });

$(window).load(function()  {
    loadData();
});
function loadData(){
    $.ajax({
     type: 'POST',
     url: 'Peritaje/objetos.php',
    success: function(data) {
            $("#mostrar1").empty();
            $("#mostrar1").append(data);
        },
    });
  };
