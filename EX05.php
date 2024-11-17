
<?php
/*
Pimentel, Grace
ISTE240
Spring 2024
Exercise 05 - php/html file
*/


	$path = '../../../';
	$page = 'Exercise 5';
	
	require $path.'dbConnect.inc';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercise 05</title>
	<link rel="stylesheet" href="EX05.css">
	
</head>
<body>

<!-- Part A-->
	<div id="ex5a">
		<h2>JavaScript Exercise 5a</h2>
		<p id="text"><span class="highlight"> This line of text will move 10 pixels to the right when the button is clicked </span></p>
	<div>
	<button id="styleMe" onclick="moveText()"><span style="position:relative; top:-0.4em;">Move the Text</span></button>
	</div>
	</div>
	
<!-- Part B-->
	<div id="ex5b">
		<h2 class="exerTitle">JavaScript Exercise 5b </h2>
			<form id="regForm">
				<input type="text" id="fname" placeholder = "Grace"><br>
				<input type="text" id="lname" placeholder = "Pimentel"><br>
				<input type="checkbox" id="dog">I have a dog. (Check if you do)<br>
				<input type="text" id="major" placeholder = "Major"><br>
				<input type="button" onclick="howmany();" value="Count of inputs">
			</form>
	</div>
			
<!-- Part C-->
	<div id="ex5c">
		<h2>JavaScript Exercise 5c</h2>
			<form id="colorForm">
				<select id="colorSelect">
					<option>Red</option>
					<option>Blue</option>
					<option>Yellow</option>
					<option>Green</option>
					<option>Purple</option>
					<option>Orange</option>
				</select>
			<input type="button" onclick="colorChange()" value="Change Color">
			</form>
				<p>&nbsp;</p>
	</div>
	
<!-- Part D-->
	<div id="ex5d">
		<div>
			<h2>JavaScript Exercise 5d</h2>
		</div>
		<div>
			<p id="rb" onmouseover="hoverChange()">This sentence will turn whichever color is selected when you mouseover it.</p>
		</div>
	</div>
	
<!-- Part E-->
	<div id="ex5e">
		<h2>JavaScript Exercise 5e</h2>
			<form>
				<input type="text" id="firstoperand" placeholder="First Operand"><br>
				<input type="text" id="secondoperand" placeholder="Second Operand"><br>
				<input type="button" onclick="divide()" value="Divide"><br>
				<input type="button" onclick="multiply()" value="Multiply"><br>
				<p>The answer: <span id="result"></span></p>
			</form>
	</div>
	<footer>
		<a href="https://jigsaw.w3.org/css-validator/validator">
                    <img style="border:0;width:80px;height:30px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!">
        </a>
        <a href="https://validator.w3.org/nu/#textarea">
                    <img style="width:5%;" src="html5logo.png" alt="Valid HTML!">
        </a>
        <p> Created by Grace Pimentel </p><br />
            <p>(Term 2235)</p>
            <?php
        	$filename = 'EX05.php';
        	if(file_exists($filename)){
        		echo "Updates: " . date("F d Y H:ia", filemtime($filename));
        	}
        	?> 
	</footer>
		<script src="EX05.js"></script>
</body>
<?php
         $sql = "SELECT myCounter FROM counter where ID = 2";
         $res = mysqli_query($mysqli, $sql);
         $row = mysqli_fetch_row($res);
         $count = $row[0];
    
         $count++;
      
         $stmt = $mysqli->prepare("UPDATE counter SET myCounter = ? WHERE ID = 2");
         $stmt -> bind_param('i', $count);
         $stmt -> execute();   

      //   $stmt->close();

?>
<div class="myCounter">
    <p style="text-align:center;">Page viewed <?php echo $count; ?> times!</p>
</div>
