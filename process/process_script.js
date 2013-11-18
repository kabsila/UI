


$(document).ready(function() {
    $("#m").click(function() {

        $.ajax({
            type: "POST",
            url: "./process/list_m.php",
            dataType: "HTML",
            cache: true,
            data:
                    {
                        ty: 11
                    }
        })
                .done(function(msg)
        {

            $("#listNameProcess1").hide().html(msg);
            $("#listNameProcess1").slideDown();
            $("#listNameProcess1").css({"width": "300px"});
            $("html,body").animate({scrollTop:$('#listNameProcess1').position().top}, 'slow');

        });
    });

    $("#wm").click(function() {

        $.ajax({
            type: "POST",
            url: "./process/list_wm.php",
            dataType: "HTML",
            cache: true,
            data:
                    {
                        ty: 11
                    }
        })
                .done(function(msg)
        {

            $("#listNameProcess1").hide().html(msg);
            $("#listNameProcess1").slideDown();
            $("#listNameProcess1").css({"width": "300px"});
            $("html,body").animate({scrollTop:$('#listNameProcess1').position().top}, 'slow');
        });
    });


    $("#okAge").click(function() {

        $.ajax({
            type: "POST",
            url: "./process/age.php",
            dataType: "HTML",
            cache: true,
            data:
                    {
                        t1: $("#ageFrom").val(),
                        t2: $("#ageTo").val()

                    }
        })
                .done(function(msg)
        {

            $("#listNameProcess1").hide().html(msg);
            $("#listNameProcess1").slideDown();
            $("#listNameProcess1").css({"width": "300px"});
            $("html,body").animate({scrollTop:$('#listNameProcess1').position().top}, 'slow');
        });
    });
    
    
    $("#okMoo").click(function() {

        $.ajax({
            type: "POST",
            url: "./process/moo.php",
            dataType: "HTML",
            cache: true,
            data:
                    {
                        t1: $("#mooFrom").val(),
                        t2: $("#mooTo").val()

                    }
        })
                .done(function(msg)
        {

            $("#listNameProcess1").hide().html(msg);
            $("#listNameProcess1").slideDown();
            $("#listNameProcess1").css({"width": "300px"});
            $("html,body").animate({scrollTop:$('#listNameProcess1').position().top}, 'slow');
        });
    });
    
    $("#okSweet").click(function() {

        $.ajax({
            type: "POST",
            url: "./process/FBS.php",
            dataType: "HTML",
            cache: true,
            data:
                    {
                        t1: $("#sweetFrom").val(),
                        t2: $("#sweetTo").val()

                    }
        })
                .done(function(msg)
        {

            $("#listNameProcess1").hide().html(msg);
            $("#listNameProcess1").slideDown();
            $("#listNameProcess1").css({"width": "550px"});
            $("html,body").animate({scrollTop:$('#listNameProcess1').position().top}, 'slow');
        });
    });
});