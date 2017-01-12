<?php
/*Напишите функцию, которая принимает параметром массив, а возвращает четные элементы этого массива.*/

function evenArrayElements(array $array)
{
    $even = [];
    if (!empty($array)) {
        foreach ($array as $key => $value) {
            if ($value % 2 == 0 && is_numeric($value)) {
                $even[] = $value;
            }
        }
    }

    return $even;
}

for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(0, 50);
}


echo '<pre>';
print_r($arr);
print_r(evenArrayElements($arr));
echo '</pre>';