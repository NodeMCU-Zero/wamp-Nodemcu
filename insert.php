<?php
$database="tem_hum"; //database name
$Temp=$_POST['temp'];//this values comes from html file after submitting 
$Hum=$_POST['hum'];
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "INSERT INTO info (first,last)VALUES ('$first','$last')";
mysql_query($query);

echo "<script type='text/javascript'>\n";
echo "alert('you are Succesflly registered');\n";
echo "</script>"; 


mysql_close();
?>
