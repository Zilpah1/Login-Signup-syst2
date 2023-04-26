<?php
session_start();

?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN 2</title>
        <link href="https://fonts.googleapis.com/css2?family=Nosifer&family=Secular+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <header>
        <nav>
            <div class ="header">
                <h3>THEE ZILLAH</h3>
                <ul class="menu-main">
                    <div class="header-right">
                    <a class ="active" href="index.php">HOME</a>
                    <a href="#">PRODUCTS</a>
                    <a href="#">CURRENT SALES</a>
                    <a href="#">MEMBER+</a>
                    
                </ul>
            
            <ul class="menu-member">
               <?php
               if (isset($_SESSION["userid"])) {
                ?>
                <a href="#"><?php echo $_SESSION["useruid"];?></a>
                <a class = "active" href="includes/logout.inc.php" class = "header-login-a">LOGOUT</a>
                 <?php
               }
               else
               {
                ?>
                <a href="#">SIGNUP</a>
                <a href="#" class="header-login-a">LOGIN</a>
                <?php
               }
               ?>
            </ul>
            </div>
            </div>
        </nav>
    </header>

    <section class="index-intro">
        <div class="index-intro-bg">
            <div class= "wrapper">
                <div class="index-intro-c1">
                    <div class="video"></div>
                    <p>I am zillah and i love my life</p>
                </div>
                <div class="index-intro-c2">
                    <h2>we make<br>professional<br>gear</h2>
                    <a href="#">FIND OUT GEAR HERE</a>
                </div>
            </div>
        </div>
    </section>
    

    <section class="index-login">
        <div class="row">
            <div class="column">
                <h4>SIGN UP</h4>
                <p>Don't have an account yet? Signup here!</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name = "uid" placeholder="username">
                    <input type="password" name = "pwd" placeholder="Password">
                    <input type="password" name = "pwdrepeat" placeholder="Repeat Password">
                    <input type="text" name = "email" placeholder="Email">
                    <br>
                    <button type="submit" name="submit">SIGN UP</button>
                </form>
            </div>
            <div class="column">
                <h4>LOGIN</h4>
                <p>Don't have an account yet? Signup here!</p>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name = "uid" placeholder="username">
                    <input type="password" name = "pwd" placeholder="Password">
                    <br>
                    <button type="submit" name="submit">LOGIN</button>
                </form>
        </div>
        </div>
    </section>
    </body>
</html>