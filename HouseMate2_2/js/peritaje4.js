
    $("#confirmar4").click(function(){
    //obtenemos el texto introducido
    var nombre_constru = $("#nombre_constru").val();
    var valor_constru = $("#valor_constru").val();
    //ingresar usuario
    $.ajax({
        type: "POST",
        url: "Call/Funciones/Peritaje4.php",
        data: {nombre_constru:nombre_constru, valor_constru: valor_constru},
        dataType: "html",
        error: function(){
              alert("error petición ajax");
        },
        success: function(data){  
            $("#nombre_constru").val("");
            $("#valor_constru").val("");
            
            $("#mesangemostra4").empty();
            $("#mesangemostra4").append(data);
            loadData4();	
                }
          });

    });

$(window).load(function()  {
    loadData4();
});
function loadData4(){
    $.ajax({   
     type: 'POST',   
     url: 'Peritaje/desc_const.php',   
    success: function(data) {
            $("#mostrar4").empty();
            $("#mostrar4").append(data);
        },
    });
  };