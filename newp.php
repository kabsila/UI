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
        <link rel="stylesheet" href="./alloy/jquery-ui/css/smoothness/jquery-ui-1.10.3.custom.css">
        <link rel="stylesheet" href="./newP_Css.css">
        <link href="./upload/css/uploadfile.css" rel="stylesheet">
        <link rel="stylesheet" href="./CSS_checkbox/style.css">
        <link rel="stylesheet" href="./alloy/jquery-ui-all/themes/base/jquery-ui.css">
        
        <script src="./alloy/jquery.min.js"></script>
        <script src="./alloy/build/aui/aui.js"></script>
        <script src="./alloy/jquery.js"></script>
        <script src="./alloy/jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
        <script src="./alloy/jquery-ui/development-bundle/ui/i18n/jquery.ui.datepicker-th.js"></script>
        <script src="./alloy/jquery-ui-all/ui/jquery-ui.js"></script>
        <script src="./newP_script.js"></script>
        <script src="./upload/js/jquery.uploadfile.min.js"></script>
        
        <script src="./alloy/pagination/js/jquery.jqpagination.js"></script>

 <script type="text/javascript" src="./fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="./fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="./fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="./fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="./fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="./fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="./fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="./fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

        <style>
            html { height: 100%; width: 100%;}    
            body { height: 100%; width: 100%;} /*margin: 0; padding: 0 }*/      
            #map-canvas { height: 400px; width: 650px; margin: auto; margin-top: 25px;}

        </style>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdvwF7XYm-l-CeqTLrwHQCjDbIxThB1As&sensor=false&libraries=places&language=th"></script>
        <script>
$(document).ready(function() {
		$(".fancybox").fancybox();
	
        });   
        
var map;
//var myCenter=new google.maps.LatLng(15.241127,104.851402);

var markers = [];
var geocoder;
var marker;
function initialize()
{
 var myCenter=new google.maps.LatLng(15.241127,104.851402);  
 google.maps.visualRefresh = true;    
 geocoder = new google.maps.Geocoder();
var mapProp = {
  center:myCenter,
  zoom:10,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  map = new google.maps.Map(document.getElementById("map-canvas"),mapProp);

  

  google.maps.event.addListener(map, 'click', function(event) {
      
    //placeMarker(myCenter);
    placeMarker(event.latLng);
  });
}

function placeMarker(location) {    
  clearOverlays();
  markers = [];
  

  
   marker = new google.maps.Marker({
    position: location,
    animation: google.maps.Animation.DROP,
    map: map,
  });
  markers.push(marker);
    
    
    geocoder.geocode({'latLng': location}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[1]) {
        //map.setZoom(10);
        //marker = new google.maps.Marker({
        //    position: location,
        //    map: map
       // });
       
          } else {
        alert('No results found');
      }
    } else {
      alert('Geocoder failed due to: ' + status);
    }
    
    
     var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + location.lat().toFixed(4) + '<br>Longitude: ' + location.lng().toFixed(4) + '<br>' + results[0].formatted_address
   //content: results[0].formatted_address
  });
  //infowindow.setContent(results[1].formatted_address);
  infowindow.open(map,marker);
  });
  
 $("#Latitude").val(location.lat().toFixed(4));
 $("#Longitude").val(location.lng().toFixed(4));
  
 }
 
 function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the overlays from the map, but keeps them in the array.
function clearOverlays() {
  setAllMap(null);
}

// Shows any overlays currently in the array.
function showOverlays() {
  setAllMap(map);
}

// Deletes all markers in the array by removing references to them.
function deleteOverlays() {
  clearOverlays();
  markers = [];
}

//google.maps.event.addDomListener(window, 'load', initialize);

     
        </script>
    </head>
    <body>

        <div id="container" style="width:100%;">
            
            <div id="successPopUp">บันทึกแล้ว</div>
            
            <div id="header" style="background-color:#CEECF5;width:100%;height:100px;">
                <h1 style="margin-bottom:0; font-size:200%; text-align:center; padding-top:25px; font-family:"Angsana New";>แบบฟอร์มบันทึกข้อมูลเพื่อการดูแลต่อเนื่องที่บ้านสำหรับผู้ป่วยเบาหวานและครอบครัว</h1></div>



            <div id="content" style="background-color:#E6E6E6;height:auto;width:1100px;padding-bottom: 25px;">
                
                <div id="menu" style="background-color:#F5A9F2;height:100px;width:400px; border-radius:25px;">

                    <form id="myForm" >
                        <table class="ex1" border="0" >
                            <tr>
                                <td>
                                    <button class="btn btn-large btn-primary" id="addP" type="button">เพิ่มผู้ป่วยรายใหม่</button>
                                </td>
                            </tr>                            
                        </table>

                    </form>

                </div>
                
                <div id="menu2" style="background-color:#7BA6B4; border-radius:25px;">

                    
                        <table id="table2" class="ex2" border="0" >
                            <tr>
                                <td>
                                    <label class="control-label" for="name">คำนำหน้า:</label> 
                                </td>
                                <td>
                                    <label class="control-label" for="name" name="forYa">ชื่อผู้ป่วย:</label> 
                                </td>
                                <td>
                                    <label class="control-label" for="name">นามสกุลผู้ป่วย:</label> 
                                </td>                                
                            </tr>
                            <tr>
                                <td>
                                    <div id="yourDiv"> 
                                      <select id="sta" style="width:90px;text-align: center;">
                                        <option value="nay">นาย</option>
                                        <option value="nang">นาง</option>
                                        <option value="nangsao">นางสาว</option>                                        
                                      </select>  
                                    </div>
                                </td>
                                <td>
                                    <div id="yourDiv"> <input  id="fname"  type="text" style="width:80px;text-align: center;">  </div>
                                </td>
                                <td>
                                    <div id="yourDiv"> <input  id="sname"  type="text" style="width:80px;text-align: center;">  </div>
                                </td>                             
                            </tr>
                            <tr id="uploadH">
                                <td colspan="3">
                                    <div id="advancedUpload2" style="font-size:50%;display: none;">เลือกภาพผู้ป่วย</div>
                                </td>
                            </tr>
                            <tr >
                                <td colspan="3">
                                    <center><button class="button" id="ok" style="margin-top: 20px;width:80px;">บันทึก</button></center>
                                    <center><button class="button" id="ok_nopic" style="margin-top: 20px;width:80px;">บันทึก</button></center>
                                    <center><button class="button" id="noPic" style="margin-top: 20px;width:80px;">ไม่มีภาพ</button></center>
                                </td>
                            </tr>
                        </table>
             </div>
                <div id="myDiv"></div>               
                <div id="menu3"></div>
                <div id="menu4" style="background-color:#2980b9;height:230px;width:900px; border-radius:25px;">   
                        <table class="ex1" border="0" >
                            <tr>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" for="name">เลขที่อยู่:</label> 
                                        <div class="controls" >
                                            <input class="w_input" id="AddNum"  type="text"  title="Three letter country code" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" for="name">หมู่:</label> 
                                        <div class="controls" >
                                            <input class="w_input" id="moo"  type="text" >
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >ถนน:</label>  
                                        <div class="controls" >
                                            <input class="w_input" id="Road"  type="text" style="">     
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >ตำบล:</label> 
                                        <div class="controls" >
                                            <input class="w_input" id="Tumbol"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >อำเภอ:</label>
                                        <div class="controls" > 
                                            <input class="w_input" id="Aumphor"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >จังหวัด:</label>
                                        <div class="controls" >
                                            <input class="w_input" id="City"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">

                                        <label class="control-label" >รหัสไปรษณีย์:</label>
                                        <div class="controls" > 
                                            <input class="w_input" id="Zipcode"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >Latitude:</label>
                                        <div class="controls" >
                                            <input class="w_input" id="Latitude"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="control-group">
                                        <label class="control-label" >Longitude:</label>
                                        <div class="controls" > 
                                            <input class="w_input" id="Longitude"  type="text" style="">
                                        </div>
                                    </div>
                                </td>
                                <td colspan="2">
                                    <div class="control-group">
                                        <label class="control-label" >วันที่รับไว้ในการเยี่ยมบ้าน:</label>
                                        <div class="controls" > 
                                            <input type="text"  placeholder="เลือกวันที่" id="DateAcc" class="datepicker" style="width: 58%;" />
                                        </div>
                                    </div>
                                </td>
                                
                            </tr>
                            <tr >
                                <td colspan="5">
                                    <button class="btn btn-success" id="save2" style="color:#484848; width: 80px">บันทึก</button>
                                </td>
                            </tr>
                        </table>
                    
                    <div id="map-canvas"></div>
                </div>
                
                <div id="menu4-5" style="background-color:#000000;height:auto;width:700px; border-radius:25px;color: #ecf0f1;">
                    <center><div id="advancedUpload" style="display: none;">เลือกภาพ</div></center> 
                    <!--                    <div id="startUpload" class="ajax-file-upload-green">Start Upload</div>-->
                    <button class="btn btn-success" id="finishUp" style="color:#484848; width: 200px;margin-top: 10px;">เสร็จสิ้นการอัพโหลด</button>
                </div>
            
                <div id="menu5" style="background-color:#2c3e50;height:auto;width:700px; border-radius:25px;color: #ecf0f1;padding-bottom: 20px;">
                    
                </div>
                                
                <div id="menu6" style="background-color:#e74c3c;height:300px;width:700px; border-radius:25px;color: #ecf0f1">
                   
                    <table class="ex5" border="0">
                        <tr>
                            <td colspan="4">
                                <div class="control-group">
                                    <label class="control-label" >การประเมินครั้งแรกที่รับไว้ในการดูแล:</label>
                                    <div class="controls" > 
                                        <textarea id="first_rateDB" style="width: 80%; height: 70px;"></textarea>
                                    </div>
                                </div>
                            </td>
                        </tr>                        
                        <tr>
                            
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >ความดันโลหิต:</label>
                                    <div class="controls" > 
                                        <input placeholder="มม.ปรอท" id="bloodP"  type="text" style="">
                                    </div>
                                </div>
                            </td>                            
                        </tr>
                        <tr>
                            <td colspan="4">
                                <button class="btn btn-success" id="save4" style="color:#484848; width: 80px">บันทึก</button>
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div id="menu7" style="background-color:#16a085;height:auto;width:700px; border-radius:25px;color: #ecf0f1;padding-bottom: 30px;">

                    

                </div>
                
                <div id="menu8" style="background-color:#d35400;height:500px;width:700px; border-radius:25px;color: #ecf0f1;">

                   <table class="ex5" border="0">
                        <tr>
                            <th colspan="2">การตรวจเฉพาะ</th>
                            
                        </tr>
                        <tr>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >วันที่ตรวจ:</label>
                                    <div class="controls" > 
                                        <input type="text"  id="dateC" placeholder="คลิ๊กเพื่อเลือกวันที่" class="datepicker" style="" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="control-group">
                                    <label class="control-label" >ผู้ตรวจ:</label>
                                    <div class="controls" > 
                                        <input type="text"  id="nameC" placeholder="ชื่อและนามสกุลผู้ตรวจ" id="datepicker" style="" />
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="control-group">
                                    <label class="control-label" >การตรวจตา:</label>
                                    <div class="controls" > 
                                        <input class="spec"  id="eye" type="text" style="">
                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="control-group">
                                    <label class="control-label" >การตรวจเท้า:</label>
                                    <div class="controls" > 
                                        <input class="spec"  id="foot" type="text" style="">
                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="control-group">
                                    <label class="control-label" >การประเมินความซึมเศร้า:</label>
                                    <div class="controls" > 
                                        <input class="spec"  id="sad" type="text" style="">
                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="control-group">
                                    <label class="control-label" >ระดับคะแนน:</label>
                                    <div class="controls" > 
                                        <input class="spec"  id="point" type="text" style="">
                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2"><button class="btn btn-success" id="save6" style="color:#484848; width: 80px">บันทึก</button></td>
                        </tr>
                    </table>
                    
                </div>
                
                
                <div id="menu9" style="background-color:#2c3e50;height:auto;width:700px; border-radius:25px;color: #ecf0f1;padding-bottom: 30px;">

                   
                    
                </div>

            <div id="menu10" style="background-color:#27ae60;height:auto;width:900px; border-radius:25px;padding-bottom: 30px;">

                    
                    
            </div>
                
            <div id="menu11" style="background-color:#3498db;height:auto;width:700px; border-radius:25px;padding-bottom: 30px;">

                    <table class="ex5" id="table11" border="0">
                        <tr>
                            <th colspan="3">การเยี่ยมบ้าน</th>
                            
                        </tr>
                        <tr>
                            <td colspan="3" >
                               <div class="control-group">
                                    <label class="control-label" >การเยี่ยมครั้งที่:</label>
                                    <div class="controls" >                                         
                                        <input   type="text" id="visit_order" style="width:30px;"><br>
                                        <label style="padding-top: 15px;">ผู้เยี่ยม</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox" id="c1" class="css-checkbox lrg" />
				<label for="c1" name="c1_lbl" class="css-label lrg vlad">พยาบาล</label>
                                <input id="input_c1"  placeholder="กรอกชื่อพยาบาล" type="text" style="" disabled>                                
                            </td>
                            <td>
                                
                                <input type="checkbox" id="c2" class="css-checkbox lrg" />
				<label for="c2" name="c2_lbl" class="css-label lrg vlad">อสม.</label>
                                <input id="input_c2"  placeholder="กรอกชื่ออสม." type="text" style="" disabled>
                            </td>
                            <td>
                                <input type="checkbox" id="c3" class="css-checkbox lrg" />
				<label for="c3" name="c3_lbl" class="css-label lrg vlad">เจ้าหน้าที่</label>
                                <input id="input_c3"  placeholder="กรอกชื่อเจ้าหน้าที่" type="text" style="" disabled>
                            </td>
<!--                               <div class="control-group">
                                    <label class="control-label" >ผู้เยี่ยม:</label>
                                    <select id="Pvisit" style="width: 60%; text-align: center;">
                                        <option value="n">พยาบาล</option>
                                        <option value="osm">อสม.</option>
                                        <option value="staff">เจ้าหน้าที่</option>
                                    </select> 
                                </div>-->
                            
                        </tr>
                        <tr>
                            <td colspan="3">
                               <div class="control-group">
                                    <label class="control-label" >บุคคลที่ได้รับการเยี่ยม:</label>
                                    <select id="PRvisit" style="width: 20%; text-align: center;">
                                        <option value="pp">ผู้ป่วย</option>
                                        <option value="pd" id="pd">ผู้ดูแล</option>                                        
                                    </select><br>
                                    <input id="pdl" placeholder="กรอกชื่อผู้ดูแล" type="text" style="display:none;">
                                </div> 
                            </td>
                                                       
                        </tr>
                        <tr>
                            <td colspan="3">
                               <div class="control-group">
                                    <label class="control-label" >สภาวะแวดล้อมของครอบครัว:</label>
                                    <div class="controls" > 
                                        <textarea id="enviFam" style="width: 80%; height: 70px;"></textarea>
                                    </div>
                                </div> 
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><button class="btn btn-success" id="save9" style="color:#484848; width: 80px">บันทึก</button></td>
                            
                        </tr>
                       <!-- <tr>
                            <td colspan="3" style="padding-top:25px;">
                                <button class="btn btn-success" id="finish4" style="color:#484848; width: 200px;">เสร็จสิ้นการบันทึกในส่วนนี้</button>
                            </td>
                            
                        </tr> -->
                    </table>
                    
            </div>
                
                <div id="menu12" style="background-color:#27ae60;height:auto;width:700px; border-radius:25px;">

                    
                    
            </div>

            <div id="menu13">
                <button class="btn btn-success" id="finish6" style="color:#484848; width: 400px;">เสร็จสิ้นการบันทึกข้อมูลของผู้ป่วยรายนี้</button>
            </div>
<!-- <input class="btn btn-info" type="submit" value="Submit" style="margin-left:20%;">
<input class="btn btn-primary" type="reset" value="Reset"> -->


            </div>

            
            
            
            
            
            
 
            <div id="footer" style="background-color:#FFA500;clear:both;text-align:center;margin-top: 25px">
                </div>

        </div>

        


    </body>
</html>