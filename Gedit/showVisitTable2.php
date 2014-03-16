<table class="ex5" id="table12" border="0">
                        <tr>
                            <th colspan="4">บันทึกการดูแลจากการเยี่ยมบ้าน</th>
                             <?php
                                include_once ( '../connectDB.php' ); 

                                 session_start();
                                 
                                 $visorder = $_POST["tvisit_order2"];
                                 
                                 $objDB = mysql_select_db("diabetes");
                                 mysql_query("SET NAMES UTF8");
                                 $vistable_data = array();
                                 $vistable_data2 = array();
                                 $vistable_data3 = array();
                                 $vistable_data4 = array();
                                 $lastID = $_POST["tID"];
                                 $strSQL = "SELECT * FROM visit_table WHERE id = $lastID";//.$_SESSION['lastid'];

                                 $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());        


                                 while($objResuut = mysql_fetch_array($objQuery))
                                 {  
                                 
                                 //$vistable_data += array($objResuut['visit_order'] => array($objResuut['idTable'] => $objResuut['takecarePoint']));
                                 //$med = array($objResuut1['ya_order'] => array("yaName" => $objResuut1['ya_name'], "eat" => $objResuut1['ya_eat']));
                                    //$vistable_data += array($objResuut['visit_order'] => array($objResuut['idTable'] => array('tkp' => $objResuut['takecarePoint'], 'tk' => $objResuut['takecare'], 'nd' => $objResuut['name_d'], 'note' => $objResuut['note'])));
                                     $vistable_data += array($objResuut['idTable'] => array($objResuut['visit_order'] => $objResuut['takecarePoint']));
                                     $vistable_data2 += array($objResuut['idTable'] => array($objResuut['visit_order'] => $objResuut['takecare']));
                                     $vistable_data3 += array($objResuut['idTable'] => array($objResuut['visit_order'] => $objResuut['name_d']));
                                     $vistable_data4 += array($objResuut['idTable'] => array($objResuut['visit_order'] => $objResuut['note']));
                                     //$vistable_data2 += array($objResuut['idTable'] => $objResuut['takecarePoint']);
                                 }
                                 mysql_close($objConnect);
                                 //print_r($vistable_data);
                                 foreach ($vistable_data as $idTable => $array1) {
                                     foreach ($array1 as $visit_order => $tkp) {
                                        // echo "{$visit_order} ";
                                     }
                                     
                                     
                                 }
                                  
                ?>
                        </tr>
                        <tr>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >ประเด็นที่ดูแล:</label>
                                    <div class="controls" > 
<!--                                        <input   type="text" id="takecarePoint" style="">-->
                                        <?php
                                                $i = 1;
                                                foreach ($vistable_data as $idTable => $array1) {
                                                    if($i > 4){$i = 1;}
                                                    foreach ($array1 as $visit_order => $tkp) {
                                                        
                                                        if($visit_order == $visorder){
                                                            echo "<input id='takecarePoint$i' class='takecarePoint' type='text' value='{$tkp}'><label id='vlm$i' style='visibility:hidden;display: inline-block;width: 1px;'>{$idTable}</label><br>";
                                                        }
                                                    
                                                    }
                                                    $i++;
                                                }

                                               // for ($k = $i; $k <= 4; $k++) {
                                                   // echo "<input id='med$k' class='list_ya' type='text' value=''><label id='lm$k' style='visibility:hidden;display: inline-block;width: 1px;'></label>";
                                               // }
                                        ?>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >การดูแล:</label>
                                    <div class="controls" > 
<!--                                        <input   type="text" id="takecare" style="">-->
                                         <?php
                                               $i = 1;
                                                foreach ($vistable_data2 as $idTable => $array1) {
                                                     if($i > 4){$i = 1;}
                                                    foreach ($array1 as $visit_order => $tkp) {
                                                        if($visit_order == $visorder){
                                                            echo "<input id='takecare$i' class='takecare' type='text' value='{$tkp}'><label id='vlm$i' style='visibility:hidden;display: inline-block;width: 1px;'>{$idTable}</label><br>";
                                                        }
                                                    
                                                    }
                                                    $i++;
                                                }

                                               // for ($k = $i; $k <= 4; $k++) {
                                                   // echo "<input id='med$k' class='list_ya' type='text' value=''><label id='lm$k' style='visibility:hidden;display: inline-block;width: 1px;'></label>";
                                               // }
                                        ?>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >ผู้ดูแล:</label>
                                    <div class="controls" > 
<!--                                        <input id="namePD" class="train"  type="text">-->
                                        <?php
                                                $i = 1;
                                                foreach ($vistable_data3 as $idTable => $array1) {
                                                   if($i > 4){$i = 1;}
                                                    foreach ($array1 as $visit_order => $tkp) {
                                                        if($visit_order == $visorder){
                                                            echo "<input id='namePD$i' class='takecarePoint' type='text' value='{$tkp}'><label id='vlm$i' style='visibility:hidden;display: inline-block;width: 1px;'>{$idTable}</label><br>";
                                                        }
                                                   
                                                    }
                                                     $i++;
                                                }

                                               // for ($k = $i; $k <= 4; $k++) {
                                                   // echo "<input id='med$k' class='list_ya' type='text' value=''><label id='lm$k' style='visibility:hidden;display: inline-block;width: 1px;'></label>";
                                               // }
                                        ?>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >หมายเหตุ:</label>
                                    <div class="controls" > 
<!--                                        <input   type="text" id="note2" value="-">-->
                                        <?php
                                                $i = 1;
                                                foreach ($vistable_data4 as $idTable => $array1) {
                                                    if($i > 4){$i = 1;}
                                                    foreach ($array1 as $visit_order => $tkp) {
                                                        if($visit_order == $visorder){
                                                            echo "<input id='note2$i' class='takecarePoint' type='text' value='{$tkp}'><label id='vlm$i' style='visibility:hidden;display: inline-block;width: 1px;'>{$idTable}</label><br>";
                                                        }
                                                      
                                                    }
                                                  $i++;
                                                }

                                               // for ($k = $i; $k <= 4; $k++) {
                                                   // echo "<input id='med$k' class='list_ya' type='text' value=''><label id='lm$k' style='visibility:hidden;display: inline-block;width: 1px;'></label>";
                                               // }
                                        ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <button class="btn btn-success" id="save10" style="color:#484848; width: 90px">บันทึกเพิ่ม</button>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="4" style="padding-top:25px;">
                                <button class="btn btn-success" id="finish5" style="color:#484848; width: 200px;">เสร็จสิ้นการบันทึกในส่วนนี้</button>
                            </td>
                            
                        </tr>
                    </table>