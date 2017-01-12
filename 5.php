<?php
/* Напишите функцию, которая принимает параметром число и проверяет четное оно или нет.*/

function isEven($number)
{
    return ($number % 2) ? false : true;
}

$number = 4;

$result = (isEven($number)) ? 'even' : 'odd';
echo "{$number} is " . $result;