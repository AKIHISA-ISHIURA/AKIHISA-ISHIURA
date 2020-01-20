<?php

?>
<!DOCTYPE html>
<html>
<body>

<?php 
$value="平均年収";
$year = "年度";
var_dump ($year ." ". $value)
?>

<p>
<?php
$A=4410000;
$year = 2018;
var_dump ($year ." ". $A)
?>
</p>

<p>
<?php
$B=4320000;
$year = 2017;
var_dump($year . " ".$B)
?>
</p>

<p>
<?php
$C=4220000;
$year = 2016;
var_dump($year . " ".$C)
?>
</p>

<p>
<?php
$D=4200000;
$year = 2015;
var_dump($year . " ".$D)
?>
</p>

<p>
<?php
$E=4150000;
$year = 2014;
var_dump($year . " ".$E)
?>
</p>

<p><?php echo 

$Sum = $A + $B + $C + $D + $E ;
$Ave = $Sum / 5;
print ("過去５年の平均年収は:  ".$Ave."円です。");
 ?></p>


<?php 
$value="メンバー";
$year = "点数";
var_dump ($year ." ". $value)
?>

<p>
<?php
$A=80;
$year = "A";
var_dump ($year ." ". $A)
?>
</p>

<p>
<?php
$B=55;
$year = "B";
var_dump($year . " ".$B)
?>
</p>

<p>
<?php
$C=61;
$year = "C";
var_dump($year . " ".$C)
?>
</p>

<p>
<?php
$D=76;
$year = "D";
var_dump($year . " ".$D)
?>
</p>

<p>
<?php
$E=34;
$year = "E";
var_dump($year . " ".$E)
?>
</p>

<p>
<?php
$F=93;
$year = "F";
var_dump($year . " ".$F)
?>
</p>

<p><?php echo 

$Sum = $A + $B + $C + $D + $E + $F ;
$Ave = $Sum / 6;
print("テストの平均点は:  ".$Ave."点です。");
 ?></p>

</body>
</html>
