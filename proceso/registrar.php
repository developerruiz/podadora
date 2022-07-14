<?php 

include '../conexion2.php';

$id_usuario_reg        =$_POST['id_usuario_reg'];
$arbol                 =$_POST['arbol'];
$area                  =$_POST['area'];
$especie               =$_POST['especie'];
$colonia               =$_POST['colonia'];
$trabajo_realizar      =$_POST['trabajo_realizar'];
$altura                =$_POST['altura'];
$diametro              =$_POST['diametro'];
$ubicacion             =$_POST['ubicacion'];

$imagen1               =addslashes(file_get_contents($_FILES['imagen1']['tmp_name']));
$imagen2               =addslashes(file_get_contents($_FILES['imagen2']['tmp_name']));
$imagen3               =addslashes(file_get_contents($_FILES['imagen3']['tmp_name']));
$imagen4               =addslashes(file_get_contents($_FILES['imagen4']['tmp_name']));
$imagen5               =addslashes(file_get_contents($_FILES['imagen5']['tmp_name']));

if(isset($imagen1)){
  $imagen1 = 'sin foto';
}
if (isset($imagen2)){
  $imagen2 = 'sin foto';
}
if (isset($imagen3)){
  $imagen3 = 'sin foto';
}
if (isset($imagen4)){
  $imagen4 = 'sin foto';
}
if (isset($imagen5)){
  $imagen5 = 'sin foto';
}


$insertar_reg_event  = "INSERT INTO reg_event SET 
                          id_usuario_reg = '$id_usuario_reg',
                          arbol = '$arbol',
                          area = '$area',
                          especie = '$especie',
                          colonia = '$colonia',
                          trabajo_realizar = '$trabajo_realizar',
                          altura = '$altura',
                          diametro = '$diametro',
                          ubicacion = '$ubicacion'
                          ";
$insertar_datos = mysqli_query($conexion, $insertar_reg_event);
$fotos = "INSERT INTO tb_fotos SET 

                          foto_1 = '$imagen1',
                          foto_2 = '$imagen2',
                          foto_3 = '$imagen3',
                          foto_4 = '$imagen4',
                          foto_5 = '$imagen5',
                          id_usuario_reg = '$id_usuario_reg'
                          ";

$insertar_fotos= mysqli_query($conexion, $fotos);
if($insertar_reg_event || $fotos){
  
  echo "<script>alert('Evento registrado con éxito'); window.location='../reg_evento.php'</script>";
  
}else {
  echo "<script>alert('error de registro');window,history.go(-1);</script>";
}  

  