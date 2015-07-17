<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
<?php
    echo("
    <link href='css/bootstrap.min.css' rel='stylesheet'/>

<meta charset=utf-8 />
    ");
    session_start();
if(isset($_SESSION['tip'])){
		switch($_SESSION['tip'])
		{
			case 1:
			include("Header/barranav2.php");
			break;
			case 2:
            header('Location: index.php');
			break;
			case 3:
            header('Location: peritohomepage.php');
			break;
			case 4:
            header('Location: visitantehomepage.php');
			break;
		}
	}

?>
<head>

   <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/appeal.css' rel='stylesheet'/>
	<link href='css/intro.css' rel='stylesheet'/>

	<link href="css/bootstrap-table.css" rel="stylesheet">
    <title><?php echo $lang['Inicio'] ?></title>
</head>
<body id="intro">
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-body">

                <div class="row">
				<div class="col-md-8">
				 <ol class="breadcrumb bread-primary breadnomargin">
				<li><a><h3><?php echo $lang['noticias'] ?><h3></a></li>
				</ol>

                   </div>
                    <div class="col-md-3">
                        <div class="controls pull-right hidden-xs">
                            <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example"
                                data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example"
                                    data-slide="next"></a>
                        </div>
                    </div>
                </div>
                <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                    <div class="carousel-inner">
                    <?php
                    include ('Call/housein.php');
                    ?>
                    </div>
                </div>

        </div>
    </div>
</div>
<!-- Ni idea  de porque necesiro este div -->
</div>
<!-- Ni idea  de porque necesiro este div -->

    <div id="barrabusqueda9">
    </div>

		<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>

</body>
