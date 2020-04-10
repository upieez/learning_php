<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Default Argument Values</title>
</head>
<body>

    <?php
        // The ones that are mandatory needs to be first while the optional ones are at the back

        function paint($color,$room='office'){
            return "The color of the {$room} is {$color}.<br />";
        }

        // echo paint();
        // echo paint('bedroom', null); // if the argument is null, it will not become the default. It will be set as nothing instead
        echo paint('bedroom');
        echo paint('red');
    ?>
    
</body>
</html>