<?php

$str = '1222542264222';

$str = preg_replace('~(2)\1{2,}~', '$1', $str);

echo $str;