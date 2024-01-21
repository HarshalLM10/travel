<?php
$insert = false;
if(isset($_POST['name'])){
// php data objects to add in database
// we gonna use procedural oriented programming language(instead of oops)
    $server = "localhost";
    $username ="root";
    $password = "";

    $con = mysqli_connect($server , $username , $password);


if (!$con) {
    die("Connection to this database failed due to " . mysqli_connect_error());
} else {
    // echo "Connected to the database successfully!";
}


 
    // echo "Succeess Connecting to the Database....";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $desc = $_POST['desc'];
    
    // Rest of your PHP code...
    


    $sql = "INSERT INTO `Trip`.`trip` ( `Name`, `Age`, `Gender`, `email`, `Phone`, `Suggestion`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
    // echo "$sql";

    if($con->query($sql) == true ){
        // echo "Successful inserted ";
        $insert = true;
    }
    else {
        // echo "Error : $sql <br> $con->error";
    }

    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="RCOEM-Nagpur.jpg" alt="RCOEM">
    <div class="container">
        <h1>Welcome to the travel form of RCOEM(MCA) Trip to ujjain</h1>
        <p>Enter your detail and submit your form to conform your participation </p>
        <?php
        if ($insert == true){
        echo "<p class='Submitmsg'>Thanks for submitting your form. We are happy to see you joining us for the Ujjain Trip.</p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any suggestion"></textarea>
            <button class="btn">Submit</button>
        </form>        
    </div>
    <script src="index.js"></script>
    

</body>
</html>