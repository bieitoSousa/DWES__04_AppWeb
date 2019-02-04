<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <LINK href="DWES04_TAR_R05_tarea.css" rel="stylesheet" type="text/css">
   <?php
require_once("Datos_arrays.php"); 
     // funcion para auto seleccion
     function seleccion($array,$nombre){
         
     if (isset($_POST["EstablecerPreferencias"])){ // si se envian datos
         foreach ($array as $key => $value) { // recorro el array 
               echo ' <option value="'. $key.'"' ; // 
               echo($key == $_POST[$nombre] ) ? ' selected="selected"' : '';
               
    // si la clave es igual a los datos enviados ? escribo selected="selected" 
    // si la clave es distinta a los datos enviados : escribo ''           
               
               echo '>';// cierro option
               echo $value;// muestro el valor de la clave
               echo '</option>'; // y cierro etiqueta
            }
     } else { // si no se envian datos recorro el array y muestro datos
        foreach ($array as $key => $value) { 
               echo ' <option value="'. $key.'"' ;
               echo '>';
               echo $value;
               echo '</option>'; 
        }//cierre foreach
     }// cierre else
}// cierre  function seleccion    
     ?>
   
</head>

<body>
    

<div >
	
       
    <form id="form_seleccion" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <fieldset>
            <legend>Preferencias:</legend>
                <?php 
                    cargarDatos();
                ?>
     
            <label class="etiqueta">Idioma : </label>
                <select name="idioma">
                    <?php seleccion($idioma,'idioma');?>
                </select><br>
            <label class="etiqueta"> Perfil público </label>
                <select name="perfilPublico">
                    <?php seleccion($perfilPublico,'perfilPublico');?>
                </select><br>
             <label class="etiqueta"> Zona Horaria :</label>
                <select name="zonaHoraria">
                    <?php seleccion($zonaHoraria,'zonaHoraria');?>

                </select><br>
            
                    
            <input type="submit"  name="EstablecerPreferencias" value="Establecer Preferencias" >
            
            <p><a href="mostrar.php">mostrar preferencias</a></p>
        </fieldset>

    </form>
        
</div>
</body>
</html>

