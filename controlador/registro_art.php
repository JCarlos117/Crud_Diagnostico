<?php

if (!empty($_POST["btnregistrar"])){

    if(!empty($_POST["nombre"]) and !empty($_POST["codigo"]) and !empty($_POST["marca"]) and !empty($_POST["registro"]) and !empty($_POST["stock"]) and !empty($_POST["descripcion"])){
        
        $nombre=$_POST["nombre"];
        $codigo=$_POST["codigo"];
        $marca=$_POST["marca"];
        $registro=$_POST["registro"];
        $stock=$_POST["stock"];
        $descripcion=$_POST["descripcion"];

        $sql=$conexion->query("insert into articulos(Nombre,Codigo,Marca,Fecha,Stock,Descripcion)values('$nombre','$codigo','$marca','$registro','$stock','$descripcion') ");

        if ($sql==1) {
            echo '<div class="alert alert-success">Articulo registrado de manera correcta</div>';
        }else {

            echo '<div class="alert alert-danger">Error al registrar el articulo</div>';

        }

    } else{

        echo '<div class="alert alert-warning">Alguno de los campos esta incompleto</div>';
    }


}


?>