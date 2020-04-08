<!doctype HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Modificar foto - FLICKS</title>
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/add_pic.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php include 'header_login.php'; ?>

    <div class="container">
        <div class="form-content">
            <div class="form-left">
                <a class="text-primary">@juatosfer1</a>
                &nbsp&nbsp&nbsp
                <i class="fa fa-thumbs-up text-secondary"></i>
                <i class="fa fa-thumbs-down text-secondary"></i>
                <p style="display:inline" class="text-dark">100%</p>
                
                <div class="square border rounded mt-2">
                    <img class="card-img-top rounded" src="images/juatosfer1/pic1.jpg" alt="Card image cap" width="20%">
                </div>


                <select class="form-control form-control-sm mt-4">
                    <option value="public">Público</option>
                    <option value="private">Privado</option>
                </select>


            </div>
            <div class="form-right">
                <form>
                    <div class="form-row mt-1">
                        <h3 class="text-break">Gato</h3>
                        <i class="fa fa-edit fa-sm text-secondary"></i>

                    </div>

                    <div class="form-row">
                        <div class="col">
                            <button type="submit" class="btn btn-secondary btn-sm mr-0">Añadir etiqueta</button>
                        </div>
                        <div class="col mt-1">
                            <i class="fa fa-times text-secondary"> #gato</i>
                        </div>

                    </div>

                    <div class="form-group mt-4">

                        <i class="fa fa-edit fa-sm text-secondary"></i>
                        <h5 class="text-break">Es tela de bonito este gato</h5>
                    </div>

                    <div class="form-row bttPosition">
                        <div class="col">
                            <button type="submit" class="btn btn-danger">Eliminar imagen</button>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Confirmar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"> </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"> </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"> </script>
</body>

</html>