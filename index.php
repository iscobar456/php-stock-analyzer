<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    error_reporting(E_ALL);
    
    require 'utilities/load_filings.php';

    $arr = array(
        0 => '',
        1 => 'a',
        2 => 'b',
        3 => 'c',
        4 => 'd',
    );

    $arr[] = 'e';
    $arr[] = 'f';

    echo $arr[1] . $arr[2];
    echo $arr[3];
    echo $arr[60];

    ?>


</body>
</html>