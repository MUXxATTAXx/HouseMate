<div id="postlist">
<?php
session_start();
$idempresa = $_POST['idempresa'];
include("../../../conexion.php");
include("../../Lenguaje/lenguaje.php");
mysql_query("SET NAMES 'utf8'");
$query = mysql_query("SELECT * FROM `empresamen` Where idempresa = '$idempresa' ORDER BY idmensaje ASC ");
while ($row = mysql_fetch_array($query))
{
?>
	<hr>
	<div class="panel lessp">
		<div class="">
			<div class="text-center">
				<div class="row">
					<div class="col-sm-9">
						<h3 id="titore<?= $row['idmensaje']?>" class="pull-left"><?= $row['titulo'] ?></h3>
					</div>
					<div class="col-sm-3">
						<h4 class="pull-right">
						<small><em><?php
						if(isset($_SESSION['lang'])){
						$variable = $_SESSION['lang'];}
						else{
							$variable = "es";
						}
						switch ($variable ) {
							case 'es':
							echo $row['fecha'];
							break;
							case 'en':
							$rest = substr($row['fecha'], 0, 4);
							$rest2 = substr($row['fecha'], 5, 2);
							$rest3 = substr($row['fecha'], 8, 2);
							echo $rest2."-".$rest3."-".$rest;
							break;
						}
						?>
						</em></small>
						</h4>
					</div>
				</div>
			</div>
		</div>
		<div>
				<div class="row">
					<div class="col-sm-1"></div>
				<div class="panel-body col-sm-9">
					<label id="lab<?= $row['idmensaje'] ?>"><?= " ".$row['texto']; ?></label>
					<div id='mensaje<?= $row['idmensaje'] ?>' class="hidme">
								<sm><?= $lang['mensaje'].":"?></sm>
								<textarea id='mensaj<?= $row['idmensaje'] ?>' class="form-control" rows="2"><?= $row['texto'];?></textarea>
					</div>

				</div>
		</div>
		<hr>
	</div>

<?php }?></div></div>
