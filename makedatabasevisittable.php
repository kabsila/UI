<?php

header('Content-Type: text/html; charset=utf-8');
$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");




//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
$objDB = mysql_select_db("diabetes");
mysql_query("SET NAMES UTF8");
//$strSQL = "INSERT INTO general_info (status, name, sname) VALUES ('$strStatus', '$strFname', '$strSname')";

//$lastID = 175; //$_GET["lid"];

$strSQL = "SELECT * FROM general_info";
$objQuery = mysql_query($strSQL) or die("Error in query: $strSQL. " . mysql_error());
while ($objResuut = mysql_fetch_array($objQuery)) {
    $lastID = $objResuut["ID"];

    $strSQL = "SELECT COUNT(*) as total FROM visit_table WHERE id = $lastID and visit_order = 1";
    $objQuery1 = mysql_query($strSQL) or die("Error in query: $strSQL. " . mysql_error());
    $objResuut1 = mysql_fetch_array($objQuery1);
    //echo $objResuut['total'];

    $v1 = $objResuut1['total'];

    $strSQL = "SELECT COUNT(*) as total FROM visit_table WHERE id = $lastID and visit_order = 2";
    $objQuery1 = mysql_query($strSQL) or die("Error in query: $strSQL. " . mysql_error());
    $objResuut1 = mysql_fetch_array($objQuery1);
    //echo $objResuut['total'];

    $v2 = $objResuut1['total'];
    
    $strSQL = "SELECT COUNT(*) as total FROM visit_table WHERE id = $lastID and visit_order = 3";
    $objQuery1 = mysql_query($strSQL) or die("Error in query: $strSQL. " . mysql_error());
    $objResuut1 = mysql_fetch_array($objQuery1);
    //echo $objResuut['total'];

    $v3 = $objResuut1['total'];

    for ($i = 0; $i < 7 - $v1; $i++) {
        $strSQL = "INSERT INTO visit_table (id, visit_order) VALUE ($lastID, 1)";
        $objQuery1 = mysql_query($strSQL) or die("Error in query: $strSQL. " . mysql_error());
    }
    
    for ($i = 0; $i < 7 - $v2; $i++) {
        $strSQL = "INSERT INTO visit_table (id, visit_order) VALUE ($lastID, 2)";
        $objQuery1 = mysql_query($strSQL) or die("Error in query: $strSQL. " . mysql_error());
    }
    
    for ($i = 0; $i < 7 - $v3; $i++) {
        $strSQL = "INSERT INTO visit_table (id, visit_order) VALUE ($lastID, 3)";
        $objQuery1 = mysql_query($strSQL) or die("Error in query: $strSQL. " . mysql_error());
    }
    
}



/** $strSQL = "INSERT INTO visit_home (id, visit_order) VALUE ($lastID, 1)";
  $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
  $strSQL = "INSERT INTO visit_home (id, visit_order) VALUE ($lastID, 2)";
  $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
  $strSQL = "INSERT INTO visit_home (id, visit_order) VALUE ($lastID, 3)";
  $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());

  $strSQL = "INSERT INTO visit_table (id, visit_order) VALUE ($lastID, 1)";
  $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
  $strSQL = "INSERT INTO visit_table (id, visit_order) VALUE ($lastID, 1)";
  $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
  $strSQL = "INSERT INTO visit_table (id, visit_order) VALUE ($lastID, 1)";
  $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
  $strSQL = "INSERT INTO visit_table (id, visit_order) VALUE ($lastID, 1)";
  $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());

  $strSQL = "INSERT INTO visit_table (id, visit_order) VALUE ($lastID, 2)";
  $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
  $strSQL = "INSERT INTO visit_table (id, visit_order) VALUE ($lastID, 2)";
  $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
  $strSQL = "INSERT INTO visit_table (id, visit_order) VALUE ($lastID, 2)";
  $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
  $strSQL = "INSERT INTO visit_table (id, visit_order) VALUE ($lastID, 2)";
  $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());

  $strSQL = "INSERT INTO visit_table (id, visit_order) VALUE ($lastID, 3)";
  $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
  $strSQL = "INSERT INTO visit_table (id, visit_order) VALUE ($lastID, 3)";
  $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
  $strSQL = "INSERT INTO visit_table (id, visit_order) VALUE ($lastID, 3)";
  $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
  $strSQL = "INSERT INTO visit_table (id, visit_order) VALUE ($lastID, 3)";
  $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());* */
// $strSQL = "INSERT INTO ya (id) VALUE ($lastID)";
//$objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());



echo "</br>";
echo "<div id='info'>";
echo "<label>Database added</label></br>";
// echo "<button class='btn btn-large btn-primary' id='btninfo' type='button'>เพิ่มข้อมูลของ $staa$strFname  $strSname</button>";
echo "</div>";
// btn btn-info





mysql_close($objConnect);
/**
  $con=mysqli_connect("localhost","root","","diabetes");


  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $strSQL = "INSERT INTO general_info (name, sname) VALUES ('$strFname', '$strSname')";
  mysqli_query($con,$strSQL);

  if (!mysqli_query($con, "SET a=1"))
  {
  printf("Errormessage: %s\n", mysqli_error($con));
  echo mysqli_error($con);
  }

  echo $strFname." and ".$strSname." Submited";

  mysqli_close($con);
 * */
/* * ------------------------------------------------* */
?>
