<html>
<head>
<title>PatientDB</title>
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
    background-color:0c8e76;
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
.button3 {	width: 100%;
			height: 20%;
			
			}
.button1 {	
			width: 100%;
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
 a {
      text-decoration:none;
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
<a href="SearchPatient.php"><button class="button button3">Search Patient</button></a>
<br><br>
<a href="AddPatient.php"><button class="button button3">Add Patient</button></a>
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

<br><br>
<a href="Home.php"><button class="button1">Back To Home</button></a>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<br><br>
</body>
</html>