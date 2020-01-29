<!DOCTYPE html>
<html>
<body>

<?php
function divideQuarter($args) {
    $args = 4;
    return $args;
}
$a = 2000;
$b = divideQuarter($a);// 値渡し
$c = $a/$b;
echo ('2000を４で割った値は'.($c).'です。'); // 結果：2
?>

</body>
</html>