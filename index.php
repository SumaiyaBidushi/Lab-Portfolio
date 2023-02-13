<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $PersonName = $_POST['name'];
    $Email = $_POST['email'];
    $Massage = $_POST['msg'];


    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "portfolio";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `information` (`name`, `email`, `massage`) VALUES ( '$PersonName', '$Email', '$Massage')";

        $result = mysqli_query($conn, $sql);

        if ($result) {

            echo '<div>
        <p class="result">Your data inserted successfully.</p>
    </div>';
        } else {

            echo ' <div>
            <p class="result">Sorry!!! Try again later..</p>
        </div>';
        }

    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .msg {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            justify-content: center;
            align-items: center;
            background-color: #e5e5e5;
            width: 70%;
            border-radius: 10px;
            padding: 5px;
        }

        .msg-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 20px;

        }

        .message {
            background-color: gray;
            padding: 20px;
        }

        .result {
            position: fixed;
            bottom: 0;
            padding-bottom: 10px;
            color: whitesmoke;
            font-size: 28px;
            text-align: center;
            animation: disappear;
            animation-duration: 7s;
            animation-timing-function: ease;
            animation-iteration-count: 1;
            opacity: 0%;
        }

        @keyframes disappear {
            0% {
                opacity: 0%;
            }

            50% {
                opacity: 100%;
            }

            100% {
                opacity: 0%;

            }
        }

        .input {
            padding: 12px;
            margin: 15px;
            width: 70%;
            border: none;
            outline: none;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }
        .input:focus {
            box-shadow: 0 0 10px white;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#message">Messages</a></li>
            <li><a href="#contact">Contact Me</a></li>
        </ul>
    </nav>

    <!-- home section -->
    <section id="home">
        <div class="main">
            <h1 class="heading">I am <br> Sumaiya Bidushi </h1>
            <button class="btn">
                Hire me
            </button>
        </div>
    </section>

    <!-- about section -->

    <section id="about">
        <h1 class="heading">About Me</h1>
        <div id="pic">

            <div>
                <img src="images/image.jpg" alt="">
            </div>
            <div id="intro">
                <h2>Sumaiya Bidushi</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum corporis quam commodi. Aut porro
                    incidunt quas! Ratione molestiae voluptas animi aspernatur reiciendis ipsum minima placeat
                    perferendis eius vel consequatur magni alias ut, ullam iste sit voluptatibus repudiandae nam
                    assumenda vitae dolores consectetur quam. Aspernatur ex, cupiditate eos velit vel delectus, veniam
                    ipsam dolore quibusdam quod aut nisi voluptatum atque laboriosam ut accusamus totam rerum nam, rem
                    sint autem mollitia qui voluptatem ad? Asperiores unde repellendus in doloribus vitae dicta officiis
                    perferendis autem. Aliquam eius aut iure quos nesciunt, voluptate vero, numquam enim rem
                    voluptatibus quibusdam, voluptas blanditiis asperiores ut harum.</p>
            </div>
        </div>
    </section>

    <!-- portfolio section -->
    <section id="portfolio">
        <h1 class="heading">Portfolio</h1>
        <div class="gallery">
            <img src="images/img-1.jpg" alt="">
            <img src="images/img-2.jpg" alt="">
            <img src="images/img-3.jpg" alt="">
            <img src="images/img-4.jpg" alt="">
            <img src="images/img-5.jpg" alt="">
            <img src="images/img-6.jpg" alt="">
        </div>
    </section>

    <!-- services section -->
    <section id="services">
        <h1 class="heading">Services</h1>
        <div class="row">
            <div class="box">
                <h1 class="heading">Website Design</h1>
                <pl>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, odit. Dolorem, voluptas. Impedit
                    magni consequuntur omnis fugit reiciendis adipisci, non mollitia, sit expedita dolores, obcaecati
                    numquam quia inventore tempora blanditiis at atque accusantium dicta dolorum sapiente pariatur.
                    Iusto, sit voluptas aspernatur adipisci eaque ducimus quaerat sint eveniet est, fugit blanditiis!
                </pl>
            </div>
            <div class="box">
                <h1 class="heading">Web Development</h1>
                <pl>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, odit. Dolorem, voluptas. Impedit
                    magni consequuntur omnis fugit reiciendis adipisci, non mollitia, sit expedita dolores, obcaecati
                    numquam quia inventore tempora blanditiis at atque accusantium dicta dolorum sapiente pariatur.
                    Iusto, sit voluptas aspernatur adipisci eaque ducimus quaerat sint eveniet est, fugit blanditiis!
                </pl>
            </div>
            <div class="box">
                <h1 class="heading">UX/UI <br> Design</h1>
                <pl>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, odit. Dolorem, voluptas. Impedit
                    magni consequuntur omnis fugit reiciendis adipisci, non mollitia, sit expedita dolores, obcaecati
                    numquam quia inventore tempora blanditiis at atque accusantium dicta dolorum sapiente pariatur.
                    Iusto, sit voluptas aspernatur adipisci eaque ducimus quaerat sint eveniet est, fugit blanditiis!
                </pl>
            </div>
        </div>
    </section>

    <!-- contact section -->
    <section id="contact">
        <h1 class="heading">Contact</h1>
        <form action="index.php" class="form" method="post">
            <input type="text" name="name" class="input" placeholder="Enter your name">
            <input type="email" name="email" class="input" placeholder="Enter your email">
            <textarea name="msg" class="input" cols="30" rows="10" placeholder="Enter your Massage"></textarea>
            <input type="submit" value="Send" id="send">
        </form>
    </section>

    <!-- messages section  -->
    <section id="message" class="message">
        <h1 class="heading">Messages</h1>
        <div>
            <?php

            // Connecting to the Database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "portfolio";

            // Create a connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM information";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="msg-container">
                <div class="msg">
                    <h2>Name: ' . $row["name"] . '</h2>
                    <h4>Email: ' . $row["email"] . '</h4>
                    <p>Message: ' . $row["massage"] . '</p>
                    
                </div>
            </div>';
                }

            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </div>
    </section>


</body>

</html>