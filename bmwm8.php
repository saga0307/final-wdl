<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "carproject";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT description, pics,fuel_cons ,co2_emi FROM carstore";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	 $row = $result->fetch_assoc();
	
     echo "id: " . $row["username"]. " - Name: " . $row["name"]. " " . $row["password"]. "<br>";
	} else {
	  echo "0 results";
	}
	$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="rent.css">
  <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Vollkorn&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Vollkorn&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Armata&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mada&family=Vollkorn&display=swap" rel="stylesheet">


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">



<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
</head>


<style type="text/css">
  

  .nav {

  position: fixed;
  border-bottom: 2px solid white;

/*  position: absolute; */
  height: 30px;
      color: white;
    top: 0%;
    left: 0%;
    

    /*transform: translate(-50%, -50%);*/
    padding: 100px;
   margin-top: 00px;
   margin-bottom: 40px;
   margin-left: 20px;

}

.koko{


}

.bg{
  background:  linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url("bmwm8.jpg");
  background-repeat: no-repeat;
  width: 100%;
    background-size: cover;
    opacity: 2;
    margin-bottom: 60px;
    
}


</style>
<body>

<!----------------------------------------first nav--->
   <div class="bg">
     <div class="koko" style="margin-left:50px">
                <nav class="animated fadedown" >
                      <a class="hi" href="#" id="welcome">Home</a>
                      <a class="hi"href="#">Hire Car</a>
                      <a class="hi"href="#">Car Spa</a>
                      <a class="hi"href="#">Innovation</a>
                      <a class="hi"href="#">About Us </a>
                      <a class="hi"href="="  id="lo"> |  WorthWheels</a>
                 </nav>
      </div>
    </div>
 <!--black band--  
    <div class="fluid-container" style="background-color: black; width: 180%; height: 60px; margin-top: 10px; ">

       
    </div>
 <!--black band-- 
<div class="container"style="margin-left:0px;width: 120%;">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators --
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides --
    <div class="carousel-inner" >

      <div class="item active">
        <img src="hatchback.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>HATCHBACK</h3>
          <p>Price starting at ₹70/hr (Fuel free)</p>
        </div>
      </div>

      <div class="item">
        <img src="hondasedan.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>SEDAN</h3>
          <p>Price starting at ₹95/hr (Fuel free)</p>
        </div>
      </div>
    
      <div class="item">
        <img src="SUV.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>SUV</h3>
          <p>Price starting at ₹125/hr (Fuel free)</p>
        </div>
      </div>


      <div class="item">
        <img src="audi.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>LUXURY</h3>
          <p>Price starting at ₹240/hr (Fuel free)</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls --
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!--heading-->









<!--heading-->

<h2 style="justify-content: center; padding-right:150px; padding-left:150px;font-size: 38px;font-family: 'Source Sans Pro', sans-serif; word-spacing: 5px; margin-bottom: 80px;"><?php echo $row["description"] ?></h2>

<!--heading-->



<!--emmision consumption-->

<div class="container" style="border-bottom: 1px solid lightgrey; border-top: 1px solid lightgrey;margin-bottom: 50px; width: 70%;  ">
  <h3 style="justify-content: center; padding: 8px; padding-left: 150px; padding-right: 150px;font-family: 'Source Sans Pro', sans-serif;margin-top: 10px; font-size: 15px; display: inline-block; "><b>CO2 emissions   <?php echo $row["co2_emi"] ?>
  </h3>  &nbsp &nbsp    &nbsp    &nbsp       Fuel consumption <?php echo $row["fuel_cons"] ?>
  </h3>

 
  
</div>

<!--emmision consumption-->

<!--advantages-->
<div class="container" style="margin-top:50px;  height: 80%;  margin-left: 190px; margin-bottom: 100px;">
       <div class="row" style=" width: 100%"  data-aos="slide-up">
         <div class="div1" style=" width: 40%;  display: ">
             <h2 style=" padding-left:30px; word-spacing: 5px; font-size: 28px; font-family: 'Source Sans Pro', sans-serif; word-spacing: 5px;"> <b> Strong reasons for the BMW 2 Series Coupe
                    Designed for rebels with star appeal</b></h2>
          </div>

          <div class="div2" style="padding-left: 5px;     width: 55%;   font-family: 'Source Sans Pro', sans-serif;"  data-aos="slide-up">
                 
                     <ol>
                          <li>
                            <h4 style="font-size: 18px;"> <b>Designed for rebels with star appeal </b></h4>
                          </li>

                          <li>
                            <h2 style="font-size: 18px;"> <b>Sporty rear-wheel drive gets adrenalin pumping</b></h2>
                          </li>


                          <li>

                              <h2 style="font-size: 18px;"> <b>Thanks to Launch Control, go from 0 to pulse-racing with one touch</b></h2>
                           
                          </li>


                          <li>  


                              <h2 style="font-size: 18px;"> <b>With BMW ConnectedDrive, check e-mail at any time</b></h2>
                          </li>



                          <li>

                              <h2 style="font-size: 18px;"> <b>Operate the infotainment system by touch</b></h2>
                          </li>
                     </ol>
              </div>
        </div>
   </div>






<!--advantages-->

<!-- content-->

    <!--row1-->

   <div class="container" style="width: 1200px;  height: 450px;  margin-bottom: 70px;">
     <div class="row" style=" width: 100%  ;  margin-bottom: 30px;border-bottom: 2px solid lightgrey;"   ><!-- col 1-->
      <div data-aos="slide-up">
            <div class="container img-responsive" style=" height:360px; margin-left: 40px; width: 50%; "  >
            	<?php echo '<img src="'.json_decode($row["pics"])[1].'"/>' ?>
                 <!--   <img src="bmwm82.jpg" style=" margin-left:-15px; height:400px ">-->


             </div>
      </div>

                <div class="container" style="margin-top: -250px; width: 40%; margin-left:650px; margin-bottom:50px; " data-aos="slide-up" >
                  <!-- col 1-->
                  
                    <h1 style=" font-family: 'Source Sans Pro', sans-serif;"  >
                          <b>
                             Your BMW 2 Series Coupe is waiting
                          </b>
                    </h1>
              
                    <p style="font-size: 25px;  font-family: 'Source Sans Pro', sans-serif;"  >
                      Sets new standards all the way down the line: the BMW 2 Series Coupe. Find out for yourself and discover what will excite you metre for metre.
                  </p>
                </div>

       
    

         


     </div>
  </div>

<!--row1-->


<!--row2-->
  <div class="row" style="margin-top: 100px; width:100%;margin-left:0px; margin-bottom: 200px;" data-aos="slide-up">
    <div style=" margin-left:80px;width: 30%;margin-top:270px;  " >
        <h2 style="font-family: 'DM Serif Display', serif;">
            "The car’s Wi-Fi hotspot allows up to ten end devices to surf the net."
        </h2>
       <div   style="margin-left:450PX; margin-right: 150px; margin-top: -260px;  " data-aos="slide-up">
       	<?php echo '<img src="'.json_decode($row["pics"])[2].'"/>' ?>
         <!-- <img src="bmwm8int.jpg" style="width: 700px; height: 500px; ">-->
      </div>


    </div>
      
    
  </div>

<!--row2-->

    


<!--row3-->

<div  style="margin-left: 330px;  width:750px; margin-bottom: 50px;" data-aos="slide-up">
 	<?php echo '<img src="'.json_decode($row["pics"])[3].'"/>' ?>
</div>
  <div class="container" style="margin-left: 630px; text-align:right;  width:380px; "  data-aos="slide-up">
    <h3 style=" font-family:'DM Serif Display', serif;">  " The tested M8 got excellent grip from its Michelin Pilot Sport 4S ZR20 performance-rated tires."</h3>

    
  </div>


<!--row-3->






<!-- content-->








   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<!--for carousel section-->







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
     
      duration:700
    });
  </script>

  <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

      
    </body>
    </html>

    
        

