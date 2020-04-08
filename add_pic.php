<!doctype HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Añadir imagen - FLICKS</title>
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/add_pic.css" />
    <link rel="stylesheet" href="css/add_pic_empty_square.css" />

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
                <a class="card-text text-primary" href="my_profile.php">@juatosfer1 </a>

                <div class="square border rounded mt-2">
                    <div class="overlay">
                        <a href="#" class="icon" title="User Profile">
                            <i class="fa fa-edit text-secondary"></i>
                        </a>
                    </div>
                </div>


                <select class="form-control form-control-sm mt-4">
                    <option value="public">Público</option>
                    <option value="private">Privado</option>
                </select>


            </div>
            <div class="form-right">
                <form>
                    <div class="form-group mt-4">
                        <input type="text" class="form-control" placeholder="Añadir nombre">
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <button type="submit" class="btn btn-secondary btn-sm mr-0">Añadir etiqueta</button>
                        </div>
                        <div class="col mt-1">
                            <i class="fa fa-times text-secondary"> #Música</i>
                        </div>

                    </div>

                    <div class="form-group mt-4">
                        <textarea type="text" class="form-control textareaSize align-self-end ml-auto" placeholder="Descripción" rows="5" maxlength="250"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary submitPosition">Publicar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"> </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"> </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"> </script>
</body>

</html>