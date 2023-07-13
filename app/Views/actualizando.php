<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container"><br> <br>
        <div class="container-fluid">
            <h1>Actualizar</h1>
            <form action="<?= base_url('factualizar'); ?>" method="POST">
                <div class="form-group">
                    <input type="number" hidden name="Rango" value="<?= $persona['Rango'] ?>">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?= $persona['Nombre'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Clase</label>
                    <input type="text" class="form-control" id="Clase" name="Clase" value="<?= $persona['Clase'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Rol</label>
                    <input type="text" class="form-control" id="Rol" name="Rol" value="<?= $persona['Rol'] ?>" required aria-describedby="emailHelp">

                </div><br>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>

</body>

</html>