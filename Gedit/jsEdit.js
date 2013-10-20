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
                       $('#listName2').slideDown(1700);
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
                      $( "#listName3" ).on('click', '#menu4', function() {                 
                           $( ".datepicker" ).datepicker($.datepicker.regional[ "th" ] );                           
                        }); 
                        
                      $("#listName3").html(msg).fadeIn("slow");
                      $("#menu3").fadeIn();
                      $("#menu4").fadeIn();
                         //  save1();

                       // });
                    });
                  
              }
       

              
                        
          // $(function() {
		//$( ".datepicker" ).datepicker($.datepicker.regional[ "th" ] );
		
               // });
        
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