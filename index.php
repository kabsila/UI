<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="./alloy/build/aui-css/css/bootstrap.css">
	<script src="./alloy/build/aui/aui.js"></script>
</head>
<body>

<div id="container" style="width:100%">

<div id="header" style="background-color:#CEECF5;width:100%;height:200px;">
<h1 style="margin-bottom:0;">Main Title of Web Page</h1></div>



<div id="content" style="background-color:#E6E6E6;height:500px;width:100%;float:left;">
Content goes here
<div id="menu" style="background-color:#F5A9F2;height:80%;width:50%;float:center;margin:auto;margin-top:25px;">
    
    
    <form id="myForm" style="padding-top:15%;padding-left:30%;">
    <div class="control-group">
        <div class="controls" >       
          <label class="control-label" for="name">User Name: <input name="name" id="name" class="field-required" type="text" style="margin-left:22px;"></label>  
        </div>
    </div>
        
    <div class="control-group" >
        <div class="controls" >    
         <label class="control-label" for="pass">PassWord: <input name="pass" id="pass" class="field-required" type="text" style="margin-left:25px;"></label> 
        </div>
    </div>
        
        <input class="btn btn-info" type="submit" value="Submit" style="margin-left:20%;">
        <input class="btn btn-primary" type="reset" value="Reset">
    </form>  
    
    
</div>
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
    
</body>
</html>