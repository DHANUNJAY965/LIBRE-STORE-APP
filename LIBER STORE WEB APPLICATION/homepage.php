<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Webpage Design</title>
    <link rel="stylesheet" href="home11.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">

            <form action="homepage.php" method="post">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="https://www.facebook.com/" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input id="myInput"  type="text" name="name" placeholder="Name" >
                <input id="myInput"  type="email" name="email" placeholder="Email">
                <input id="myInput" type="password" name="password" placeholder="Password">
                <button>SignUp</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="homesignin.php" method="post">
                <h1>Sign In</h1>
                <div class="social-container">
                    <a href="https://www.facebook.com/" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <a href="#">Forgot Your Password</a>

                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login </p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
        <div class="close">CLOSE</div>
    </div>



    <!-- added here -->
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">LIBER</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#home " class="active">HOME</a></li>
                    <li><a href="#about1">ABOUT</a></li>
                    <li><a href="#cps1">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div>
        <div class="content">
            <h1>SELL & <br><span>PURCHASE</span> <br>BOOKS</h1>
            <p class="par" style="font-size:large;">Liber is a versatile online platform enabling users to effortlessly buy and sell both old and new books <br>
             Discover literary treasures or declutter your collection with ease on Liber.
            </p>

            <button class="cn"><a href="#">JOIN US</a></button>
        </div>
    </div>
    <div class="about" id="about1">
        <h1 style="color: rgb(68, 184, 172);">ABOUT</h1>

        <div class="about-content">
            <h3 class="about-content1" style="color: pink;">Libre, the ultimate destination for book enthusiasts, is a haven where the love for reading meets affordability. We are dedicated to making the joy of owning books accessible to everyone. At Libre, you'll discover an extensive collection of both old and new books, all priced to be cost-efficient.

Our mission is simple: to promote a culture of reading by removing financial barriers. Whether you're an avid reader looking to expand your library or a student seeking affordable textbooks, Libre is your go-to destination. We believe that knowledge should be within reach, and our prices reflect this commitment.

Libre is not just a store; it's a community of book lovers who appreciate the value of a good read without breaking the bank. We offer competitive buyback options for your old books, ensuring that your literary treasures continue to enrich the lives of others.

Our knowledgeable and passionate staff is here to assist you in finding the perfect book for your tastes and needs, all while respecting your budget. Libre stands as a testament to the idea that the written word should be celebrated and shared by all, regardless of financial constraints. Join us at Libre, where affordability meets the magic of literature, and embark on a journey through the world of books without worrying about the cost.

            </h3>
        </div>
        <div class="copyrightsocial" id="cps1">
            <div class="copyright">
                <p>&#169; 2023 LIBER. All Rights Reserved</p>
            </div>
            <div class="socialicons">
                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://www.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });
        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });

        let btn = document.querySelector('.cn');
        let popup = document.querySelector('.container');
        btn.addEventListener('click', () => {
            popup.classList.toggle('tba');
        });
    </script>
</body>

</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dhanudatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed");
}

$name = isset($_POST["name"]) ? $_POST["name"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";
$salt = "dhanudatabase";
$password_encrypted = sha1($password . $salt);

if (!empty($name) && !empty($email) && !empty($password)) {
    $sql = "INSERT INTO signup (name, email, password) 
            VALUES ('$name', '$email', '$password_encrypted')";

    if ($conn->query($sql) === TRUE) {
        ?>
        <script>
            alert('YOU HAVE REGISTRED SUCCESSFULLY TO USE LIBER');
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('RESGISTER NOT SUCCESSFULL PLEASE ENTER THE REQUIRED FIELDS CORRECTLY');
        </script>
        <?php
    }
} else {
    ?>
    <script>
        alert('By Clicking on Join Us Please do Login or signup');
    </script>
    <?php
}


?>
