<?php

        //$strFname = trim($_POST['tFname']);
	//$strSname = trim($_POST['tSname']);
	
        $strFname = mysql_real_escape_string($_POST['tFname']);
	$strSname = mysql_real_escape_string($_POST['tSname']);
	
	//*** Check Username ***//
	if(trim($strFname) == "")
	{
		echo "<font color=red>**</font> Plase input [Fname]";
		exit();
	}
	
	//*** Check Password ***//
	if(trim($strSname) == "")
	{
		echo "<font color=red>**</font> Plase input [Sname]";
		exit();
	}
	
/**
	$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
	$objDB = mysql_select_db("diabetes");

	$strSQL = "INSERT INTO general_info (name, sname) VALUES ('".$strFname."', '".$strSname."')";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
		
        echo $strFname." and ".$strSname." Submited";

	mysql_close($objConnect);
        **/
        
        $con=mysqli_connect("localhost","root","","diabetes");

       
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        $strSQL = "INSERT INTO general_info (name, sname) VALUES ('$strFname', '$strSname')";
        mysqli_query($con,$strSQL);

        echo $strFname." and ".$strSname." Submited";

        mysqli_close($con);
        
        
        /**------------------------------------------------**/
        
        
         
         
?>
