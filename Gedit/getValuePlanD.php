<?php

        include_once ( '../connectDB.php' ); 

        $str0 = trim($_POST['tId']);
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "SELECT * FROM plan_d WHERE id = $str0";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
       
        
        while($objResuut = mysql_fetch_array($objQuery))
	{  
            	echo $objResuut["idd"]."textForSplit".$objResuut["main_takecare"]."textForSplit".$objResuut["takecare"]."textForSplit".$objResuut["name_d"]."textForSplit".$objResuut["note"]."textForSplit";		
	}
        
        
        mysql_close($objConnect);
?>
