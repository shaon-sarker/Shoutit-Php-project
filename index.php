<?php include('db.php'); ?>
<?php 

	//query 

	$query = "SELECT * FROM shouts";
	$res = mysqli_query($connection,$query);






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoutit Project</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
   <div id="container">
			<header>
				<h1>SHOUT IT! Shoutbox</h1>
			</header>
			<div id="shouts">
				<ul>
					<?php while($row = mysqli_fetch_assoc($res)) : ?>
						<li class="shout"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?>:</strong> <?php echo $row['message'] ?> </li>
					<?php endwhile; ?>				
				</ul>
			</div>
			<div id="input">
				<?php if(isset($_GET['error'])) : ?>
					<div class="error"><?php echo $_GET['error']; ?></div>
				<?php endif; ?>
				<form method="post" action="insert.php">
					<input type="text" name="user" placeholder="Enter Your Name" />
					<input type="text" name="message" placeholder="Enter A Message" />
					<br />
					<input class="shout-btn" type="submit" name="submit" value="Shout It Out" />
				</form>
			</div>
		</div>












</body>
</html>