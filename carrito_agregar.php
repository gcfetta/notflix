<?php

include 'funciones.php';
if(!isset($_POST['id'])){
    exit("No hay id del producto");
}
agregarAlCarrito($_POST['id']);
header('location:index.php');
?>