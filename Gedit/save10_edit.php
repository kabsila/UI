<?php

header('Content-Type: text/html; charset=utf-8');
include_once ( '../connectDB.php' ); 
           

        $str0 = trim($_POST['tId']);
        $str1 = trim($_POST['t1']);
        $str2 = trim($_POST['t2']);
        $str3 = trim($_POST['t3']);
        $str4 = trim($_POST['t4']);
        $str5 = trim($_POST['t5']);
        $str6 = trim($_POST['t6']);
        
        
        
        
     
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");
        
        $strSQL = "UPDATE visit_table SET takecarePoint = '$str3',
                                         takecare = '$str4',
                                         name_d = '$str5',
                                         note = '$str6'
                                         WHERE id = $str0 AND visit_order = $str2 AND idTable = $str1";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        //echo $row['ID'];
       // echo "</br>";
        
        echo "<label>บันทึกการแก้ไขข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
