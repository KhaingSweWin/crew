<?php

class Tea{
    public function addHotWater()
    {
        echo "add hot water<br>";
    }
    public function addSugar()
    {
        echo "add sugar<br>";
    }
    public function addTea()
    {
        echo "add tea<br>";
    }
    public function addMilk()
    {
        echo "add milk <br>";
    }
    public function make()
    {
        $this->addHotWater();
        
        $this->addSugar();
        $this->addTea();
        $this->addMilk();

    }
}
class Coffee{
    public function addHotWater()
    {
        echo "add hot water<br>";
    }
    public function addSugar()
    {
        echo "add sugar<br>";
    }
    public function addCoffee()
    {
        echo "add coffee<br>";
    }
    public function addMilk()
    {
        echo "add milk <br>";
    }
    public function make()
    {
        $this->addHotWater();
        
        $this->addSugar();
        $this->addCoffee();
        $this->addMilk();

    }
}
$tea=new Tea();
$tea->make();
$coffee=new Coffee();
$coffee->make();

?>