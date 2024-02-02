<?php
//static scope 
function counter (){
    static $a = 5;
    $a++;
    echo $a . "<br>"
}
//callimg the counter function
 counter(); //output 6
 counter(); // output 7

 // predefined variables
 echo $_SERVER['server_name'] ."<br>
 ?>