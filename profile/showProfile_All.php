<?php

        include_once ( '../connectDB.php' ); 

        $str0 = trim($_POST['tID']);
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "SELECT * FROM general_info WHERE id = $str0";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
       $objResuut = mysql_fetch_array($objQuery);
        
       $staa = '';
        if($objResuut["status"] == 'nay')
        {
            $staa = 'นาย';
        }
        elseif ($objResuut["status"] == 'nang') 
        {
            $staa = 'นาง';
        }
        elseif ($objResuut["status"] == 'nangsao')
        {
            $staa = 'นางสาว';
            //echo "นางสาว".$strFname." ".$strSname." ได้ถูกเพิ่มชื่อลงในฐานข้อมูลผู้ป่วยเบาหวานแล้ว";
        } 
       // while()
	//{  
            	//echo $objResuut["date"]." ".$objResuut["FBS"]." ".$objResuut["LDL"]." ".$objResuut["HDL"]." ".$objResuut["cholesterol"]." ".$objResuut["creatinine"]." ".$objResuut["BUN"]." ".$objResuut["HbA1C"]." ";		
	//}
      
?>

<div id="Pro1" style="">
    
    <?php
        $vPath = "./upload/uploads/";
        
        mysql_query("SET NAMES UTF8");
        $strSQL = "SELECT face FROM general_info WHERE ID = $str0"; 
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
    
    <center><table class='ex-pro1' border='0' >
        <tr>
            <td>
                <div class='control-group'>
                    <label class='control-label' ><b>ชื่อผู้ป่วย</b></label> 
                    <label type='text' class='control-label'><?php echo $staa.$objResuut["name"]; ?></label>
                    
                    <label class='control-label' ><b>นามสกุล</b></label>  
                    <label type='text' class='control-label'><?php echo $objResuut["sname"]; ?></label>
                    
                    <label class='control-label' ><b>อายุ</b></label> 
                    <label type='text' class='control-label'><?php echo $objResuut["age"]." ปี"; ?></label><br><br>

                </div>

            </td>           

        </tr>
        <tr>
            <td>
                <div class='control-group'>
                    <label class='control-label' ><b>ชื่อผู้ดูแล</b></label> 
                    <label type='text' class='control-label'><?php echo $objResuut["name_d"]; ?></label>
                    
                    <label class='control-label' ><b>นามสกุล</b></label>  
                    <label type='text' class='control-label'><?php echo $objResuut["sname_d"]; ?></label>
                    
                    <label class='control-label' ><b>ความเกี่ยวข้อง</b></label> 
                    <label type='text' class='control-label'><?php echo $objResuut["relation"]; ?></label><br><br>

                </div>

            </td>           

        </tr>
        
        
        <?php

        
            $strSQL = "SELECT * FROM address WHERE id = $str0";

            $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());

            $objResuut = mysql_fetch_array($objQuery);
        
       
      
        ?>
        
        <tr>
            <td>
                <div class='control-group'>
                    <label class='control-label' ><b>ที่อยู่</b></label> 
                    <label type='text' class='control-label'><?php echo $objResuut["address_num"]; ?></label>
                    
                    <label class='control-label' ><b>ถนน</b></label>  
                    <label type='text' class='control-label'><?php echo $objResuut["road"]; ?></label>
                    
                    <label class='control-label' ><b>ตำบล</b></label> 
                    <label type='text' class='control-label'><?php echo $objResuut["tumbol"]; ?></label>
                    
                    <label class='control-label' ><b>อำเภอ</b></label> 
                    <label type='text' class='control-label'><?php echo $objResuut["aumphor"]; ?></label>
                    
                    <label class='control-label' ><b>จังหวัด</b></label> 
                    <label type='text' class='control-label'><?php echo $objResuut["city"]; ?></label>
                    
                    <label class='control-label' ><b>รหัสไปรษณีย์</b></label> 
                    <label type='text' class='control-label'><?php echo $objResuut["zipcode"]; ?></label><br>
                    
                    <label class='control-label' ><b>Latitude</b></label> 
                    <label type='text' class='control-label' id="lat"><?php echo $objResuut["latitude"]; ?></label>
                    
                    <label class='control-label' ><b>Longitude</b></label> 
                    <label type='text' class='control-label'id="long"><?php echo $objResuut["longitude"]; ?></label>
                    
                    <button class='btn btn-primary' id='mapView' style='width: 80px'>ดูแผนที่</button><br><br>

                </div>

            </td>           

        </tr>
        
        <tr>
            <td>
                <div class='control-group'>
                    <label class='control-label' ><b>วันที่รับไว้ในการเยี่ยม</b></label> 
                    <label type='text' class='control-label'><?php echo $objResuut["date_accp"]; ?></label><br>
                </div>
            </td>
        </tr>
        
        
         <?php

        
            $strSQL = "SELECT * FROM general_info WHERE id = $str0";

            $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());

            $objResuut = mysql_fetch_array($objQuery);
        
       
            //$ana = $objResuut["analysis"];
            //$oth = $objResuut["other"];
        ?>
        
        <tr>
            
        <?php

        
            $strSQL2 = "SELECT * FROM ya WHERE id = $str0";

            $objQuery2 = mysql_query($strSQL2) or die ("Error in query: $strSQL2. ".mysql_error());

            $yaa = array();
            while($objResuut2 = mysql_fetch_array($objQuery2))
            {
                $yaa += array($objResuut2['ya_name'] => $objResuut2['ya_eat']);
            }
            
        
        ?>
            <td>
                <div class='control-group'>
                    <label class='control-label' ><b>การวินิจฉัย</b></label> 
                    <label type='text' class='control-label' style="display:inline-block;">
                        <?php 
                            if($objResuut["low_sweet"] == 't') 
                            {
                                echo "เบาหวาน, ";
                            }
                            elseif ($objResuut["h_blood"] == 't') 
                            {
                                echo "ความดันโลหิตสูง, ";
                            }
                            elseif ($objResuut["tai_y"] == 't') 
                            {
                                echo "ไตวาย, ";
                            }
                            elseif ($objResuut["h_fail"] == 't') 
                            {
                                echo "หัวใจล้มเหลว, ";
                            }
                            elseif ($objResuut["other"] != 'f') 
                            {
                                echo $objResuut["other"];
                            }
                        ?>
                        
                    </label>
                    
                    
                    <label class='control-label' ><b>ชื่อแพทย์ผู้ดูแล</b></label> 
                    <label type='text' class='control-label'><?php echo $objResuut["drname"]; ?></label><br>
                    
                    <label class='control-label' ><b>โรงยาบาลที่รับการรักษา 1:</b></label> 
                    <label type='text' class='control-label'><?php echo $objResuut["hospital1"]; ?></label><br>
                    
                    <label class='control-label' ><b>โรงยาบาลที่รับการรักษา 2:</b></label> 
                    <label type='text' class='control-label'><?php echo $objResuut["hospital2"]; ?></label><br>
                    
                    <label class='control-label' ><b>โรงยาบาลที่รับการรักษา 3:</b></label> 
                    <label type='text' class='control-label'><?php echo $objResuut["hospital3"]; ?></label><br>
              </div> 
            </td>
        </tr>
        <tr>
            <td>
                <label class='control-label' ><b>ยาที่ได้รับ</b></label>
                <table>
                    <tr>
                        <td>
                           <label class='control-label' ><b>ชื่อยา</b></label><br>
                            <?php
                           
                                  foreach ($yaa as $yan => $yae)
                                  {
                                      echo "<label class='control-label' >{$yan}</label><br>";
                                      
                                  }
                            ?>
                           
                        </td>
                        <td>
                            <label class='control-label' ><b>วิธีการรับประทาน</b></label><br>
                            <?php
                                  foreach ($yaa as $yan => $yae)
                                  {
                                      echo "<label class='control-label' >{$yae}</label><br>";
                                  }
                            ?>
                             
                        </td>
                    </tr>
                </table>
                    
                    
                    <label type='text' class='control-label'><?php echo $objResuut["medicine"]; ?></label>
            </td>     
        </tr>
        <tr>
            <td>
                    <label class='control-label' ><b>ประวัติการแพ้ยา</b></label> 
                    <label type='text' class='control-label'><?php echo $objResuut["anti_medicine"]; ?></label><br>
                    
                    <label class='control-label' ><b>อาหารเฉพาะ</b></label> 
                    <label type='text' class='control-label'><?php echo $objResuut["spac_food"]; ?></label>
                    
                    <label class='control-label' ><b>ข้อมูลครอบครัวและผู้ดูแล </b></label> 
                    <label type='text' class='control-label' ><?php echo $objResuut["family_info"]; ?></label>
            </td>
         </tr>       
           
        
        <?php

        
            $strSQL = "SELECT * FROM first_rate WHERE id = $str0";

            $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());

            $objResuut = mysql_fetch_array($objQuery);
        
        ?>
        
        <tr>
            <td>
                <div>
                    <label class='control-label' ><b>การประเมินครั้งแรกที่รับไว้ในการดูแล </b></label> 
                    <label type='text' class='control-label' ><?php echo $objResuut["first_rateData"]; ?></label>
                    
                    <label class='control-label' ><b>ความดันโลหิต </b></label> 
                    <label type='text' class='control-label' ><?php echo $objResuut["blood_p"]; ?></label>
                </div>
            </td>
        </tr>
        
    </table></center>
</div>



<div id="menu4-55" style="background-color:#000000;height:auto;width:700px; border-radius:25px;color: #ecf0f1;display:inline-block;">
    <label class="" >ภาพที่เกี่ยวข้องกับผู้ป่วย:</label>
<!--        <table>-->
    <?php
        $strSQL = "SELECT * FROM img WHERE ID = $str0";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        $vPath = "./upload/uploads/";
        //echo "<tr>";
        while($objResuut = mysql_fetch_array($objQuery))
	{  
            echo "<div class='non-immediate-parent-container' >";
            echo "<a class='fancybox' rel='group1' href='".$vPath.$objResuut["path"]."'><img src='".$vPath.$objResuut["path"]."' alt='' /></a>";		
            echo "</div>";
            
        }
         //echo "</tr>";
?>
<!--        </table>-->
        
    
</div>


        <?php

        
            $strSQL = "SELECT * FROM lab_result WHERE id = $str0";

            $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());

            //$objResuut = mysql_fetch_array($objQuery);
            //while($objResuut = mysql_fetch_array($objQuery))
            //{
                
            //}
            $numCell = 0;
        
        ?>

<div id="Pro2" style="">
    
    <label type='text' class='n-label' style="margin-bottom: 12px;">ผลการตรวจจากห้องทดลอง</label>
    
    <center><table class='ex-pro2' border='3'style="border: 2px solid #ecf0f1;" >
        <tr>
            <td>
                <label type='text' class='control-label' >ลำดับ</label>
            </td>
            <td>
                <label type='text' class='control-label' >ผลการตรวจ</label>
            </td>
             <?php
                    while($objResuut = mysql_fetch_array($objQuery))
                   {
                        echo "<td class='n-label'>".$objResuut["date"]."</td>";
                        $numCell += 1;
                   }
                   mysql_data_seek($objQuery, 0) or die ("ไม่มีข้อมูล");
             ?>
        </tr>
        <tr>
            <td>
                <label type='text' class='control-label' >1</label>
            </td>
            <td>
                <label type='text' class='control-label' >น้ำตาลในเลือด (FBS mg%)</label>
            </td>
             <?php
                    while($objResuut = mysql_fetch_array($objQuery))
                   {
                        echo "<td class='n-label'>".$objResuut["FBS"]."</td>";
                   }
                   mysql_data_seek($objQuery, 0);
             ?>
        </tr>
        <tr>
            <td>
                <label type='text' class='control-label' >2</label>
            </td>
            <td>
                <label type='text' class='control-label' >ไขมันในเลือด</label>
            </td>
             <?php
                   
                        echo "<td colspan='$numCell' >"."</td>";
                  
             ?>
        </tr>
        <tr>
            <td>
                <label type='text' class='control-label' >2.1</label>
            </td>
            <td>
                <label type='text' class='control-label' >แอลดีแอล (LDL)</label>
            </td>
             <?php
                    while($objResuut = mysql_fetch_array($objQuery))
                   {
                        echo "<td class='n-label'>".$objResuut["LDL"]."</td>";
                   }
                   mysql_data_seek($objQuery, 0);
             ?>
        </tr>
        <tr>
            <td>
                <label type='text' class='control-label' >2.2</label>
            </td>
            <td>
                <label type='text' class='control-label' >เอชดีแอล (HDL)</label>
            </td>
             <?php
                    while($objResuut = mysql_fetch_array($objQuery))
                   {
                        echo "<td class='n-label'>".$objResuut["HDL"]."</td>";
                   }
                   mysql_data_seek($objQuery, 0);
             ?>
        </tr>
        
        <tr>
            <td>
                <label type='text' class='control-label' >2.3</label>
            </td>
            <td>
                <label type='text' class='control-label' >โคเลสเตอรอล (Cholesterol)</label>
            </td>
             <?php
                    while($objResuut = mysql_fetch_array($objQuery))
                   {
                        echo "<td class='n-label'>".$objResuut["cholesterol"]."</td>";
                   }
                   mysql_data_seek($objQuery, 0);
             ?>
        </tr>
        <tr>
            <td>
                <label type='text' class='control-label' >2.4</label>
            </td>
            <td>
                <label type='text' class='control-label' >ไตรกลีเซอไรด์ (Triglyceride)</label>
            </td>
             <?php
                    while($objResuut = mysql_fetch_array($objQuery))
                   {
                        echo "<td class='n-label'>".$objResuut["tg"]."</td>";
                   }
                   mysql_data_seek($objQuery, 0);
             ?>
        </tr>
        <tr>
            <td>
                <label type='text' class='control-label' >3</label>
            </td>
            <td>
                <label type='text' class='control-label' >การทำงานของไต</label>
            </td>
             <?php
                   
                        echo "<td colspan='$numCell' >"."</td>";
                  
             ?>
        </tr>
        
        <tr>
            <td>
                <label type='text' class='control-label' >3.1</label>
            </td>
            <td>
                <label type='text' class='control-label' >ครีเอตินิน</label>
            </td>
             <?php
                    while($objResuut = mysql_fetch_array($objQuery))
                   {
                        echo "<td class='n-label'>".$objResuut["creatinine"]."</td>";
                   }
                   mysql_data_seek($objQuery, 0);
             ?>
        </tr>
        
        <tr>
            <td>
                <label type='text' class='control-label' >3.2</label>
            </td>
            <td>
                <label type='text' class='control-label' >บียูเอ็น (BUN)</label>
            </td>
             <?php
                    while($objResuut = mysql_fetch_array($objQuery))
                   {
                        echo "<td class='n-label'>".$objResuut["cholesterol"]."</td>";
                   }
                   mysql_data_seek($objQuery, 0);
             ?>
        </tr>
        
         <tr>
            <td>
                <label type='text' class='control-label' >4</label>
            </td>
            <td>
                <label type='text' class='control-label' >HbA1C</label>
            </td>
             <?php
                    while($objResuut = mysql_fetch_array($objQuery))
                   {
                        echo "<td class='n-label' >".$objResuut["HbA1C"]."</td>";
                   }
                   mysql_data_seek($objQuery, 0);
             ?>
        </tr>
    </table></center>
</div>


        <?php

        
            $strSQL = "SELECT * FROM spec_check WHERE id = $str0";

            $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());

            $objResuut = mysql_fetch_array($objQuery);
            //while($objResuut = mysql_fetch_array($objQuery))
            //{
                
            //}
            $numCell = 0;
        
        ?>


<div id="Pro3" style="background-color: #2980b9">
    <label type='text' class='n-label' style="margin-bottom: 12px;">การตรวจเฉพาะ</label>
    <center><table table class='ex-pro2' border='0' >
        <tr>
            <td>
                <label class='control-label' ><b>วันที่ตรวจ</b></label> 
                <label type='text' class='control-label'><?php echo $objResuut["date_c"]; ?></label>
            </td>
            <td> 
                <label class='control-label' ><b>ผู้ตรวจ</b></label> 
                <label type='text' class='control-label'><?php echo $objResuut["name_c"]; ?></label>
            </td>


        </tr>
        <tr>
            <td colspan="2">
                <label class='control-label' ><b>การตรวจตา</b></label> 
                <label type='text' class='control-label'><?php echo $objResuut["eye"]; ?></label><br>
            
                <label class='control-label' ><b>การตรวจเท้า</b></label> 
                <label type='text' class='control-label'><?php echo $objResuut["foot"]; ?></label><br>

                <label class='control-label' ><b>การประเมินภาวะซึมเศร้า</b></label> 
                <label type='text' class='control-label'><?php echo $objResuut["sad"]; ?></label><br>

                <label class='control-label' ><b>ระดับคะแนน</b></label> 
                <label type='text' class='control-label'><?php echo $objResuut["point"]; ?></label><br>
            </td>
        </tr>
    </table></center>
</div>


        <?php

        
            $strSQL = "SELECT * FROM train_d WHERE id = $str0";

            $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());

            //$objResuut = mysql_fetch_array($objQuery);
            //while($objResuut = mysql_fetch_array($objQuery))
            //{
                
            //}
            $numCell = 1;
        
        ?>

<div id="Pro4" style="background-color: #16a085;">
    <label type='text' class='n-label' style="margin-bottom: 12px;">การเตรียมผู้ดูแล</label>
    <center>
        <table table class='ex-pro2' border='1' style="border: 2px solid #ecf0f1;">
            <tr>
                <th>
                    <label type='text' class='control-label'>ลำดับ</label>
                </th>
                <th>
                    <label type='text' class='control-label'>ประเด็นที่ได้รับการเตรียม</label>
                </th>
                <th>
                    <label type='text' class='control-label'>วันที่เตรียม</label>
                </th>
                <th>
                    <label type='text' class='control-label'>ผู้เตรียม</label>
                </th>
            </tr>
            
             <?php
             
                    while($objResuut = mysql_fetch_array($objQuery))
                    {
                        $main_d = $objResuut["main_d"];
                        $date = $objResuut["date"];
                        $trainer_name = $objResuut["trainer_name"];
                           echo "<tr>
                                    <td class='n-label'>
                                        $numCell
                                    </td>
                                    <td>
                                        $main_d
                                    </td>
                                    <td>
                                        $date
                                    </td>
                                    <td>
                                        $trainer_name
                                    </td>
                                 </tr>";
                           $numCell++;
                    }                     
                     
             ?>
            
        </table>
    </center>
</div>


<?php

        
            $strSQL = "SELECT * FROM plan_d WHERE id = $str0";

            $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());

            //$objResuut = mysql_fetch_array($objQuery);
            //while($objResuut = mysql_fetch_array($objQuery))
            //{
                
            //}
            
        
        ?>


<div id="Pro3" style=" background-color: #2980b9;">
    <label type='text' class='n-label' style="margin-bottom: 12px;">แผนการดุแลที่บ้าน</label>
    <center>
        <table class='ex-pro2' border='1' style="border: 2px solid #ecf0f1;">
            <tr>
                <th>
                    <label type='text' class='control-label'>ประเด็นที่ดูแล</label>
                </th>
                <th>
                    <label type='text' class='control-label'>แนวทางการดูแล</label>
                </th>
                <th>
                    <label type='text' class='control-label'>ผู้ที่ดูแล</label>
                </th>
                <th>
                    <label type='text' class='control-label'>หมายเหตุ</label>
                </th>
            </tr>
            
             <?php
             
                    while($objResuut = mysql_fetch_array($objQuery))
                    {
                        $main_takecare = $objResuut["main_takecare"];
                        $takecare = $objResuut["takecare"];
                        $name_d = $objResuut["name_d"];
                        $note = $objResuut["note"];
                           echo "<tr>
                                    <td>
                                        $main_takecare
                                    </td>
                                    <td>
                                        $takecare
                                    </td>
                                    <td>
                                        $name_d
                                    </td>
                                    <td>
                                        $note
                                    </td>
                                 </tr>";
                           
                    }                     
                     
             ?>
            
        </table>
    </center>
</div>


<?php

        
            $strSQL = "SELECT * FROM visit_home WHERE id = $str0";

            $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());

            //$objResuut = mysql_fetch_array($objQuery);
            //while($objResuut = mysql_fetch_array($objQuery))
            //{
                
            //}
            
        
        ?>

<div id="Pro3" style="background-color: #c0392b">
    
    <?php
            $visiter_type1 = '';
            $visiter_type2 = '';
            $visiter_type3 = '';
            $rub_type = '';
            
            
            while($objResuut = mysql_fetch_array($objQuery))
            {
                
                
                if($objResuut["rub_type"] == 'pd')
                {
                    $rub_type = 'ผู้ดูแล';
                }
                elseif ($objResuut["rub_type"] == 'pp') 
                {
                    $rub_type = 'ผู้ป่วย';
                }
                
                echo "<label type='text' class='control-label'>การเยี่ยมบ้านครั้งที่ ".$objResuut["visit_order"]."</label>";
                echo "<center>
                        <table class='ex-pro3' border='0'>
                            <tr>
                                <td>
                                    <label type='text' class='control-label'><b>ผู้เยี่ยม</b></label>";
                
                if($objResuut["n"] != 'f')
                {
                    echo "<label type='text' class='control-label'>พยาบาล: ".$objResuut['n']."</label>";
                }
                if($objResuut["osm"] != 'f')
                {
                    echo "<label type='text' class='control-label'>อสม.: ".$objResuut['osm']."</label>";
                }
                if($objResuut["staff"] != 'f')
                {
                    echo "<label type='text' class='control-label'>เจ้าหน้าที่: ".$objResuut['staff']."</label>";
                }
                                   
                                        
                           echo         "<label type='text' class='control-label'><b>บุคคลที่ได้รับการเยี่ยม</b></label>";
                           
                if($objResuut["rub_type"] != 'pp')
                {
                    echo "<label type='text' class='control-label'>ผู้ดูแล: ".$objResuut["rub_type"]."</label><br>";
                }
                else
                {
                    echo "<label type='text' class='control-label'>ผู้ป่วย</label><br>";
                }
                                    
                                        
                    echo               "<label type='text' class='control-label'><b>สภาวะแวดล้อมของครอบครัว</b></label>
                                    <label type='text' class='control-label'>".$objResuut["family_envi"]."</label>
                                </td>
                            </tr>
                        </table>
                    </center>";
                
                echo "<label type='text' class='control-label'><b>การดูแลจากการเยี่ยมครั้งที่ ".$objResuut["visit_order"]."</b></label>";
                
                
                $strSQL2 = "SELECT * FROM visit_table WHERE id = $str0 AND visit_order = ".$objResuut["visit_order"];

                $objQuery2 = mysql_query($strSQL2) or die ("Error in query: $strSQL2. ".mysql_error());

                //$objResuut2 = mysql_fetch_array($objQuery2);
                echo "<center>
                            <table class='ex-pro3' border='1' style='border: 2px solid #ecf0f1;'>
                                <tr>
                                    <th>
                                        <label type='text' class='n-label'>ประเด็นที่ดูแล</label>
                                    </th>
                                    <th>
                                        <label type='text' class='n-label'>การดูแล</label>
                                    </th>
                                    <th>
                                        <label type='text' class='n-label'>ผู้ที่ดูแล</label>
                                    </th>
                                    <th>
                                        <label type='text' class='n-label'>หมายเหตุ</label>
                                    </th>
                                </tr>";
                
                while($objResuut2 = mysql_fetch_array($objQuery2))
                {
                        $takecarePoint = $objResuut2["takecarePoint"];
                        $takecare = $objResuut2["takecare"];
                        $name_d = $objResuut2["name_d"];
                        $note = $objResuut2["note"];
                           echo "<tr>
                                    <td>
                                        $takecarePoint
                                    </td>
                                    <td>
                                        $takecare
                                    </td>
                                    <td>
                                        $name_d
                                    </td>
                                    <td>
                                        $note
                                    </td>
                                 </tr>";
                }
                
                echo "</table></center><br><br>";
                
            }           
   ?>
    
</div>