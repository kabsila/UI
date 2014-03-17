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

$(document).ready(function() {

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
        source: './Gedit/findHospital.php',
        minLength: 1,
        select: function(event, ui)
        {

        },
    });

    $('.train').autocomplete({
        source: './Gedit/findTrain.php',
        minLength: 1,
        select: function(event, ui)
        {

        },
    });

    $('.list_ya').autocomplete({
        source: './Gedit/findYa.php',
        minLength: 1,
        select: function(event, ui)
        {
            //showEdit(ui.item.id);
            //$("html,body").animate({scrollTop:$('#menu3').position().top}, 'slow'); 
        },
    });




});

$(document).ready(function() {
    $("#addP").click(function() {
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


$(document).ready(function() {

    var uploadObj2 = $("#advancedUpload2").uploadFile({
        url: "./upload/upload_img2.php",
        autoSubmit: true,
        showStatusAfterSuccess: true,
        fileName: "myfile",
        allowedTypes: "jpeg,jpg,png,gif",
        onSuccess: function(files, data, xhr)
        {
            $("#ok").css({
                "display": "block"
            });

            $("#noPic").css({
                "display": "none"
            });


        }
    });


    $("#noPic").click(function() {
        $("#noPic").fadeOut("slow");
        $("#ok_nopic").fadeIn("slow");

    });


    $("#ok").click(function() {
        $.ajax({
            type: "POST",
            url: "add_name_newp_to_db.php",
            dataType: "HTML",
            cache: true,
            data:
                    {
                        tStatus: $('#sta').val(),
                        tFname: $('#fname').val(),
                        tSname: $('#sname').val()
                    }
        })
                .done(function(msg)
        {
            //uploadObj2.startUpload(); 

            $('#fname').val('');
            $('#sname').val('');
            $("#menu3").html(msg).fadeIn("slow");

            showimg();




            $("#menu3").on('click', '.fancybox', function() {
                $(".fancybox").fancybox();
            });


            $("#menu2").slideUp("slow");
            $("#menu3").on('click', '#btninfo', function() {
                showadd1();

            });


            $.ajax({
                type: "POST",
                url: "showMenu5.php",
                data:
                        {
                        }
            })
                    .done(function(msg)
            {

                $("#menu5").html(msg).slideDown("slow").hide();

                $("#menu5").on('keypress', 'input[type=text].list_ya', function() {

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

                $("#menu5").on('keypress', 'input[type=text].Hospital', function() {

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
                        source: './Gedit/findHospital.php',
                        minLength: 1,
                        select: function(event, ui)
                        {

                        },
                    });


                });
                $("#menu5").on('click', '#save3', function() {
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
                        url: "save3_vinich.php",
                        data:
                                {
                                    //tAnalysis:$('#analysis').val(),
                                    tCheckbox1: c1,
                                    tCheckbox2: c2,
                                    tCheckbox3: c3,
                                    tCheckbox4: c4,
                                    tCheckbox5: c5,
                                    tInput_other: $('#input_other').val(),
                                    tDrName: $('#DrName').val(),
                                    tHospital1: $('#Hospital1').val(),
                                    tHospital2: $('#Hospital2').val(),
                                    tHospital3: $('#Hospital3').val(),
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
                                    tmed_history: $('#med_history').val(),
                                    tspec_food: $('#spec_food').val(),
                                    //tsmpai:$('#smpai').val(),
                                    tfamily_info: $('#family_info').val()

                                }
                    })
                            .done(function(msg)
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
        });
    });

    $("#ok_nopic").click(function() {
        $.ajax({
            type: "POST",
            url: "add_name_newp_to_db2.php",
            dataType: "HTML",
            cache: true,
            data:
                    {
                        tStatus: $('#sta').val(),
                        tFname: $('#fname').val(),
                        tSname: $('#sname').val()
                    }
        })
                .done(function(msg)
        {
            //uploadObj2.startUpload(); 

            $('#fname').val('');
            $('#sname').val('');
            $("#menu3").html(msg).fadeIn("slow");

            showimg();

            $("#menu3").on('click', '.fancybox', function() {
                $(".fancybox").fancybox();
            });


            $("#menu2").slideUp("slow");
            $("#menu3").on('click', '#btninfo', function() {
                showadd1();

            });

            $.ajax({
                type: "POST",
                url: "showMenu5.php",
                data:
                        {
                        }
            })
                    .done(function(msg)
            {

                $("#menu5").html(msg).slideDown("slow").hide();
                
                $("#menu5").on('change', 'input[type=checkbox]', function() {
                   
                        if ($("#checkbox5").is(":checked"))
                        {
                            $("#input_other").slideDown();
                        }
                        else
                        {
                            $("#input_other").slideUp();
                        }
                    

                });
                $("#menu5").on('keypress', 'input[type=text].list_ya', function() {

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

                $("#menu5").on('keypress', 'input[type=text].Hospital', function() {

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
                        source: './Gedit/findHospital.php',
                        minLength: 1,
                        select: function(event, ui)
                        {

                        },
                    });


                });
                $("#menu5").on('click', '#save3', function() {
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
                        url: "save3_vinich.php",
                        data:
                                {
                                    //tAnalysis:$('#analysis').val(),
                                    tCheckbox1: c1,
                                    tCheckbox2: c2,
                                    tCheckbox3: c3,
                                    tCheckbox4: c4,
                                    tCheckbox5: c5,
                                    tInput_other: $('#input_other').val(),
                                    tDrName: $('#DrName').val(),
                                    tHospital1: $('#Hospital1').val(),
                                    tHospital2: $('#Hospital2').val(),
                                    tHospital3: $('#Hospital3').val(),
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
                                    tmed_history: $('#med_history').val(),
                                    tspec_food: $('#spec_food').val(),
                                    //tsmpai:$('#smpai').val(),
                                    tfamily_info: $('#family_info').val()

                                }
                    })
                            .done(function(msg)
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
            .done(function(msg)
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

function showadd1() {

    $.ajax({
        type: "POST",
        url: "showAddDataPage1.php",
        data:
                {
                }
    })
            .done(function(msg)
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
                    tAge: $('#age').val(),
                    //tJob:$('#job').val(),
                    //tTel:$('#tel').val(),
                    tNameD: $('#named').val(),
                    tSnameD: $('#snamed').val(),
                    tWithD: $('#with').val(),
                    tHN: $('#hn').val(),
                    tKum: $('#kum').val(),
                    // tJobD: $('#jobd').val(),                               
                    // tTelD:$('#teld').val()
                }
    })
            .done(function(msg)
    {
        $("#menu3").hide().html(msg).fadeToggle("slow");
        $("#menu3").slideToggle();
        $("#menu4").slideToggle("slow");
        initialize();
    });
}

/** save2 **/
$(document).ready(function() {
    $("#save2").click(function() {
        $.ajax({
            type: "POST",
            url: "save2_address.php",
            data:
                    {
                        tAddNum: $('#AddNum').val(),
                        tMoo: $('#moo').val(),
                        tRoad: $('#Road').val(),
                        tAumphor: $('#Aumphor').val(),
                        tTumbol: $('#Tumbol').val(),
                        tCity: $('#City').val(),
                        tZipcode: $('#Zipcode').val(),
                        tLatitude: $('#Latitude').val(),
                        tLongitude: $('#Longitude').val(),
                        tDateAcc: $('#DateAcc').val()
                    }
        })
                .done(function(msg)
        {
            $("#menu4").height(60);
            $("#menu4").hide().html(msg).fadeToggle();
            $("#menu4").slideUp();
            $("#menu4-5").fadeToggle();
            /** $("#menu4").slideToggle("slow");**/
        });

    });
});


/** save3 unuse **/

$("#menu5").on('click', '#save3', function() {
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

    if ($('#med1').val() == '')
    {
        $('#med1').val('-1');
    }
    if ($('#med2').val() == '')
    {
        $('#med2').val('-2');
    }
    if ($('#med3').val() == '')
    {
        $('#med3').val('-3');
    }
    if ($('#med4').val() == '')
    {
        $('#med4').val('-4');
    }
    if ($('#med5').val() == '')
    {
        $('#med5').val('-5');
    }
    if ($('#med6').val() == '')
    {
        $('#med6').val('-6');
    }
    if ($('#med7').val() == '')
    {
        $('#med7').val('-7');
    }
    if ($('#med8').val() == '')
    {
        $('#med8').val('-8');
    }
    if ($('#med9').val() == '')
    {
        $('#med9').val('-9');
    }
    if ($('#med10').val() == '')
    {
        $('#med10').val('-10');
    }



    $.ajax({
        type: "POST",
        url: "save3_vinich.php",
        data:
                {
                    //tAnalysis:$('#analysis').val(),
                    tCheckbox1: c1,
                    tCheckbox2: c2,
                    tCheckbox3: c3,
                    tCheckbox4: c4,
                    tCheckbox5: c5,
                    tInput_other: $('#input_other').val(),
                    tDrName: $('#DrName').val(),
                    tHospital1: $('#Hospital1').val(),
                    tHospital2: $('#Hospital2').val(),
                    tHospital3: $('#Hospital3').val(),
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
                    tmed_history: $('#med_history').val(),
                    tspec_food: $('#spec_food').val(),
                    //tsmpai:$('#smpai').val(),
                    tfamily_info: $('#family_info').val()

                }
    })
            .done(function(msg)
    {
        $("#menu5").height(60);
        $("#menu5").hide().html(msg).fadeToggle("slow");
        //$("#menu5").slideUp();
        $("#menu6").fadeIn();
        /**  $("#menu5").fadeToggle("slow");
         $("#menu4").slideToggle("slow");**/
    });
});

/**      $(document).ready(function(){
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
 //$("#menu5").slideUp();
 $("#menu6").fadeIn();
 
 });
 
 });
 });    **/

/** save4 **/
$(document).ready(function() {
    $("#save4").click(function() {
        $.ajax({
            type: "POST",
            url: "save4_first_rating.php",
            data:
                    {
                        tfirst_rateDB: $('#first_rateDB').val(),
                        tbloodP: $('#bloodP').val()

                    }
        })
                .done(function(msg)
        {
            $("#menu6").height(60);
            $("#menu6").hide().html(msg).fadeToggle();
            $("#menu6").slideUp();
            //$("#menu7").fadeToggle();
            /** $("#menu4").slideToggle("slow");**/
            $.ajax({
                type: "POST",
                url: "showMenu7.php",
                data:
                        {
                        }
            })
                    .done(function(msg)
            {
                $("#menu6").slideUp();
                $("#menu7").hide().html(msg).fadeIn();


                 getFirst();

                $('.pagination#page1').jqPagination({
                    max_page: 6,
                    paged: function(page) {

                        $('.slideData').fadeToggle();
                        $('.slideData').val("");
                        $('.slideData').fadeToggle();
                        getValue(page);

                    }
                });


                $('#menu7').on('click', '#finish1', function() {
                    $("#menu7").slideUp();
                    $("#menu8").fadeIn();
                });
                
                $('#menu7').on('click', '.datepicker', function() {
                    $(".datepicker").datepicker({changeMonth: true, changeYear: true});
                    $(".datepicker").datepicker($.datepicker.regional[ "th" ]);
                });
                
                $('#menu7').on('click', '#save5', function() {
                    $.ajax({
                        type: "POST",
                        url: "save5_lab_result.php",
                        dataType: "HTML",
                        cache: true,
                        data:
                                {
                                    t0: $('#date_id').text(),
                                    t1: $('#lab_date').val(),
                                    t2: $('#fbs').val(),
                                    t3: $('#ldl').val(),
                                    t4: $('#hdl').val(),
                                    t5: $('#Cholesterol').val(),
                                    t6: $('#Creatinine').val(),
                                    t7: $('#BUN').val(),
                                    t8: $('#HbA1C').val(),
                                    t9: $('#Triglyceride').val()
                                }
                    })
                            .done(function(msg)
                    {

                        var p = $("#menu7");
                        var position = p.position();
                        $("#successPopUp").css({"position": "absolute",
                            "top": position.top + 250,
                            "left": position.left + 400
                        });

                        //$("#menu7").html(msg)
                        $("#successPopUp").html(msg).fadeIn("slow");
                        $("#successPopUp").fadeOut("slow");
                        //$("#menu4").slideUp(2000);                    

                    });
                });
                
                
                

                /** $("#menu4").slideToggle("slow");**/
            });
        });

    });
});

/** save5 **/
$(document).ready(function() {
    $("#save5").click(function() {
        $.ajax({
            type: "POST",
            url: "save5_lab_result.php",
            data:
                    {
                        tlab_date: $('#lab_date').val(),
                        tfbs: $('#fbs').val(),
                        tldl: $('#ldl').val(),
                        thdl: $('#hdl').val(),
                        tCholesterol: $('#Cholesterol').val(),
                        ttg: $('#Triglyceride').val(),
                        tCreatinine: $('#Creatinine').val(),
                        tBUN: $('#BUN').val(),
                        tHbA1C: $('#HbA1C').val()

                    }
        })
                .done(function(msg)
        {

            var p = $("#menu7");
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


$(document).ready(function() {
    $("#finish1").click(function() {

        $("#menu7").slideUp();
        $("#menu8").fadeIn();

    });
});

/** save6 **/
$(document).ready(function() {
    $("#save6").click(function() {
        $.ajax({
            type: "POST",
            url: "save6_spec.php",
            data:
                    {
                        tdateC: $('#dateC').val(),
                        tnameC: $('#nameC').val(),
                        teye: $('#eye').val(),
                        tfoot: $('#foot').val(),
                        tsad: $('#sad').val(),
                        tpoint: $('#point').val()

                    }
        })
                .done(function(msg)
        {
            $("#menu8").height(60);
            $("#menu8").hide().html(msg).fadeIn(400, function() {
                $("#menu8").slideUp(500);
            });

            //$("#menu9").fadeIn();

            $.ajax({
                type: "POST",
                url: "showMenu9.php",
                data:
                        {
                        }
            })
                    .done(function(msg)
            {
              
                
                $('#menu9').on('click', '.datepicker', function() {
                    $(".datepicker").datepicker({changeMonth: true, changeYear: true});
                    $(".datepicker").datepicker($.datepicker.regional[ "th" ]);


                });

                $("#menu9").html(msg).fadeIn();

                $('#menu9').on('click', '#finish2', function() {
                    $("#menu9").slideUp();
                    $.ajax({
                            type: "POST",
                            url: "showMenu10.php",
                            data:
                           {
                                
                           }
                        })
                            .done(function(msg)
                    {
                        
                        
                        
                        $('#menu10').html(msg).fadeIn();
                        $('#menu10').on('click', '#save8', function() {
                            $.ajax({
                                type: "POST",
                                url: "save8_plan_d.php",
                                data:
                                {
                                    maind1: $('#planPoint1').val(),
                                    maind2: $('#planPoint2').val(),
                                    maind3: $('#planPoint3').val(),
                                    maind4: $('#planPoint4').val(),
                                    maind5: $('#planPoint5').val(),
                                    maind6: $('#planPoint6').val(),
                                    maind7: $('#planPoint7').val(),
                                    dated1: $('#wayD1').val(),
                                    dated2: $('#wayD2').val(),
                                    dated3: $('#wayD3').val(),
                                    dated4: $('#wayD4').val(),
                                    dated5: $('#wayD5').val(),
                                    dated6: $('#wayD6').val(),
                                    dated7: $('#wayD7').val(),
                                    nameTrain1: $('#namedd1').val(),
                                    nameTrain2: $('#namedd2').val(),
                                    nameTrain3: $('#namedd3').val(),
                                    nameTrain4: $('#namedd4').val(),
                                    nameTrain5: $('#namedd5').val(),
                                    nameTrain6: $('#namedd6').val(),
                                    nameTrain7: $('#namedd7').val(),
                                    m1: $('#mark1').val(),
                                    m2: $('#mark2').val(),
                                    m3: $('#mark3').val(),
                                    m4: $('#mark4').val(),
                                    m5: $('#mark5').val(),
                                    m6: $('#mark6').val(),
                                    m7: $('#mark7').val(),
                                    dateID1: $('#pdlm1').text(),
                                    dateID2: $('#pdlm2').text(),
                                    dateID3: $('#pdlm3').text(),
                                    dateID4: $('#pdlm4').text(),
                                    dateID5: $('#pdlm5').text(),
                                    dateID6: $('#pdlm6').text(),
                                    dateID7: $('#pdlm7').text()
                                }
                            })
                                    .done(function(msg)
                            {
                                var p = $("#menu10");
                                var position = p.position();
                                $("#successPopUp").css({
                                    "position": "absolute",
                                    "top": position.top + 150,
                                    "left": position.left + 400
                                });

                                $("#successPopUp").html(msg).slideDown("slow");
                                //$('#table10').fadeOut();
                               // $('#wayD').val('');
                                //$('#namedd').val('');
                                //$('#mark').val('');
                               // $('#planPoint').val('');
                               // $('#table10').fadeIn();
                                $("#successPopUp").slideUp("slow");
                            });
                        });
                        
                        $('#menu10').on('click', '#finish3', function() {
                            $("#menu10").slideUp();
                            $("#menu11").fadeIn();
                        });
                    });

                });

                $('#menu9').on('click', '#save7', function() {
                    $.ajax({
                        type: "POST",
                        url: "save7_trainD.php",
                        data:
                                {
                                    maind1: $('#trianPoint1').val(),
                                    maind2: $('#trianPoint2').val(),
                                    maind3: $('#trianPoint3').val(),
                                    maind4: $('#trianPoint4').val(),
                                    maind5: $('#trianPoint5').val(),
                                    maind6: $('#trianPoint6').val(),
                                    maind7: $('#trianPoint7').val(),
                                    dated1: $('#dateTrain1').val(),
                                    dated2: $('#dateTrain2').val(),
                                    dated3: $('#dateTrain3').val(),
                                    dated4: $('#dateTrain4').val(),
                                    dated5: $('#dateTrain5').val(),
                                    dated6: $('#dateTrain6').val(),
                                    dated7: $('#dateTrain7').val(),
                                    nameTrain1: $('#nameTrain1').val(),
                                    nameTrain2: $('#nameTrain2').val(),
                                    nameTrain3: $('#nameTrain3').val(),
                                    nameTrain4: $('#nameTrain4').val(),
                                    nameTrain5: $('#nameTrain5').val(),
                                    nameTrain6: $('#nameTrain6').val(),
                                    nameTrain7: $('#nameTrain7').val(),
                                    dateID1: $('#tdlm1').text(),
                                    dateID2: $('#tdlm2').text(),
                                    dateID3: $('#tdlm3').text(),
                                    dateID4: $('#tdlm4').text(),
                                    dateID5: $('#tdlm5').text(),
                                    dateID6: $('#tdlm6').text(),
                                    dateID7: $('#tdlm7').text()

                                }
                    })
                            .done(function(msg)
                    {
                        var p = $("#menu9");
                        var position = p.position();
                        $("#successPopUp").css({
                            "position": "absolute",
                            "top": position.top + 160,
                            "left": position.left + 400
                        });

                        $("#successPopUp").html(msg).slideDown("slow");
                        //$('#table12').fadeOut();
                        //$('#takecarePoint').val('');
                        //$('#takecare').val('');
                        //$('#namePD').val('');
                        // $('#note2').val('');
                        //$('#table12').fadeIn();
                        $("#successPopUp").slideUp("slow");
                        
                        
                    });
                });
            });

        });

    });
});

/** save7 **/
/**    $(document).ready(function(){
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
 });**/

$(document).ready(function() {
    $("#finish2").click(function() {

        $("#menu9").slideUp();
        $("#menu10").fadeIn();

    });
});

/** save8 **/
/**$(document).ready(function() {
    $("#save8").click(function() {
        $.ajax({
            type: "POST",
            url: "save8_plan_d.php",
            data:
                    {
                        tplanPoint: $('#planPoint').val(),
                        twayD: $('#wayD').val(),
                        tnamedd: $('#namedd').val(),
                        tmark: $('#mark').val()

                    }
        })
                .done(function(msg)
        {
            var p = $("#menu10");
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
            //$("#successPopUp").slideUp("slow");    
        });

    });
});**/

$(document).ready(function() {
    $("#finish3").click(function() {
        $("#menu10").slideUp();
        $("#menu11").fadeIn();
    });
});

/** save9 **/
$(document).ready(function() {
    $("#save9").click(function() {

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
            var cc2 = $("#input_c1").val();
            ;
        }
        else
        {
            var cc2 = 'f';
        }
        if ($("#c3").is(":checked"))
        {
            var cc3 = $("#input_c1").val();
            ;
        }
        else
        {
            var cc3 = 'f';
        }

        if ($("option#pd:selected").length)
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
                        tvisit_order: $('#visit_order').val(),
                        n: cc1,
                        osm: cc2,
                        staff: cc3,
                        //tPvisit:$('#Pvisit').val(),
                        tPRvisit: cc4,
                        tenviFam: $('#enviFam').val()

                    }
        })
                .done(function(msg)
        {

            var p = $("#menu11");
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
            //$("#menu12").fadeIn();

            $.ajax({
                type: "POST",
                url: "showVisitTable.php",
                data:
                        {
                            tvisit_order2: $('#visit_order').val(),
                        }
            })
                    .done(function(msg)
            {
                $("#menu12").html(msg).fadeIn();

                $('#menu12').on('click', '#finish5', function() {
                    $("#menu12").slideUp();
                    $("#menu11").slideDown();
                    $("#menu13").fadeIn();
                });

                $('#menu12').on('click', '#save10', function() {
                    $.ajax({
                        type: "POST",
                        url: "save10_table_visit.php",
                        data:
                                {
                                    ttakecarePoint1: $('#takecarePoint1').val(),
                                    ttakecarePoint2: $('#takecarePoint2').val(),
                                    ttakecarePoint3: $('#takecarePoint3').val(),
                                    ttakecarePoint4: $('#takecarePoint4').val(),
                                    ttakecare1: $('#takecare1').val(),
                                    ttakecare2: $('#takecare2').val(),
                                    ttakecare3: $('#takecare3').val(),
                                    ttakecare4: $('#takecare4').val(),
                                    tnamePD1: $('#namePD1').val(),
                                    tnamePD2: $('#namePD2').val(),
                                    tnamePD3: $('#namePD3').val(),
                                    tnamePD4: $('#namePD4').val(),
                                    tnote21: $('#note21').val(),
                                    tnote22: $('#note22').val(),
                                    tnote23: $('#note23').val(),
                                    tnote24: $('#note24').val(),
                                    idtable1: $('#vlm1').text(),
                                    idtable2: $('#vlm2').text(),
                                    idtable3: $('#vlm3').text(),
                                    idtable4: $('#vlm4').text()

                                }
                    })
                            .done(function(msg)
                    {
                        var p = $("#menu12");
                        var position = p.position();
                        $("#successPopUp").css({
                            "position": "absolute",
                            "top": position.top + 160,
                            "left": position.left + 400
                        });

                        $("#successPopUp").html(msg).slideDown("slow");
                        //$('#table12').fadeOut();
                        //$('#takecarePoint').val('');
                        //$('#takecare').val('');
                        //$('#namePD').val('');
                        // $('#note2').val('');
                        $('#table12').fadeIn();
                        $("#successPopUp").slideUp("slow");
                    });
                });
            });
        });

    });
});

$(document).ready(function() {
    $("#finish4").click(function() {
        $("#menu11").slideUp();
        $("#menu12").fadeIn();
    });
});

/** save10 **/
/**       $(document).ready(function(){
 $("#save10").click(function(){  
 $.ajax({
 type: "POST",
 url: "save10_table_visit.php",
 data: 
 { 
 ttakecarePoint1:$('#takecarePoint1').val(),
 ttakecarePoint2:$('#takecarePoint2').val(),
 ttakecarePoint3:$('#takecarePoint3').val(),
 ttakecarePoint4:$('#takecarePoint4').val(),
 ttakecare1:$('#takecare1').val(),
 ttakecare2:$('#takecare2').val(),
 ttakecare3:$('#takecare3').val(),
 ttakecare4:$('#takecare4').val(),
 tnamePD1:$('#namePD1').val(),
 tnamePD2:$('#namePD2').val(),
 tnamePD3:$('#namePD3').val(),
 tnamePD4:$('#namePD4').val(),
 tnote21:$('#note21').val(),
 tnote22:$('#note22').val(),
 tnote23:$('#note23').val(),
 tnote24:$('#note24').val(),
 
 idtable1:$('#lm1').text(),
 idtable2:$('#lm2').text(),
 idtable3:$('#lm3').text(),
 idtable4:$('#lm4').text()
 
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
 });**/

$(document).ready(function() {
    $("#finish5").click(function() {
        $("#menu12").slideUp();
        $("#menu11").slideDown();
        $("#menu13").fadeIn();
        //$("#menu13").html("<label>บันทึกข้อมูลของผู้ป่วยรายนี้เสร็จสิ้นแล้ว</label>").fadeIn("slow");
        //$("#menu13").fadeIn(2000);
    });
});


$(document).ready(function() {
    $("#finish6").click(function() {
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
        xmlhttp = new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById('info').style.opacity = "0";
            document.getElementById('info').style.visibility = "hidden";
            document.getElementById('menu3').style.visibility = "visible";
            document.getElementById('menu3').style.opacity = "1";
            document.getElementById("menu3").innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.open("POST", "addDataPage.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}

function save11()
{
    var xmlhttp;
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById("menu3").innerHTML = xmlhttp.responseText;
        }
    }

    var pmeters = "tAge=" + encodeURI(document.getElementById("age").value) +
            "&tJob=" + encodeURI(document.getElementById("job").value) +
            "&tTel=" + encodeURI(document.getElementById("tel").value) +
            "&tNameD=" + encodeURI(document.getElementById("named").value) +
            "&tSnameD=" + encodeURI(document.getElementById("snamed").value) +
            "&tWithD=" + encodeURI(document.getElementById("with").value) +
            "&tJobD=" + encodeURI(document.getElementById("jobd").value) +
            "&tTelD=" + encodeURI(document.getElementById("teld").value);

    xmlhttp.open("POST", "save1.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(pmeters);
}

$(function() {
    $(".datepicker").datepicker({changeMonth: true, changeYear: true});
    $(".datepicker").datepicker($.datepicker.regional[ "th" ]);


});

$(document).ready(function() {
    $("select#analysis").change(function() {
        if ($("option#other:selected").length)
        {
            $("#input_other").slideDown("slow");
        } else
        {
            $("#input_other").slideUp("slow");

        }
    });
});

$(document).ready(function() {
    $("select#pya").change(function() {
        if ($("option#paa:selected").length)
        {
            $("#med_history").val("");
            $("#med_history").slideDown("slow");
        } else
        {
            $("#med_history").slideUp("slow");
            $("#med_history").val("ไม่เคยแพ้ยา");

        }
    });
});

$(document).ready(function() {
    $("select#PRvisit").change(function() {

        if ($("option#pd:selected").length)
        {
            $("#pdl").slideDown("slow");
        }
        else
        {
            $("#pdl").slideUp("slow");

        }
    });
});


$(document).ready(function() {
    $("input[type=checkbox]").change(function() {
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

$(document).ready(function() {

    //$("#input_c1").prop('disabled', true);

    $("input[type=checkbox]").change(function() {
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
        url: "./upload/upload_img.php",
        multiple: true,
        showStatusAfterSuccess: false,
        fileName: "myfile",
        allowedTypes: "jpeg,jpg,png,gif",
        onSuccess: function(files, data, xhr)
        {
            //$("#eventsmessage").html($("#eventsmessage").html()+"<br/>Success for: "+JSON.stringify(data));
            var str = data;
            var n = str.lastIndexOf("{\"");
            var n2 = str.indexOf("\":\"");
            var n3 = str.substring(2, n2);

            var p = $("#menu4-5");
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
        $("#menu4-5").slideUp();
        $("#menu5").slideDown();


    });

});

$(document).ready(function()
{
    getFirst();
    
    $('.pagination#page1').jqPagination({
            max_page: 6,
            paged: function(page) {

                $('.slideData').fadeToggle();
                $('.slideData').val("");
                $('.slideData').fadeToggle();
                getValue(page);

            }
        });
});

function  getFirst()
{
    $.ajax({
        type: "POST",
        url: "getValueLab.php",
        dataType: "HTML",
        cache: true,
        data:
                {
                    

                }
    })
            .done(function(msg)
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

var index = 0;

function getValue(page)
{
    $.ajax({
        type: "POST",
        url: "getValueLab.php",
        dataType: "HTML",
        cache: true,
        data:
                {
                  

                }
    })
            .done(function(msg)
    {

        var str1;

        var mys = msg;
        str1 = mys.split('textForSplit');

        if (page == 1) {
            index = 0;
        } else if (page == 2) {
            index = 10;
        } else if (page == 3) {
            index = 20;
        } else if (page == 4) {
            index = 30;
        } else if (page == 5) {
            index = 40;
        } else if (page == 6) {
            index = 50;
        }

        $("#date_id").text(str1[0 + index]);
        $("#lab_date").val(str1[1 + index]); //8 , 16 ,24
        $("#fbs").val(str1[2 + index]);
        $("#ldl").val(str1[3 + index]);
        $("#hdl").val(str1[4 + index]);
        $("#Cholesterol").val(str1[5 + index]);
        $("#Triglyceride").val(str1[6 + index]);
        $("#Creatinine").val(str1[7 + index]);
        $("#BUN").val(str1[8 + index]);
        $("#HbA1C").val(str1[9 + index]);

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

function save5_Edit()
{

    
}
                