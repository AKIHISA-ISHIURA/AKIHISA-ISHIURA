<?php
require_once('3externalFunctions.php');

$averageScore = [63, 67, 71, 68, 66];
$AScore = [76, 72, 65, 68, 80];

// 全科目の平均を求める
$average = getAvarage($averageScore);


// Aクラスの平均を求める
$averageA = getAvarage($AScore);
?>