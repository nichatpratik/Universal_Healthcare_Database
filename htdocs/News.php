<html>
<head>
<title>News</title>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
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
body, html {
    height: 100%
}

.bgimg {
    /* Background image */
    background-image: url('forestbridge.jpg');
    /* Full-screen */
    height: 100%;
    /* Center the background image */
    background-position: center;
    /* Scale and zoom in the image */
    background-size: cover;
    /* Add position: relative to enable absolutely positioned elements inside the image (place text) */
    position: relative;
    /* Add a white text color to all elements inside the .bgimg container */
    color: white;
    /* Add a font */
    font-family: "Courier New", Courier, monospace;
    /* Set the font-size to 25 pixels */
    font-size: 25px;
}

/* Position text in the top-left corner */
.topleft {
    position: absolute;
    top: 0;
    left: 16px;
}

/* Position text in the bottom-left corner */
.bottomleft {
    position: absolute;
    bottom: 0;
    left: 16px;
}

/* Position text in the middle */
.middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

/* Style the <hr> element */
hr {
    margin: auto;
    width: 40%;
}
</style>
<body>
 <div class="bgimg">
 <img src="logo.png" width="100%" height="300px">
<ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="About.php">About</a></li>
  <li><a href="News.php">News</a></li>
  <li style="float:right"><a href="Help.php">Help</a></li>
</ul>
  <div class="middle">
    <h1>COMING SOON</h1>
    <hr>
    <p id="demo" style="font-size:30px"></p>
  </div>
  <div class="bottomleft">
    <p>Predicting diseases at its CORE...In Real Time</p>
  </div>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jul 5, 2017 15:37:25").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
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
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</body>
</html>