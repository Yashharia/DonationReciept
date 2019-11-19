
  
<?php SESSION_START();
?>
<?php include 'connection.php';?>


<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Epparels</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	
	<link href="./css/style.css" rel="stylesheet">

	<title></title>
</head>
<body>
	
	<!--Navigation Bar-->
	
	<nav class="navbar navbar-expand-lg bg-light navbar-light">
		<div class="container header-container">
			<div class="navbar navbar-default">
 				<a class="navbar-brand" href="home.php">Donation</a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  				</button>
			</div>
		

		<div class="collapse navbar-collapse " id="navbarSupportedContent">
		
		
			<ul class="nav navbar-nav navbar-right">
			

			

      
	  
	  <li class="nav-item ">
        <a class="nav-link" href="#" role="button" >
          About Us
        </a>
      </li>
	  
	  <?php if(isset($_SESSION['username'])) {
    
		} ?>

      <?php
      if(isset($_SESSION['username'])){
      $q="select * from users";
    	$run=mysqli_query($link,$q);
    	while($row=mysqli_fetch_array($run)){
      $u=$row['name'];
			
			if($_SESSION['username']!=$u) {
echo '<li class="nav-item ">
        <a class="nav-link" href="myorders.php" role="button" >
          My Orders
        </a>
			</li>';}
    		if ($_SESSION['username']==$u ) {?>

    			 <li class="nav-item ">
        <a class="nav-link" href="reciept.php" role="button" >
          Reciept
        </a>
      </li>
	      			 
  <?php
		
  }
		}
}
  ?>

				 

			 

	</div> 
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<?php
if(isset($_SESSION['username'])) {
    echo '<li><a href="logout.php"><button class="btn btn-primary" style="margin-left:35px" type="submit">Logout
            </button></a></li>';
     
} 
else {
    echo '<li><a href="login.php"><button class="btn btn-primary" type="submit">Login/Sign Up</button></a></li>';
}
 
      ?>

      
    </ul>
	
	</div>

	</nav>

</body>
</html>

