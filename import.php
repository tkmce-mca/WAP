<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "wap_demo");

if(isset($_POST["import"]))
{
 $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

 
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    
	
    $slno = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $cons = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
	
	$res = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $meter = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
	$read = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
    $amt = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
	$remrk = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
    $phn = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
	$lat = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
    $lon = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
	
	
    $query = "INSERT INTO demo(`Sl_No`, `Consumer_No`, `Ress_Assn_No`, `Meter_No`, `Reading`, `Amount`, `Remarks`, `Phone`, `Latitude`, `Longitude`) VALUES ('".$slno."', '".$cons."','".$res."', '".$meter."','".$read."', '".$amt."','".$remrk."', '".$phn."','".$lat."', '".$lon."')";
    $sql=mysqli_query($connect, $query);
    
	if(!$sql)
		echo "<script>window.location.href='adminhome.php'
	alert('Error in Inserting data to database!!!')
	</script>";
	else
		echo "<script>window.location.href='adminhome.php'
	alert('Successfully Inserted!!!')
	</script>";
	
   }
  } 


 }
 else
 {
 }
}
?>

<html>
 <head>
  <title>Importing Excel Data to Mysql</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:700px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
   margin-top:100px;
  }
  
  </style>
 </head>
 <body>
 <center>
 <a href="adminhome.php"><input type="button" value="Home" /></a>
<a href="import.php"><input type="button" value="Import from Excel" /></a>
<a href="show.php"><input type="button" value="Show all data" /></a>
<a href="adminlogout.php"><input type="button" value="Logout" /></a>
  <div class="container box">
   <h3 align="center">Import Excel Data to Mysql</h3><br />
   <form method="post" enctype="multipart/form-data">
    <label>Select Excel File</label>
    <input type="file" name="excel" />
    <br />
    <input type="submit" name="import" class="btn btn-info" value="Import" />
   </form>
   <br />
   <br />

  </div>
  </center>
 </body>
</html>