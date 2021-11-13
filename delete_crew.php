<?php
include_once 'model/db.php';
$cid=$_POST['id'];
//delete customer
$pdo=Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//2.sql statement
$sql="delete from crew where id=:cid";
//3. preprare sql statement
$statement=$pdo->prepare($sql);
$statement->bindParam(":cid",$cid) ;
$statement->execute();


//select existing customers
$sql="select * from crew";
$statement=$pdo->prepare($sql);
$statement->execute();
$results=$statement->fetchAll(PDO::FETCH_ASSOC);
$output="";
foreach($results as $result)
{
    // Variable Type
    $output.="<tr>";
    $output.="<td>" . $result['firstname']."</td>";
   
    $output.= "<td>". $result['lastname']."</td>";
    $output.= "<td>". $result['rank']."</td>";
    $output.= "<td>". $result['vesseltype']."</td>";
    $output.= "<td>". $result['nationality']."</td>";
    $output.="<td cid=". $result['id'] ."><a href='crew_detail.php?cid=". $result['id'] ."' class='btn btn-success'><i class='fa fa-eye'></i></a><a href='crew_edit.php?cid=". $result['id'] ."'  class='btn btn-warning'><i class='fa fa-edit'></i></a> <a class='btn btn-danger delete'><i class='fa fa-trash'></i></a></td>";
    $output.="</tr>";
    //Array Type (Json Type)
   // $output[]=$result;

}
echo $output;

?>