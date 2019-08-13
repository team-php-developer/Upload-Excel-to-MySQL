<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir Excel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <form action="driver/subir_documento" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="documento">Subir Documento</label>
                        <input type="file" id="documento" name="documento" class="form-control" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger" id="documento" name="documento">Subir</button>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </form>
    </div>
</body>
<script src="js/bootstrap.min.js"></script>
</html>