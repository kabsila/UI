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
                background-color: #FF9900;
                height: 200px;
                width: 700px; 
                border-radius: 25px;
                margin: auto;
                margin-top:20px;               
                text-align: center;
                padding-top: 47px;
                display: none;
                
                
                               
            }
            
            #menu4
            {
                display: none;
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
                 display: none;
            }
            
            input.w_input
            {
                width:60%;
                text-align: center;
                
            }
            
            #info
            {
                margin:auto;
                
                height: 80px;
                font-size: 150%;
                
            }
            
           
            #myDiv
            {
                display: block;
                opacity: 1;
                
            }
            #test
            {
                display: none;
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
                
                              
               $(document).ready(function(){
                    $("#addP").click(function(){
                      $("#menu2").slideToggle("slow");
                      
                    });
                  });
                  
                  

               /**
               $.post("add_name_newp_to_db.php",
                  {
                    tStatus: $('#sta').val(),
                    tFname:$('#fname').val(),
                    tSname:$('#sname').val()
                  },
                  function(data){
                    $('#myDiv').text("data").fadeIn();
                    alert(data);
                  });**/
                  
                 
               $(document).ready(function(){
                $("#ok").click(function(){                    
                  $.ajax({
                    type: "POST",
                    url: "add_name_newp_to_db.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tStatus: $('#sta').val(),
                        tFname:$('#fname').val(),
                        tSname:$('#sname').val()
                    }
                  })
                    .done(function( msg ) 
                    {  $('#fname').val('');
                       $('#sname').val('');                     
                       $("#menu3").html(msg).fadeIn("slow");
                       $("#menu2").slideToggle("slow");
                       $("#menu3").on('click', '#btninfo', function() {
                           showadd1();

                        });
                    });
                  });
                 });
                 
       


                   
               /**
                $("#ok").on("click",function(){                    
                  $.ajax({
                    type: "POST",
                    url: "add_name_newp_to_db.php",
                    dataType: "HTML",
                    cache: true,
                    
                    data: 
                    { 
                        tStatus: $('#sta').val(),
                        tFname:$('#fname').val(),
                        tSname:$('#sname').val() 
                    }
                  })
                    .done(function( msg ) 
                    {
                      $('#fname').val('');
                      $('#sname').val(''); 
                      $("#menu2").slideUp("slow");
                      $("#myDiv").html(msg).fadeIn();
                      
                      
                      
                    });
                  });**/
                
              function showadd1(){    
                                  
                  $.ajax({
                    type: "POST",
                    url: "showAddDataPage1.php",
                    data: 
                    { 
                         
                    }
                  })
                    .done(function( msg ) 
                    {
                      $("#menu3").hide().html(msg).fadeToggle("slow");
                      $("#menu3").on('click', '#save1', function() {
                           save1();

                        });
                    });
                  
              }
              
              function save1()
              {
                  $.ajax({
                    type: "POST",
                    url: "save1.php",
                    data: 
                    { 
                        tAge:$('#age').val(),
                        tJob:$('#job').val(),
			tTel:$('#tel').val(),
                        tNameD:$('#named').val(),
                        tSnameD:$('#snamed').val(),
                        tWithD:$('#with').val(),
                        tJobD: $('#jobd').val(),                               
                        tTelD:$('#teld').val()
                    }
                  })
                    .done(function( msg ) 
                    {
                      $("#menu3").hide().html(msg).fadeToggle("slow");
                      $("#menu3").slideToggle(4000);
                      $("#menu4").slideToggle("slow");
                    });
              }
                
                    
                               
              
                function addDataPage23()
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
                
                function save11()
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
                            document.getElementById("menu3").innerHTML=xmlhttp.responseText;                        
                        }
                      }
                     
                    var pmeters = "tAge="+ encodeURI( document.getElementById("age").value)+
                                  "&tJob=" + encodeURI( document.getElementById("job").value) +
				  "&tTel=" + encodeURI( document.getElementById("tel").value )+
                                  "&tNameD=" + encodeURI( document.getElementById("named").value) +
                                  "&tSnameD=" + encodeURI( document.getElementById("snamed").value) +
                                  "&tWithD=" + encodeURI( document.getElementById("with").value) +
                                  "&tJobD=" + encodeURI( document.getElementById("jobd").value) +                                  
                                  "&tTelD=" + encodeURI( document.getElementById("teld").value);
                                        
                    xmlhttp.open("POST","save1.php",true);
                    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    xmlhttp.send(pmeters);
                }
                
                $(function() {
		$( "#datepicker" ).datepicker($.datepicker.regional[ "th" ] );
		$( "#format" ).change(function() {
			$( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
            
		});
	});
                
                
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
                <div id="menu4" style="background-color:#FFD200;height:200px;width:700px; border-radius:25px;">

                    
                        <table class="ex1" border="0" >
                            <tr>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" for="name">เลขที่อยู่:</label> 
                                        <div class="controls" >
                                            <input class="w_input" id="ad"  type="text" pattern="[A-Za-z]{3}" title="Three letter country code" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >ถนน:</label>  
                                        <div class="controls" >
                                            <input class="w_input" id="sname"  type="text" style="">     
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >ตำบล:</label> 
                                        <div class="controls" >
                                            <input class="w_input" id="age"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >อำเภอ:</label>
                                        <div class="controls" > 
                                            <input class="w_input" id="job"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >จังหวัด:</label>
                                        <div class="controls" >
                                            <input class="w_input" id="tel"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="control-group">

                                        <label class="control-label" >รหัสไปรษณีย์:</label>
                                        <div class="controls" > 
                                            <input class="w_input" id="dname"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >Latitude:</label>
                                        <div class="controls" >
                                            <input class="w_input" id="dsname"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >Longitude:</label>
                                        <div class="controls" > 
                                            <input class="w_input" id="with"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td colspan="2">
                                    <div class="control-group">
                                        <label class="control-label" >วันที่รับไว้ในการเยี่ยมบ้าน:</label>
                                        <div class="controls" > 
                                            <input type="date" class="w_input">
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
              
                
                



<!-- <input class="btn btn-info" type="submit" value="Submit" style="margin-left:20%;">
<input class="btn btn-primary" type="reset" value="Reset"> -->


            </div>

 
            <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
                Copyright © Chanon</div>

        </div>

        


    </body>
</html>