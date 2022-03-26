<?php
class ShoppingListElement
{

    private int $idProduct;
    private string $name;
    private float $quantity;
    private float $price;
private $categoria;
    public function __construct(int $idProduct, string $name, float $quantity, float $price, string $categoria){
$this->idProduct = $idProduct;
$this->name = $name;
$this->quantity = $quantity;
$this->price = $price;
$this->categoria = $categoria;
}

public function getIdProduct(){

    return $this->idProduct;
}

public function setIdProduct(int $idProduct){

    $this ->idProduct = $idProduct;
}

public function getName (){
return $this ->name;}


public function setName (int $name){
$this->name= $name;}

public function getQuantity (){
return $this ->quantity;}

public function setQuantity (int $quantity){
$this->quantity = $quantity;}

public function getPrice (){
return $this ->price;}


public function setPrice (int $price){
$this->price = $price;
}

public function getCategoria(){
    return $this -> categoria;
}
    
    
public function setCategoria (string $categoria){
    $this->price = $categoria;
    }
}