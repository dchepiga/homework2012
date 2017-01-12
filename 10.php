<?php
/*Напишите функцию, которая принимает параметром строку, а возвращает первые N символов этой строки (N – это второй параметр).
Функция должна добавлять троеточие в конце возвращаемой строки.
 Функция должна корректно работать с кириллицей.*/


//line 'extension=php_mbstring.dll' should be uncommented in php.ini
function returnFirstNSymbolsFromStr($str, $n)
{
    $result = mb_substr($str, 0, $n, 'UTF-8');
    if($result != $str)
    {
        $result .= '...';
    }

    return $result;
}

//$str = "Hello, world!";
$str = "Привет, мир!";


echo returnFirstNSymbolsFromStr($str, 10);