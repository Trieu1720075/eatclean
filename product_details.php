<?php include("connectSQL.php")?>
<?php include("function.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EatClean</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a class="active" href="menu.php">Menu</a></li>
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

        
        <div class="page-title">
            <h1>Food and Drink Menu</h1>
        </div>

        <div class="row" style="width:80%;margin:auto">
            <div class="col-6">
                <h3  style="color: white">Welcome to <span style="color: rgb(0, 255, 55)">EATCLEAN</span>
                </h3>
                <p style="color: white">Name:<span style="color: rgb(0, 255, 55)"> Chicken deep-fry </span> </p>
                <p style="color: white">Price:<span style="color: rgb(0, 255, 55)"> 20 USD </span> </p>
                <p style="color: white">Description: </p>

                <p style="color: white">The menu offers a wide variety of mouth-watering starters. I had the white asparagus accompanied by
                    a mousseline sauce and poached eggs, while my friend tried the zucchini carpaccio served with
                    sundries tomatoes and a mozzarella strudel. They were exquisite. The main course consisted in a
                    risotto with scallop cooked in cream and a cassolette of coley with mussels, which really thrilled
                    us. It all was followed by a delicious apple pie served with a scoop of vanilla ice cream for
                    dessert.</p>
                <button style="background: rgb(0, 255, 55); color: white"href="#">ADD TO CART </button>
            </div>
            <div class="col-6" id="img">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/img-01.jpg" alt="Los Angeles" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="images/img-02.jpg" alt="Chicago" style="width:100%;">
                    </div>
                    
                    <div class="item">
                        <img src="images/img-03.jpg" alt="New york" style="width:100%;">
                    </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p> 
            </div>
            <div class="view" id="review1">
                <i class="fa fa-commenting-o" class="col-12"></i>
                <h3>STEVE FONSI</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p> 
            </div> 
            <div class="view" id="review1">
                <i class="fa fa-commenting-o" class="col-12"></i>
                <h3>STEVE FONSI</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p> 
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
                    <p>The EatClean is a restaurant situated in the heart of a small village between three national forests and close to the horse ́s capital city, Chantilly. It is the favourite hangout place for people from the polo, horse races, and golf world.</p>
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
    <script src="js/menuTab.js"></script>
    <script src="js/controlView.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</html>