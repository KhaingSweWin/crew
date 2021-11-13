<?php

class Employee{
    private $eid;
    private $name;
    public function __construct($eid,$name){
        $this->eid=$eid;
        $this->name=$name;
    }
    public function setEid($eid)
    {
        $this->eid=$eid;
    }
    public function getEid()
    {
        return $this->eid;
    }
    public function setName($name)
    {
        $this->name=$name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function display()
    {
        echo "<br>". $this->eid . ",".$this->name;
    }
}
class Sales extends Employee{
private $dept;
public function __construct($eid,$name,$dept)
{
 parent::__construct($eid,$name);
 $this->dept=$dept;
}

public function display(){
    parent::display();
    echo $this->dept;
}
}
class Admin extends Employee{
    private $dept;
    private $basicsalary;
    
}
//$emp1=new Employee("009","David");
//echo $emp1->getEid();
//echo $emp1->getName();
//$emp1->display();

$sales1=new Sales("009","David","sales");
$sales1->display();




?>