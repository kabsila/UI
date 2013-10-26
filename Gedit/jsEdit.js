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
                        
                       // $("#listname").click(function(){
                        //    $('#listName2').slideToggle();
                       // });
                        
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
                      $( "#listName3" ).on('mouseover', '#menu4', function() {                 
                           $( ".datepicker" ).datepicker($.datepicker.regional[ "th" ] );                           
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
                         $( "#listName3" ).on('click', '#save6', function() {                 
                           save6_Edit(gId);                           
                        });
                         $( "#listName3" ).on('click', '#save7', function() {                 
                           save7_Edit(gId);                           
                        });
                         $( "#listName3" ).on('click', '#save8', function() {                 
                           save8_Edit(gId);                           
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
                      str1 = mys.split(' ');
                    
                          $("#lab_date").val(str1[0]); //8 , 16 ,24
                          $("#fbs").val(str1[1]);
                          $("#ldl").val(str1[2]);
                          $("#hdl").val(str1[3]);
                          $("#Cholesterol").val(str1[4]);
                          $("#Creatinine").val(str1[5]);
                          $("#BUN").val(str1[6]);
                          $("#HbA1C").val(str1[7]); 
                     
                    
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
                      str1 = mys.split(' ');
                    
                          $("#trianPoint").val(str1[0]); 
                          $("#dateTrain").val(str1[1]);
                          $("#nameTrain").val(str1[2]); 
                     
                    
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
                      str1 = mys.split(' ');
                    
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
                      str1 = mys.split(' ');
                    
                          $("#visit_order").text(str1[0]); 
                          $("#Pvisit").val(str1[1]);
                          $("#PRvisit").val(str1[2]); 
                          $("#enviFam").val(str1[3]);
                     
                    
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
                      str1 = mys.split(' ');
                    
                            
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
                      str1 = mys.split(' ');
                    
                    if(page == 1){
                        index = 0;
                    }else if(page == 2){
                        index = 8;
                    }else if(page == 3){
                        index = 16;
                    }else if(page == 4){
                        index = 24;
                    }else if(page == 5){
                        index = 32;
                    }else if(page == 6){
                        index = 40;
                    }
                    
                          $("#lab_date").val(str1[0+index]); //8 , 16 ,24
                          $("#fbs").val(str1[1+index]);
                          $("#ldl").val(str1[2+index]);
                          $("#hdl").val(str1[3+index]);
                          $("#Cholesterol").val(str1[4+index]);
                          $("#Creatinine").val(str1[5+index]);
                          $("#BUN").val(str1[6+index]);
                          $("#HbA1C").val(str1[7+index]); 
                       
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
                      str1 = mys.split(' ');
                    
                    if(page == 1){
                        index2 = 0;
                    }else if(page == 2){
                        index2 = 3;
                    }else if(page == 3){
                        index2 = 6;
                    }else if(page == 4){
                        index2 = 9;
                    }else if(page == 5){
                        index2 = 12;
                    }else if(page == 6){
                        index2 = 15;
                    }else if(page == 7){
                        index2 = 18;
                    }
                    
                          $("#trianPoint").val(str1[0+index2]); 
                          $("#dateTrain").val(str1[1+index2]);
                          $("#nameTrain").val(str1[2+index2]);
                          
                        
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
                      str1 = mys.split(' ');
                    
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
                      str1 = mys.split(' ');
                    
                    if(page == 1){
                        index4 = 0;
                    }else if(page == 2){
                        index4 = 4;
                    }else if(page == 3){
                        index4 = 8;
                    }
                    
                          $("#visit_order").text(str1[0+index4]); 
                          $("#Pvisit").val(str1[1+index4]);
                          $("#PRvisit").val(str1[2+index4]); 
                          $("#enviFam").val(str1[3+index4]);
                         
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
                      str1 = mys.split(' ');
                    
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
                      str1 = mys.split(' ');
                    
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
                   $.ajax({
                    type: "POST",
                    url: "./Gedit/save3_edit.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tId: gId,
                        t1:$('#analysis').val(),
                        t2:$('#input_other').val(),
                        t3:$('#DrName').val(),                        
                        t4:$('#Hospital1').val(),
                        t5:$('#Hospital2').val(),
                        t6:$('#Hospital3').val(),
                        t7:$('#med').val(),
                        t8:$('#med_history').val(),
                        t9:$('#spec_food').val(),
                        t10:$('#family_info').val()
                    }
                  })
                    .done(function( msg ) 
                    {
                      $("#menu5").html(msg)
                      $("#menu5").slideUp(2000);                    
                       
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
                        t1:$('#lab_date').val(),
                        t2:$('#fbs').val(),
                        t3:$('#ldl').val(),                        
                        t4:$('#hdl').val(),
                        t5:$('#Cholesterol').val(),
                        t6:$('#Creatinine').val(),
                        t7:$('#BUN').val(),
                        t8:$('#HbA1C').val()
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
                        t2:$('#Pvisit').val(),
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