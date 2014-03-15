<?php

        include_once ( 'connectDB.php' ); 

        session_start();

        $str1 = trim($_POST['tfirst_rateDB']);
        $str2 = trim($_POST['tbloodP']);
        //$str3 = trim($_POST['ttemp']);
        //$str4 = trim($_POST['thj']);
        //$str5 = trim($_POST['tenviHome']);
        //$str6 = trim($_POST['tbelieve']);
       // $str7 = trim($_POST['tp1']);
        //$str8 = trim($_POST['tjit']);
       // $str9 = trim($_POST['tp2']);
       // $str10 = trim($_POST['tecono']);
       
        
    
                
        $lastID = $_SESSION["lastid"];
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        //$strSQL = "INSERT INTO first_rate (id, first_rateData, blood_p) 
                             //VALUES ('$lastID', '$str1', '$str2')";
        
        $strSQL = "UPDATE first_rate SET first_rateData = '$str1',
                                         blood_p = '$str2'
                                           
                   WHERE id = $lastID";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
       
        echo "<label>บันทึกข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
