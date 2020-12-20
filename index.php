<?php include("connectSQL.php")?>
<?php include("function.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>EatClean</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <header>
        <nav>
            <div class="col-1"><a href="index.php"><img src="images/0.png" alt="logo"
                        style="width: 5em; height: 5em;margin-left: 20px;"></a> </div>
            <div class="col-11">
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
                <a href="index.php"></a>
                <ul>
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="reservation.php">Reservation</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
					<li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="behind">
    </div>

    <div id="slide">
        <div class="row">
            <div class="col-7">
                <h1 style="color: rgb(0, 255, 55);">Welcome to EAT<span style="color:#22242b">CLEAN</span></h1>
                <p style="color: white;" id="intro">Looking for a good dinner, why don't choose our dinner with many
                    delicious food and drink
                    ?</p>
                <button>Reservation</button>
            </div>
            
            <div class="col-12">
                <button class="btn-slides active" id="btn1" value="1"></button>
                <button class="btn-slides" id="btn2" value="2"></button>
                <button class="btn-slides" id="btn3" value="3"></button>
            </div>
        </div>
    </div>


    <div id="story">
        <div class="row" style="width:80%;margin:auto">
            <div class="col-6">
                <h3>Welcome to <span style="color: rgb(0, 255, 55)">EAT<span style="color:#22242b">CLEAN</span></span>
                </h3>
                <p>As you enter the place you are welcomed by a magnificent setting, a delightful marriage of antique
                    cut stones and the luxuries of modernity. Sitting in any table you have a wonderful view of the
                    workshop-like kitchen where you can see the chefs working. For those who do not book a table and are
                    waiting, there is a cosy lounge with aged leather armchairs and pictures of polo players displayed
                    on the walls.</p>

                <p>The menu offers a wide variety of mouth-watering starters. I had the white asparagus accompanied by
                    a mousseline sauce and poached eggs, while my friend tried the zucchini carpaccio served with
                    sundries tomatoes and a mozzarella strudel. They were exquisite. The main course consisted in a
                    risotto with scallop cooked in cream and a cassolette of coley with mussels, which really thrilled
                    us. It all was followed by a delicious apple pie served with a scoop of vanilla ice cream for
                    dessert.</p>
                <button href="#">RESERVATION</button>
            </div>
            <div class="col-6" id="img">
                <img id="front-img" src="images/about-img.jpg">

            </div>
        </div>
    </div>
    <div id="qt">
        <h3>" If you're not the one cooking, stay out of the way and compliment the chef. "</h3>
        <h4>Michael Strahan</h4>
    </div>
    <div id="review">
        <h1>Customer Review</h1>
        <div class="view active" id="review1">
            <i class="fa fa-commenting-o" class="col-12"></i>
            <h3>STEVE FONSI</h3>
            <p>Excellent food. Menu is extensive and seasonal to a particularly high standard. Definitely fine dining. It can be expensive but worth it and they do different deals on different nights so it’s worth checking them out before you book. Highly recommended.</p>
        </div>
        <div class="view" id="review1">
            <i class="fa fa-commenting-o" class="col-12"></i>
            <h3>STEVE FONSI</h3>
            <p>Excellent food. Menu is extensive and seasonal to a particularly high standard. Definitely fine dining. It can be expensive but worth it and they do different deals on different nights so it’s worth checking them out before you book. Highly recommended.</p>
        </div>
        <div class="view" id="review1">
            <i class="fa fa-commenting-o" class="col-12"></i>
            <h3>STEVE FONSI</h3>
            <p>We are so fortunate to have this place just a few minutes drive away from home. Food is stunning, both the tapas and downstairs restaurant. Cocktails wow, wine great and lovely selection of beers. Love this place and will continue to visit</p>
        </div>
        <div id="control" class="row">
            <div class="col-6" id="prev-btn-div">
                <button id="prev-btn"><i class="fa fa-arrow-left"></i></button>
            </div>
            <div class="col-6" id="next-btn-div">
                <button id="next-btn"><i class="fa fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</body>
<footer>
    <div class="footer-content">
        <div class="row">
            <div class="col-4">
                <h3>Opening hours</h3>
                <p>Monday: Closed</br></br>
                    Tue-Wed : 9:Am - 10PM</br></br>
                    Thu-Fri : 9:Am - 10PM
                </p>
            </div>

            <div class="col-4">
                <h3>Contact Information</h3>
                <p>
                    <i class="fa fa-phone"></i> 0123 456 789<br /><br />
                    <i class="fa fa-envelope"></i> eatclean@hcmut.edu.vn<br /><br />
                    <i class="fa fa-map-marker"></i> 5/6/11 Ly Thuong Kiet street, 10 Distince
                </p>
            </div>

            <div class="col-4">
                <h3>About us</h3>
                <p>The EatClean is a restaurant situated in the heart of a small village between three national forests
                    and close to the horse ́capital city, Chantilly. It is the favourite hangout place for people from
                    the polo, horse races, and golf world.</p>
            </div>

        </div>
        <div id="social">
            <h3 style="color: white;">Following us on</h3>
            <i class="fa fa-facebook-square"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
        </div>
    </div>
</footer>
<script src="js/slideShow.js"></script>
<script src="js/switchForm.js"></script>
<script src="js/controlView.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</html>