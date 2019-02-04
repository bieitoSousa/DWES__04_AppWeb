<?php
// meto los datos en arrays 
     $idioma = array(
         '1' => 'Español'
         ,'2'=>'Inglés' );
     $perfilPublico = array(
         '1' => 'Si'
         ,'2'=>'NO' );
     $zonaHoraria = array(
         '1' => 'GMT-2'
         ,'2'=>'GMT-1'
         ,'3' => 'GMT'
         ,'4'=>'GMT+1'
         ,'5'=>'GMT+2' );
     
 function cargarDatos(){
    if(!isset($_SESSION)){ // inicio sesion si ya esta iniciada
         session_start(); 
     }              
     if (isset($_POST["EstablecerPreferencias"]) ){ // Gurdo datos en la sesion     
        $_SESSION['idioma'] = $_POST["idioma"]; // guardamos idioma
        $_SESSION['perfilPublico'] = $_POST["perfilPublico"]; // guardamos perfil publico
        $_SESSION['zonaHoraria'] = $_POST["zonaHoraria"]; // guardamos ZonaHoarria
        echo '<p><span class="mensaje"> Información guardada en la sesión </span></p>'; // mostramos mensaje de la operacion
    }     
    if (isset($_POST["BorrarPreferencias"]) ){
        // Destruimos la cookie de sesión si existe
        if(isset($_COOKIE[session_name()])) {
          setcookie(session_name(),'',-4200,'/');
        }
        session_unset();   // Destruimos las variables de sesión
        //session_destroy(); // Destruimos finalmente la información de la sesión
        echo '<p><span class="mensaje"> Información de la sesión eliminada </span></p>'; // mostramos mensaje de la operacion
        }

}

 
?>

