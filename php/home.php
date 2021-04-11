<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Play</title>
    <!-- Bootstrap 4 CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Css Style -->
    <link rel="stylesheet" href="../css/styleHome.css">
</head>
<body>
<div class="container">
           <nav class="menuPrincipal navbar fixed-top navbar-expand-md">
                <a href="home.php" class="tituloPrincipal navbar-brand mt-1"><img src="../img/balon_1.png" alt="Logo" class="logo"></a>
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown active">
                            <a href="home.php" class="home nav-link btn">Inicio</a>
                        </li>

                        <li class="nav-item dropdown active">
                            <a href="#" class="teams nav-link dropdown-toggle btn" data-toggle="dropdown">Equipos</a>
                            <div class="menuDesplegable dropdown-menu navbar-dark">
                                <a href="../Equipos/argentina.php" class="dropdown-item">
                                    Argentina
                                </a>    
                                 <a href="../Equipos/bolivia.php" class="lista dropdown-item">
                                    Bolivia
                                </a>
                                <a href="../Equipos/brasil.php" class="dropdown-item">
                                    Brasil
                                </a> 
                                <a href="../Equipos/chile.php" class="dropdown-item">
                                    Chile
                                </a>
                                <a href="../Equipos/colombia.php" class="dropdown-item">
                                    Colombia
                                </a>
                                <a href="../Equipos/ecuador.php" class="dropdown-item">
                                    Ecuador
                                </a>
                                <a href="../Equipos/paraguay.php" class="dropdown-item">
                                    Paraguay
                                </a>
                                <a href="../Equipos/peru.php" class="dropdown-item">
                                    Perú
                                </a>
                                <a href="../Equipos/uruguay.php" class="dropdown-item">
                                    Uruguay
                                </a>
                                <a href="../Equipos/venezuela.php" class="dropdown-item">
                                    Venezuela
                                </a>
                            </div>
                        </li>

                        <?php
                            session_start();
                            require_once "../Controlador_Login/controlador_login.php";
                            if(isset($_SESSION['user_id'])){
                                $mvc = new MvcController();
                                $mvc -> NavLogout();
                            }
                            else{
                                $mvc = new MvcController();
                                $mvc -> NavLogin();
                            }
                        ?>
                    </ul>
                </div>
            </nav>
        </div> <br>
</body>
</html>