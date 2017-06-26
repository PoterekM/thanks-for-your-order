<?php
    $name = $_GET["name"];
    $address = $_GET["address"];
    $city = $_GET["city"];
?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Create a greeting!</title>
</head>
<body>
    <div class="container">
        <h1>Most excellent!</h1>
        <div class="well">
            <p>Thank you, <?php echo $name; ?></p>
            <p>We will deliver this to you at: </p>
            <p><?php echo $address; ?></p>
            <p><?php echo $city; ?></p>
            <p>A week from today!</p>

        </div>
    </div>
</body>
</html>
