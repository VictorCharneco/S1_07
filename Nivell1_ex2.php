<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom=$_POST["nom"];
    $cognom=$_POST["cognom"];
    $email=$_POST["email"];

    $errorsInputs = [];

    if (empty($nom)) {
      $errorsInputs[] = "Indica el nom";
    }

    if (empty($cognom)) {
      $errorsInputs[] = "Indica el cognom";
    }

    if (empty($email)) {
      $errorsInputs[] = "Indica el correo";
    }

    if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorsInputs[] = "El format de correo NO és vàlid";
    }

    
    if(empty($errorsInputs)){
        $_SESSION["nom"] = $nom;
        $_SESSION["cognom"] = $cognom;
        $_SESSION["email"]= $email;

        echo "$nom $cognom se ha logejat amb l'em@il: $email";

    }else{
        echo "⚠️ <b>ERROR:</b> " . "<br>";

        foreach($errorsInputs as $error){
            echo $error . "<br>";
        }
    }

}
?>