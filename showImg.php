<?php

        include_once ( 'connectDB.php' ); 
        session_start();
         
        $objDB = mysql_select_db("diabetes");
        
        $imgID = $_SESSION['lastid'];
        
        $vPath = "./upload/uploads/";
        
        mysql_query("SET NAMES UTF8");
        $strSQL = "SELECT face FROM general_info WHERE ID = $imgID"; 
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        $row2 = mysql_fetch_array($objQuery);
        
        if($row2['face'] == '')
        {
            $row2['face'] = 'noProfile2.jpg';
        }
        
        echo "<div class='non-immediate-parent-container2' >";
        echo "<a class='fancybox' rel='group' href='".$vPath.$row2['face']."'><img src='".$vPath.$row2['face']."' alt='' /></a>";		
        echo "</div>";
        
        
?>
