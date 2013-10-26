<?php

include_once ( '../connectDB.php' ); 

        
        $str1 = trim($_POST['tID']);
        //$str1 = "aaaaaaaaaaaaaaaaaaaaa";
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "SELECT * FROM general_info WHERE ID = $str1";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        $objResuut = mysql_fetch_array($objQuery);
        
        //echo "<label>".$objResuut["name"]."</label>";


?>
<div id="successPopUp2">บันทึกแล้ว</div>
<div id="menu3">
    <table class='ex1' border='0' >
        <tr>
            <td>
                <div class='control-group'>
                    <label class='control-label' >ชื่อผู้ป่วย:</label> 
                    <div class='controls' >
                        <input class='w_input2' id='namep' type='text' value="<?php echo $objResuut["name"]; ?>">
                    </div>
                </div>
            </td>
            <td>
                <div class='control-group'>
                    <label class='control-label' >นามสกุลผู้ป่วย:</label>  
                    <div class='controls' >
                        <input class='w_input2' id='snamep' type='text' value="<?php echo $objResuut["sname"]; ?>"> 
                    </div>
                </div>
            </td>
            <td>
                <div class='control-group'>
                    <label class='control-label' >อายุ:</label> 
                    <div class='controls' >
                        <input class='w_input2' name='age' id='age'  type='text' value="<?php echo $objResuut["age"]; ?>">
                    </div>
                </div>
            </td>

        </tr>
        <tr>
            <td>
                <div class='control-group'>

                    <label class='control-label' >ชื่อผู้ดูแล:</label>
                    <div class='controls' > 
                        <input class='w_input2' name='dname' id='named'  type='text' value="<?php echo $objResuut["name_d"]; ?>">
                    </div>
                </div>
            </td>
            <td>
                <div class='control-group'>
                    <label class='control-label' >นามสกลุผู้ดูแล:</label>
                    <div class='controls' >
                        <input class='w_input2' name='dsname' id='snamed'  type='text' value="<?php echo $objResuut["sname_d"]; ?>">
                    </div>
                </div>
            </td>
            <td>
                <div class='control-group'>
                    <label class='control-label' >ความเกี่ยวข้อง:</label>
                    <div class='controls' > 
                        <input class='w_input2' name='with' id='with'  type='text' value="<?php echo $objResuut["relation"]; ?>">
                    </div>
                </div>
            </td>

        </tr>
        <tr >
            <td colspan='5'>
                <button class='btn btn-success' id='save1' style='color:#484848; width: 150px'>บันทึกการแก้ไข</button>
            </td>
        </tr>
    </table>
</div>

<?php
        $strSQL = "SELECT * FROM address WHERE ID=$str1";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        $objResuut = mysql_fetch_array($objQuery);
        
?>
<div id="menu4" style="background-color:#2980b9;height:200px;width:700px; border-radius:25px;">   
    <table class="ex1" border="0" >
        <tr>
            <td>
                <div class="control-group">
                    <label class="control-label" for="name">เลขที่อยู่:</label> 
                    <div class="controls" >
                        <input class="w_input" id="AddNum"  type="text"  value="<?php echo $objResuut["address_num"]; ?>">
                    </div>
                </div>
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >ถนน:</label>  
                    <div class="controls" >
                        <input class="w_input" id="Road"  type="text" value="<?php echo $objResuut["road"]; ?>">     
                    </div>
                </div>
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >ตำบล:</label> 
                    <div class="controls" >
                        <input class="w_input" id="Tumbol"  type="text" value="<?php echo $objResuut["tumbol"]; ?>">
                    </div>
                </div>
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >อำเภอ:</label>
                    <div class="controls" > 
                        <input class="w_input" id="Aumphor"  type="text" value="<?php echo $objResuut["aumphor"]; ?>">
                    </div>
                </div>
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >จังหวัด:</label>
                    <div class="controls" >
                        <input class="w_input" id="City"  type="text" value="<?php echo $objResuut["city"]; ?>">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="control-group">

                    <label class="control-label" >รหัสไปรษณีย์:</label>
                    <div class="controls" > 
                        <input class="w_input" id="Zipcode"  type="text" value="<?php echo $objResuut["zipcode"]; ?>">
                    </div>
                </div>
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >Latitude:</label>
                    <div class="controls" >
                        <input class="w_input" id="Latitude"  type="text" value="<?php echo $objResuut["latitude"]; ?>">
                    </div>
                </div>
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >Longitude:</label>
                    <div class="controls" > 
                        <input class="w_input" id="Longitude"  type="text" value="<?php echo $objResuut["longitude"]; ?>">
                    </div>
                </div>
            </td>
            <td colspan="2">
                <div class="control-group">
                    <label class="control-label" >วันที่รับไว้ในการเยี่ยมบ้าน:</label>
                    <div class="controls" > 
                        <input type="text"  placeholder="เลือกวันที่" id="DateAcc" class="datepicker" style="width: 58%;" value="<?php echo $objResuut["date_accp"]; ?>"/>
                    </div>
                </div>
            </td>

        </tr>
        <tr >
            <td colspan="5">
                <button class="btn btn-success" id="save2" style="color:#484848; width: 150px">บันทึกการแก้ไข</button>
            </td>
        </tr>
    </table>
</div>




<div id="menu4-55" style="background-color:#2c3e50;height:auto;width:700px; border-radius:25px;color: #ecf0f1;display: inline-block;">
    <label class="control-label" >ภาพที่เกี่ยวข้องกับผู้ป่วย:</label>
<!--        <table>-->
    <?php
        $strSQL = "SELECT * FROM img WHERE ID = $str1";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        
        $vPath = "./upload/uploads/";
        //echo "<tr>";
        while($objResuut = mysql_fetch_array($objQuery))
	{  
            echo "<div class='non-immediate-parent-container' >";
            echo "<a class='fancybox' rel='group' href='".$vPath.$objResuut["path"]."'><img src='".$vPath.$objResuut["path"]."' alt='' /></a>";		
            echo "</div>";
            
        }
         //echo "</tr>";
?>
<!--        </table>-->
        
    
</div>



<?php
        $strSQL = "SELECT * FROM general_info WHERE ID = $str1";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        $objResuut = mysql_fetch_array($objQuery);
        
        $ana = $objResuut["analysis"];
        $oth = $objResuut["other"];
        
?>

<div id="menu5" style="background-color:#2c3e50;height:600px;width:700px; border-radius:25px;color: #ecf0f1;">
    <table class="ex5"  border="0">
        <tr>
            <td colspan="4">
                <label class="control-label" >การวินิจฉัย:</label>
                <div id="yourDiv"> 
                    <select id="analysis" style="width:140px;text-align: center;">
                        <option <?php if($ana == 'low_sweet'){echo 'selected ';} ?> value="low_sweet">เบาหวาน</option>
                        <option <?php if($ana == 'blood_hight'){echo 'selected ';} ?>value="blood_hight">ความดันโลหิตสูง</option>
                        <option <?php if($ana == 'tai_Y'){echo 'selected ';} ?>value="tai_Y">ไตวาย</option> 
                        <option <?php if($ana == 'h_fail'){echo 'selected ';} ?>value="h_fail">หัวใจล้มเหลว</option>
                        <option <?php if($ana == 'other'){echo 'selected ';} ?>value="other" id="other">อื่น ๆ</option>
                    </select>  
                </div>
                <center><input  id='input_other'  placeholder='กรอกกรณีการวินิจฉัยอื่น ๆ' type='text' style="
                    
                    <?php if($ana == 'other')
                    {
                        echo 'display:block;';                        
                    }
                    else
                    {
                        echo 'display:none;';
                        
                    }  
                    ?>"
                        
                    <?php echo " value='".$oth."'"; ?> > </center>
                
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="control-group">
                    <label class="control-label" >ชื่อแพทย์ผู้ดูแล:</label>
                    <div class="controls" > 
                        <input name="with" id="DrName"  type="text" value="<?php echo $objResuut["drname"]; ?>">
                    </div>
                </div>
            </td>

        </tr>
        <tr>
            <td>
                <div class="control-group">
                    <label class="control-label" ><font color="#2c3e50">1</font></label>
                    <div class="controls" > 
                        <input name="with" placeholder="โรงพยาบาลที่ 1" id="Hospital1"  type="text" value="<?php echo $objResuut["hospital1"]; ?>">
                    </div>
                </div>
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label">โรงพยาบาลที่รับการรักษา:</label>
                    <div class="controls" > 
                        <input name="with" placeholder="โรงพยาบาลที่ 2" id="Hospital2"  type="text" value="<?php echo $objResuut["hospital2"]; ?>">
                    </div>
                </div>
            </td>
            <td colspan="2">
                <div class="control-group">
                    <label class="control-label" ><font color="#2c3e50">3</font></label>
                    <div class="controls" > 
                        <input name="with" placeholder="โรงพยาบาลที่ 3" id="Hospital3"  type="text" value="<?php echo $objResuut["hospital3"]; ?>">
                    </div>
                </div>
            </td>
        </tr>
        <tr colspan="2">                            
            <td>
                <div class="control-group">
                    <label class="control-label" >ยาที่ได้รับ:</label>
                    <div class="controls" > 
                        <input name="with" id="med"  type="text" value="<?php echo $objResuut["medicine"]; ?>">
                    </div>
                </div>
            </td>
            <td colspan="2">
                <div class="control-group">
                    <label class="control-label" >ประวัติการแพ้ยา:</label>
                    <div class="controls" > 
                        <input name="with" id="med_history"  type="text" style="width: 85%;" value="<?php echo $objResuut["anti_medicine"]; ?>">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div class="control-group">
                    <label class="control-label" >อาหารเฉพาะ:</label>
                    <div class="controls" > 
                        <input name="with" id="spec_food"  type="text" value="<?php echo $objResuut["spac_food"]; ?>">
                    </div>
                </div>
            </td>            
        </tr>
        <tr>
            <td colspan="4">
                <div class="control-group">
                    <label class="control-label" >ข้อมูลครอบครัวและผู้ดูแล (อาชีพ รายได้ ภาระ การจัดการเพื่อดูแล):</label>
                    <div class="controls" > 
                        <textarea id="family_info" style="width: 80%; height: 70px;"><?php echo $objResuut["family_info"]; ?></textarea>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <button class="btn btn-success" id="save3" style="color:#484848; width: 150px">บันทึกการแก้ไขข้อมูล</button>
            </td>
        </tr>
    </table>
</div>

<?php
        $strSQL = "SELECT * FROM first_rate WHERE ID = $str1";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        $objResuut = mysql_fetch_array($objQuery);
        
        
?>

<div id="menu6" style="background-color:#e74c3c;height:300px;width:700px; border-radius:25px;color: #ecf0f1">

    <table class="ex5" border="0">
        <tr>
            <td colspan="4">
                <div class="control-group">
                    <label class="control-label" >การประเมินครั้งแรกที่รับไว้ในการดูแล:</label>
                    <div class="controls" > 
                        <textarea id="first_rateDB" style="width: 80%; height: 70px;"><?php echo $objResuut["first_rateData"]; ?></textarea>
                    </div>
                </div>
            </td>
        </tr>                        
        <tr>

            <td>
                <div class="control-group">
                    <label class="control-label" >ความดันโลหิต:</label>
                    <div class="controls" > 
                        <input placeholder="มม.ปรอท" id="bloodP"  type="text" value="<?php echo $objResuut["blood_p"]; ?>">
                    </div>
                </div>
            </td>                            
        </tr>
        <tr>
            <td colspan="4">
                <button class="btn btn-success" id="save4" style="color:#484848; width: 150px">บันทึกการแก้ไข</button>
            </td>
        </tr>
    </table>
</div>



<div id="menu7" style="background-color:#16a085;height:550px;width:700px; border-radius:25px;color: #ecf0f1;">

    <table class="ex5" id="table7" border="0">
        <tr>
            <th colspan="3">
                ผลการตรวจทางห้องทดลอง
            </th>
        </tr>
        <tr>
            <td class="order">ลำดับ</td>
            <td>ผลการตรวจ</td>

            <td class="slideData" ><label>วันที่: </label><input type="text"   id="lab_date" placeholder="เลือกวันที่" class="-datepicker" style="width: 70%;" readonly/></td>

        </tr>
        <tr>
            <td class="order">1</td>
            <td>น้ำตาลในเลือด (FBS mg%)</td>
            <td><input  class="slideData" id="fbs"  type="text" style=""></td>
        </tr>
        <tr>
            <td class="order">2</td>
            <td>ไขมันในเลือด</td>
            <td></td>
        </tr>
        <tr>
            <td class="order">2.1</td>
            <td>LDL</td>
            <td><input  class="slideData" id="ldl"  type="text" style=""></td>
        </tr>
        <tr class="tg-even">
            <td class="order">2.2</td>
            <td>HDL</td>
            <td><input  class="slideData" id="hdl"  type="text" style=""></td>
        </tr>
        <tr>
            <td class="order">2.3</td>
            <td>Cholesterol</td>
            <td><input  class="slideData" id="Cholesterol"  type="text" style=""></td>
        </tr>
        <tr>
            <td class="order">3</td>
            <td>กาทำงานของไต</td>
            <td></td>
        </tr>
        <tr>
            <td class="order">3.1</td>
            <td>Creatinine</td>
            <td><input  class="slideData" id="Creatinine"  type="text" style=""></td>
        </tr>
        <tr>
            <td class="order">3.2</td>
            <td>BUN</td>
            <td><input  class="slideData" id="BUN"  type="text" style=""></td>
        </tr>
        <tr>
            <td class="order">4</td>
            <td>HbA1C</td>
            <td><input  class="slideData" id="HbA1C"  type="text" style=""></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                
                <div class="pagination" id="page1" style="width:auto">
                    <a href="#" class="first" data-action="first" style="width:40px;">
                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;"><<</button>
                    </a>

                    <a href="#" class="previous" data-action="previous" style="width:40px;">
                       <button class="btn btn-success" id="" style="color:#484848; width: 40px;"><</button>
                    </a>
                   <button class="btn btn-success" id="save5" style="color:#484848; width: 80px;">บันทึก</button>
<!--                    <input type="text" readonly="readonly"/>-->
                    <a href="#" class="next" data-action="next" style="width:40px;">
                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;">></button>
                    </a>
                    <a href="#" class="last" data-action="last" style="width:40px;">
                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;">>></button>
                    </a>
                </div>
                
                
<!--                <button class="btn btn-success" id="save5_left" style="color:#484848; width: 40px"><<</button>
                <button class="btn btn-success" id="save5" style="color:#484848; width: 80px">บันทึก</button>
                <button class="btn btn-success" id="save5_right" style="color:#484848; width: 40px">>></button>-->
                
            </td>
        </tr>
        <tr>
            <td colspan="3"><button class="btn btn-success" id="finish1" style="color:#484848; width: 80px;margin-top: 25px;">เสร็จสิ้น</button></td>
        </tr>
    </table>

</div>


<?php
        $strSQL = "SELECT * FROM spec_check WHERE ID = $str1";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        $objResuut = mysql_fetch_array($objQuery);        
        
?>


<div id="menu8" style="background-color:#d35400;height:500px;width:700px; border-radius:25px;color: #ecf0f1;">

    <table class="ex5" border="0">
        <tr>
            <th colspan="2">การตรวจเฉพาะ</th>

        </tr>
        <tr>
            <td>
                <div class="control-group">
                    <label class="control-label" >วันที่ตรวจ:</label>
                    <div class="controls" > 
                        <input type="text"  id="dateC" placeholder="คลิ๊กเพื่อเลือกวันที่" class="datepicker" value="<?php echo $objResuut["date_c"]; ?>" />
                    </div>
                </div>
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >ผู้ตรวจ:</label>
                    <div class="controls" > 
                        <input type="text"  id="nameC" placeholder="ชื่อและนามสกุลผู้ตรวจ" id="datepicker" value="<?php echo $objResuut["name_c"]; ?>" />
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="control-group">
                    <label class="control-label" >การตรวจตา:</label>
                    <div class="controls" > 
                        <input class="spec"  id="eye" type="text" value="<?php echo $objResuut["eye"]; ?>">
                    </div>
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="2">
                <div class="control-group">
                    <label class="control-label" >การตรวจเท้า:</label>
                    <div class="controls" > 
                        <input class="spec"  id="foot" type="text" value="<?php echo $objResuut["foot"]; ?>">
                    </div>
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="2">
                <div class="control-group">
                    <label class="control-label" >การประเมินความซึมเศร้า:</label>
                    <div class="controls" > 
                        <input class="spec"  id="sad" type="text" value="<?php echo $objResuut["sad"]; ?>">
                    </div>
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="2">
                <div class="control-group">
                    <label class="control-label" >ระดับคะแนน:</label>
                    <div class="controls" > 
                        <input class="spec"  id="point" type="text" value="<?php echo $objResuut["point"]; ?>">
                    </div>
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="2"><button class="btn btn-success" id="save6" style="color:#484848; width: 150px">บันทึกการแก้ไข</button></td>
        </tr>
    </table>

</div>


<?php
        $strSQL = "SELECT * FROM train_d WHERE ID = $str1";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        $objResuut = mysql_fetch_array($objQuery);        
        
?>


<div id="menu9" style="background-color:#2c3e50;height:230px;width:700px; border-radius:25px;color: #ecf0f1;">

    <table class="ex5" id="table9" border="0">
        <tr>
            <th colspan="3">การเตรียมผู้ดูแล</th>

        </tr>
        <tr>
            <td>
                <div class="control-group">
                    <label class="control-label" >ประเด็นที่ได้รับการเตรียม:</label>
                    <div class="controls" > 
                        <input class="slide2"  id="trianPoint" type="text" style="">
                    </div>
                </div> 
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >วันที่เตรียม:</label>
                    <div class="slide2" > 
                        <input class="-datepicker" id="dateTrain" type="text" readonly>
                    </div>
                </div> 
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >ผู้เตรียม:</label>
                    <div class="controls" > 
                        <input class="slide2"  id="nameTrain" type="text" style="">
                    </div>
                </div> 
            </td>

        </tr>
        <tr>           
            
            <td colspan="3">
                <div class="pagination" id="page2" style="width:auto">
                    <a href="#" class="first" data-action="first" style="width:40px;">
                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;"><<</button>
                    </a>

                    <a href="#" class="previous" data-action="previous" style="width:40px;">
                       <button class="btn btn-success" id="" style="color:#484848; width: 40px;"><</button>
                    </a>
                   <button class="btn btn-success" id="save7" style="color:#484848; width: 80px;">บันทึก</button>
<!--                    <input type="text" readonly="readonly"/>-->
                    <a href="#" class="next" data-action="next" style="width:40px;">
                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;">></button>
                    </a>
                    <a href="#" class="last" data-action="last" style="width:40px;">
                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;">>></button>
                    </a>
                </div>
<!--                <button class="btn btn-success" id="save7" style="color:#484848; width: 80px">บันทึก</button>-->
            </td>

        </tr>
        <tr>
            <td colspan="3" style="padding-top:25px;">
                <button class="btn btn-success" id="finish2" style="color:#484848; width: 200px;">เสร็จสิ้นการบันทึกในส่วนนี้</button>
            </td>

        </tr>
    </table>

</div>



<div id="menu10" style="background-color:#27ae60;height:310px;width:700px; border-radius:25px;">

    <table class="ex5" id="table10" border="0">
        <tr>
            <th colspan="3">แผนการดูแลที่บ้านลำดับที่ <label id="orderPlanD" style="display: inline-table;opacity: 0.0;"> 1</label></th>

        </tr>
        <tr>
            <td>
                <div class="control-group">
                    <label class="control-label" >ประเด็นที่ดูแล:</label>
                    <div class="controls" > 
                        <input class="slide3"  id="planPoint" type="text" style="">
                    </div>
                </div> 
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >แนวทางการดูแล:</label>
                    <div class="controls" > 
                        <input class="slide3" id="wayD" type="text" style="">
                    </div>
                </div> 
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >ผู้ที่ดูแล:</label>
                    <div class="controls" > 
                        <input class="slide3"  id="namedd" type="text" style="">
                    </div>
                </div> 
            </td>

        </tr>
        <tr>
            <td colspan="3">
                <div class="control-group">
                    <label class="control-label" >หมายเหตุ:</label>
                    <div class="controls" > 
                        <input class="slide3"  id="mark" type="text" style="">
                    </div>
                </div> 
            </td>
        </tr>
        <tr>           
            
            <td colspan="3">
                <div class="pagination" id="page3" style="width:auto">
                    <a href="#" class="first" data-action="first" style="width:40px;">
                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;"><<</button>
                    </a>

                    <a href="#" class="previous" data-action="previous" style="width:40px;">
                       <button class="btn btn-success" id="" style="color:#484848; width: 40px;"><</button>
                    </a>
                   <button class="btn btn-success" id="save8" style="color:#484848; width: 80px">บันทึก</button>
<!--                    <input type="text" readonly="readonly"/>-->
                    <a href="#" class="next" data-action="next" style="width:40px;">
                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;">></button>
                    </a>
                    <a href="#" class="last" data-action="last" style="width:40px;">
                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;">>></button>
                    </a>
                </div>
                
            </td>

        </tr>
        <tr>
            <td colspan="3" style="padding-top:25px;">
                <button class="btn btn-success" id="finish3" style="color:#484848; width: 200px;">เสร็จสิ้นการบันทึกในส่วนนี้</button>
            </td>

        </tr>
    </table>

</div>


<div id="menu11" style="background-color:#3498db;height:350px;width:700px; border-radius:25px;">

    <table class="ex5" id="table11" border="0">
        <tr>
            <th colspan="3">การเยี่ยมบ้าน</th>
        </tr>
        <tr>
            <td>
                
                    <label class="control-label" >การเยี่ยมครั้งที่:</label>


                    <div class="pagination" id="page4" style="width:auto">
                        <a href="#" class="previous" data-action="previous" style="width:auto;">
                            <button class="btn btn-success"  style="color:#484848; width: 40px;margin-bottom: 10px;"><</button>
                        </a>
                        <label  id="visit_order" style="width: 30px;display: inline-block;">1</label>

                        <a href="#" class="next" data-action="next" style="width:auto;">
                            <button class="btn btn-success"  style="color:#484848; width: 40px;margin-bottom: 10px;">></button>
                        </a>

                    </div>
               
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >ผู้เยี่ยม:</label>
                    <select id="Pvisit" class="slide4" style="width: 60%; text-align: center;">
                        <option value="n">พยาบาล</option>
                        <option value="osm">อสม.</option>
                        <option value="staff">เจ้าหน้าที่</option>
                    </select> 
                </div>
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >บุคคลที่ได้รับการเยี่ยม:</label>
                    <select id="PRvisit" class="slide4" style="width: 60%; text-align: center;">
                        <option value="pp">ผู้ป่วย</option>
                        <option value="pd">ผู้ดูแล.</option>

                    </select>
                </div> 
            </td>

        </tr>
        <tr>
            <td colspan="3">
                <div class="control-group">
                    <label class="control-label" >สภาวะแวดล้อมของครอบครัว:</label>
                    <div class="controls" > 
                        <textarea id="enviFam" class="slide4" style="width: 80%; height: 70px;"></textarea>
                    </div>
                </div> 
            </td>
        </tr>
        <tr>
            <td colspan="3"><button class="btn btn-success" id="save9" style="color:#484848; width: 80px">บันทึก</button></td>

        </tr>
        <tr>
            <td colspan="3" style="padding-top:25px;">
                <button class="btn btn-success" id="finish4" style="color:#484848; width: 200px;">เสร็จสิ้นการบันทึกในส่วนนี้</button>
            </td>
            
        </tr> 
    </table>

</div>

<div id="menu12" style="background-color:#27ae60;height:300px;width:700px; border-radius:25px;">
<label id="idTable" style="display: inline-table;opacity: 0.0;"></label>
    <table class="ex5" id="table12" border="0">
        <tr>
            <th colspan="4">
                <label>
                    <B>บันทึกการดูแลจากการเยี่ยมบ้านครั้งที่</B>
                </label>
                <div class="pagination" id="page5" style="width:auto">
                        <a href="#" class="previous" data-action="previous" style="width:auto;">
                            <button class="btn btn-success"  style="color:#484848; width: 40px;margin-bottom: 10px;"><</button>
                        </a>
                    <label  id="visit_order_table" style="width: 30px;display: inline-block;"><B>1</B></label>

                        <a href="#" class="next" data-action="next" style="width:auto;">
                            <button class="btn btn-success"  style="color:#484848; width: 40px;margin-bottom: 10px;">></button>
                        </a>

                    </div>
            </th>

        </tr>
        <tr>
            <td>
                <div class="control-group">
                    <label class="control-label" >ประเด็นที่ดูแล:</label>
                    <div class="controls" > 
                        <input   class="slide5" type="text" id="takecarePoint" style="">
                    </div>
                </div>
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >การดูแล:</label>
                    <div class="controls" > 
                        <input   type="text" class="slide5" id="takecare" style="">
                    </div>
                </div>
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >ผู้ดูแล:</label>
                    <div class="controls" > 
                        <input   type="text" class="slide5" id="namePD" style="">
                    </div>
                </div>
            </td>
            <td>
                <div class="control-group">
                    <label class="control-label" >หมายเหตุ:</label>
                    <div class="controls" > 
                        <input   type="text" class="slide5" id="note2" value="-">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                
                <div class="pagination" id="page6" style="width:auto">
                    <a href="#" class="first" data-action="first" style="width:40px;">
                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;"><<</button>
                    </a>

                    <a href="#" class="previous" data-action="previous" style="width:40px;">
                       <button class="btn btn-success" id="" style="color:#484848; width: 40px;"><</button>
                    </a>
                   <button class="btn btn-success" id="save10" style="color:#484848; width: 90px">บันทึกเพิ่ม</button>
<!--                    <input type="text" readonly="readonly"/>-->
                    <a href="#" class="next" data-action="next" style="width:40px;">
                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;">></button>
                    </a>
                    <a href="#" class="last" data-action="last" style="width:40px;">
                        <button class="btn btn-success" id="" style="color:#484848; width: 40px;">>></button>
                    </a>
                </div>
                
                
            </td>

        </tr>
        <tr>
            <td colspan="4" style="padding-top:25px;">
                <button class="btn btn-success" id="finish5" style="color:#484848; width: 200px;">เสร็จสิ้นการบันทึกในส่วนนี้</button>
            </td>

        </tr>
    </table>

</div>






