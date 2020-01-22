
<?php

?>
<!DOCTYPE html>
<html>
<body>

<?php
$bag = [
        'apple' => [
        'a' => 'りんご',
        'b' => 80,
        ],
        
        'orange' => [
        'a' => 'オレンジ',
        'b' => 120,
        ],
        
        'grape'  => [
        'a' => 'ぶどう',
        'b' => 220,
        ],    
       
        ];
 
foreach ($bag as $key => $value){
    echo '英語では'. $key. 'と表示され、日本語では'. $value['a']. '、価格は'. $value['b']. '円です。<br/>';
}
?>
</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php

$A1=34;
$A2=67;
$A3=45;
$A4=34;
$A5=89;
$A=($A1+$A2+$A3+$A4+$A5)/5;

$B1=76;
$B2=72;
$B3=65;
$B4=77;
$B5=80;
$B=($B1+$B2+$B3+$B4+$B5)/5;

$C1=98;
$C2=87;
$C3=88;
$C4=92;
$C5=96;
$C=($C1+$C2+$C3+$C4+$C5)/5;

$D1=65;
$D2=34;
$D3=71;
$D4=56;
$D5=76;
$D=($D1+$D2+$D3+$D4+$D5)/5;

$E1=67;
$E2=55;
$E3=87;
$E4=56;
$E5=69;
$E=($E1+$E2+$E3+$E4+$E5)/5;

$F1=81;
$F2=79;
$F3=74;
$F4=82;
$F5=85;
$F=($F1+$F2+$F3+$F4+$F5)/5;

$G1=($A1+$B1+$C1+$D1+$E1+$F1)/6;
$G2=($A2+$B2+$C2+$D2+$E2+$F2)/6;
$G3=($A3+$B3+$C3+$D3+$E3+$F3)/6;
$G4=($A4+$B4+$C4+$D4+$E4+$F4)/6;
$G5=($A5+$B5+$C5+$D5+$E5+$F5)/6;
$G=($G1+$G2+$G3+$G4+$G5)/5;

?>

<head>
<meta charset="utf-8">
<title>tableを作る</title>
<style>
body, html, table, tr, th, td, h1{
margin: 0;
padding: 0;
line-height: 1.0;
}
#container{
width: 400px;
margin: 50px auto;
text-align: center;
}
h1{
margin-bottom: 2rem;
}
table{
width: 400px;
border: 1px solid #777;
border-collapse: collapse;
font-size: 24px;
text-align: center;
}
tr, th, td{
border: 1px solid #777;
}
th, td{
line-height: 1.6;
}
th{
background: #CCC;
}
</style>
</head>

<body>
<div id="container">
<h1>計算結果を表にする</h1>

<table>
<tr><th>名前</th><th>国語</th><th>算数</th><th>社会</th><th>理科</th><th>英語</th><th>平均</th></tr>

<tr><td>A</td><td><?php echo $A1;?></td><td><?php echo $A2;?></td><td><?php echo $A3;?></td><td><?php echo $A4;?></td><td><?php echo $A5;?></td><td><?php echo $A;?></td></tr>

<tr><td>B</td><td><?php echo $B1;?></td><td><?php echo $B2;?></td><td><?php echo $B3;?></td><td><?php echo $B4;?></td><td><?php echo $B5;?></td><td><?php echo $B;?></td></tr>

<tr><td>C</td><td><?php echo $C1;?></td><td><?php echo $C2;?></td><td><?php echo $C3;?></td><td><?php echo $C4;?></td><td><?php echo $C5;?></td><td><?php echo $C;?></td></tr>

<tr><td>D</td><td><?php echo $D1;?></td><td><?php echo $D2;?></td><td><?php echo $D3;?></td><td><?php echo $D4;?></td><td><?php echo $D5;?></td><td><?php echo $D;?></td></tr>

<tr><td>E</td><td><?php echo $E1;?></td><td><?php echo $E2;?></td><td><?php echo $E3;?></td><td><?php echo $E4;?></td><td><?php echo $E5;?></td><td><?php echo $E;?></td></tr>

<tr><td>F</td><td><?php echo $F1;?></td><td><?php echo $F2;?></td><td><?php echo $F3;?></td><td><?php echo $F4;?></td><td><?php echo $F5;?></td><td><?php echo $F;?></td></tr>

<tr><td>平均</td><td><?php echo round($G1,1);?></td><td><?php echo round($G2,1);?></td><td><?php echo round($G3,1);?></td><td><?php echo round($G4,1);?></td><td><?php echo round($G5,1);?></td><td><?php echo round($G,1);?></td></tr>

</table>
</div>
</body>
</html> 
