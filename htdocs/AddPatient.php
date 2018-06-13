<html>
<head>
<title>AddPatient</title>
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
<legend>Patient Details</legend>
<div>
<form method="post" >
  
    <label for="p_name">Enter Patient's Name:</label>
    <input type="text" id="p_name" name="p_name" required>
	
	<label for="p_id">Enter Patient's ID:</label>
    <input type="number" id="p_id" name="p_id" required>
	
	<label for="p_age">Enter Patient's Age:</label>
    <input type="number" id="p_age" name="p_age" required>
	
	<label for="p_gender">Enter Patient's Gender:</label>
    <input type="text" id="p_gender" name="p_gender" required>
	
	<label for="p_address">Enter Patient's Address:</label>
    <input type="text" id="p_address" name="p_address" required>
	
	<label for="p_contact">Enter Patient's Contact:</label>
    <input type="number" id="p_contact" name="p_contact" required>
	
	<label for="emergency_contact">Enter Emergency Contact:</label>
    <input type="number" id="emergency_contact" name="emergency_contact" required>
	
	<label for="doc_id">Enter Doctor's ID:</label>
    <input type="number" id="doc_id" name="doc_id" required>
	
	<label for="hosp_id">Enter Hospital's ID:</label>
    <input type="number" id="hosp_id" name="hosp_id" required>

	<label for="dis_name">Enter Patient's Disease(s):</label>
    <input type="text" id="dis_name" name="dis_name" required>
	
	<label for="pres_meds">Enter medication(s) prescribed to Patient:</label>
    <input type="text" id="pres_meds" name="pres_meds" required>
	
	<label for="p_allergy">Enter any allergies observed:</label>
    <input type="text" id="p_allergy" name="p_allergy" required>
	
	<label for="adm_date">Enter Admission date:</label>
    <input type="date" id="adm_date" name="adm_date" required>
	
	<label for="dis_date">Enter Discharge Date:</label>
    <input type="date" id="dis_date" name="dis_date" required>
	
	<input type="submit" id="submit" name="submit">

</fieldset><br><br>
</form>
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
	 
	if(isset($_POST['submit'])){
		
	$pname = $_POST['p_name'];
	$pid = $_POST['p_id'];
	$page = $_POST['p_age'];
	$pgender = $_POST['p_gender'];
	$paddress = $_POST['p_address'];
	$pcontact = $_POST['p_contact'];
	$emergencycontact = $_POST['emergency_contact'];
	$docid = $_POST['doc_id'];
	$hospid = $_POST['hosp_id'];
	$disname = $_POST['dis_name'];
	$presmeds = $_POST['pres_meds'];
	$pallergy = $_POST['p_allergy'];
	$admdate = $_POST['adm_date'];
	$disdate = $_POST['dis_date'];
	
	$sql = "INSERT INTO Patient
	VALUES ('$pname', '$pid', '$page', '$pgender', '$paddress', '$pcontact', '$emergencycontact', '$docid', '$hospid', '$disname', '$presmeds', '$pallergy', '$admdate', '$disdate')";

	if ($conn->query($sql) === TRUE) 
		{
			echo "New record created successfully";
		} 	
	else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
	}
	
$conn->close();	
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
<a href="AddPatient.php"><button class="button button3">Add Another Patient</button></a>
<br>
<a href="Home.php"><button class="button button3">Back To Home</button></a>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<br><br>

</body>
</html>