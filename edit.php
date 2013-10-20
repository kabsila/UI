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
        
        <script src="./alloy/build/aui/aui.js"></script>
        <script src="./alloy/jquery.js"></script>
        <script src="./alloy/jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
        <script src="./alloy/jquery-ui/development-bundle/ui/i18n/jquery.ui.datepicker-th.js"></script>
        <script src="./Gedit/jsEdit.js"></script>
        <style>
            

        </style>
        
        <script>
            
        </script>
    </head>
    <body>

        <div id="container" style="width:100%;">
            
            <div id="successPopUp">บันทึกแล้ว</div>
            
            <div id="header" style="background-color:#CEECF5;width:100%;height:100px;">
                <h1 style="margin-bottom:0; font-size:200%; text-align:center; padding-top:25px; font-family:"Angsana New";>แก้ไขข้อมูลผู้ป่วยเบาหวาน</h1></div>



            <div id="content" style="background-color:#E6E6E6;height:auto;width:1100px;padding-bottom: 25px;">
                
                
                
                <div id="menu" style="background-color:#F5A9F2;height:100px;width:400px; border-radius:25px;">

                    <form id="myForm" >
                        <table class="ex1" border="0" >
                            <tr>
                                <td>
                                    <button class="btn btn-large btn-primary" id="listname" type="button">รายชื่อผู้ป่วยทั้งหมดที่อยู่ในระบบ</button>
                                </td>
                            </tr>                            
                        </table>

                    </form>

                </div>
                
               
                
                <div id="listName2" style="background-color:#e74c3c;width:400px; border-radius:25px;color: #ecf0f1;"></div>
                <div id="listName3"></div>
                
                
                

            
<!-- <input class="btn btn-info" type="submit" value="Submit" style="margin-left:20%;">
<input class="btn btn-primary" type="reset" value="Reset"> -->


            </div>

 
            <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;margin-top: 25px">
                </div>
            
        </div>

        


    </body>
</html>