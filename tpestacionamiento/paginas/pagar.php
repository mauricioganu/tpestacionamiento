<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Entre y salga despacio S.A</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/3.css" rel="stylesheet">  

  </head>

  <body>

    <header>
    <?php
        include "../componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
         
      <form action="hacerfacturar.php"> 
        <style>
            h1,h2{
                color:black;
      
      font-size: 20 px;
      font-family: showcard;
      font-style: italic;
      
            }
         </style>
      <h1><em><m>Su factura es</m></em> </h1>


      <?php

          date_default_timezone_set('America/Argentina/Buenos_Aires');
        
          $patente = $_GET["patente"];
          $cobrar = $_GET['cobrar'];
          $ingreso = $_GET['ingreso'];
          $salida = $_GET['salida'];

          echo "<p style='color:black;
      
      font-size: 20 px;
      font-family: showcard;
      font-style: italic;border: 
    text-align: center';> Vehiculo: ".$patente."</p>";
          echo "<p style='color:black;
      
      font-size: 20 px;
      font-family: showcard;
      font-style: italic;border: 
    text-align: center';> Hora de ingreso:  ".$ingreso."</p>";
          echo "<p style='color:black;
      
      font-size: 20 px;
      font-family: showcard;
      font-style: italic;border: 
    text-align: center';> Hora de salida: ".$salida."</p>";
          echo "<p style='color:black;
      
      font-size: 20 px;
      font-family: showcard;
      font-style: italic;border: 
    text-align: center';> Debe abonar :".$cobrar."</p><br>";
        

          ?>
            <br>
            <br>

         <!--   <a href="../paginas/facturar.php"><h4>Facturar Otro Vehiculo</h4></a>
            <a href="../index.php"><h4>Volver al Inicio</h4></a> -->
        
    </main>
      
     <footer class="footer">
    <?php
        include "../componentes/pie.php";
    ?>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" cAlumnorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
