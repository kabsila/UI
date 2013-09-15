<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="./alloy/build/aui-css/css/bootstrap.css">
	<script src="./alloy/build/aui/aui.js"></script>
        <style>
#myForm
{
    padding-top:3%;
    padding-left:15px;
    padding-right:15px;
    
}

#menu label
{
    display:inline;
    float:left;
    margin-right:4px;
    vertical-align:top;
}
#menu
{
    margin:auto;
    margin-top:25px;
}
label.control-label
{
    margin-left:20px;
}
        </style>
</head>
<body>

<div id="container" style="width:100%">

<div id="header" style="background-color:#CEECF5;width:100%;height:100px;">
<h1 style="margin-bottom:0; font-size:200%; text-align:center; padding-top:25px; font-family:"Angsana New";>แบบฟอร์มบันทึกข้อมูลเพื่อการดูแลต่อเนื่องที่บ้านสำหรับผู้ป่วยเบาหวานและครอบครัว</h1></div>



<div id="content" style="background-color:#E6E6E6;height:500px;width:100%;float:left;">

<div id="menu" style="background-color:#F5A9F2;height:30%;width:80%; border-radius:25px;">
    
    
    <form id="myForm" style="">
    <div class="control-group">
        <div class="controls" >       
          <label class="control-label" for="name">
              ชื่อผู้ป่วย: <input name="fname" id="fname"  type="text" style="width:120px;">              
          </label>       
        </div>
    </div>
        
   <div class="control-group">
        <div class="controls" >
         <label class="control-label" for="name">              
              นามสกุลผู้ป่วย: <input name="sname" id="sname"  type="text" style="width:120px;">              
          </label>        
        </div>
    </div>
        
   <div class="control-group">
        <div class="controls" >      
          <label class="control-label" for="name">              
              อายุ: <input name="age" id="age"  type="text" style="width:25px;">
          </label>
          
        </div>
    </div>
        
    <div class="control-group">
        <div class="controls" >      
          <label class="control-label" for="name">              
              อาชีพ: <input name="job" id="job"  type="text" style="width:120px;">
          </label>
        </div>
    </div>
        
   <div class="control-group">
        <div class="controls" >      
          <label class="control-label" for="name">              
              เบอร์โทร: <input name="tel" id="tel"  type="text" style="width:120px;">
          </label>
          
        </div>
    </div>
        
   <div class="control-group">
        <div class="controls" >      
          <label class="control-label" for="name">              
              ชื่อผู้ดูแล: <input name="dname" id="dname"  type="text" style="width:120px;">
          </label>
        </div>
    </div>
           
   <div class="control-group">
        <div class="controls" >      
          <label class="control-label" for="name">              
              นามสกลุผู้ดูแล: <input name="dsname" id="dsname"  type="text" style="width:117px;">
          </label>
        </div>
    </div>
        
        <div class="control-group">
        <div class="controls" >      
          <label class="control-label" for="name">              
              ความเกี่ยวข้อง: <input name="with" id="with"  type="text" style="width:50px;">
          </label>
        </div>
    </div>
        
        <div class="control-group">
        <div class="controls" >      
          <label class="control-label" for="name">              
              อาชีพ: <input name="djob" id="djob"  type="text" style="width:100px;">
          </label>
        </div>
    </div>
        
        <div class="control-group">
        <div class="controls" >      
          <label class="control-label" for="name">              
              เบอร์โทร: <input name="dtel" id="dtel"  type="text" style="width:100px;">
          </label>
        </div>
    </div>
        
   
        
   </form>

 </div>
        
    <div id="menu" style="background-color:#FE9A2E;height:28%;width:80%; border-radius:25px;">
        <form id="myForm" style="">
    <div class="control-group">
        <div class="controls" >      
          <label class="control-label" for="name">              
              ที่อยู่: <input name="address" id="address"  type="text" style="width:100px;">
          </label>
            <label class="control-label" for="name">              
              ถนน: <input name="address" id="address"  type="text" style="width:80px;">
          </label>
            <label class="control-label" for="name">              
              ตำบล: <input name="address" id="address"  type="text" style="width:80px;">
          </label>
            <label class="control-label" for="name">              
              อำเภอ: <input name="address" id="address"  type="text" style="width:80px;">
          </label>
            <label class="control-label" for="name">              
              จังหวัด: <input name="address" id="address"  type="text" style="width:80px;">
          </label>
            <label class="control-label" for="name">              
              รหัสไปรษณีย์: <input name="address" id="address"  type="text" style="width:80px;">
          </label>
        </div>
    </div>
            
   <div class="control-group">
        <div class="controls" >      
          <label class="control-label" for="name">              
              พิกัดบนแผนที่: latitude <input name="dtel" id="dtel"  type="text" style="width:100px;">
          </label>
             <label class="control-label" for="name">              
              longitude <input name="dtel" id="dtel"  type="text" style="width:100px;">
          </label>
        </div>
    </div>
            
            <input class="input-xxlarge" type="text" placeholder="Day, Mon dd, yyyy" value="date">
            
    </form>
    </div>
        
        <!-- <input class="btn btn-info" type="submit" value="Submit" style="margin-left:20%;">
        <input class="btn btn-primary" type="reset" value="Reset"> -->
    
    
</div>


<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
Copyright © Chanon</div>

</div>
 
<script>
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
 </script>
 <script>
 YUI({ lang: 'ja' }).use(
  'aui-datepicker',
  function(Y) {
    var datepicker = new Y.DatePicker(
      {
        trigger: 'input',
        mask: '%a, %b %d, %Y',
        popover: {
          toolbars: {
            header: [[
              {
                icon:'icon-trash',
                label: 'Clear',
                on: {
                  click: function() {
                    datepicker.clearSelection();
                  }
                }
              },
              {
                icon:'icon-globe',
                label: 'Travel date',
                on: {
                  click: function() {
                    datepicker.clearSelection();
                    datepicker.selectDates(new Date(2015, 2, 3, 2, 0, 0));
                  }
                }
              }
            ]]
          },
          zIndex: 1
        }
      }
    );
  }
);
</script>
    
</body>
</html>