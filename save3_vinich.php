<?php

        include_once ( 'connectDB.php' ); 
        session_start();

        $checkbox1 = trim($_POST['tCheckbox1']);
        $checkbox2 = trim($_POST['tCheckbox2']);
        $checkbox3 = trim($_POST['tCheckbox3']);
        $checkbox4 = trim($_POST['tCheckbox4']);
        $checkbox5 = trim($_POST['tCheckbox5']);
        
       // $strAnalysis = trim($_POST['tAnalysis']);
        $strInput_other = trim($_POST['tInput_other']);
        $strDrName = trim($_POST['tDrName']);
        //$strNname = trim($_POST['tNname']);
        //$strAsmName = trim($_POST['tAsmName']);
        $strHospital1 = trim($_POST['tHospital1']);
        $strHospital2 = trim($_POST['tHospital2']);
        $strHospital3 = trim($_POST['tHospital3']);
        
       /** if(trim($_POST['tmed1']) == NULL){
            $_POST['tmed1'] = '-';
        }
        if(trim($_POST['tmed2']) == NULL){
            $_POST['tmed2'] = '-';
        }
        if(trim($_POST['tmed3']) == NULL){
            $_POST['tmed3'] = '-';
        }
        if(trim($_POST['tmed4']) == NULL){
            $_POST['tmed4'] = '-';
        }
        if(trim($_POST['tmed5']) == NULL){
            $_POST['tmed5'] = '-';
        }
        if(trim($_POST['tmed6']) == NULL){
            $_POST['tmed6'] = '-';
        }
        if(trim($_POST['tmed7']) == NULL){
            $_POST['tmed7'] = '-';
        }
        if(trim($_POST['tmed8']) == NULL){
            $_POST['tmed8'] = '-';
        }
        if(trim($_POST['tmed9']) == NULL){
            $_POST['tmed9'] = '-';
        }
        if(trim($_POST['tmed10']) == NULL){
            $_POST['tmed10'] = '-';
        }
        
        
        if(trim($_POST['teat1']) == NULL){
            $_POST['teat1'] = '-';
        }
        if(trim($_POST['teat2']) == NULL){
            $_POST['teat2'] = '-';
        }
        if(trim($_POST['teat3']) == NULL){
            $_POST['teat3'] = '-';
        }
        if(trim($_POST['teat4']) == NULL){
            $_POST['teat4'] = '-';
        }
        if(trim($_POST['teat5']) == NULL){
            $_POST['teat5'] = '-';
        }
        if(trim($_POST['teat6']) == NULL){
            $_POST['teat6'] = '-';
        }
        if(trim($_POST['teat7']) == NULL){
            $_POST['teat7'] = '-';
        }
        if(trim($_POST['teat8']) == NULL){
            $_POST['teat8'] = '-';
        }
        if(trim($_POST['teat9']) == NULL){
            $_POST['teat9'] = '-';
        }
        if(trim($_POST['teat10']) == NULL){
            $_POST['teat10'] = '-';
        }
        
        
        $strmed = array( trim($_POST['tmed1']) => trim($_POST['teat1']), 
                         trim($_POST['tmed2']) => trim($_POST['teat2']),
                         trim($_POST['tmed3']) => trim($_POST['teat3']),
                         trim($_POST['tmed4']) => trim($_POST['teat4']),
                         trim($_POST['tmed5']) => trim($_POST['teat5']),
                         trim($_POST['tmed6']) => trim($_POST['teat6']),
                         trim($_POST['tmed7']) => trim($_POST['teat7']),
                         trim($_POST['tmed8']) => trim($_POST['teat8']),
                         trim($_POST['tmed9']) => trim($_POST['teat9']),
                         trim($_POST['tmed10']) => trim($_POST['teat10'])
                        );**/
        
        /**$strmed[$_POST['tmed1']] = $_POST['teat1'];
        $strmed[$_POST['tmed2']] = $_POST['teat2'];
        $strmed[$_POST['tmed3']] = $_POST['teat3'];
        $strmed[$_POST['tmed4']] = $_POST['teat4'];
        $strmed[$_POST['tmed5']] = $_POST['teat5'];
        $strmed[$_POST['tmed6']] = $_POST['teat6'];
        $strmed[$_POST['tmed7']] = $_POST['teat7'];
        $strmed[$_POST['tmed8']] = $_POST['teat8'];
        $strmed[$_POST['tmed9']] = $_POST['teat9'];
        $strmed[$_POST['tmed10']] = $_POST['teat10'];**/
        
        $strmed = array( trim($_POST['tlm1']) => array(trim($_POST['tmed1']) => trim($_POST['teat1'])), 
                         trim($_POST['tlm2']) => array(trim($_POST['tmed2']) => trim($_POST['teat2'])),
                         trim($_POST['tlm3']) => array(trim($_POST['tmed3']) => trim($_POST['teat3'])),
                         trim($_POST['tlm4']) => array(trim($_POST['tmed4']) => trim($_POST['teat4'])),
                         trim($_POST['tlm5']) => array(trim($_POST['tmed5']) => trim($_POST['teat5'])),
                         trim($_POST['tlm6']) => array(trim($_POST['tmed6']) => trim($_POST['teat6'])),
                         trim($_POST['tlm7']) => array(trim($_POST['tmed7']) => trim($_POST['teat7'])),
                         trim($_POST['tlm8']) => array(trim($_POST['tmed8']) => trim($_POST['teat8'])),
                         trim($_POST['tlm9']) => array(trim($_POST['tmed9']) => trim($_POST['teat9'])),
                         trim($_POST['tlm10']) => array(trim($_POST['tmed10']) => trim($_POST['teat10']))
                        );
         
        /**
        $strmed[] = trim($_POST['tmed1']);
        $strmed[] = trim($_POST['tmed2']);
        $strmed[] = trim($_POST['tmed3']);
        $strmed[] = trim($_POST['tmed4']);
        $strmed[] = trim($_POST['tmed5']);
        $strmed[] = trim($_POST['tmed6']);
        $strmed[] = trim($_POST['tmed7']);
        $strmed[] = trim($_POST['tmed8']);
        $strmed[] = trim($_POST['tmed9']);
        $strmed[] = trim($_POST['tmed10']);
        
      $streat = array();
        
        $streat[] = trim($_POST['teat1']);
        $streat[] = trim($_POST['teat2']);
        $streat[] = trim($_POST['teat3']);
        $streat[] = trim($_POST['teat4']);
        $streat[] = trim($_POST['teat5']);
        $streat[] = trim($_POST['teat6']);
        $streat[] = trim($_POST['teat7']);
        $streat[] = trim($_POST['teat8']);
        $streat[] = trim($_POST['teat9']);
        $streat[] = trim($_POST['teat10']);**/
        
        
        
        $strmed_history = trim($_POST['tmed_history']);
        $strspec_food = trim($_POST['tspec_food']);
        //$strsmpai = trim($_POST['tsmpai']);
        $strfamily_info = trim($_POST['tfamily_info']);
        
        
     // if($strAnalysis == "other")
     // {
       //   $strAnalysis = $strInput_other;
     // }
         
        if($checkbox5 == "t")
        {
            $checkbox5 = $strInput_other;
        }
        $lastID = $_SESSION["lastid"];
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "UPDATE general_info SET low_sweet = '$checkbox1',
                                           h_blood = '$checkbox2',
                                           tai_y = '$checkbox3',
                                           h_fail = '$checkbox4',
                                           drname = '$strDrName',
                                           hospital1 = '$strHospital1',
                                           hospital2 = '$strHospital2',
                                           hospital3 = '$strHospital3',                                          
                                           anti_medicine = '$strmed_history',
                                           spac_food = '$strspec_food',
                                           other = '$checkbox5',
                                           family_info = '$strfamily_info'
                   WHERE ID = $lastID";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
       
       
      foreach($strmed as $orDer => $value) 
       {
            foreach($value as $yaName => $yaEat) 
            {
                $strSQL = "UPDATE ya SET ya_name = '$yaName', ya_eat = '$yaEat' WHERE id = $lastID AND ya_order = $orDer";
                $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
            }
            //$strSQL = "UPDATE ya SET ya_name = '$yaName', ya_eat = '$yaEat' WHERE id = $str0 AND ";
            //$objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
            //echo "{$key} <br>";
       }
        echo "<label>บันทึกข้อมูลเรียบร้อยแล้ว</label>";
        
        mysql_close($objConnect);
        
        
?>
