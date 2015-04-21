<?php 
class Cat {   
 
// Возраст кота   
 var $age;
  function Cat($new_age)    
  {    
    
// Установить возраст этого кота в новое значение        
$this->age = $new_age;    
}
function Birthday()    
{        
$this->age++;    
} 
}
class Domestic_Cat extends Cat {    

// Конструктор   
 function Domestic_Cat() {    
 }
    
// Спать, как домашний кот   
 function sleep() {       
 echo("Хр-р-р.<br />");    
 } 
}

$fluffy = new Domestic_Cat(); 
$fluffy->Birthday(); $fluffy->sleep(); 
echo "Коту $fluffy->age год<br>/"; 
?>
