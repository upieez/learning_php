<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>

    <?php
        $max_width = 980;

        // MAX_WIDTH = 980 does not work
        
        // Have to use quotes until you define it
        define("MAX_WIDTH", 980);

        echo MAX_WIDTH;
    ?>
    <br />
    <?php // can't change the value
        //  MAX_WIDTH += 1; Does not work
        //  echo MAX_WIDTH;
        // Will only use a constant for a fixed location such as img file url...
    ?>
    <?php // can't even redefine it
    define("MAX_WIDTH", 981);
    echo MAX_WIDTH;
    ?>
    
</body>
</html>