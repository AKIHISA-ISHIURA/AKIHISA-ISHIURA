<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskBranch</title>
</head>
<body>
<?php 

$case = "1";

    switch ($case) {
        case true:
            echo 'bool'; 
            break;

        case 1:
            echo 'int'; 
            break;

        case '1':
            echo 'string'; 
            break;

        default:
            echo 'other';
            
    }
    
    ?>


<p><?php echo "boolと表示される。"; ?></p>


<?php 

$case = "1";

    switch ($case) {
        case $case === true:
            echo 'bool'; 
            break;

        case $case === 1:
            echo 'int'; 
            break;

        case $case === '1':
            echo 'string'; 
            break;

        default:
            echo 'other';
            
    }
    
    ?>

<p><?php echo "stringと表示される。"; ?></p>



</body>

</html>