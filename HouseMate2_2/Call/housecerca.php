<?php
	include "conexion.php";
$quero = "SELECT * FROM inmueble ORDER BY IdInmueble DESC LIMIT 8";
$cs = mysql_query($quero); 
$me = mysql_num_rows($cs);
$count = 0;
while($row=mysql_fetch_array($cs))
{
	switch($count)
	{
		case 0:
			echo "<div class='item active'><div class='row'>";
		break;
		case 4:
			echo "</div></div><div class='item'><div class='row'>";
		break;
	}
		
	$var = "";
switch($row['VentaRenta'])
{
	case 1:
	$var = $lang['Renta'];
	break;
	case 2:
	$var = $lang['Venta'];
	break;
}
echo "<div class='col-sm-3'>
		<div class='col-item'>
			<h4 class='text-center'><span class='label label-info'>Tag</span></h4>
				<div class='photo'>
					<img src='".$row['Imagen']."' class='limitante img-responsive' alt='a' />
				</div>
				<div class='info'>
					<div class='row'>
						<div class='price col-md-6'>
							<h5>
								$var</h5>
							<h5 class='price-text-color'>
								$".$row['Precio'].".00</h5>
						</div>
						<div class='rating hidden-sm col-md-6'>
							<i class='price-text-color fa fa-star'></i><i class='price-text-color fa fa-star'>
							</i><i class='price-text-color fa fa-star'></i><i class='price-text-color fa fa-star'>
							</i><i class='fa fa-star'></i>
						</div>
					</div>
					<div class='separator clear-left'>
						<p class='btn-add'>
							<i class='fa fa-shopping-cart'></i><a href='dueno.php?IdUsuario=".$row['Dueno']."' class='hidden-sm'>".$lang['Ca1']."</a></p>
						<p class='btn-details'>
							<i class='fa fa-list'></i><a href='inmueble.php?IdInmueble=".$row['IdInmueble']."&tip=".$_SESSION['tip']."' class='hidden-sm'>".$lang['Ca2']."</a></p>
					</div>
					<div class='clearfix'>
					</div>
				</div>
			</div>
		</div>";
}
?>