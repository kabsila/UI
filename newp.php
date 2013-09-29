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
                height:150px;
                width:400px;
                margin:auto;
                text-align: center;
                padding-top: 40px; 
                margin-top: 25px;
            }
            
            #menu3
            {
                margin:auto;
                margin-top:20px;               
                text-align: center;
                padding-top: 47px;
                display: block;
                opacity: 0; 
                transition: opacity 1s ease-out, visibility 1s ease-in-out; 
                -webkit-transition: opacity 500ms ease-in-out;
                               
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
            {   /**             
                opacity: 1;
                transition: opacity 1s ease;                
                -webkit-transition: opacity 500ms linear;                 
                margin-top: 25px; 
                
                 height: 0;
                overflow: hidden;
                **/
                
                display: block;
                transition: opacity 1s ease-out, visibility 1s ease-in-out; 
                -webkit-transition: opacity 500ms ease-in-out;
                opacity: 0; 
                 
            }
            
            input.w_input
            {
                width:60%;
                text-align: center;
                
            }
            #info
            {
                margin:auto;
                display: block;
                height: 80px;
                font-size: 150%;
                transition: opacity 1s ease-out, visibility 1s ease-in-out; 
                -webkit-transition: opacity 500ms ease-in-out;
            }
            #btninfo
            {
                height: 80px;
                font-size: 150%;
                transition: opacity 1s ease-out, visibility 1s ease-in-out; 
                -webkit-transition: opacity 500ms ease-in-out;
            }
            #myDiv
            {
                transition: opacity 1s ease-out, visibility 1s ease-in-out; 
                -webkit-transition: opacity 500ms ease-in-out;
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
                    //document.getElementById('menu2').style.display = "block";el.style.opacity = 1;  ; 
                    document.getElementById('fname').value = '';
                    document.getElementById('sname').value = '';
                    var el = document.getElementById('menu2'); 
                    var myDiv = document.getElementById('myDiv');
                    
                    myDiv.style.opacity = 0;                    
                    el.style.height = "150px"; 
                    el.style.opacity = 1;
                    el.style.visibility = "visible";
                    el.style.marginTop = "25px";
                    el.style.paddingTop = "40px";
                    document.getElementById('table2').style.visibility = "visible";
                    document.getElementById('menu3').style.visibility = "hidden";
                    
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
                        
                        document.getElementById('myDiv').style.opacity = 1;
                        document.getElementById("menu2").style.marginTop = "0px";
                        document.getElementById("menu2").style.paddingTop = "0px";
                        document.getElementById("menu2").style.height = 0; 
                        document.getElementById("menu2").style.opacity = 0;
                        document.getElementById('menu2').style.visibility = "hidden";
                        document.getElementById('table2').style.visibility = "hidden";
                        document.getElementById("myDiv").innerHTML=xmlhttp.responseText;                        
                        }
                      }
                      var pmeters = "tStatus="+ encodeURI( document.getElementById("sta").value)+
                                                "&tFname=" + encodeURI( document.getElementById("fname").value) +
						"&tSname=" + encodeURI( document.getElementById("sname").value );
                    xmlhttp.open("POST","add_name_newp_to_db.php",true);
                    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    xmlhttp.send(pmeters);
                    }
                    
                    
                function addDataPage()
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
                        document.getElementById('info').style.opacity = "0";
                        document.getElementById('info').style.visibility = "hidden";
                        document.getElementById('menu3').style.visibility = "visible";
                        document.getElementById('menu3').style.opacity = "1";                        
                        document.getElementById("menu3").innerHTML=xmlhttp.responseText;                        
                        }
                      }
                      
                    xmlhttp.open("POST","addDataPage.php",true);
                    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    xmlhttp.send();
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
                                    <button class="button" onclick="loadXMLDoc()" style="width:80px;">OK</button>
                                </td>
                            </tr>
                        </table>
             </div>
                <div id="myDiv"></div>
                
              <div id="menu3" style="background-color:#FF9900;height:200px;width:700px; border-radius:25px;"></div>   
                
                



<!-- <input class="btn btn-info" type="submit" value="Submit" style="margin-left:20%;">
<input class="btn btn-primary" type="reset" value="Reset"> -->


            </div>


            <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
                Copyright © Chanon</div>

        </div>

        


    </body>
</html>