<?php

// 類別宣告 
class Animal{
   
    // properties declaration
    // Encapsulation declaration
    private  $age = 10;

    // public $name = "不白";
    protected $name = "不白";
    protected $hair = "黑色";


    function __construct()
    {
            // 建構式內容
            echo "建立物件";
    }

    // 方法 methods declaration 
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        return $this->name = $name;
    }
    public  function age(){
            // return $this ->age;
            return $this ->run();
    }

    protected function run(){
        return "run run run ";

    }

    private function speed(){
        return "run speed 1000";

    }

} 

// object/instance => $animal
//  class => new Animal
$animal = new Animal ;
echo "<br>";

// 瘦箭頭 arrow operator/object operator//////////

//  $name 為 public ///////

// echo $animal->name;
// $animal->name="小白";
// echo "<br>";
// echo $animal->name;
// echo "<br>";

//  name 為 protected ///////////////////////////////////////
echo $animal->getName();
$animal->setName('小白');
echo "<br>";
echo $animal->getName();
echo "<br>";


//  private 產生 error
// echo $animal->age;


//  public age(){ echo protect run()} 
echo $animal->age();

echo"<br>";

// /////// 繼承 Iinheritance 
class Cat extends Animal{
    function catrun(){
        return $this ->run();
    }

    function run(){
        return "走走走";
    }
}
$cat = new Cat;
echo $cat->age();
echo $cat ->catrun();
echo $cat ->run();


