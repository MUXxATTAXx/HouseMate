<?php 
					$querymi = mysql_query("Select * FROM usuario inner join tbusuario on usuario.TempId = tbusuario.IdUsuario where usuario.Rating >= 0  AND Empresa <> '$idempresalater' AND EMPRESA = '' AND usuario.TempId = tbusuario.IdUsuario");
					while($sugeridos = mysql_fetch_array($querymi))
					{
						echo "
						<div class='col-sm-3'>
							<div class='card'>
								<canvas class='header-bg' width='250' height='30' id='header-blur'></canvas>
								<div class='avatar'>
									<img  alt='' />
								</div>
								<div class='content'>
								 <span class='label label-default rank-label'>".$sugeridos['nombre']."</span>
									<img class='img-circle' src='";
									$filename = "img/Perfil/".$sugeridos['image'];	
									if(file_exists($filename))
									{
										echo "img/Perfil/".$sugeridos['image']; 
									}
									else
									{
										echo "https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100";
									}
									echo "'
									/>
								<!-- badge -->
								<div class='rank-label-container'>
									<span class='label label-default rank-label'>Rating ".$sugeridos['Rating']."</span>
									
								</div>
								</div>
								<hr>
							</div><a id='".$sugeridos['correo']."' onclick='getmail(this.id)' class='btn btn-sm btn-success extraright'>".$lang['Solicitud']."</a>
						</div>";
					}
				?>