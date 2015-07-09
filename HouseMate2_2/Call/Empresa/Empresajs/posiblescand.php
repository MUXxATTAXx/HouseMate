<?php echo "
<script type='text/javascript'>
function posibles(){
	correo = $('#correoenviar').val();
	mensaje = $('#mensaje').val();
    $.ajax({   	
    type: 'POST',   
    url: 'Call/Empresa/Empresafuncion/enviar.php', 
	data: 'mensaje='+mensaje+'&correo='+correo+'&idempresa='+".$idempresalater.",
	dataType: 'html',
    cache: false,
    success: function(data) {
				$('#sugeridosresult').empty();
				$('#sugeridosresult').append(data);	
				stuffed();
				enviadosmensajes();
				checkmensajes();
        },
    });
}; 
</script>"
?>