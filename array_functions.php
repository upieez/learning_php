<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
    
    <?php // $numbers = array(8,23,15,42,16,4) ?>
    <?php $numbers = [8,23,15,42,16,4]; ?>

    Count:          <?php echo count($numbers); ?><br />
    Min value:      <?php echo min($numbers); ?><br />
    Max value:      <?php echo max($numbers); ?><br />
    <br />
    <pre>
    <!-- Destructive function -->
    Sort:           <?php sort($numbers); print_r($numbers); ?><br />
    Reverse Sort:   <?php rsort($numbers); print_r($numbers); ?><br />
    </pre>
    <br />
    <!-- Combine value together to get a string -->
    Implode:        <?php echo $num_string = implode (" * ", $numbers); ?><br />

    <!-- Takes a string and everytime it finds " * " it will use it as a divider to split it into a new object in the array -->
    Explode:        <?php print_r(explode(" * ", $num_string)); ?><br />
    <br />

    15 in array?: <?php echo in_array(15, $numbers); // returns T/F ?><br />
    19 in array?: <?php echo in_array(19, $numbers); // returns T/F ?><br />

</body>
</html>