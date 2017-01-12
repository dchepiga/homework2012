<?php
/*Напишите функцию, которая принимает строку на русском языке, а возвращает ее транслит.
 также функцию, которая выполняет обратную операцию.*/

const REPLACE_SINGLE = [
    'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
    'З' => 'Z', 'И' => 'I', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N',
    'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U',
    'Ф' => 'F', 'Ц' => 'C', 'Ы' => 'Y',
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e',
    'з' => 'z', 'и' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
    'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
    'ф' => 'f', 'ц' => 'c', 'ы' => 'y'
];
const REPLACE_MULTIPLE = [
    'Ё' => 'Jo', 'Ж' => 'Zh', 'Й' => 'Jj', 'Х' => 'Kh', 'Ч' => 'Ch', 'Ш' => 'Sh',
    'Щ' => 'Shh', 'Ъ' => "\"", 'Ь' => '\'', 'Э' => 'Eh', 'Ю' => 'Ju', 'Я' => 'Ya',
    'ё' => 'jo', 'ж' => 'zh', 'й' => 'jj', 'х' => 'kh', 'ч' => 'ch', 'ш' => 'sh',
    'щ' => 'shh', 'ъ' => "\"", 'ь' => '\'', 'э' => 'eh', 'ю' => 'ju', 'я' => 'ja'];


function rusToTranslit($str)
{
    $res = strtr($str, REPLACE_SINGLE);
    $res = strtr($res, REPLACE_MULTIPLE);
    return $res;
}

function translitToRus($str)
{
    $res = strtr($str, array_flip(REPLACE_MULTIPLE));
    $res = strtr($res, array_flip(REPLACE_SINGLE));

    return $res;
}

$str = 'Съешь ещё этих мягких французских булок, да выпей же чаю.';
$result = rusToTranslit($str);
echo $result . "<br>";
$result2 = translitToRus($result);
echo $result2;