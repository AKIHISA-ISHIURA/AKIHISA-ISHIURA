<?php

function arraySum(array $arr)
{
    $res = [];
    if (is_array($arr)) {
        foreach ($arr as $val) {
            foreach ($val as $k => $v) {
                if (isset($res[$k])) {
                    $res[$k] -= $v;
                } else {
                    $res[$k] = 0;
                }
            }
        }
    }
    return $res;
}

?>