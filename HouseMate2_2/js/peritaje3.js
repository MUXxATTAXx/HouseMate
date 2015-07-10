
    $("#confirmar3").click(function(){
    //obtenemos el texto introducido
    var nombre_techo = $("#nombre_techo").val();
    var valor_techo = $("#valor_techo").val();
    //ingresar usuario
    $.ajax({
        type: "POST",
        url: "Call/Funciones/Peritaje3.php",
        data: {nombre_techo:nombre_techo, valor_techo: valor_techo},
        dataType: "html",
        error: function(){
              alert("error petición ajax");
        },
        success: function(data){  
            $("#nombre_techo").val("");
            $("#valor_techo").val("");
            
            $("#mesangemostra3").empty();
            $("#mesangemostra3").append(data);
            loadData3();	
                }
          });

    });

$(window).load(function()  {
    loadData3();
});
function loadData3(){
    $.ajax({   
     type: 'POST',   
     url: 'Peritaje/techo.php',   
    success: function(data) {
            $("#mostrar3").empty();
            $("#mostrar3").append(data);
        },
    });
  };