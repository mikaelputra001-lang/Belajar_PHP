<?php
echo "hello world <br>";

//this is one line comment
/*this is
multiple line comment*/

//this var scope is global but can't use inside function
$x = 5;
echo "$x from global variable<br>";
function variable(): void
{
    //this var scope is local and can't use outside function
    $x = 6;
    echo "$x from local variable<br>";
}

function statics(): void
{
    //this var scope is static
    static $y = 10;
    echo "$y from static variable<br>";
    $y++;
}

function globals(): void
{
    //to call global var inside function
    global $x;
    echo "$x from calling the global variable<br>";
}
variable();
statics();
statics();
statics();
globals();

echo ("this is echo too! <br>");
echo "<h2>this echo use html tag</h2>";
echo "this ","string ","was ","made ","with ","multiple parameters<br>";

$text = "PHP";
$TEXT = "Banana";
echo "I Love $text<br>";
echo "I Love $TEXT<br>";

print ("this is print <br>");
print "<h2>its just do the same thing as echo</h2><br>";
print "but its return the value of 1 <br>";

//When using single quotes, variables have to be inserted using the . operator, like this:
print 'I Love Learning ' .$text. '<br>';

$bool = false;
$float = 3.14;
$angka = -676767;
$fruits = ["apple", "grape", "kiwi"];
//use var_dump() to get data type
var_dump($x);
var_dump($text);
var_dump($TEXT);
var_dump($bool);
var_dump($angka);
var_dump($float);
echo "<br>";
var_dump($fruits);
echo "<br>";
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}
//this is object data type
$myCar = new Car("red", "Volvo");
var_dump($myCar);
echo "<br>";
$myHuzz = null;
print "how many huzz did i have? : ";
var_dump($myHuzz); echo '<br>';
//changing data type
$myData = 5;
var_dump($myData); echo '<br>';
$myData = "hello";
var_dump($myData); echo '<br>';

$number7 = 7;
var_dump($number7); echo '<br>';
$number7 = (string) $number7;
var_dump($number7); echo '<br>';

//single and double quotes different in string data type
$name = "Mikael";
print "my name is $name"; echo '<br>';
print 'my name is $name'; echo '<br>';

//string function
//how to return the string length
echo strlen("hello"); echo '<br>';
//how to counts the number of words in a string
echo str_word_count("hello world"); echo '<br>';
// how to checks if a string contains a specific substring
//str_contains() function is only available in PHP 8.0 and later. For older versions, use the strpos()
$statement = "i love you 3000";
var_dump(str_contains($statement, "love")); echo '<br>';
var_dump(str_contains($statement, "Love")); echo '<br>';
//how to searches for a specific text within a string
echo strpos("Hello world!", "world"); echo '<br>';
//how to checks if a string starts with a specific substring
var_dump(str_starts_with($statement, "i love")); echo '<br>';
//hoe to checks if a string ends with a specific substring
var_dump(str_ends_with($statement, "3000")); echo '<br>';

//modify string
//how to return a string to uppercase
echo strtoupper($name); echo '<br>';
//how to return a string to lowercase
echo strtolower($name); echo '<br>';
//how to checks if a string ends with a specific substring
echo str_replace("love", "hate", $statement); echo '<br>';
//how to reverse a string
echo strrev($statement); echo '<br>';
//how to remove whitespace from a string
$someText = "       Hello Worlds       !";
echo trim($someText); echo '<br>';
//how to split a string into an array
$arrayStatement = explode(" ", $statement);
print_r ($arrayStatement); echo '<br>';

//menggabungkan string
$x = "hello";
$y = "world";
$z = $x . " " . $y;
echo $z; echo '<br>';
echo "$x . $y"; echo '<br>';

//membelah string
//The substr() function is used to extract a part of a string (slice a string)
$oldtxt = "hai dunia";
echo substr($oldtxt,  2, 5); echo '<br>';
echo substr($oldtxt, 4); echo '<br>';
echo substr($oldtxt, -5, 4); echo '<br>';
echo substr($oldtxt, 4, -1); echo '<br>';

//escape character
//an escape character is a backslash \ followed by the character you want to insert
$x = "We are the so-called \"Vikings\" from the north.";
echo $x; echo '<br>';
//> \' < used for single quotes
//> \" < used for double quotes
//> \$ < used for PHP variable
//> \n < used for new line
//> \r < used for carriage return
//> \t < used for tab
//> \f < used for form feed
//> \ooo < used for octal value
//> \xhh < used for hex value