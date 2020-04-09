<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
    <body>
        <?php

        $numbers = array(4,8,15,16,23,42);
        echo $numbers[0];

        ?>
        <br />
        <?php $mixed = array(6, "fox", "dog", array("x","y","z")); ?>
        <?php echo $mixed[3][0] ?>
        <br />

        <?php echo $mixed[3][0] ?><br />

        <!-- Put things into the array -->
        <?php $mixed[2] = "cat"; ?><br />
        <?php $mixed[4] = "mouse"; ?><br />
        <?php $mixed[] = "horse"; ?><br />

        <!-- Good for debugging print readable nice way to debug to see what is inside our array -->
        <pre>
        <?php echo print_r($mixed); ?>
        </pre>

        <?php 
            // PHP 5.4 added the short array syntax.
            $array = [1,2,3];
            echo "new Array syntax: $array[1]";
        ?>
    </body>
</html>