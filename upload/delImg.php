<?php

header('Content-Type: text/html; charset=utf-8');
include_once ( '../connectDB.php' ); 

    $imgId = $_POST['timageID'];
    $str1 =  $_POST['tID'];
   
    $objDB = mysql_select_db("diabetes");
    mysql_query("SET NAMES UTF8");
        
    $imgId = substr($imgId, 6);
    $strSQL = "DELETE FROM img WHERE ID = $str1 AND path = '$imgId'";
    $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        $vPath = "\uploads\\";
        $curdir = getcwd();
        //echo $curdir.$vPath;
        unlink($curdir.$vPath.$imgId);
        echo "<label>ลบภาพเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
