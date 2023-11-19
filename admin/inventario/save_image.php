<?php
include('../bd.php');
if(isset($_POST['subir-imagen'])){
  $title = $_POST['title'];
  $description = $_POST['description'];
  //guarda nombre de la imagem 
  $img = $_FILES['image']['name'];
  //toma el archivo
  $archivo = $_FILES['image']['tmp_name'];
  $rut = "imagenes/".$img;
  $_FILES['image']['type'];
  $_FILES['image']['size'];
  
  $extensiones = array(0=>'image/jpg',1=>'image/jpeg',2=>'image/png');
  $max_tamanyo = 1024 * 1024 * 8;
  /* $ruta_indexphp = dirname(realpath(__FILE__));
  $ruta_fichero_origen = $_FILES['image']['tmp_name'];
  $ruta_nuevo_destino = $ruta_indexphp . '/imagenes/' . $_FILES['image']['name']; */
  
  if ( in_array($_FILES['image']['type'], $extensiones) ) {
     // echo 'Es una imagen';
       if ( $_FILES['image']['size']< $max_tamanyo ) {
         //echo 'Pesa menos de 1 MB';
            if( move_uploaded_file ( $archivo, $rut) ) {
             $sentencia = $conexion->query("INSERT INTO diseno (titulo, descripcion, ruta) VALUES ('$title','$description','$rut')");
           header("Location:index.php");
          }
       }
  }else {
    header('location: index.php?mensaje=error');
    exit();
  }
  
  } 