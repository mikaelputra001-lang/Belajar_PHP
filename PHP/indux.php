<?php
/*PHP NUMBBER
there's 3 main number type in pHP :
>Integer
>Float
>Numeric String
in addition, PHP has 2 more data type that used for number :
>>Infinity
>>NaN*/
$a = 5;
$b = 17.38;
$c = "67";
var_dump($a, $b, $c); echo '<br>';
var_dump(is_int($a), is_int($b), is_int($c)); echo '<br>';
var_dump(is_float($a), is_float($b), is_float($c)); echo '<br>';
$x = 1.9e411;
var_dump(is_infinite($x), is_infinite($a)); echo '<br>';
$n = acos(8);
var_dump($n);
var_dump(is_NaN($n)); echo '<br>';

$x = 5985;
var_dump(is_numeric($x));
echo '<br>';
$x = "5985";
var_dump(is_numeric($x));
echo '<br>';
$x = "59.85" + 100;
var_dump(is_numeric($x));
echo '<br>';
$x = "Hello";
var_dump(is_numeric($x));
echo '<br>';
//to get int value
echo intval($b); echo '<br>';