<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Primer formulari PHP">
    <title>PHP Avançat | Primer formulari</title>
</head>
<body>
    <form method="POST" action="Nivell1_ex2.php" style="display: flex; flex-direction:column; width:300px; gap:10px">
        <label>Nom: </label>
        <input type="text" name="nom">
            
        <label>Cognom: </label>
        <input type="text" name="cognom">
            
        <label>Email: </label>
        <input type="email"  name="email" placeholder="correo@exemple.com" style="padding: 5px 10px;">
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
