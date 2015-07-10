
    $("#confirmar").click(function(){
    //obtenemos el texto introducido
    var nombre_pared = $("#nombre_pared").val();
    var valor_pared = $("#valor_pared").val();
    //ingresar usuario
    $.ajax({
        type: "POST",
        url: "Call/Funciones/peritaje.php",
        data: {nombre_pared:nombre_pared, valor_pared: valor_pared},
        dataType: "html",
        error: function(){
              alert("error petición ajax");
        },
        success: function(data){  
            $("#nombre_pared").val("");
            $("#valor_pared").val("");
            
            $("#mesangemostra").empty();
            $("#mesangemostra").append(data);
            loadData();	
                }
          });

    });

$(window).load(function()  {
    loadData();
});
function loadData(){
    $.ajax({   
     type: 'POST',   
     url: 'Peritaje/paredes.php',   
    success: function(data) {
            $("#mostrar1").empty();
            $("#mostrar1").append(data);
        },
    });
  };