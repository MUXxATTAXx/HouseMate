function letras(e){

         var   key=e.keyCode || e.which;
         var  teclado = String.fromCharCode(key).toLowerCase();
         var   letras ="abcdefghijklmnñopqrstuvwxy ";
         var   especiales="8-37-38-46-164";

          var  teclado_especial = false;

            for(var i in especiales){
                  if(key==especiales[i]){
                        teclado_especial=true;break;
                  }
            }
            if(letras.indexOf(teclado)==-1 && !teclado_especial){
                  return false;
            }
      }   

function num(e){

         var   key=e.keyCode || e.which;
         var  teclado = String.fromCharCode(key).toLowerCase();
         var   letras ="0123456789";
         var   especiales="8-37-38-46-164";

          var  teclado_especial = false;

            for(var i in especiales){
                  if(key==especiales[i]){
                        teclado_especial=true;break;
                  }
            }
            if(letras.indexOf(teclado)==-1 && !teclado_especial){
                  return false;
            }
      }   