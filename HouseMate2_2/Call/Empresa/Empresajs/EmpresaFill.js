window.onload = function() {
  checkmensajes();
  enviadosmensajes();
};
function getmail(id)
{
	var d = document.getElementById("correoenviar");
	d.value = id;
}
function reloadmensajes()
{
	enviadosmensajes();
}