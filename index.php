

<!DOCTYPE html>
<html>
<head>

	<link href="./css/style.css" rel="stylesheet">
	<title>Login</title>
</head>
<?php include 'header.php';?>

<body id="LoginForm">
 <div class="container">

  <div class="row">
    <div class="col-sm-3"></div>

    <div class="col-sm-6">
    
  <div class="panel text-center" style="margin-top: 100px;">
    <div class="panel-heading"  satyle="padding-bottom:20px;">
      <h3> Admin Login </h3>
    </div>


    <form id="Login" action="" method="post">

      <div class="form-group" >


        <input type="text" class="form-control" name="username"  placeholder="Username" >

      </div>

      <div class="form-group">

        <input type="password" class="form-control" name="password"  placeholder="Password" >

      </div>
      <div class="forgot">
        <a href="reset.html">Forgot password?</a>
      </div>
      <input type="submit" name="sub" class="btn btn-primary" value="Login">



      </div>
    </form>


</div>
</div>

  </div>
           
    			
 <?php
    if (isset($_POST['sub']));
 {
    @$username=$_POST['username'];
    @$password=$_POST['password'];
    $q="select * from users";
    $run=mysqli_query($link,$q);
    while($row=mysqli_fetch_array($run)){
       $id=$row['id'];
       $u=$row['name'];
       $p=$row['password'];
      
    
      if ($username==$u && $password==$p) {
        $_SESSION['username']=$username;
        echo'
        <script>
            window.location="reciept.php";
        </script>';
    }
    }
  
}
?>
    </div>
</div>
            </div>


</body>
</html>

