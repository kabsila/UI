<?php

        include_once ( 'connectDB.php' ); 
        session_start();

        $strAddNum = trim($_POST['tAddNum']);
        $strRoad = trim($_POST['tRoad']);
        $strAumphor = trim($_POST['tAumphor']);
        $strTumbol = trim($_POST['tTumbol']);
        $strCity = trim($_POST['tCity']);
        $strZipcode = trim($_POST['tZipcode']);
        $strLatitude = trim($_POST['tLatitude']);
        $strLongitude = trim($_POST['tLongitude']);
        $strDateAcc = trim($_POST['tDateAcc']);
        
        $lastID = $_SESSION["lastid"];
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "INSERT INTO address (ID, address_num, road, aumphor, tumbol, city, zipcode, latitude, longitude, date_accp) 
                                     VALUES ('$lastID', '$strAddNum', '$strRoad', '$strAumphor', '$strTumbol', '$strCity', '$strZipcode', '$strLatitude', '$strLongitude', '$strDateAcc')";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
       
        echo "<label>บันทึกข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
        
        
?>
