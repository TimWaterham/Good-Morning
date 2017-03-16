
<!-- PHP -->
<?php 
	$timeZone = date_default_timezone_set('Europe/Amsterdam');
	$time = date("H:i:s");
	$pretext = "It is currently $time"; 

	if ($time >="06:00" && $time < "12:00") {
		$timeday = "Good Morning, $pretext";
		$className = "morning";
	} elseif ($time >= "12:00" && $time < "18:00") {
		$timeday = "Good Afternoon, $pretext";
		$className ="afternoon";	
	} elseif ($time >= "18:00" && $time < "00:00") {
		$timeday = "Good Evening, $pretext";
		$className = "evening";
	} elseif ($time >= "00:00" && $time < "06:00") {
		$timeday = "Good Night, $pretext";
		$className = "night";
	} else {
		$timeday = "error, $pretext"; 

	};

 ?>

<!-- PHP -->
<!--HTML -->
<!DOCTYPE html>
<html>
	<head>
		<title>Good Morning</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body class = "<?php echo $className; ?>">
		<script type="text/javascript"> 
			var timeout = setTimeout(reload, 1000); 
			function reload() {
				$("#reload").load('index.php #reload', function(){
					timeout = setTimeout(reload, 1000);
				});
			}
		</script>
		<div id="reload">
				<?php
					echo $timeday;	
				?>
		</div>
	</body>
</html>
<!--HTML -->