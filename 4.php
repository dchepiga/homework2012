<?php
/*Напишите аналог функции count (аналог - это значит можно пользоваться чем угодно, кроме функции count).*/

const NUM_NORMAL = 0;
const NUM_RECURSIVE = 1;

function numerate($countable, $mode = NUM_NORMAL)
{

    if (is_null($countable)) {
        return 0;
    } elseif (!is_array($countable)) {
        return 1;
    } elseif (empty($countable)) {
        return 0;
    } else {
        $count = 0;
        foreach ($countable as $key => $item) {
            if (is_array($item) && $mode) {
                $count++;
                $count += numerate($item, $mode);
            } else {
                $count++;
            }
        }
        return $count;
    }
}

$food = array('fruits' => array('orange', 'banana', 'apple' => ['pineapple']),
    'veggie' => array('carrot', 'collard', 'pea'));
//$food = [];
//$food = null;
//$food = 'food';

echo "numerate - ".numerate($food, NUM_RECURSIVE);
echo '<br>';
echo "count - ".count($food, COUNT_RECURSIVE);