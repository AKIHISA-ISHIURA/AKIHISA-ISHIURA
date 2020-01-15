<?php

?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "<pre>";
$array = array( '教科      点数(点)', '　      A君 B君 C君', '国語    85  56  98', '数学    64  89  87', '社会    45  73  88', '理科　  77  85  92' ,'英語    80  78  96' ,);
var_dump( $array );
echo "</pre>";
?>

<p><?php echo
$NAME = "A君";
$A = "85";
$B = "64";
$C = "45";
$D = "77";
$E = "80";
print("の理科の点数は ".$D." 点です。");
 ?></p>
 
<p><?php echo
$NAME = "B君";
$A = "56";
$B = "89";
$C = "73";
$D = "85";
$E = "78";
print("の英語の点数は ".$E." 点です。");
 ?></p>
 
<p><?php echo
$NAME = "A君";
$A = "85";
$B = "64";
$C = "45";
$D = "77";
$E = "80";
$Sum = $A + $B + $C + $D + $E ;
$Ave = $Sum / 5;
print("の平均点は ".$Ave." 点です。");
 ?></p>

<p><?php echo
$NAME = "C君";
$A = "98";
$B = "87";
$C = "88";
$D = "92";
$E = "96";
$Sum = $A + $B + $C + $D + $E ;
$Ave = $Sum / 5;
print("の平均点は ".$Ave." 点です。");
 ?></p>

<p><?php echo
$NAME = "3人の数学";
$A = "64";
$B = "89";
$C = "87";
$Sum = $A + $B + $C ;
$Ave = $Sum / 3;
print("の平均点は ".$Ave." 点です。");
 ?></p>

</body>
</html>
