<?php
include_once "db.php";
class User{

private $pdo;
public function getUser($username,$password)
{
//1.Connection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//2.sql statement
$sql="select * from user where username=:email and password=:pwd";
//3. preprare sql statement
$statement=$this->pdo->prepare($sql); 
$statement->bindParam(":email",$username);
$statement->bindParam(":pwd",$password);
$statement->execute();
$result=$statement->fetchAll(PDO::FETCH_ASSOC); 
return $result;
}
}

?>