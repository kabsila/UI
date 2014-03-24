<?php

header('Content-Type: text/html; charset=utf-8');
include_once ( '../connectDB.php' ); 
           

        $str0 = trim($_POST['tId']);
        $str00 = trim($_POST['t0']);
        $str1 = trim($_POST['t1']);
        $str2 = trim($_POST['t2']);
        $str3 = trim($_POST['t3']);
        
        
        
     
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");
        
        $strSQL = "UPDATE train_d SET    date = '$str2',
                                         main_d = '$str1',
                                         trainer_name = '$str3'
                                         WHERE id = '$str0' AND date_id = '$str00'";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        //echo $row['ID'];
       // echo "</br>";
        
        echo "UPDATE train_d SET    date = '$str2',
                                         main_d = '$str1',
                                         trainer_name = '$str3'
                                         WHERE id = '$str0' AND date_id = '$str00'";
        echo "<label>บันทึกการแก้ไขข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
