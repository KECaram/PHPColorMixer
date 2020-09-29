
<!-- Keith Caram
 INFO.305.061: Survey of Python, Perl, and PHP
 Assignment #2 - Simple PHP Program
					Program Summary
This program generates a simple form that prompts the use to enter two
different colors two mix. After the user submits the form, the page stops displaying
the submit form and now displays a line of text telling them what new color
the two colors they've mixed makes. Includes checking for uncrecognizable
input and also ignores case of input.
-->
<?php
if (!isset($_POST['submit'])) {
	?>
	<center><form method="post">
       Enter Two Crayola Original 10 Colors and I'll mix them for you!<br>
       Crayola Original 10 Colors include: red, yellow, blue, green, orange, pink, purple, black, white, and brown.<br>
       First Color   <input name="firColor" type="text" size="8"> 
       Second Color <input type="text" name="secColor" size="8">
       	<input type="submit" name="submit" value="Mix Colors!">
	</form></center>
<?php
} 
else {

	if (isset($_POST['submit'])) {
		$firstColor = $_POST['firColor'];
		$secondColor =  $_POST['secColor'];
		$firstColor = strtolower($firstColor);
		$secondColor = strtolower($secondColor);

		if(($firstColor === "blue" && $secondColor === "red") || ($firstColor === "red" && $secondColor === "blue")){
			echo "red and blue mix together to make purple.";
		}
		elseif (($firstColor === "blue" && $secondColor === "yellow") || ($firstColor === "yellow" && $secondColor === "blue")) {
			echo "blue and yellow mix together to make green.";
		}
		elseif (($firstColor === "red" && $secondColor === "yellow") || ($firstColor === "yellow" && $secondColor === "red")) {
			echo "yellow and red mix together to make orange.";
		}
		elseif (($firstColor === "red" && $secondColor === "orange") || ($firstColor === "orange" && $secondColor === "red")) {
			echo "orange and red mix together to make the tertiary color red-orange (can be light like salmon or dark like burnt sienna).";
		}
		elseif (($firstColor === "orange" && $secondColor === "yellow") || ($firstColor === "yellow" && $secondColor === "orange")) {
			echo "yellow and orange mix together to make the tertiary color yellow-orange (can be light like mustard or dark like goldenrod).";
		}
		elseif (($firstColor === "green" && $secondColor === "yellow") || ($firstColor === "yellow" && $secondColor === "green")) {
			echo "green and yellow mix together to make the tertiary color yellow-green (can be light like chartruce or dark like olive green).";
		}
		elseif (($firstColor === "pink" && $secondColor === "purple") || ($firstColor === "purple" && $secondColor === "pink")) {
			echo "pink and purple mix together to make the tertiary color magenta (can be light like rose pink or dark like eggplant)";
		}
		elseif (($firstColor === "blue" && $secondColor === "green") || ($firstColor === "green" && $secondColor === "blue")) {
			echo "blue and green mix together to make the tertiary color blue-green (can be light like aquamarine or dark like teal).";
		}
		elseif (($firstColor === "blue" && $secondColor === "purple") || ($firstColor === "purple" && $secondColor === "blue")) {
			echo "blue and purple mix together to make the tertiary color indigo (can be light like perriwinkle or dark like plum).";
		}
		elseif ($firstColor === $secondColor && $secondColor !== "" && $firstColor !== "") {
			echo "You mixed $firstColor with $secondColor so it remained the same.";
		}
		elseif ($firstColor === "red" || $firstColor === "green" || $firstColor === "yellow" || $firstColor === "blue" || $firstColor === "purple" || $firstColor === "orange" || $firstColor === "pink" || $firstColor === "black" || $firstColor === "brown") {

			if($secondColor === "white" && $firstColor === "red"){
				echo "red and white mix together to make pink.";
			}

			elseif($secondColor === "white" && $firstColor === "black"){
				echo "black and white mix together to make gray.";
			}
			elseif($secondColor === "white" ){

				echo "$secondColor and $firstColor mix together to make light $firstColor. 
					Anything mixed with $secondColor makes a lighter version of that color.";
			}
			elseif($secondColor === "black"){
				echo "$secondColor and $firstColor mix together to make $secondColor. Anything mixed with $secondColor makes $secondColor.";
			}

			elseif ($firstColor === "brown" || $secondColor === "brown") {
				echo "$firstColor and $secondColor mix together to make a shade of brown. Any color mixed with brown makes a different shade of brown.";
			}

			elseif ($secondColor === "red" || $secondColor === "green" || $secondColor === "yellow" || $secondColor === "blue" 
				|| $secondColor === "purple" || $secondColor === "orange" || $secondColor === "pink") {

				echo "$firstColor and $secondColor mix together to make a shade of brown. Mixing non-primary colors or colors that are not adjacent
						on the color wheel generally result in shades of brown.";
			}
			else{
				echo "I don't recognize your input, please go back and enter two Crayola Original 10 Colors so I can mix them for you!";
			}	
		}
		elseif ($secondColor === "red" || $secondColor === "green" || $secondColor === "yellow" || $secondColor === "blue" || $secondColor === "purple" || $secondColor === "orange" || $secondColor === "pink" || $secondColor === "black" || $secondColor === "brown") {

			if($firstColor === "white" && $secondColor === "red"){
				echo "red and white mix together to make pink.";
			}

			elseif($firstColor === "white" && $secondColor === "black"){
				echo "black and white mix together to make gray.";
			}

			elseif($firstColor === "white"){
				echo "$secondColor and $firstColor mix together to make light $secondColor. 
					Anything mixed with $firstColor makes a lighter version of that color.";
			}
			elseif($firstColor === "black"){
				echo "$secondColor and $firstColor mix together to make $firstColor. Anything mixed with $firstColor makes $firstColor.";
			}
			elseif ($firstColor === "brown" || $secondColor === "brown") {
				echo "$firstColor and $secondColor mix together to make a shade of brown. Any color mixed with brown makes a different shade of brown.";
			}
			else{
				echo "I don't recognize your input, please go back and enter two Crayola Original 10 Colors so I can mix them for you!";
			}
		}
		else{
			echo "I don't recognize your input, please go back enter two Crayola Original 10 Colors so I can mix them for you!";
		}
	}
}
?>

