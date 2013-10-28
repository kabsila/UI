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
                
                
var lat;
var long;

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
                       $('#listPro1').html(msg);
                       $('#listPro1').slideDown();
                      
                       $('#listPro1').on('click', '.inlineTable label', function() {                            
                           listProfile(this.id); 
                           
                        });
                        
                        $('#listPro1').on('click', '.cursorName', function() {                             
                              $("html,body").animate({scrollTop:$('#listPro2').position().top}, 'slow');                      
                        });
                       
                    });
                  });
                 });


                function listProfile( pId )
                {
                    
                  $.ajax({
                    type: "POST",
                    url: "./profile/showProfile_All.php",
                    dataType: "HTML",
                    cache: true,
                    data: 
                    { 
                        tID: pId,                       
                        
                    }
                  })
                    .done(function( msg ) 
                    {
                      
                      $("#listPro2").html(msg);
                      $("#listPro2").fadeIn(); 
                      
                      $('#listPro2').on('click', '#mapView', function() {
                            lat = $('#lat').text(); 
                            long = $('#long').text(); 
                            var Home = new google.maps.LatLng(lat,long);
                            initialize();
                            $("html,body").animate({scrollTop:$('#map-canvas').position().top}, 'slow'); 
                            placeMarker(Home);
                        
                      //placeMarker(myCenter);
                      });
                      
                      
                      $( "#listPro2" ).on('click', '.fancybox', function() {                         
                           $(".fancybox").fancybox();                            
                        }); 
                       
                    });
                    
                }
                
     /**-------------------------------------------------------------------------------------**/           
                
