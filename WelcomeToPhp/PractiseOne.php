<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/5/20
 * Time: 11:45 AM
 */
echo "<link rel='stylesheet' href='styling.css'>";
echo "<link rel='icon' href='img/img1.jpeg'>";
echo "<img src='img/img1.jpeg' width='100pc' height='54px'>";
$colors = array(" <div class='red'>red</div>"," <div class='green'>green</div>"," <div class='blue'>blue</div>"," <div class='yellow'>yellow </div>");

foreach ($colors as $value) {
    echo "$value <br>";
}
$age =array("peter"=> "35","ben"=> "37","joe"=> "43");

foreach ($age as $x=> $value) {
    echo "$x $value <br>";
}
echo "<hr>";
//array
$car = array("Volvo","BMW","Toyota");
echo "i like ".$car[0].",".$car[1]." and ".$car[2].".";
echo "<br>";
$cars = array("volvo","bmw","toyota");
echo count($cars);
echo "<br>";
//indexed array
$cars = array("volvo","bmw","toyota");
$arraylength = count($cars);
for ($x=0; $x < $arraylength; $x++){
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";
$fruits=array("banana","apple","lemon","melon","orange");
$number=  count($fruits);
echo "$fruits[1]";
echo "<br>";
//associative array
$age=array("peter"=>"35","ben"=>"37");
foreach ($age as $x => $value){
    echo "key= ".$x.",value= ".$value;
    echo "<br>";
}
//assignment

 $define=array("banana"=>"fruit","kales"=>"vegetables","meat"=>"proteins");
foreach ($define as $b => $v){
    echo "key= ".$b."value= ".$v;
    echo "<br>";
}

//2d multidimension array
$cars=array(
    array("Volvo",22,18),array("BMW",15,13),array("Saab",5,2));
    echo $cars[0][0].": In stock : ".$cars[0][1].", sold: ".$cars[0][2].".<br>";

    echo $cars[1][0].": In stock : ".$cars[1][1].", sold: ".$cars[1][2].".<br>";

    echo $cars[2][0].": In stock : ".$cars[2][1].", sold: ".$cars[2][2].".<br>";

//    row looping
    for ($row =0; $row < 3; $row++){
        echo "<p><b>row number $row</b></p>";
        echo "<ul>";
//column looping
        for ($col =0; $col < 3; $col++)
        {echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }
echo "<hr>";
//sorting
//descending
$cars = array("volvo","bmw","toyota");
rsort($cars);
//looping
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
//ascending
$numbers =array(4,6,2,22,11);
sort($numbers);
//looping
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}
//value sorting -ascending
$age =array("peter"=> "53","ben"=> "37","joe"=> "43");
asort($age);

foreach ($age as $x => $value){
    echo "key= ".$x.",value= ".$value;
    echo "<br>";
}
//key sorting -ascending
$age =array("peter"=> "53","ben"=> "37","joe"=> "43");
ksort($age);

foreach ($age as $x => $value){
    echo "key= ".$x.",value= ".$value;
    echo "<br>";
}
//value sorting -descending
$age =array("peter"=> "53","ben"=> "37","joe"=> "43");
arsort($age);

foreach ($age as $x => $value){
    echo "key= ".$x.",value= ".$value;
    echo "<br>";
}
//key sorting -descending
$age =array("peter"=> "53","ben"=> "37","joe"=> "43");
krsort($age);

foreach ($age as $x => $value){
    echo "key= ".$x.",value= ".$value;
    echo "<br>";
}
echo "<hr>";
//Php functions

?>