<?php
/*Напишите функцию, которая возвращает куб числа. Число передается параметром.*/

function cube($n)
{
    return pow($n, 3);
}

$number = 4;
$result = cube($number);
echo "{$number}<sup>3</sup> = {$result}";
