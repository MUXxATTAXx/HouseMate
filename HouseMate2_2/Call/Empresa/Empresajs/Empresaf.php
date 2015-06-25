<?php 
echo "
<script type='text/javascript'>
function checkmensajes(){
    $.ajax({   	
    type: 'POST',
	data: 'idempresa='+".$idempresalater.",
    url: 'Call/Empresa/Empresafuncion/vermensajes.php', 
	dataType: 'html',
    cache: false,
    success: function(data) {
				$('#checkmensajes').empty();
				$('#checkmensajes').append(data);	
        },
    });
}; </script>";
?>