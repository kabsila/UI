<?php

header('Content-Type: text/html; charset=utf-8');
include_once ( '../connectDB.php' ); 
           

        $str0 = trim($_POST['tId']);
        //$str1 = trim($_POST['t1']);
        $str2 = trim($_POST['t2']);
        $str3 = trim($_POST['t3']);
        $str4 = trim($_POST['t4']);
        $str5 = trim($_POST['t5']);
        $str6 = trim($_POST['t6']);
       // $str7 = trim($_POST['t7']);
        $str8 = trim($_POST['t8']);
        $str9 = trim($_POST['t9']);
        $str10 = trim($_POST['t10']);
        
        $checkbox1 = trim($_POST['tCheckbox1']);
        $checkbox2 = trim($_POST['tCheckbox2']);
        $checkbox3 = trim($_POST['tCheckbox3']);
        $checkbox4 = trim($_POST['tCheckbox4']);
        $checkbox5 = trim($_POST['tCheckbox5']);
        
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
        
       
     /**   $strStatus = trim($_POST['tStatus']);
        $strFname = trim($_POST['tFname']);
	$strSname = trim($_POST['tSname']);
        
        if(trim($strFname) == "")
	{
		echo "<font color=red>**</font> กรุณาใส่ชื่อและนามสกุลของผู้ป่วย";
		exit();
	}
	
	
	if(trim($strSname) == "")
	{
		echo "<font color=red>**</font> กรุณาใส่ชื่อและนามสกุลของผู้ป่วย";
		exit();
	}**/
        
        if($checkbox5 == "t")
        {
            $checkbox5 = $str2;
        }
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");
        //$strSQL = "SELECT ID FROM general_info WHERE (name = '$name1') AND (sname = '$sname1')";        
        //$objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
       // $row = mysql_fetch_array($objQuery);
        //$id =  $row['ID'];
        //$id =  136;
        
        $strSQL = "UPDATE general_info SET low_sweet = '$checkbox1', 
                                           h_blood = '$checkbox2',
                                           tai_y = '$checkbox3',
                                           h_fail = '$checkbox4',
                                           other = '$checkbox5',
                                           drname = '$str3',
                                           hospital1 = '$str4',
                                           hospital2 = '$str5',
                                           hospital3 = '$str6',
                                          
                                           anti_medicine = '$str8',
                                           spac_food = '$str9',
                                           family_info = '$str10'
                                           
                   WHERE ID = $str0";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        
        foreach($strmed as $orDer => $value) 
       {
            foreach($value as $yaName => $yaEat) 
            {
                $strSQL = "UPDATE ya SET ya_name = '$yaName', ya_eat = '$yaEat' WHERE id = $str0 AND ya_order = $orDer";
                $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
            }
            //$strSQL = "UPDATE ya SET ya_name = '$yaName', ya_eat = '$yaEat' WHERE id = $str0 AND ";
            //$objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
            //echo "{$key} <br>";
       }
        //echo $row['ID'];
       // echo "</br>";
        
        echo "<label>บันทึกการแก้ไขข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
