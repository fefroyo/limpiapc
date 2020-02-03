<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>efrablog</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<!-- mis fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Owl SLIDER -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="css/owl.theme.css">


<!-- MI ESTILO -->
<link rel="stylesheet" href="css/efrastyle.css">



<style>
    
body {
    margin-top: 130px; 
    /* adjust this if the height of the menu bar changes */
    
    /*padding: 60px 0px;*/
}
</style>


  </head>

  <body>



    <!-- NAVBAR -->




    <nav class="navbar navbar-propio navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <!-- <img src="http://placehold.it/150x60&text=Logo" alt=""> -->
                    <img src="img/fefrologo.png" alt="logotd" style="width: 180px;" class="img-responsive">
                    </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Antivirus</a>
                    </li>
                    <li>
                        <a href="#">Limpieza</a>
                    </li>
                    <li>
                        <a href="#">Utilidades</a>
                    </li>
                    <li>
                        <a href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>









<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    
                    <h2>Contacto</h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    
                    <form action="enviarcorreo.php" method="post" name="form" role="form">
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="nombre">Nombre</label>
                                <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="email">e-Mail</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="direccion Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="comentario">Mensaje</label>
                                <textarea name="comentario" id="comentario" placeholder="Mensaje" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                              <!-- <button type="submit" id="submit" class="btn btn-lg btn-success">Enviar</button> -->
                                <input type="submit" name="enviar" value="envia"
								class="btn btn-lg btn-success">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>




<!-- FOOTER -->


<div class="container">

        <hr>

    <footer class="text-center">
            <div class="footer-below">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            Copyright &copy; 2014 - <a href="http://efrablog.hol.es">efrablog</a> | <a href="http://fefro.hol.es">efrabuscador</a>
                        </div>

                        <!-- <p class="pull-right"><a href="#" class="btn-social btn-outline scroll-top"><i class="fa fa-fw fa-angle-up"></i></a></p> -->

                    </div>
                </div>
            </div>
    </footer>

</div>
<!-- /.container -->














    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- owl slider -->
    <script src="js/owl.carousel.min.js"></script>

    <script src="js/miscript.js"></script>

</body>
</html>