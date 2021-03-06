<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EatClean</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="reservation.php">Reservation</a></li>
                        <li><a class="active" href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
						<li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <div id="behind"></div>
        </div>  
        <div class="page-title">
            <h1>Blog</h1>
        </div>    
        
        <div id="blog">
            <h3>Blog</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
            <div class="row" style="width:80%;margin:auto">
                <div class="col-8">
                    <img class="post-img" src="./images/inner-blog-img.jpg">
                    <h4>Blog name</h4>
                    <p>Posted by: <span>Trieu Nguyen</span> | Time: <span>23 January 2020</span></p>
                    <p>As you enter the place you are welcomed by a magnificent setting, a delightful marriage of antique
                        cut stones and the luxuries of modernity. Sitting in any table you have a wonderful view of the
                        workshop-like kitchen where you can see the chefs working. For those who do not book a table and are
                        waiting, there is a cosy lounge with aged leather armchairs and pictures of polo players displayed
                        on the walls.</p>                    
                    <p class="blog-highlight">We are so fortunate to have this place just a few minutes drive away from home. Food is stunning, both the tapas and downstairs restaurant. Cocktails wow, wine great and lovely selection of beers. Love this place and will continue to visit</p>
                    <p>Excellent food. Menu is extensive and seasonal to a particularly high standard. Definitely fine dining. It can be expensive but worth it and they do different deals on different nights so it’s worth checking them out before you book. Highly recommended.</p>
                </div>
                <div class="col-4">
                    <h4>Search</h4>
                    <input type="search" placeholder="Search blog">
                    <button><i class="fa fa-search"></i></button>
                    <ul>
                        <h4>Categories</h4>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Pizza</a></li>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Drink</a></li>
                        <li><a href="#">Dinner</a></li>
                        <li><a href="#">Lunch</a></li>
                    </ul>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</html>