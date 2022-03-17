<?php

include_once("./model/shoppingListElement.php");
$shoppingListElements = array();
$shoppingListElements[0] = new shoppingListElement(1, "PERAS", 2, 1, "FRUTA");
$shoppingListElements[1] = new shoppingListElement(1, "UVAS", 2, 1, "FRUTA");
$shoppingListElements[2] = new shoppingListElement(1, "CEREZAS", 2, 1, "FRUTA");

$shoppingListName = "Lista Molona"
?>

<article class="panel is-danger">
<p class="panel-heading" style="text-align: center;">
Lista de la compra - <i><?= $shoppingListName ?></i>
</p>
<div class="box">
<table class="table is-fullwidth is-bordered is-striped is-narrow is-hoberable is-fullwidth">
<thead>
    <tr>
<th>Producto</th>
<th>Cantidad</th>
<th>Total</th>
    </tr>
</thead>
<tbody>
    <?php
    $total = 0;
    foreach ($shoppingListElements as $shoppingItem){
$productTotal = $shoppingItem->getQuantity() * $shoppingItem->getPrice();
$total = $total + $productTotal;
print("<tr><td>{$shoppingItem->getName()}</td><td>{$shoppingItem->getQuantity()}</td><td>$productTotal</td><td>{$shoppingItem->getCategoria()}</td>");
    

}    
print("<tfoot><th colspan=\2\">TOTAL</th><th>$total</th></tfoot>");


?>
</tbody>
</div>
</article>