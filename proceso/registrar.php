<?php 

session_start();
//  error_reporting(0);

include '../conexion2.php';
include '../conexion.php';

$_SESSION['usuario'] = $usuario;

$arbol                 =$_POST["arbol"];
$area                  =$_POST["area"];
$especie               =$_POST["especie"];
$colonia               =$_POST["colonia"];
$trabajo_realizar      =$_POST["trabajo_realizar"];
$altura                =$_POST["altura"];
$diametro              =$_POST["diametro"];
$ubicacion             =$_POST["ubicacion"];
$imagen1               =addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$imagen2               =addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$imagen3               =addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$imagen4               =addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$imagen5               =addslashes(file_get_contents($_FILES['imagen']['tmp_name']));




$insertar_reg_event  = "INSERT INTO reg_event SET 
  id_usuario_reg = '$sesion_id',
  arbol = '$arbol',
  area = '$area',
  especie = '$especie',
  colonia = '$colonia',
  trabajo_realizar = '$trabajo_realizar',
  altura = '$altura',
  diametro = '$diametro',
  ubicacion = '$ubicacion'
  ";

$id_usuario= mysqli_insert_id($conexion);

if ($insertar_reg_event){
  
  $insertar_fotos = "INSERT INTO tb_fotos SET 
  imagen1 = '$imagen1',
  imagen2 = '$imagen2',
  imagen3 = '$imagen3',
  imagen4 = '$imagen4',
  imagen5 = '$imagen5',
  id_usuario_reg = '$id_usuario_reg'";
}

  $resultado = $pdo->query($insertar);

  if ($resultado) {
    echo "<script>alert('Producto registrado con éxito'); window.location='/franilia/reg_producto.php'</script>";
  }else {
    echo "<script>alert('error de registro');window,history.go(-1);</script>";
  }
  