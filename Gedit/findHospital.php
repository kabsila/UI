<?php
header('Content-Type: text/html; charset=utf-8');
       include_once ( '../connectDB.php' ); 
        
       // $strName = trim($_POST['str']);
       
        if ( !isset($_REQUEST['term']) )
	exit;
        //if ( !isset($_REQUEST['term']) )
	//exit;
        //$strName = 'aa';
        $return_arr = array();
        $objDB = mysql_select_db("diabetes");
        
        
        
        mysql_query("SET NAMES UTF8");
        //$strSQL = "SELECT name FROM general_info WHERE name LIKE '%$strName%'";
        $strSQL = "SELECT hos_order, hos_name FROM list_hospital WHERE hos_name LIKE '"."%".mysql_real_escape_string($_REQUEST["term"])."%"."'";
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
      //  $objResuut = mysql_fetch_array($objQuery);
        
        $data = array();
if ( $objQuery && mysql_num_rows($objQuery) )
{
    while( $row = mysql_fetch_array($objQuery, MYSQL_ASSOC) )
    {
        $data[] = array('label' => $row['hos_name'] , 'id' => $row['hos_order']);
    }
}
      
        echo json_encode($data);
       
?>
