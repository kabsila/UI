<?php

header('Content-Type: text/html; charset=utf-8');
include_once ( '../connectDB.php' ); 
           

        $str0 = trim($_POST['tId']);
        $str1 = trim($_POST['t1']);
        //$str2 = trim($_POST['t2']);
        $str3 = trim($_POST['t3']);
        $str4 = trim($_POST['t4']);
        
        $n = trim($_POST['n']);
        $osm = trim($_POST['osm']);
        $staff = trim($_POST['staff']);
        $pdl = trim($_POST['input_pd']);
        
        
        if($str3 != 'pp')
        {
            $str3 = $pdl;
        }
     
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");
        
        $strSQL = "UPDATE visit_home SET n = '$n',
                                         osm = '$osm',
                                         staff = '$staff',
                                         rub_type = '$str3',
                                         family_envi = '$str4'
                                         WHERE id = $str0 AND visit_order = $str1";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        //echo $row['ID'];
       // echo "</br>";
        
        echo "<label>บันทึกการแก้ไขข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
