<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
	<title>Company Website</title>
	<style type="text/css">

		body {
			margin: 0px;
		}

		#main {
			background-color: white;
			height: 100%;
			position: absolute;
			width: 70%;
			margin: auto 15%;
			font-size: 20px;
			font-weight: bold;
			border: skyblue solid 8px;
			border-radius: 10px;
			top: 70px;
		}

		.header > a {
			color: white;
			text-decoration: none;
			font-size: 20px;
			padding: 0px 3%;
		}

		.header {
			background-color: black;
			text-align: center;
			padding: 1%;
			position: absolute;
			z-index: 10;
			width: 98%;
			height: 30px;
		}

		#name {
			color: white;
			float: left;
		}

		.background {
			position: fixed;
  			z-index: -100;
		}

		.header > img {
			height: 100%;
			width: 100%;
		}	

		.secondBackGround {
			height: 100%;
			width: 100%;
			position: absolute;
		}

		#main > span {
			background: none;
			position: absolute;
			left: 20px;
			top: 20px;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<div class="background">
	<img src="Sky.jpg">
</div>

<div class="header">
	<span id="name"> <?php echo "Company Name" ?></span>
	<a href="index.php"><?php  echo "Home"; ?></a>
	<a href="about.php"><?php  echo "About"; ?></a>
	<a href="service.php"><?php  echo "Services"; ?></a>
	<a href="news.php"><?php  echo "News"; ?></a>
	<a href=""><?php  echo "Contacts"; ?></a>
</div>
<div id="main">
	<img class="secondBackGround" src="Sky.jpg">
	<span>
		<?php
		
			$myfile = fopen("contacts.txt", "r") or die("Unable to open file!");
			echo fread($myfile,filesize("contacts.txt"));
			fclose($myfile);
	
		?>
	</span>

</div>

	<?php echo "<script type=\"text/javascript\" >

	</script>" 
	?>

</body>
</html>
