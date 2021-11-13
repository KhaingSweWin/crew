<?php
include_once "db.php";
class Crew{

private $pdo;

public function insertCrew($firstname,$lastname)
{
//Databas connection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//write sql statement
$sql="insert into crew(firstname,lastname) values (:fname,:lname)";
// prepare statement
$statement=$this->pdo->prepare($sql);
//
$statement->bindParam("fname",$firstname);
$statement->bindParam("lname",$lastname);
//excute
if($statement->execute())
{
    return true;
}
else{
    return false;
}
}

public function getCrews(){
//Databas connection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//sql
$sql="select * from crew" ;
//prepare sql;
$statement=$this->pdo->prepare($sql);
$statement->execute();
//fetch
$results=$statement->fetchAll(PDO::FETCH_ASSOC);
return $results;
}

public function getCrewInfo($cid){
 //Databas connection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//sql
$sql="select * from crew where id=:cid" ;
//prepare sql;
$statement=$this->pdo->prepare($sql);
$statement->bindParam("cid",$cid);
$statement->execute();
//fetch
$result=$statement->fetch(PDO::FETCH_ASSOC);
return $result;   
}
public function updateCrew($cid,$firstname,$lastname)
{
//Databas connection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//sql\
$sql="update crew set firstname=:fname, lastname=:lname where id=:cid "  ;
$statement=$this->pdo->prepare($sql);
$statement->bindParam("fname",$firstname);
$statement->bindParam("lname",$lastname);
$statement->bindParam("cid",$cid);
if($statement->execute()){
    return true;
}
else {
    return false;
}
}

}
?>