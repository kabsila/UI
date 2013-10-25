<?php

header('Content-Type: text/html; charset=utf-8');
include_once ( '../connectDB.php' ); 
           

        $str0 = trim($_POST['tId']);
        $str1 = trim($_POST['t1']);
        $str2 = trim($_POST['t2']);
        $str3 = trim($_POST['t3']);
        $str4 = trim($_POST['t4']);
        $str5 = trim($_POST['t5']);
        $str6 = trim($_POST['t6']);
        $str7 = trim($_POST['t7']);
        $str8 = trim($_POST['t8']);
        $str9 = trim($_POST['t9']);
        $str10 = trim($_POST['t10']);
        
        
        
       
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
        
        $strSQL = "UPDATE general_info SET analysis = '$str1',                                        
                                           other = '$str2',
                                           drname = '$str4',
                                           hospital1 = '$str3',
                                           hospital2 = '$str5',
                                           hospital3 = '$str6',
                                           medicine = '$str7',
                                           anti_medicine = '$str8',
                                           spac_food = '$str9',
                                           family_info = '$str10'
                                           
                   WHERE ID = $str0";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        //echo $row['ID'];
       // echo "</br>";
        
        echo "<label>บันทึกการแก้ไขข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
