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
        <link rel="stylesheet" href="./Gedit/edit_Css.css">
        <link rel="stylesheet" href="./alloy/jquery-ui-all/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="./CSS_checkbox/style.css">
        <link rel="stylesheet" href="./process/process_css.css">
<!--        <link rel="stylesheet" href="./alloy/pagination/css/jqpagination.css">-->
        
        
       
        
        <script src="./alloy/jquery.min.js"></script>
        <script src="./alloy/build/aui/aui.js"></script>
        <script src="./alloy/jquery.js"></script>
        <script src="./alloy/jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
        <script src="./alloy/jquery-ui/development-bundle/ui/i18n/jquery.ui.datepicker-th.js"></script>
        <script src="./alloy/jquery-ui-all/ui/jquery-ui.js"></script>
        <script src="./Gedit/jsEdit.js"></script>   
        <script src="./process/process_script.js"></script>
        
        <script src="./alloy/pagination/js/jquery.jqpagination.js"></script>
        
        
        <script type="text/javascript" src="./fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="./fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="./fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="./fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="./fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="./fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="./fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="./fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        
       
        
        
        <style>
        
        </style>
        
        <script>

        </script>
    </head>
    <body>

        <div id="container" style="width:100%;">
            
            <div id="successPopUp">บันทึกแล้ว</div>
            
            <div id="header" style="background-color:#CEECF5;width:100%;height:100px;">
                <h1 style="margin-bottom:0; font-size:200%; text-align:center; padding-top:25px; font-family:"Angsana New";>ประมวลผลข้อมูลผู้ป่วยเบาหวาน</h1></div>



            <div id="content" style="background-color:#E6E6E6;height:auto;width:1100px;padding-bottom: 25px;">
                
                
                
                <div id="menu" style="background-color:#F5A9F2;height:auto;width:400px; border-radius:25px;padding-bottom: 10px;">

                    <form class="myForm" >
                        <table class="ex1" border="0">
                            <tr>
                                <td colspan="2">
                                    <label>จำนวนและรายชื่อผู้ป่วยแยกตามเพศ</label>
                                </td>
                                 
                            </tr> 
                            <tr>
                                <td>
                                    <button class="btn btn-info" id="m" type="button">ชาย</button>
                                </td>
                                 <td>
                                    <button class="btn btn-info" id="wm" type="button">หญิง</button>
                                </td>
                            </tr>
                        </table>
                        <br>
                        
                    </form>

                </div>
                
                 <div id="m2" style="background-color:#F5A9F2;height:auto;width:400px; border-radius:25px;padding-bottom: 10px;">

                    <form class="myForm" >
                        
                        <table class="ex1" border="0" >
                            <tr>
                                <td colspan="3">
                                    <label>จำนวนและรายชื่อผู้ป่วยแยกตามอายุ</label>
                                </td>
                                 
                            </tr> 
                            <tr>
                                <td>
                                    <label>ตั้งแต่</label><input type="text" id="ageFrom" style="width:40px;">
                                </td>
                                 <td>
                                     <label>ถึง</label><input type="text" id="ageTo" style="width:40px;">
                                    
                                </td>
                                <td>                                   
                                    <button class="btn btn-info" id="okAge" type="button" style="margin-top: 9px;">OK</button>
                                </td>
                            </tr>
                        </table>

                    </form>

                </div>
                
                <div id="m3" style="background-color:#F5A9F2;height:auto;width:400px; border-radius:25px;padding-bottom: 10px;">

                    <form class="myForm" >
                        
                        <table class="ex1" border="0" >
                            <tr>
                                <td colspan="3">
                                    <label>จำนวนและรายชื่อผู้ป่วยแยกตามหมู่บ้าน</label>
                                </td>
                                 
                            </tr> 
                            <tr>
                                <td>
                                    <label>ตั้งแต่</label><input type="text" id="mooFrom" style="width:40px;">
                                </td>
                                 <td>
                                     <label>ถึง</label><input type="text" id="mooTo" style="width:40px;">
                                    
                                </td>
                                <td>                                   
                                    <button class="btn btn-info" id="okMoo" type="button" style="margin-top: 9px;">OK</button>
                                </td>
                            </tr>
                        </table>

                    </form>

                </div>
                
                <div id="m4" style="background-color:#F5A9F2;height:auto;width:500px; border-radius:25px;padding-bottom: 10px;">

                    <form class="myForm" >
                        
                        <table class="ex1" border="0" >
                            <tr>
                                <td colspan="3">
                                    <label>จำนวนและรายชื่อผู้ป่วยแยกตามระดับน้ำตาล (FBS mg%)</label>
                                </td>
                                 
                            </tr> 
                            <tr>
                                <td>
                                    <label>ตั้งแต่</label><input type="text" id="sweetFrom" style="width:40px;">
                                </td>
                                 <td>
                                     <label>ถึง</label><input type="text" id="sweetTo" style="width:40px;">
                                    
                                </td>
                                <td>                                   
                                    <button class="btn btn-info" id="okSweet" type="button" style="margin-top: 9px;">OK</button>
                                </td>
                            </tr>
                        </table>

                    </form>

                </div>
                
               
                
                <div id="listNameProcess1" style="background-color:#e74c3c;width:auto; border-radius:10px;color: #ecf0f1;text-align: center;"></div>
                <div id="listNameProcess2"></div>
                
             
            
<!-- <input class="btn btn-info" type="submit" value="Submit" style="margin-left:20%;">
<input class="btn btn-primary" type="reset" value="Reset"> -->


            </div>

 
            <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;margin-top: 25px">
                </div>
            
        </div>

      


    </body>
</html>