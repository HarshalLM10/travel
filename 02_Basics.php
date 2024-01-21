<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise</title>
</head>
<style>
    *{
        margin : 0;
        padding : 0;
        box-sizing : border-box;
    }
    .container{
        max-width:80%;
        background-color: rgb(230, 160, 160);
        margin:auto;
        padding : 23px;
    }
    .big_container{
        background-color: aquamarine;
        max-width: 50%;
        height: 200px;
        margin: auto;
        justify-content: center;
    }
    
</style>
<body>
    <div class="container">
        <h1>Let's learn PHP</h1>
        <p>Your party status is here : </p> <br>
        <?php
        $age = 23;
        if ($age > 18){
            echo "You can go to the party";
        }
        else {
            echo " You can not go to the party";
        }

        $fruit = array("apple", "banana", 666, "date");
        echo "<br>";
        var_dump($fruit);

        function bol(){
            echo "<br> Harshal";
        }
        bol();

        ?>
    
        

    </div>
    <div class="big_container">
        <p>Harshal</p>
    </div>
    
</body>
</html>