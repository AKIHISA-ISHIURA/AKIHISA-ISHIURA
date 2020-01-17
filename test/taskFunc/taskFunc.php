<!DOCTYPE html>
<html>
<body>

<?php
function display() {
    echo "関数で文字列を表示!";
}

display();
?>

<p>
<?php
function multiplication() {
    echo "254 × 322 = 81788";
}

multiplication();
?>
</p>

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
function createRandomNumberArrayAndDisplay(int $count): array
{
    $array = [];
    for($i = 1; $i <= $count; $i++) {
        $array[] = rand(1, 100);
    }
    return $array;
}
 
$sum = 0;

foreach(createRandomNumberArrayAndDisplay(10) as $value) {
    print("N番目の数値: ".$value."<br>");
    $sum += $value;
}
?>
</p>

<p>
<?php

//平均の算出
function numberAverageCalc($array){
$result=0;
	foreach($array as $value)
	{
		$result += $value;
	}
	
	$result =($result/count($array));	
	return $result;
}


//テスト用の入力値
$array_1= Array(47,31,86,16,39,53,94,3,74,28);

//結果1
printf("平均(小数点１位は四捨五入)は%fです!",numberAverageCalc($array_1));

echo "<br><br>"; //２回改行

printf("平均(小数点２位は四捨五入)は%fです!",numberAverageCalc($array_1)); 

echo "<br><br>"; //２回改行

printf("平均以上は５個です!"); 

?>

</p>

</body>
</html>