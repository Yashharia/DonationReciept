
  
<?php include'connection.php';?>
<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<link rel="stylesheet" type="text/css" href="css/new-custom.css" />
	<title>Recipt</title>
	<script src="cities.js"></script>
</head>
<?php include 'header.php';?>

	<body id="LoginForm">
		
           
 </form>
	<?php 
	$recieptnumq="select * from reciept ORDER BY recieptnum DESC LIMIT 1";
	$getnum=mysqli_query($link,$recieptnumq);
	while($r=mysqli_fetch_array($getnum)){
    # code...
       $lastreciept=$r['recieptnum'];
   }
       $current=$lastreciept + 1;
	?>
		
 	 <?php
      if(isset($_SESSION['username'])){
      $q="select * from users";
    	$run=mysqli_query($link,$q);
    	while($row=mysqli_fetch_array($run)){
    # code...
       $u=$row['name'];
  }
    		if ($_SESSION['username']==$u ) {?>
		
	
    			<div class="container padding">

    				<div class="row margin-top-60 margin-bottom-10">
    					<div class="col-sm-2"></div>
    					<div class="col-sm-8">
    						
    						<div class="panel text-center">
    					<div class="panel-heading margin-bottom-40">
    						<h3> Shree Mumbadevi Mandir Charity.</h3>
    					</div>

    					
    						


    					




    					<form action="" role="form" method="post" enctype="multipart/form-data">

    						<div class="row">
    							<div class="col-sm-6 text-left margin-bottom-10">
    								<h6>Cash Reciept: <?php echo $current;?> </h6>
    							</div>
    							<div class="col-sm-6 text-right magrin-bottom-10">		    		
    								<p>Date: <span id="datetime"></span></p>
    							
    						</div>
    					</div>
<hr>

    						<div class="row margin-top-30">



    							


<div class="col-sm-6 text-left margin-bottom-30 ">
    								<h6 align="left">Mobile Number</h6>
    							<input type="tel" class="form-control" name="mobile"  placeholder="Mobile Num" required="required">
    							</div>




    							<div class="col-sm-6 text-left margin-bottom-30">
    								<h6>Donar Name:</h6>
    								<input type="text" class="form-control" name="name"  placeholder="Name" required="required">
    							</div>

    							

    						</div>


    					</div>

    					



    					<div class="row">
    							<div class="col-sm-6 text-left margin-bottom-30">
    					<h6>Category</h6>
    					<div class="form-group">
    						<select name="category" id="select-category" class="form-control" placeholder="category" required="required">
    							<option name="20" >Shree Kumkum Archana</option>
    							<option name="30" >Shree Kapoor Aarti</option>
    							<option name="40" >Shree Mataji Abhishek</option>
    							<option name="50" >Newly Wedding Couple Puja</option>
    							
    						</select>

    					</div>
    				</div>
    					<div class="col-sm-6 text-right magrin-bottom-30">
    					<div class="form-group"><h6 align="left">Amount</h6>
    						<input type="text" class=" form-control" id="pr-price" name="amount" placeholder="Amount" required="required" disabled>
    					</div>
    				</div>
    				</div>


    					<div class="row">
    						<div class="col-sm-6 text-left margin-bottom-30">
    					<h6>Payment Method</h6>
    						<div class="form-group">
    						<select name="payment" id="payment-method" class="form-control" placeholder="payment" required="required">
    							<option name="Payment 1">Cash</option>
    							<option name="Payment 2">Cheque</option>
    							<option name="Payment 3">Swipe</option>
    						</select>
    					</div>
    				</div>

    						<div class="col-sm-6 text-right magrin-bottom-30">		    		
    						<div class="form-group"><h6 align="left">Address</h6>
    						<input type="text" class="form-control" name="address"  placeholder="Address" required="required">

    					</div>

    					</div>
    				</div>

    				<div class="row margin-top-10 margin-bottom-30">
    					<div class="col-sm-6 text-left">
    					<div class="form-group">
    						<h1><?php echo $u;?></h1>
    						<h6>Signature</h6>
    					</div>
    				</div>

    				<div class="col-sm-6 text-right">
    					<input type="submit" name="submit-product" value="Preview" class="btn btn-info">
    				</div>
    				</div>
    					
    				</form>
    					</div>
    				</div>

    				
                        

                        <?php 
                    }
}
                        else{
                        	echo "invalid username/password";
                        }
                    
                        ?>


                            <?php
							if (isset($_POST['submit-product'])) {
									$mobilenum=$_POST['mobile'];
									$name=$_POST['name'];
									$address=$_POST['address'];
									$category=$_POST['category'];
									@$amount=$_POST['amount'];
									$payment=$_POST['payment'];
									
									$sign=$u;
									
									
									
									
									if(mysqli_query($link,"insert into reciept(mobilenum,donarname,Address,category,amount,payment,signature) value('$mobilenum','$name','$address','$category','$amount','$payment','$sign')"))
									{
										echo "<script type='text/javascript'>
            window.location='printreciept.php?recieptid=$current';
        </script>";
                                        
									}   
									else 
									{
									    echo "<script>alert('Data not saved')</script>";                          	# code...
									}                              
								    }                         
							?>                     
</div>
                 </div>

</div>
         </div>
              </div>

          
         



<script type="text/javascript">
	$(document).ready(function(){
		$( "#select-category" )
  			.change(function() {
    		var str = "";
    		$( "#select-category option:selected" ).each(function() {
      		str += $( this ).name() + " ";
    		});
    		$( "#pr-price" ).val( str );
  			})
  .trigger( "change" );

	});
</script>

<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (("0"+dt.getDate()).slice(-2)) +"/"+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()+1).slice(-2)) +":"+ (("0"+dt.getMinutes()+1).slice(-2));
</script>

</body>
</html>

