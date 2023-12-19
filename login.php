<?php
include("conct.php");

if (!empty($_POST["enviar"])) {
    if (empty($_POST["nombre"]) and empty($_POST["password"])) {
        echo '<p>Faltan datos</p>';
    } else {
        $usuario = $_POST["nombre"];
        $contrasena = $_POST["password"];
        $sql = $conecxion->query("select * from usuarios where username ='$usuario' and password ='$contrasena'");
        if ($datos = $sql->fetch_object()) {
            echo "$usuario";
            echo "$contrasena";
            header("location:index.html");
        } else {
            echo '<p> usuario no encontrado </p>';
        } 
    }
}

?>