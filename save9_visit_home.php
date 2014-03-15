<?php

        include_once ( 'connectDB.php' ); 

        session_start();

        $str1 = trim($_POST['tvisit_order']);
        //$str2 = trim($_POST['tPvisit']);
        $str3 = trim($_POST['tPRvisit']);
        $str4 = trim($_POST['tenviFam']);
        
        
        $n = trim($_POST['n']);
        $osm = trim($_POST['osm']);
        $staff = trim($_POST['staff']);
        
        
        if($str1 == "")
	{
		$str1 = "-";
	}
        
        if($str3 == "")
	{
		$str3 = "-";
	}
        if($str4 == "")
	{
		$str4 = "-";
	}
        
        
        $lastID = $_SESSION["lastid"];
        $_SESSION["visit_order"] = $str1;
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        //$strSQL = "INSERT INTO visit_home (id, visit_order, n, osm, staff, rub_type, family_envi) 
                            // VALUES ('$lastID', '$str1', '$n', '$osm','$staff', '$str3', '$str4')";
          
       $strSQL = "UPDATE visit_home SET visit_order = '$str1',
                                           n = '$n',
                                           osm = '$osm',
                                           staff = '$staff',
                                           rub_type = '$str3',
                                           family_envi = '$str4'
                  WHERE id = $lastID";
        
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
       
        echo "<label>บันทึกข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
