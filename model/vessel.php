<?php
include_once "db.php";
class Vessel{
private $name;

private $pdo; /// for database

public function insertVessel($name)
{
//Databas connection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//write sql statement
$sql="insert into vessel(name) values (:name)";
// prepare statement
$statement=$this->pdo->prepare($sql);
//
$statement->bindParam("name",$name);

//excute
if($statement->execute())
{
    return true;
}
else{
    return false;
}
}
public function getVessels(){
    //Databas connection
    $this->pdo=Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //sql
    $sql="select * from vessel" ;
    //prepare sql;
    $statement=$this->pdo->prepare($sql);
    $statement->execute();
    //fetch
    $results=$statement->fetchAll(PDO::FETCH_ASSOC);
    return $results;
    }

}
?>