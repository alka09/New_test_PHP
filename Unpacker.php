<?php

class Unpacker
{
    public $string;

    public function Unpack($string)
    {

        $array = explode("\\", $string);

        var_dump($array);

        foreach ($array as $key => $sub_array) {
            $sub_array = str_split($sub_array);

            $count = count($sub_array);
            if ($count > 1) {
                foreach ($sub_array as $count => $value) {
                    if ((int)$value && isset($sub_array[$count - 1])) {
                        $new_arr[] = str_repeat($sub_array[$count - 1], $value);
                        $sub_array[$count - 1] = $new_arr;
                        unset($sub_array[$count]);
                        $new_arr = [];
                    }
                }
            }
            $array[$key] = $sub_array;
        }
        return $array;
    }
}

