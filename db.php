<?php
$servername = "localhost"; // Localhost or IP address 
$username = "root"; // root without password 
$password = ""; // no password 
$dbname = "home"; // Database Name 


$RLA = $_GET['rla']; 
$RLB = $_GET['rlb'];
$RLC = $_GET['rlc'];
$RLD = $_GET['rld'];

// Status monitoring fileds 
$STA = $_GET['sta'];
$STB = $_GET['stb'];
$STC = $_GET['stc'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "Connected successfully";
echo  "<br>";
$t=time();
echo($t . "<br>");
echo(date("Y-m-d",$t));
 echo "<br>";
$sql = "INSERT INTO db_table (RLA, RLB, RLC,RLD,STA,STB,STE)
VALUES ($RLA, $RLB, $RLC,$RLD,$STA,$STB,$STC)";

echo $RLA, $RLB, $RLC,$RLD,$STA,$STB,$STC;


?>
