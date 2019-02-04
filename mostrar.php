<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <?php 
  require_once("Datos_arrays.php");
   ?>
</head>
<LINK href="DWES04_TAR_R05_tarea.css" rel="stylesheet" type="text/css">
<body>
    

<div >
    <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <fieldset>
         <?php 
             cargarDatos();
         ?>
            <legend>Preferencias</legend>
            <label class="etiqueta">Idioma: </label>
            
                <?php 
                    echo '<p>'; 
                    echo '<label class="texto">';
                    echo (isset($_SESSION['idioma']))
                            ? $idioma[$_SESSION['idioma']]  
                            :'' ;
                    echo '</label>';
                    echo '</p>';
                    ?>
            
             <label class="etiqueta">Perfil público: </label>
            
                <?php 
                    echo '<p>'; 
                    echo '<label class="texto">';
                    echo (isset($_SESSION['perfilPublico']))
                            ? $perfilPublico[$_SESSION['perfilPublico']] 
                            :'' ; 
                    echo '</label>';
                    echo '</p>';
                ?>
               
            
             <label class="etiqueta">Zona Horaria:</label>
            
                 <?php 
                    echo '<p>'; 
                    echo '<label class="texto">';
                    echo (isset($_SESSION['zonaHoraria']))  
                            ? $zonaHoraria[$_SESSION['zonaHoraria']]
                            :'' ;
                    echo '</label>';
                    echo '</p>'; 
                    ?>
                
            <input type="submit"  name="BorrarPreferencias" value="Borrar Preferencias" >
            <p><a href="index.php">Establecer preferencias</a></p>
        </fieldset>
    </form>
    
</div>



</body>
</html>

