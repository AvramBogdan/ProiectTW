<!DOCTYPE HTML> 

<HTML>

	<HEAD> 
    	    <Title>  TRAVLR  </Title> 
      
          <link rel="stylesheet" href=assets/css/HomeStyle.css type="text/css"> 

	</HEAD> 
             
  <BODY background ="assets/images/plane.jpg" >  

    <HEADER> 

        <H1>TRAVLR</H1>

    </HEADER>



    <a href ='Home' class="button"> Home </a> 
    <a href =# class="button"> Preferences </a> 
    <a href =# class="button"> Routes </a> 
    <a href =# class="button"> Info </a> 
    <a href =# class="button"> About </a> 
    <a href ='Contact' class="button"> Contact Us </a> 
    
   

 
    <div id="Total">


      <div class="weather">                 
        <div class="weather-customize" > 
          <div class="booked-weather-custom-160 color-137AE9" style="width:250px;" id="width3"> 
            <div>Weather,  
    
              <?php 

               $xml = simplexml_load_file('filename.xml');
               echo $xml->location->name;

              ?>

            </div> 

            <div class="booked-weather-custom-160-main more"> 
                <a class="booked-weather-custom-160-city"> 

                  <?php 

                      echo "Today -> ";
                      $d=strtotime("today");
                      echo date("Y-m-d", $d) . "<br>";

                    ?>

                 </a> 

                <div class="booked-weather-custom-160-degree booked-weather-custom-C wmd03"> 
                  <span>
                  
                   <?php

                     $temp=floatval($xml->forecast->time[0]->temperature['value']);
                     $temp = floor($temp);
                     echo $temp;

                   ?>


                  </span>
                </div> 

                <div class="booked-weather-custom-details"> 
                  <p>
                    <span>High: <strong><span class="plus"></span>
                     
                     <?php
   
                          $temp=floatval($xml->forecast->time[0]->temperature['max']);
                          $temp = floor($temp);
                          echo $temp;

                     ?>

                    <sup>°</sup></strong></span>
                    <span> Low: <strong><span class="plus"></span>

                    <?php
   
                          $temp=floatval($xml->forecast->time[0]->temperature['min']);
                          $temp = floor($temp);
                          echo $temp;

                     ?>


                    <sup>°</sup></strong></span>
                  </p> 

                  <p> Humidity: <strong>
                    
                    <?php
   
                          echo $xml->forecast->time[0]->humidity['value'];
                          echo $xml->forecast->time[0]->humidity['unit'];

                     ?>



                  </strong></p> 
                  <p>Wind: <strong>
                    
                    <?php

                        echo $xml->forecast->time[0]->windSpeed['mps']." mps<br>";
                        echo $xml->forecast->time[0]->windSpeed['name'];

                     ?>   

                  </strong></p> 

                </div> 
            </div> 

            <div class="booked-weather-custom-160-main more"> 
              <a href="//www.booked.net/weather/london-18114" class="booked-weather-custom-160-city"> 

                   <?php 
                      echo "Tomorrow -> ";
                      $d=strtotime("tomorrow");
                      echo date("Y-m-d", $d) . "<br>";

                    ?>

              </a> 
              
              <div class="booked-weather-custom-160-degree booked-weather-custom-C wmd03">
                <span><span class="plus"></span>

                  <?php

                     $temp=floatval($xml->forecast->time[8]->temperature['value']);
                     $temp = floor($temp);
                     echo $temp;

                    ?>

                </span>
              </div> 

              <div class="booked-weather-custom-details"> 
                
                <p>
                <span>High: <strong><span class="plus"></span>

                   <?php
   
                          $temp=floatval($xml->forecast->time[8]->temperature['max']);
                          $temp = floor($temp);
                          echo $temp;

                     ?>

                <sup>°</sup></strong></span>
                <span> Low: <strong><span class="plus"></span>

                   <?php
   
                          $temp=floatval($xml->forecast->time[8]->temperature['min']);
                          $temp = floor($temp);
                          echo $temp;

                     ?>

                <sup>°</sup></strong></span>
                </p> 

                <p>Humidity: <strong>
                  
                  <?php
   
                          echo $xml->forecast->time[8]->humidity['value'];
                          echo $xml->forecast->time[8]->humidity['unit'];

                    ?>


                </strong></p> <p>Wind: <strong>
                  
                  <?php

                        echo $xml->forecast->time[8]->windSpeed['mps']." mps<br>";
                        echo $xml->forecast->time[8]->windSpeed['name'];

                     ?>   

                </strong></p>
              </div> 
            </div> 

              <div class="booked-weather-custom-160-main more"> 
               <a href="//www.booked.net/weather/new-york-18103" class="booked-weather-custom-160-city"> 

                   <?php 
                      echo " Day after tomorrow -> ";
                      $d=strtotime("+2 Days");
                      echo date("Y-m-d", $d) . "<br>";

                    ?>
             


               </a> 
                  
                <div class="booked-weather-custom-160-degree booked-weather-custom-C wmd18">
                  <span><span class="plus"></span>

                    <?php

                     $temp=floatval($xml->forecast->time[17]->temperature['value']);
                     $temp = floor($temp);
                     echo $temp;

                     ?>

                 </span>
                 </div> 

                <div class="booked-weather-custom-details"> 
                
                <p>
                <span>High: <strong><span class="plus"></span>

                      <?php
   
                          $temp=floatval($xml->forecast->time[17]->temperature['max']);
                          $temp = floor($temp);
                          echo $temp;

                     ?>


                <sup>°</sup></strong></span>

                <span> Low: <strong><span class="plus"></span>

                      <?php
   
                          $temp=floatval($xml->forecast->time[17]->temperature['min']);
                          $temp = floor($temp);
                          echo $temp;

                      ?>




                <sup>°</sup></strong></span>
                </p> 

                <p>Humidity: <strong>
                  
                     <?php
   
                          echo $xml->forecast->time[17]->humidity['value'];
                          echo $xml->forecast->time[17]->humidity['unit'];

                     ?>




                </strong></p> <p>Wind: <strong>
                  
                   <?php

                        echo $xml->forecast->time[17]->windSpeed['mps']." mps<br>";
                        echo $xml->forecast->time[17]->windSpeed['name'];

                     ?>   



                </strong> </p> 
                </div> 

              </div> 
            </div> 
          </div>
        </div>

            <script type="text/javascript"> 

              var css_file=document.createElement("link"); 

              css_file.setAttribute("rel","stylesheet"); 
              css_file.setAttribute("type","text/css"); 
              css_file.setAttribute("href",'//s.bookcdn.com/css/weather.css?v=0.0.1');

               document.getElementsByTagName("head")[0].appendChild(css_file); 

               function setWidgetData(data) { 

                if(typeof(data) != 'undefined' && data.results.length > 0) { 
                  for(var i = 0; i < data.results.length; ++i) { 
                    var objMainBlock = document.getElementById('m-booked-custom-widget-3412'); 

                    if(objMainBlock !== null) { 
                      var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); 
                      objMainBlock.innerHTML = data.results[i].html_code;

                      if(copyBlock !== null) 
                        objMainBlock.appendChild(copyBlock); 
                    } 
                  } 
                } 
                      else { 
                        alert('data=undefined||data.results is empty'); 
                      } 
              } 

            </script>

    
    <!-- Start cssSlider.com -->
    <!-- Generated by cssSlider.com 2.1 -->
    <link href="cssslider_files/csss_engine1/style.css" rel="stylesheet">
    <!--[if IE]><link rel="stylesheet" href="cssslider_files/csss_engine1/ie.css"><![endif]-->
    <!--[if lte IE 9]><script type="text/javascript" src="cssslider_files/csss_engine1/ie.js"></script><![endif]-->
     <div class="csslider1 autoplay " style= "margin-left: 300px; margin-top: -400px">
    <input name="cs_anchor1" class="cs_anchor slide" id="cs_slide1_0" type="radio">
    <input name="cs_anchor1" class="cs_anchor slide" id="cs_slide1_1" type="radio">
    <input name="cs_anchor1" class="cs_anchor slide" id="cs_slide1_2" type="radio">
    <input name="cs_anchor1" class="cs_anchor slide" id="cs_slide1_3" type="radio">
    <input name="cs_anchor1" class="cs_anchor slide" id="cs_slide1_4" type="radio">
    <input name="cs_anchor1" class="cs_anchor slide" id="cs_slide1_5" type="radio">
    <input name="cs_anchor1" class="cs_anchor" id="cs_play1" type="radio" checked="">
    <input name="cs_anchor1" class="cs_anchor pause" id="cs_pause1_0" type="radio">
    <input name="cs_anchor1" class="cs_anchor pause" id="cs_pause1_1" type="radio">
    <input name="cs_anchor1" class="cs_anchor pause" id="cs_pause1_2" type="radio">
    <input name="cs_anchor1" class="cs_anchor pause" id="cs_pause1_3" type="radio">
    <input name="cs_anchor1" class="cs_anchor pause" id="cs_pause1_4" type="radio">
    <input name="cs_anchor1" class="cs_anchor pause" id="cs_pause1_5" type="radio">
    <ul>
      <li class="cs_skeleton"><img style="width: 100%;" src="cssslider_files/csss_images1/travel_safe...jpg"></li>
      <li class="num0 img slide"> <img title="Travel Safe.." alt="Travel Safe.." src="cssslider_files/csss_images1/travel_safe...jpg"></li>
      <li class="num1 img slide"> <img title="fast.." alt="fast.." src="cssslider_files/csss_images1/fast...jpg"></li>
      <li class="num2 img slide"> <img title="discover" alt="discover" src="cssslider_files/csss_images1/discover.jpg"></li>
      <li class="num3 img slide"> <img title="new places" alt="new places" src="cssslider_files/csss_images1/new_places.jpg"></li>
      <li class="num4 img slide"> <img title="Choose wise" alt="Choose wise" src="cssslider_files/csss_images1/choose_wise.jpg"></li>
      <li class="num5 img slide"> <img title="with TRAVLR" alt="with TRAVLR" src="cssslider_files/csss_images1/with_travlr.jpg"></li>
    </ul><div class="cs_engine"><a href="http://cssslider.com">http://cssslider.com</a> by cssSlider.com v2.1</div>
    <div class="cs_description">
      <label class="num0"><span class="cs_title"><span class="cs_wrapper">Travel Safe..</span></span></label>
      <label class="num1"><span class="cs_title"><span class="cs_wrapper">fast..</span></span></label>
      <label class="num2"><span class="cs_title"><span class="cs_wrapper">discover</span></span></label>
      <label class="num3"><span class="cs_title"><span class="cs_wrapper">new places</span></span></label>
      <label class="num4"><span class="cs_title"><span class="cs_wrapper">Choose wise</span></span></label>
      <label class="num5"><span class="cs_title"><span class="cs_wrapper">with TRAVLR</span></span></label>
    </div>
    <div class="cs_play_pause">
      <label class="cs_play" for="cs_play1"><span><i></i><b></b></span></label>
      <label class="cs_pause num0" for="cs_pause1_0"><span><i></i><b></b></span></label>
      <label class="cs_pause num1" for="cs_pause1_1"><span><i></i><b></b></span></label>
      <label class="cs_pause num2" for="cs_pause1_2"><span><i></i><b></b></span></label>
      <label class="cs_pause num3" for="cs_pause1_3"><span><i></i><b></b></span></label>
      <label class="cs_pause num4" for="cs_pause1_4"><span><i></i><b></b></span></label>
      <label class="cs_pause num5" for="cs_pause1_5"><span><i></i><b></b></span></label>
      </div>
    <div class="cs_arrowprev">
      <label class="num0" for="cs_slide1_0"><span><i></i><b></b></span></label>
      <label class="num1" for="cs_slide1_1"><span><i></i><b></b></span></label>
      <label class="num2" for="cs_slide1_2"><span><i></i><b></b></span></label>
      <label class="num3" for="cs_slide1_3"><span><i></i><b></b></span></label>
      <label class="num4" for="cs_slide1_4"><span><i></i><b></b></span></label>
      <label class="num5" for="cs_slide1_5"><span><i></i><b></b></span></label>
    </div>
    <div class="cs_arrownext">
      <label class="num0" for="cs_slide1_0"><span><i></i><b></b></span></label>
      <label class="num1" for="cs_slide1_1"><span><i></i><b></b></span></label>
      <label class="num2" for="cs_slide1_2"><span><i></i><b></b></span></label>
      <label class="num3" for="cs_slide1_3"><span><i></i><b></b></span></label>
      <label class="num4" for="cs_slide1_4"><span><i></i><b></b></span></label>
      <label class="num5" for="cs_slide1_5"><span><i></i><b></b></span></label>
    </div>
    <div class="cs_bullets">
      <label class="num0" for="cs_slide1_0"> <span class="cs_point"></span>
        <span class="cs_thumb"><img title="Travel Safe.." alt="Travel Safe.." src="cssslider_files/csss_tooltips1/travel_safe...jpg"></span></label>
      <label class="num1" for="cs_slide1_1"> <span class="cs_point"></span>
        <span class="cs_thumb"><img title="fast.." alt="fast.." src="cssslider_files/csss_tooltips1/fast...jpg"></span></label>
      <label class="num2" for="cs_slide1_2"> <span class="cs_point"></span>
        <span class="cs_thumb"><img title="discover" alt="discover" src="cssslider_files/csss_tooltips1/discover.jpg"></span></label>
      <label class="num3" for="cs_slide1_3"> <span class="cs_point"></span>
        <span class="cs_thumb"><img title="new places" alt="new places" src="cssslider_files/csss_tooltips1/new_places.jpg"></span></label>
      <label class="num4" for="cs_slide1_4"> <span class="cs_point"></span>
        <span class="cs_thumb"><img title="Choose wise" alt="Choose wise" src="cssslider_files/csss_tooltips1/choose_wise.jpg"></span></label>
      <label class="num5" for="cs_slide1_5"> <span class="cs_point"></span>
        <span class="cs_thumb"><img title="with TRAVLR" alt="with TRAVLR" src="cssslider_files/csss_tooltips1/with_travlr.jpg"></span></label>
    </div>
    </div>
    <!-- End cssSlider.com -->




    <div  class="clock" >  
    <script src="http://www.clocklink.com/embed.js"></script>
    <script type="text/javascript" language="JavaScript">

        obj=new Object;obj.clockfile="5012-black.swf";
        obj.TimeZone="Romania_Bucharest"; 
        obj.width=227;obj.height=75;
        obj.wmode="transparent";
        showClock(obj);

    </script>
    </div>

    </div>

         
    </BODY>
</HTML>


<?php

 $dom = new DomDocument(); 
 $dom -> load('http://api.openweathermap.org/data/2.5/forecast/?q='.'iasi'.'&mode=xml&APPID=a905f842072c2551a3b846b96e48a6d5');
 $dom -> save ('filename.xml');


 ?>

