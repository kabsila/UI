<?php

        include_once ( 'connectDB.php' ); 
        session_start();

        $strAnalysis = trim($_POST['tAnalysis']);
        $strInput_other = trim($_POST['tInput_other']);
        $strDrName = trim($_POST['tDrName']);
        //$strNname = trim($_POST['tNname']);
        //$strAsmName = trim($_POST['tAsmName']);
        $strHospital1 = trim($_POST['tHospital1']);
        $strHospital2 = trim($_POST['tHospital2']);
        $strHospital3 = trim($_POST['tHospital3']);
        $strmed = trim($_POST['tmed']);
        $strmed_history = trim($_POST['tmed_history']);
        $strspec_food = trim($_POST['tspec_food']);
        //$strsmpai = trim($_POST['tsmpai']);
        $strfamily_info = trim($_POST['tfamily_info']);
        
        
      if($strAnalysis == "other"){
          $strAnalysis = $strInput_other;
      }
                
        $lastID = $_SESSION["lastid"];
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "UPDATE general_info SET analysis = '$strAnalysis', 
                                           drname = '$strDrName',
                                           hospital1 = '$strHospital1',
                                           hospital2 = '$strHospital2',
                                           hospital3 = '$strHospital3',
                                           medicine = '$strmed',
                                           anti_medicine = '$strmed_history',
                                           spac_food = '$strspec_food',                                           
                                           family_info = '$strfamily_info'
                   WHERE ID = $lastID";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
       
        echo "<label>บันทึกข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
        
        
?>
