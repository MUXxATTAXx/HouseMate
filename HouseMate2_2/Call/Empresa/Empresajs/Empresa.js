   	$(window).load(function()  {
				loadData();
			});
			 	function loadData(){
					empresa = $("#value").html();
				$.ajax({   
				 type: 'POST',   
				 url: 'Call/Funciones/miembros.php', 
				 data: "empresa="+empresa,
				success: function(msg) {
						$("#thetablemiembre").html(msg);
					},
				});
			  };
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagenempresa')
                    .attr('src', e.target.result)
            };
			
            reader.readAsDataURL(input.files[0]);
        }
    }
  $(function() {
$("#Municipio4").chained("#Departamento4");
});