<!DOCTYPE html>
<html lang="en">

<head>
    <title>Connxion user</title>
    <meta charset="UTF-8">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/css-connexion/util.css">
    <link rel="stylesheet" type="text/css" href="css/css-connexion/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="img/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form">
                    <span class="login100-form-title">
                        Identifiant
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass" placeholder="Mot de passe">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Connexion
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <a class="txt2" href="{{ url('/recupmdp') }}">
                            Nom utilisateur / Mot de Passe
                        </a>
                        <span class="txt1">
                            oublié?
                        </span>
                    </div>

                    <div class="text-center p-t-80">
                        <a class="txt2" href="#">
                            Créez votre compte
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>