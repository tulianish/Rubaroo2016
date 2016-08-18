<html>
    <head>
    	<link rel="icon" href="resources/images/Srmseal.png" type="image/gif" sizes="16x16">
        <script type="text/javascript" src="scripts/common.js"></script>
        <link rel="stylesheet" href="common.css">
        <link rel="stylesheet" href="eventpage.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>    	
    </head>
    <body>
     <img src="resources/images/12.jpg" height="200" width="1050"> </br>   
        
		<main>
		<?php
		$eid = $_GET['id'];
		?>
		<?php
        	$servername = "localhost";
		$username = "srmrubar_admin";
		$password = "srm1234";
		$dbname = "srmrubar_main";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
									} 

		$sql = "SELECT name,ec,ecn FROM event WHERE id=$eid";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
        		echo "<br/><p> Event Name : " . $row["name"]. "</p>" ;
				echo "<p>Event Coordinators : " .$row["ec"]. "</p>";
				echo "<p>Phone : " .$row["ecn"]. "</p>";
				echo "<br/> For more information/registration,"." <a href='#'>Click Here ... </a>";
    				}
		} else {
   			echo "Unable to find data";
		}
		$conn->close();
		?>
        </main> 
    </body>
</html>
