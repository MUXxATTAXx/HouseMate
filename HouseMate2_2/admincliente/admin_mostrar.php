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
<div id="thetablejq">
</div>
<span id="spanme"></span>

<center><div id="mesangemostra"></div></center>



