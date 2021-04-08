<?php
$var1 = 'value1';
$var2 = 'value2';

echo "var1: $var1, var2: $var2";

$var2 = 'var1';
echo "<br>value of $var2 is ", $$var2;

$int1 = 5;
$int2 = 10;

$sum = $int1 + $int2;
echo "<br>$int1 + $int2 = $sum<br>";

if($sum > 10) {
    echo "$sum > 10";
}
elseif($sum == 10) {
    echo "$sum = 10";
}
else {
    echo "$sum < 10";
}

echo '<br>', $sum < 10 ? "$sum < 10" : $sum == 10 ? "$sum = 10" : "$sum > 10"; 

$arr = array(5, 2, 10, 8, 13);
echo "<hr>";
foreach ($arr as $i) {
    echo "$i ";
}

$arr_sum = array_sum($arr);
echo "<br>sum is: $arr_sum";