<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <!-- Uses key-value pair like JS Objects-->
    <?php

    $assoc = array("first_name" => "Samuel", "last_name" => "Huang");
    echo $assoc["first_name"];
    ?>
    <br />
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />
    <?php $numbers = array(4,8,15,16,23,42); ?>
    <?php $numbers = array(0 => 4, 1 => 2, 2 => 7, 3 => 16, 4 => 23 , 5 => 42); ?>
    <?php echo $numbers[2]; ?>
    
</body>
</html>