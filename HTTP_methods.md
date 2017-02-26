#Send variable value to the Server
There are two HTTP methods — GET and POST that communicate with the Server. 
GET and POST send the information to the server but have some different advantages and disadvantages;

#The GET Method
In GET method the data is sent as URL parameters ( Parameters to be strings) and separated by ampersands (&).
In general, a URL with GET data will look like this:

http://algobel/db.php?Tem=33&Hum=24
# Example for GET method::
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET method- Sample</title>
</head>
<body>
<?php
if(isset($_GET["Tem"])){
    echo "<p>Current Tem, " . $_GET["Tem"] . "</p>";
}
if(isset($_GET["Hum"])){
    echo "<p>Current Humidity, " . $_GET["Hum"] . "</p>";
}
?>
</body>

#The POST Method
Generally, if data send using POST mehtod to the Server, it will send as package in a separate communication with the processing script. 
URL is not visible on browser. 

# Example for POST Method::

<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST method</title>
</head>
<body>
<?php
if(isset($_POST["Tem"])){
    echo "<p>Tem, " . $_POST["Tem"] . "</p>";
}
?>
if(isset($_POST["Hum"])){
    echo "<p>HUm, " . $_POST["Hum"] . "</p>";
}
?>
</body>

#The $_REQUEST Variable
$_REQUEST is a another superglobal method that contains the values of both the $_GET and $_POST variables.
As well as the values of the $_COOKIE .

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
?>
</body>
