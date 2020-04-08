<!doctype HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login - FLICKS</title>
    <link rel="icon" href="images/favicon.ico"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/login.css"/>

    <meta name= "viewport" content= "width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

  <body>
    
  <?php include 'header_login.php'; ?>

  <div class="container">
    <div class="form-content">
        <div class="form-left border-right rounded-0">   
            <form class="form-detail" action="#" method="post">
                <h2 class="h2">Si aún no te has registrado...</h2>
                <div class="form-row ml-0 mt-1">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre de usuario" required>
                    </div>
                </div>
                <div class="form-row ml-0 mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-address-book"></i></div>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre" required>
                    </div>
                </div>
                <div class="form-row ml-0 mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-address-book"></i></div>
                        </div>
                        <input type="text" class="form-control" placeholder="Apellidos" required>
                        </div>
                    </div>
                <div class="form-row ml-0 mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-key"></i></div>
                        </div>
                        <input type="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                </div>
                <div class="form-row ml-0 mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-at"></i></div>
                        </div>
                        <input type="text" class="form-control" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-row-last mt-3">
                    <input type="submit" class="btn btn-primary" value="Registrarse" onclick="location.href='index.php';">
                </div>
            </form>
        </div>
        <div class="form-right">   
            <form class="form-detail" action="#" method="post">
                <h2 class="h2">Si ya tienes un usuario...</h2>
                <div class="form-row ml-0 mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre de usuario" required>
                    </div>
                </div>
                <div class="form-row ml-0 mt-3">
                <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-key"></i></div>
                        </div>
                        <input type="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                </div>
                <div class="form-row-last mt-3">
                    <input type="submit" class="btn btn-primary" value="Iniciar sesión" onclick="location.href='index.php';">
                </div>
            </form>
        </div>
    </div>   
  </div>

    <script src= "https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin= "anonymous"> </script>
    <script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin= "anonymous"> </script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin= "anonymous"> </script>
  </body>
</html>