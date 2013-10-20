<?php

include_once ( '../connectDB.php' ); 

        
        $str1 = trim($_POST['tID']);
        //$str1 = "aaaaaaaaaaaaaaaaaaaaa";
        
        //$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
        $objDB = mysql_select_db("diabetes");
        mysql_query("SET NAMES UTF8");             
                      
        $strSQL = "SELECT * FROM general_info WHERE ID=$str1";
                                           
        $objQuery = mysql_query($strSQL) or die ("Error in query: $strSQL. ".mysql_error());
        $objResuut = mysql_fetch_array($objQuery);
        
        //echo "<label>".$objResuut["name"]."</label>";


?>
<div id="menu3">
    <table class='ex1' border='0' >
        <tr>
            <td>
                <div class='control-group'>
                    <label class='control-label' >ชื่อผู้ป่วย:</label> 
                    <div class='controls' >
                        <h4><?php echo $objResuut["name"]; ?></h4>
                    </div>
                </div>
            </td>
            <td>
                <div class='control-group'>
                    <label class='control-label' >นามสกุลผู้ป่วย:</label>  
                    <div class='controls' >
                        <h4><?php echo $objResuut["sname"]; ?></h4> 
                    </div>
                </div>
            </td>
            <td>
                <div class='control-group'>
                    <label class='control-label' >อายุ:</label> 
                    <div class='controls' >
                        <input class='w_input' name='age' id='age'  type='text' value="<?php echo $objResuut["age"]; ?>">
                    </div>
                </div>
            </td>

        </tr>
        <tr>
            <td>
                <div class='control-group'>

                    <label class='control-label' >ชื่อผู้ดูแล:</label>
                    <div class='controls' > 
                        <input class='w_input' name='dname' id='named'  type='text' value="<?php echo $objResuut["name_d"]; ?>">
                    </div>
                </div>
            </td>
            <td>
                <div class='control-group'>
                    <label class='control-label' >นามสกลุผู้ดูแล:</label>
                    <div class='controls' >
                        <input class='w_input' name='dsname' id='snamed'  type='text' value="<?php echo $objResuut["sname_d"]; ?>">
                    </div>
                </div>
            </td>
            <td>
                <div class='control-group'>
                    <label class='control-label' >ความเกี่ยวข้อง:</label>
                    <div class='controls' > 
                        <input class='w_input' name='with' id='with'  type='text' value="<?php echo $objResuut["relation"]; ?>">
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
                <button class="btn btn-success" id="save2" style="color:#484848; width: 80px">บันทึก</button>
            </td>
        </tr>
    </table>
</div>

