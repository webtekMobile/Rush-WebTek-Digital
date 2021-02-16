<?php
session_start();
include('../database/connect.php');
if($_SESSION['admin'] == '')
{
  header("location:adminlogin.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.bootstrapdash.com/demo/azia/v1.0.0/template/dashboard-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 15:01:47 GMT -->
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Rusk</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">
<style>
#map-canvas {
height: 400px;
width: 100%;
}
</style>
  </head>
  <body>

    <?php include('include/headernav.php');?>

    <div class="az-content az-content-profile">
      <div class="container mn-ht-100p">
        <div class="content-wrapper w-100">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                 
                  <div class="row grid-margin">
                    <div class="col-12">
                      <a href="map.php" class="btn btn-success">Map</a>
                      <hr>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                     <!--  <label for="">Address: <input id="pac-input" type="text" placeholder="Enter location" size="104"></label><br>
<label for="">Lat: <input type="text" class="latitude"></label>
<label for="">Long: <input type="text" class="longitude"></label>

<label for="">City <input type="text" id="city" placeholder="City"></label>
<label for="">Country <input type="text" id="country" placeholder="country"></label>
<label for="">Zip code <input type="text" id="zip" placeholder="zipcode"></label> -->
                   <div id="map-canvas"></div>
                    </div>
                  </div>
    
                   <div class="row pandey1">
                    <div class="col-sm-12">
                     
                     <?php 
                     $vid=3;
                         $query="SELECT tbl_review.*, tbl_users.* FROM tbl_review JOIN tbl_users ON tbl_review.user_id = tbl_users.user_id WHERE tbl_review.vendor_id = '$vid' and tbl_review.status='1' and tbl_users.status='1'";

                         $res=mysqli_query($con,$query);
                         $a=mysqli_num_rows($res);
                         if ($a > 0)
                          {
                          
                        while ($row=mysqli_fetch_assoc($res))
                         {
                         



                      ?>

                      <div class="row pandey2">
                      <div class="col-sm-3">
                        <a href="clientdetail.php">
                        &nbsp;<strong>Rush 1 </strong>
                      </a>
                      </div>
                      <div class="col-sm-2">
                        <p style="padding: 15px">
                       <strong>Bar Tartine, sodeco</strong>
                    </p>
                      </div>
                      
                      <div class="col-sm-3">
                        <p style="padding: 15px">

                         <strong> Abbas building, Mansourieh main road</strong>
                         
                       </p>
                      </div>
                      <div class="col-sm-2">
                        <p style="padding: 15px">

                        <strong> John Karl Aoun</strong>
                       
                       </p>
                      </div>
                      <div class="col-sm-2">
                        <p style="padding: 15px">
                      Call Client<i class="typcn icon typcn-phone "></i>
                    </p>
                      </div>
                    </div>
                    <hr>

                  <?php
                      }
                    }
                    else
                    {
                      echo "Data Not Found";
                    }
                  ?>
                  </div>
                    
                    
                </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- container -->
    </div><!-- az-content -->

   


    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="lib/chart.js/Chart.bundle.min.js"></script>
    <script src="lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>

    <script src="js/azia.js"></script>
   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5m-C32piW2yiT3kevVbvLfHXsLsPTWik&libraries=places&callback=initialize"></script>
<script>
  
function initialize() {


var mapOpWtions, map, marker, searchBox, city,alok,circle,
infoindow = '',

addressEl = document.querySelector( '#pac-input' ),
latEl = document.querySelector( '.latitude' ),
longEl = document.querySelector( '.longitude' ),
element = document.getElementById( 'map-canvas' );
city = document.querySelector( '#city' );
country1 = document.querySelector( '#country' );
zip1 = document.querySelector( '#zip' ),

mapOptions = {
// How far the maps zooms in.
zoom: 8,


// Current Lat and Long position of the pin/
center: new google.maps.LatLng( 26.89421, 80.9618303 ),


// center : {
// lat: -34.397,
// lng: 150.644
// },
disableDefaultUI: true, // Disables the controls like zoom control on the map if set to true
zoomControl:false,
scrollWheel: true, // If set to false disables the scrolling on the map.
draggable: false,

 // If set to false , you cannot move the map around.
// mapTypeId: google.maps.MapTypeId.HYBRID, // If set to HYBRID its between sat and ROADMAP, Can be set to SATELLITE as well.
// maxZoom: 11, // Wont allow you to zoom more than this
// minZoom: 9 // Wont allow you to go more up.

};

/**
* Creates the map using google function google.maps.Map() by passing the id of canvas and
* mapOptions object that we just created above as its parameters.
*
*/


// Create an object map with the constructor function Map()
map = new google.maps.Map( element, mapOptions ); // Till this like of code it loads up the map.

/**
* Creates the marker on the map
*
*/
marker = new google.maps.Marker({
position: mapOptions.center,
map: map,
// icon: 'http://pngimages.net/sites/default/files/google-maps-png-image-70164.png',
draggable: true,

});



/////////////////////7yi7yii7i


   const locations = [
              {lat: 26.455555, lng: 80.552},
              {lat: 26.458623, lng: 80.00222},
              {lat: 26.458623, lng: 80.111222},
              {lat: 26.445233, lng: 80.005888222},
              {lat: 26.99999, lng: 80.9999},
              {lat: 26.444, lng: 80.7777},
              {lat: 26.1111, lng: 80.2222},
              {lat: 26.25386, lng: 80.078585}
          ];
          locations.forEach((location) => {
              new google.maps.Marker({
                  position: location,
                  map: map                      
              });   
          });
          
circle = new google.maps.Circle({
  map: map,
  radius: 5111,    // 10 miles in metres
  fillColor: 'green'
});

circle.bindTo('center', marker, 'position');


var polyline = new google.maps.Polyline({
    path: [
            new google.maps.LatLng(26.89421, 80.9618303), 
            new google.maps.LatLng(26.1111, 80.2222) 
          ],
   geodesic : true,


      strokeColor : 'green',
      strokeOpacity : 1,
      strokeWeight : 6,
      map : map,



});

 polyline.setMap(map);   
    // assign to global var path
    path = polyline;


var latLngBounds = new google.maps.LatLngBounds();
for(var i = 0; i < path.length; i++) {
  latLngBounds.extend(path[i]);
  // Place the marker
  new google.maps.Marker({
    map: map,
    position: path[i],
    title: "Point " + (i + 1)
  });
}
// Create the polyline's points
for(var i = 0; i < 5; i++) {
  // Create a random point using the user current position and a random generated number.
  // The number will be once positive and once negative using based on the parity of i
  // and to reduce the range the number is divided by 10
  path.push(
    new google.maps.LatLng(
      position.coords.latitude + (Math.random() / 10 * ((i % 2) ? 1 : -1)),
      position.coords.longitude + (Math.random() / 10 * ((i % 2) ? 1 : -1))
    )
  );
}
///////////////////////////////////

alok='ksdhidhvkdfhvkufdhukhfhjfhvfdhhdhdhgvjldfbjkdfhbgfhfd';
var infowindow= new google.maps.InfoWindow({

  content:alok
});

var circle = new google.maps.Circle({
  map: map,
  radius: 5111,    // 10 miles in metres
  fillColor: 'green'
});

circle.bindTo('center', marker, 'position');


google.maps.event.addListener(marker,'click',function(){
infowindow.open(map,marker); 
});


// google.maps.event.addListener(marker,'click',function(){
// infowindow2.open(map,marker); 
// });


//////////////////////////////yulyy
/**
* Creates a search box
*/
searchBox = new google.maps.places.SearchBox( addressEl );

/**
* When the place is changed on search box, it takes the marker to the searched location.
*/
google.maps.event.addListener( searchBox, 'places_changed', function () {
var places = searchBox.getPlaces(),
bounds = new google.maps.LatLngBounds(),
i, place, lat, long, resultArray,
address = places[0].formatted_address;

console.log(address);
for( i = 0; place = places[i]; i++ ) {
bounds.extend( place.geometry.location );
marker.setPosition( place.geometry.location ); // Set marker position new.
}

map.fitBounds( bounds ); // Fit to the bound
map.setZoom( 15 ); // This function sets the zoom to 15, meaning zooms to level 15.
// console.log( map.getZoom() );

lat = marker.getPosition().lat();
long = marker.getPosition().lng();
latEl.value = lat;
longEl.value = long;

resultArray = places[0].address_components;
// console.log(resultArray);
// Get the city and set the city input value to the one selected
for( var i = 0; i < resultArray.length; i++ ) {
if ( resultArray[ i ].types[0] && 'administrative_area_level_2' === resultArray[ i ].types[0] ) {
citi = resultArray[ i ].long_name;
city.value = citi;
}
}
for( var i = 0; i < resultArray.length; i++ ) {
console.log(resultArray[ i ].types[0]);
if ( resultArray[ i ].types[0]=='route' ) {
ss = result[ i ].formatted_address;
console.log( ss );
addressEl.value = ss;

}


}
for( var i = 0; i < resultArray.length; i++ ) {
//console.log(resultArray[ i ].types[0]=);

if ( resultArray[ i ].types[0]=='postal_code') {
zip = resultArray[ i ].long_name;

}
}
for( var i = 0; i < resultArray.length; i++ ) {
//console.log(resultArray[ i ].types[0]=);

if ( resultArray[ i ].types[0]=='country') {
country = resultArray[ i ].long_name;

}
}







// Closes the previous info window if it already exists
if ( infoWindow ) {
infoWindow.close();
}
/**
* Creates the info Window at the top of the marker
*/
infoWindow = new google.maps.InfoWindow({
content: addresss
});

infoWindow.open( map, marker );
} );


/**
* Finds the new position of the marker when the marker is dragged.
*/
google.maps.event.addListener( marker, "dragend", function ( event ) {
var lat, long, address, resultArray, citi;

console.log( 'i am dragged' );
lat = marker.getPosition().lat();
long = marker.getPosition().lng();


var geocoder = new google.maps.Geocoder();
geocoder.geocode( { latLng: marker.getPosition() }, function ( result, status ) {
if ( 'OK' === status ) { // This line can also be written like if ( status == google.maps.GeocoderStatus.OK ) {
//
address = result[0].formatted_address;
resultArray = result[0].address_components;
pinArray = result[0].address_components.long_name;
//console.log(result);

lat = marker.getPosition().lat();
long = marker.getPosition().lng();
latEl.value = lat;
longEl.value = long;
// console.log(result);
// Get the city and set the city input value to the one selected
for( var i = 0; i < resultArray.length; i++ ) {
//console.log(resultArray[ i ].types[0]=);
if ( resultArray[ i ].types[0]=='administrative_area_level_2' ) {
citi = resultArray[ i ].long_name;
console.log( citi );
city.value = citi;

}


}
for( var i = 0; i < resultArray.length; i++ ) {
console.log(resultArray[ i ].types[0]);
if ( resultArray[ i ].types[0]=='route' ) {
ss = result[ i ].formatted_address;
console.log( ss );
addressEl.value = ss;

}


}

for( var i = 0; i < resultArray.length; i++ ) {
//console.log(resultArray[ i ].types[0]=);

if ( resultArray[ i ].types[0]=='postal_code') {
zip = resultArray[ i ].long_name;

}
}
for( var i = 0; i < resultArray.length; i++ ) {
//console.log(resultArray[ i ].types[0]=);

if ( resultArray[ i ].types[0]=='country') {
country = resultArray[ i ].long_name;

}
}


zip1.value=zip;
country1.value=country
addressEl.value = address;

document.getElementById("pac-input").value=address;
latEl.value = lat;
longEl.value = long;


} else {
console.log( 'Geocode was not successful for the following reason: ' + status );
}

// Closes the previous info window if it already exists
if ( infoWindow ) {
infoWindow.close();
}

/**
* Creates the info Window at the top of the marker
*/
infoWindow = new google.maps.InfoWindow({
content: address
});

infoWindow.open( map, marker );
} );
});


}
</script>
  </body>


</html>
