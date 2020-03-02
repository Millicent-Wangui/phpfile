<?php
//php conditional statements
//conditional statements are used to perform different actions based on different conditions
//to allow your code to perform diff actions based on diff variables
//php has the following if conditional statements
//
//1.if statement-executes some code if one condition is true
//syntax
//if(condition)
//   code to execute if the condition is true
//}
$name="Johndoe";
$password="pass1234";
$age="17";
if($name=='Johndoe'and $password!='pass1234'){
    echo "Login successful";//will run if true
}
if($age<'18') {
    echo "Go home and study hard <br>";
}
//if else executes some code if a condition is true and false if another code is false
if($name=='Johndoe'and $password!='pass1234'){
    echo "Login successful <br>";//will run if true
} else{
    echo "Login  <br>";//WILL RUN IF FALSE

//IF...ELSEIF....ELSE STATEMENT EXECUTES DIFF CODES FOR MORE THAN TWO CONDITIONS
//IF(condition 1)
//    code to execute if true;
//elseif(condition 2){
//    code to execute if true;
//elseif(condition 3)
//    code to execute if true;
//else{
//    code to execute above conditions are false
//}
$country="China";
if($country=='Kenya'){
   echo "Covid_19 not present <br>";
}elseif ($country=='Tanzania') {
    echo "Covid_19 not present <br>";
}elseif($country=='China'){
  echo "Covid_19 present <br>";
}else{
echo "covid_19 is a pandemic <br>";
}
}

//switch statement
//it selects one of many blocks to be executed
//switch (n){}
//  case label 1:
//   code to execute if n =label 1
//     break
//  case label 2:
//   code to execute if n =label 2
//     break
//  case label 3:
//   code to execute if n =label 3
//     break
//  default{
//code to execute if the above conditions are false
// }
//
//}
$fav_color="blue";
switch($fav_color){
    case 'blue':
        echo"Blue is my fav color";
        break;
    case 'red':
        echo"Red is my fav color";
        break;
    case 'black':
        echo"Black is my fav color";
        break;
    default;
        echo "none of the above is my fav color <br>";

}
//for loops
//often when you write code you want a block of code to run over and
//again a certain number of times. So instead of adding several
//almost equal code lines in a script,we can use loops
//to execute the same block of code again and again as long as a certain condition is true
//in php we have the following loop types
//1.while..........loops thru a block of code as long as a specified condition is true
//syntax
//while(condition_is_true){
//    code_to_execute
//}
echo "<br>";
$x=0;
while($x<10){
    if ($x==5){
        echo "$x IS MIDDLE PART <br>";
    }
    echo "$x Hello world! <br>";
    $x++;
}
$x=5;
while ($x<=5){
    echo "The number is: $x <br>";
    $x++;
}

//    $x = 1; - Initialize the loop counter ($x), and set the start value to 1
//    $x <= 5 - Continue the loop as long as $x is less than or equal to 5
//    $x++; - Increase the loop counter value by 1 for each iteration

//2.do...while.......loops thru a block of code once and then repeats the loop as long as
//the specified condition is true
//syntax
//do{
//    code to execute
//}while
//in a do...while loop the condition is tested after executing the statements within
//the loop this means that the do while loop will not execute its statements at least once
//even if the condition is false see th example below

$y=0;
do{
    echo "$y Hello World<br>";
    $y++;
} while($y<10);

//3.for......loops thru a block of code a specified number of times
//syntax
//for(init counter; test counter ; increment counter){
//    code to be executed for each iteration
//}
for ($z=0;$z <10 ;$z++){
    echo "$z Hello World<br>";
}
//4.foreach.....loops thru a block of code for each element in an array
//functions
//besides the built in php functions it is possible to create your own functions
//a function is a block of statements that can be used repeatedly in a program
//a function will not executed automatically when the page loads
//a function will be executed by a call to the function
function greetings(){
    echo 2+10;
    echo "Hello World <br>";
}
greetings();
// function taking argument and parameters
function greetings2($name){
    echo "Hello $name <br>";
}
greetings2("Millicent");
greetings2("Mark");

 function greetings3($name,$age){
     echo "I am $name and i am $age years old <br>";
 }
 greetings3( "Mike", "23");

//arrays



























?>
