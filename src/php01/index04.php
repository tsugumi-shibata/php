<?php
$a = 5;

if ($a === 5) {
echo "\$aは5です";
}
echo "<br>";

$a=7;

if ($a === 5){
echo "\$aは5です";
}else {
echo "\$aは5以外です";
}
echo "<br>";

if ($a === 7){
echo "\$aは7です";
}elseif ($a === 5){
echo "\$aは5です";
}else{
echo "\$aはaは5と7以外です";
}
echo "<br>";



$people = "Saburo";

switch ($people){
case "Taro":
echo "太郎です";
break;
case "Jiro":
echo "次郎です";
break;
case "Saburo":
echo "三郎です";
break;
}
echo "<br>";


$a = 7;

$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;