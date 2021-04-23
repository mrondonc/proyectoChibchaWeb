<?php
session_start();
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyectoChibchaWeb/Persistencia/Util/Conexion.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyectoChibchaWeb/Negocio/Distribuidor.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyectoChibchaWeb/Negocio/ManejoDistribuidor.php';
$obj = new Conexion();
$conexion = $obj->conectarDB();

ManejoDistribuidor::setConexionBD($conexion);


if (isset($_POST['desactivarDistribuidor']) == true) {


	$nroIdentificacion = isset($_POST['id_di']) ? $_POST['id_di'] : null;

    ManejoDistribuidor::cambiarEstadoDesactivado($nroIdentificacion);


}

echo '<script>
alert("Se desactivo el distribuidor con ID: '.$nroIdentificacion.'");
window.location="../Admin.php?menu=distribuidor";        

</script>';
