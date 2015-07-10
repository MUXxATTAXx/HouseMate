
    $("#confirmar2").click(function(){
    //obtenemos el texto introducido
    var nombre_suelo = $("#nombre_suelo").val();
    var valor_suelo = $("#valor_suelo").val();
    //ingresar usuario
    $.ajax({
        type: "POST",
        url: "Call/Funciones/Peritaje2.php",
        data: {nombre_suelo:nombre_suelo, valor_suelo: valor_suelo},
        dataType: "html",
        error: function(){
              alert("error petición ajax");
        },
        success: function(data){  
            $("#nombre_suelo").val("");
            $("#valor_suelo").val("");
            
            $("#mesangemostra2").empty();
            $("#mesangemostra2").append(data);
            loadData2();	
                }
          });

    });

$(window).load(function()  {
    loadData2();
});
function loadData2(){
    $.ajax({   
     type: 'POST',   
     url: 'Peritaje/suelo.php',   
    success: function(data) {
            $("#mostrar2").empty();
            $("#mostrar2").append(data);
        },
    });
  };