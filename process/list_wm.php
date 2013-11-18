<?php

        include_once ( '../connectDB.php' ); 

        //$str0 = trim($_POST['tId']);
        
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "SELECT * FROM general_info WHERE status != 'nay'";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        $status = '';
        $i = 1;
        echo "<center><table border='0'><tr><th>ลำดับ</th><th>ชื่อ - นามสกุล</th></tr>";
        while($objResuut = mysql_fetch_array($objQuery))
	{ 
                if($objResuut["status"] == 'nang'){
                    $status = 'นาง';
                }else{
                    $status = 'นางสาว';
                }
            	echo "<tr><td><center>".$i."</center></td><td>".$status.$objResuut["name"]." ".$objResuut["sname"]."</td></tr>";	
                $i++;
	}
        
        echo "</table></center>";
        
        
        mysql_close($objConnect);
     
?>
