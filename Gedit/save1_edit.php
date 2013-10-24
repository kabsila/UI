<?php

header('Content-Type: text/html; charset=utf-8');
include_once ( '../connectDB.php' ); 
           

        $str0 = trim($_POST['tId']);
        $str1 = trim($_POST['tName']);
        $str2 = trim($_POST['tSname']);
        $str3 = trim($_POST['tAge']);
        $str4 = trim($_POST['tNameD']);
        $str5 = trim($_POST['tSnameD']);
        $str6 = trim($_POST['tWithD']);
        
        
        
       
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
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");
        //$strSQL = "SELECT ID FROM general_info WHERE (name = '$name1') AND (sname = '$sname1')";        
        //$objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
       // $row = mysql_fetch_array($objQuery);
        //$id =  $row['ID'];
        //$id =  136;
        
        $strSQL = "UPDATE general_info SET age = '$str3',                                        
                                           name_d = '$str4',
                                           sname_d = '$str5',
                                           relation = '$str6',
                                           name = '$str1',
                                           sname = '$str2'
                                           
                   WHERE ID = $str0";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        //echo $row['ID'];
       // echo "</br>";
        
        echo "<label>บันทึกการแก้ไขข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
