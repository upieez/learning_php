<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <ul>
        <?php // While loop 
            $count = 0;
            while ($count <= 10){
                if ($count % 2 === 0 ){
                    echo "<li>$count is EVEN</li>";
                } else 
                    echo "<li>$count is ODD</li>";
                    $count++;
            }
        ?>
        <br />
        <?php // For loop 
            for ($x = 0; $x <= 10; $x++){
                echo "$x <br />";
            }
        ?>
        <br />
        <?php // For each loop
            // foreach ($array as $value)
            // statement;
            $ages = [4,8,15,16,23,42];
            foreach ($ages as $age){
                echo "Age: {$age}<br />";
            }
        ?>
    </ul>
        <br />
        <?php // For each loop for associative arrays (objects in javascript)
            /* foreach ($array as $key => $value) {
                statement;}*/
            
            $person = array(
                "first_name" => "Samuel",
                "last_name" => "Huang",
                "address" => "79 Anson Rd",
                "city" => "Tanjong Pagar",
                "state" => "SG",
                "zip_code" => "90279"
            );

            foreach ($person as $attribute => $data){
                // ucwords = Uppercase Words
                // str_replace = String replace (the word you have, the word you want, from where) 
                $attr_nice = ucwords(str_replace("_", " ", $attribute));
                echo "{$attr_nice}: {$data}<br />";
            }
        ?>
        <br />
        <?php // Another example of foreach for associative arrays
        $prices = array(
            "Brand New Computer" => 2000,
            "1 month of Lynda.com" => 25,
            "Learning PHP" => null
        );
        
        foreach($prices as $item => $price){
            echo "${item}: ";
            if (is_int($price)){
                echo "$" . $price;
            } else {
                echo "priceless";
            }
            echo "<br />";
        }
        ?>
        <br />
        <?php // Continue (Makes code more efficient)
            // Makes our code clearer to read and easier to understand

            for ($count = 0; $count <= 10; $count++){
                if ($count === 5) {
                    continue; // ignores the bottom
                }
                echo $count . ", ";
                // continue; has a continue every end of the loop but we don't need to write that
            }
            
            // With while loops and continue it is very important to know that you need to increment the count before the continue happens if it is inside the conditional statement

            $count = 0;
            while ($count <= 10){
                if ($count === 5){
                    $count++;
                    continue;
                }
                echo $count . ", ";
                $count++;
            }
        ?>
        <br />
        <?php // loop inside a loop with continue
            // Continue will always have a default of 1.

            for ($i =0; $i<= 5; $i++){
                if ($i % 2 === 0) { continue(1); }
                for ($k=0; $k<= 5; $k++){
                    if ($k === 3) {continue(2); } 
                    // With a two, it will know to continue the parent loop and not just the first loop
                    echo $i . "-" . $k . "<br />";
                }
            }
        
        ?>

</body>
</html>