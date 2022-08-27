<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<title>Welcome</title>
</head>
<body>
<?php
require('connection.php');
$result = mysqli_query($connection, "SELECT * FROM usermessage");
?>

	<form action="redirect.php" method="post">
		<p align="center">Name</p>
		<div align="center">
			<input type="text" name="name" placeholder="Name" class="input">
		</div>

		<p align="center">Email</p>
		<div align="center">
			<input type="text" name="email" placeholder="Email" class="input">
		</div>

		<p align="center">Message</p>
		<div align="center">
			<input type="text" name="message" placeholder="Message" class="input">
		</div>

		<div align="center">
			<input type="submit" name="submit" value="Submit" class="btn">
		</div> 
	</form>

	<div class="all__messages">
		<div class="container">
			<?php while ($assoced = mysqli_fetch_assoc($result)) { ?>
			<div class="message__inner">
				<div class="message__user">
					<div class="message__name">
						<?php echo $assoced['name'] ?>
					</div>
					<div class="message__email">
						<?php echo $assoced['email'] ?>
					</div>
					<div class="create__date">
						<?php echo $assoced['time'] ?>
					</div>
				</div>

				<div class="message__text">
					<?php echo $assoced['message'] ?>
				</div>
			</div>

			<?php } ?>

		</div>
	</div>


	

<?php 
mysqli_close($connection);
?>
</body>
</html>