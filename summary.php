<?php session_start();
if(empty($_SESSION['id'])):
header('Location:index.php');
endif;
?>
<?php include 'header.php';?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 <style>
    .copy-icon {
        font-size: 16px; /* Adjust the size as needed */
        vertical-align: middle;
        cursor: pointer; /* Change cursor style to pointer on hover */
    }

    @media print {
        .copy-icon {
            display: none; /* Hide the copy icon when printing */
        }
    }
</style>

</head>
<body>
	
		<div class = "content">
			<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class = "col-md-9 col-lg-9">
					<div class="widget wgreen">
                
                <div class="widget-head">
                  <div class="pull-left title">Reservation Summary</div>
                  <div class="widget-icons pull-right">
                    <button class="btn btn-primary hideme" onClick="window.print()"><i class="fa fa-print"></i></button>

                    <a href="finish.php" class="btn btn-danger hideme"><i class="fa fa-sign-out"></i></a>
                    
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd" style="height:650px">
                    <div class="alert alert-success">
                      <b>Reminder: Please print your reservation summary for your own copy.</b>
                    </div>

                    <h3 style="text-align:center">PIET Jaipur</h3>
                    <h4 style="text-align:center">ISI - 2, Poornima Marg, Sitapura, Jaipur, Rajasthan 302022</h4>
                    <h4 style="text-align:center">Phone No. : 79766 45581</h4>
                    <h4 style="text-align:center">Gmail :  poornima@poornima.org</h4>
                    <hr>

<table style="width:50%; margin-left: 150px">
<?php
include('includes/dbcon.php');
    $id=$_SESSION['id'];
    $query=mysqli_query($con,"select * from reservation left join team on reservation.team_id=team.team_id natural join combo where rid='$id'")or die(mysqli_error($con));
      $row=mysqli_fetch_array($query);
       $rcode=$row['r_code'];
        $first=$row['r_first'];
        $last=$row['r_last'];
        $contact=$row['r_contact'];
        $address=$row['r_address'];
        $date=$row['r_date'];
        $venue=$row['r_venue'];
        $balance=$row['balance'];
        $payable=$row['payable'];
        $ocassion=$row['r_ocassion'];
        $team=$row['team_name'];
        $status=$row['r_status'];
        $motif=$row['r_motif'];
        $time=$row['r_time'];
        $time=$row['r_time'];
        $type=$row['r_type'];
        $cid=$row['combo_id'];

?>                      

<tr>
    <td>Res.Code: </td>
    <td>
        <span id="resCode"><?php echo $rcode;?></span>
        <i class="material-icons copy-icon" id="copyIcon" onclick="copyToClipboard()">content_copy</i>
    </td>
    <td>Event Date: </td>
    <td><?php echo date("M d, Y", strtotime($date)); ?></td>
</tr>

                      <tr>  
                        <td>Name: </td>
                        <td><?php echo $first." ".$last;?></td>
                        <td>Time: </td>
                        <td><?php echo date("h:i a",strtotime($time));?></td>
                      </tr>
                      <tr>
                        <td>Contact : </td>
                        <td><?php echo $contact;?></td>
                        <td>Occasion: </td>
                        <td><?php echo $ocassion;?></td>
                      </tr> 
                      <tr>
                        <td>Address: </td>
                        <td><?php echo $address;?></td>
                        <td>Type: </td>
                        <td><?php echo $type;?></td>
 
                      <tr>  
                        <td></td>
                        <td></td>
                        <td>No. of Packages: </td>
                        <td><?php echo $row['pax'];?></td>
                        
                      </tr>  

                      <tr>  
                        <td></td>
                        <td></td>
                        <td>Payable: </td>
                        <td>₹ <?php echo number_format($payable,2);?></td>
                      </tr> 
                      <tr>  
                        <td></td>
                        <td></td>
                        <td>Mode of Payment: </td>
                        <td><?php echo $row['modeofpayment'];?></td>
                      </tr> 
                      
</table>
<br>
<hr>

<h3 style="margin-left: 150px;"> Package Details:</h3>
<div style=" margin-left: 150px; padding: 10px;">

  <h4><?php echo $row['combo_name'];?></h4>
  <span>No. of persons: <?php echo $row['pax'];?> * <?php echo $row['price'];?> = <?php echo $row['payable'];?></span>
  <ul>
    <?php
    $query1=mysqli_query($con,"select * from combo_details natural join menu where combo_id='$cid'")or die(mysqli_error($con));
    while($row1=mysqli_fetch_array($query1))
    {
    ?>    
      <li><?php echo $row1['menu_name'];?></li>
    <?php }?>    
  </ul>

</div>




                  </div><!--pad-->  
                </div>
          </div><!--widget-->          
				</div><!--col 9-->
				<?php include('right-sidebar.php');?>
				
			</div>	
		</div>	
<?php include 'script.php';?>
<script>
         $(function () {
         //Initialize Select2 Elements
         $(".select2").select2();
         

     })
    </script>

<script>
    function copyToClipboard() {
        // Select the text within the element with the id "resCode"
        var codeElement = document.getElementById("resCode");
        
        // Create a range object to select the text
        var range = document.createRange();
        range.selectNode(codeElement);
        
        // Select the text
        window.getSelection().removeAllRanges(); // Clear previous selections
        window.getSelection().addRange(range); // Select the text
        
        // Copy the selected text to the clipboard
        document.execCommand("copy");
        
        // Deselect the text
        window.getSelection().removeAllRanges();
        
        // Optionally, provide user feedback
        alert("Res.Code copied to clipboard: " + codeElement.textContent);
    }
</script>

</body>
</html>



