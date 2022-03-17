<?php
include_once("./model/user.php");

$user = new User(1, "Nombre Usuario" ,"Correo@correo.com", "./styles/avatar.png");
?>

<article class="panel is-danger">
<p class="panel-heading">
    INFORMACIÓN DEL USUARIO
</p>
<div class="box">
    <div>
<h2><?= $user->getName() ?></h2>
<h3><?= $user->getEmail() ?></h3>
<div style="text-align: center;"><img src="<?= $user->getAvatar(); ?>"width="200" height="200"></div>
</div>
</div>
</article>