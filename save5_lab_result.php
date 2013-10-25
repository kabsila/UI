<?php

        include_once ( 'connectDB.php' ); 

        session_start();

        $str1 = trim($_POST['tlab_date']);
        $str2 = trim($_POST['tfbs']);
        $str3 = trim($_POST['tldl']);
        $str4 = trim($_POST['thdl']);
        $str5 = trim($_POST['tCholesterol']);
        $str6 = trim($_POST['tCreatinine']);
        $str7 = trim($_POST['tBUN']);
        $str8 = trim($_POST['tHbA1C']);
       
 
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
        if($str5 == "")
	{
		$str5 = "-";
	}
        if($str6 == "")
	{
		$str6 = "-";
	}
        if($str7 == "")
	{
		$str7 = "-";
	}
        if($str8 == "")
	{
		$str8 = "-";
	}
        
        $lastID = $_SESSION["lastid"];
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "INSERT INTO lab_result (id, date, FBS, LDL, HDL, cholesterol, creatinine, BUN, HbA1C) 
                             VALUES ('$lastID', '$str1', '$str2', '$str3', '$str4', '$str5', '$str6', '$str7', '$str8')";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
       
        echo "<label>บันทึกข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
