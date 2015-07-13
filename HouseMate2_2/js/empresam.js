$(window).load(function() {
	loadData();
	empresaupdate();
});
function changedata(id)
{
	document.getElementById("spanme").innerHTML = id;
}
	function loadData(){
    $.ajax({
     type: 'POST',
     url: 'Call/Funciones/empresas.php',
    success: function(msg) {
            $("#thetablejq").html(msg);
        },
    });
  };
function empresaupdate() {
	name = $("#nameauto").val();
	$.ajax({
		type: "POST",
		url: 'Call/Funciones/updateempresa.php',
		data:"name="+name,
		dataType: "html",
		success: function(msg) {
						$("#datatoupdate").html(msg);
				},
			});
}
function changeed(){
 	id = $("#spanme").text();
	$.ajax({
		type: "POST",
		url: 'Call/Funciones/empresaeliminar.php',
		data:"id="+id,
		dataType: "html",
		success: function(msg) {
						$("#changeempresa").html(msg);
							loadData();
				},
			});
};
function changed()
{
	empresaupdate();
}
