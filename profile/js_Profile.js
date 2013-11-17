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
                            listProfile(ui.item.id);
                            $("html,body").animate({scrollTop:$('#listPro2').position().top}, 'slow'); 
                          },
                          
                      });
              
                    $('#tags2').autocomplete({
                          source:'./profile/findSurname.php', 
                          minLength:1,
                          select: function( event, ui ) 
                          { 
                            listProfile(ui.item.id);
                            $("html,body").animate({scrollTop:$('#listPro2').position().top}, 'slow'); 
                          },
                          
                      });
             });


                 

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
                              //initialize();
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
                      
                      
                     if($( "#lat" ).text() === '' || $( "#long" ).text() === '')
                     {
                         //$( "#mapView" ).css({"display" : "none"});
                         $("button#mapView").attr("disabled","disabled");
                     }                           
                       
                        
                      $('#listPro2').on('click', '#mapView', function() {
                            lat = $('#lat').text(); 
                            long = $('#long').text(); 
                            var Home = new google.maps.LatLng(lat,long);
                            initialize();
                            $("html,body").animate({scrollTop:$('#map-canvas').position().top}, 'slow'); 
                            placeMarker(Home);
                        
                      //placeMarker(myCenter);
                      });
                      
                      
                      $( "#listPro2" ).on('click', '#menu4-5', function() {                         
                           $(".fancybox").fancybox({
                                'transitionIn'	:	'elastic',
                                'transitionOut'	:	'elastic',
                                'speedIn'	:	600, 
                                'speedOut'	:	200, 
                                'overlayShow'	:	false
                            });  
                           
                        }); 
                        
                      
                       
                    });
                    
                }
                
     /**-------------------------------------------------------------------------------------**/           
                
