
			 	function stuffed(){
					empresa = $("#value").html();
				$.ajax({
				 type: 'POST',
				 url: 'Call/Empresa/Empresafuncion/miembros.php',
				 data: "empresa="+empresa,
				success: function(msg) {
						$("#thetablemiembre").html(msg);
					},
				});
			  };
				function stuffed2(){
					empresa = $("#value").html();
				$.ajax({
				 type: 'POST',
				 url: 'Call/Empresa/Empresafuncion/miembros2.php',
				 data: "empresa="+empresa,
				success: function(msg) {
						$("#thetablemiembre2").html(msg);
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
