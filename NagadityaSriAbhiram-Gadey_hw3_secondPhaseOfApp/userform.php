<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwsform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['save'])){
  $f_name= $_POST['firstname'];
  $l_name= $_POST['lastname'];
  $c_town= $_POST['currenttown'];
  $h_town= $_POST['hometown'];
  $f_town= $_POST['favouritetown'];
  $y_name= $_POST['Yourhobbies'];
  $p_birth= $_POST['PlaceofBirth'];
  $e_name= $_POST['email'];
  $ph_num= $_POST['phone'];
  $me_ssage= $_POST['message'];
  $insert_que ="INSERT INTO userdetails (firstname,lastname,currenttown,hometown,favouritetown,Yourhobbies,PlaceofBirth,email,phone,message)
  VALUES ('$f_name','$l_name','$c_town','$h_town','$f_town','$y_name','$p_birth','$e_name','$ph_num','$me_ssage')";
  if ($conn->query($insert_que) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $insert_que . "<br>" . $conn->error;
  }
}

?>

<html>
    <head>
        <title>InternetWebSystems_Assignment3</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    <div id="main">
            <div id="header">
                <div id="logo">
                    <h1>Nagaditya Sri Abhiram Gadey</h1>
                    <h2>Internet Web Systems Assignment 3</h2>
                </div>

                <div id="menubar">
                    <ul id="menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="hobbies.html">Hobbies</a></li>
                        <li><a href="gpleasures.html">Guilty Pleasures</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li class="selected"><a href="userform.php">Information Desk</a></li>
                    </ul>
                </div>
            </div>
        
        <form method="POST" class="w3-container w3-card-4 w3-light w3-text-black w3-margin">
        <h2 class="w3-center">fill in the form</h2>
 
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="firstname" type="text" placeholder="First Name">
                </div>
            </div>
        <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="lastname" type="text" placeholder="Last Name">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-location-arrow"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="currenttown" type="text" placeholder="Current Town">
                </div>
            </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-location-arrow"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="hometown" type="text" placeholder="Home Town">
                </div>
            </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-location-arrow"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="favouritetown" type="text" placeholder="Favourite Town">
                </div>
            </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-music"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="Yourhobbies" type="text" placeholder="Your Hobbies">
                </div>
            </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-location-arrow"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="PlaceofBirth" type="text" placeholder="Place of Birth">
                </div>
            </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="email" type="email" placeholder="Your Email">
                </div>
            </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="phone" type="number" placeholder="Your contact number">
                </div>
            </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                <div class="w3-rest">
                    <input class="w3-input w3-border" name="message" type="text" placeholder="Did I miss Anything?(Enligthen Us)">
                </div>
            </div>
        <p class="w3-center">
            <button class="w3-button w3-section w3-blue w3-ripple" name="save" id="save" type="submit"> Send </button>
        </p>
        </form>
    </div>

</body>
</html>
 