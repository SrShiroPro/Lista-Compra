
<!DOCTYPE html>

<html lang="en" class="has-navbar-fixed-top">  
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="./styles/bulma.min.css">
 <title>ListaCompra</title>
</head>

<body>
    <!--Barra de nav -->
    <?php include("./view/headerCmp.php"); ?>
    
    <!--Sección principal -->
<section class="section" id="seccionPrincipal">
<div class="container">
<div class="columns">
<div class="column">
    <?php include("./view/userDetailsCmp.php");?>
    <div class="column is-three-quarters">
  <?php include_once("view/shoppingListCmp.php"); ?>
</div>


</div>
</section>

<!--Fotte de la aplicación -->
<?php include("./view/footerCmp.php"); ?>


 <h1>Bienvenid@ a listaCompra</h1>

 </body>

</html>