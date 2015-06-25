window.onload = function() {
  checkmensajes();
};
function getmail(id)
{
	var d = document.getElementById("correoenviar");
	d.value = id;
}
function checkmensajes(){
    $.ajax({   	
    type: 'POST',   
    url: 'Call/Empresa/Empresafuncion/vermensajes.php', 
	dataType: 'html',
    cache: false,
    success: function(data) {
				$('#checkmensajes').empty();
				$('#checkmensajes').append(data);	
        },
    });
}; 