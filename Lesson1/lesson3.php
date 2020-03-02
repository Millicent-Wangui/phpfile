<?php
// PHP operators:Performs operations between variables and values
// 1.Arithmetic 
$a=10;
$b=5;
// a.addition:+
$sum=$a+$b;
echo "The sum of $a and $b is $sum <br>";
// b.subtraction:-
$sub=$a-$b;
echo "The sub of $a and $b is $sub <br>";
// c.multiplication:*
$mult=$a*$b;
echo "The mult of $a and $b is $mult <br>";
// d.divission:/
$divission=$a/$b;
echo "The div of $a and $b is $divission <br>";
// e.modulus %::returns a reminder of a divission
$mod =3 % 2;
echo "The mod of 3 and 2 is $mod <br>";
// f.expotential :** 
$expo= 2**3;
echo "The expo of 2 and 3 is $expo <br>";
// 2.Assignment:=used to store a value on the right of ana expression to the value on the left 
$name ="John";
// can be cobined with other arithmetic operators to form new operators
$s =100;
$t =20;
$sum =$s + $t;
// $s =$s +$t;
$s += $t;
// echo $s;
echo $s. "<br>";
$s -= $t;
echo $s. "<br>";
$s /= $t;
echo $s. "<br>";
$s %= $t;
echo $s. "<br>";
$s *= $t;
echo $s. "<br>";
$m=11;
$a=2 ;
$mod= 11/2 ;
echo "The mod of 11 and 2 is $mod <br>";
// 3.Comparison
// 4.Logical
//used to combine two conditions
$x=100;
$y=50;
if($x > 50 and $y==50){
    echo "true<br>";
}
//and
//returns true if both conditions are
$x=100;
$y=50;

//or
//returns true if one of the conditions is true
if($x < 50 or $y != 50){
    echo "true <br>";
}
//not
//returns true if condition is false and vise versa
echo(!($x < 50 or $y != 50))."<br>";
var_dump(!($x < 50 or $y != 50));


?>