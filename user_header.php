<?php
if (isset($message)){
    foreach($message as $message){
        echo '
        <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>

<header class="header">
    <section class="flex">
        <a href="home.php" class="logo"><i class="fa-solid fa-utensils"></i> Khaana</a>
        <nav class="navbar">
            <a class="active" href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="menu.php">menu</a>
            <a href="orders.php">orders</a>
            <a href="contact.php">contact</a>
        </nav>

        <div class="icons">
            <a href="search.php" class="fas fa-search"></a>
            <a href="cart.php" class="fas fa-shopping-cart"></a>
            <a href="user-btn" class="fas fa-user"></a>
            <a href="menu-btn" class="fas fa-bars"></a>
        </div>
</header>