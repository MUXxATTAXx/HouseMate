function letras(e){

         var   key=e.keyCode || e.which;
         var  teclado = String.fromCharCode(key).toLowerCase();
         var   letras ="abcdefghijklmnñopqrstuvwxyz áéíóú";
         var   especiales="8-37-38-46-164";

          var  teclado_especial = false;

            for(var i in especiales){
                  if(key==especiales[i]){
                        teclado_especial=true;break;
                  }
            }
            if(letras.indexOf(teclado)==-1 && !teclado_especial){

                document.getElementById("validacion1").innerHTML = "Solo letras.";
                return false;
                document.getElementById("validacion2").innerHTML = "Solo letras";
                document.getElementById("validacion1").innerHTML = "Solo letras.";
                return false;
                document.getElementById("validacion2").innerHTML = "Solo letras.";
                document.getElementById("validacion1").innerHTML = "Solo letras.";
                return false;
                document.getElementById("validacion2").innerHTML = "Solo letras.";
                document.getElementById("validacion1").innerHTML = "Solo letras.";
                return false;
                document.getElementById("validacion2").innerHTML = "Solo letras.";

                return false;
            }
            else
            {
                document.getElementById("validacion1").innerHTML = "";
                document.getElementById("validacion2").innerHTML = "";
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
                document.getElementById("validacion-num1").innerHTML = "Solo números.";
                return false;
            }
            else{
                document.getElementById("validacion-num1").innerHTML = "";
            }
      }
  function deci(e){

           var   key=e.keyCode || e.which;
           var  teclado = String.fromCharCode(key).toLowerCase();
           var   letras ="0123456789.";
           var   especiales="8-37-38-46-164";

            var  teclado_especial = false;

              for(var i in especiales){
                    if(key==especiales[i]){
                          teclado_especial=true;break;
                    }
              }
              if(letras.indexOf(teclado)==-1 && !teclado_especial){
                  document.getElementById("validacion-num1").innerHTML = "Solo números.";
                  return false;
              }
              else{
                  document.getElementById("validacion-num1").innerHTML = "";
              }
        }