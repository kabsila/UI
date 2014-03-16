<?php
include_once ( 'connectDB.php' ); 

                session_start();
                $objDB = mysql_select_db("diabetes");
                mysql_query("SET NAMES UTF8");
                $pland_data = array();
                $pland_data2 = array();
               
                //$lastID = $_SESSION["lastid"];
                $strSQL = "SELECT * FROM plan_d WHERE id = ".$_SESSION['lastid'];

                $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());        


                while($objResuut = mysql_fetch_array($objQuery))
                {  
                
                      $pland_data += array($objResuut['idd'] => array($objResuut['main_takecare'] => $objResuut['takecare']));
                      $pland_data2 += array($objResuut['idd'] => array($objResuut['name_d'] => $objResuut['note']));
                }
                mysql_close($objConnect);
?>
<table class="ex5" id="table10" border="0">
                        <tr>
                            <th colspan="4">แผนการดูแลที่บ้าน</th>
                            
                        </tr>
                        <tr>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >ประเด็นที่ดูแล:</label>
                                    <div class="controls" > 
<!--                                        <input class="td"  id="planPoint" type="text" style="">-->
                                        <?php
                                                $i = 1;
                                                foreach ($pland_data as $idd => $array1) {
                                                    foreach ($array1 as $maintake => $takcare) {

                                                        echo "<input class='pland' id='planPoint$i'  type='text' value='{$maintake}'><label id='pdlm$i' style='visibility:hidden;display: inline-block;width: 1px;'>{$idd}</label><br>";
                                                    }
                                                    $i++;
                                                }

                                                
                                        ?>
                                    </div>
                                </div> 
                            </td>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >แนวทางการดูแล:</label>
                                    <div class="controls" > 
<!--                                        <input class="" id="wayD" type="text" style="">-->
                                        <?php
                                                $i = 1;
                                                foreach ($pland_data as $idd => $array1) {
                                                    foreach ($array1 as $maintake => $takcare) {

                                                        echo "<input class='pland' id='wayD$i'  type='text' value='{$takcare}'><label id='pdlm$i' style='visibility:hidden;display: inline-block;width: 1px;'>{$idd}</label><br>";
                                                    }
                                                    $i++;
                                                }

                                                
                                        ?>
                                    </div>
                                </div> 
                            </td>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >ผู้ที่ดูแล:</label>
                                    <div class="controls" > 
<!--                                        <input  id="namedd" class="train" type="text" style="">-->
                                        <?php
                                                $i = 1;
                                                foreach ($pland_data2 as $idd => $array1) {
                                                    foreach ($array1 as $named => $note) {

                                                        echo "<input class='pland' id='namedd$i'  type='text' value='{$named}'><label id='pdlm$i' style='visibility:hidden;display: inline-block;width: 1px;'>{$idd}</label><br>";
                                                    }
                                                    $i++;
                                                }

                                                
                                        ?>
                                    </div>
                                </div> 
                            </td>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >หมายเหตุ:</label>
                                    <div class="controls" > 
<!--                                        <input class="td"  id="mark" type="text" style="">-->
                                        
                                        <?php
                                                $i = 1;
                                                foreach ($pland_data2 as $idd => $array1) {
                                                    foreach ($array1 as $named => $note) {

                                                        echo "<input class='pland' id='mark$i'  type='text' value='{$note}'><label id='pdlm$i' style='visibility:hidden;display: inline-block;width: 1px;'>{$idd}</label><br>";
                                                    }
                                                    $i++;
                                                }

                                                
                                        ?>
                                    </div>
                                </div> 
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="4"><button class="btn btn-success" id="save8" style="color:#484848; width: 80px">บันทึก</button></td>
                            
                        </tr>
                        <tr>
                            <td colspan="4" style="padding-top:25px;">
                                <button class="btn btn-success" id="finish3" style="color:#484848; width: 200px;">เสร็จสิ้นการบันทึกในส่วนนี้</button>
                            </td>
                            
                        </tr>
                    </table>