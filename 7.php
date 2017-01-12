<?php
/*Напишите функцию, которая возвращает текущую дату в формате '31 января, пятница'.
 Вынесите код, который преобразует число в название месяца по-русски в родительном падеже в отдельную функцию.
 Аналогично поступите с кодом, который преобразует число в день недели по-русски.*/


const MONTH_RUS = [
    "1" => "января",
    "2" => "февраля",
    "3" => "марта",
    "4" => "апреля",
    "5" => "мая",
    "6" => "июня",
    "7" => "июля",
    "8" => "августа",
    "9" => "сентября",
    "10" => "октября",
    "11" => "ноября",
    "12" => "декабря"];

const WEEK_RUS = [
    "1" => "понедельник",
    "2" => "вторник",
    "3" => "среда",
    "4" => "четверг",
    "5" => "пятница",
    "6" => "суббота",
    "7" => "воскресенье"];

function convertNumToMonth($num)
{
    if (!array_key_exists($num, MONTH_RUS)) {
        return "Unknown month";
    } else {
        return MONTH_RUS[$num];
    }
}

function convertNumToWeek($num)
{
    if (!array_key_exists($num, WEEK_RUS)) {
        return "Unknown day of week";
    } else {
        return WEEK_RUS[$num];
    }
}

function getCurrentDate()
{
    $str = date("j") . " ";
    $str .= convertNumToMonth(date("n")) . ", ";
    $str .= convertNumToWeek(date("N"));
    return $str;
}

echo getCurrentDate();