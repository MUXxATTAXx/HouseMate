
    $("#confirmar5").click(function(){
    //obtenemos el texto introducido
    var nombre_local = $("#nombre_local").val();
    var valor_local1 = $("#valor_local1").val();
    var valor_local2 = $("#valor_local2").val();
    var valor_local3 = $("#valor_local3").val();
    //ingresar usuario
    $.ajax({
        type: "POST",
        url: "Call/Funciones/Peritaje5.php",
        data: {nombre_local:nombre_local, valor_local1: valor_local1, valor_local2: valor_local2, valor_local3: valor_local3},
        dataType: "html",
        error: function(){
              alert("error petición ajax");
        },
        success: function(data){
            $("#nombre_local").val("");
            $("#valor_local1").val("");
            $("#valor_local2").val("");
            $("#valor_local3").val("");

            $("#mesangemostra5").empty();
            $("#mesangemostra5").append(data);
            loadData5();
                }
          });

    });

$(window).load(function()  {
    loadData5();
});
function loadData5(){
    $.ajax({
     type: 'POST',
     url: 'Peritaje/local.php',
    success: function(data) {
            $("#mostrar5").empty();
            $("#mostrar5").append(data);
        },
    });
  };
