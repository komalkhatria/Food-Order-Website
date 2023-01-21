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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- custom css file link -->
    <link rel="stylesheet" type="text/css" href="style.css">

    
</head>
<body>
    <!-- header section starts -->
    <?php include ('user_header.php') ?>
    <!-- header section ends -->

    <!-- home section starts -->
    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>order online</span>
                        <h3>delicious khaman</h3>
                        <a href="menu.php" class="btn">see menus</a>
                    </div>
                    <div class="image">
                        <img src="images/khaman_dhokla.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>order online</span>
                        <h3>healthy khichdi</h3>
                        <a href="menu.php" class="btn">see menus</a>
                    </div>
                    <div class="image">
                        <img src="images/dal-khichadi.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>order online</span>
                        <h3>tasty halwa</h3>
                        <a href="menu.php" class="btn">see menus</a>
                    </div>
                    <div class="image">
                        <img src="images/suji-halwa.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-pagination"></div>

            </div>

        </div>

    </section>
    <!-- home section ends -->

    <!-- home category section starts -->
    <section class="home-category">

        <h1 class="title">food category</h1>

        <div class="box-container">

            <a href="category.php?category=breakfast" class="box">
                <img src="images/poha.jpg" alt="">
                <h3>breakfast</h3>
            </a>

            <a href="category.php?category=mains" class="box">
                <img src="images/paneer-rice-paratha.jpg" alt="">
                <h3>mains</h3>
            </a>

            <a href="category.php?category=specials" class="box">
                <img src="images/pavbhaji.jpg" alt="">
                <h3>specials</h3>
            </a>

            <a href="category.php?category=desserts" class="box">
                <img src="images/suji-halwa.jpg" alt="">
                <h3>desserts</h3>
            </a>

        </div>

    </section>
    <!-- home category section starts -->





















    <!-- footer section starts -->
    <?php include ('footer.php') ?>
    <!-- footer section ends -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    
    <!-- custom js file link -->
    <script src="script.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".home-slider", {
        effect: "flip",
        grabCursor: true,
        loop: true,
        pagination: {
            clickable: true,
            el: ".swiper-pagination",
        },
      });
    </script>



</body>
</html>