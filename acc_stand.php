
 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="task1";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
header("Location: stand.html");
?>

 
 <?php 

if (isset($_POST['off'])) {

$sql = " UPDATE `robot_stand` SET `acction`='none', `start`='0' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>
 <?php 

if (isset($_POST['on'])) {

$sql = " UPDATE `robot_stand` SET  `start`='1' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>

    <?php 

if (isset($_POST['Ri'])) {

$sql = " UPDATE `robot_stand` SET  `acction`='RIGHT' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>

   <?php 

if (isset($_POST['LE'])) {

$sql = " UPDATE `robot_stand` SET  `acction`='LEFT' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>
    <?php 

if (isset($_POST['UP'])) {

$sql = " UPDATE `robot_stand` SET  `acction`='UP' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>
   <?php 

if (isset($_POST['DO'])) {

$sql = " UPDATE `robot_stand` SET  `acction`='Down' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>


