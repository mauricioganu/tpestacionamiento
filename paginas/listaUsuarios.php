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
   <!-- <link href="../css/floating-labels.css" rel="stylesheet"> -->

  </head>

       <style>
   
    th 
    {
      color:black;
      background-color: red;
    }
    td {color:black;}
    table,th,td 
    {
     border: 10px solid orange;
    text-align: center;
    }

    </style>  

  <body>

    <header>
    <?php
        include "../componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
         
    



      <table style="width:100%">

       <tr>
            <th>Listado de usuarios</th>
           
          
            
          </tr>


      
<?php
include '../funciones/accesoADatos.php';

date_default_timezone_set('America/Argentina/Buenos_Aires');
$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
$consulta =$objetoAccesoDato->RetornarConsulta("SELECT  `nombre` FROM `usuario` ");
$consulta->execute();     
$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);


   

foreach ($datos as $usuario) {

  # code...
 echo "<tr>";
        echo "<td>".$usuario['nombre']."</td>";
        echo "</tr>";

//$totalFacturado = $totalFacturado + $facturados['importe'];
//$Autos=+ 1;
  
      
                                }
    echo "</table>";
 
    //echo "<h1> TOTAL FACTURADO: $".$totalFacturado."</h1>";
    //fclose($archivo);
  ?>








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
