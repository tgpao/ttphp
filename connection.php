<?php
	$connection = mysqli_connect('127.0.0.1','root','','ttphp');

		if($connection == 'fasle')
		{
			echo 'GG!';
			echo mysqli_connect_error();
			exit();
		}
?>