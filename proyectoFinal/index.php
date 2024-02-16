<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://codingbirdsonline.com/wp-content/uploads/2019/12/cropped-coding-birds-favicon-2-1-192x192.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <title>Send Email Example</title>
    <style>
        body {
            margin: 0;
            /* Elimina el margen predeterminado del body */
            background-color: #f3f0f0;
            overflow-x: hidden;
            /*Se oculta*/
            font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
                "Lucida Sans", Arial, sans-serif;
        }

        .fotoPerfil,
        .home,
        .ajustes {
            display: inline-block;
            /* Coloca los elementos en línea */
            vertical-align: middle;
        }

        .fotoPerfil {
            width: 7%;
        }
    </style>
</head>

<body>
    <header>
        <main class="main">
            <img src="fotoPerfil.png" alt="fotoPerfil" class="fotoPerfil" onclick="toggleNav()" />
            <a href="paginaInicio.php">Inicio</a>
            <span class="simboloMayor"> > </span>
            <span class="Bienvenida">Soporte</span>
    </header>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Soporte - Letter S.L.</h5>
                        <form action="email-script.php" method="post" class="form-signin">
                            <div class="form-label-group">
                                <label for="inputEmail">From <span style="color: #FF0000">*</span></label>
                                <input type="text" name="fromEmail" id="fromEmail" class="form-control" value="" autofocus>
                            </div> <br />
                            <div class="form-label-group">
                                <label for="inputEmail">To <span style="color: #FF0000">*</span></label>
                                <input type="text" name="toEmail" id="toEmail" class="form-control" placeholder="Email address" value="ffl0004@alu.medac.es" readonly required autofocus>
                            </div> <br />
                            <label for="inputPassword">Subject <span style="color: #FF0000">*</span></label>
                            <div class="form-label-group">
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                            </div><br />
                            <label for="inputPassword">Message <span style="color: #FF0000">*</span></label>
                            <div class="form-label-group">
                                <textarea id="message" name="message" class="form-control" placeholder="Message" required></textarea>
                            </div> <br />
                            <button type="submit" name="sendMailBtn" class="btn btn-lg btn-primary btn-block text-uppercase">Send Email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>