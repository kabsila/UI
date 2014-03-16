<?php

        include_once ( 'connectDB.php' ); 

        session_start();

        $tp = array(    trim($_POST['maind1']), trim($_POST['maind2']), trim($_POST['maind3']), 
                        trim($_POST['maind4']), trim($_POST['maind5']), trim($_POST['maind6']), 
                        trim($_POST['maind7']));
        
        $dt = array(    trim($_POST['dated1']), trim($_POST['dated2']), trim($_POST['dated3']), 
                        trim($_POST['dated4']), trim($_POST['dated5']), trim($_POST['dated6']), 
                        trim($_POST['dated7']));
        
        $nt = array(    trim($_POST['nameTrain1']), trim($_POST['nameTrain2']), trim($_POST['nameTrain3']), 
                        trim($_POST['nameTrain4']), trim($_POST['nameTrain5']), trim($_POST['nameTrain6']), 
                        trim($_POST['nameTrain7']));
        
        $mark = array(  trim($_POST['m1']), trim($_POST['m2']), trim($_POST['m3']), 
                        trim($_POST['m4']), trim($_POST['m5']), trim($_POST['m6']), 
                        trim($_POST['m7']));
        
        $dateid = array(trim($_POST['dateID1']), trim($_POST['dateID2']), trim($_POST['dateID3']), 
                        trim($_POST['dateID4']), trim($_POST['dateID5']), trim($_POST['dateID6']), 
                        trim($_POST['dateID7']));
        
        
        $lastID = $_SESSION["lastid"];
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        //$strSQL = "INSERT INTO plan_d (id, main_takecare, takecare, name_d, note) 
                             //VALUES ('$lastID', '$str1', '$str2', '$str3', '$str4')";
        
        for($i = 0;$i < 7 ;$i++){
            
       
        $strSQL = "UPDATE plan_d SET main_takecare = '$tp[$i]',
                                           takecare = '$dt[$i]',
                                           name_d = '$nt[$i]',
                                           note = '$mark[$i]'
                  WHERE id = $lastID AND idd = $dateid[$i]";
        
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
         }
       
        echo "<label>บันทึกข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
