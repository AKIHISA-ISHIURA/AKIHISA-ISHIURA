<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskCalc</title>
</head>
<body>

<?php
$a = 1;  
$b = 3;
$c = 5;
echo ($a + $b) * $c;
?>  

<?php
$d = 22;  
$e = 3;
echo(round($d/$e,3));
?>  

<?php
$f = 22;  
$g = 3;
echo(ceil($f/$g));
?>  

<?php
$h = 22;  
$i = 3;
echo(floor($h/$i));
?>  

<?php
$dice1 =mt_rand(1,6);
$dice2 =mt_rand(1,6);
echo(round($dice1 +　$dice2/36,3));
?>

</body>

</html>