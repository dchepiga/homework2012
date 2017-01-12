<?php
/* Напишите функцию, которая принимает год, а возвращает високосный это год или нет. При решении не используйте функцию date.*/

function isLeap($year)
{
    return (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) ? true : false;
}

$year = 2100;

$result = (isLeap($year)) ? 'leap' :  'not leap';
echo "{$year} is " . $result;