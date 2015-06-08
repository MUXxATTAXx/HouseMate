<form>
<div id="delete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title" id="myModalLabel"><?php echo $lang['Cdelete']; ?></h4>
      </div>
      <div class="modal-body">
	  <div class="modal-body">
                <p><?php echo $lang['Xdelete']; ?> </p>
                <p><?php echo $lang['Fdelete']; ?> </p>
                <p class="debug-url"></p>
            </div> 
      </div>
      <div class="modal-footer">
           <button class='btn btn-default' id="deleteuser" data-dismiss="modal"><?php echo($lang['Salir']);?></button>
			
			<a type="button" class="btn btn-default" data-dismiss="modal"><?php echo($lang['Aceptar']); ?></a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">                                                      
        //comprobamos si se pulsa una boton
        $("#deleteuser").click(function(){
                                     
		  //obtenemos el texto introducido
		  idre = $("#spanme").html();
		  //ingresar usuario						  
		  $.ajax({
				type: "POST",
				url: "Call/Funciones/admin_eliminar.php",
				data: "idre="+idre,
				dataType: "html",
				beforeSend: function(){
					  //imagen de carga
					  $("#spanme").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
				},
				error: function(){
					  alert("error petición ajax");
				},
				success: function(data){                                                    
						$("#mesangemostra").empty();
						$("#mesangemostra").append(data);
						loadData();							 
						}
				  });															   
			});
	function loadData(){
    $.ajax({   
     type: 'POST',   
     url: 'Call/Funciones/update.php',   
     data: {LastName:"stuff", FirstName:"stuff"},
    success: function(msg) {
            $("#thetablejq").html(msg);
        },
    });
  };
  	function obtener(yo) {
		document.getElementById('spanme').innerHTML = yo;
}
	function cambiar(yo) {
			var changer = document.getElementById("thestart");
			var d = document.getElementById("sd");
			var e = document.getElementById("crear");
			changer.value = yo;
			e.className = "tab-pane fade";
			d.className = "tab-pane fade active in";
			unison();
}
</script>
<div id="thetablejq">
</div>
<span id="spanme"></span>

<center><div id="mesangemostra"></div></center>



