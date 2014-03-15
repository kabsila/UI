<?php

header('Content-Type: text/html; charset=utf-8');
include_once ( '../connectDB.php' ); 
           

        $str0 = trim($_POST['tId']);
        $str1 = trim($_POST['str1']);
       
    
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");
       
        $strSQL = "DELETE FROM lab_result WHERE id = $str0 AND DATE(date) = '$str1'";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        echo "<label>ข้อมูลถูกลบแล้ว</label>";
        mysql_close($objConnect);
?>
