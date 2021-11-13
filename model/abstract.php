<?php
abstract class Template{
    public function addHotWater()
    {
        echo "add hot water<br>";
    }
    protected function addSugar()
    {
        echo "add sugar<br>";
    }
    public function addMilk()
    {
        echo "add milk <br>";
    }
    abstract public function addIngredient(); //abstract method without implementation
    public function make()
    {
        $this->addHotWater();
        $this->addSugar();
        $this->addIngredient();
        $this->addMilk();
    }
}
class Tea extends Template{
    
    public function addIngredient()
    {
        echo "add tea<br>";
    }
    
}
class Coffee extends Template{
    
    public function addIngredient()
    {
        echo "add coffee<br>";
    }
    
}
$tea=new Tea();
$tea->make();
$coffee=new Coffee();
$coffee->make();

?>