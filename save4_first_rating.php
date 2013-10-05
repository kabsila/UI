<?php

        include_once ( 'connectDB.php' ); 

        session_start();

        $str1 = trim($_POST['tcanD']);
        $str2 = trim($_POST['tbloodP']);
        $str3 = trim($_POST['ttemp']);
        $str4 = trim($_POST['thj']);
        $str5 = trim($_POST['tenviHome']);
        $str6 = trim($_POST['tbelieve']);
        $str7 = trim($_POST['tp1']);
        $str8 = trim($_POST['tjit']);
        $str9 = trim($_POST['tp2']);
        $str10 = trim($_POST['tecono']);
        
        
    
                
        $lastID = $_SESSION["lastid"];
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "INSERT INTO first_rate (ID, can_d_self, blood_p, temp, breathe, envi_home, believe, jitjai, jitjai_p, eco, eco_p) 
                             VALUES ('$lastID', '$str1', '$str2', '$str3', '$str4', '$str5', '$str6', '$str8', '$str7', '$str10', '$str9')";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
       
        echo "<label>บันทึกข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
