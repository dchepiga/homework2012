<?php
/*Напишите функцию, которая находит разницу между двумя датами: количество лет, месяцев, дней, часов, минут, секунд.
Результат должен выводиться в виде массива с ключами y, m, d, h, i, s.*/

function dateDiff($date1, $date2)
{
    $dateDiff = [];

    $arr1 = convertDateTimeToArray($date1);
    $arr2 = convertDateTimeToArray($date2);

//   mktime( hour, minute, second, month, day, year)
    $time1 = mktime($arr1[3], $arr1[4], $arr1[5], $arr1[1], $arr1[2], $arr1[0]);
    $time2 = mktime($arr2[3], $arr2[4], $arr2[5], $arr2[1], $arr2[2], $arr2[0]);

    $diff = ($time2 > $time1) ? $time2 - $time1 : $time1 - $time2;
    $dateDiff['y'] = $year = round($diff / 31536000, 1);
    $dateDiff['m'] = $month = round($year * 12, 1);
    $dateDiff['d'] = $day = round($diff / 86400, 1);
    $dateDiff['h'] = $hour = round($diff / 3600, 1);
    $dateDiff['i'] = $minute = round($diff / 60, 1);
    $dateDiff['s'] = $seconds = round($diff, 1);

    return $dateDiff;
}

function convertDateTimeToArray($dateTimeInMysqlFormat)
{
    $dateTime = explode(' ', $dateTimeInMysqlFormat);
    $date = explode('-', $dateTime[0]);
    $time = explode(':', $dateTime[1]);
    $dateTime = array_merge($date, $time);
    return $dateTime;
}

//$date1 = '2006-05-01 13:45:09';
//$date2 = '2010-11-15 12:23:10';

$date1 = '2016-10-15 13:45:09';
$date2 = '2017-02-01 12:23:10';
echo 'Date1: '.$date1 . '<br>Date2: ' . $date2 . '<br>';
echo '<pre>';
$result = dateDiff($date1, $date2);
print_r($result);
echo '</pre>';
