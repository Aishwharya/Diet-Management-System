<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['myradio'])) {
	$rb = $_POST['myradio'];
        echo '  ' . $rb;
    } else {
        echo 'Please select the value.';
    }
    }

switch($rb){
case 1:
	header("Location: http://localhost/phpsample/kid_diet.html");
	exit;
	break;
case 2:
	header("Location: http://localhost/phpsample/Normal_diet.html");
	exit;
	break;
case 3:
	header("Location: http://localhost/phpsample/Diabetic_diet.html");
	exit;
	break;
case 4:
	header("Location: http://localhost/phpsample/Pregnant_diet.html");
	exit;
	break;
}
?>
