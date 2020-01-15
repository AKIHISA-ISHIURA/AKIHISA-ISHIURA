<?php

?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "<pre>";
$array = array( ' 年度 　平均年収', '2018年 4,410,000円', '2017年 4,320,000円', '2016年 4,220,000円', '2015年 4,200,000円', '2014年 4,150,000円' ,);
var_dump( $array );
echo "</pre>";
?>

<?php
echo "<pre>";
$array = array( 'メンバー 点数', '　 A 　　80', '　 B     55', '   C     61', '   D     76', '   E     34' ,'   F     93' ,);
var_dump( $array );
echo "</pre>";
?>

<p><?php echo 
$A = "80";
$B = "55";
$C = "61";
$D = "76";
$E = "34";
$F = "93";


$Sum = $A + $B + $C + $D + $E + $F ;
$Ave = $Sum / 6;
print("テストの合計: ".$Sum." 点・平均: ".$Ave."点です。");
 ?></p>

</body>
</html>
