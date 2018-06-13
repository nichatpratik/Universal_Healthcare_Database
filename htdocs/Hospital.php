<html>
<head>
<title>HospitalDB</title>
<link rel="stylesheet" type="text/css" href="Style.css">
<style>
#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: red; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
}

#myBtn:hover {
    background-color: #555; /* Add a dark-grey background on hover */
}
.button {
    background-color:black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button3 {width: 100%;}
 a {
      text-decoration:none;
   }
table {
	
    border-collapse: collapse;
	width: 100%;
	border: 1px solid black;
}
th {
	padding: 15px;
    height: 50px;
	background-color: 0c8e76;
    color: white;
	border: 1px solid black;
}
td {
	text-align: center;
	border: 1px solid black;
}


input, select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}

</style>
</head>

<body>
<img src="logo.png" width="100%" height="300px">
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="About.php">About</a></li>
  <li><a href="News.php">News</a></li>
  <li style="float:right"><a href="Help.php">Help</a></li>
</ul>
<br>
<br>
<fieldset>
<legend>Hospital Details</legend>
<div>
<form method="post" >
  
    <label for="hosp_id">Enter Hospital ID to be searched:</label>
    <input type="number" id="hosp_id" name="hosp_id" required>

	<input type="submit" id="submit" name="submit">

</fieldset><br><br>
<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "uhd";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	if(isset($_POST['hosp_id']))
	{
	$id = $_POST['hosp_id'];
	$sql = "SELECT hosp_id, hosp_name, hosp_contact FROM Hospital where hosp_id = '$id'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    echo "<table><th>HOSP_ID</th><th>HOSP_Name</th><th>HOSP_Contact</th>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["hosp_id"]."</td><td>".$row["hosp_name"]."</td><td>".$row["hosp_contact"]."</td></tr>";
    }
    echo "</table>";
	} 
	else {
    echo "0 results";
	}
	}
	
?>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
</script>
<br>
<a href="Home.php"><button class="button button3">Back To Home</button></a>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<br><br>

</body>
</html>