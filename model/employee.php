<?php
class Employee{

//variables
    /*
public $name;
public $eid;
public $dept;
*/
private $name;
private $eid;

public function __construct($name,$eid){
    $this->name=$name;
    $this->eid=$eid;
    
}
// display information
function display(){
    echo "name :" . $this->name;
    echo "<br>id:".$this->eid;
    
}
function setName($name)
{
    $this->name=$name;
}
function getName()
{
    return $this->name;
}

}
class SalesEngineer extends Employee{
private $basicsalary;
private $dept;
public function __construct($name,$id)
{
    parent::__construct($name,$id);
    
}
function setDept($dept){
    $this->dept=$dept;
}
function getDept(){
    return $this->dept;
}
function setBasicSalary($salary){
    $this->basicsalary=$salary;
  }
  function getBasicSalary(){
      return $this->basicsalary;
  }
  function getBonus($percentage)
  {
      return $this->basicsalary * ($percentage/100);
  }
  function display()
  {
      parent::display();
      echo $this->dept . "<br>"; 
      echo $this->basicsalary . "<br>"; 


  }
}
//create an object
$emp1=new SalesEngineer("David","001");

$emp1->setBasicSalary(500000);
$emp1->setDept("Sales");
echo "<br>" . $emp1->getBonus(2.5);
$emp1->display();
//$emp1->display1();
//create an object emp2 ("Myat Thiri", "SE", "650000",2.5%)

?>