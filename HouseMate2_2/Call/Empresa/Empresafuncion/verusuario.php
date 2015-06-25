<div id="inboxempresa" class="panel-heading" style='
				padding-bottom: 0px;
				border-bottom-width: 0px;'>
<ul  class='nav nav-tabs forcenavchange'>

<?php 
echo"
<li id='cambio2' class='active'><a href='#inbox' data-toggle='tab'>".$lang['recibidos']."</a></li>
<li id='cambio'><a href='#enviar' data-toggle='tab'>".$lang['recibidos']."</a></li>
";
 ?>
</ul>
</div>
<div class="panel-body">
		<div id='trytochange' class='tab-content'>
			<div class='tab-pane fade active in' id='inbox'>
				<?php include "Call/Empresa/Empresafuncion/enviados.php" ?>
			</div>
			<div class='tab-pane fade' id='enviar'>
				<div class="row">
					<div class="row">
						<div class='col-sm-4'>
							<label>E-mail</label>
						</div>
						<div class='col-sm-5'>
							<textarea class="form-control" maxlength="30" ></textarea>
						</div>
					</div>
					<br>
					<div class="row">
						<div class='col-sm-4'>
							<label><?php echo $lang['msj'] ?></label>
						</div>
						<div class='col-sm-5'>
							<textarea class="form-control" maxlength="260" rows="4" ></textarea>
						</div>
						<div class='col-sm-3'>
							<a class="btn btn-primary extraright"><?php echo($lang['mejorar2'])?></a>
						</div>
						
					</div>
							
				</div>
				<div class='row'>
				<?php 
					$querymi = mysql_query("Select * FROM usuario inner join tbusuario on usuario.TempId = tbusuario.IdUsuario where usuario.Rating >= 0  AND Empresa <> '$idempresalater' AND EMPRESA = '' AND usuario.TempId = tbusuario.IdUsuario");
					while($sugeridos = mysql_fetch_array($querymi))
					{
						echo "
						<div class='col-sm-3'>
							<div class='card'>
								<canvas class='header-bg' width='250' height='70' id='header-blur'></canvas>
								<div class='avatar'>
									<img  alt='' />
								</div>
								<div class='content'>
								 <span class='label label-default rank-label'>".$sugeridos['nombre']."</span>
									<img class='img-circle' src='".$sugeridos['image']."' />
								<!-- badge -->
								<div class='rank-label-container'>
									<span class='label label-default rank-label'>".$sugeridos['Rating']."</span>
									
								</div>
								</div>
							</div>
						</div>";
					}
				?>
				 </div>
			</div>
		</div>
</div>

 