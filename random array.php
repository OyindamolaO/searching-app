<html>
<head>
	
<style type="text/css">
	.container{
		position: relative;
		top:10px;
		left:10px;
		max-width: 300px;
		max-width: 200px;
		background: #eee;
		border: 2px;
		border-top-left-radius: 10px;
		border-bottom-right-radius: 10px;
		padding: 20px;
		margin-bottom: 50px;

	}
</style>
</head>
<body>
<div class="container">
<h1>Number Identification Application</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 Search for a number in the array <br/>
  <input type="text" name="fname">
  <input type="submit">
</form>
</div>
<?php

	$r = range(1, 1000,10);
		
		echo "<br/><br/>";
		if (in_array($_POST["fname"], $r)) {
			echo "<br/><br/>";
		    echo $_POST["fname"]. " is in the array  <br/>";
		}

		else {
			echo "<br/><br/>";
			echo $_POST["fname"]. " can not be found in the array <br/>"	;
		}
	function arrayoutput() {
		echo "This is the array  <br/>";
			for ($i=0;$i<100;$i++) {
			 echo $r[$i]. " , ";
		}
	}

?>
</body>
</html>