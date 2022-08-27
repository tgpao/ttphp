<?php 
require('connection.php');
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = date("Y-m-d");
$insert = "INSERT INTO `usermessage` (`id`, `name`, `email`, `message`, `time`) VALUES (NULL, '$name', '$email', '$message', '$date')";

if ($name !== "" && $email !== "" && $message !== "") {
	if(mysqli_query($connection, $insert)){
		echo '<script>
			location.href= "index.php"
			</script>';
		}
}else{
	echo '<script>
			history.back()
			</script>';
}
?>