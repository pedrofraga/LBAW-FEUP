<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AutoLeilões</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full.css" rel="stylesheet">


    <link href="css/login.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">AutoLeilões</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a id="signin" href="#">Registar</a>
                        </li>
                        <li>
                            <a id="login" href="#">Autenticar</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Put your page content here! -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <script src="sweetalert/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert.css">

        <!-- login and signin script -->
        <script src="js/index.js"></script>

        <script type="text/javascript" src="daterangepicker/moment.min.js"></script>
        <!-- Include Date Range Picker -->
        <script type="text/javascript" src="daterangepicker/daterangepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="daterangepicker/daterangepicker.css" />

    </body>


    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="loginmodal-container" id="login-content">
            <h1>Autenticar</h1><br>
            <form>
                <input type="text" name="user" placeholder="Utilizador">
                <input type="password" name="pass" placeholder="Password">
                <input type="submit" name="login" class="login loginmodal-submit" value="Entrar">
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="loginmodal-container" id="login-content">
        <h1>Registar</h1><br>
        <form>
            <input placeholder='utilizador' type='text'>
            <input placeholder='e-mail' type='text'>
            <input placeholder='password' class='alert-data' type='password'>
            <input class='popup-element' type="text" id="birthday" placeholder='data de nascimento:' value="" />
            <input type="submit" name="login" class="login loginmodal-submit" value="Concluir">
        </form>
    </div>
</div>
</div>


</html>