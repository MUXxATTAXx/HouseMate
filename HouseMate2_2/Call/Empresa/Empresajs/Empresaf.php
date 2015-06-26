 
<script type='text/javascript'>
function checkmensajes(){
    $.ajax({   	
    type: 'POST',
	data: 'idempresa='+<?php echo $idempresalater ?>,
    url: 'Call/Empresa/Empresafuncion/vermensajes.php', 
	dataType: 'html',
    cache: false,
    success: function(data) {
				$('#checkmensajes').empty();
				$('#checkmensajes').append(data);	
        },
    });
}; 
function enviadosmensajes(){
    $.ajax({   	
    type: 'POST',
	data: 'idempresa='+<?php echo $idempresalater ?>,
    url: 'Call/Empresa/Empresafuncion/vermensajes.php', 
	dataType: 'html',
    cache: false,
    success: function(data) {
				$('#sentmessages').empty();
				$('#sentmessages').append(data);	
        },
    });
}; 
</script>
