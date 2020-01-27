<?php

function getAvarage($scoreArray){
    // 合計を保持しておく変数。0で初期化。
    $sum = 0;
    
    // 合計を求める
    foreach ($scoreArray as $value) {
        $sum += $value;
    }

    // 合計を配列の個数で割って、平均を算出
    $average = $sum / count($scoreArray);

    // 求めた平均値を返す（リターンする）
    return $average;
}
<?>