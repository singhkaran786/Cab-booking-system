<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $pickup = $_POST["pickup"];
    $destination = $_POST["destination"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $passengers = $_POST["passengers"];

    // Now, you can use this data for processing or storing in the database
    // Example: Connect to the database and store the data
    $host = "localhost"; // Your database server hostname
    $username = "root"; // Your MySQL username
    $password = ""; // Your MySQL password
    $database = "cab booking"; // Your database name

    // Create a new MySQLi instance to connect to the database
    $conn = new mysqli($host, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Define your SQL query and insert the data into the database
    $sql = "INSERT INTO bookings (pickup, destination, date, time, passengers)
            VALUES ('$pickup', '$destination', '$date', '$time', '$passengers')";

    if ($conn->query($sql) === TRUE) {

				echo '<script language="javascript">';
        echo 'alert("Booking saved successfully!");';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>






<!Doctype>
<html>
<head>
<title>RIDE BOOKING</title>
<meta charset="utf-8">
		<meta name="viewport" content "width=device-width,initial-scale=1.0" >
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="index.js"></script>
<style>
   body {
      margin: 0;
      padding: 0;
    }

    #whatsapp-container {
      position: fixed;
      top: 50%;
      right: 20px; /* Adjust the right position as needed */
      transform: translateY(-50%);
    }

    #whatsapp-icon {
      background-color: #25d366; /* WhatsApp green color */
      color: #fff;
      border-radius: 50%;
      padding: 15px;
      cursor: pointer;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      font-size: 24px; /* Adjust the icon size as needed */
      position: relative;
    }

    #whatsapp-icon:hover::before {
      content: "Need any assistance? Click to chat on WhatsApp!";
      position: absolute;
      top: -30px;
      right: 120%; /* Adjust the distance from the icon as needed */
      padding: 10px;
      background-color: #333;
      color: #fff;
      border-radius: 5px;
      font-size: 14px;
      opacity: 0.8;
      white-space: nowrap;
    }
</style>
</head>
<body>
<div class="main">
<div class="wraper"></div>
<header class="header">
         <h1 align="center">BOOK CAR<img src="logo.jpeg"></h1>  
        </header>
	    <nav class="main-nav">
	     <ul>
	           <li> <a href="index.php">Home</a></li>
             <li> <a href="bookhere.php">Bookcar</a></li>
             <li> <a href="price.html">Price</a></li>
             <li> <a href="about.html">About us <a></li>
             
	     </ul>
<marquee scrollamount="17"><p font-size="30px"><img src="offer.png"width="60px" height="50px">GET 50% OFF ON BOOKING BETWEEN 10AM-12PM NOON <img src="offer.png"width="50px" height="50px"></p></marquee>
</nav>
<div class="content">
                <div class="container">
	            <img src="car1.jpg" alt="image1">
				
				<div class="bottom-left"></div>
                <div class="top-left"></div>
                <div class="top-right"></div>
                <div class="bottom-right"></div>
                <div class="centered">
									<form method="POST">
  <p>SEND ENQUIRY</p>
  <label for="pickup">Pickup Location:</label>
  <input type="text" id="pickup" name="pickup" required>

  <label for="destination">Destination:</label>
  <input type="text" id="destination" name="destination" required>

  <label for="date">Date:</label>
  <input type="date" id="date" name="date" required>

  <label for="time">Time:</label>
  <input type="time" id="appt-time" name="time" required>

  <label for="passengers">Passengers:</label>
  <input type="number" id="passengers" name="passengers" min="1" max="6" required>

  <button type="submit">Send</button>
</form></div>
				
				</div>
				<div class="box">
                <h2>We are here to make your ride/trip/marriage/college trip more exiting.Book your favorite car/cab here and make your ride exiting.
                We are giving upto 20% discount and experienced drivers are provided by us.</h2>
               
                <p align="center">AVAILABLE CARS</p>
                  <ul>
					<li>Swift</li>
					<li> Taxi</li>
					<li>Alto K10</li>
					<li> Amaze</li>
					<li>Traveller</li>
					<li>Honda city</li>
					<li>Winger</li>
					<li>Traveller</li>
					<li>Expresso</li>
					<li>Trax</li>
					<li>Cresta</li>
					<li>Verna</li>
					<li>Omni</li>
				</ul>	
             
				<div class="box-center">
			 <p align="center">POPULAR PLACES</p>
             <table>
			 <tr>
			 <td><img src="palampur.jfif" ><br>PALAMPUR</td>
			 <td><img src="dharmshala.jfif"><br>DHARMSHALA</td>
			 <td><img src="tea garden.jfif" ><br>TEA GARDEN</td>
			 </tr>
			 <tr>
			 <td><img src="bir billing.jfif" ><br>BIR</td>
			 <td><img src="nurpur fort.jfif" ><br>NURPUR FORT</td>
			 <td><img src="chamba.jfif" ><br>CHAMBA<br></td>
			 </tr>
			 <tr>
			<td><img src="shimla.jfif" ><br>SHIMLA</td>
			<td><img src="kangra mandir.jfif" ><br>KANGRA </td>
			<td><img src="banglamukhi temple.jfif"><br>BANGLAMUKHI</td>
		</tr>
		<tr>
			<td><img src="stadium.jpg" ><br>STADIUM</td>
			<td><img src="ram mandir.jfif" ><br>RAM MANDIR </td>
			<td><img src="haridwar.jfif"><br>HARIDWAR</td>
		</tr>
			 </table> 
			 </div>
			 <div class="container-bottom" bgcolor="yellow">
<table>
  <tr>
    <th><h2>LOCAL ROUTE</h2></th>
    <th><h2>LONGEST ROUTE</h2></th>
    <th><h2>TOUR PACKS</h2></th>
  </tr>
  <tr>
    <td>KANGRA</td>
    <td>KANGRA-SHIMLA</td>
    <td>KULL-MANALI-MANIKARAN</td>
  </tr>
  <tr>
    <td>BAIJNATH</td>
    <td>KULL-MANALI</td>
    <td>DHARAMSHALA-MACLEODGANJ</td>
  </tr>
  <tr>
    <td>NURPUR</td>
    <td>KANGRA-CHAMBA</td>
    <td>KINNAUR-SPITI VALLEY</td>
  </tr>
  <tr>
    <td>PALAMPUR</td>
    <td>LEH-LADAKH</td>
    <td>JAMMU-KASHMIR</td>
  </tr>
  <tr>
    <td>KANGRA FORT</td>
    <td>KANGRA-MANDI</td>
    <td>KANGRA-SHIMLA-KUFRI</td>
  </tr>
  <tr>
    <td>MASOORE TEMPLE</td>
    <td>KANGRA-DELHI</td>
    <td>FAMILY TOUR(FAMOUS TEMPLE)</td>
  </tr>
</table>

	 
	 </div>
			 
			 
			 
</div>
       <footer class="footer-distributed">

			<div class="footer-left">

				<h3>BOOKCAB</h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					
					·
					<a href="#">About</a>
					·
					
					·
					<a href="#">Contact</a>
					
				</p>

				<p class="footer-company-name">BOOKCAR.COM © 2023</p>
                
				<div class="footer-icons">
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-linkedin-in"></a>      
         

				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="#" method="post">

					<input type="text" name="email" placeholder="Email">
					<textarea name="message" placeholder="Message"></textarea>
					<button>Send</button>

				</form>
         <a  href="./admin module/login.php">ADMIN<a>
			</div>

		</footer>

    <div id="whatsapp-container">
    <a id="whatsapp-icon" href="https://wa.me/8544767626" target="_blank">
      <i class="fab fa-whatsapp"></i>
    </a>
  </div>

</body>
<html>