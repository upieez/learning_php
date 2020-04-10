<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope</title>
</head>
<body>

    <?php // local scope and global scope are two seperate entity even if they share the same variable name

        $bar = 'outside'; // global scope

        function foo(){
            global $bar; // use this with caution and use it sparingly
            if (isset($bar)){
                echo "foo: " . $bar . "<br />";
            }
            $bar = 'inside'; // local scope
        }

        echo "1: " . $bar . "<br />";
        foo();
        echo "2: " . $bar . "<br />";
    
    ?>
    
</body>
</html>