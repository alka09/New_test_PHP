<?php


class Unpacker
{
    public $string;

    public function Unpack($string)
    {
        $arr = str_split($string);

        foreach ($arr as $key => $value) {
            if ((int)$value || (int)$value && (int)$arr[$key - 1]) {
                $new_arr[] = str_repeat($arr[$key - 1], $value);
                $arr[$key - 1] = array_replace($new_arr);
                unset($arr[$key]);
                $new_arr = [];
            }
        }
        return $arr;
    }
}