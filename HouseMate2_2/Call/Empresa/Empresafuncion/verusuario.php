

<div class='row'>
<?php 
	$querymi = mysql_query("Select * FROM usuario where Rating > 0 AND Empresa <> $idempresalater AND EMPRESA = ''");
	while($sugeridos = mysql_fetch_array($querymi))
	{
		echo "
		<div class='col-sm-3'>
            <div class='card'>
                <canvas class='header-bg' width='250' height='70' id='header-blur'></canvas>
                <div class='avatar'>
                    <img src='' alt='' />
                </div>
                <div class='content'>
				 <span class='label label-default rank-label'>100 puntos</span>
                    <img class='img-circle' src='//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120' />
                <!-- badge -->
                <div class='rank-label-container'>
                    <span class='label label-default rank-label'>100 puntos</span>
					
                </div>
                </div>
            </div>
        </div>";
		
	}
?>
        
    </div>

 