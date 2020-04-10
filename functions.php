<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>

    <?php // Custom functions
        // function names are case insensitive

        function say_hello(){
            echo "Hello World! <br />";
        }
        say_hello();

        function say_hello_to($word){
            echo "Hello {$word}! <br />";
        }

        say_hello_to('Sam!');
        say_hello_to('Everyone!');

        say_hello_loudly(); // Bad practice to call functions before defining it

        function say_hello_loudly(){
            echo "<h1><strong>HELLO WORLD!</strong></h1><br />";
        }
    ?>
    <br />
    <?php
        function say_hello_me($word){
            echo "Hello {$word}!<br />";
        }

        $name = 'Samuel';
        say_hello_me($name);
    ?>
    <br />
    <?php
        function better_hello($greeting, $target, $punct){
            echo $greeting . " " . $target . $punct . "<br />";
        }

        better_hello('Hello', $name, '!');
        better_hello('Greetings', $name, '!!!!!!!!');
        better_hello('Greetings', $name, null);
        // better_hello('Greetings', $name); Does not work you need to have the arguments inside even if it is nothing
    ?>
    <br />
    <?php // Functions return values
    
    function add($val1,$val2){
        $sum = $val1 + $val2;
        // echo $sum; is inflexibile
        return $sum; // best practice is to always return a value. Explicit say what this function says even if it's null or the original input. Always want to return something from the functions
        // Will exit after the return and not run anything
    }

    $result1 = add(2,3);
    $result2 = add(5,$result1);
    echo $result2 . "<br />";
    ?>
    <br />
    <?php // Chinese Zodiac
        function chinese_zodiac($year){
            switch (($year - 4) % 12) {
                case 0: return "Rat"; 
                case 1: return "Ox"; 
                case 2: return "Tiger"; 
                case 3: return "Rabbit"; 
                case 4: return "Dragon"; 
                case 5: return "Snake"; 
                case 6: return "Horse"; 
                case 7: return "Goat"; 
                case 8: return "Monkey"; 
                case 9: return "Rooster"; 
                case 10: return "Dog"; 
                case 11: return "Pig";
            }
        }
        $zodiac = chinese_zodiac(2020);
        echo "2020 is the year of the {$zodiac}. <br />";
        echo "2020 is the year of the " . chinese_zodiac(2020) . ". <br />"; /* Bad practice to do this. Always better to have a function stored in a variable and also have echo out of functions */ 
    ?>
    <br />
    <?php // Functions multiple return

        function add_subt($val1, $val2){
            $add = $val1 + $val2;
            $subt = $val1 - $val2;
            // return $add; Remember, PHP only returns once. To return multiple, store it in an array
            return array($add, $subt);
        }

        $result_array = add_subt(10,5);
        echo "Add: " . $result_array[0] . "<br />";
        echo "Subt: " . $result_array[1] . "<br />";

        // Better way instead of the one above
        list($add_result, $subt_result) = add_subt(20,7);
        echo "Add: " . $add_result . "<br />";
        echo "Subt: " . $subt_result . "<br />";
    ?>
    
</body>
</html>