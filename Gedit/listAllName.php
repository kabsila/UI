<?php

        include_once ( '../connectDB.php' ); 

        
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "SELECT ID, status, name, sname FROM general_info";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
       // echo "<table border='1'>
            //    <tr><td>";
        
        echo "<table border='0' class='inlineTable' id='tm'>
            <tr>
            <th><center>ชาย</center></th>            
            </tr>
            ";
       
        $cTable = 0;
        $men = 0;
        $women = 0;
        
        while($objResuut = mysql_fetch_array($objQuery))
	{         
           
            
                echo '<tr>';
            
            
            $idd = $objResuut["ID"];
            
            if($objResuut["status"] == "nay"){
                                            
                $namep = "นาย".$objResuut["name"]." ".$objResuut["sname"];
                echo "<td><label class='cursorName' id='$idd' >".$namep."</label></td></tr>";
                
            }            
            else{
               // $women++;
              //  $namep = "นางสาว".$objResuut["name"]." ".$objResuut["sname"];
                //echo "<td>".$namep."</td>";
            }
           
			
	}
        
        mysql_data_seek($objQuery, 0);               
        echo "</table>";
        
        
       // echo "</td><td>";
        
        echo "<table border='0' class='inlineTable'>
            <tr>
            <th><center>หญิง</center></th>            
            </tr>
            ";
       
        
        while($objResuut = mysql_fetch_array($objQuery))
	{         
            
            
                echo '<tr>';
            
            $idd = $objResuut["ID"];
          
            
            if($objResuut["status"] == "nang"){
                                            
                $namep = "นาง".$objResuut["name"]." ".$objResuut["sname"];
                echo "<td><label class='cursorName' id='$idd' >".$namep."</label></td></tr>";
                
            }            
            else if($objResuut["status"] == "nangsao"){
               
                $namep = "นางสาว".$objResuut["name"]." ".$objResuut["sname"];
                echo "<td><label class='cursorName' id='$idd' >".$namep."</label></td></tr>";
            }
           
			
	}		
                        
        echo "</table>";
        echo "<div style='clear:both;'></div>";
        
       // echo "</td></tr></table>";
        mysql_close($objConnect);
?>
