<?php

header('Content-Type: text/html; charset=utf-8');
include_once ( '../connectDB.php' ); 
           

        $str0 = trim($_POST['tId']);
        $str1 = trim($_POST['t1']);
        $str2 = trim($_POST['t2']);
        $str3 = trim($_POST['t3']);
        $str4 = trim($_POST['t4']);
        $str5 = trim($_POST['t5']);
        
        
        
     
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");
        
        /**$strSQL = "UPDATE plan_d SET main_takecare = '$str2',
                                     takecare = '$str3',
                                     name_d = '$str4',
                                     note = '$str5'
                                     WHERE id = $str0 AND idd = '$str1'";**/
          
        $strSQL = "INSERT INTO plan_d (id, main_takecare, takecare, name_d, note)
                                    VALUE ($str0, '$str2', '$str3', '$str4', '$str5')";
        
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        //echo $row['ID'];
       // echo "</br>";
        
        echo "<label>บันทึกการแก้ไขข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
