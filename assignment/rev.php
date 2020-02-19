<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/17/20
 * Time: 10:29 AM
 */
//quiz 4
echo "<hr>";
$color = array("white","green","red","blue","black");
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady.";
echo "<hr>";
//quiz 5
$color =array("white","green","red");
sort($color);

$clength = count($color);
for($x = 0; $x < $clength; $x++) {
    echo $color[$x];
    echo "<br>";
}
echo "<hr>";
//quiz 6
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
}
echo "<hr>";
//quiz 7
echo "<hr>";
//quiz 8
$var = "PHP Tutorial";
echo "<h3>$var</h3>";
echo "<hr>";
//quiz 9
$txt = "Hello";
echo ".$txt";
//quiz 10
