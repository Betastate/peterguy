<!DOCTYPE html>
<html>
<body>


<?php


$dbhost = "localhost";
$dbuser = $_POST["theName"];
$dbpass = $_POST["thePass"];
$dberror1 = "Invalid Username or Password";


$conn = mysqli_connect($dbhost,$dbuser,$dbpass) or die ($dberror1);

if ($conn == true) {
$select_db = mysqli_select_db($conn,"liveunlimited") or die ("Unable to Select Database");
echo "Welcome , ". $dbuser . "!";


$query = "SELECT * FROM stars;";
$fetch = mysqli_query($conn,$query) or die ("Could Not Query");
echo "<br>"."We is querying!"."<br>";

while ($row = mysqli_fetch_assoc($fetch)){

   echo $row['Name']."    ";
   echo $row['Distance']."    ";
   echo $row['Brightness']."    "."<br>";

}


}


?>

</body>
</html>