<?php
    include('conexion.php');

    $correo_usuario = $_POST['correo_usuario'];
    $contraseña_usuario = $_POST['contraseña_usuario'];

    $validar_login = mysqli_query ($conexion, "SELECT * FROM usuario WHERE correo_usuario='$correo_usuario' and
    contraseña_usuario='$contraseña_usuario'");

    if(mysqli_num_rows($validar_login) > 0){
        header("location:../usuario/index.html");
        exit();
    }else{
        echo '
        <script>
        alert("Usuario no existente, verifique los datos o cree una cuenta");
        window.location = "../login.html";
    </script>
    ';
    exit();
    }
?>