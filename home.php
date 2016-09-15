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
                         <input type="submit" onclick="ButtonClick()" value ="Create Journey"
                         class="btn btn-info btn-block">
                   </div>

                   </div>
                 </div>
         </form>
       </div>
       <div id="data" >
       <form>
           <fieldset>
       <input type= "text" name="lat">
       <input type= "text" name="lng">
       <input type= "text" name="street_number">
       <input type= "text" name="route">
       <input type= "text" name="sublocality">
       <input type= "text" name="administrative_area_level_1">
       <input type= "text" name="postal_code">
       <input type= "text" name="country">
       <input type="submit" onclick="ButtonClick()" value ="Create Journey"
       class="btn btn-info btn-block">
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
         var streetNum = document.getElementByName('street_number').value;
         var streetAdd = document.getElementByName('route').value;
         var sub= document.getElementByName('sublocality').value;
         var City= document.getElementByName('administrative_area_level_1').value;
         var Country= document.getElementByName('country').value;
         var getAddress = new GetAddress(streetNum, streetAdd, sub, City, Country);
         document.body.innerHTML = getAddress.fullAddress();

      }
       </script>
         </body>
