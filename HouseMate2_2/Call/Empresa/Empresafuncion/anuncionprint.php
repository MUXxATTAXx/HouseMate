<div id="postlist">
<?php
session_start();
include("../../../conexion.php");
include("../../Lenguaje/lenguaje.php");
mysql_query("SET NAMES 'utf8'");
$query = mysql_query("SELECT * FROM `empresamen`");
while ($row = mysql_fetch_array($query))
{
?>
	<hr>
	<div class="panel lessp">
		<div class="panel-heading">
			<div class="text-center">
				<div class="row">
					<div class="col-sm-9">
						<h3 class="pull-left"><?= $row['titulo']; ?></h3>
						<div class="col-xs-4">
						<input id='tid<?= $row['idmensaje'] ?>' class='hidme' value="<?= $row['titulo']; ?>" maxlength="30">
					</div>
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
					<div class="panel-body col-sm-9"><?= "<label>".$row['texto']."</label>"; ?>
					<textarea id='mensa<?= $row['idmensaje'] ?>' class='hidme' rows='3' maxlength="240"><?= $row['texto']; ?></textarea>
					</div>
					<div class="col-sm-2">
					<a id="edit<?= $row['idmensaje']?>" class="glyphicon glyphicon-pencil btn btn-sm btn-warning" onclick="changeedit(this.id);" ></a>
					<a id="m<?= $row['idmensaje'] ?>" data-toggle='modal' data-target='#deletemensajes' onclick='deletemiembro(this.id)' class="glyphicon glyphicon-remove btn btn-sm btn-danger borrelapa" readonly></a></div>
				</div>
		</div>
		<hr>
	</div>

<?php }?></div>
