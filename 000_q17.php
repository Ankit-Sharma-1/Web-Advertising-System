<html lang="en">
<head>
<title>UofU Web Advertising Portal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
    box-sizing: border-box;
}

/* Style the body */
body {
    font-family: Arial;
    margin: 0;
}

/* Header/logo Title */
.header {
    padding: 20px;
    text-align: left;
    background: #1abc9c;
    color: white;
}

/* Increase the font size of the heading */
.header h1 {
    font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
    overflow: hidden;
    background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
    float: right;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
    float: right;
}

/* Change color on hover */
.navbar a:hover {
    background-color: #ddd;
    color: black;
}

.navbar a.active {
  border-bottom: 3px solid #1abc9c;
}

/* Column container */
.row {  
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* main/right column */
.main {
    -ms-flex: 80%; /* IE10 */
    flex: 80%;
    background-color: #ddd;
    padding: 20px;
}

/* side column */
.side {   
    -ms-flex: 20%; /* IE10 */
    flex: 20%;
    background-color: #f1f1f1;
    padding: 20px;
}

.dropbtn {
    background-color: #1abc9c;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #333;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 200px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-size: 16px;
}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}

/* Footer */
.footer {
    padding: 1px;
    text-align: left;
    background: #1abc9c;
    color: white;
}

.btn {
    border: none; /* Remove borders */
    color: white; /* Add a text color */
    padding: 16px 30px; /* Add some padding */
    cursor: pointer; /* Add a pointer cursor on mouse-over */
    font-size: 16px;
}

.home {background-color: #1abc9c;} 
.home:hover {background-color: #000000;}

.btn {background-color: #1abc9c;} 
.btn:hover {background-color: #000000;}


.table{
    border: 2px solid black;
    border-collapse: collapse;
    padding: 5px;
    background-color: #ffffff;
}

th {
    padding: 5px;
    border: 2px solid black;
    border-collapse: collapse;
}

td {
    padding: 5px;
    border: 2px solid black;
    border-collapse: collapse;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
    .row {   
        flex-direction: column;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
    .navbar a {
        float: none;
        width: 100%;
    }
}

</style>
</head>
<body>

<div class="header">
  <h1>Web Advertising System on UofU website</h1>
  <p>INFS7901 Project</p>
</div>

<div class="navbar">
    <a href="https://s4515529-infs7901.uqcloud.net/homepage.php">Logout</a>
    <a href="https://s4515529-infs7901.uqcloud.net/000.php">Queries</a>
    <a class="active" href="https://s4515529-infs7901.uqcloud.net/000_q19.php">Current Query</a>
</div>

<div class="row">
  <div class="main"
    <p>Delete Advertiser from system</p>

    <h3>Previous week Advertisers</h3>
        <table class=  table><thead><tr><th>AdvertiserID</th><th>Name</th><th>Domain</th></tr></thead>
            <tbody><tr><td>101</td><td>The Cat</td><td>Pets</td></tr>
                   <tr><td>102</td><td>Big Panda</td><td>Food Delivery</td></tr>
                   <tr><td>103</td><td>Express Post</td><td>Shopping</td></tr>
                   <tr><td>104</td><td>Uni Salon</td><td>Personal Services</td></tr>
                   <tr><td>105</td><td>Bupa</td><td>Healthcare</td></tr>
                   <tr><td>106</td><td>Time to Read</td><td>Books & Stationaey</td></tr>
                   <tr><td>107</td><td>Iglu</td><td>Accomodation Services</td></tr>
                   <tr><td>108</td><td>Uber Eats</td><td>Food Delivery</td></tr>
                   <tr><td>109</td><td>Travel Tours</td><td>Travel & Tourism</td></tr>
                   <tr><td>110</td><td>Golden Apple</td><td>Food Delivery</td></tr>
                   <tr><td>111</td><td>Old Avertiser</td><td>Random Domain</td></tr>
            </tbody>
        </table>
   
    <br>
    <p><b>SQL Query</b></p>
    <p><i>ALTER TABLE `ad`</p>
    <p>ADD CONSTRAINT `ad_ibfk_3`</p>
    <p>REFERENCES `advertiser` (`AdvertiserID`)</p>
    <p>ON DELETE CASCADE;</p>
    <br>
    <p>DELETE FROM advertiser</p>
    <p>WHERE AdvertiserID = '$advertiser'</i></p>
    <br>
    <?php 
      // SETUP PHP CONNECTION
        $servername = "localhost";
        $username = "root";
        $password = "687e9b44b5c54492";
        $dbname = "webadvertisement";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("<h3>Connection failed: ".$conn->connect_error."</h3>");
        }
    ?>

        <?php
        // FILL TABLE WITH DATA ON CLICK 
        if(isset($_POST["submit"])) {
        $advertiser = $_POST['advertiser'];
        // get data
        $query = "DELETE FROM advertiser 
            WHERE AdvertiserID = '$advertiser'";
        $result = mysqli_query($conn, $query);

        }
            ?>
        
    <form action="" method="post">
        <br>
        <p>Enter AdvertiserID to be removed</p>
        <input type = "text" name = "advertiser" placeholder="AdvertiserID"><br><br>
        <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Execute" style="text-align:right;margin:10px" />
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </div>

    
    <div class="side">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">About Database</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="https://s4515529-infs7901.uqcloud.net/Schema.php">Schema</a>
                <a href="https://s4515529-infs7901.uqcloud.net/SQL_Queries.php">SQL Queries</a>
            </div>
        </div>
    </div>

</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<div class="footer">
  <p>&nbsp&nbsp&nbspDesign by Ankit Sharma and Yunqi Zhang</p>
</div>

</body>
</html>