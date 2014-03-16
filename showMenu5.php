
<table class="ex5"  border="0" width="650">
    <tr>
        <td colspan="6">
            <label class="control-label" >การวินิจฉัย:</label><br>

            <input type="checkbox" id="checkbox1" class="css-checkbox lrg" checked="checked" value="low_sweet"/>
            <label style="font-size:1.3em;" for="checkbox1" name="checkbox1_lbl" class="css-label lrg vlad">เบาหวาน</label>

            <input type="checkbox" id="checkbox2" class="css-checkbox lrg" value="blood_hight"/>
            <label style="font-size:1.3em;" for="checkbox2" name="checkbox2_lbl" class="css-label lrg vlad">ความดันโลหิตสูง</label>

            <input type="checkbox" id="checkbox3" class="css-checkbox lrg" value="tai_Y"/>
            <label style="font-size:1.3em;" for="checkbox3" name="checkbox3_lbl" class="css-label lrg vlad">ไตวาย</label>

            <input type="checkbox" id="checkbox4" class="css-checkbox lrg" value="h_fail"/>
            <label style="font-size:1.3em;" for="checkbox4" name="checkbox4_lbl" class="css-label lrg vlad">หัวใจล้มเหลว</label>

            <input type="checkbox" id="checkbox5" class="css-checkbox lrg" value="other"/>
            <label style="font-size:1.3em;" for="checkbox5" name="checkbox5_lbl" class="css-label lrg vlad">อื่น ๆ</label>


            <!--                                <div id="yourDiv" style="display:none;"> 
                                                <select id="analysis" style="width:140px;text-align: center;">
                                                    <option value="low_sweet">เบาหวาน</option>
                                                    <option value="blood_hight">ความดันโลหิตสูง</option>
                                                    <option value="tai_Y">ไตวาย</option> 
                                                    <option value="h_fail">หัวใจล้มเหลว</option>
                                                    <option value="other" id="other">อื่น ๆ</option>
                                                </select>  
                                            </div>-->
            <input  id="input_other"  placeholder="กรอกกรณีการวินิจฉัยอื่น ๆ" type="text" style="display: none;">
        </td>

    </tr>
    <tr>
        <td colspan="6">
            <div class="control-group">
                <label class="control-label" >ชื่อแพทย์ผู้ดูแล:</label>
                <div class="controls" > 
                    <input name="with" id="DrName"  type="text" style="">
                </div>
            </div>
        </td>

    </tr>
    <tr>
        <td colspan="2" width="33%">
            <div class="control-group">
                <label class="control-label" ><font color="#2c3e50">1</font></label>
                <div class="controls" > 
                    <input  placeholder="โรงพยาบาลที่ 1"  id="Hospital1" class="Hospital" type="text">
                </div>
            </div>
        </td>
        <td colspan="2" width="35%">
            <div class="control-group">
                <label class="control-label">โรงพยาบาลที่รับการรักษา:</label>
                <div class="controls" > 
                    <input  placeholder="โรงพยาบาลที่ 2"  id="Hospital2" class="Hospital" type="text">
                </div>
            </div>
        </td>
        <td colspan="2" width="33%">
            <div class="control-group">
                <label class="control-label" ><font color="#2c3e50">3</font></label>
                <div class="controls" > 
                    <input  placeholder="โรงพยาบาลที่ 3"  id="Hospital3" class="Hospital" type="text">
                </div>
            </div>
        </td>
    </tr>
    <tr>                            
        <td colspan="6">
            <div class="control-group">
                <label class="control-label" >ยาที่ได้รับ:</label>                                    
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <div class="control-group">
                <label class="control-label" >ชื่อยา:</label>                                    
            </div>
            <div class="controls" >
 <?php
               include_once ( 'connectDB.php' ); 

                session_start();
                $objDB = mysql_select_db("diabetes");
                mysql_query("SET NAMES UTF8");
                $yaa = array();
                //$lastID = $_SESSION["lastid"];
                $strSQL = "SELECT * FROM ya WHERE id = ".$_SESSION['lastid'];

                $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());        


                while($objResuut = mysql_fetch_array($objQuery))
                {  
                //$med[] = $objResuut1['ya_name'];
                //$eat[] = $objResuut1['ya_eat'];
                //$order[] = $objResuut1['ya_order'];

                $yaa += array($objResuut['ya_order'] => array($objResuut['ya_name'] => $objResuut['ya_eat']));
                //$med = array($objResuut1['ya_order'] => array("yaName" => $objResuut1['ya_name'], "eat" => $objResuut1['ya_eat']));
                }
                mysql_close($objConnect);
                
                ?>

                <?php
                $i = 1;
                foreach ($yaa as $key => $value) {
                    foreach ($value as $yaname => $yaeat) {

                        echo "<input id='med$i' class='list_ya' type='text' value='{$yaname}'><label id='lm$i' style='visibility:hidden;display: inline-block;width: 1px;'>{$key}</label>";
                    }
                    $i++;
                }

                for ($k = $i; $k <= 10; $k++) {
                    echo "<input id='med$k' class='list_ya' type='text' value=''><label id='lm$k' style='visibility:hidden;display: inline-block;width: 1px;'></label>";
                }
                ?>
            </div>
        </td>
        <td  colspan="3" >
            <div class="control-group">
                <label class="control-label" >วิธีการรับประทาน:</label>                                    
            </div>
            <div class="controls" > 
<?php
$i = 1;
foreach ($yaa as $key => $value) {
    foreach ($value as $yaname => $yaeat) {
        echo "<input id='eat$i' type='text' value='{$yaeat}' style='width:90%'>";
    }
    $i++;
}

for ($k = $i; $k <= 10; $k++) {
    echo "<input id='eat$k' type='text' value='' style='width:90%'>";
}
?>
            </div>
        </td>

    </tr>
    <tr>
        <td colspan="6">
            <div class="control-group">
                <label class="control-label" >ประวัติการแพ้ยา:</label>
                <select id="pya" style="width:150px">
                    <option value="nop" >ไม่เคยแพ้ยา</option>
                    <option value="paa" id="paa">เคยแพ้ยา</option>                                        
                </select>
                <div class="controls" > 
                    <input name="with" id="med_history" placeholder="กรอกยาที่แพ้" type="text" value="ไม่เคยแพ้ยา" style="display: none;">
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="6">
            <div class="control-group">
                <label class="control-label" >อาหารเฉพาะ:</label>
                <div class="controls" > 
                    <input name="with" id="spec_food"  type="text" style="">
                </div>
            </div>
        </td>
<!--                            <td colspan="3">
            <div class="control-group">
                <label class="control-label" >การใช้สมุนไพรหรือการปฎิบัติเฉพาะที่ใช้:</label>
                <div class="controls" > 
                    <input name="with" id="smpai"  type="text" style="width: 85%;">
                </div>
            </div>
        </td>-->
    </tr>
    <tr>
        <td colspan="6">
            <div class="control-group">
                <label class="control-label" >ข้อมูลครอบครัวและผู้ดูแล (อาชีพ รายได้ ภาระ การจัดการเพื่อดูแล):</label>
                <div class="controls" > 
                    <textarea id="family_info" style="width: 80%; height: 70px;"></textarea>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="6">
            <button class="btn btn-success" id="save3" style="color:#484848; width: 80px">บันทึก</button>
        </td>
    </tr>
</table>
