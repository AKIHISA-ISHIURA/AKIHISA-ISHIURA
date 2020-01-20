<!DOCTYPE html>
<html>
<body>

<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");

if ($t == "100") {
    echo "\$string100は100です。";
} else {
    echo "\$string100は100ではありません。";
}
?>
 
 <?php
$t = date("H");

if ($t === "100") {
    echo "\$string100は100です。";
} else {
    echo "\$string100は100ではありません。";
}
?>

<?php
$t = date("H");

if ($t > "100") {
    echo "\$string100は101以上です。";
} else {
    echo "\$string100は101以上ではありません。";
}
?>

<?php
$t = date("H");

if ($t >= "100") {
    echo "\$string100は100以上です。";
} else {
    echo "\$string100は100以上ではありません。";
}
?>

</body>
</html>
