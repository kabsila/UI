<?php

        include_once ( '../connectDB.php' ); 

        session_start();

        $str1 = trim($_POST['ttakecarePoint1']);
        $str2 = trim($_POST['ttakecare1']);
        $str3 = trim($_POST['tnamePD1']);
        $str4 = trim($_POST['tnote21']);
        
        $str11 = trim($_POST['ttakecarePoint2']);
        $str22 = trim($_POST['ttakecare2']);
        $str33 = trim($_POST['tnamePD2']);
        $str44 = trim($_POST['tnote22']);
        
        $str111 = trim($_POST['ttakecarePoint3']);
        $str222 = trim($_POST['ttakecare3']);
        $str333 = trim($_POST['tnamePD3']);
        $str444 = trim($_POST['tnote23']);
        
        $str1111 = trim($_POST['ttakecarePoint4']);
        $str2222 = trim($_POST['ttakecare4']);
        $str3333 = trim($_POST['tnamePD4']);
        $str4444 = trim($_POST['tnote24']);
        
        $str15 = trim($_POST['ttakecarePoint5']);
        $str25 = trim($_POST['ttakecare5']);
        $str35 = trim($_POST['tnamePD5']);
        $str45 = trim($_POST['tnote25']);
        
        $str16 = trim($_POST['ttakecarePoint6']);
        $str26 = trim($_POST['ttakecare6']);
        $str36 = trim($_POST['tnamePD6']);
        $str46 = trim($_POST['tnote26']);
        
        $str17 = trim($_POST['ttakecarePoint7']);
        $str27 = trim($_POST['ttakecare7']);
        $str37 = trim($_POST['tnamePD7']);
        $str47 = trim($_POST['tnote27']);
        
        $idt1 = trim($_POST['idtable1']);
        $idt2 = trim($_POST['idtable2']);
        $idt3 = trim($_POST['idtable3']);
        $idt4 = trim($_POST['idtable4']);
        $idt5 = trim($_POST['idtable5']);
        $idt6 = trim($_POST['idtable6']);
        $idt7 = trim($_POST['idtable7']);
         
        
      
        
        
        $lastID = $_POST['tID'];//$_SESSION["lastid"];
        $visitOrder = $_POST['t1']; //$_SESSION["visit_order"];
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
       // $strSQL = "INSERT INTO visit_table (id, visit_order, takecarePoint, takecare, name_d, note) 
                             //VALUES ('$lastID', '$visitOrder', '$str1', '$str2', '$str3', '$str4')";
        
              
        $strSQL = "UPDATE visit_table SET  takecarePoint = '$str1',
                                           takecare = '$str2',
                                           name_d = '$str3',
                                           note = '$str4'
                   WHERE id = $lastID AND visit_order = $visitOrder AND idTable = $idt1";                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        $strSQL = "UPDATE visit_table SET  takecarePoint = '$str11',
                                           takecare = '$str22',
                                           name_d = '$str33',
                                           note = '$str44'
                   WHERE id = $lastID AND visit_order = $visitOrder AND idTable = $idt2";                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        $strSQL = "UPDATE visit_table SET  takecarePoint = '$str111',
                                           takecare = '$str222',
                                           name_d = '$str333',
                                           note = '$str444'
                   WHERE id = $lastID AND visit_order = $visitOrder AND idTable = $idt3";                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        $strSQL = "UPDATE visit_table SET  takecarePoint = '$str1111',
                                           takecare = '$str2222',
                                           name_d = '$str3333',
                                           note = '$str4444'
                   WHERE id = $lastID AND visit_order = $visitOrder AND idTable = $idt4";                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        $strSQL = "UPDATE visit_table SET  takecarePoint = '$str15',
                                           takecare = '$str25',
                                           name_d = '$str35',
                                           note = '$str45'
                   WHERE id = $lastID AND visit_order = $visitOrder AND idTable = $idt5";                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        $strSQL = "UPDATE visit_table SET  takecarePoint = '$str16',
                                           takecare = '$str26',
                                           name_d = '$str36',
                                           note = '$str46'
                   WHERE id = $lastID AND visit_order = $visitOrder AND idTable = $idt6";                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        $strSQL = "UPDATE visit_table SET  takecarePoint = '$str17',
                                           takecare = '$str27',
                                           name_d = '$str37',
                                           note = '$str47'
                   WHERE id = $lastID AND visit_order = $visitOrder AND idTable = $idt7";                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
       
        
        echo "<label>บันทึกข้อมูลเรียบร้อยแล้ว</label>";
        mysql_close($objConnect);
?>
