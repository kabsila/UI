<?php

        include_once ( 'connectDB.php' ); 

        session_start();

        $str1 = trim($_POST['ttakecarePoint']);
        $str2 = trim($_POST['ttakecare']);
        $str3 = trim($_POST['tnamePD']);
        $str4 = trim($_POST['tnote2']);
                
        $lastID = $_SESSION["lastid"];
        $visitOrder = $_SESSION["visit_order"];
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "INSERT INTO visit_table (id, visit_order, takecarePoint, takecare, name_d, note) 
                             VALUES ('$lastID', '$visitOrder', '$str1', '$str2', '$str3', '$str4')";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
       
        echo "<label>บันทึกข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
