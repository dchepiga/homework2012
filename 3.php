<?php
/*Напишите функцию, которая отнимает от первого числа второе и делит на третье.*/

function arithmetic(...$num)
{
    $value = ($num[0] - $num[1]) / $num[2];
    $str = "({$num[0]} - {$num[1]}) / {$num[2]} = " . $value;
    return $str;
}

$array = [10, 4, 3];

print_r($array);
echo "<br>";
echo arithmetic(...$array);