<?php
/*Дан массив с элементами 'a', 'b', 'c', 'd', 'e'. С помощью функции array_map сделайте из него массив 'A', 'B', 'C', 'D', 'E'.*/

$arr = ['a', 'b', 'c', 'd', 'e'];

$result = array_map("strtoupper", $arr);

echo '<pre>';
print_r($result);
echo '<pre>';