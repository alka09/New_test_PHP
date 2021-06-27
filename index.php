<?php
require_once 'Unpacker.php';
require_once 'Packer.php';

$array = new Unpacker();
$string = 'qwe\\5';
$arr = $array->Unpack($string);

function array_flatten($arr): array
    {
        $return = array();
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                $return = array_merge($return, array_flatten($value));
            } else {
                $return[$key] = $value;
            }
        }
        return $return;
    }

$new_array = array_flatten($arr);
$new_string = implode($new_array);

$new_string = implode($new_array);
if (empty($new_string)) {
    echo("Некорректная строка" . "<br>");

} else {
    echo($new_string  . "<br>");
}

$unpack_string = 'qwe45';
$pack_string = new Packer();

print_r($pack_string->Pack($unpack_string));
