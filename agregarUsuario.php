<?php
include("conct.php");

if (isset($_POST["agregarUsuario"])) {
    $username = $_POST['usernameUsuario'];
    $password  = $_POST['passwordUsuario'];

    $sql = $conecxion->query("INSERT INTO usuarios (username, password) 
    VALUES ('$username', '$password')");

    if ($sql) {
        echo "Usuario agregado exitosamente";
        header("location:login.html");
    } else {
        echo "Error al agregar cliente: " . $conecxion->error;
    }
}
?>