<?php
               include_once ( 'connectDB.php' ); 

                session_start();
                $objDB = mysql_select_db("diabetes");
                mysql_query("SET NAMES UTF8");
                $traind_data = array();
                $traind_data2 = array();
               
                //$lastID = $_SESSION["lastid"];
                $strSQL = "SELECT * FROM train_d WHERE id = ".$_SESSION['lastid'];

                $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());        


                while($objResuut = mysql_fetch_array($objQuery))
                {  
                
                      $traind_data += array($objResuut['date_id'] => array($objResuut['date'] => $objResuut['main_d']));
                      $traind_data2 += array($objResuut['date_id'] => array($objResuut['date'] => $objResuut['trainer_name']));
                }
                mysql_close($objConnect);
                
                ?>
 <table class="ex5" id="table9" border="0">
                        <tr>
                            <th colspan="3">การเตรียมผู้ดูแล</th>
                            
                        </tr>
                        <tr>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >ประเด็นที่ได้รับการเตรียม:</label>
                                    <div class="controls" > 
<!--                                        <input class="td"  id="trianPoint" type="text" style="">-->
                                        
                                        <?php
                                                $i = 1;
                                                foreach ($traind_data as $date_id => $array1) {
                                                    foreach ($array1 as $date => $main_d) {

                                                        echo "<input id='trianPoint$i'  type='text' value='{$main_d}'><label id='tdlm$i' style='visibility:hidden;display: inline-block;width: 1px;'>{$date_id}</label><br>";
                                                    }
                                                    $i++;
                                                }

                                                
                                        ?>
                                    </div>
                                </div> 
                            </td>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >วันที่เตรียม:</label>
                                    <div class="controls" > 
<!--                                        <input class="datepicker" id="dateTrain" type="text" style="">-->
                                         <?php
                                                $i = 1;
                                                foreach ($traind_data as $date_id => $array1) {
                                                    foreach ($array1 as $date => $main_d) {

                                                        echo "<input class='datepicker' id='dateTrain$i'  type='text' value='{$date}'><label id='tdlm$i' style='visibility:hidden;display: inline-block;width: 1px;'>{$date_id}</label><br>";
                                                    }
                                                    $i++;
                                                }

                                                
                                        ?>
                                    </div>
                                </div> 
                            </td>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >ผู้เตรียม:</label>
                                    <div class="controls" > 
<!--                                        <input id="nameTrain" class="train" type="text" style="">-->
                                        
                                        <?php
                                                $i = 1;
                                                foreach ($traind_data2 as $date_id => $array1) {
                                                    foreach ($array1 as $date => $tner_name) {

                                                        echo "<input id='nameTrain$i'  type='text' value='{$tner_name}'><label id='tdlm$i' style='visibility:hidden;display: inline-block;width: 1px;'>{$date_id}</label><br>";
                                                    }
                                                    $i++;
                                                }

                                                
                                        ?>
                                    </div>
                                </div> 
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="3"><button class="btn btn-success" id="save7" style="color:#484848; width: 80px">บันทึก</button></td>
                            
                        </tr>
                        <tr>
                            <td colspan="3" style="padding-top:25px;">
                                <button class="btn btn-success" id="finish2" style="color:#484848; width: 200px;">เสร็จสิ้นการบันทึกในส่วนนี้</button>
                            </td>
                            
                        </tr>
                    </table>