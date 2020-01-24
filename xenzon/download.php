<?php
$descarga = $_POST['seleccion'];
// Creamos un instancia de la clase ZipArchive
 $zip = new ZipArchive();
// Creamos y abrimos un archivo zip temporal
 $zip->open("miarchivo.zip",ZipArchive::CREATE);
 // Añadimos un directorio
 $dir = 'chenson/';
 $zip->addEmptyDir($dir);
 // Añadimos un archivo en la raid del zip.
//  for ($i=0;$i<count($descarga);$i++){
//  $zip->addFile("images/skus/$descarga[$i]_01.jpg" );
// }
 //Añadimos un archivo dentro del directorio que hemos creado
 for ($i=0;$i<count($descarga);$i++){

  $zip->addFile("images/skus/$descarga[$i].jpg", $dir."$descarga[$i]/$descarga[$i].jpg");
  $zip->addFile("images/skus/$descarga[$i]_02.jpg", $dir."$descarga[$i]/$descarga[$i]_02.jpg");
  $zip->addFile("images/skus/$descarga[$i]_03.jpg", $dir."$descarga[$i]/$descarga[$i]_03.jpg");
  $zip->addFile("images/skus/$descarga[$i]_04.jpg", $dir."$descarga[$i]/$descarga[$i]_04.jpg");
  $zip->addFile("images/skus/$descarga[$i]_05.jpg", $dir."$descarga[$i]/$descarga[$i]_05.jpg");
  $zip->addFile("images/skus/$descarga[$i]_06.jpg", $dir."$descarga[$i]/$descarga[$i]_06.jpg");
}

 // Una vez añadido los archivos deseados cerramos el zip.
 $zip->close();
 // Creamos las cabezeras que forzaran la descarga del archivo como archivo zip.
 header("Content-type: application/octet-stream");
 header("Content-disposition: attachment; filename=miarchivo.zip");
 // leemos el archivo creado
 readfile('miarchivo.zip');
 // Por último eliminamos el archivo temporal creado
 unlink('miarchivo.zip');//Destruye el archivo temporal
?>
