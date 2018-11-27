<!DOCTYPE html>
<html>
<title>Dental Clinic</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style1.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<script src="<?php echo base_url();?>assets/js/script1.js"></script>
<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<style>
body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
}
.bgimg {
    background-position: center;
    background-size: cover;
    background-image: url("<?php echo base_url(); ?>assets/images/dentalClinic.jpg");
    min-height: 75%;
}
.menu {
    display: none;
}
</style>
<style>
    body {
      background: #111;
    }
    .hidden {
      opacity:0;
    }
    .console-container {

      font-family:Khula;
      font-size:4em;
      text-align:center;
      height:200px;
      width:600px;
      display:block;
      position:absolute;
      color:white;
      top:0;
      bottom:0;
      left:0;
      right:0;
      margin:auto;
    }
    .console-underscore {
       display:inline-block;
      position:relative;
      top:-0.14em;
      left:10px;
    }
</style>
<style>
/* Bordered form */
form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
    width: 40%;
    border-radius: 50%;
}

/* Add padding to containers */
.container {
    padding: 16px;
}

/* The "Forgot password" text */
span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="#menu" class="w3-button w3-block w3-black">SERVICES</a>
    </div>
    <div class="w3-col s3">
      <a href="#where" class="w3-button w3-block w3-black">JOIN US</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Open from 6am to 5pm</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large w3-hide-small">
     
 
<style>


/* Button used to open the contact form - fixed at the bottom of the page */
#home{
    background-image: url("assets/images/header_background.jpg");
}
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.form_background{
    background-image: url("assets/images/form_back.jpg");
}
</style>
</head>
<body>



<button class="open-button" onclick="openForm()">LOGIN</button>

<div class="form-popup" id="myForm">
  <form action="Home/login" class="form-container" method="post">
    <h1>Login</h1>
    <!-- <label for="uname"><b>Usertype</b></label>
    <select name="utype" style="width:100%;height:50px;background-color: #ddd;outline: none;">
    <option value="">Account Type</option>
    <option value="Patient">Patient</option>
    <option value="Doctor">Doctor</option>
    <option value="Assistant">Assistant</option>
    </select> -->

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>


  
  </div>
    <div style="background-image: url('assets/images/form_back.jpg');">
  <div class="w3-display-middle w3-center">
    <span class="w3-text-dark-gray" style="font-size:90px">Dental<br>Clinic</span>
  </div>
        <div class='console-container w3-margin-bottom'>
            <span id='text'></span>
            <div class='console-underscore' id='console'>
            &#95;
            </div>
        </div>
    <script>
        consoleText(['Best Service', 'High Experinces', 'Fast Services'], 'text',['tomato','rebeccapurple','black']);

        function consoleText(words, id, colors) {
          if (colors === undefined) colors = ['#fff'];
          var visible = true;
          var con = document.getElementById('console');
          var letterCount = 1;
          var x = 1;
          var waiting = false;
          var target = document.getElementById(id)
          target.setAttribute('style', 'color:' + colors[0])
          window.setInterval(function() {

                if (letterCount === 0 && waiting === false) {
                  waiting = true;
                  target.innerHTML = words[0].substring(0, letterCount)
                  window.setTimeout(function() {
                        var usedColor = colors.shift();
                        colors.push(usedColor);
                        var usedWord = words.shift();
                        words.push(usedWord);
                        x = 1;
                        target.setAttribute('style', 'color:' + colors[0])
                        letterCount += x;
                        waiting = false;
                  }, 1000)
                } else if (letterCount === words[0].length + 1 && waiting === false) {
                  waiting = true;
                  window.setTimeout(function() {
                        x = -1;
                        letterCount += x;
                        waiting = false;
                  }, 1000)
                } else if (waiting === false) {
                  target.innerHTML = words[0].substring(0, letterCount)
                  letterCount += x;
                }
          }, 120)
          window.setInterval(function() {
                if (visible === true) {
                  con.className = 'console-underscore hidden'
                  visible = false;

                } else {
                  con.className = 'console-underscore'

                  visible = true;
                }
          }, 400)
        }
    </script>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white"></span>
  </div>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h4 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE DENTAL CLINIC</span></h4>
    <b>Our History</b>
    <p>Lanka Hospitals Corporation Ltd commenced operations in Sri Lanka on 7th June 2002, under the brand name of
        Apollo Hospitals, a part of the chain of Apollo Hospitals founded by the renown Dr. Pratap C. Reddy in India.
        As the only purpose built private hospital of its kind in Sri Lanka, Apollo Colombo revolutionised Sri 
        Lanka’s healthcare service, and today under the brand Lanka Hospitals, we continue to dominate and lead the 
        healthcare sector. Ours is still considered to be the best health care facility in the country.</p>
    <p>Lanka Hospitals Corporation Ltd commenced operations in Sri Lanka on 7th June 2002, under the brand name
        of Apollo Hospitals, a part of the chain of Apollo Hospitals founded by the renown Dr. Pratap C. Reddy in
        India. As the only purpose built private hospital of its kind in Sri Lanka, Apollo Colombo revolutionised
        Sri Lanka’s healthcare service, and today under the brand Lanka Hospitals, we continue to dominate and lead
        the healthcare sector. Ours is still considered to be the best health care facility in the country.</p>
    <div class="w3-panel w3-leftbar w3-blue">
        <b>Our Promise</b>
      <p><i>“We believe that every person has the right to be treated with utmost respect and consideration
              Therefore at Lanka Hospitals we care about our patients We care about their families who are anxious
              and concerned. We care about our colleagues and how we as a team provide the best care to our patients.
              Because we care, we will be sincere, compassionate and sensitive to make a difference in the lives we
              touch!”</i></p>
    </div>
    <img src="<?php echo base_url(); ?>assets/images/dental-gal.jpg" style="width:100%;max-width:1000px" class="w3-margin-top"/>
    <p><strong>Opening hours:</strong> everyday from 6am to 5pm.</p>
    <p><strong>Address:</strong> 14, Maligawaththa Street, Homagama</p>
    <div class="w3_agile_map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63378.11147625165!2d79.9657114444197!3d6.874787748670044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2518c83a3640b%3A0x9aa90a55a3958287!2sDental+Clinic+HOMAGAMA!5e0!3m2!1sen!2slk!4v1543343211630" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>


<!-- Menu Container -->
<div class="w3-container w3-gray" id="menu">
  <div class="w3-content" style="max-width:1200px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">OUR SERVICES</span></h5>
  
   <!-- collection -->
   <section class="bg-secondary py-4">
    <div class="container-fluid w3-blue">
      <!-- title -->
      <div class="row text-white text-center">
        <div class="col m-4">
          <h1 class="display-4 mb-4">Treatments We Provide</h1>
          <div class="underline mb-4"></div>
          <p class="lead"></p>
        </div>
      </div>
      <!-- end of title -->
      <div class="row">
        <div class="col-lg-4 col-sm-6 my-5">
          <div class="card border-0 card-shadow">
            <img src="<?php echo base_url(); ?>assets/images/screening.jpg" class="card-img" style="width:250px;height:250px;">
            <div class="card-img-overlay">
              <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Screening</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 my-5">
          <div class="card border-0 card-shadow">
            <img src="<?php echo base_url(); ?>assets/images/ped.jpg" class="card-img" style="width:250px;height:250px;">
            <div class="card-img-overlay">
              <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Periodontics Dentistry</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 my-5">
          <div class="card border-0 card-shadow">
            <img src="<?php echo base_url(); ?>assets/images/res.jpg" class="card-img" style="width:250px;height:250px;">
            <div class="card-img-overlay">
              <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Restorative</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 my-5">
          <div class="card border-0 card-shadow">
            <img src="<?php echo base_url(); ?>assets/images/oral.jpg" class="card-img" style="width:250px;height:250px;">
            <div class="card-img-overlay">
              <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Oral Surgery</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 my-5">
          <div class="card border-0 card-shadow">
            <img src="<?php echo base_url(); ?>assets/images/pros.jpg" class="card-img" style="width:250px;height:250px;">
            <div class="card-img-overlay">
              <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Prosthodontics Dentistry</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 my-5">
          <div class="card border-0 card-shadow">
            <img src="<?php echo base_url(); ?>assets/images/ortho.jpg" style="width:250px;height:250px;" class="card-img">
            <div class="card-img-overlay">
              <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Orthodontic</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of collection -->
  </div>
    <br><br><br>
</div>

<!-- Contact/Area Container -->
<div class="form_background">
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:600px">
  <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">REGISTER</span></h5>
  <div style="background-color: #ccc;">
  <form action="Home/register" method="post">
  <div class="imgcontainer">
    <img src="<?php echo base_url(); ?>assets/images/img-3.jpg" alt="Avatar" class="avatar" style="width:200px;height:200px;">
  </div>

  <div class="container">

    <label for="fname"><b>Firstname</b></label>
    <input type="text" placeholder="Enter Firstname" name="fname" required>

    <label for="lname"><b>Lastname</b></label>
    <input type="text" placeholder="Enter Lastname" name="lname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Username" name="email" >

    <label for="address"><b>City</b></label>
    <input type="text" placeholder="Enter Your city" name="address" required>

    <label for="age"><b>Age</b></label>
    <input type="number" placeholder="  Enter Your age" style="width:100%;height:50px;" name="age" required>


    <label for="cno"><b>Contact No</b></label>
    <input type="text" placeholder="Enter Contact no" name="cno" required>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="cpsw"><b>Confirm Password</b></label>
    <input type="password" placeholder="Re-enter Password" name="cpsw" required>

    <button type="submit">Register</button>
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
  </div>
</form>
  </div>
  </div>
</div>
</div>
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p> <a href="https://www.w3schools.com/w3css/default.asp" title="Dental-Clinic" target="_blank" class="w3-hover-text-green"></a></p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
