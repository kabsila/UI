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
        
        $dateid = array(    trim($_POST['dateID1']), trim($_POST['dateID2']), trim($_POST['dateID3']), 
                        trim($_POST['dateID4']), trim($_POST['dateID5']), trim($_POST['dateID6']), 
                        trim($_POST['dateID7']));
                
       /** $tp1 = trim($_POST['maind1']);
        $tp2 = trim($_POST['maind2']);
        $tp3 = trim($_POST['maind3']);
        $tp4 = trim($_POST['maind4']);
        $tp5 = trim($_POST['maind5']);
        $tp6 = trim($_POST['maind6']);
        $tp7 = trim($_POST['maind7']);
        
        $dt1 = trim($_POST['dated1']);
        $dt2 = trim($_POST['dated2']);
        $dt3 = trim($_POST['dated3']);
        $dt4 = trim($_POST['dated4']);
        $dt5 = trim($_POST['dated5']);
        $dt6 = trim($_POST['dated6']);
        $dt7 = trim($_POST['dated7']);
        
        $nt1 = trim($_POST['nameTrain1']);
        $nt2 = trim($_POST['nameTrain2']);
        $nt3 = trim($_POST['nameTrain3']);
        $nt4 = trim($_POST['nameTrain4']);
        $nt5 = trim($_POST['nameTrain5']);
        $nt6 = trim($_POST['nameTrain6']);
        $nt7 = trim($_POST['nameTrain7']);
        
        $dateid1 = trim($_POST['dateID1']);
        $dateid2 = trim($_POST['dateID2']);
        $dateid3 = trim($_POST['dateID3']);
        $dateid4 = trim($_POST['dateID4']);
        $dateid5 = trim($_POST['dateID5']);
        $dateid6 = trim($_POST['dateID6']);
        $dateid7 = trim($_POST['dateID7']);**/
        
       
        
        $lastID = $_SESSION["lastid"];
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        //$strSQL = "INSERT INTO train_d (id, main_d, date, trainer_name) 
                             //VALUES ('$lastID', '$str1', '$str2', '$str3')";
        for($i = 0;$i < 7 ;$i++){
            
       
        $strSQL = "UPDATE train_d SET main_d = '$tp[$i]',
                                           date = '$dt[$i]',
                                           trainer_name = '$nt[$i]'                                         
                  WHERE id = $lastID AND date_id = $dateid[$i]";
        
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
         }
       
        echo "<label>บันทึกข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
