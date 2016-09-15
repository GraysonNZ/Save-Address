<?php
include ('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <title>Home </title>
             <link rel='stylesheet' type='text/css' href='../bootstrap/dist/css/bootstrap.min.css'/>
               <link rel="stylesheet" type="text/css" href="../style.css">
               <script src = "../typescript.js"></script>
               <script>
               function ButtonClick(){
                 var streetNum = document.getElementByName('street_number').value;
                 var streetAdd = document.getElementByName('route').value;
                 var sub= document.getElementByName('sublocality').value;
                 var City= document.getElementByName('administrative_area_level_1').value;
                 var Country= document.getElementByName('country').value;
                 var getAddress = new GetAddress(streetNum, streetAdd, sub, City, Country);
                 console.log(getAddress);
                 document.body.innerHTML = getAddress.fullAddress();

              }
               </script>
         </head>

         <body>
             <div class = "panel-body">
         <form id= "create_journey" role= "form">
             <div class="row">
                     <div class="col-md-3 col-sm-3 col-xs-3">
             <div class= "form-group">
                         <input type="text" name ="geocomplete" class="form-control input-sm"
                         id ="geocomplete" placeholder="Enter an origin location">
              </div>
               </div>
                 </div>

                 <div class="row">
                     <div class="col-md-3 col-sm-3 col-xs-3">
                   <div class= "form-group">
                         <input type="button" onclick="ButtonClick()" value ="Create Address"
                         class="btn btn-info btn-block">
                   </div>

                   </div>
                 </div>
         </form>
       </div>
       <div id="data" >
       <form>
           <fieldset>
       <input type= "hidden" name="lat" id="lat">
       <input type= "hidden" name="lng" id="lng">
       <input type= "hidden" name="street_number" id="street_number">
       <input type= "hidden" name="route" id="route">
       <input type= "hidden" name="sublocality" id= "sublocality">
       <input type= "hidden" name="administrative_area_level_1" id="administrative_area_level_1">
       <input type= "hidden" name="postal_code" id="postal_code">
       <input type= "hidden" name="country" id="country">
           </fieldset>
       </form>
       </div>
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDds3ye4l7riZWcTDSIcgHqFOrj6ZAOn3g&libraries=places"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
       <script src="../lib/jquery.geocomplete.js"></script>
       <script>
            $(function(){
               $("#geocomplete").geocomplete({
                   details: "form",
                   types: ["geocode", "establishment"],
               });
            });


       </script>
       <script src = "../typescript.js"></script>
       <script>
       function ButtonClick(){
         var streetNum = document.getElementById('street_number').value;
         var streetAdd = document.getElementById('route').value;
         var sub= document.getElementById('sublocality').value;
         var City= document.getElementById('administrative_area_level_1').value;
         var Country= document.getElementById('country').value;
         var getAddress = new GetAddress(streetNum, streetAdd, sub, City, Country);
         document.body.innerHTML = getAddress.fullAddress();

      }
       </script>
         </body>
