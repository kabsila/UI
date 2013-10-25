<?php

        include_once ( 'connectDB.php' ); 

        session_start();

        $str1 = trim($_POST['tplanPoint']);
        $str2 = trim($_POST['twayD']);
        $str3 = trim($_POST['tnamedd']);
        $str4 = trim($_POST['tmark']);
           
        
        if($str1 == "")
	{
		$str1 = "-";
	}
        if($str2 == "")
	{
		$str2 = "-";
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
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "INSERT INTO plan_d (id, main_takecare, takecare, name_d, note) 
                             VALUES ('$lastID', '$str1', '$str2', '$str3', '$str4')";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
       
        echo "<label>บันทึกข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
