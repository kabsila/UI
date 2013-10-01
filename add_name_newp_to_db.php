<?php

        header('Content-Type: text/html; charset=utf-8');
        
        $strStatus = trim($_POST['tStatus']);
        $strFname = trim($_POST['tFname']);
	$strSname = trim($_POST['tSname']);
	
        
        //$strFname = mysql_real_escape_string($_POST['tFname']);
	//$strSname = mysql_real_escape_string($_POST['tSname']);
	
	//*** Check Username ***//
	if(trim($strFname) == "")
	{
		echo "<font color=red>**</font> กรุณาใส่ชื่อและนามสกุลของผู้ป่วย";
		exit();
	}
	
	//*** Check Password ***//
	if(trim($strSname) == "")
	{
		echo "<font color=red>**</font> กรุณาใส่ชื่อและนามสกุลของผู้ป่วย";
		exit();
	}
	

	$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");
        $strSQL = "INSERT INTO general_info (status, name, sname) VALUES ('$strStatus', '$strFname', '$strSname')";
        
        //$strSQL = "SELECT * FROM general_info";
  
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        /**
         while($row = mysql_fetch_array($objQuery))
          {
          echo $row['name'] . " " . $row['sname'];
          echo "<br>";
          }**/

        $staa = '';
        if($strStatus == 'nay')
        {
            $staa = 'นาย';
        }
        elseif ($strStatus == 'nang') 
        {
            $staa = 'นาง';
        }
        elseif ($strStatus == 'nangsao')
        {
            $staa = 'นางสาว';
            //echo "นางสาว".$strFname." ".$strSname." ได้ถูกเพิ่มชื่อลงในฐานข้อมูลผู้ป่วยเบาหวานแล้ว";
        } 
       // echo $strStatus.$strFname." ".$strSname." ได้ถูกเพิ่มชื่อลงในฐานข้อมูลผู้ป่วยเบาหวานแล้ว";
        
        mysql_close($objConnect);
        
        echo "</br>";
        echo "<div id='info'>";
        echo "<label>$staa$strFname  $strSname ได้ถูกเพิ่มชื่อลงในฐานข้อมูลผู้ป่วยเบาหวานแล้ว</label></br>";
        echo "<button class='button' id='btninfo' type='button'>เพิ่มข้อมูลของ $staa$strFname  $strSname</button>";
        echo "</div>";
       // btn btn-info
        session_start();
        $_SESSION['name'] = $strFname;
        $_SESSION['sname'] = $strSname;
        $_SESSION['status'] = $strStatus;
        /**
        $con=mysqli_connect("localhost","root","","diabetes");

       
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

        $strSQL = "INSERT INTO general_info (name, sname) VALUES ('$strFname', '$strSname')";
        mysqli_query($con,$strSQL);

        if (!mysqli_query($con, "SET a=1")) 
        {
            printf("Errormessage: %s\n", mysqli_error($con));
            echo mysqli_error($con);
        } 

        echo $strFname." and ".$strSname." Submited";

        mysqli_close($con);
        **/
        
        /**------------------------------------------------**/
        
        
         
         
?>
