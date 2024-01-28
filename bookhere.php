<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Fname = $_POST["Fname"];
    $Lname = $_POST["Lname"];
    $Anumber = $_POST["Anumber"];
    $Tperson = $_POST["Tperson"];
    $date = $_POST["date"];
    $Pickuplocation = $_POST["Pickuplocation"];
    $Droplocation = $_POST["Droplocation"];
    $time = $_POST["time"];
    $selectedCar = $_POST["cars"];

    // Define the database connection parameters
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

    // Your SQL query goes here
    $sql = "INSERT INTO `mainform` (`first_name`, `last_name`, `Aadhar_number`, `person`, `date`, `Pickup_location`, `Drop_location`, `time`, `choose_car`)
        VALUES ('$Fname', '$Lname', '$Anumber', '$Tperson', '$date', '$Pickuplocation', '$Droplocation', '$time', '$selectedCar')";


    if ($conn->query($sql) === TRUE) {
      echo '<script language="javascript">';
      echo 'alert("Booking saved successfully!Our team will contact you soon!");';
      echo '</script>';
    
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close the database connection when you're done
    $conn->close();
}
?>



<!doctype>
<html>
<head>
<title>RIDE BOOKING</title>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0" >
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="style2.css">
<style>
  form {
    background-color: ghostwhite;
    width: 60%;
    margin: 50px auto; /* Adjusted top margin for space */
    padding: 40px; /* Increased padding */
    border: 1px solid #ccc;
    border-radius: 5px;
}

form p {
    font-size: 24px;
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-align: center; /* Center the text within the form paragraph */
}

label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block; /* Display each label on a new line */
}

input {
    padding: 10px;
    margin-bottom: 15px; /* Increased margin between inputs */
    border-radius: 5px;
    border: 1px solid #ccc;
    width: 100%; /* Set inputs to take full width */
}

button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    display: block; /* Render button as block element */
    margin-top: 20px; /* Space between button and form */
}

button:hover {
    background-color: #0069d9;
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
             <li> <a href="about.html">About us</a></li>
			 <p>INSTANT BOOKING 24*7 SERVICE<p>
	     </ul>
</nav>
<div class="form">
<form method="post">
                <p>ENTER THE DETAILS</p>

                <label for="name">FIRST NAME:</label>
                <input type="text" id="name" name="Fname" required>

                <label for="Lname">LAST NAME:</label>
                <input type="text" id="Lname" name="Lname" required>

                <label for="number">ADHARCARD NUMBER:</label>
                <input type="text" id="number" name="Anumber" required>

                <label for="Person">PERSON:</label>
                <input type="Number" id="Person" name="Tperson" min="1" max="6" required>

                <label for="date">PICKUP DATE:</label>
                <input type="date" id="date" name="date" required>

                <label for="Pickup">PICKUP LOCATION:</label>
                <input type="text" id="Pickup" name="Pickuplocation" required>

                <label for="Drop">DROP LOCATION:</label>
                <input type="text" id="Drop" name="Droplocation" required>

                <label for="appt-time">PICKUP TIME:</label>
                <input type="time" id="appt-time" name="time" required>

                <label for="cars">Choose a car:</label>
                <select name="cars" id="cars">
                    <option value="volvo">SELECT</option>
                    <option value="volvo">ALTOK10</option>
                    <option value="saab">AMAZE</option>
                    <option value="mercedes">SWIFT</option>
                    <option value="audi">CRESTA</option>
                </select>
                <button type="submit">Book Now</button>
            </form>
</div>
        <footer class="footer-distributed">

			<div class="footer-left">

				<h3>BOOKCAB</h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">BOOKCAB.COM © 2023</p>

				<div class="footer-icons">

         

				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="#" method="post">

					<input type="text" name="email" placeholder="Email">
					<textarea name="message" placeholder="Message"></textarea>
					<button>Send</button>

				</form>

			</div>

		</footer>
</body>
</html>