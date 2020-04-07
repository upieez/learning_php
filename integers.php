<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integers</title>
</head>
<body>

    <?php 
    $var1 = 3;
    $var2 = 4;

    ?>

    Basic Maths: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br />
    <br />
    Absolute value:     <?php echo abs(0 - 300); // no negative ?>          <br />
    Exponential:        <?php echo pow(2,8); ?>                             <br />
    Square root:        <?php echo sqrt(100); ?>                            <br />
    Modulo:             <?php echo fmod(20,7); ?>                           <br />
    Random:             <?php echo rand(); ?>                               <br />
    Random (min,max):   <?php echo rand(1,100); ?>                          <br />
    <br />
    += : <?php $var2 += 4; echo $var2; ?><br />
    -= : <?php $var2 -= 5; echo $var2; ?><br />
    *= : <?php $var2 *= 6; echo $var2; ?><br />
    /= : <?php $var2 /= 7; echo $var2; ?><br />
    <br />
    Increment: <?php $var2++; echo $var2; ?><br />
    Decrement: <?php $var2--; echo $var2; ?><br />
    <br />
    <?php

    // Should not rely on PHP to convert strings into integers for me. Work on one or the other
    echo 1 + "9 houses";

    ?>
    
</body>
</html>