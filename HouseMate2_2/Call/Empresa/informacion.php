			 <div class="row row-centered">
				   <div class="col-md-4 col-lg-4 " align="center"> 
						<div class="row">
							<div class="form-group col-xs-12">
								<img class="img-responsive imagenpequeña" id="imagenempresa" src="<?php echo "img/Empresas/".$row['imagen'] ?>"> 
							</div>
							<div class="form-group col-xs-12">
							</div>
						</div>
					</div>
					<div class=" col-md-8 col-lg-8 justificar">
						<div class="row">
							<div class="row">
								<div class="form-group col-xs-4">
									<label><?php echo $lang['NCompañia'] ?>:</label>
								</div>
								<div class="form-group col-xs-8">
									<label><?php echo $row['nombre'] ?></label>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-xs-4">
									<label>NIT:</label>
								</div>
								<div class="form-group col-xs-8">
									<label><?php 
									$resultad1 = substr($row['nit'] , 0, 4);
									$resultad2 = substr($row['nit'], 4, 6);
									$resultad3 = substr($row['nit'], 10, 3);
									$resultad4= substr($row['nit'], 13, 1);
									echo $resultad1."-".$resultad2."-".$resultad3."-".$resultad4; ?></label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="row">
								<div class="form-group col-xs-4">
									<label><?php echo $lang['tel'] ?>:</label>
								</div>
								<div class="form-group col-xs-8">
									<label><?php
									$result = substr($row['telefono'], 0, 4);
									$result2 = substr($row['telefono'], 4, 4);
									echo $result."-".$result2; ?></label>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-xs-4">
									<label><?php echo $lang['tel'] ?>2:</label>
								</div>
								<div class="form-group col-xs-8">
									<label><?php 
									$result = substr($row['telefono2'], 0, 4);
									$result2 = substr($row['telefono2'], 4, 4);
									echo $result."-".$result2; ?></label>
								</div>
							</div>
						</div>	
						<div>
						</div>
						<div class="row">
							<div class="row">
								<div class="form-group col-xs-12">
									<label><?php echo $lang['Direccion'] ?>:</label>
									<br>
									<label><?php echo $row['direccion'] ?></label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="row">
								<div class="form-group col-xs-12">
									<label><?php echo $lang['Descripcion'] ?>:</label>
									<br>
									<label><?php echo $row['descrip'] ?></label>
								</div>
							</div>
						</div>
					</div>
				  </div>