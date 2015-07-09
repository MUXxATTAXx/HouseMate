<div id="inboxempresa" class="panel-heading" style='
				padding-bottom: 0px;
				border-bottom-width: 0px;'>
<ul  class='nav nav-tabs forcenavchange'>

<?php 
echo"
<li id='cambio3' class='active'><a href='#casa' data-toggle='tab'>".$lang['Start']."</a></li>
<li id='cambio2'><a href='#mensajenuevo' data-toggle='tab'>".$lang['Anuncios']."</a></li>";
 ?>
</ul>
</div>
<div class="panel-body">
		<div id='content' class='tab-content'>
			<div class='tab-pane fade active in' id='casa'>
				<div id="recibidosaj"></div>
			</div>
			<div class='tab-pane fade' id='mensajenuevo'>
				<br>
				<div class="row">
					<div class="col-sm-3">
					</div>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-12">
								<label><?php echo $lang['Titulo'] ?>:</label>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8">
								<input id="titulo" class="form-control" rows="3"></input>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<label><?php echo $lang['msj'] ?>:</label>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-10">
								<textarea id="anunciotext" class="form-control" rows="3"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12 extermeleft">
								<a class="btn btn-info" id="anuncio"><?php echo $lang['insert'] ?></a>
							</div>
						</div>
						<div id="anuncioresult"></div>
					</div>

				</div>
			</div>
		</div>
</div>