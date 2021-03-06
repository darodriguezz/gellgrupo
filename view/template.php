<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="hola">
    <meta name="author" content="">

    <title>GELLGRUPO-INFRAESTRUCTURA</title>

    <!-- Bootstrap Core CSS -->
    <link href="view/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="view/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="view/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="view/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="view/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="view/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">  
    
        <?php

        include "view/modules/header.php";
        include "view/modules/menu.php";

        if(isset($_GET['ruta'])){
            if($_GET['ruta']=="inicio"||
               $_GET['ruta']=="formentrega"||
               $_GET['ruta']=="formportatil"||
               $_GET['ruta']=="formescritorio"){

                include "view/modules/".$_GET['ruta'].".php";

               }
            
        }

        // Contenido
        include "view/modules/inicio.php";
        




        include "view/modules/footer.php";


        ?>    

</div>

<!-- jQuery -->
<script src="view/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="view/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="view/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="view/js/startmin.js"></script>

</body>
</html>
