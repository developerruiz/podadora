<?php
    
    include '../conexion2.php';
    session_start();

    $email        =$_POST['email'];
    $contraseña     =$_POST['contraseña'];

    $_SESSION['usuario'] = $email;

    $consulta_usuario= "SELECT * FROM tb_usuario WHERE email = '$email' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion, $consulta_usuario);

    $filas = mysqli_num_rows($resultado);

    if($filas>0){
        header("location:../reg_evento.php");
    }else{
        echo "<script>alert('Favor de iniciar sesión');</script><script>window.location='../signin.php'</script>";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>
