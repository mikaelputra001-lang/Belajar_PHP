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

