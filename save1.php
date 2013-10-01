<?php

header('Content-Type: text/html; charset=utf-8');

        session_start();    
  
        $name1 = $_SESSION['name'];
        $sname1 = $_SESSION['sname'];
        $strStatus = $_SESSION['status'];

        $strtAge = trim($_POST['tAge']);
        $strtJob = trim($_POST['tJob']);
        $strtTel = trim($_POST['tTel']);
        $strtNameD = trim($_POST['tNameD']);
        $strtSnameD = trim($_POST['tSnameD']);
        $strtWithD = trim($_POST['tWithD']);
        $strtJobD = trim($_POST['tJobD']);
        $strtTelD = trim($_POST['tTelD']);
        
        
        
     /**   $strStatus = trim($_POST['tStatus']);
        $strFname = trim($_POST['tFname']);
	$strSname = trim($_POST['tSname']);
        
        if(trim($strFname) == "")
	{
		echo "<font color=red>**</font> กรุณาใส่ชื่อและนามสกุลของผู้ป่วย";
		exit();
	}
	
	
	if(trim($strSname) == "")
	{
		echo "<font color=red>**</font> กรุณาใส่ชื่อและนามสกุลของผู้ป่วย";
		exit();
	}**/
        
        $objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");
        $strSQL = "SELECT ID FROM general_info WHERE (name = '$name1') AND (sname = '$sname1')";        
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        $row = mysql_fetch_array($objQuery);
        //$id =  $row['ID'];
        //$id =  136;
        
        $strSQL = "UPDATE general_info SET status = '$strStatus', 
                                           age = '$strtAge',
                                           job = '$strtJob',
                                           tel = '$strtTel',
                                           name_d = '$strtNameD',
                                           sname_d = '$strtSnameD',
                                           relation = '$strtWithD',
                                           job_d = '$strtJobD',
                                           tel_d = '$strtTelD'
                   WHERE ID = ".$row['ID'];
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        //echo $row['ID'];
       // echo "</br>";
        echo "<label>บันทึกข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
