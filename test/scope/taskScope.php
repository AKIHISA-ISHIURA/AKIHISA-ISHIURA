<?php

?>


<!DOCTYPE html>
<html>
<body>

<?php

$A1=rand(1,100);
$B1=rand(1,100);
$C1=rand(1,100);
$D1=rand(1,100);
$E1=rand(1,100);
$F1=rand(1,100);
$G1=rand(1,100);
$H1=rand(1,100);
$I1=rand(1,100);
$J1=rand(1,100);
$K1=rand(1,100);
$L1=($A1+$B1+$C1+$D1+$E1+$F1+$G1+$H1+$I1+$J1+$K1);

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

<table>
<tr><th>処理回数</th><th>乱数</th></tr>

<tr><td>1 </td><td><?php echo $A1;?></td></tr>
<tr><td>2 </td><td><?php echo $B1;?></td></tr>
<tr><td>3 </td><td><?php echo $C1;?></td></tr>
<tr><td>4 </td><td><?php echo $D1;?></td></tr>
<tr><td>5 </td><td><?php echo $E1;?></td></tr>
<tr><td>6 </td><td><?php echo $F1;?></td></tr>
<tr><td>7 </td><td><?php echo $G1;?></td></tr>
<tr><td>8 </td><td><?php echo $H1;?></td></tr>
<tr><td>9 </td><td><?php echo $I1;?></td></tr>
<tr><td>10</td><td><?php echo $J1;?></td></tr>
<tr><td>11</td><td><?php echo $K1;?></td></tr>
<tr><td>合計</td><td><?php echo $L1;?></td></tr>

</table>
</div>
</body>
</html> 

