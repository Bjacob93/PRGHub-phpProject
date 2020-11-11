<?php
 session_start();
 include 'includes/dbh.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPGHub</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <header>    
        <nav>
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <?php
                        if (isset($_SESSION["useruid"])) {
                            echo "<li><a href='Charms.php'>Charms</a></li>";
                            echo "<li> <a href='addCharm.php'>Add Charm</a></li>";
                            echo "<li> <a href='profile.php'>Sign Up</a></li>";
                            echo "<li> <a href='includes/logout.inc.php'>logout</a></li>";
                        }else{
                            echo "<li> <a href='signup.php'>Sign Up</a></li>";
                            echo "<li> <a href='login.php'>login</a></li>";
                        }
                    ?>     
                </ul>
            </div>
        </nav>       
    </header>

    <div class="wrapper">