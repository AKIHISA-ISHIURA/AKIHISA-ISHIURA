<!DOCTYPE html>
<html>
<body>

<p>
<?php echo "Str1は、";?>
 <span style="color: red;"><?php 
 
 $param = "apple=リンゴ&gorilla=ゴリラ&rap=ラッパ";

parse_str($param);
 
 echo "$apple";?></span>
<?php echo "です。";?>
</p>

<p>
<?php echo "Str2は、";?>
<span style="color: red;"><?php echo "$gorilla";?></span>
<?php echo "です。";?>
</p>

<p>
<?php echo "Str3は、";?>
<span style="color: red;"><?php echo "$rap";?></span>
<?php echo "です。";?>
</p>

</body>
</html>