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
                        <li><a class="active" href="reservation.php">Reservation</a></li>
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
            <h1>Reservation</h1>
        </div>  
        
        <div id="reservation">
            <h3>Reservation</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
            <div class="row" style="width:80%;margin:auto">
                <form>
                    <div class="col-6">
                        <h6>Book a table</h6>
                        <input type="date" placeholder="Enter the date*">
                        <select class="hour">
                            <option>1:00</option>
                            <option>2:00</option>
                            <option>3:00</option>
                            <option>4:00</option>
                            <option>5:00</option>
                            <option>6:00</option>
                            <option>7:00</option>
                            <option>9:00</option>
                            <option>10:00</option>
                            <option>11:00</option>
                            <option>0:00</option>
                        </select>
                        <select class="hour" style="float:right">
                            <option>AM</option>
                            <option>PM</option>
                        </select>
                        <select>
                            <option>Select number of slot*</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <h6>Customer Infomation</h6>
                        <input type="text" placeholder="Your Name">
                        <input type="text" placeholder="Your Mail">
                        <input type="tel" placeholder="Your Phone">
                    </div>
                    <div class="col-12">
                        <input type="submit" value="BOOK TABLE">
                    </div>
                </form>    
            </div>
        </div>
        <div id="review">
            <h1>Customer Review</h1>
            <div class="view active" id="review1">
                <i class="fa fa-commenting-o" class="col-12"></i>
                <h3>Im GrayBack</h3>
                <p>Thức ăn rất ngon, không gian đẹp! Nice restaurant!</p> 
            </div>
            <div class="view" id="review1">
                <i class="fa fa-commenting-o" class="col-12"></i>
                <h3>Lucifer</h3>
                <p>The food is so good but drinks menu is few. I think we should add more......</p> 
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
    <script src="js/controlView.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</html>