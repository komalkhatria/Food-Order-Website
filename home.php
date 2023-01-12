<?php
    include('connect.php');

    session_start();
    if (isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }
    else{
        $user_id = '';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" type="text/css" href="style.css">

    
</head>
<body>
    <!-- header section starts -->
    <?php include ('user_header.php') ?>
    <!-- header section ends -->



















    <!-- footer section starts -->
    <?php include ('footer.php') ?>
    <!-- footer section ends -->

    
    <!-- custom js file link -->
    <script src="script.js"></script>



</body>
</html>