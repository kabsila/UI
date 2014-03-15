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

                   $.extend( $.ui.autocomplete.prototype, {
                    _renderItem: function( ul, item ) {
                        var term = this.element.val(),
                            html = item.label.replace( term, "<b>$&</b>" );
                        return $( "<li></li>" )
                            .data( "item.autocomplete", item )
                            .append( $("<a></a>").html(html) )
                            .appendTo( ul );
                    }
                });  
                
                    $('#tags').autocomplete({
                          source:'./profile/find.php', 
                          minLength:1,
                          select: function( event, ui ) 
                          { 
                            showEdit(ui.item.id);
                            $("html,body").animate({scrollTop:$('#menu3').position().top}, 'slow'); 
                          },
                          
                      });
              
              
              
                    $('#tags2').autocomplete({
                          source:'./profile/findSurname.php', 
                          minLength:1,
                          select: function( event, ui ) 
                          { 
                            showEdit(ui.item.id);
                            $("html,body").animate({scrollTop:$('#menu3').position().top}, 'slow'); 
                          },
                          
                      });
              
              $('#listName3').on('click', '#finishUp', function() { 
                  $("#finishUp").fadeOut();
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
              });
              
              
              
             });
              
            
                    $(document).ready(function(){          
                    $("select#analysis").change(function () {
                        if( $("option#other:selected").length )
                        {
                          $("#input_other").slideDown();
                        }else
                        {
                          $("#input_other").slideUp(); 
                                 
                        }

                  });
                });
                
                 
                $(document).ready(function(){
                   
                });
                
               $(document).ready(function(){
                    $("#addP").click(function(){
                      $("#menu2").slideToggle();
                      $("#menu13").fadeOut();
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
                $("#listname").click(function(){                  
                  $.ajax({
                    type: "POST",
                    url: "./Gedit/listAllName.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        //tStatus: $('#sta').val(),
                       // tFname:$('#fname').val(),
                       //tSname:$('#sname').val()
                    }
                  })
                    .done(function( msg ) 
                    {  
                       $('#listName2').html(msg);
                       $('#listName2').slideDown();
                       //rightToLeft( '#listName2' );
                       $('#listName2').on('click', '.inlineTable label', function() {                           
                           showEdit(this.id); 
                           
                             
                        });
                        
                        $('#listName2').on('click', '.cursorName', function() {                            
                              $("html,body").animate({scrollTop:$('#listName3').position().top}, 'slow');                      
                        });
                        
                        $('#listName3').on('load', '#menu4-55', function() {                            
                                               
                        });
                        
                        $('#listName3').on('change', 'input[type=checkbox]', function() {                            
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
                  });
                 });
                 
                 
               function showEdit( gId ){                                
                  $.ajax({
                    type: "POST",
                    url: "./Gedit/showDataForEdit.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tID: gId
                    }
                  })
                    .done(function( msg ) 
                    {
                        
                        
                        $("#listName3").on('click', '#del', function() {
                            if(confirm("ต้องการลบข้อมูลของวันที่ " + $("#lab_date").val() + " หรือไม่"))
                            {
                                $.ajax({
                            type: "POST",
                            url: "./Gedit/deleteLabByDate.php",
                            dataType: "HTML",
                            cache: true,
                            data: 
                            { 
                                tId: gId,
                                str1: $("#lab_date").val(),                               

                            }
                          })
                            .done(function( msg ) 
                            {                            
                                    var p = $( "#menu7" );
                                    var position = p.position();
                                    $("#successPopUp2").css({
                                                  "position": "absolute",
                                                  "top": position.top + 100,
                                                  "left": position.left + 400
                                            }); 
                                    //$("#menu9").html(msg);
                                    //$("#menu9").slideUp(2000);บันทึกการแก้ไขแล้ว
                                    $("#successPopUp2").html(msg).fadeIn("slow");
                                    $("#successPopUp2").fadeOut("slow");
                             });
                            }else
                            {
                                
                            }
                            

                        });
                    
                        $("#listName3").on('keypress', 'input[type=text].list_ya', function() {
                            
                            $.extend($.ui.autocomplete.prototype, {
                                _renderItem: function(ul, item) {
                                    var term = this.element.val(),
                                            html = item.label.replace(term, "<b>$&</b>");
                                    return $("<li></li>")
                                            .data("item.autocomplete", item)
                                            .append($("<a></a>").html(html))
                                            .appendTo(ul);
                                }
                            });
                            
                               $('.list_ya').autocomplete({
                                source: './Gedit/findYa.php',
                                minLength: 1,
                                select: function(event, ui)
                                {
                                    
                                },
                            });
                  
                             
                    });
                    
                    $("#listName3").on('keypress', 'input[type=text].Hospital', function() {
                            
                            $.extend($.ui.autocomplete.prototype, {
                                _renderItem: function(ul, item) {
                                    var term = this.element.val(),
                                            html = item.label.replace(term, "<b>$&</b>");
                                    return $("<li></li>")
                                            .data("item.autocomplete", item)
                                            .append($("<a></a>").html(html))
                                            .appendTo(ul);
                                }
                            });
                           
                    
                    $('.Hospital').autocomplete({
                          source:'./Gedit/findHospital.php', 
                          minLength:1,
                          select: function( event, ui ) 
                          { 
                            
                          },
                          
                      });
                    
                             
                    });
                    
                    
                    $("#listName3").on('keypress', 'input[type=text]#nameTrain', function() {
                            
                            $.extend($.ui.autocomplete.prototype, {
                                _renderItem: function(ul, item) {
                                    var term = this.element.val(),
                                            html = item.label.replace(term, "<b>$&</b>");
                                    return $("<li></li>")
                                            .data("item.autocomplete", item)
                                            .append($("<a></a>").html(html))
                                            .appendTo(ul);
                                }
                            });
                            
                                $('#nameTrain').autocomplete({
                                source: './Gedit/findTrain.php',
                                minLength: 0,                                
                                select: function(event, ui)
                                {
                                    
                                },
                            });
                    
                             
                    });
                    
                    $("#listName3").on('keypress', 'input[type=text]#namedd', function() {
                            
                            $.extend($.ui.autocomplete.prototype, {
                                _renderItem: function(ul, item) {
                                    var term = this.element.val(),
                                            html = item.label.replace(term, "<b>$&</b>");
                                    return $("<li></li>")
                                            .data("item.autocomplete", item)
                                            .append($("<a></a>").html(html))
                                            .appendTo(ul);
                                }
                            });
                            
                                $('#namedd').autocomplete({
                                source: './Gedit/findTrain.php',
                                minLength: 0,                                
                                select: function(event, ui)
                                {
                                    
                                },
                            });
                    
                             
                    });
                    
                     $("#listName3").on('keypress', 'input[type=text]#namePD', function() {
                            
                            $.extend($.ui.autocomplete.prototype, {
                                _renderItem: function(ul, item) {
                                    var term = this.element.val(),
                                            html = item.label.replace(term, "<b>$&</b>");
                                    return $("<li></li>")
                                            .data("item.autocomplete", item)
                                            .append($("<a></a>").html(html))
                                            .appendTo(ul);
                                }
                            });
                            
                                $('#namePD').autocomplete({
                                source: './Gedit/findTrain.php',
                                minLength: 0,                                
                                select: function(event, ui)
                                {
                                    
                                },
                            });
                    
                             
                    });
                        
                      $( "#listName3" ).on('mouseover', '#menu4', function() { 
                           $( ".datepicker" ).datepicker({changeMonth: true,changeYear: true});
                           $( ".datepicker" ).datepicker($.datepicker.regional[ "th" ] );                           
                        });
                        
                      $( "#listName3" ).on('load', '#menu4-5', function() {
                          $('img.fancybox').imgscale({ 
                            parent : '.non-immediate-parent-container', 
                            fade : 1000 
                          });
                           $(".fancybox").fancybox({
                                'transitionIn'	:	'elastic',
                                'transitionOut'	:	'elastic',
                                'speedIn'	:	600, 
                                'speedOut'	:	200, 
                                'overlayShow'	:	false
                            });
                            
                        });
                      
                        
                      $( "#listName3" ).on('change', 'select#analysis', function() {                 
                                if ($("option#other:selected").length)
                                    {
                                        $("#input_other").slideDown();
                                    } 
                                    else
                                    {
                                        $("#input_other").slideUp();

                                    }                          
                        });
                       
                      
                        
                      $("#listName3").html(msg).fadeIn("slow");
                      $("#menu3").fadeIn();
                      $("#menu4").fadeIn();
                      $("#menu4-5").fadeIn();
                      $("#menu5").fadeIn();
                      $("#menu6").fadeIn();
                      $("#menu7").fadeIn();
                      $("#menu8").fadeIn();
                      $("#menu9").fadeIn();
                      $("#menu10").fadeIn();
                      $("#menu11").fadeIn();
                      $("#menu12").fadeIn();                      
                      
                       $('.pagination#page1').jqPagination({                        
                           max_page	: 6,                          
                           paged: function(page) {
                             
                                $('.slideData').fadeToggle();
                                $('.slideData').val("");
                                $('.slideData').fadeToggle();
                                getValue(gId,page);
                                   
                           }
                       });
                       
                       $('.pagination#page2').jqPagination({                        
                           max_page	: 7,                          
                           paged: function(page) {
                             
                                $('.slide2').fadeToggle();
                                $('.slide2').val("");
                                $('.slide2').fadeToggle();
                                getValue2(gId,page);
                                   
                           }
                       });
                       
                       $('.pagination#page3').jqPagination({                        
                           max_page	: 7,                          
                           paged: function(page) {
                             
                                $('.slide3').fadeToggle();
                                $('.slide3').val("");
                                $('.slide3').fadeToggle();
                                getValue3(gId,page);
                                   
                           }
                       });
                       
                       $('.pagination#page4').jqPagination({                        
                           max_page	: 3,                          
                           paged: function(page) {
                             
                                $('.slide4').fadeToggle();
                                $('.slide4').val("");
                                $('.slide4').fadeToggle();
                                getValue4(gId,page);
                                   
                           }
                       });                       
                       
                       $('.pagination#page5').jqPagination({                        
                           max_page	: 3,                          
                           paged: function(page) {
                             
                                $('.slide5').fadeToggle();
                                $('.slide5').val("");
                                $('.slide5').fadeToggle();
                                //$('.pagination#page6').fadeOut();
                                //$('.pagination#page6').jqPagination('current_page',1);
                                getValue5(gId,page);
                                kpage = page;
                                
                                $('.pagination#page6').jqPagination('option', 'current_page', 1)
                           }
                       });
                      
                       $('.pagination#page6').jqPagination({                               
                                max_page	: 7,                          
                                paged: function(page) {                             
                                //$('.slide5').fadeToggle();
                                $('.slide5').val("");
                               // $('.slide5').fadeToggle();
                                getValue6(gId,kpage,page);
                                
                           }
                       });
                       
                                           
                       $( "#listName3" ).on('click', '#save1', function() {                 
                           save1_Edit(gId);                           
                        });
                        $( "#listName3" ).on('click', '#save2', function() {                 
                           save2_Edit(gId);                           
                        });
                         $( "#listName3" ).on('click', '#save3', function() {                 
                           save3_Edit(gId);                           
                        });
                         $( "#listName3" ).on('click', '#save4', function() {                 
                           save4_Edit(gId);                           
                        });
                         $( "#listName3" ).on('click', '#save5', function() {                 
                           save5_Edit(gId);                           
                        });
                        $( "#listName3" ).on('click', '#save5-insert', function() {                 
                           save5_insert(gId);                           
                        });
                         $( "#listName3" ).on('click', '#save6', function() {                 
                           save6_Edit(gId);                           
                        });
                         $( "#listName3" ).on('click', '#save7', function() {                 
                           save7_Edit(gId);                           
                        });
                        $( "#listName3" ).on('click', '#save7-insert', function() {                 
                           save7_insert(gId);                           
                        });
                         $( "#listName3" ).on('click', '#save8', function() {                 
                           save8_Edit(gId);                           
                        });
                        $( "#listName3" ).on('click', '#save8-insert', function() {                 
                           save8_insert(gId);                           
                        });
                         $( "#listName3" ).on('click', '#save9', function() {                 
                           save9_Edit(gId);                           
                        });
                         $( "#listName3" ).on('click', '#save10', function() {                 
                           save10_Edit(gId);                           
                        });
                                                
                        
                        $( "#listName3" ).on('click', '#finish1', function() {                 
                           $( "#menu7" ).slideUp();                          
                        });
                        
                        $( "#listName3" ).on('click', '#finish2', function() {                 
                           $( "#menu9" ).slideUp();                          
                        });
                        
                        $( "#listName3" ).on('click', '#finish3', function() {                 
                           $( "#menu10" ).slideUp();                          
                        });
                        
                        $( "#listName3" ).on('click', '#finish4', function() {                 
                           $( "#menu11" ).slideUp();                          
                        });
                        
                        $( "#listName3" ).on('click', '#finish5', function() {                 
                           $( "#menu12" ).slideUp();                          
                        });
                        
                        $(document).ready(function(){
                            getFirst(gId);
                            getFirst2(gId);
                            getFirst3(gId);
                            getFirst4(gId);
                            getFirst5(gId);
                            
                        });
                        
                        
                        $( "#listName3" ).on('change', 'input[type=checkbox]', function() {                 
                                 if ($("#c1").is(":checked"))
                                 {
                                     $("#input_c1").prop('disabled', false);                          
                                 }
                                 else
                                 {
                                     $("#input_c1").val('');
                                     $("#input_c1").prop('disabled', true) 
                                 }

                                 if ($("#c2").is(":checked"))
                                 {
                                     $("#input_c2").prop('disabled', false);                            
                                 }
                                 else
                                 {
                                     $("#input_c2").val('');
                                     $("#input_c2").prop('disabled', true)
                                 }

                                 if ($("#c3").is(":checked"))
                                 {
                                     $("#input_c3").prop('disabled', false);                            
                                 }
                                 else
                                 {
                                     $("#input_c3").val('');
                                     $("#input_c3").prop('disabled', true)
                                 }                          
                        });
                        
                        $( "#listName3" ).on('change', 'select#PRvisit', function() { 
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
                  
              }
       
       
             var kpage = 1;   
             function  getFirst(gId)
             {
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/getValue.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId                       
                       
                    }
                  })
                    .done(function( msg ) 
                    {
                       
                      var str1;
                      
                      var mys = msg;
                      str1 = mys.split('textForSplit');
                    
                          $("#date_id").text(str1[0]);
                          $("#lab_date").val(str1[1]); //8 , 16 ,24
                          $("#fbs").val(str1[2]);
                          $("#ldl").val(str1[3]);
                          $("#hdl").val(str1[4]);
                          $("#Cholesterol").val(str1[5]);
                          $("#Triglyceride").val(str1[6]);
                          $("#Creatinine").val(str1[7]);
                          $("#BUN").val(str1[8]);
                          $("#HbA1C").val(str1[9]); 
                     
                    
                    });
             }
             
             function  getFirst2(gId)
             {
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/getValueTrainD.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId                       
                       
                    }
                  })
                    .done(function( msg ) 
                    {
                       
                      var str1;
                      
                      var mys = msg;
                      str1 = mys.split('textForSplit');
                    
                          $("#date_id2").text(str1[0]);
                          $("#trianPoint").val(str1[1]); 
                          $("#dateTrain").val(str1[2]);
                          $("#nameTrain").val(str1[3]); 
                     
                    
                    });
             }
             
             function  getFirst3(gId)
             {
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/getValuePlanD.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId                       
                       
                    }
                  })
                    .done(function( msg ) 
                    {
                       
                      var str1;
                      
                      var mys = msg;
                      str1 = mys.split('textForSplit');
                    
                          $("#orderPlanD").text(str1[0]); 
                          $("#planPoint").val(str1[1]); 
                          $("#wayD").val(str1[2]);
                          $("#namedd").val(str1[3]); 
                          $("#mark").val(str1[4]);
                     
                    
                    });
             }
             
             function  getFirst4(gId)
             {
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/getValueVisitHome.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId                       
                       
                    }
                  })
                    .done(function( msg ) 
                    {
                       
                      var str1;
                      
                      var mys = msg;
                      str1 = mys.split('textForSplit');
                      
                      if(str1[1] == "f")
                      {
                          str1[1] = '';
                          $("#input_c1").prop('disabled',true);
                      }
                      else
                      {
                          $('#c1').prop('checked', true);
                          $("#input_c1").prop('disabled',false);
                      }
                      
                      if(str1[2] == "f")
                      {
                          str1[2] = '';
                          $("#input_c2").prop('disabled',true);
                      }
                      else
                      {
                          $('#c2').prop('checked', true);
                          $("#input_c2").prop('disabled',false);
                      }
                      
                      if(str1[3] == "f")
                      {
                          str1[3] = '';
                          $("#input_c3").prop('disabled',true);
                      }
                      else
                      {
                          $('#c3').prop('checked', true);
                          $("#input_c3").prop('disabled',false);
                      }
                      
                      if(str1[4] == "pp")
                      {
                          $("#PRvisit").val("pp");
                          $("#pdl").fadeOut();
                      }
                      else
                      {
                          $("#PRvisit").val("pd");
                          $("#pdl").fadeIn().val(str1[4]);
                      }
                      
                          $("#visit_order").text(str1[0]); 
                          $("#input_c1").val(str1[1]);
                          $("#input_c2").val(str1[2]);
                          $("#input_c3").val(str1[3]);
                         // $("#PRvisit").val(str1[4]); 
                          $("#enviFam").val(str1[5]);
                     
                    
                    });
             }
             
             function  getFirst5(gId)
             {
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/getValueVisitTable.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId ,
                        tpage: 1
                       
                    }
                  })
                    .done(function( msg ) 
                    {
                      
                      var str1;
                      
                      var mys = msg;
                      str1 = mys.split('textForSplit');
                    
                            
                          $('#idTable').text(str1[0]);
                          $("#visit_order_table").text(1); 
                          $("#takecarePoint").val(str1[2]);
                          $("#takecare").val(str1[3]); 
                          $("#namePD").val(str1[4]);
                          $("#note2").val(str1[5]);
                         
                    });
                    
                    
                    
                   
             }
            
             var index = 0;
             
             function getValue(gId,page)
             {
                 $.ajax({
                    type: "POST",
                    url: "./Gedit/getValue.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId                       
                       
                    }
                  })
                    .done(function( msg ) 
                    {
                       
                      var str1;
                      
                      var mys = msg;
                      str1 = mys.split('textForSplit');
                    
                    if(page == 1){
                        index = 0;
                    }else if(page == 2){
                        index = 10;
                    }else if(page == 3){
                        index = 20;
                    }else if(page == 4){
                        index = 30;
                    }else if(page == 5){
                        index = 40;
                    }else if(page == 6){
                        index = 50;
                    }
                    
                          $("#date_id").text(str1[0+index]);
                          $("#lab_date").val(str1[1+index]); //8 , 16 ,24
                          $("#fbs").val(str1[2+index]);
                          $("#ldl").val(str1[3+index]);
                          $("#hdl").val(str1[4+index]);
                          $("#Cholesterol").val(str1[5+index]);
                          $("#Triglyceride").val(str1[6+index]);
                          $("#Creatinine").val(str1[7+index]);
                          $("#BUN").val(str1[8+index]);
                          $("#HbA1C").val(str1[9+index]); 
                          
                           if ($("#lab_date").val() == '' && $("#Cholesterol").val() == '' && $("#HbA1C").val() == '') 
                           {
                                $("#save5").attr('id', 'save5-insert');
                           } 
                           else 
                           {
                                $("#save5-insert").attr('id', 'save5');
                           }
                       
                    });
                    
                   
                    index = 0;
             }
              
              var index2 = 0;
              function getValue2(gId,page)
             {
                 $.ajax({
                    type: "POST",
                    url: "./Gedit/getValueTrainD.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId                       
                       
                    }
                  })
                    .done(function( msg ) 
                    {
                      
                      var str1;
                      
                      var mys = msg;
                      str1 = mys.split('textForSplit');
                    
                    if(page == 1){
                        index2 = 0;
                    }else if(page == 2){
                        index2 = 4;
                    }else if(page == 3){
                        index2 = 8;
                    }else if(page == 4){
                        index2 = 12;
                    }else if(page == 5){
                        index2 = 16;
                    }else if(page == 6){
                        index2 = 20;
                    }else if(page == 7){
                        index2 = 24;
                    }
                    
                          $("#date_id2").text(str1[0+index2]);
                          $("#trianPoint").val(str1[1+index2]); 
                          $("#dateTrain").val(str1[2+index2]);
                          $("#nameTrain").val(str1[3+index2]);                          
                          
                           if ($("#trianPoint").val() == '' && $("#dateTrain").val() == '' && $("#nameTrain").val() == '') 
                           {
                                $("#save7").attr('id', 'save7-insert');
                           } 
                           else 
                           {
                                $("#save7-insert").attr('id', 'save7');
                           }
                        
                    });
                    
                    index2 = 0;
             }
             
              var index3 = 0;
              function getValue3(gId,page)
             {
                 $.ajax({
                    type: "POST",
                    url: "./Gedit/getValuePlanD.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId                       
                       
                    }
                  })
                    .done(function( msg ) 
                    {
                      
                      var str1;
                      
                      var mys = msg;
                      str1 = mys.split('textForSplit');
                    
                    if(page == 1){
                        index3 = 0;
                    }else if(page == 2){
                        index3 = 5;
                    }else if(page == 3){
                        index3 = 10;
                    }else if(page == 4){
                        index3 = 15;
                    }else if(page == 5){
                        index3 = 20;
                    }else if(page == 6){
                        index3 = 25;
                    }else if(page == 7){
                        index3 = 30;
                    }
                    
                          $("#orderPlanD").text(str1[0+index3]); 
                          $("#planPoint").val(str1[1+index3]); 
                          $("#wayD").val(str1[2+index3]);
                          $("#namedd").val(str1[3+index3]); 
                          $("#mark").val(str1[4+index3]);
                         
                         if ($("#planPoint").val() == '' && $("#wayD").val() == '' && $("#namedd").val() == '') 
                           {
                                $("#save8").attr('id', 'save8-insert');
                           } 
                           else 
                           {
                                $("#save8-insert").attr('id', 'save8');
                           }
                    });
                    
                    index3 = 0;
             }
             
             var index4 = 0;
              function getValue4(gId,page)
             {
                 $.ajax({
                    type: "POST",
                    url: "./Gedit/getValueVisitHome.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId                       
                       
                    }
                  })
                    .done(function( msg ) 
                    {
                      
                      var str1;
                      
                      var mys = msg;
                      str1 = mys.split('textForSplit');
                    
                    if(page == 1){
                        index4 = 0;
                    }else if(page == 2){
                        index4 = 6;
                    }else if(page == 3){
                        index4 = 12;
                    }
                    
                    if(str1[1+index4] == "f")
                      {
                          str1[1+index4] = '';
                          $("#input_c1").prop('disabled',true);
                          $('#c1').prop('checked', false);
                      }
                      else
                      {
                          $('#c1').prop('checked', true);
                          $("#input_c1").prop('disabled',false);
                      }
                      
                      if(str1[2+index4] == "f")
                      {
                          str1[2+index4] = '';
                          $("#input_c2").prop('disabled',true);
                          $('#c2').prop('checked', false);
                      }
                      else
                      {
                          $('#c2').prop('checked', true);
                          $("#input_c2").prop('disabled',false);
                      }
                      
                      if(str1[3+index4] == "f")
                      {
                          str1[3+index4] = '';
                          $("#input_c3").prop('disabled',true);
                          $('#c3').prop('checked', false);
                      }
                      else
                      {
                          $('#c3').prop('checked', true);
                          $("#input_c3").prop('disabled',false);
                      }
                      
                      if(str1[4+index4] == "pp")
                      {
                          $("#PRvisit").val("pp");
                          $("#pdl").fadeOut();
                      }
                      else
                      {
                          $("#PRvisit").val("pd");
                          $("#pdl").fadeIn().val(str1[4+index4]);
                      }
                    
                          $("#visit_order").text(str1[0+index4]); 
                          $("#input_c1").val(str1[1+index4]);
                          $("#input_c2").val(str1[2+index4]);
                          $("#input_c3").val(str1[3+index4]);
                          //$("#PRvisit").val(str1[4+index4]); 
                          $("#enviFam").val(str1[5+index4]);
                         
                    });
                    
                    index4 = 0;
             }
                   
                
                var index5 = 0;
              function getValue5(gId,page)
             {
                 $.ajax({
                    type: "POST",
                    url: "./Gedit/getValueVisitTable.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId ,
                        tpage: page
                       
                    }
                  })
                    .done(function( msg ) 
                    {
                      
                      var str1;
                      
                      var mys = msg;
                      str1 = mys.split('textForSplit');
                    
                    if(page == 1){
                        index5 = 0;
                    }else if(page == 2){
                        index5 = 4;
                    }else if(page == 3){
                        index5 = 8;
                    }
                    
                          $("#idTable").text(str1[0]);
                          $("#visit_order_table").text(page); 
                          $("#takecarePoint").val(str1[2]);
                          $("#takecare").val(str1[3]); 
                          $("#namePD").val(str1[4]);
                          $("#note2").val(str1[5]);
                         
                    });
                    
                    index5 = 0;
             }
             
              var index6 = 0;
              function getValue6(gId,kpage,page)
             {
                 $.ajax({
                    type: "POST",
                    url: "./Gedit/getValueVisitTable2.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId ,
                        tpage: kpage
                       
                    }
                  })
                    .done(function( msg ) 
                    {
                     
                      var str1;
                      
                      var mys = msg;
                      str1 = mys.split('textForSplit');
                    
                    if(page == 1){
                        index6 = 0;
                    }else if(page == 2){
                        index6 = 5;
                    }else if(page == 3){
                        index6 = 10;
                    }else if(page == 4){
                        index6 = 15;
                    }else if(page == 5){
                        index6 = 20;
                    }else if(page == 6){
                        index6 = 25;
                    }else if(page == 7){
                        index6 = 30;
                    }
                    
                          $("#idTable").text(str1[0]);
                          $("#takecarePoint").val(str1[1+index6]);
                          $("#takecare").val(str1[2+index6]); 
                          $("#namePD").val(str1[3+index6]);
                          $("#note2").val(str1[4+index6]);
                         
                    });
                    
                    index6 = 0;
             }
          // $(function() {
		//$( ".datepicker" ).datepicker($.datepicker.regional[ "th" ] );
		
               // });
               
               
               function save1_Edit(gId)
             {
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/save1_edit.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId,
                        tName:$('#namep').val(),
                        tSname:$('#snamep').val(),
                        tAge:$('#age').val(),                        
                        tNameD:$('#named').val(),
                        tSnameD:$('#snamed').val(),
                        tWithD:$('#with').val()
                       
                    }
                  })
                    .done(function( msg ) 
                    {
                      $("#menu3").html(msg)
                      $("#menu3").slideUp(2000);                    
                       
                    });
             }
             
             function save2_Edit(gId)
             {
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/save2_edit.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId,
                        t1:$('#AddNum').val(),
                        t2:$('#Road').val(),
                        t3:$('#Tumbol').val(),                        
                        t4:$('#Aumphor').val(),
                        t5:$('#City').val(),
                        t6:$('#Zipcode').val(),
                        t7:$('#Latitude').val(),
                        t8:$('#Longitude').val(),
                        t9:$('#DateAcc').val()
                       
                    }
                  })
                    .done(function( msg ) 
                    {
                      $("#menu4").html(msg)
                      $("#menu4").slideUp(2000);                    
                       
                    });
             }
             
             function save3_Edit(gId)
             {
                 
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
                        
                   
                   
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/save3_edit.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId,
                       // t1:$('#analysis').val(),
                        tCheckbox1:c1,
                        tCheckbox2:c2,
                        tCheckbox3:c3,
                        tCheckbox4:c4,
                        tCheckbox5:c5,
                        t2:$('#input_other').val(),
                        t3:$('#DrName').val(),                        
                        t4:$('#Hospital1').val(),
                        t5:$('#Hospital2').val(),
                        t6:$('#Hospital3').val(),
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
                                                tlm1: $('#lm1').text(),
                                                tlm2: $('#lm2').text(),
                                                tlm3: $('#lm3').text(),
                                                tlm4: $('#lm4').text(),
                                                tlm5: $('#lm5').text(),
                                                tlm6: $('#lm6').text(),
                                                tlm7: $('#lm7').text(),
                                                tlm8: $('#lm8').text(),
                                                tlm9: $('#lm9').text(),
                                                tlm10: $('#lm10').text(),
                                                
                        t8:$('#med_history').val(),
                        t9:$('#spec_food').val(),
                        t10:$('#family_info').val()
                    }
                  })
                    .done(function( msg ) 
                    {
                      $("#menu5").html(msg);
                      //$("#menu5").slideUp(2000);                    
                       
                    });
             }
             
             function save4_Edit(gId)
             {
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/save4_edit.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId,
                        t1:$('#first_rateDB').val(),
                        t2:$('#bloodP').val()
                        
                    }
                  })
                    .done(function( msg ) 
                    {
                      $("#menu6").html(msg)
                      $("#menu6").slideUp(2000);                    
                       
                    });
             }
        
             function save5_Edit(gId)
             {
                
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/save5_edit.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId,
                        t0:$('#date_id').text(),
                        t1:$('#lab_date').val(),
                        t2:$('#fbs').val(),
                        t3:$('#ldl').val(),                        
                        t4:$('#hdl').val(),
                        t5:$('#Cholesterol').val(),
                        t6:$('#Creatinine').val(),
                        t7:$('#BUN').val(),
                        t8:$('#HbA1C').val(),
                        t9:$('#Triglyceride').val()
                    }
                  })
                    .done(function( msg ) 
                    {
                      
                      var p = $( "#menu7" );
                      var position = p.position();
                      $("#successPopUp2").css({
                                    "position": "absolute",
                                    "top": position.top + 250,
                                    "left": position.left + 400
                              }); 
                       
                      //$("#menu7").html(msg)
                      $("#successPopUp2").fadeIn("slow");
                      $("#successPopUp2").fadeOut("slow");
                      //$("#menu4").slideUp(2000);                    
                       
                    });
             }
             
             function save5_insert(gId)
             {
                 $.ajax({
                    type: "POST",
                    url: "./Gedit/save5_insert.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId,
                        //t0:$('#date_id').text(),
                        t1:$('#lab_date').val(),
                        t2:$('#fbs').val(),
                        t3:$('#ldl').val(),                        
                        t4:$('#hdl').val(),
                        t5:$('#Cholesterol').val(),
                        t6:$('#Creatinine').val(),
                        t7:$('#BUN').val(),
                        t8:$('#HbA1C').val(),
                        t9:$('#Triglyceride').val()
                    }
                  })
                    .done(function( msg ) 
                    {
                      
                      var p = $( "#menu7" );
                      var position = p.position();
                      $("#successPopUp2").css({
                                    "position": "absolute",
                                    "top": position.top + 250,
                                    "left": position.left + 400
                              }); 
                       
                      //$("#menu7").html(msg)
                      $("#successPopUp2").fadeIn("slow");
                      $("#successPopUp2").fadeOut("slow");
                      //$("#menu4").slideUp(2000);                    
                       
                    });
             }
             
             function save6_Edit(gId)
             {
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/save6_edit.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId,
                        t1:$('#dateC').val(),
                        t2:$('#nameC').val(),
                        t3:$('#eye').val(),                        
                        t4:$('#foot').val(),
                        t5:$('#sad').val(),
                        t6:$('#point').val(),
                        
                    }
                  })
                    .done(function( msg ) 
                    {
                      $("#menu8").html(msg);
                      $("#menu8").slideUp(2000);                    
                       
                    });
             }
            
             function save7_Edit(gId)
             {
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/save7_edit.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId,
                        t0:$('#date_id2').text(),
                        t1:$('#trianPoint').val(),
                        t2:$('#dateTrain').val(),
                        t3:$('#nameTrain').val(),                        
                    }
                  })
                    .done(function( msg ) 
                    {
                      var p = $( "#menu9" );
                      var position = p.position();
                      $("#successPopUp2").css({
                                    "position": "absolute",
                                    "top": position.top + 100,
                                    "left": position.left + 400
                              }); 
                      //$("#menu9").html(msg);
                      //$("#menu9").slideUp(2000);บันทึกการแก้ไขแล้ว
                      $("#successPopUp2").fadeIn("slow");
                      $("#successPopUp2").fadeOut("slow");
                       
                    });
             }
             
             function save7_insert(gId)
             {
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/save7_insert.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId,                        
                        t1:$('#trianPoint').val(),
                        t2:$('#dateTrain').val(),
                        t3:$('#nameTrain').val(),                        
                    }
                  })
                    .done(function( msg ) 
                    {
                      var p = $( "#menu9" );
                      var position = p.position();
                      $("#successPopUp2").css({
                                    "position": "absolute",
                                    "top": position.top + 100,
                                    "left": position.left + 400
                              }); 
                      //$("#menu9").html(msg);
                      //$("#menu9").slideUp(2000);บันทึกการแก้ไขแล้ว
                      $("#successPopUp2").fadeIn("slow");
                      $("#successPopUp2").fadeOut("slow");
                       
                    });
             }
             
             function save8_Edit(gId)
             {
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/save8_edit.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId,
                        t1:$('#orderPlanD').text(),
                        t2:$('#planPoint').val(),
                        t3:$('#wayD').val(),
                        t4:$('#namedd').val(), 
                        t5:$('#mark').val()                       
                    }
                  })
                    .done(function( msg ) 
                    {
                      //$("#menu10").html(msg);
                      //$("#menu10").slideUp(2000);บันทึกการแก้ไขแล้ว
                      
                      var p = $( "#menu10" );
                      var position = p.position();
                      $("#successPopUp2").css({
                                    "position": "absolute",
                                    "top": position.top + 150,
                                    "left": position.left + 400
                              }); 
                      $("#successPopUp2").fadeIn("slow");
                      $("#successPopUp2").fadeOut("slow");
                       
                    });
             }
             
             function save8_insert(gId)
             {
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/save8_insert.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId,
                        t1:$('#orderPlanD').text(),
                        t2:$('#planPoint').val(),
                        t3:$('#wayD').val(),
                        t4:$('#namedd').val(), 
                        t5:$('#mark').val()                       
                    }
                  })
                    .done(function( msg ) 
                    {
                      //$("#menu10").html(msg);
                      //$("#menu10").slideUp(2000);บันทึกการแก้ไขแล้ว
                      
                      var p = $( "#menu10" );
                      var position = p.position();
                      $("#successPopUp2").css({
                                    "position": "absolute",
                                    "top": position.top + 150,
                                    "left": position.left + 400
                              }); 
                      $("#successPopUp2").fadeIn("slow");
                      $("#successPopUp2").fadeOut("slow");
                       
                    });
             }
             
             function save9_Edit(gId)
             {
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/save9_edit.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId,
                        t1:$('#visit_order').text(),
                        n:$('#input_c1').val(),
                        osm:$('#input_c2').val(),
                        staff:$('#input_c3').val(),
                        input_pd:$('#pdl').val(),
                        t3:$('#PRvisit').val(),
                        t4:$('#enviFam').val()
                                             
                    }
                  })
                    .done(function( msg ) 
                    {
                      //$("#menu11").html(msg);
                      //$("#menu11").slideUp(2000);บันทึกการแก้ไขแล้ว
                      
                      var p = $( "#menu11" );
                      var position = p.position();
                      $("#successPopUp2").css({
                                    "position": "absolute",
                                    "top": position.top + 190,
                                    "left": position.left + 400
                              });
                      $("#successPopUp2").fadeIn("slow");
                      $("#successPopUp2").fadeOut("slow");
                       
                    });
             }
             
             function save10_Edit(gId)
             {
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/save10_edit.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId,
                        t1:$('#idTable').text(),
                        t2:$('#visit_order_table').text(),
                        t3:$('#takecarePoint').val(),
                        t4:$('#takecare').val(),
                        t5:$('#namePD').val(),
                        t6:$('#note2').val()
                                             
                    }
                  })
                    .done(function( msg ) 
                    {
                      //$("#menu12").html(msg);
                      //$("#menu12").slideUp(2000);บันทึกการแก้ไขแล้ว
                      
                       var p = $( "#menu12" );
                      var position = p.position();
                      $("#successPopUp2").css({
                                    "position": "absolute",
                                    "top": position.top + 160,
                                    "left": position.left + 400
                              });
                      $("#successPopUp2").fadeIn("slow");
                      $("#successPopUp2").fadeOut("slow");
                       
                    });
             }