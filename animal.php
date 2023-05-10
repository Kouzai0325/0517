<?php
class animal{
    public $name,$type,$gender,$age;
    public function __construct($name,$type,$gender,$age){
        $this->name = $name;
        $this->type = $type;
        $this->gender = $gender;
        $this->age = $age;
    }
    public function test(){
        echo "{$this->name}の{$this->type}という品種で、性別は{$this->gender}であり、年齢は{$this->age}です"."<br>";
    }
    public function ote($name){
        if($this->name != "猫" and $this->name != "犬"){
            echo "この動物はお手ができないみたい、、、";
        }else{
            if($this->name != $name){
                echo "名前が違うので反応がなかった";
            }else{
                echo "お手をした";
            }
        }
        echo "<br>";
    }
}

class FlyAnimal extends animal{
    public function test(){
        echo "{$this->name}の{$this->type}という品種で、空を飛べます！性別は{$this->gender}であり、年齢は{$this->age}です"."<br>";
    }
}

class Human extends animal{
    public function test(){
        echo "{$this->type}という名前の{$this->name}であり、性別は{$this->gender}で、年齢は{$this->age}です"."<br>";
    }
    public function ote($name=null){
        echo "お手をするよう命じたが怒られてしまった";
    }
}

$cat = New animal("猫","ノルウェージャンフォレストキャット","メス","4");
$cat->test();
$cat->ote("猫");

echo "<br>";

$tori = New FlyAnimal("鳥","インコ","メス","4");
$tori->test();
$tori->ote("鳥");

echo "<br>";

$dog = New animal("犬","柴","メス","4");
$dog->test();
$dog->ote("猫");

echo "<br>";

$Human = New Human("人間","喜多村","男","19");
$Human->test();
$Human->ote();
?>