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
                 var name= document.getElementById('person_name').value;
                 var streetNum = document.getElementById('street_number').value;
                 var streetAdd = document.getElementById('route').value;
                 var sub= document.getElementById('sublocality').value;
                 var City= document.getElementById('administrative_area_level_1').value;
                 var Country= document.getElementById('country').value;
                 var getAddress = new GetAddress(streetNum, streetAdd, sub, City, Country);


                 document.getElementById('message_area').innerHTML=   getAddress.fullAddress();
                  return false;
              }
               </script>
         </head>

         <body>
           <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please Enter Person Name and Address Below <small>Try it!</small></h3>
			 			</div>
             <div class = "panel-body">
<form onsubmit="return false">

           <div class= "form-group">
                       <input type="text" name ="person_name" class="form-control input-sm"
                       id ="person_name" placeholder="Full name of person">
            </div>

             <div class= "form-group">
                         <input type="text" name ="geocomplete" class="form-control input-sm"
                         id ="geocomplete" placeholder="Enter the address">
              </div>




         </form>
         <div class= "form-group">
               <input type="button" name="button" onclick="ButtonClick()" value ="Save Address"
               class="btn btn-info btn-block">
         </div>
         <div id= "message_area"> </div>
         <div id= "note">
           <p> Note: This database will not save to the database. The database server is currently inactive. (This page is using google maps places api, typescript and bootstrap) </p>
         </div>

       </div>
     </div>
   </div>
 </div>
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

         </body>
