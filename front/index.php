<?php

      session_start();
      unset($_SESSION['usuario']);
      unset($_SESSION['senha']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>



<body>


    <div class="limiter">


        <div class="container-login100">

            <div class="wrap-login50">
                <div class="login100-pic js-tilt" data-tilt>
                <center>
                    <img src="images/onfly.png" alt="IMG">
                </center>
                </div>

                <form class="login100-form validate-form" action="../teste-login.php" method="post">
                    <span class="login100-form-title">
                        Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Insira um usuário neste campo!">
                        <input class="input100" type="text" name="usuario" placeholder="Usuario">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Insira uma senha neste campo!">
                        <input class="input100" type="password" name="senha" placeholder="Senha">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>




                </form>
            </div>
        </div>
    </div>
    <footer>
        <nav>
            <ul>
                <center><li><a href="https://www.linkedin.com/in/lucas-melga%C3%A7o-ba6240186/"> © Desenvolvido Por Lucas Melgaço</a></li></center>
            </ul>
        </nav>
    </footer>




    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>
