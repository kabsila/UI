<?php

        include_once ( 'connectDB.php' ); 

        session_start();

        $str1 = trim($_POST['tdateC']);
        $str2 = trim($_POST['tnameC']);
        $str3 = trim($_POST['teye']);
        $str4 = trim($_POST['tfoot']);
        $str5 = trim($_POST['tsad']);
        $str6 = trim($_POST['tpoint']);
        
        $lastID = $_SESSION["lastid"];
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "INSERT INTO spec_check (id, date_C, name_c, eye, foot, sad, point) 
                             VALUES ('$lastID', '$str1', '$str2', '$str3', '$str4', '$str5', '$str6')";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
       
        echo "<label>บันทึกข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
