<?php


class Packer
{
    public function Pack($string)
    {
        $arr = str_split($string);
        $new_arr = [];

        foreach (array_count_values($arr) as $i => $item) {

            if ($item === 1) {
                $item = "";
            }

            $new_arr[] = $i . $item;
        }
        return implode("", $new_arr);
    }

}