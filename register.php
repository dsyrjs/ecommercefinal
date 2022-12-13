<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login/Sign up</title>
    <link rel="shortcut icon" href="/assets/fav.ico">


    <script src="js/bootstrap.bundle.js"></script>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/styles.css">


    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada&family=Ubuntu+Condensed&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
</head>

<body>


    <div class="container" id="add">
        <div style="display:grid; height:100vh; place-items:center">
            <form class="form" id="register">
                <h1 class="form__title" style="padding-bottom:20px">Create Account</h1>
                <div class="form-group" style="text-align:left">
                    <label for="login-name"><i class="fa fa-user"></i> Full Name</label>
                    <input type="text" class="form-control fullname" style="font-weight: bold; text-transform: none;"
                        autocomplete="false" name="uname" placeholder="Enter your Full Name..." required>
                </div>
                <div class="form-group" style="text-align:left">
                    <label for="login-name"><i class="fa fa-envelope"></i> Email</label>
                    <input type="email" class="form-control email" style="font-weight: bold; text-transform: none;"
                        autocomplete="false" name="uname" placeholder="Enter your Email..." required>
                </div>
                <div class="form-group" style="text-align:left">
                    <label for="login-name"><i class="fa fa-mobile"></i> Mobile Number</label>
                    <input type="number" class="form-control number" style="font-weight: bold; text-transform: none;"
                        autocomplete="false" name="uname" placeholder="Enter your mobile..." required>
                </div>
                <div class="form-group" style="text-align:left; margin-top:10%">
                    <label for="login-name"><i class="fa fa-user"></i> Your Username</label>
                    <input type="text" class="form-control uname" style="font-weight: bold; text-transform: none;"
                        autocomplete="false" name="uname" placeholder="Enter your username..." required>
                </div>
                <div class="form-group" style="text-align:left">
                    <label for="login-password" style="margin-bottom:0px !important; margin-top:10px"><i
                            class="fa fa-lock"></i> Your Password</label>
                    <div class="input-group" id="show_hide_password">
                        <input type="password" class="form-control upass" autocomplete="false"
                            style="text-transform: none;" placeholder="Enter your password..." name="upass" required>
                        <div class="input-group-append">
                            <a href="#"
                                style="padding: 0.375rem 0.75rem;border: 1px solid #ced4da;background: #576ed1;border-top-right-radius: .25rem;border-bottom-right-radius: .25rem;"
                                class=""><i class="fa fa-eye-slash" aria-hidden="true" style="color:#fff"></i></a>
                        </div>
                    </div>
                </div>
                <div class="form-group" style="text-align:left">
                    <label for="login-password" style="margin-bottom:0px !important; margin-top:10px"><i
                            class="fa fa-lock"></i> Confirm Password</label>
                    <div class="input-group" id="show_hide_password_cpass">
                        <input type="password" class="form-control cpass" autocomplete="false"
                            style="text-transform: none;" placeholder="Confirm Password" name="cpass" required>
                        <div class="input-group-append">
                            <a href="#"
                                style="padding: 0.375rem 0.75rem;border: 1px solid #ced4da;background: #576ed1;border-top-right-radius: .25rem;border-bottom-right-radius: .25rem;"
                                class=""><i class="fa fa-eye-slash" aria-hidden="true" style="color:#fff"></i></a>
                        </div>
                    </div>
                </div>

                <button type="form__button" type="Submit">Continue</button>

                <div style="margin-top:40px">
                    <span class="form__text">
                        <a class="form__link" href="login.php" id="linkCreationAccount">have an account already? Go to
                            Login</a>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="main.js"></script>
    <script src="js/custom-sweetalert.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/sweetalert2.min.js"></script>
</body>

</html>