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
                    
                          $("#planPoint").val(str1[0]); 
                          $("#wayD").val(str1[1]);
                          $("#namedd").val(str1[2]); 
                          $("#mark").val(str1[3]);
                     
                    
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
                    
                    
                    
                          $("#visit_order_table").text(1); 
                          $("#takecarePoint").val(str1[1]);
                          $("#takecare").val(str1[2]); 
                          $("#namePD").val(str1[3]);
                          $("#note2").val(str1[4]);
                         
                    });
                    
                    
                    
                   
             }

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
                        index3 = 4;
                    }else if(page == 3){
                        index3 = 8;
                    }else if(page == 4){
                        index3 = 12;
                    }else if(page == 5){
                        index3 = 16;
                    }else if(page == 6){
                        index3 = 20;
                    }else if(page == 7){
                        index3 = 24;
                    }
                    
                          $("#planPoint").val(str1[0+index3]); 
                          $("#wayD").val(str1[1+index3]);
                          $("#namedd").val(str1[2+index3]); 
                          $("#mark").val(str1[3+index3]);
                         
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
                    
                          $("#visit_order_table").text(page); 
                          $("#takecarePoint").val(str1[1]);
                          $("#takecare").val(str1[2]); 
                          $("#namePD").val(str1[3]);
                          $("#note2").val(str1[4]);
                         
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
                        index6 = 4;
                    }else if(page == 3){
                        index6 = 8;
                    }else if(page == 4){
                        index6 = 12;
                    }else if(page == 5){
                        index6 = 16;
                    }else if(page == 6){
                        index6 = 20;
                    }else if(page == 7){
                        index6 = 24;
                    }
                    
                          $("#takecarePoint").val(str1[0+index6]);
                          $("#takecare").val(str1[1+index6]); 
                          $("#namePD").val(str1[2+index6]);
                          $("#note2").val(str1[3+index6]);
                         
                    });
                    
                    index6 = 0;
             }
          // $(function() {
		//$( ".datepicker" ).datepicker($.datepicker.regional[ "th" ] );
		
               // });
               
               
               
        
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