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
        $strSQL = "SELECT ID,name FROM general_info WHERE name LIKE '"."%".mysql_real_escape_string($_REQUEST["term"])."%"."'";
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
      //  $objResuut = mysql_fetch_array($objQuery);
        
        $data = array();
if ( $objQuery && mysql_num_rows($objQuery) )
{
    while( $row = mysql_fetch_array($objQuery, MYSQL_ASSOC) )
    {
        $data[] = array('label' => $row['name'] , 'id' => $row['ID']);
    }
}
        
       //  while($objResuut = mysql_fetch_array($objQuery))
       // { 
      //       //$return_arr[] = $objResuut["name"];
        //     echo $objResuut["name"];
       // }
        //utf8_encode($data);
        //$data =iconv("","utf-8",$data);
        echo json_encode($data);
        //flush();
        //echo $return_arr;
        
      

 /**
//Gets the sports team from the super-global POST that gets sent along from the AJAX call.
$sport = $_POST["sport"];

//Defines the basketball team array.
$basketball[0] = "Milwaukee Bucks";
$basketball[1] = "Chicago Bulls";
$basketball[2] = "Minnesota Timberwolves";

//Defines the football team array.
$football[0] = "Green Bay Packers";
$football[1] = "Chicago Bears";
$football[2] = "Minnesota Vikings";

//Defines the baseball team array.
$baseball[0] = "Milwaukee Brewers";
$baseball[1] = "Chicago Cubs";
$baseball[2] = "Chicago Whitesox";

//Defines an empty variable that will return the javascript array.
$teams = "";
switch($sport){
    case "Basketball":
        $teams = generateAutocompleteArray($basketball);
    break;

    case "Football":
        $teams = generateAutocompleteArray($football);
        //json_encode($football);
    break;

    case "Baseball":
        $teams = generateAutocompleteArray($baseball);
    break;
}
//Returns the teams in the appropriate javascript array format.
echo $teams;

//Function converts PHP array a string where it can be split into an array easily.
function generateAutocompleteArray($teamArray){
    $jsTeamArray = "";
    
    $teamCount = count($teamArray);
    for($i=0; $i<$teamCount; $i++){
        $jsTeamArray.= $teamArray[$i].',';
    }
    //Removes the remaining comma so you don't get a blank autocomplete option.
    $jsTeamArray = substr($jsTeamArray, 0, -1);
        
    return $jsTeamArray;
}
  **/

?>
