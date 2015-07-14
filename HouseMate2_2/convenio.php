<head>
	<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
   <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/appeal.css' rel='stylesheet'/>
	<link href='css/intro.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/conveniotag.css" rel="stylesheet">

</head>
<body id="intro">
<?php
session_start();
echo("<meta charset=utf-8 />");
	if(isset($_SESSION['tip']))
	{
		switch($_SESSION['tip'])
		{
			case 1:
			include("Header/barranav2.php");
			break;
			case 2:
			break;
			case 3:
            include("Header/barranav3.php");
			break;
			case 4:
				include("Header/barranav6.php");
			break;
		}
	}
	else {

	}
	
?>
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	<div class="row panel">
		<div class="col-md-4 bg_blur ">

		</div>
        <div class="col-md-8  col-xs-12">
           <img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img-thumbnail picture hidden-xs" />
           <img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img-thumbnail visible-xs picture_mob" />
           <div class="header">
                <h1>Lorem Ipsum</h1>
                <h4>Web Developer</h4>
                <span>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</span>
           </div>
        </div>
    </div>

	<div class="row nav">
        <div class="col-md-4"></div>
        <div class="col-md-8 col-xs-12" style="margin: 0px;padding: 0px;">
            <div class="col-md-4 col-xs-4 well"><i class="fa fa-weixin fa-lg"></i> 16</div>
            <div class="col-md-4 col-xs-4 well"><i class="fa fa-heart-o fa-lg"></i> 14</div>
            <div class="col-md-4 col-xs-4 well"><i class="fa fa-thumbs-o-up fa-lg"></i> 26</div>
        </div>
    </div>
</div>
