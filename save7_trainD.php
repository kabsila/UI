<?php

        include_once ( 'connectDB.php' ); 

        session_start();

        $str1 = trim($_POST['ttrianPoint']);
        $str2 = trim($_POST['tdateTrain']);
        $str3 = trim($_POST['tnameTrain']);
        
        
        if($str1 == "")
	{
		$str1 = "-";
	}
        
        if($str3 == "")
	{
		$str3 = "-";
	}
        
        $lastID = $_SESSION["lastid"];
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "INSERT INTO train_d (id, main_d, date, trainer_name) 
                             VALUES ('$lastID', '$str1', '$str2', '$str3')";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
       
        echo "<label>บันทึกข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
