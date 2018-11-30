<?php 
include 'database.php';
session_start();
$email= $_POST['email'];
$password =$_POST['password'];
$rows=$db->getRows("select * from user ",array());
if($rows[0][3] == $email)
{
	if($rows[0][4] == $password)
		$_SESSION['logged_in'] = $email;

}
else



?>
<!DOCTYPE html>
<html>
<head>
	<title>My Gym</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.min.js"></script> 
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon"href="imgs/icon.jpg">
</head>
<body>
	
	<div class="vn">
    		<video width="100%"height="100%"  autoplay loop muted preload="auto"  >
				<source src="video/I WILL NOT STOP.ogg" type="video/ogg">
				<source src="video/I WILL NOT STOP.mp4" type="video/mp4">
				<source src="video/I WILL NOT STOP.mkv" type="video/mp4">
				<source src="video/I WILL NOT STOP.mkv" type="video/mp4">
				

			</video>
					<div class="container">
						<div class="col-em-6 de">
							<h1 style="color: #7D1806">  </h1>
				<h2> the official web site</h2>
				<h3> start wit you from nothing to the top <br></h4>
				<h3 class="ah"> actually you can say from zero to hero</h3>
				
				
						</div>
						
					</div>
				
	</div>		
			<div>
			<nav class="navbar navbar-default nn">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ">
       <li><a href="#">home</a></li>
       <li><a href="html/tools.php">tools</a></li>
       <li><a href="html/Supplements.<?php  ?>">Supplements</a></li>
       <li><i class="fa fa-dumbbell"></i></li>

       <i class="fas fa-dumbbell"></i>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">session <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="html/private session.php"> private session</a></li>
            <li><a href="html/group session.php">group session</a></li>
            <li><a href="html/workout session.php">workout session</a></li>           
            <li><a href="html/pregnant session.php">pregnant session</a></li>
            
          </ul>
          
        </li>

      </ul>
      <div class="ig">
					my gym
					<br>
					<i class="icon-strikethrough icon"></i>
				</div>
      
      <ul class="nav navbar-nav navbar-right">
      	<form class="navbar-form navbar-left">
        <div class="form-group ss">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default subserch">Submit</button>
      </form>
      
        
        <li><a href="html/regist.php" target="_black">regist</a></li>
        <li><a href="html/login.php" target="_black"class="btn btn-primary login" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">login</a></li>
        <li><i class="fa fa-dumbbell aa"></i></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  
			
  </div><!-- /.container-fluid -->
</nav>
<div>	
</div>			
</div>
<div class="header1">
        <div class="row">
        	<div class="col-md-3"></div>
        	<div class="col-md-6 header2">
	            <h1>welcom to my gym web site</h1>
				<!--<div class="im"><img src="imgs/21.jpg" class="imgh"></div>-->
				<h3>her you can to be hero from zero</h3>
				<h4>let's take around in the site</h4>
				<a href="#sss"><i class="fa fa-arrow-circle-down arrow"></i></a>
        	</div>
        	<div class="col-md-3"></div>
        </div>
		
			

		
	</div>
	<div class="aaa">
		<div class="container" >
		<div class="row" >
		<div class=" ds"id="#sss">
				<div class="col-md-4" >
					<img src="imgs/7.jpg"><br><br>
					<p>
						we have aprofissional cotch for each one of the cluns.
					</p>
				</div>
				<div class="col-md-4">
					<img src="imgs/3.jpg"class="i3"><br>
					<br>
					<p>
						her we can macke you apowerfull man in no time than by mor traninng.
					</p>
				</div>
				<div class="col-md-4">
					<img src="imgs/4.jpg" class="i3"><br><br>
					<p>
						we have very heigh quality of tools of gem fitness loss weight and other things.
					</p>
				</div>
				<div class="col-md-4">
					<img src="imgs/5.jpg"><br><br>
					<p>
						we have group session for apoupular people and single session if youwant.
					</p>
				</div>
				<div class="col-md-4">
					<img src="imgs/6.jpg"class="i3"><br><br>
					<p>
						we have session for fitness and runner using mpr than one way.
					</p>
				</div >
				<div class="col-md-4">
					<img src="imgs/1.jpg"class="i3"><br>
					<br>
					<p>
						her we can macke you apowerfull man in no time than by mor traninng.
					</p>
				</div>				
				<div class="col-md-4">
					<img src="imgs/8.jpg"class="i3"><br><br>
					<p>
						we have pregnant session for pregnant women to help them .
					</p>
				</div>
				<div  class="col-md-4">
					<img src="imgs/9.jpg"><br><br>
					<p>
						we have session and good schudal for loss weight in no time.
					</p>
				</div>
				<div  class="col-md-4">
					<img src="imgs/10.jpg"><br><br>
					<p>
						aprofissional uoga session we have.
					</p>
				</div>
	</div>
</div>
</div >	
</div>		
</div>
<section id="contact" class="contact text-center">
            <div class="container">
                <div class="row">
                	 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <div class="loc li">
                            <ul>
     							        <li><a href="html/private session.php"> private session</a></li>
							            <li><a href="html/group session.php">group session</a></li>
							            <li><a href="html/workout session.php">workout session</a></li>
							         
							            <li><a href="html/pregnant session.php">pregnant session</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="loc">
                            <h4>Location</h4>
  
                            <h5>Asyut City, EG Egypt</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="loc">
                            <h4>Share With Love</h4>
                            <i class="fa fa-facebook fa-2x"></i>
                            <i class="fa fa-twitter fa-2x"></i>
                            <i class="fa fa-linkedin fa-2x"></i> 
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="loc">
                            <h4>About MY GYME</h4>
                            <p class="lead">this web site help you to be fitness in no time<br> and help women and girls in differnt wayse to be real lady by more and more section </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
        
        <!-- Start Footer Section -->
        <section class="footer text-center" style="background-color: #6E1505">
            <div class="container">
                <div class="copy">
                    <h4 style="color: white; ">Copyright &copy; 2016 MY GYM All Rights Reserved</h3>
                    </h4>
                </div>
            </div>
        </section>

<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog dform" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <form class="form-horizontal aform" action="home.php" method="post">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control in" id="inputEmail3" placeholder="Email"style="margin-left: 2%;color: #7D1806">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="inputPassword3" placeholder="Password"style="margin-left: 2%; color: #7D1806">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <div class="checkbox">
		        <label>
		          <input type="checkbox"> Remember me
		        </label>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default sub">Sign in</button>
		    </div>
		  </div>

		</form>
  </div>
</div>

</body>
</html>