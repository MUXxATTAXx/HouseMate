$("#eliminar").click(function(){
  var id = $("#id").val();
  $.ajax({
      type: "POST",
      url: "Call/Funciones/eliminar_objeto_peri.php",
      data: {id:id},
      dataType: "html",
      error: function(){
            alert("error petición ajax");
      },
      success: function(data){
          $("#id").val("");
          $("#mensaje_mostrar").empty();
          $("#mensaje_mostrar").append(data);
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
     url: 'Peritaje/objetos.php',
    success: function(data) {
            $("#mostrar1").empty();
            $("#mostrar1").append(data);
        },
    });
  };
