<?php
require_once('C:\xampp\htdocs\proyectoListaCompra\model\dbModel.php');

class User extends DbModel
{
private int $id;
private string $name;
private string $email;
private string $avatarImage;
private string $username;
private string $address;
public function __construct(string $name = '', string $email = '', string $avatarImage = '')
   {
       parent::__construct();
       $this->name = $name;
       $this->email = $email;
       $this->avatarImage = $avatarImage;
   }

public function getByName(string $name)
{
try{
$query = $this->connectToDb()->prepare('SELECT * FROM user WHERE name = :name');
$query ->execute(['name'=> $name]);
$selectedUser = $query->fetch(PDO::FETCH_ASSOC);
$user = new User();
if ($query->rowCount() > 0) {
  $user->setId($selectedUser['id']);
  $user->setName($selectedUser['name']);
  $user->setEmail($selectedUser['email']);
  $user->setAvatarImage($selectedUser['avatarImage']);
  $user->setUsername($selectedUser['username']);
  $user->setAddress($selectedUser['address']);
return $user;

}

}catch (PDOException $e) {

    echo $e;
}
}



public function getId()
{
    return $this->id;
}


public function setId(int $id){
$this->id = $id;

}
public function getName(){
    return $this->name;
}
public function setName(string $name){
    $this->name = $name;

}

public function getEmail(){
    return $this-> email;
}

public function setEmail(string $email){
    $this->email = $email;
}

public function getAvatar(){
return $this->avatarImage;

}

public function setAvatarImage(string $avatarImage)
{
$this ->avatarImage = $avatarImage;
}

public function getUserName(){
    return $this->username;
    
    }

public function setUserName(string $userName){

$this->userName = $userName;
}

public function getAddress(){
    return $this->address;
    
    }

public function setAddress(string $address){

$this->address = $address;
}

}