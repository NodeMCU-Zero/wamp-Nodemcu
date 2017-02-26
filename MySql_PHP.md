#Connect to Mysql Server 

## Step One ( Connect to the MySql )
$link = mysqli_connect("hostname", "username", "password", "database");

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("algobel", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
?>

## second Step 

$link = mysqli_connect("localhost", "root", ""); 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
mysqli_close($link);
# Insert Data 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example for $_REQUEST variable</title>
</head>
<body>
<?php
if(isset($_REQUEST["Tem"])){
    echo "<p>Tem, " . $_REQUEST["Tem"] . "</p>";
}
if(isset($_REQUEST["Hum"])){
    echo "<p>Tem, " . $_REQUEST["Hum"] . "</p>";
}

echo date("F d, Y h:i:s A") . "<br>";

$link = mysqli_connect("localhost", "root", "", "algobel"); 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
## Insert Data  
 
 
// Attempt insert query execution
$sql = "INSERT INTO persons (Tem, Hum, date) VALUES ('33', '45','feb')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</body>
