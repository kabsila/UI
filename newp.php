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
        <script src="./alloy/build/aui/aui.js"></script>
        <style>
            #myForm
            {
               
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
                padding-top: 40px;   
                text-align: center;
                
            }
            
            #menu2
            {
                margin:auto;
                padding-top: 40px;   
                text-align: center;
                
            }
         
            table.ex1 
            {
                 text-align: center;
                 margin-left:auto;
                 margin-right:auto;
                 table-layout:auto;
                 
            }
            #menu2
            {
                display: block;
                opacity: 0;
                transition: opacity 3s ease;
                -webkit-transition: opacity 1s linear;            
                  
            }
         
            

        </style>
        
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
                
               function addP()
               {
                    //document.getElementById('menu2').style.display = "block";
                    var el = document.getElementById('menu2');
                    el.style.opacity = 1;
               }
        </script>
    </head>
    <body>

        <div id="container" style="width:100%;">

            <div id="header" style="background-color:#CEECF5;width:100%;height:100px;">
                <h1 style="margin-bottom:0; font-size:200%; text-align:center; padding-top:25px; font-family:"Angsana New";>แบบฟอร์มบันทึกข้อมูลเพื่อการดูแลต่อเนื่องที่บ้านสำหรับผู้ป่วยเบาหวานและครอบครัว</h1></div>



            <div id="content" style="background-color:#E6E6E6;height:700px;width:800px">

                <div id="menu" style="background-color:#F5A9F2;height:100px;width:400px; border-radius:25px;">

                    <form id="myForm" >
                        <table class="ex1" border="0" >
                            <tr>
                                <td>
                                    <button class="btn btn-large btn-primary" type="button" onclick="addP()">เพิ่มผู้ป่วยรายใหม่</button>
                                </td>
                            </tr>                            
                        </table>

                    </form>

                </div>
                
                <div id="menu2" style="background-color:#FF9933;height:100px;width:400px; border-radius:25px;">

                    <form id="myForm" >
                        <table class="ex1" border="0" >
                            <tr>
                                <td>
                                    <button class="btn btn-large btn-primary" type="button" onclick="addP()">เพิ่มผู้ป่วยรายใหม่</button>
                                </td>
                            </tr>
                            <tr>
                                <div id="yourDiv"> <input name="sname" id="sname"  type="text" style="">  </div>
                            </tr>
                        </table>

                    </form>

                </div>
                
                
                
                



<!-- <input class="btn btn-info" type="submit" value="Submit" style="margin-left:20%;">
<input class="btn btn-primary" type="reset" value="Reset"> -->


            </div>


            <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
                Copyright © Chanon</div>

        </div>

        


    </body>
</html>