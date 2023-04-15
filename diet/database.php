<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "diet";
 $conn = mysqli_connect($hostName, $userName, $password, $databaseName);
// Check connection
if($conn){
//echo "Connected";
}
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($conn,'diet');


if(isset($_POST['signup'])){
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$sql="INSERT INTO login(Username,Password,Email) VALUES('$username','$password','$email')";
$result = mysqli_query($conn,$sql);
   
if($result){
//echo "New Record Inserted Successfully";
header("Location: http://localhost/phpsample/loginform.html");
 
}else{
echo "Error, Record not inserted.";
 }
 }


if(isset($_POST['login'])){

$loginusername = $_POST['loginusername'];
$loginpassword = $_POST['loginpassword'];
//echo $loginusername;
if(empty($loginusername) && empty($loginpassword)){
	echo 'Please enter username and password';
}
else if(empty($loginusername)){
	echo 'Please enter username';
}
else if(empty($loginpassword)){
	echo 'Please enter Password';
}
$query = "select * from login";
$result = mysqli_query($conn, $query);
$flag=0;
while($row = mysqli_fetch_array($result))
{
    if($row['Username'] == $loginusername && $row['Password']==$loginpassword){
	$flag=1;
	header("Location: http://localhost/phpsample/detailsform.html");
	}
}
if($flag == 0){
echo 'Invalid Username or Password';
}
}



if(isset($_POST['signuplogin'])){
header("Location: http://localhost/phpsample/signup.html");
}

if(isset($_POST['detailssubmit'])){
$name = $_POST['name'];
$age = $_POST['age'];
$height = $_POST['height'];
$weight = $_POST['weight'];
//echo $name;
$sql="INSERT INTO details(Name,Age,Height,Weight) VALUES('$name','$age','$height','$weight')";
$result = mysqli_query($conn,$sql);
   
if($result){
//echo "New Record Inserted Successfully";
header("Location: http://localhost/phpsample/categoryform.html");
 
}else{
echo "Error, Record not inserted.";
 }
 }

if(isset($_POST['categorysubmit'])){
    if(empty($_POST['myradio'])) {
	echo 'Please select the value.';
    } 
   else {
        $rb = $_POST['myradio'];
switch($rb){
case "Kid":
	header("Location: http://localhost/phpsample/kid_diet.html");
	break;
case "Normal":
	header("Location: http://localhost/phpsample/Normal_diet.html");
	break;
case "Diabetic":
	header("Location: http://localhost/phpsample/Diabetic_diet.html");
	break;
case "Pregnant":
	header("Location: http://localhost/phpsample/Pregnant_diet.html");
	break;
}
}
}

mysqli_close($conn); 

?>