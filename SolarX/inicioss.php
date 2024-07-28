<?php
session_start();
//Recibiendo datos del usuario

if(!empty($_POST['Usuario']) && !empty($_POST['Contra'])){

//Declarando variables
   $Usuario = $_POST['Usuario'];
   $Contra = $_POST['Contra'];

//Datos del usuaari de prueba
if($Usuario == "Genesis" && $Contra == "123"){
    
   include ("indexx.php");


}else{
    echo '<script>alert("Campo incorrecto. Por favor, inténtalo de nuevo.");
        setTimeout(function () {
            window.history.back();
        }, 100);
    </script>';
}

}else{
    echo "Completa los campos para continuar.";
}


?>