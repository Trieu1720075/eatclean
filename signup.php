<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EatClean</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
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
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a  class="active" href="login.php">Login</a></li>
                    </ul>
                </div>
            </nav>
        </header>
		
	
		
		
        <div id="signup">
			<div class="container-fluid">
					<div class="signup-form-wrap"><!--signup form wrap-->
						<div class="signup-form">
							<div class="row justify-content-center">
								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 row-container justify-content-center">
									<h2> Signup </h1>
									<div class="form-group">
										<div class="form-row">
											<div class="form-group col-md-6">
												<input type="text" class="form-control" id="firstNameSignUp" placeholder="First name">
											</div>
											<div class="form-group col-md-6">
												<input type="text" class="form-control" id="lastNameSignUp" placeholder="Last name">
											</div>
										</div>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" id="email" placeholder="Enter email">
									</div>
									<div class="form-group">
										<input style="width:100%;" type="password" class="form-control" id="pass" placeholder="Enter password">
									</div>
									
									<button type="submit" class="btn btn-success btn-block my-3">Signup</button>
									<div class="card-footer">
										<div class="d-flex justify-content-center links">
											<p>Already had an account? <a href="login.html">Log in</a></p>
										</div>
										
									</div>
								</div>
								
							</div>
						</div>	
					</div><!--endsignupformwrap-->
			</div>
		</div><!----endlogin----->
		
		
    </body>
	
    <footer>
        <div class="footer-content">
            <div class="row">
                <div class="col-md-4">
                    <h3>Opening hours</h3>
                    <p>Monday: Closed</br></br>
                        Tue-Wed : 9:Am - 10PM</br></br>
                        Thu-Fri : 9:Am - 10PM
                    </p>
                </div>
    
                <div class="col-md-4">
                    <h3>Contact Information</h3>
                    <p>
                        <i class="fa fa-phone"></i> 0123 456 789<br /><br />
                        <i class="fa fa-envelope"></i> eatclean@hcmut.edu.vn<br /><br />
                        <i class="fa fa-map-marker"></i> 5/6/11 Ly Thuong Kiet street, 10 Distince
                    </p>
                </div>
    
                <div class="col-md-4">
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
	<script src="js/slideShow.js"></script>
	<script src="js/switchForm.js"></script>
	<script src="js/controlView.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</html>