<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP website </title>
</head>
<body>
<!-- basic php -->
    <div class="container">
        This is my PHP website <br>
        <?php
        echo "This is written in PHP";
        $hars = 65;
        $aman = 35;
        $g = "sum";
        echo "<br>";
        echo $hars;
        echo "<br>";
        echo $aman;
        echo "<br>";// new line using HTML
        echo $g;
        echo "  =  ";
        echo $hars + $aman;
        echo "<br>";


        echo "value of 1 == 4 is "; 
        echo var_dump(1 == 4);
        echo "<br>";

        $aman++;
        echo $aman;
        // echo $aman--;
        // echo --$aman ;
        // echo ++$aman ;

        echo "<br>";
        $mtvar = (false xor true);
        echo var_dump($mtvar);


        define("PI",3.14);  // const can not be changed
        echo PI;
        ?>
    </div>
   
 







</body>
</html>