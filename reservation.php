<!DOCTYPE html>
<?php include 'header.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Reservation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 6000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .widget {
            margin-bottom: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .widget-head {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .widget-content {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

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
<body?>
    <div class="container">
        <div class="widget">
            <div class="widget-head">
                Create Reservation
            </div>
            <div class="widget-content">
                <form class="form-horizontal" role="form" action="reservation_save.php" method="post">
                              <div class="form-group">
                                <label class="col-lg-2 control-label">First Name</label>
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" placeholder="First Name" name="first" required>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-lg-2 control-label">Last Name</label>
                                <div class="col-lg-5">
                                  <input type="text" class="form-control" placeholder="Last Name" name="last" required>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-lg-2 control-label">Address</label>
                                <div class="col-lg-5">
                                  <textarea class="form-control" rows="5" placeholder="Complete Address" name="address" required></textarea>
                                </div>
                              </div>    


                              <div class="form-group">
                                <label class="col-lg-2 control-label">Contact</label>
                                <div class="col-lg-5">
                                  <input type="number" class="form-control" placeholder="Contact" name="contact" required>
                                </div>
                              </div>
                              
                              
                              <div class="form-group">
                                <label class="col-lg-2 control-label">Email Address</label>
                                <div class="col-lg-5">
                                  <input type="email" class="form-control" placeholder="Email Address" name="email">
                                </div>
                              </div>
                    <div class="form-group">
                                <label class="col-lg-2 control-label"></label>
                                <div class="col-lg-5">
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1" required> I agree to the <a href="#facilities" data-toggle="modal">terms and condtion</a> of the Reservation & Recipt Nexus!
                                  </label>
                     </div>
                    </div>


                              <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-6">
                                  <button type="reset" class="btn btn-sm btn-default">Clear</button>
                                  <button type="submit" class="btn btn-sm btn-primary">Next</button>
                                  
                                </div>
                              </div>
                </form>
            </div>
        </div>
    </div>  
<?php include 'script.php';?>

<?php include 'facilities_modal.php'; ?>

    </body>
</html>