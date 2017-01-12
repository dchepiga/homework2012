<?php
/*Напишите функцию, которая принимает параметром число от 1 до 12, а возвращает название месяца на русском языке.*/

const MONTH_RUS = [
    "1" => "январь",
    "2" => "февраль",
    "3" => "март",
    "4" => "апрель",
    "5" => "май",
    "6" => "июнь",
    "7" => "июль",
    "8" => "август",
    "9" => "сентябрь",
    "10" => "октябрь",
    "11" => "ноябрь",
    "12" => "декабрь"];

function convertNumToMonth($num)
{
    if (!array_key_exists($num, MONTH_RUS)) {
        return "Unknown month";
    } else {
        return MONTH_RUS[$num];
    }
}

echo convertNumToMonth(12);