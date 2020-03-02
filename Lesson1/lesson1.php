<?php
echo "Hello from php";
echo "<p>Hello world from p tag</p>";
//echo:its a function that outputs data(return a value)
//string:a sequence of character inside double or single quotes
//<?php:starting php tag
//:variables in php
//:a variable is a container of data,it stores different types of data ie strings,integers and many more
//:to create a variable start with a dollar sign followed with the name of the variable
//: . operator used to join two strings and variable
//: br breaking two variables
//:print used to output data(return a value so that it can be used in expression)
$country="Kenya";
echo $country;
echo"<br>";
//:ending php tag
$names="Millicent Wangui";
echo $names;
echo"<br>";
echo 'My name is '.$names.' I come from '.$country;
echo "<br>";
echo "My name is $names I come from $country";
echo "<br>";
$shoe_size=4;
echo $shoe_size.'<br>';
$num_1=3;
$num_2=4;
echo $num_1+$num_2.'<br>';
echo "<h1>Hello world</h1>";//returns html code
echo "Hello world";//returns php text
$country="Kenya";
echo $country."<br>";
echo "I come from ".$country."<br>";
echo "I come from $country <br>";
$color ="red";
echo 'My favourite color '.$color;
echo 'My favourite color is $color <br>';

//rules that govern variable names

//A variable starts with a $ sign followed by the name of the variable
$olor='';
//A variable must start with a letter or the underscore character
$name='john';
$_='Mary';
//A variable name cannot start with a number
//A variable name can only contain alpha-numeric characters and underscores (A-Z,0-9 AND _)

//VARIABLE NAMES ARE CASE-SENSITIVE ($age AND $AGE are two diff variables)
$city="Mombasa";
$City="Nairobi";
echo $city;
echo'<br>';
echo $City. "<br>";
//variable names design
$myFavouriteColor ='Blue';//camel casing
$my_favourite_color = "Blue";
//assigning and reassigning variables
$myFavouriteColor ='Purple';//reassigning
// strpos():searches for a specific text in a string
$greetings="Hello world";
$get_world=strpos($greetings, 'world');
echo $get_world. "<br>";

// php numbers
// integers : non decimal non
$age=23;
// isInt():returns true or false
is_int($age);
// var_dump():print out the type of data
var_dump(is_int($age));
// double:decimal no
$x =123.43;
var_dump($x);



?>

<h1>Hello World</h1>
