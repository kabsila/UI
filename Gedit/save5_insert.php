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
        $str7 = trim($_POST['t7']);
        $str8 = trim($_POST['t8']);
        $str9 = trim($_POST['t9']);
        
        
     
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");
        
       /** $strSQL = "UPDATE lab_result SET
                                         date = '$str1',
                                         FBS = '$str2',
                                         LDL = '$str3',
                                         HDL = '$str4',
                                         cholesterol = '$str5',
                                         tg = '$str9',
                                         creatinine = '$str6',
                                         BUN = '$str7',
                                         HbA1C = '$str8' WHERE id = $str0 AND date_id = '$str00'";**/
        
        $strSQL = "INSERT INTO lab_result (id, date, FBS, LDL, HDL, cholesterol, tg, creatinine, BUN, HbA1C)
                                    VALUE ($str0, '$str1', '$str2', '$str3', '$str4', '$str5', '$str9', '$str6', '$str7', '$str8')";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        //echo $row['ID'];
       // echo "</br>";
        
        echo "<label>บันทึกการแก้ไขข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
