

<?php include'connection.php';?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" type="text/css" href="css/new-custom.css" />
    <title>Print Recipt</title>

</head>
<?php
$recieptid=$_GET['recieptid'];
$recieptid;
?>
<?php include 'header.php';?>

<body id="LoginForm">


</form>
<?php 
$recieptnumq="select * from reciept where recieptnum like '%$recieptid%'";


$run=mysqli_query($link,$recieptnumq);
while($row=mysqli_fetch_array($run))
{
    $recieptnum=$row['recieptnum'];
    $mobilenum=$row['mobilenum'];
    $donarname=$row['donarname'];
    $Address=$row['Address'];
    $category=$row['category'];
    $amount=$row['amount'];
    $payment=$row['payment'];
    $signature=$row['signature'];
    $Timestamp=$row['Timestamp'];

    ?>


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
                        <h6><b>Cash Reciept:</b> <?php echo $recieptnum;?> </h6>
                    </div>
                    <div class="col-sm-6 text-right magrin-bottom-10">		    		
                        <p><b>Date:</b> <?php echo $Timestamp;?></span></p>

                    </div>
                </div>
                <hr>

                <div class="row margin-top-30">






                    <div class="col-sm-6 text-left margin-bottom-30 ">
                        <h6 align="left"><b>Mobile Number:</b> <?php echo $mobilenum;?></h6>

                    </div>




                    <div class="col-sm-6 text-left margin-bottom-30">
                        <h6><b>Donar Name:</b> <?php echo $donarname;?></h6>

                    </div>



                </div>


            </div>





            <div class="row">
             <div class="col-sm-6 text-left margin-bottom-30">
               <h6><b>Category:</b></h6>
               <div class="form-group">
                  <h6><?php echo $category; ?></h6>

              </div>
          </div>
          <div class="col-sm-6 text-right magrin-bottom-30">
           <div class="form-group"><h6 align="left"><b>Amount:</b> <?php echo $amount;?></h6>

           </div>
       </div>
   </div>


   <div class="row">
      <div class="col-sm-6 text-left margin-bottom-30">
       <h6><b>Payment Method:</b> <?php echo $payment;?></h6>

   </div>

   <div class="col-sm-6 text-right magrin-bottom-30">		    		
      <div class="form-group"><h6 align="left"><b>Address:</b> <?php echo $Address;?></h6>
      </div>

  </div>
</div>

<div class="row margin-top-10 margin-bottom-30">
   <div class="col-sm-6 text-left">
       <div class="form-group">
          <h1><?php echo $signature;?></h1>
          <h6>Signature</h6>
      </div>
  </div>

  <div class="col-sm-6 text-right">
   <a href="javascript:window.print()"><input type="windows.print()" name="submit-product" value="Print" class="btn btn-info"></a>

</div>
</div>

</form>
</div>
</div>




<?php 
}



?>                    
</div>
</div>

</div>
</div>
</div>


</body>
</html>

