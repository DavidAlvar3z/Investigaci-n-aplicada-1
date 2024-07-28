<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Usuario = $_POST["nombre"];
    $email = $_POST["email"];
    $contra = $_POST["contra"];
    $repcontra = $_POST["confircontra"];
    $void = "";

    //Doble verificacion de datos (en caso que JavaScript falle)
    if ($contra === $repcontra && $Usuario != $void && $email != $void){
        include ("indexx.php");
    }else{
        // Si los datos estan incompletos no se realiza ninguna accion
        echo "El formulario esta incompleto por lo tanto no se ha enviado";
    }
} else {
    echo "El formulario no ha sido enviado.";
}

?>


