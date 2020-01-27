<!DOCTYPE html>
<html>
<body>

<?php
$a = "関数で文字列を表示!";
$b = "254×322=81788";
function display(string $a,string $b):
string
{
return $a.$b;
}
 echo $a;
 echo ("<br>"."<br>".$b);
?>


<p>
<?php
$createRandomNumberArray = array(rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100));
 
echo "<pre>";
var_dump($createRandomNumberArray);
echo "</pre>";
?>
</p>

<p>
<?php
$createRandomNumberArrayAndDisplay = [
    '1' => rand(1,100),
    '2' => rand(1,100),
    '3' => rand(1,100),
    '4' => rand(1,100),
    '5' => rand(1,100),
    '6' => rand(1,100),
    '7' => rand(1,100),
    '8' => rand(1,100),
    '9' => rand(1,100),
    '10' => rand(1,100),
];
foreach ($createRandomNumberArrayAndDisplay as $a => $b) {
    echo "$a 番目の数値は $b です" . "</br>";
}

?>
</p>

<p>
<?php
heikin(47,31,86,16,39,53,94,3,74,28);
function heikin($a,$b,$c,$d,$e,$f,$g,$h,$i,$j){
  $result = ($a+$b+$c+$d+$e+$f+$g+$h+$i+$j) / 10;
  echo('平均(小数点１位は四捨五入)は'.round($result,0).'です');
  echo("<br>"."<br>".'平均(小数点２位は四捨五入)は'.round($result,1).'です');
}
?>
</p>

<p>
<?php
$age = 47;
// switch文で年齢を条件分岐
switch ($age) {
 
  // 年齢が18歳未満だったら…
  case 47 >= $age ;
    echo '平均以上は５個です！';
    break;
 
  // 年齢が60歳以上だったら…
  case 31 >= $age;
    echo '平均以上は５個です！';
    continue;
    break;
    
  // 年齢が60歳以上だったら…
  case 86 >= $age;
    echo '平均以上は５個です！';
    break;

  // 年齢が60歳以上だったら…
  case 16 >= $age;
    echo '平均以上は５個です！';
    continue;
    break;
    
  // 年齢が60歳以上だったら…
  case 39 >= $age;
    echo '平均以上は５個です！';
    continue;
    break;
    
  // 年齢が60歳以上だったら…
  case 53 >= $age;
    echo '平均以上は５個です！';
    break;
    
  // 年齢が60歳以上だったら…
  case 94 >= $age;
    echo '平均以上は５個です！';
    break;
    
  // 年齢が60歳以上だったら…
  case 3 >= $age;
    echo '平均以上は５個です！';
    continue;
    break;
    
  // 年齢が60歳以上だったら…
  case 74 >= $age;
    echo '平均以上は５個です！';
    break;
    
  // 年齢が60歳以上だったら…
  case 28 >= $age;
    echo '平均以上は５個です！';
    continue;
    break;
}
?>
</p>

</body>
</html>
