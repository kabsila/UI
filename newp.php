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
            table.ex2 
            {
                 text-align: center;
                 margin-left:auto;
                 margin-right:auto;
                 table-layout:auto;
                 
            }
            #menu2
            {
                display: block;
                opacity: 1;
                transition: opacity 1s ease;
                -webkit-transition: opacity 500ms linear;            
                margin-top: 25px;  
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
               
               function loadXMLDoc()
                {
                    var xmlhttp;
                    if (window.XMLHttpRequest)
                      {// code for IE7+, Firefox, Chrome, Opera, Safari
                      xmlhttp=new XMLHttpRequest();
                      }
                    else
                      {// code for IE6, IE5
                      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                      }
                    xmlhttp.onreadystatechange=function()
                      {
                      if (xmlhttp.readyState==4 && xmlhttp.status==200)
                        {
                        document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
                        }
                      }
                      var pmeters = "tFname=" + encodeURI( document.getElementById("fname").value) +
						"&tSname=" + encodeURI( document.getElementById("sname").value );
                    xmlhttp.open("POST","add_name_newp_to_db.php",true);
                    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    xmlhttp.send(pmeters);
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
                
                <div id="menu2" style="background-color:#7BA6B4;height:150px;width:400px; border-radius:25px;">

                    
                        <table class="ex2" border="0" >
                            <tr>
                                <td>
                                    <label class="control-label" for="name">ชื่อผู้ป่วย:</label> 
                                </td>
                                <td>
                                    <label class="control-label" for="name">นามสกุลผู้ป่วย:</label> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="yourDiv"> <input  id="fname"  type="text" style="width:80px;text-align: center;">  </div>
                                </td>
                                <td>
                                    <div id="yourDiv"> <input  id="sname"  type="text" style="width:80px;text-align: center;">  </div>
                                </td>
                                
                            </tr>
                            <tr >
                                <td colspan="2">
                                    <button class="button" onclick="loadXMLDoc()" style="width:80px;">OK</button>
                                </td>
                            </tr>
                        </table>
             </div>
                <div id="myDiv"></div>
                
                
                
                



<!-- <input class="btn btn-info" type="submit" value="Submit" style="margin-left:20%;">
<input class="btn btn-primary" type="reset" value="Reset"> -->


            </div>


            <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
                Copyright © Chanon</div>

        </div>

        


    </body>
</html>