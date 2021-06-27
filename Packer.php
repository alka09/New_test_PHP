<?php


class Packer
{
    public function Pack($string)

    {
        $array = [];
        foreach (count_chars($string, 1) as $i => $val) {

            $count = chr($i);

            echo $count . "<br>";

            if ($val === 1) {
                $val = "";
            }
            $array[] = $count . $val;
        }

        return implode("", $array);
    }


}