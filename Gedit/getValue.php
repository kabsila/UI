<?php

        include_once ( '../connectDB.php' ); 

        $str0 = trim($_POST['tId']);
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "SELECT * FROM lab_result WHERE id = $str0";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
       
        
        while($objResuut = mysql_fetch_array($objQuery))
	{  
            	echo $objResuut["date_id"]."textForSplit".$objResuut["date"]."textForSplit".$objResuut["FBS"]."textForSplit".$objResuut["LDL"]."textForSplit".$objResuut["HDL"]."textForSplit".$objResuut["cholesterol"]."textForSplit".$objResuut["tg"]."textForSplit".$objResuut["creatinine"]."textForSplit".$objResuut["BUN"]."textForSplit".$objResuut["HbA1C"]."textForSplit";		
	}
        
        
        mysql_close($objConnect);
?>
