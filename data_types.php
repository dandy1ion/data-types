<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Data Types</title>
    </head>
    <body>
        Part 1
        <br />
        <?php
            #echo outputs to page
            echo "Twinkle, Twinkle little star.";
        ?>
        <br />
        <?php
            #define variables
            $bright = "Twinkle";
            $light = "star.";
            #use concatenation operator to make sentence with variables.
            $phrase = $bright . ", Twinkle little " . $light;
            echo $phrase;
        ?>
        <br />
        <?php
            #define variables 
            $bright = "Butterfly";
            $light = "bella.";
            #use concatenation operator to make sentence with variables.
            $phrase = $bright . ", Twinkle little " . $light;
            echo $phrase;
        ?>
        <br />
        <br />
        Part 2
        <br />
        <?php
            #define variables
            $x = 10;
            $y = 7;
            #use echo to show math done with arithmetic operator + (addition)
            $together = $x + $y;
            echo "{$x} + {$y} = {$together}";
        ?>
        <br />
        <?php
            #use echo to show math done with arithmetic operator - (subtraction)
            $withOut = $x - $y;
            echo "{$x} - {$y} = {$withOut}";
        ?>
        <br />
        <?php
            #use echo to show math done with arithmetic operator * (multiplication)
            $multiple = $x * $y;
            echo "{$x} * {$y} = {$multiple}";
        ?>
        <br />
        <?php
            #use echo to show math done with arithmetic operator / (division)
            $into = $x / $y;
            echo "{$x} / {$y} = {$into}";
        ?>
        <br />
        <?php
            #use echo to show math done with arithmetic operator % (modulus)
            $leftover = $x % $y;
            echo "{$x} % {$y} = {$leftover}";
        ?>
        <br />
        <br />
        Part 3
        <br />
        <?php
            #define variable show value of variable
            $variable = 8;
            echo "Value is now {$variable}" . ".";
        ?>
        <br />
        <?php
            #use assignment operator to add 2 to the variable, show new value of variable
            $variable += 2;
            echo "Value is now {$variable}" . ".";
        ?>
        <br />
        <?php
            #use assignment operator to subtract 4 from the variable, show new value of variable
            $variable -= 4;
            echo "Value is now {$variable}" . ".";
        ?>
        <br />
        <?php
            #use assignment operator to multiply the variable by 5, show new value of variable
            $variable *= 5;
            echo "Value is now {$variable}" . ".";
        ?>
        <br />
        <?php
            #use assignment operator to devide the variable by 3, show new value of variable
            $variable /= 3;
            echo "Value is now {$variable}" . ".";
        ?>
        <br />
        <?php
            #use assignment operator to increment the variable by 1, show new value of variable
            $variable ++;
            echo "Value is now {$variable}" . ".";
        ?>
        <br />
        <?php
            #use assignment operator to decrement the variable by 1, show new value of variable
            $variable --;
            echo "Value is now {$variable}" . ".";
        ?>
        <br />
        <br />
        Part 4
        <br />
        <?php
            #using single quotes, the concatentation operator, and a variable to output a sentence.
            $around = "around";
            echo 'What goes ' . $around . ' comes ' . $around . '.';
        ?>
    </body>
</html>