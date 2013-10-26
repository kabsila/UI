<?php

include_once ( '../connectDB.php' ); 
session_start();
$lastID = $_SESSION["lastid"];

$objDB = mysql_select_db("diabetes");
mysql_query("SET NAMES UTF8");
        

$output_dir = "uploads/";
$random_digit=rand(00000,99999);
if(isset($_FILES["myfile"]))
{
	$ret = array();

	$error =$_FILES["myfile"]["error"];
	if(!is_array($_FILES["myfile"]["name"])) //single file
	{
 	 	$fileName = $random_digit.$_FILES["myfile"]["name"];
 		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $_FILES["myfile"]["name"]);
                $ret[$fileName]= $output_dir.$fileName;
                
                $strSQL = "INSERT INTO img (id, path) 
                             VALUES ('$lastID', '$fileName')";
                $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
	}
	else
	{
	  $fileCount = count($_FILES["myfile"]["name"]);
	  for($i=0; $i < $fileCount; $i++)
	  {
	  	$fileName = $random_digit.$_FILES["myfile"]["name"][$i];
	  	$ret[$fileName]= $output_dir.$fileName;
		move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName );
                
                $strSQL = "INSERT INTO img (id, path) 
                             VALUES ('$lastID', '$fileName')";
                $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
	  }
	
	}
    echo json_encode($ret);
 }
 ?>