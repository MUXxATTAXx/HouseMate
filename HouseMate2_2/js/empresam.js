$(window).load(function() {
	loadData();
});
	function loadData(){
    $.ajax({   
     type: 'POST',   
     url: 'Call/Funciones/empresas.php',   
    success: function(msg) {
            $("#thetablejq").html(msg);
        },
    });
  };