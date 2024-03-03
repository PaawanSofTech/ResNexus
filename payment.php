<?php session_start();
if(empty($_SESSION['id'])):
header('Location:index.php');
endif;
?>
<?php include 'header.php';?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Reservation</title>

    <style>
      .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
      </style>
</head>
<body>
  
    <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="container">

        <div>
          <div class="widget wgreen"  style="height: 600px;">
                
                <div class="widget-head">
                  <div class="pull-left">Payment Details</div>
                  
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd">

                    <br>
                    <!-- Form starts.  -->
  <form class="form-horizontal" role="form" action="payment_save.php" method="post">
    <div class="form-group" style="padding-top: 80px;">
        <label class="col-lg-5 control-label" style="font-size: 15px;">Package Details</label>
        <div class="col-lg-5" style="font-size: 15px;">
            <?php 
            include('includes/dbcon.php');
            $id = $_SESSION['id'];
            $query = mysqli_query($con, "SELECT * FROM reservation natural join combo WHERE rid='$id'");
            $row=mysqli_fetch_array($query);
            $cid=$row['combo_id'];
            echo "<b>".$row['combo_name']."</b>";
            $query1 = mysqli_query($con, "SELECT * FROM combo_details natural join menu WHERE combo_id='$cid'");
            while($row1=mysqli_fetch_array($query1))
            {
            ?>
            <?php   
                echo "<br>";
                echo $row1['menu_name'];
            ?>
            <?php }?>                           
        </div>
    </div>    

    <div class="form-group" style="padding-top: 30px;">
        <label class="col-lg-5 control-label" style="font-size: 15px;">Payment Details</label>
        <div class="col-lg-5" style="font-size: 15px;">
            <h4>
                <?php
                echo $row['pax'];
                echo " x ";
                echo number_format($row['price'],2);
                echo " = ";
                echo number_format($row['payable'],2);
                ?>
            </h4> 
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-5 control-label" style="font-size: 15px; padding-top: 30px;">Mode of Payment</label>
        <div class="col-lg-5" style="font-size: 15px; padding-top: 30px;">
            <select class="form-control select2" id="exampleSelect1" name="mode" placeholder="Select occasion" required style="font-size: 15px;">
                <option disabled selected>--Choose Mode of Payment--</option>
                <option>Cash</option>
                <option>Card</option>
                <option>UPI</option>
                <option>Other</option>
            </select>
        </div>
    </div>  

    <div class="form-group" style="padding-top: 10px;">
        <div class="col-lg-offset-5 col-lg-5">
            <button type="reset" class="btn btn-sm btn-default" style="font-size: 15px;">Clear</button>
            <button type="submit" class="btn btn-sm btn-primary" style="font-size: 15px;">Next</button>
        </div>
    </div>
</form>


                  </div>  
        </div>
        
      </div>  
    </div>  
<?php include 'script.php';?>
<script>
  $(function () {
  //Initialize Select2 Elements
    $(".select2").select2();
  })
$( "#datepicker" ).datepicker({ minDate: 0});


</script>
</body>
</html>



