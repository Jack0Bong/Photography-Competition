<?php 
  require "connect.php";

  // This query needs login session to work right now, in pending until then
  $sql = "SELECT * FROM usersignup WHERE ID = 1";
  $result = mysqli_query($con,$sql);
  $userProfile = $result -> fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<style>
p {font-size:10px}
img.logo{
  width: 160px;
  height: 128px;
  border: 5px groove;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.topnav {
  padding: 0px;
  margin-left: 10px;
  overflow: hidden;
}

.topnav a {
  display: block;
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 24px 26px;
  text-decoration: none;
  font-size: 17px;
  background-color: #333;
}

.topnav p {
  float: left;
  margin-left: 10px;
  font-size: 32px;
  padding: 0px;
  margin-top: 17px;
  font-family: Comic San;
  font-weight: bold;

}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
.profile{
  display: flex;
  justify-content: space-between;
  margin: 0 2% 0 2%;
}
.profile-img{
  max-width: 500px;
  max-height: 500px;
  object-fit: cover;
}

.profile-img img{
  max-width: 500px;
  max-height: 500px;
  object-fit: cover;
}
#profiledata{
	width:60%;
    background-color:#FFFFFF;
    border:5px solid;
    border-width: thick;
	margin: 30px 0px 0px 0px;
	padding: 40px 0px 0px 10px
}
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  display:flex;
  align-items: center;
  display: inline-block;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */


input {
  width: 95%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  font-size:15px;
}
</style>
</head>
<body style="background-image:url('bg1.png')">
<div class="topnav">
  <a href="#Logout">Logout</a>
  <a href="#Profile">Profile</a>
  <a href="#Winner">Winner</a>
  <a href="#About">About Us</a>
    <a class="active" href="userhome.html">Home</a>
    <img class="logo" style="float: left;" src = "logo.png">
    <p style="float: left;">APU Photography Competition</p>
</div>
<h2 style="text-align:center;">USER PROFILE</h2>	
<div class="profile">
  <div class="profile-img">
    <img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png?w=640" alt="">
    <div class="img-edit">
      <h3 style="text-align:left">Select photo:</h3>
      <input type="file" id="myfile" name="myfile" style="background-color:transparent">
    </div>
  </div>
  <div id="profiledata" style="background-color:#A7CAD7">
  <form action="editProfileProcess.php" method="post">
    <?php echo'
      <label for="Username"><b>Username</b></label>
        <input type="text" placeholder="Edit Username" name="Username" disabled class="username" value="'. $userProfile['Username'] .'">
      <label for="Fname"><b>Firstname (Not Editable)</b></label>
        <input type="text" placeholder="Firstname" name="Fname" disabled class="fName" value="'. $userProfile['Fname'] .'">
      <label for="Lname"><b>Lastname (Not Editable)</b></label>
        <input type="text" placeholder="Lastname" name="Lname" disabled class="lName" value="'. $userProfile['Lname'] .'">
      <label for="Gender"><b>Gender (Not Editable)</b></label>
        <input type="text" placeholder="Gender" name="Gender" disabled class="gender" value="'. $userProfile['Gender'] .'">
      <label for="Nationality"><b>Nationality (Not Editable)</b></label>
        <input type="text" placeholder="Nationality" name="Nationality" disabled class="nation" value="'. $userProfile['Nationality'] .'">
      <label for="Date of Birth"><b>Date of Birth (Not Editable)</b></label>
        <input type="text" placeholder="Date of Birth" name="dateob" disabled class="dob" value="'. $userProfile['DoB'] .'">
      <label for="Contact Number"><b>Contact Number</b></label>
        <input type="text" placeholder="Edit Contact Number" name="Contact_Number" disabled class="phone" value="'. $userProfile['ContactNumber'] .'">
      <label for="Email"><b>Email</b></label>
        <input type="text" placeholder="Edit Email" name="Email" disabled class="email" value="'. $userProfile['Email'] .'">
      <label for="Password"><b>Password</b></label>
        <input type="text" placeholder="Edit Password" name="Password" disabled class="pass" value="'. $userProfile['Password'] .'">
        ';
      ?>

    </div>
  </div>
<nav>

<p align="right">
  <button type="button" class="button button2" id="edit" onclick="editMode()">Edit</button>
  <button class="button button2" id="save" style="display: none;">Save</button>
</p>
</form>
</nav>
<script src="../javascript/editprofile.js"></script>
</body>
</html>