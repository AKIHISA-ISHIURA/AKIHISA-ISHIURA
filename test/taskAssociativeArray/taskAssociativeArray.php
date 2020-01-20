<?php

?>
<!DOCTYPE html>
<html>
<body>

<?php 
$value="点数(点)";
$year = "教科";
var_dump ($year ." ". $value)
?>

<p>
<?php
$A="A君";
$B="B君";
$C="C君";
var_dump ("　" ." ".$A." ".$B." ".$C)
?>
</p>

<p>
<?php
$A1=85;
$B1=56;
$C1=98;
var_dump (" 国語" ." ".$A1." ".$B1." ".$C1)
?>
</p>

<p>
<?php
$A2=64;
$B2=89;
$C2=87;
var_dump (" 数学" ." ".$A2." ".$B2." ".$C2)
?>
</p>

<p>
<?php
$A3=45;
$B3=73;
$C3=88;
var_dump (" 社会" ." ".$A3." ".$B3." ".$C3)
?>
</p>

<p>
<?php
$A4=77;
$B4=85;
$C4=92;
var_dump (" 理科" ." ".$A4." ".$B4." ".$C4)
?>
</p>

<p>
<?php
$A5=80;
$B5=78;
$C5=96;
var_dump (" 英語" ." ".$A5." ".$B5." ".$C5)
?>
</p>

<p><?php echo
$NAME = "A君";
print("の理科の点数は ".$A4." 点です。");
 ?></p>
 
<p><?php echo
$NAME = "B君";
print("の英語の点数は ".$B5." 点です。");
 ?></p>
 
<p><?php echo
$NAME = "A君";
$Sum = $A1 + $A2 + $A3 + $A4 + $A5 ;
$Ave = $Sum / 5;
print("の平均点は ".$Ave." 点です。");
 ?></p>

<p><?php echo
$NAME = "C君";
$Sum = $C1 + $C2 + $C3 + $C4 + $C5 ;
$Ave = $Sum / 5;
print("の平均点は ".$Ave." 点です。");
 ?></p>

<p><?php echo
$NAME = "3人の数学";
$Sum = $A2 + $B2 + $C2 ;
$Ave = $Sum / 3;
print("の平均点は ".$Ave." 点です。");
 ?></p>

</body>
</html>
