<!doctype HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Gato - FLICKS</title>
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
                    <img class="card-img-top rounded" src="images/juatosfer1/pic1.jpg" width="20%">
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
                    </div>

                    <div class="form-group mt-4">
                        <h5 class="text-break">Es tela de bonito este gato</h5>
                    </div>

                    <div class="form-group mt-4">
                        <p class="text-primary mb-1">@juatosfer1:</p>
                        <textarea type="text" class="form-control textareaSize align-self-end ml-auto" placeholder="Añadir comentario..." rows="1" maxlength="250"></textarea>
                    </div>

                    <div class="form-row bttPosition">
                        <a href="modify_pic.php" class="btn btn-primary" role="button" aria-pressed="true">Modificar</a>
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