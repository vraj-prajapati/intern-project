<?php
require('db.php');
// include("auth_session.php");
?>

<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'exel');

if (isset($_POST['done'])) {

    
    $t101 = $_POST['t101'];
    $t102 = $_POST['t102'];
    $t103 = $_POST['t103'];
    $t104 = $_POST['t104'];
    $t105 = $_POST['t105'];
   

    $q = " INSERT INTO `schedule_note_numbers_table`(`FY`, `CID`, `RTYPE`, `NOTE`, `HID`) VALUES ('$t101','$t102','$t103','$t104','$t105')";

    if ($con->query($q) === TRUE) {
      echo '<script>alert("Submitted Successfully!!");
      window.location.assign("insert_dashbord.php?page=scheduletable");
      </script>';
      
    } else {
      echo '<script>alert("Error!!");
      window.location.assign("insert_dashbord.php?page=scheduletable");
      </script>" . $q . "<br>' . $con->error;
    }
   
}
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu  | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title></title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   </head>

   <style>
   .formate{
    border-style: groove;
    
    
    border-collapse: collapse;
  }
  </style>
<body>
  
 
  <!-- Page content -->
   <div class="content ">

  
    <h3 class="h3 my-3 formate text-center">Schedule Note Numbers Table</h3>
     <form form action="" class="formate my-3 " method="post" autocomplete="off">
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Financial Year  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t101"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 mx-2">
        <label for="inputPassword3" class="col-sm-2 col-form-label formate border">Unique Identifier for each Client  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t102"class="form-control my-3" id="inputPassword3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Report type  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t103"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Note Number for each schedule :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t104"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3 my-2 mx-2">
        <label for="inputEmail3" class="col-sm-2 col-form-label formate border">Unique Identifier for each heading  :  </label>
        <div class="col-sm-10 formate border">
          <input required type="text" name="t105"class="form-control my-3" id="inputEmail3">
        </div>
      </div>
    
      
      <div class="text-center">
     <button type="submit" name="done" class="btn btn-primary button text-center">submit</button>
     </div>
    </form>
  </section>
</div>

  <script src="script.js"></script>

</body>
</html>
