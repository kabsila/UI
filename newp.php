<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./alloy/build/aui-css/css/bootstrap.css">
        <link rel="stylesheet" href="./alloy/jquery-ui/css/smoothness/jquery-ui-1.10.3.custom.css">
        <link rel="stylesheet" href="./newP_Css.css">
        <link href="./upload/css/uploadfile.css" rel="stylesheet">
        
        <script src="./alloy/build/aui/aui.js"></script>
        <script src="./alloy/jquery.js"></script>
        <script src="./alloy/jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
        <script src="./alloy/jquery-ui/development-bundle/ui/i18n/jquery.ui.datepicker-th.js"></script>
        <script src="./newP_script.js"></script>
        <script src="./upload/js/jquery.uploadfile.min.js"></script>



        <style>
            

        </style>
        
        <script>
          
        </script>
    </head>
    <body>

        <div id="container" style="width:100%;">
            
            <div id="successPopUp">บันทึกแล้ว</div>
            
            <div id="header" style="background-color:#CEECF5;width:100%;height:100px;">
                <h1 style="margin-bottom:0; font-size:200%; text-align:center; padding-top:25px; font-family:"Angsana New";>แบบฟอร์มบันทึกข้อมูลเพื่อการดูแลต่อเนื่องที่บ้านสำหรับผู้ป่วยเบาหวานและครอบครัว</h1></div>



            <div id="content" style="background-color:#E6E6E6;height:auto;width:1100px;padding-bottom: 25px;">
                
                <div id="menu" style="background-color:#F5A9F2;height:100px;width:400px; border-radius:25px;">

                    <form id="myForm" >
                        <table class="ex1" border="0" >
                            <tr>
                                <td>
                                    <button class="btn btn-large btn-primary" id="addP" type="button">เพิ่มผู้ป่วยรายใหม่</button>
                                </td>
                            </tr>                            
                        </table>

                    </form>

                </div>
                
                <div id="menu2" style="background-color:#7BA6B4; border-radius:25px;">

                    
                        <table id="table2" class="ex2" border="0" >
                            <tr>
                                <td>
                                    <label class="control-label" for="name">คำนำหน้า:</label> 
                                </td>
                                <td>
                                    <label class="control-label" for="name">ชื่อผู้ป่วย:</label> 
                                </td>
                                <td>
                                    <label class="control-label" for="name">นามสกุลผู้ป่วย:</label> 
                                </td>                                
                            </tr>
                            <tr>
                                <td>
                                    <div id="yourDiv"> 
                                      <select id="sta" style="width:90px;text-align: center;">
                                        <option value="nay">นาย</option>
                                        <option value="nang">นาง</option>
                                        <option value="nangsao">นางสาว</option>                                        
                                      </select>  
                                    </div>
                                </td>
                                <td>
                                    <div id="yourDiv"> <input  id="fname"  type="text" style="width:80px;text-align: center;">  </div>
                                </td>
                                <td>
                                    <div id="yourDiv"> <input  id="sname"  type="text" style="width:80px;text-align: center;">  </div>
                                </td>                             
                            </tr>
                            <tr >
                                <td colspan="3">
                                    <button class="button" id="ok" style="width:80px;">OK</button>
                                </td>
                            </tr>
                        </table>
             </div>
                <div id="myDiv"></div>               
                <div id="menu3"></div>
                <div id="menu4" style="background-color:#2980b9;height:200px;width:700px; border-radius:25px;">   
                        <table class="ex1" border="0" >
                            <tr>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" for="name">เลขที่อยู่:</label> 
                                        <div class="controls" >
                                            <input class="w_input" id="AddNum"  type="text"  title="Three letter country code" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >ถนน:</label>  
                                        <div class="controls" >
                                            <input class="w_input" id="Road"  type="text" style="">     
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >ตำบล:</label> 
                                        <div class="controls" >
                                            <input class="w_input" id="Tumbol"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >อำเภอ:</label>
                                        <div class="controls" > 
                                            <input class="w_input" id="Aumphor"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >จังหวัด:</label>
                                        <div class="controls" >
                                            <input class="w_input" id="City"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="control-group">

                                        <label class="control-label" >รหัสไปรษณีย์:</label>
                                        <div class="controls" > 
                                            <input class="w_input" id="Zipcode"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >Latitude:</label>
                                        <div class="controls" >
                                            <input class="w_input" id="Latitude"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >Longitude:</label>
                                        <div class="controls" > 
                                            <input class="w_input" id="Longitude"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td colspan="2">
                                    <div class="control-group">
                                        <label class="control-label" >วันที่รับไว้ในการเยี่ยมบ้าน:</label>
                                        <div class="controls" > 
                                            <input type="text"  placeholder="เลือกวันที่" id="DateAcc" class="datepicker" style="width: 58%;" />
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
                
                <div id="menu4-5" style="background-color:#2c3e50;height:auto;width:700px; border-radius:25px;color: #ecf0f1;">
                    <center><div id="advancedUpload" style="display: none;">เลือกภาพ</div></center> 
                    <!--                    <div id="startUpload" class="ajax-file-upload-green">Start Upload</div>-->
                    <button class="btn btn-success" id="finishUp" style="color:#484848; width: 200px;margin-top: 10px;">เสร็จสิ้นการอัพโหลด</button>
                </div>
            
                <div id="menu5" style="background-color:#2c3e50;height:600px;width:700px; border-radius:25px;color: #ecf0f1;">
                    <table class="ex5"  border="0">
                        <tr>
                            <td colspan="4">
                                <label class="control-label" >การวินิจฉัย:</label>
                                <div id="yourDiv"> 
                                    <select id="analysis" style="width:140px;text-align: center;">
                                        <option value="low_sweet">เบาหวาน</option>
                                        <option value="blood_hight">ความดันโลหิตสูง</option>
                                        <option value="tai_Y">ไตวาย</option> 
                                        <option value="h_fail">หัวใจล้มเหลว</option>
                                        <option value="other" id="other">อื่น ๆ</option>
                                    </select>  
                                </div>
                                <input name="with" id="input_other"  placeholder="กรอกกรณีการวินิจฉัยอื่น ๆ" type="text" style="display: none;">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="control-group">
                                    <label class="control-label" >ชื่อแพทย์ผู้ดูแล:</label>
                                    <div class="controls" > 
                                        <input name="with" id="DrName"  type="text" style="">
                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" ><font color="#2c3e50">1</font></label>
                                    <div class="controls" > 
                                        <input name="with" placeholder="โรงพยาบาลที่ 1" id="Hospital1"  type="text" style="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label">โรงพยาบาลที่รับการรักษา:</label>
                                    <div class="controls" > 
                                        <input name="with" placeholder="โรงพยาบาลที่ 2" id="Hospital2"  type="text" style="">
                                    </div>
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="control-group">
                                    <label class="control-label" ><font color="#2c3e50">3</font></label>
                                    <div class="controls" > 
                                        <input name="with" placeholder="โรงพยาบาลที่ 3" id="Hospital3"  type="text" style="">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr colspan="2">                            
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >ยาที่ได้รับ:</label>
                                    <div class="controls" > 
                                        <input name="with" id="med"  type="text" style="">
                                    </div>
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="control-group">
                                    <label class="control-label" >ประวัติการแพ้ยา:</label>
                                    <div class="controls" > 
                                        <input name="with" id="med_history"  type="text" style="width: 85%;">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >อาหารเฉพาะ:</label>
                                    <div class="controls" > 
                                        <input name="with" id="spec_food"  type="text" style="">
                                    </div>
                                </div>
                            </td>
                            <td colspan="3">
                                <div class="control-group">
                                    <label class="control-label" >การใช้สมุนไพรหรือการปฎิบัติเฉพาะที่ใช้:</label>
                                    <div class="controls" > 
                                        <input name="with" id="smpai"  type="text" style="width: 85%;">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="control-group">
                                    <label class="control-label" >ข้อมูลครอบครัวและผู้ดูแล (อาชีพ รายได้ ภาระ การจัดการเพื่อดูแล):</label>
                                    <div class="controls" > 
                                        <textarea id="family_info" style="width: 80%; height: 70px;"></textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                                <td colspan="4">
                                    <button class="btn btn-success" id="save3" style="color:#484848; width: 80px">บันทึก</button>
                                </td>
                        </tr>
                    </table>
                </div>
                                
                <div id="menu6" style="background-color:#e74c3c;height:300px;width:700px; border-radius:25px;color: #ecf0f1">
                   
                    <table class="ex5" border="0">
                        <tr>
                            <td colspan="4">
                                <div class="control-group">
                                    <label class="control-label" >การประเมินครั้งแรกที่รับไว้ในการดูแล:</label>
                                    <div class="controls" > 
                                        <textarea id="first_rateDB" style="width: 80%; height: 70px;"></textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>                        
                        <tr>
                            
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >ความดันโลหิต:</label>
                                    <div class="controls" > 
                                        <input placeholder="มม.ปรอท" id="bloodP"  type="text" style="">
                                    </div>
                                </div>
                            </td>                            
                        </tr>
                        <tr>
                            <td colspan="4">
                                <button class="btn btn-success" id="save4" style="color:#484848; width: 80px">บันทึก</button>
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div id="menu7" style="background-color:#16a085;height:520px;width:700px; border-radius:25px;color: #ecf0f1;">

                    <table class="ex5" id="table7" border="0">
                        <tr>
                            <th colspan="3">
                                ผลการตรวจทางห้องทดลอง
                            </th>
                        </tr>
                        <tr>
                            <td>ลำดับ</td>
                            <td>ผลการตรวจ</td>
                            
                            <td> วันที่: <input type="text"  id="lab_date" placeholder="เลือกวันที่" class="datepicker" style="width: 58%;" /></td>
                            
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>น้ำตาลในเลือด (FBS mg%)</td>
                            <td><input id="fbs"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>ไขมันในเลือด</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2.1</td>
                            <td>LDL</td>
                            <td><input id="ldl"  type="text" style=""></td>
                        </tr>
                        <tr class="tg-even">
                            <td>2.2</td>
                            <td>HDL</td>
                            <td><input id="hdl"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td>2.3</td>
                            <td>Cholesterol</td>
                            <td><input id="Cholesterol"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>กาทำงานของไต</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3.1</td>
                            <td>Creatinine</td>
                            <td><input id="Creatinine"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td>3.2</td>
                            <td>BUN</td>
                            <td><input id="BUN"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>HbA1C</td>
                            <td><input id="HbA1C"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><button class="btn btn-success" id="save5" style="color:#484848; width: 80px">บันทึก</button></td>
                        </tr>
                        <tr class="tg-even">
                            <td colspan="3"><button class="btn btn-success" id="finish1" style="color:#484848; width: 80px">เสร็จสิ้น</button></td>
                        </tr>
                    </table>
                    
                </div>
                
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
                                        <input type="text"  id="dateC" placeholder="คลิ๊กเพื่อเลือกวันที่" class="datepicker" style="" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >ผู้ตรวจ:</label>
                                    <div class="controls" > 
                                        <input type="text"  id="nameC" placeholder="ชื่อและนามสกุลผู้ตรวจ" id="datepicker" style="" />
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="control-group">
                                    <label class="control-label" >การตรวจตา:</label>
                                    <div class="controls" > 
                                        <input class="spec"  id="eye" type="text" style="">
                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="control-group">
                                    <label class="control-label" >การตรวจเท้า:</label>
                                    <div class="controls" > 
                                        <input class="spec"  id="foot" type="text" style="">
                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="control-group">
                                    <label class="control-label" >การประเมินความซึมเศร้า:</label>
                                    <div class="controls" > 
                                        <input class="spec"  id="sad" type="text" style="">
                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="control-group">
                                    <label class="control-label" >ระดับคะแนน:</label>
                                    <div class="controls" > 
                                        <input class="spec"  id="point" type="text" style="">
                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2"><button class="btn btn-success" id="save6" style="color:#484848; width: 80px">บันทึก</button></td>
                        </tr>
                    </table>
                    
                </div>
                
                
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
                                        <input class="td"  id="trianPoint" type="text" style="">
                                    </div>
                                </div> 
                            </td>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >วันที่เตรียม:</label>
                                    <div class="controls" > 
                                        <input class="datepicker" id="dateTrain" type="text" style="">
                                    </div>
                                </div> 
                            </td>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >ผู้เตรียม:</label>
                                    <div class="controls" > 
                                        <input class="td"  id="nameTrain" type="text" style="">
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
                    
            </div>

            <div id="menu10" style="background-color:#27ae60;height:310px;width:700px; border-radius:25px;">

                    <table class="ex5" id="table10" border="0">
                        <tr>
                            <th colspan="3">แผนการดูแลที่บ้าน</th>
                            
                        </tr>
                        <tr>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >ประเด็นที่ดูแล:</label>
                                    <div class="controls" > 
                                        <input class="td"  id="planPoint" type="text" style="">
                                    </div>
                                </div> 
                            </td>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >แนวทางการดูแล:</label>
                                    <div class="controls" > 
                                        <input class="" id="wayD" type="text" style="">
                                    </div>
                                </div> 
                            </td>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >ผู้ที่ดูแล:</label>
                                    <div class="controls" > 
                                        <input class="td"  id="namedd" type="text" style="">
                                    </div>
                                </div> 
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="3">
                               <div class="control-group">
                                    <label class="control-label" >หมายเหตุ:</label>
                                    <div class="controls" > 
                                        <input class="td"  id="mark" type="text" style="">
                                    </div>
                                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><button class="btn btn-success" id="save8" style="color:#484848; width: 80px">บันทึก</button></td>
                            
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
                               <div class="control-group">
                                    <label class="control-label" >การเยี่ยมครั้งที่:</label>
                                    <div class="controls" >                                         
                                        <input   type="text" id="visit_order" style="width:30px;">
                                    </div>
                                </div>
                            </td>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >ผู้เยี่ยม:</label>
                                    <select id="Pvisit" style="width: 60%; text-align: center;">
                                        <option value="n">พยาบาล</option>
                                        <option value="osm">อสม.</option>
                                        <option value="staff">เจ้าหน้าที่</option>
                                    </select> 
                                </div>
                            </td>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >บุคคลที่ได้รับการเยี่ยม:</label>
                                    <select id="PRvisit" style="width: 60%; text-align: center;">
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
                                        <textarea id="enviFam" style="width: 80%; height: 70px;"></textarea>
                                    </div>
                                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><button class="btn btn-success" id="save9" style="color:#484848; width: 80px">บันทึก</button></td>
                            
                        </tr>
                       <!-- <tr>
                            <td colspan="3" style="padding-top:25px;">
                                <button class="btn btn-success" id="finish4" style="color:#484848; width: 200px;">เสร็จสิ้นการบันทึกในส่วนนี้</button>
                            </td>
                            
                        </tr> -->
                    </table>
                    
            </div>
                
                <div id="menu12" style="background-color:#27ae60;height:220px;width:700px; border-radius:25px;">

                    <table class="ex5" id="table12" border="0">
                        <tr>
                            <th colspan="4">บันทึกการดูแลจากการเยี่ยมบ้าน</th>
                            
                        </tr>
                        <tr>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >ประเด็นที่ดูแล:</label>
                                    <div class="controls" > 
                                        <input   type="text" id="takecarePoint" style="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >การดูแล:</label>
                                    <div class="controls" > 
                                        <input   type="text" id="takecare" style="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >ผู้ดูแล:</label>
                                    <div class="controls" > 
                                        <input   type="text" id="namePD" style="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >หมายเหตุ:</label>
                                    <div class="controls" > 
                                        <input   type="text" id="note2" value="-">
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
                    
            </div>

            <div id="menu13">
                <button class="btn btn-success" id="finish6" style="color:#484848; width: 400px;">เสร็จสิ้นการบันทึกข้อมูลของผู้ป่วยรายนี้</button>
            </div>
<!-- <input class="btn btn-info" type="submit" value="Submit" style="margin-left:20%;">
<input class="btn btn-primary" type="reset" value="Reset"> -->


            </div>

            
            
            
            
            
            
 
            <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;margin-top: 25px">
                </div>

        </div>

        


    </body>
</html>