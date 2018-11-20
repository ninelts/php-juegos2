<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="assets/js/menu.js"></script>

    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/main_registro.css" rel="stylesheet" media="all">
</head>

<body>
    <header class="">
        <nav class="navbar navbar-fixed-left navbar-minimal animate" role="navigation">
            <div class="navbar-toggler animate">
                <span class="menu-icon"></span>
            </div>
            <ul class="navbar-menu animate">
               <li>
                <a href="index.html" class="animate">
                    <span class="desc animate"> Inicio </span>
                    <span class="far fa-arrow-alt-circle-up"></span>
                </a>
            </li>
            <li>
                <a href="#pag2" class="animate">
                    <span class="desc animate"> Iniciar Sesión </span>
                    <span class="fas fa-address-card"></span>
                </a>
            </li>
            <li>
                <a href="formulario_registro.php.html" class="animate">
                    <span class="desc animate"> Registrarse </span>
                    <span class="far fa-calendar-plus"></span>
                </a>
            </li>
            <li>
                <a href="#contact-us" class="animate">
                    <span class="desc animate"> ¿Cómo alcanzarnos? </span>
                    <span class="far fa-arrow-alt-circle-up"></span>
                </a>
            </li>
        </ul>
    </nav>

</header>
<form action="DB/registro_access.php" method="POST" >
        <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">

        <div class="wrapper wrapper--w780">

            <div class="card card-3">

                <div class="card-heading"></div>

                <div class="card-body">

                    <h2 class="title">Registracion</h2>

                    <form method="POST">

                        <div class="input-group">

                            <input class="input--style-3" type="text" placeholder="Nombre" name="txt_nombre">

                        </div>

                        <div class="input-group">

                            <input class="input--style-3" type="text" placeholder="Contraseña" name="txt_password">

                        </div>

                        <div class="input-group">

                            <input class="input--style-3 js-datepicker" type="text" placeholder="Fecha de nacimiento" name="txt_fecha">

                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>

                        </div>

                        <div class="input-group">

                            <div class="rs-select2 js-select-simple select--no-search">

                                <select name="txt_genero">

                                    <option disabled="disabled" selected="selected">Género</option>

                                    <option value="hombre" >Hombre</option>

                                    <option value="mujer">Mujer</option>

                                    <option value="otro">Otro</option>

                                </select>

                                <div class="select-dropdown"></div>

                            </div>

                        </div>

                        <div class="input-group">

                            <input class="input--style-3" type="email" placeholder="Email" name="txt_email">

                        </div>

                        <div class="input-group">

                            <input class="input--style-3" type="number" placeholder="Telefono" name="txt_telefono">

                        </div>

                        <div class="p-t-10">

                            <button class="btn btn--pill btn--green" type="submit">Registrar</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
</form>

<!-- Jquery JS-->

<!-- Vendor JS-->
<script src="assets/vendor/select2/select2.min.js"></script>
<script src="assets/vendor/datepicker/moment.min.js"></script>
<script src="assets/vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->