<div id="inboxempresa" class="panel-heading" style='
				padding-bottom: 0px;
				border-bottom-width: 0px;'>
<ul  class='nav nav-tabs forcenavchange'>

<?php
echo"
<li id='cambio3' class='active'><a href='#enviados' data-toggle='tab'>".$lang['recibidos']."</a></li>
<li id='cambio2'><a href='#inbox' data-toggle='tab'>".$lang['enviados']."</a></li>
<li id='cambio'><a href='#enviar' data-toggle='tab'>".$lang['compose'] ."</a></li>

";
 ?>
</ul>
</div>
<div class="panel-body">
		<div id='trytochange' class='tab-content'>
			<div class='tab-pane fade active in' id='enviados'>
				<div id="sentmessages"></div>
				<div id="recdj"></div>
			</div>
			<div class='tab-pane fade' id='inbox'>
				<div id="checkmensajes"></div>
				<div id="resultcos"></div>
			</div>
			<div class='tab-pane fade' id='enviar'>
			<br>
				<div class="row">
					<div class="row">
						<div class='col-sm-4'>
							<label>E-mail</label>
						</div>
						<div class='col-sm-5'>
							<input id="correoenviar" name="correoenviar" class="form-control" maxlength="30" ></input>
						</div>
					</div>
					<br>
					<div class="row">
						<div class='col-sm-4'>
							<label><?php echo $lang['msj'] ?></label>
						</div>
						<div class='col-sm-5'>
							<textarea id="mensaje" name="mensaje" class="form-control" maxlength="260" rows="4" ></textarea>
						</div>
						<div class='col-sm-3'>
							<a onclick="posibles()" class="btn btn-primary extraright"><?php echo($lang['mejorar2'])?></a>
						</div>

					</div>
				</div>
				<div class='row'>
				<?php include "Call/Empresa/Empresafuncion/sugeridos.php" ?>
				<div id="sugeridosresult"></div>
				 </div>
			</div>
		</div>
		<?php include "Call/Empresa/Empresajs/posiblescand.php" ?>
		<div id="otherthigs"></div>
</div>
