<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud TECNM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cdc3c380cb.js" crossorigin="anonymous"></script>
</head>

<body>

    <h1 class="text-center p-3">HOLA MUNDO</h1>

    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">

            <h3 class="text-center text-secondary">Registro de Articulos</h3>

            <?php

            include "modelo/conexion.php";
            include "controlador/registro_art.php"

            ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre Articulo</label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Codigo</label>
                <input type="text" class="form-control" name="codigo">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Marca</label>
                <input type="text" class="form-control" name="marca">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha Registro</label>
                <input type="date" class="form-control" name="registro">
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Cantidad en Stock</label>
                <input type="number" class="form-control" name="stock">
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" name="descripcion" rows="3"></textarea>
            </div>


            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">

                <thead class="bg-info">

                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Descripción</th>
                        <th scope="col"></th>
                    </tr>

                </thead>
                <tbody>

                    <?php

                    include "modelo/conexion.php";
                    $sql = $conexion->query("select * from articulos ");
                    while ($datos = $sql->fetch_object()) { ?>

                        <tr>

                            <td><?= $datos->id?></td>
                            <td><?= $datos->Nombre?></td>
                            <td><?= $datos->Codigo?></td>
                            <td><?= $datos->Marca?></td>
                            <td><?= $datos->Fecha?></td>
                            <td><?= $datos->Stock?></td>
                            <td><?= $datos->Descripcion?></td>
                            <td>
                                <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-eraser"></i></a>


                            </td>

                        </tr>

                    <?php
                    }
                    ?>




                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>