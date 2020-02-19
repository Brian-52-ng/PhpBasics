<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/10/20
 * Time: 9:32 AM
 */
echo "<link rel='stylesheet' href='styling.css'>";
//control structures
//if
 $a =6;
 if ($a > 5)
         echo "a is greater than 5";
 $a = 5;
 echo "<br>";
// if comparison
if ($a == 5)
     echo "a is equal to 5";
// if else
echo "<br>";
 $a = 7;
 if ($a > 5) {
     echo "a is greater than 5";
     }
else
    {echo "a is less than 5";
    }
//if else if
echo "<br>";
$a= 5;
if ($a > 5)
{
    echo "a is greater than 5";
}
elseif ($a < 5)
{
    echo "a is less than 5";
}
else
    {
    echo "a is equal to 5";
}
echo "<hr>";
//practise
echo "<h1>Performance</h1>";
echo "<br>";
$m =65;
$k =70;
$e =55;
$total = ($m+$k+$e);
$average =($total/3);
{
    echo "marks are :";
    echo "<br><h2>maths</h2><nbsp>".$m;
    echo "<br><h2>kiswahili</h2><nbsp>".$k;
    echo "<br><h2>english</h2><nbsp>".$e;
    echo "<br>";
    echo "total =".$total;
    echo "<br>";
    echo "average =".$average;
}
echo "<br>";
if ($average > 60)
{
    echo "1st division";
}
elseif ($average > 50)
{
    echo "2nd division";
}
else
{
    echo "3rd division";
}
echo "<hr>";
echo "<br>";
//swith case
$favcolor ="red";
switch ($favcolor) {
    case "red":
        echo "my favorite color is red";
        break;
    case "blue":
        echo "my favorite color is blue";
        break;
    case "blue":
        echo "my favorite color is blue";
        break;
    default:
        echo "my favorite color is neither red blue nor green";
}
echo "<br>";
$day ="5";
switch ($day) {
    case "5":
        echo "today is friday";
        break;
    case "1":
        echo "today is monday";
        break;
    case "2":
        echo "today is tuesday";
        break;
    case "3":
        echo "today is wednesday";
        break;
    case "4":
        echo "today is thursday";
        break;
    case "6":
        echo "today is saturday";
        break;
    case "7":
        echo "today is sunday";
        break;
    default:
        echo "input correct day of the week";
}
echo "<br>";
$x =1;
while ($x <=5){
    echo "The number is:.$x <br>";
    $x++;
}
echo "<hr>";
echo "do";
$x=1;
do
    {
    echo "The number is:.$x <br>";
    $x++;
} while ($x <=5);
echo "<hr>";
echo "for";
for ($x =0; $x <=10; $x++) {
    echo "The number is:.$x <br>";
}

?>