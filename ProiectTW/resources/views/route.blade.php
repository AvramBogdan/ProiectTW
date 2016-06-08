<?php 
						

	session_start();
	$routes = Session::get('routesArray');



?>

<!DOCTYPE html>
	<html>
    	<head>

   			<meta charset="utf-8">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>


    		<title>TRAVLR</title>

   			 <!-- Fonts -->
    		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    		<!-- Styles -->
    		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    		{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    		<link rel="stylesheet" href=assets/css/HomeStyle.css type="text/css">
    		<link rel="stylesheet" href=assets/css/box.css type="text/css">
            <link href="http://code.google.com/apis/maps/documentation/javascript/examples/default.css" rel="stylesheet" type="text/css" />
    	
		    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		    <script type="text/javascript">


  				var directionDisplay;
    			var directionsService = new google.maps.DirectionsService();
    			var map;

				function initialize() {

					var myLatLng = new google.maps.LatLng(0, -180);

  					var myOptions = {
    									zoom: 2,
    									center: myLatLng,
    									mapTypeId: google.maps.MapTypeId.TERRAIN
  									};

  					var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);



  		<?php
	
 
  			for ($j=0; $j<count($routes); $j++) {

  				 $lat1 = $routes[$j]->lat1; 
  				 $long1 = $routes[$j]->long1;

  				 $lat2 = $routes[$j]->lat2; 
  				 $long2 = $routes[$j]->long2;

  					

        ?>	
 
        			var lat1 = "<?php echo $lat1; ?>";
	   				var long1  = "<?php echo $long1; ?>";  
 				    var lat2 = "<?php echo $lat2; ?>";
   					var long2  = "<?php echo $long2; ?>";


   				 	var flightPlanCoordinates2 = [
    			 	new google.maps.LatLng(lat1,long1),
    			 	new google.maps.LatLng(lat2,long2) ]; 

      				var flightPath2 = new google.maps.Polyline({
    				path: flightPlanCoordinates2,
    				strokeColor: "#FF0000",
    				strokeOpacity: 1.0,
    				strokeWeight: 2


    			 });

     			flightPath2.setMap(map);
	  
 		 <?php

	  		}

	  	?>
     				
	  	}

       		 </script>
    	</head>


    <body id="app-layout" background="assets/images/plane.jpg" onload="initialize()">
    	<nav class="navbar navbar-default navbar-static-top">
        	<div class="container">
           		 <div class="navbar-header">

                	<!-- Collapsed Hamburger -->
                	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">

                    	<span class="sr-only">Toggle Navigation</span>
                    	<span class="icon-bar"></span>
                    	<span class="icon-bar"></span>
                    	<span class="icon-bar"></span>

                	</button>

               		 <!-- Branding Image -->
               		 <a class="navbar-brand" href="{{ url('/') }}"></a>

           		 </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/preferences') }}">Preferences</a></li>
                    <li><a href="{{ url('/route') }}">Routes</a></li>
                    <li><a href="{{ url('/info') }}">Info</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/contact') }}">Contacts</a></li>
                    <li><a href="{{ url('/calendar') }}">Calendar</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                                

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>

                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
       		</div>
    	</nav>


        <div id="map_canvas" style="width:50%;height:80%; margin-left:600px; margin-top: 50px; border: solid 5px;">
        
        </div>
        		<br />
        <div>

        </div>
     

 <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    
    <div class ="box1">
     	<p class="paragraph" >Route information</p>

     	<?php 
                

     			$routes = array(); 
     			$routes = Session::get('routesArray');

     			for ($i=0; $i<count($routes); $i++) { 
     				 		
     				 		echo '<p class="route">-- Route '. ($i + 1).'  [Airline:'.$routes[$i]->air.'] --</p>'; 

     				 		echo '<p class="simpleText"><strong class="from">From:</strong> '
     				 			 .$routes[$i]->country1.' --> '.$routes[$i]->city1.' --> '
     				 			 .$routes[$i]->name1.'</p>';

     				 		echo '<p class="simpleText"><strong class="from">To:</strong> '
     				 			 .$routes[$i]->country2.' --> '.$routes[$i]->city2.' --> '
     				 			 .$routes[$i]->name2.'</p><br/>';
     				 		
     				} 
     	?> 

    </div>


    <div class ="box2">
     	<p class="paragraph" >Meteo warnings</p> 

        <?php    

                $doms = array(); 
                $visited = array();
                $airports = array();
                $count=1; 


                $dom = new DomDocument(); /*
                $dom -> load('https://api.flightstats.com/flex/weather/rest/v1/xml/metar/'.$routes[0]->iata1.
                '?appId=ec0d6cfc&appKey=7cbb21df290815f85d3f902dcb1ce4bf');

                 $dom->save('Meteo.xml');

                 $xml = simplexml_load_file('Meteo.xml');
   
                 echo '<p class="simpleTextMeteo">[ Airline:'.$xml->appendix->airports->airport->name.' ]</p>'; 
                 echo '<p class="simpleText">Time: '.$xml->metar->reportTime.'</p>';
                 echo '<p class="simpleText">Wind: '.$xml->metar->conditions->wind->speedKnots.' speedKnots</p>';
                 echo '<p class="simpleText">Sky Conditions: '.$xml->metar->conditions->skyConditions.'</p>';
                 echo '<p class="simpleText">Wheater Conditions: '.$xml->metar->conditions->wheaterConditions.'</p>';
                 echo '<p class="simpleText">Temperature: '.$xml->metar->temperatureCelsius.' Celsius </p><br/>';
                 
                 array_push($visited,$routes[0]->iata1);*/



                for($i=0; $i<count($routes); $i++){ 

                    $ok=0;
                    $ok2=0;

                    for($j=0; $j<count($visited); $j++){

                            if($routes[$i]->iata2 == $visited[$j])
                                  $ok=1; 

                            if($routes[$i]->iata1 == $visited[$j])
                                 $ok2=1;

                    }

                    if ($ok == 0){ 

                        $dom -> load('https://api.flightstats.com/flex/weather/rest/v1/xml/metar/'.$routes[$i]->iata2.
                                 '?appId=ec0d6cfc&appKey=7cbb21df290815f85d3f902dcb1ce4bf');

                        $dom->save('Meteo.xml');

                        $xml = simplexml_load_file('Meteo.xml');
   
                        echo '<p class="simpleTextMeteo">[ Airline:'.$xml->appendix->airports->airport->name.' ]</p>'; 
                        echo '<p class="simpleText">Time: '.$xml->metar->reportTime.'</p>';
                        echo '<p class="simpleText">Wind: '.$xml->metar->conditions->wind->speedKnots.' speedKnots</p>';
                        echo '<p class="simpleText">Sky Conditions: '.$xml->metar->conditions->skyConditions.'</p>';
                        echo '<p class="simpleText">Wheater Conditions: '.$xml->metar->conditions->wheaterConditions.'</p>';
                        echo '<p class="simpleText">Temperature: '.$xml->metar->temperatureCelsius.' Celsius </p><br/>';
                        array_push($visited,$routes[$i]->iata2);
                       

                    } 

                    if($ok2 == 0){

                        $dom -> load('https://api.flightstats.com/flex/weather/rest/v1/xml/metar/'.$routes[$i]->iata1.
                                 '?appId=ec0d6cfc&appKey=7cbb21df290815f85d3f902dcb1ce4bf');

                        $dom->save('Meteo.xml');

                        $xml = simplexml_load_file('Meteo.xml');
   
                        echo '<p class="simpleTextMeteo">[ Airline:'.$xml->appendix->airports->airport->name.' ]</p>'; 
                        echo '<p class="simpleText">Time: '.$xml->metar->reportTime.'</p>';
                        echo '<p class="simpleText">Wind: '.$xml->metar->conditions->wind->speedKnots.' speedKnots</p>';
                        echo '<p class="simpleText">Sky Conditions: '.$xml->metar->conditions->skyConditions.'</p>';
                        echo '<p class="simpleText">Wheater Conditions: '.$xml->metar->conditions->wheaterConditions.'</p>';
                        echo '<p class="simpleText">Temperature: '.$xml->metar->temperatureCelsius.' Celsius </p><br/>';
                        array_push($visited,$routes[$i]->iata1);




                    }

                        
                }
                
           

        ?>
                            



    </div>

	</body>

</html>
