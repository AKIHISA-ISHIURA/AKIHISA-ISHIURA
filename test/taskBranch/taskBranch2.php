<?php

?>
<!DOCTYPE html>
<html>
<body>

<?php
$Name = "Aくん";
$Math = rand(1,100);
$English = rand(1,100);
$Japanese = rand(1,100);
$Science = rand(1,100);
$Society = rand(1,100);


$Sum = $Math + $English + $Japanese + $Science + $Society ;
$Ave = $Sum / 5;
print($Name."の合計: ".$Sum." 点・平均: ".$Ave."点です。");

$t = $Ave;

if ($t >= "67.3") {
    echo "Aくんの平均点は67.3以上です。";
} else {
    echo "Aくんの平均点は67.3未満です。";
}

?>

</body>
</html>
