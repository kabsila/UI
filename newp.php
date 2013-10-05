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
            
            #menu5
            {
                margin:auto;
                margin-top:20px;               
                text-align: center;
                padding-top: 47px;
                display: none;
            }
            
             #menu6
            {
                margin:auto;
                margin-top:20px;               
                text-align: center;
                padding-top: 47px;
                display: none;
            }
            
            #menu7
            {
                margin:auto;
                margin-top:20px;               
                text-align: center;
                padding-top: 47px;
                display: block;
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
            table.ex5
            {
                 text-align: center;
                 margin-left:auto;
                 margin-right:auto;
                 table-layout:auto;
                 width: 600px;              
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
            
            input
            {
                width:70%;
                text-align: center;
            }
            
            #successPopUp
            {  
                display:none;  
               
                
                height:50px;  
                width:300px; 
                     
                background:#A3FF47;  
               
                padding-top: 25px;
                 
                font-size:16px;
                border-radius: 40px;
                text-align: center;
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
                      $("#menu3").slideToggle(1500);
                      $("#menu4").slideToggle("slow");
                    });
              }
              
               /** save2 **/
            $(document).ready(function(){
                $("#save2").click(function(){  
                      $.ajax({
                          type: "POST",
                          url: "save2_address.php",
                          data: 
                          { 
                              tAddNum:$('#AddNum').val(),
                              tRoad:$('#Road').val(),
                              tAumphor:$('#Aumphor').val(),
                              tTumbol:$('#Tumbol').val(),
                              tCity:$('#City').val(),
                              tZipcode:$('#Zipcode').val(),
                              tLatitude: $('#Latitude').val(),                               
                              tLongitude:$('#Longitude').val(),
                              tDateAcc:$('#DateAcc').val()
                          }
                        })
                          .done(function( msg ) 
                          {
                            $("#menu4").height(60);
                            $("#menu4").hide().html(msg).fadeToggle("slow");
                            $("#menu4").slideUp(1500);
                            $("#menu5").fadeToggle("slow");
                           /** $("#menu4").slideToggle("slow");**/
                          });
                    
                });
               });
                
                
                 /** save3 **/
              $(document).ready(function(){
                $("#save3").click(function(){  
                                         $.ajax({

                                            type: "POST",
                                            url: "save3_vinich.php",
                                            data: 
                                            {                       
                                                tAnalysis:$('#Analysis').val(),
                                                tInput_other:$('#input_other').val(),
                                                tDrName:$('#DrName').val(),
                                                tNname:$('#Nname').val(),
                                                tAsmName:$('#AsmName').val(),
                                                tHospital:$('#Hospital').val(),
                                                tmed: $('#med').val(),                               
                                                tmed_history:$('#med_history').val(),
                                                tspec_food:$('#spec_food').val(),
                                                tsmpai:$('#smpai').val(),
                                                tfamily_info:$('#family_info').val()

                                            }
                                          })
                                            .done(function( msg ) 
                                            {
                                              $("#menu5").height(60);
                                              $("#menu5").hide().html(msg).fadeToggle("slow");
                                              $("#menu5").fadeToggle(1500);
                                              $("#menu6").fadeIn("slow");
                                             /**  $("#menu5").fadeToggle("slow");
                                             $("#menu4").slideToggle("slow");**/
                                            });

                                  });
                                 });                                                   
                 
                  /** save4 **/
               $(document).ready(function(){
                $("#save4").click(function(){  
                      $.ajax({
                          type: "POST",
                          url: "save4_first_rating.php",
                          data: 
                          { 
                              tcanD:$('#canD').val(),
                              tbloodP:$('#bloodP').val(),
                              ttemp:$('#temp').val(),
                              thj:$('#hj').val(),
                              tenviHome:$('#enviHome').val(),
                              tbelieve:$('#believe').val(),
                              tp1:$('#p1').val(),
                              tjit: $('#jit').val(),                               
                              tp2:$('#p2').val(),
                              tecono:$('#econo').val()
                          }
                        })
                          .done(function( msg ) 
                          {
                            $("#menu6").height(60);
                            $("#menu6").hide().html(msg).fadeToggle("slow");
                            $("#menu6").slideUp(2000);
                            $("#menu7").fadeToggle("slow");
                           /** $("#menu4").slideToggle("slow");**/
                          });
                    
                });
               });                
              
               /** save5 **/
              $(document).ready(function(){
                $("#save5").click(function(){  
                      $.ajax({
                          type: "POST",
                          url: "save5_lab_result.php",
                          data: 
                          { 
                              tlab_date:$('#lab_date').val(),
                              tfbs:$('#fbs').val(),
                              tldl:$('#ldl').val(),
                              thdl:$('#hdl').val(),
                              tCholesterol:$('#Cholesterol').val(),
                              tCreatinine:$('#Creatinine').val(),
                              tBUN:$('#BUN').val(),
                              tHbA1C: $('#HbA1C').val()                               
                              
                          }
                        })
                          .done(function( msg ) 
                          {
                              
                              $("#successPopUp").css({
                                    "position": "absolute",
                                    "top": $("#table7").offset().top + $("#table7").offset().top/2,
                                    "left": $("#table7").offset().left - 45 + $("#table7").offset().left/2
                              });
                              
                             
                             $("#successPopUp").slideDown(1500);
                             
                             $('#table7').fadeOut(1500);
                             $('#lab_date').val('');
                             $('#fbs').val('');
                             $('#ldl').val('');
                             $('#hdl').val('');
                             $('#Cholesterol').val('');
                             $('#Creatinine').val('');
                             $('#BUN').val('');
                             $('#HbA1C').val('');
                             $('#table7').fadeIn(1500);
                             $("#successPopUp").slideUp(1500);   
                    
                                
                              
                            //$("#menu7").height(60);
                            //$("#menu7").hide().html(msg).fadeToggle("slow");
                           // $("#menu7").slideUp(2000);
                           // $("#menu8").fadeToggle("slow");
                          /** /////$("#menu4").slideToggle("slow");**/
                          });
                    
                });
               });
               
               $(document).ready(function(){
                $("#finish1").click(function(){
                                         
                     $("#menu7").slideUp(800);                     
                     $("#menu8").fadeIn("slow");        
                    
                });
               });
               
               
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
		$( ".datepicker" ).datepicker($.datepicker.regional[ "th" ] );
		
                });
        
                $(document).ready(function(){          
                    $("select#Analysis").change(function () {
                        if( $("option#other:selected").length )
                        {
                          $("#input_other").slideDown("slow");
                        }else
                        {
                          $("#input_other").slideUp("slow"); 
                                 
                        }

                  });
                });

                
        </script>
    </head>
    <body>

        <div id="container" style="width:100%;">
            
            <div id="successPopUp">บันทึกแล้ว</div>
            
            <div id="header" style="background-color:#CEECF5;width:100%;height:100px;">
                <h1 style="margin-bottom:0; font-size:200%; text-align:center; padding-top:25px; font-family:"Angsana New";>แบบฟอร์มบันทึกข้อมูลเพื่อการดูแลต่อเนื่องที่บ้านสำหรับผู้ป่วยเบาหวานและครอบครัว</h1></div>



            <div id="content" style="background-color:#E6E6E6;height:auto;width:800px;padding-bottom: 25px;">
                
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
                                            <input class="w_input" id="AddNum"  type="text" pattern="[A-Za-z]{3}" title="Three letter country code" style="">
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
                
                
              
                <div id="menu5" style="background-color:#FFD200;height:500px;width:700px; border-radius:25px;">
                    <table class="ex5" border="0">
                        <tr>
                            <td colspan="4">
                                <label class="control-label" >การวินิจฉัย:</label>
                                <div id="yourDiv"> 
                                    <select id="Analysis" style="width:140px;text-align: center;">
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
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >ชื่อแพทย์ผู้ดูแล:</label>
                                    <div class="controls" > 
                                        <input name="with" id="DrName"  type="text" style="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >ชื่อพยาบาลผู้ดูแล:</label>
                                    <div class="controls" > 
                                        <input name="with" id="Nname"  type="text" style="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >ชื่อ อสม. ผู้ดูแล:</label>
                                    <div class="controls" > 
                                        <input name="with" id="AsmName"  type="text" style="">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >โรงพยาบาลที่รับการรักษา:</label>
                                    <div class="controls" > 
                                        <input name="with" id="Hospital"  type="text" style="">
                                    </div>
                                </div>
                            </td>
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
                                        <input name="with" id="med_history"  type="text" style="">
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
                
                
                <div id="menu6" style="background-color:#FFD200;height:850px;width:700px; border-radius:25px;">

                    
                    <table class="ex1" border="0">
                        <tr>
                            <th colspan="4">การประเมินครั้งแรกที่รับไว้ในการดูแล</th>
                        </tr>
                        <tr>
                          <td colspan="4">
                                <div class="control-group">
                                    <label class="control-label" >ความสามารถในการดูแลตนเอง:</label>
                                    <div class="controls" > 
                                        <input placeholder="ประเมินตามดัชนีบาเธล (คะแนน)" id="canD"  type="text" style="">
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
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >อุณหภูมิ:</label>
                                    <div class="controls" > 
                                        <input placeholder="องศาเซลเซียส" id="temp"  type="text" style="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >หายใจ:</label>
                                    <div class="controls" > 
                                        <input placeholder="ครั้ง" id="hj"  type="text" style="">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="control-group">
                                    <label class="control-label" >สภาพแวดล้อมภายในและภายนอนบ้าน:</label>
                                    <div class="controls" > 
                                        <textarea id="enviHome" style="width: 80%; height: 70px;"></textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="control-group">
                                    <label class="control-label" >ความเชื่อและวิถีชีวิต:</label>
                                    <div class="controls" > 
                                        <textarea id="believe" style="width: 80%; height: 70px;"></textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="control-group">
                                    <label class="control-label" >สภาวะทางด้านจิตสังคมของผู้ป่วยและผู้ดูแล:</label>
                                    <select id="p1" style="width:140px;text-align: center;">
                                        <option value="p">มีปัญหา</option>
                                        <option value="nop">ไม่มีปัญหา</option>                                        
                                    </select>  
                                    <div class="controls" > 
                                        <textarea id="jit" style="width: 80%; height: 70px;"></textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="control-group">
                                    <label class="control-label" >สภาวะทางด้านเศรษฐกิจของผู้ป่วยและผู้ดูแล:</label>
                                    <select id="p2" style="width:140px;text-align: center;">
                                        <option value="p">มีปัญหา</option>
                                        <option value="nop">ไม่มีปัญหา</option>                                        
                                    </select>  
                                    <div class="controls" > 
                                        <textarea id="econo" style="width: 80%; height: 70px;"></textarea>
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
                
                <div id="menu7" style="background-color:#FFD200;height:520px;width:700px; border-radius:25px;">

                    
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



<!-- <input class="btn btn-info" type="submit" value="Submit" style="margin-left:20%;">
<input class="btn btn-primary" type="reset" value="Reset"> -->


            </div>

 
            <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;margin-top: 25px">
                Copyright © Chanon</div>

        </div>

        


    </body>
</html>