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
        
        <script src="./alloy/build/aui/aui.js"></script>
        <script src="./alloy/jquery.js"></script>
        <script src="./alloy/jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
        <script src="./alloy/jquery-ui/development-bundle/ui/i18n/jquery.ui.datepicker-th.js"></script>
        <style>
            #myForm
            {
                height:200px;
                width:700px;
                text-align: center;
            }

           /* #menu label
            {display:inline;
                float:left;
                margin-right:4px;
                vertical-align:top;
            }*/
            #content
            {
               padding-top: 25px;
               margin:auto;
               text-align: center;
            }
            #menu
            {
                margin:auto;
                margin-top:20px;               
                text-align: center;
                padding-top: 47px;
            }
         
            table.ex1 
            {
                 text-align: center;
                 margin-left:auto;
                 margin-right:auto;
                 width: 600px;
                 
            }
            input
            {
                width:70%;
                text-align: center;
                
            }
            input.spec
            {
                width:80%;
                text-align: center;
            }

            
            
            
            
            
            
          

        </style>
    </head>
    <body>

        <div id="container" style="width:100%;">

            <div id="header" style="background-color:#CEECF5;width:100%;height:100px;">
                <h1 style="margin-bottom:0; font-size:200%; text-align:center; padding-top:25px; font-family:"Angsana New";>แบบฟอร์มบันทึกข้อมูลเพื่อการดูแลต่อเนื่องที่บ้านสำหรับผู้ป่วยเบาหวานและครอบครัว</h1></div>



            <div id="content" style="background-color:#E6E6E6;height:auto;width:800px">

                <div id="menu" style="background-color:#F5A9F2;height:200px;width:700px; border-radius:25px;">

                    <form id="myForm" >
                        <table class="ex1" border="0" >
                            <tr>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" for="name">ชื่อผู้ป่วย:</label> 
                                        <div class="controls" >
                                            <input name="fname" id="fname"  type="text" pattern="[A-Za-z]{3}" title="Three letter country code" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >นามสกุลผู้ป่วย:</label>  
                                        <div class="controls" >
                                            <input name="sname" id="sname"  type="text" style="">     
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >อายุ:</label> 
                                        <div class="controls" >
                                            <input name="age" id="age"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <div class="control-group">

                                        <label class="control-label" >ชื่อผู้ดูแล:</label>
                                        <div class="controls" > 
                                            <input name="dname" id="dname"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >นามสกลุผู้ดูแล:</label>
                                        <div class="controls" >
                                            <input name="dsname" id="dsname"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >ความเกี่ยวข้อง:</label>
                                        <div class="controls" > 
                                            <input name="with" id="with"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                
                            </tr>
                            <tr >
                                <td colspan="5">
                                    <button class="btn btn-success" style="color:#484848; width: 80px">บันทึก</button>
                                </td>
                            </tr>
                        </table>

                    </form>

                </div>
                
                
                
                <div id="menu" style="background-color:#FFD200;height:200px;width:700px; border-radius:25px;">

                    
                        <table class="ex1" border="0" >
                            <tr>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" for="name">เลขที่อยู่:</label> 
                                        <div class="controls" >
                                            <input name="fname" id="fname"  type="text" pattern="[A-Za-z]{3}" title="Three letter country code" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >ถนน:</label>  
                                        <div class="controls" >
                                            <input name="sname" id="sname"  type="text" style="">     
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >ตำบล:</label> 
                                        <div class="controls" >
                                            <input name="age" id="age"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >อำเภอ:</label>
                                        <div class="controls" > 
                                            <input name="job" id="job"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >จังหวัด:</label>
                                        <div class="controls" >
                                            <input name="tel" id="tel"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="control-group">

                                        <label class="control-label" >รหัสไปรษณีย์:</label>
                                        <div class="controls" > 
                                            <input name="dname" id="dname"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >Latitude:</label>
                                        <div class="controls" >
                                            <input name="dsname" id="dsname"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >Longitude:</label>
                                        <div class="controls" > 
                                            <input name="with" id="with"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td colspan="2">
                                    <div class="control-group">
                                        <label class="control-label" >วันที่รับไว้ในการเยี่ยมบ้าน:</label>
                                        <div class="controls" > 
                                            <input type="date" name="bday">
                                        </div>
                                    </div>
                                </td>
                                
                            </tr>
                            <tr >
                                <td colspan="5">
                                    <button class="btn btn-success" style="color:#484848; width: 80px">บันทึก</button>
                                </td>
                            </tr>
                        </table>

                    

                </div>

                <div id="menu" style="background-color:#2c3e50;height:600px;width:700px; border-radius:25px;color: #ecf0f1;">

                    
                    <table class="ex1" border="0">
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
                            <td colspan="3">
                                <div class="control-group">
                                    <label class="control-label" >อาหารเฉพาะ:</label>
                                    <div class="controls" > 
                                        <input name="with" id="spec_food"  type="text" style="width: 80%">
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
                
                
                <div id="menu" style="background-color:#e74c3c;height:300px;width:700px; border-radius:25px;color: #ecf0f1;">

                    
                    <table class="ex1" border="0">
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
                                <button class="btn btn-success" style="color:#484848; width: 80px">บันทึก</button>
                            </td>
                        </tr>
                    </table>
            </div>

                
                <div id="menu" style="background-color:#99ff00;height:450px;width:700px; border-radius:25px;">

                    
                    <table class="ex1" border="0">
                        <tr>
                            <th colspan="3">
                                ผลการตรวจทางห้องทดลอง
                            </th>
                        </tr>
                        <tr class="tg-even">
                            <td>ลำดับ</td>
                            <td>ผลการตรวจ</td>
                            
                            <td> วันที่: <input type="text"  placeholder="เลือกวันที่" class="datepicker" style="width: 58%;" /></td>
                            
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>น้ำตาลในเลือด (FBS mg%)</td>
                            <td><input id="smpai"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>ไขมันในเลือด</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2.1</td>
                            <td>LDL</td>
                            <td><input id="smpai"  type="text" style=""></td>
                        </tr>
                        <tr class="tg-even">
                            <td>2.2</td>
                            <td>HDL</td>
                            <td><input id="smpai"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td>2.3</td>
                            <td>Cholesterol</td>
                            <td><input id="smpai"  type="text" style=""></td>
                        </tr>
                        <tr class="tg-even">
                            <td>3</td>
                            <td>กาทำงานของไต</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3.1</td>
                            <td>Creatinine</td>
                            <td><input id="smpai"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>HbA1C</td>
                            <td><input id="smpai"  type="text" style=""></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><button class="btn btn-success" style="color:#484848; width: 80px">บันทึก</button></td>
                        </tr>
                        <tr class="tg-even">
                            <td colspan="3"><button class="btn btn-success" style="color:#484848; width: 80px">เสร็จสิ้น</button></td>
                        </tr>
                    </table>
                    
            </div>
                
                <div id="menu" style="background-color:#33ff00;height:500px;width:700px; border-radius:25px;">

                   <table class="ex1" border="0">
                        <tr>
                            <th colspan="2">การตรวจเฉพาะ</th>
                            
                        </tr>
                        <tr>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >วันที่ตรวจ:</label>
                                    <div class="controls" > 
                                        <input type="text"  name="123" placeholder="คลิ๊กเพื่อเลือกวันที่" class="datepicker" style="" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >ผู้ตรวจ:</label>
                                    <div class="controls" > 
                                        <input type="text"  name="123" placeholder="ชื่อและนามสกุลผู้ตรวจ" id="datepicker" style="" />
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="control-group">
                                    <label class="control-label" >การตรวจตา:</label>
                                    <div class="controls" > 
                                        <input class="spec"  type="text" style="">
                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="control-group">
                                    <label class="control-label" >การตรวจเท้า:</label>
                                    <div class="controls" > 
                                        <input class="spec"  type="text" style="">
                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="control-group">
                                    <label class="control-label" >การประเมินความซึมเศร้า:</label>
                                    <div class="controls" > 
                                        <input class="spec"  type="text" style="">
                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="control-group">
                                    <label class="control-label" >ระดับคะแนน:</label>
                                    <div class="controls" > 
                                        <input class="spec"  type="text" style="">
                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2"><button class="btn btn-success" style="color:#484848; width: 80px">บันทึก</button></td>
                        </tr>
                    </table>
                    
            </div>
                
                <div id="menu" style="background-color:#00ff00;height:180px;width:700px; border-radius:25px;">

                    <table class="ex1" border="0">
                        <tr>
                            <th colspan="3">การเตรียมผู้ดูแล</th>
                            
                        </tr>
                        <tr>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >ประเด็นที่ได้รับการเตรียม:</label>
                                    <div class="controls" > 
                                        <input class="td"  id="trainPoint" type="text" style="">
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
                            <td colspan="3"><button class="btn btn-success" style="color:#484848; width: 80px">บันทึก</button></td>
                            
                        </tr>
                    </table>
                    
            </div>
                
                <div id="menu" style="background-color:#00ff66;height:250px;width:700px; border-radius:25px;">

                    <table class="ex1" border="0">
                        <tr>
                            <th colspan="3">แผนการดูแลที่บ้าน</th>
                            
                        </tr>
                        <tr>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >ประเด็นที่ดูแล:</label>
                                    <div class="controls" > 
                                        <input class="td"  type="text" style="">
                                    </div>
                                </div> 
                            </td>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >แนวทางการดูแล:</label>
                                    <div class="controls" > 
                                        <input class="" type="text" style="">
                                    </div>
                                </div> 
                            </td>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >ผู้ที่ดูแล:</label>
                                    <div class="controls" > 
                                        <input class="td"  type="text" style="">
                                    </div>
                                </div> 
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="3">
                               <div class="control-group">
                                    <label class="control-label" >หมายเหตุ:</label>
                                    <div class="controls" > 
                                        <input class="td"  type="text" style="">
                                    </div>
                                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><button class="btn btn-success" style="color:#484848; width: 80px">บันทึก</button></td>
                            
                        </tr>
                    </table>
                    
            </div>
                
                <div id="menu" style="background-color:#00ffCC;height:300px;width:700px; border-radius:25px;">

                    <table class="ex1" border="0">
                        <tr>
                            <th colspan="3">การเยี่ยมบ้าน</th>
                            
                        </tr>
                        <tr>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >การเยี่ยมครั้งที่:</label>
                                    <div class="controls" > 
                                        <input   type="text" style="width:30px">
                                    </div>
                                </div>
                            </td>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >ผู้เยี่ยม:</label>
                                    <select id="py" style="width: 60%; text-align: center;">
                                        <option value="n">พยาบาล</option>
                                        <option value="osm">อสม.</option>
                                        <option value="staff">เจ้าหน้าที่</option>
                                    </select> 
                                </div>
                            </td>
                            <td>
                               <div class="control-group">
                                    <label class="control-label" >บุคคลที่ได้รับการเยี่ยม:</label>
                                    <select id="py" style="width: 60%; text-align: center;">
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
                                        <textarea style="width: 80%; height: 70px;"></textarea>
                                    </div>
                                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><button class="btn btn-success" style="color:#484848; width: 80px">บันทึก</button></td>
                            
                        </tr>
                    </table>
                    
            </div>
                
                <div id="menu" style="background-color:#00ffff;height:300px;width:700px; border-radius:25px;">

                    <table class="ex1" border="0">
                        <tr>
                            <th colspan="4">บันทึกการดูแลจากการเยี่ยมบ้าน</th>
                            
                        </tr>
                        <tr>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >ประเด็นที่ดูแล:</label>
                                    <div class="controls" > 
                                        <input   type="text" style="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >การดูแล:</label>
                                    <div class="controls" > 
                                        <input   type="text" style="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >ผู้ดูแล:</label>
                                    <div class="controls" > 
                                        <input   type="text" style="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >หมายเหตุ:</label>
                                    <div class="controls" > 
                                        <input   type="text" style="">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <button class="btn btn-success" style="color:#484848; width: 90px">บันทึกเพิ่ม</button>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="4">
                                </br></br></br></br>
                                <button class="btn btn-success" style="color:#484848; width: 130px">เสร็จสิ้นการบันทึก</button>
                            </td>
                            
                        </tr>
                    </table>
                    
            </div>
<!-- <input class="btn btn-info" type="submit" value="Submit" style="margin-left:20%;">
<input class="btn btn-primary" type="reset" value="Reset"> -->


            </div>


            <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
                Copyright © Chanon</div>

        </div>

        <script>
            YUI().use(
                    'aui-form-validator',
                    function(Y) {
                        new Y.FormValidator(
                                {
                                    boundingBox: '#myForm'
                                }
                        );
                    }
            );
                
$(document).ready(function(){
                $("#ok").click(function(){
                  $.post("add_name_newp_to_db.php",
                  {
                    tStatus: "nay",
                    tFname:"ssdsdsds",
                    tSname:"nsdsdsaysd"
                  },
                  function(data){
                    $('#myDiv').html(data);
                  });
                });
              });
              
              
    $(document).ready(function(){          
      $("select#analysis").change(function () {
        if( $("option#other:selected").length )
        {
          $("#input_other").slideDown("slow");
        }else
        {
          $("#input_other").slideUp("slow"); 
        }
        
      });
    });
    
    $(function() {
		$( ".datepicker" ).datepicker($.datepicker.regional[ "th" ] );
		
	});
        
      
        </script>


    </body>
</html>