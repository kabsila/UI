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
                            $("#menu4").hide().html(msg).fadeToggle();
                            $("#menu4").slideUp(1500);
                            $("#menu5").fadeToggle();
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
                                                tAnalysis:$('#analysis').val(),
                                                tInput_other:$('#input_other').val(),
                                                tDrName:$('#DrName').val(),
                                                tHospital1:$('#Hospital1').val(),
                                                tHospital2:$('#Hospital2').val(),
                                                tHospital3:$('#Hospital3').val(),
                                                tmed: $('#med').val(),                               
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
                              tCreatinine:$('#Creatinine').val(),
                              tBUN:$('#BUN').val(),
                              tHbA1C: $('#HbA1C').val()                               
                              
                          }
                        })
                          .done(function( msg ) 
                          {
                              
                            /**  $("#successPopUp").css({
                                    "position": "absolute",
                                    "top": $("#table7").offset().top + $("#table7").offset().top/2,
                                    "left": $("#table7").offset().left - 45 + $("#table7").offset().left/2
                              });**/
                              
                             
                             $("#successPopUp").slideDown();
                             
                             $('#table7').fadeOut();
                             $('#lab_date').val('');
                             $('#fbs').val('');
                             $('#ldl').val('');
                             $('#hdl').val('');
                             $('#Cholesterol').val('');
                             $('#Creatinine').val('');
                             $('#BUN').val('');
                             $('#HbA1C').val('');
                             $('#table7').fadeIn();
                             $("#successPopUp").slideUp();   
                    
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
                            $("#menu8").hide().html(msg).fadeIn(2000,function(){$("#menu8").slideUp(2000);});
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
                              /**
                            $("#successPopUp").css({
                                    "position": "absolute",
                                    "top": $("#table9").offset().top - 120 + $("#table9").offset().top/2,
                                    "left": $("#table9").offset().left - ($("#table9").offset().left - 550)/2
                              });**/
                              
                             
                             $("#successPopUp").html(msg).slideDown();
                             
                             $('#table9').fadeOut();
                             $('#trianPoint').val('');
                             $('#dateTrain').val('');
                             $('#nameTrain').val('');
                             
                             $('#table9').fadeIn();
                             $("#successPopUp").slideUp();  
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
                              /**
                            $("#successPopUp").css({
                                    "position": "absolute",
                                    "top": $("#table10").offset().top - 80 + $("#table10").offset().top/2,
                                    "left": $("#table10").offset().left - ($("#table10").offset().left - 550)/2//$("#table10").offset().left - 120 + $("#table10").offset().left/2
                              });**/
                              
                             
                             $("#successPopUp").html(msg).slideDown();                             
                             $('#table10').fadeOut();
                             $('#wayD').val('');
                             $('#namedd').val('');
                             $('#mark').val('');
                             $('#planPoint').val('');
                             $('#table10').fadeIn();
                             $("#successPopUp").slideUp();    
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
                      $.ajax({
                          type: "POST",
                          url: "save9_visit_home.php",
                          data: 
                          { 
                              tvisit_order:$('#visit_order').val(),
                              tPvisit:$('#Pvisit').val(),
                              tPRvisit:$('#PRvisit').val(),
                              tenviFam:$('#enviFam').val()
                                                         
                          }
                        })
                          .done(function( msg ) 
                          {/**
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
                              $('#visit_order').val('');
                              //$('#Pvisit').val('');
                             // $('#PRvisit').val('');
                              $('#enviFam').val('');
                            $("#menu11").slideUp();                     
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
                          {/**
                              $("#successPopUp").css({
                                    "position": "absolute",
                                    "top": $("#table12").offset().top - 120 + $("#table12").offset().top/2,
                                    "left": $("#table12").offset().left - ($("#table12").offset().left - 550)/2
                              });**/
                              
                             
                             $("#successPopUp").html(msg).slideDown();                             
                             $('#table12').fadeOut();
                             $('#takecarePoint').val('');
                             $('#takecare').val('');
                             $('#namePD').val('');
                             $('#note2').val('');
                             $('#table12').fadeIn();
                             $("#successPopUp").slideUp();  
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

                