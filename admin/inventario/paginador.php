<?php 

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina']: 1;
$regPagina = 10;
$inicio = ($pagina>1) ? (($pagina * $regPagina) - $regPagina ):0;
include('../bd.php');

$registros = $conexion->query("SELECT SQL_CALC_FOUND_ROWS * FROM diseno LIMIT $inicio,$regPagina");
$listaRegistros = $registros->fetchAll(PDO::FETCH_OBJ);

$totalRegistros = $conexion->query("SELECT FOUND_ROWS() as Total ");
$total = $totalRegistros->fetch()['Total'];

$numeroPaginas = ceil($total / $regPagina);

?>