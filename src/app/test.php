<?php

$str = 'myday1123abs2123';
$res = '';
for($i=0;$i<strlen($str);$i++)
{
    for($j=$i-1;$j<strlen($str);$j++)
    {
        if ($str[$i]=$str[$j]){
            continue;
        }

    }
}
