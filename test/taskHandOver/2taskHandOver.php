<!DOCTYPE html>
<html>
<body>

<?php
function divideQuarterReference($args) {
    $args = 4;
    return $args;
}
$a = 1000;
$b = divideQuarterReference($a);// 値渡し
$c = $a/$b;
echo ('1000を４で割った値は'.($c).'です。'); // 結果：2
?>

</body>
</html>