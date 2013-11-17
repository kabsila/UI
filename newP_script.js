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
                      $("#menu13").fadeOut("slow");
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
                   
                    var uploadObj2 = $("#advancedUpload2").uploadFile({
                    url:"./upload/upload_img2.php",                    
                    autoSubmit:true,
                    showStatusAfterSuccess:true,
                    fileName:"myfile",
                    allowedTypes:"jpeg,jpg,png,gif",
                    onSuccess:function(files,data,xhr)
                    {
                           $("#ok").css({
                                    "display": "block"                                    
                           }); 
                           
                           $("#noPic").css({
                                    "display": "none"                                    
                           }); 
                           
                           
                    }
                    });
        
        
                $("#noPic").click(function(){ 
                    $("#noPic").fadeOut("slow");
                    $("#ok_nopic").fadeIn("slow");
                    
                });
                 
                 
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
                    {  
                       //uploadObj2.startUpload(); 
                       
                       $('#fname').val('');
                       $('#sname').val('');                     
                       $("#menu3").html(msg).fadeIn("slow");
                      
                       showimg(); 
                      
                                            
                         
                        
                       $( "#menu3" ).on('click', '.fancybox', function() {                         
                           $(".fancybox").fancybox();                            
                        }); 
                        
                       
                        $("#menu2").slideUp("slow");
                       $("#menu3").on('click', '#btninfo', function() {
                           showadd1();

                        });
                    });
                  });
                  
                  $("#ok_nopic").click(function(){ 
                  $.ajax({
                    type: "POST",
                    url: "add_name_newp_to_db2.php",
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
                       //uploadObj2.startUpload(); 
                       
                       $('#fname').val('');
                       $('#sname').val('');                     
                       $("#menu3").html(msg).fadeIn("slow");
                      
                       showimg(); 
                      
                       $( "#menu3" ).on('click', '.fancybox', function() {                         
                           $(".fancybox").fancybox();                            
                        }); 
                        
                       
                        $("#menu2").slideUp("slow");
                       $("#menu3").on('click', '#btninfo', function() {
                           showadd1();

                        });
                    });
                  });
                 });
                 
                 
                 
                 
       

                function showimg()
                {
                  $.ajax({
                    type: "POST",
                    url: "showImg.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        
                    }
                  })
                    .done(function( msg ) 
                    {  
                                          
                       $("#menu3").prepend(msg);
                       
                             
                         
                       
                    });
                }
                
                   
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
                        //tJob:$('#job').val(),
			//tTel:$('#tel').val(),
                        tNameD:$('#named').val(),
                        tSnameD:$('#snamed').val(),
                        tWithD:$('#with').val(),
                       // tJobD: $('#jobd').val(),                               
                       // tTelD:$('#teld').val()
                    }
                  })
                    .done(function( msg ) 
                    {
                      $("#menu3").hide().html(msg).fadeToggle("slow");
                      $("#menu3").slideToggle();
                      $("#menu4").slideToggle("slow");
                      initialize();
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
                              tMoo:$('#moo').val(),
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
                            $("#menu4").hide().html(msg).fadeToggle();
                            $("#menu4").slideUp(1500);
                            $("#menu4-5").fadeToggle();
                           /** $("#menu4").slideToggle("slow");**/
                          });
                    
                });
               });
                
                
                 /** save3 **/
              $(document).ready(function(){
                $("#save3").click(function(){ 
                    
                        if ($("#checkbox1").is(":checked"))
                        {
                            var c1 = 't';                        
                        }
                        else
                        {
                            var c1 = 'f';
                        }
                        
                        if ($("#checkbox2").is(":checked"))
                        {
                            var c2 = 't';                        
                        }
                        else
                        {
                            var c2 = 'f';
                        }
                        if ($("#checkbox3").is(":checked"))
                        {
                            var c3 = 't';                        
                        }
                        else
                        {
                            var c3 = 'f';
                        }
                        if ($("#checkbox4").is(":checked"))
                        {
                            var c4 = 't';                        
                        }
                        else
                        {
                            var c4 = 'f';
                        }
                        if ($("#checkbox5").is(":checked"))
                        {
                            var c5 = 't';                        
                        }
                        else
                        {
                            var c5 = 'f';
                        }
                        
                        if($('#med1').val() == '')
                        {
                            $('#med1').val('-1');
                        }
                        if($('#med2').val() == '')
                        {
                            $('#med2').val('-2');
                        }
                        if($('#med3').val() == '')
                        {
                            $('#med3').val('-3');
                        }
                        if($('#med4').val() == '')
                        {
                            $('#med4').val('-4');
                        }
                        if($('#med5').val() == '')
                        {
                            $('#med5').val('-5');
                        }
                        if($('#med6').val() == '')
                        {
                            $('#med6').val('-6');
                        }
                        if($('#med7').val() == '')
                        {
                            $('#med7').val('-7');
                        }
                        if($('#med8').val() == '')
                        {
                            $('#med8').val('-8');
                        }
                        if($('#med9').val() == '')
                        {
                            $('#med9').val('-9');
                        }
                        if($('#med10').val() == '')
                        {
                            $('#med10').val('-10');
                        }
                        
                        
                       /** if($('#eat1').val() == '')
                        {
                            $('#eat1').val('-');
                        }
                        if($('#eat2').val() == '')
                        {
                            $('#eat2').val('-');
                        }
                        if($('#eat3').val() == '')
                        {
                            $('#eat3').val('-');
                        }
                        if($('#eat4').val() == '')
                        {
                            $('#eat4').val('-');
                        }
                        if($('#eat5').val() == '')
                        {
                            $('#eat5').val('-');
                        }
                        if($('#eat6').val() == '')
                        {
                            $('#eat6').val('-');
                        }
                        if($('#eat7').val() == '')
                        {
                            $('#eat7').val('-');
                        }
                        if($('#eat8').val() == '')
                        {
                            $('#eat8').val('-');
                        }
                        if($('#eat9').val() == '')
                        {
                            $('#eat9').val('-');
                        }
                        if($('#eat10').val() == '')
                        {
                            $('#eat10').val('-');
                        }**/
                                         $.ajax({

                                            type: "POST",
                                            url: "save3_vinich.php",
                                            data: 
                                            {                       
                                                //tAnalysis:$('#analysis').val(),
                                                tCheckbox1:c1,
                                                tCheckbox2:c2,
                                                tCheckbox3:c3,
                                                tCheckbox4:c4,
                                                tCheckbox5:c5,
                                                tInput_other:$('#input_other').val(),
                                                tDrName:$('#DrName').val(),
                                                tHospital1:$('#Hospital1').val(),
                                                tHospital2:$('#Hospital2').val(),
                                                tHospital3:$('#Hospital3').val(),
                                                tmed1: $('#med1').val(),
                                                tmed2: $('#med2').val(),
                                                tmed3: $('#med3').val(),
                                                tmed4: $('#med4').val(),
                                                tmed5: $('#med5').val(),
                                                tmed6: $('#med6').val(),
                                                tmed7: $('#med7').val(),
                                                tmed8: $('#med8').val(),
                                                tmed9: $('#med9').val(),
                                                tmed10: $('#med10').val(),
                                                teat1: $('#eat1').val(),
                                                teat2: $('#eat2').val(),
                                                teat3: $('#eat3').val(),
                                                teat4: $('#eat4').val(),
                                                teat5: $('#eat5').val(),
                                                teat6: $('#eat6').val(),
                                                teat7: $('#eat7').val(),
                                                teat8: $('#eat8').val(),
                                                teat9: $('#eat9').val(),
                                                teat10: $('#eat10').val(),
                                                tmed_history:$('#med_history').val(),
                                                tspec_food:$('#spec_food').val(),
                                                //tsmpai:$('#smpai').val(),
                                                tfamily_info:$('#family_info').val()

                                            }
                                          })
                                            .done(function( msg ) 
                                            {
                                              $("#menu5").height(60);
                                              $("#menu5").hide().html(msg).fadeToggle("slow");
                                              $("#menu5").slideUp();
                                              $("#menu6").fadeIn();
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
                              tfirst_rateDB:$('#first_rateDB').val(),
                              tbloodP:$('#bloodP').val()
                              
                          }
                        })
                          .done(function( msg ) 
                          {
                            $("#menu6").height(60);
                            $("#menu6").hide().html(msg).fadeToggle();
                            $("#menu6").slideUp();
                            $("#menu7").fadeToggle();
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
                              ttg:$('#Triglyceride').val(),
                              tCreatinine:$('#Creatinine').val(),
                              tBUN:$('#BUN').val(),
                              tHbA1C: $('#HbA1C').val()                               
                              
                          }
                        })
                          .done(function( msg ) 
                          {
                              
                            var p = $( "#menu7" );
                            var position = p.position();
                            $("#successPopUp").css({
                                    "position": "absolute",
                                    "top": position.top + 250,
                                    "left": position.left + 400
                              }); 
                              
                             
                             $("#successPopUp").slideDown("slow");
                             
                             $('#table7').fadeOut();
                             $('#lab_date').val('');
                             $('#fbs').val('');
                             $('#ldl').val('');
                             $('#hdl').val('');
                             $('#Cholesterol').val('');
                             $('#Triglyceride').val('');
                             $('#Creatinine').val('');
                             $('#BUN').val('');
                             $('#HbA1C').val('');
                             $('#table7').fadeIn();
                             $("#successPopUp").slideUp("slow");   
                    
                          });
                });
               });
               
               
               $(document).ready(function(){
                $("#finish1").click(function(){
                                         
                     $("#menu7").slideUp();                     
                     $("#menu8").fadeIn();        
                    
                });
               });
               
               /** save6 **/
               $(document).ready(function(){
                $("#save6").click(function(){  
                      $.ajax({
                          type: "POST",
                          url: "save6_spec.php",
                          data: 
                          { 
                              tdateC:$('#dateC').val(),
                              tnameC:$('#nameC').val(),
                              teye:$('#eye').val(),
                              tfoot:$('#foot').val(),
                              tsad:$('#sad').val(),
                              tpoint:$('#point').val()
                                                          
                          }
                        })
                          .done(function( msg ) 
                          {
                            $("#menu8").height(60);
                            $("#menu8").hide().html(msg).fadeIn(400,function(){$("#menu8").slideUp(500);});
                            //
                            //$("#menu8").slideUp(2000);
                            $("#menu9").fadeIn();
                          });
                    
                });
               });
               
               /** save7 **/
               $(document).ready(function(){
                $("#save7").click(function(){  
                      $.ajax({
                          type: "POST",
                          url: "save7_trainD.php",
                          data: 
                          { 
                              ttrianPoint:$('#trianPoint').val(),
                              tdateTrain:$('#dateTrain').val(),
                              tnameTrain:$('#nameTrain').val()
                                                         
                          }
                        })
                          .done(function( msg ) 
                          {
                            var p = $( "#menu9" );
                            var position = p.position();
                            $("#successPopUp").css({
                                    "position": "absolute",
                                    "top": position.top + 100,
                                    "left": position.left + 400
                              }); 
                              
                             
                             $("#successPopUp").html(msg).slideDown("slow");
                             
                             $('#table9').fadeOut();
                             $('#trianPoint').val('');
                             $('#dateTrain').val('');
                             $('#nameTrain').val('');
                             
                             $('#table9').fadeIn();
                             $("#successPopUp").slideUp("slow");  
                          });
                    
                });
               });
               
               $(document).ready(function(){
                $("#finish2").click(function(){
                    
                     $("#menu9").slideUp();                     
                     $("#menu10").fadeIn();                     
                     
                });
               });
               
               /** save8 **/
               $(document).ready(function(){
                $("#save8").click(function(){  
                      $.ajax({
                          type: "POST",
                          url: "save8_plan_d.php",
                          data: 
                          { 
                              tplanPoint:$('#planPoint').val(),
                              twayD:$('#wayD').val(),
                              tnamedd:$('#namedd').val(),
                              tmark:$('#mark').val()
                                                         
                          }
                        })
                          .done(function( msg ) 
                          {
                            var p = $( "#menu10" );
                            var position = p.position();
                            $("#successPopUp").css({
                                    "position": "absolute",
                                    "top": position.top + 150,
                                    "left": position.left + 400
                              }); 
                             
                             $("#successPopUp").html(msg).slideDown("slow");                             
                             $('#table10').fadeOut();
                             $('#wayD').val('');
                             $('#namedd').val('');
                             $('#mark').val('');
                             $('#planPoint').val('');
                             $('#table10').fadeIn();
                             $("#successPopUp").slideUp("slow");    
                          });
                    
                });
               });
               
               $(document).ready(function(){
                $("#finish3").click(function(){
                    $("#menu10").slideUp();                     
                    $("#menu11").fadeIn();  
                });
               });
               
               /** save9 **/
               $(document).ready(function(){
                $("#save9").click(function(){
                    
                    if ($("#c1").is(":checked"))
                        {
                            var cc1 = $("#input_c1").val();                        
                        }
                        else
                        {
                            var cc1 = 'f';
                        }
                        
                        if ($("#c2").is(":checked"))
                        {
                            var cc2 = $("#input_c1").val();;                        
                        }
                        else
                        {
                            var cc2 = 'f';
                        }
                        if ($("#c3").is(":checked"))
                        {
                            var cc3 = $("#input_c1").val();;                        
                        }
                        else
                        {
                            var cc3 = 'f';
                        }
                        
                        if( $("option#pd:selected").length )
                        {
                          var cc4 = $("#pdl").val();
                        }
                        else
                        {
                          var cc4 = "pp";
                        }
                        
                      $.ajax({
                          type: "POST",
                          url: "save9_visit_home.php",
                          data: 
                          { 
                              tvisit_order:$('#visit_order').val(),
                              n:cc1,
                              osm:cc2,
                              staff:cc3,
                              //tPvisit:$('#Pvisit').val(),
                              tPRvisit:cc4,
                              tenviFam:$('#enviFam').val()
                                                         
                          }
                        })
                          .done(function( msg ) 
                          {
                              
                              var p = $( "#menu11" );
                              var position = p.position();
                              $("#successPopUp").css({
                                    "position": "absolute",
                                    "top": position.top + 190,
                                    "left": position.left + 400
                              }); 
                              /**
                                $("#successPopUp").css({
                                    "position": "absolute",
                                    "top": $("#table11").offset().top - 80 + $("#table11").offset().top/2,
                                    "left": $("#table11").offset().left - 45 + $("#table11").offset().left/2
                              });
                              
                             
                             $("#successPopUp").html(msg).slideDown(1500);                             
                             $('#table11').fadeOut(1500);
                             $('#visit_order').val('');
                             $('#Pvisit').val('');
                             $('#PRvisit').val('');
                             $('#enviFam').val('');
                             $('#table11').fadeIn(1500);
                             $("#successPopUp").slideUp(1500);**/
                              $("#successPopUp").html(msg).slideDown("slow");
                              $("#successPopUp").slideUp("slow");
                              //$("#menu11").html(msg);
                              $('#visit_order').val('');
                              //$('#Pvisit').val('');
                             // $('#PRvisit').val('');
                              $('#enviFam').val('');
                             
                            $("#menu11").slideUp(2000);                     
                            $("#menu12").fadeIn();
                          });
                    
                });
               });
               
               $(document).ready(function(){
                $("#finish4").click(function(){
                    $("#menu11").slideUp();                     
                    $("#menu12").fadeIn();
                });
               });
               
               /** save10 **/
               $(document).ready(function(){
                $("#save10").click(function(){  
                      $.ajax({
                          type: "POST",
                          url: "save10_table_visit.php",
                          data: 
                          { 
                              ttakecarePoint:$('#takecarePoint').val(),
                              ttakecare:$('#takecare').val(),
                              tnamePD:$('#namePD').val(),
                              tnote2:$('#note2').val()
                                                         
                          }
                        })
                          .done(function( msg ) 
                          {
                            var p = $( "#menu12" );
                            var position = p.position();
                            $("#successPopUp").css({
                                    "position": "absolute",
                                    "top": position.top + 160,
                                    "left": position.left + 400
                              }); 
                             
                             $("#successPopUp").html(msg).slideDown("slow");                             
                             $('#table12').fadeOut();
                             $('#takecarePoint').val('');
                             $('#takecare').val('');
                             $('#namePD').val('');
                             $('#note2').val('');
                             $('#table12').fadeIn();
                             $("#successPopUp").slideUp("slow");  
                          });
                    
                });
               });
               
               $(document).ready(function(){
                $("#finish5").click(function(){
                    $("#menu12").slideUp();
                    $("#menu11").slideDown();
                    $("#menu13").fadeIn();
                    //$("#menu13").html("<label>บันทึกข้อมูลของผู้ป่วยรายนี้เสร็จสิ้นแล้ว</label>").fadeIn("slow");
                    //$("#menu13").fadeIn(2000);
                });
               });
               
               
               $(document).ready(function(){
                $("#finish6").click(function(){
                    $("#menu12").slideUp();
                    $("#menu11").slideUp();
                    $("#menu13").html("<label>บันทึกข้อมูลของผู้ป่วยรายนี้เสร็จสิ้นแล้ว</label>").fadeIn("slow");
                    
                    //$("#menu13").html("<label>บันทึกข้อมูลของผู้ป่วยรายนี้เสร็จสิ้นแล้ว</label>").fadeIn("slow");
                    //$("#menu13").fadeIn(2000);
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
                
                $(document).ready(function(){          
                 $("select#PRvisit").change(function () {
                        
                        if( $("option#pd:selected").length )
                        {
                          $("#pdl").slideDown("slow");
                        }
                        else
                        {
                          $("#pdl").slideUp("slow"); 
                                 
                        }
                  });
                });
                
                
                $(document).ready(function(){ 
                    $("input[type=checkbox]").change(function () {
                        if ($("#checkbox5").is(":checked"))
                        {
                            $("#input_other").slideDown();                            
                        }
                        else
                        {
                            $("#input_other").slideUp();
                        }
                    });
                });

                $(document).ready(function(){ 
                    
                    //$("#input_c1").prop('disabled', true);
                    
                    $("input[type=checkbox]").change(function () {
                        if ($("#c1").is(":checked"))
                        {
                            $("#input_c1").prop('disabled', false);                          
                        }
                        else
                        {
                            $("#input_c1").prop('disabled', true) 
                        }
                        
                        if ($("#c2").is(":checked"))
                        {
                            $("#input_c2").prop('disabled', false);                            
                        }
                        else
                        {
                            $("#input_c2").prop('disabled', true)
                        }
                        
                        if ($("#c3").is(":checked"))
                        {
                            $("#input_c3").prop('disabled', false);                            
                        }
                        else
                        {
                            $("#input_c3").prop('disabled', true)
                        }

                  });
                });

            $(document).ready(function()
            {
                var uploadObj = $("#advancedUpload").uploadFile({
                url:"./upload/upload_img.php",
                multiple:true,
                showStatusAfterSuccess:false,
                fileName:"myfile",
                allowedTypes:"jpeg,jpg,png,gif",
                onSuccess:function(files,data,xhr)
                {
                        //$("#eventsmessage").html($("#eventsmessage").html()+"<br/>Success for: "+JSON.stringify(data));
                        var str = data;
                        var n = str.lastIndexOf("{\"");
                        var n2 = str.indexOf("\":\"");                        
                        var n3 = str.substring(2,n2);
                        
                        var p = $( "#menu4-5" );
                              var position = p.position();
                              $("#successPopUp").css({
                                    "position": "absolute",
                                    "top": position.top + 30,
                                    "left": position.left + 400
                              }); 
                              
                              $("#successPopUp").text("อัพโหลดภาพสำเร็จ").fadeIn(900);
                              $("#successPopUp").fadeOut(900);

                },
                });
        
                
                $("#finishUp").click(function()
                {
                        $( "#menu4-5" ).slideUp();
                        $( "#menu5" ).slideDown();
                });
            
          });
                