<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<body>

    <?php

    $first = "The quick brown fox";
    $second = " jumped over the lazy dog.";

    $third = $first;
    $third .= $second;
    echo $third;

    ?>
    <br />
    Lowercase: <?php echo strtolower($third); ?><br />
    Uppercase: <?php echo strtoupper($third); ?><br />
    Uppercase first: <?php echo ucfirst($third); ?><br />
    Uppercase words: <?php echo ucwords($third); ?><br />
    <br />
    Length: <?php echo strlen($third); ?><br />
    Trim: <?php echo "A" . trim(" B C D ") . "E"; // Takes our the white space ?><br /> 
    Find: <?php echo strstr($third, "brown"); // Find the word "brown" and everything that follows after that ?><br />
    Replace by string: <?php echo str_replace("quick", "super-fast", $third); // Replace quick with super-fast inside $third ?><br />
    <br />
    Repeat: <?php echo str_repeat($third, 2); // Will repeat the string 2 times ?><br />
    Make substring: <?php echo substr($third, 5 ,10); //Going to make a substring from the third starting from the fifth position to the tenth position of the string (includes the white spaces as well)?><br />
    Find position: <?php echo strpos($third, "brown"); // Tell us the position of brown ?><br />
    Find character: <?php echo strchr($third, "z"); // Where is the character z is located and will return a number telling us where it is located ?><br />
    
</body>
</html>