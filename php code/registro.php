<?php
  include('conexion.php');

  $nombre_usuario = $_POST['nombre_usuario'];
  $apodo_usuario = $_POST['apodo_usuario'];
  $apellido_usuario = $_POST['apellido_usuario'];
  $correo_usuario = $_POST['correo_usuario'];
  $contraseña_usuario = $_POST['contraseña_usuario'];
    
    $query = "INSERT INTO usuario(nombre_usuario,apodo_usuario,apellido_usuario, 
  correo_usuario,contraseña_usuario) VALUES ('$nombre_usuario', '$apodo_usuario', '$apellido_usuario','$correo_usuario','$contraseña_usuario')";

  //verificar que el correo no se repita

  $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario  WHERE correo_usuario='$correo_usuario'");
  
  if(mysqli_num_rows($verificar_correo) > 0){
    
    echo'
    <script>
        alert("El correo ya se encuentra registrado, intenta con otro diferente");
        window.location = "../login.html";
    </script>
    ';
    exit();
    mysqli_close($conexion);
}

  //verificar que el nombre de usuario no se repita

  $verificar_apodo = mysqli_query($conexion, "SELECT * FROM usuario  WHERE apodo_usuario='$apodo_usuario' ");
  
 if(mysqli_num_rows($verificar_apodo)>0  ){
    echo '
    <script>
        alert("El usuario ya se encuentra en uso, intenta con otro diferente");
        window.location = "../login.html";
    </script>
    ';
    exit();
    mysqli_close($conexion);
}

$ejecutar = mysqli_query($conexion, $query);


if($ejecutar){
    echo'
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "../login.html";
        </script>
    ';
  }else{
    echo'
    <script>
        alert("Usuario no registrado exitosamente");
        window.location = "../login.html";
    </script>
';
  }
  mysqli_close($conexion);
?>