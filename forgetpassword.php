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
            <form class="form" id="proceedchange">
                <div style="text-align:left">
                    <div class="form-group">
                        <p>
                            Email <br />
                            <input type="text" class="form-control email" name="user name" style="text-transform: none !important;"
                                required placeholder="user name" />
                        </p>
                    </div>
                    <div class="form-group">
                        New Password <br />
                        <div class="input-group" id="show_hide_password_new">
                            <input id="pass" type="password" class="form-control npass" name="password" required
                                placeholder="password" autocomplete="new-password" style="text-transform: none !important;" />
                            <div class="input-group-append">
                                <a href="#"
                                    style="padding: 0.375rem 0.75rem;border: 1px solid #ced4da;background: #576ed1;border-top-right-radius: .25rem;border-bottom-right-radius: .25rem;"
                                    class=""><i class="fa fa-eye-slash" aria-hidden="true" style="color:#fff"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        Confirm new password <br />
                        <div class="input-group" id="show_hide_password_cpassf">
                            <input type="password" class="form-control cpass" name="password" required placeholder="password"
                                autocomplete="new-password" style="text-transform: none !important;" />
                            <div class="input-group-append">
                                <a href="#"
                                    style="padding: 0.375rem 0.75rem;border: 1px solid #ced4da;background: #576ed1;border-top-right-radius: .25rem;border-bottom-right-radius: .25rem;"
                                    class=""><i class="fa fa-eye-slash" aria-hidden="true" style="color:#fff"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" ng-disabled="forgetload" class="btn btn-success form-control"
                            style="height:42px; font-size:18px">Proceed</button>
                    </div>
                </div>
            </form>
            <form class="form" id="confirmchange" style="display:none">
                <h1 class="form__title" style="padding-bottom:20px">Change password</h1>
                <div class="form-group">
                    <div style="text-align:left">
                        Enter the code that send to your email<br />
                        <div class="input-group" id="show_hide_password_code">
                            <input type="password" id="code_pass" class="form-control" name="password" required
                                placeholder="password" autocomplete="new-password" style="text-transform:none !important"/>
                            <div class="input-group-append">
                                <a href=""
                                    style="padding: 0.375rem 0.75rem;border: 1px solid #ced4da;background: #576ed1;border-top-right-radius: .25rem;border-bottom-right-radius: .25rem;"><i
                                        class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" ng-disabled="changepassload" class="btn btn-success form-control"
                        style="height:42px; font-size:18px">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="main.js"></script>
    <script src="js/custom-sweetalert.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/moment.js"></script>
</body>

</html>