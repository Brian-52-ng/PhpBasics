<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/18/20
 * Time: 9:52 AM
 */
function writeMsg(){
    echo "hello world";
}

writeMsg();
echo "<br>";
echo "<hr>";
//function arguement
function familyName($fname) {
    echo "$fname Koech.<br>";
}
familyName("Jane");
familyName("Harry");
familyName("Stacy");
familyName("Kai");
familyName("Kip");
echo "<br>";

function famName($fname, $year) {
    echo "$fname Koech. Born in : $year <br>";
}
famName("Jane","1975");
famName("Harry","1978");
famName("Stacy","1983");
famName("","");
famName("Kip","1977");
echo "<br>";

function addnumbers(int $a, int $b) {
    return $a + $b;
}
echo addnumbers(5 ,50);
echo "<hr>";

//set a default value
function setheight(int $minheight = 50) {
    echo "the height is: $minheight <br>";
}
setheight(350);
setheight();
setheight(135);
setheight(80);
echo "<hr>";

function sum(int $x, int $y) {
    $z =$x+$y;
    return $z;
}
echo "5+10 = ". sum(5, 10) . "<br>";
echo "7+13 = ". sum(7, 13) . "<br>";
echo "2+4 = ". sum(2, 4) . "<br>";


echo "<hr>";

function wrMsg(){
    echo "i am the best";
}
wrMsg();
echo "<br>";
?>