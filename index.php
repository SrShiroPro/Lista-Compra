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
    <nav class="navbar is-fixed-top">
<div class="navbar-brand">
    <a class="navbar-item">
        <img src="./styles/text.png" alt="logo shiro" width="150px" height="50">
    </a>
</div>


<div class="navbar-menu">
<div class="navbar-end">
<div class="navbar-item">
<div class="buttons">

    <div class="button is-danger">
    <strong>Sing Up</strong>
    </div> 
   
    <a class="button is-light">
    Log in
    </a>
</div> 
</div> 
</div> 
</div> 

    </nav>


    
    <!--Sección principal -->
<section class="section" id="seccionPrincipal">
<div class="container">
<div class="columns">
<div class="column">
    <?php include("./view/userDetails.php");?>
    <div class="column is-three-quarters">
  <?php include_once("view/shoppingList.php"); ?>
</div>


</div>
</section>



 <h1>Bienvenid@ a listaCompra</h1>

 </body>

</html>