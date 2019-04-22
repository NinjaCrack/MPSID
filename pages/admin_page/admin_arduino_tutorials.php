<?php

require_once('auth.php');

?>
<!DOCTYPE html>
<html>
<head>
<title> Arduino Tutorials</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700">
 <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<?php include("admin_nav.php"); ?>
<div class="container con pt-4">
		
				<h1 align="center">Arduino Tutorials</h1>
	
			
				
					
					
	<div id="list-example" class="list-group mb-5" align="center">
					  <a class="list-group-item list-group-item-action con" href="#list-item-1" style="color: aqua;"> String Character Analysis</a>
					  <a class="list-group-item list-group-item-action con" href="#list-item-2" style="color: aqua;">String Append Operator</a>
					  <a class="list-group-item list-group-item-action con" href="#list-item-3" style="color: aqua;">String Case Changes</a>
					  <a class="list-group-item list-group-item-action con" href="#list-item-4" style="color: aqua;">String Addition Operator</a>
					  <a class="list-group-item list-group-item-action con" href="#list-item-5" style="color: aqua;">String Characters</a>
					  <a class="list-group-item list-group-item-action con" href="#list-item-6" style="color: aqua;">String Comparison Operator</a>
					  <a class="list-group-item list-group-item-action con" href="#list-item-7" style="color: aqua;">String Constructors</a>
					  <a class="list-group-item list-group-item-action con" href="#list-item-8" style="color: aqua;">String Index Of</a>
					  <a class="list-group-item list-group-item-action con" href="#list-item-9" style="color: aqua;">String Starts with Ends with</a>
					  <a class="list-group-item list-group-item-action con" href="#list-item-10" style="color: aqua;">String Substrings</a>
					  <a class="list-group-item list-group-item-action con" href="#list-item-11" style="color: aqua;">String To Int</a>
	</div>
			
			<div class="container pb-5">
	<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy">
						
				<div class="mb-5">
					  <h4 id="list-item-1" class="ml-2">Character Analysis</h4>

					  <p class="ml-5">
					  In this example we user the operators that allow us to recognize the type of characters we are dealing with. It is useful to check if a character is ASCII, or is uppercase, or numeric, or its a punctuation mark and so forth. The options available cover a variety of situations and this is demonstrated in the sketch below. Every character sent to the board through the serial monitor of the Arduino Software(IDE) is analyzed by the sketch that returns all the inforamation it was able to find. A single character may trigger more than one condition and therefore you may get multiple answers for a single entry.
					</p>
					<h5>Hardware Required:</h5>
					<p class="ml-5">
						Arduino or Genuino Board
					</p>
					 	
					 	<div class="embed-responsive embed-responsive-16by9">
						<video width="320" height="240" controls> <source src="../../video/CharacterAnalysis.mp4" type="video/mp4"></video>
					 	</div>
				</div>
				<div class="mb-5">
					  <h4 id="list-item-2">String Append Operator</h4>
					  <p class="ml-5">Just as you can concatenate Strings with other data objects using the <em>StringAdditionOperator</em>, you can also user the <em>+=</em> operator and the <em>Concat()</em> method to append things to Strings. The <em>+=</em> operator and the <em>concat()</em> method work the same way, it's just a matter of which style you prefer.</p>
					  <h5>Hardware Required:</h5>
					<p class="ml-5">
						Arduino or Genuino Board
					</p>
					  		<div class="embed-responsive embed-responsive-16by9">
					  			<video width="320" height="240" controls> <source src="../../video/AppendOperator.mp4" type="video/mp4"></video>
							</div>
				</div>
				<div class="mb-5">
					  <h4 id="list-item-3">String Case Changes</h4>
					  <p class="ml-5">
					  	The <em>String</em> case change functions allow you to change the case of a String. They work just as their names imply. <em>toUpperCase()</em> changes the Whole String to upper case characters, adn <em>toLowerCase</em> changes the Whole String to lower case characters. Only the characters A to Z.
					  </p>
					  <h5>Hardware Required:</h5>
						<p class="ml-5">
							Arduino or Genuino Board
						</p>
						 	
			
					  		<div class="embed-responsive embed-responsive-16by9 mb">
								<video width="320" height="240" controls><source src="../../video/casechanges.mp4" type="video/mp4"></video>
					 		</div>
				</div>
				<div class="mb-5">
					  <h4 id="list-item-4">String Addition Operator</h4>
					  <p class="ml-5">
					  	You can add <em>Strings</em> together in a variety of ways. This is called <em>concatenation</em> and it results in the original String being longer by the length of the String or character array with which you can concatenate it. The <em>+</em> operator allows you to combine a String with another String, with a constant or variable number, or a constant character. 
					  </p>
					  <h5>Hardware Required:</h5>
						<p class="ml-5">
							Arduino or Genuino Board
						</p>
					  		<div class="embed-responsive embed-responsive-16by9">
								<video width="320" height="240" controls> <source src="../../video/AdditionOperator.mp4" type="video/mp4"></video>
					 	</div>
				</div>
				<div class="mb-5">
					  <h4 id="list-item-5"> String Characters</h4>
					  <p class="ml-5">
					  	The <em>String</em> functions <em>charAt()</em> and <em>setCharAt()</em> are used to get or set the value of a character at a given position in a String.
					  </p>
					  <p class="ml-5">
					  	At their simplest, these functions help you search and replace a given character.
					  </p>
					  <h5>Hardware Required:</h5>
						<p class="ml-5">
							Arduino or Genuino Board
						</p>  

					  		<div class="embed-responsive embed-responsive-16by9">
								<video width="320" height="240" controls>  <source src="../../video/Characters.mp4" type="video/mp4"></video>
					 		</div> 
				</div>
				<div class="mb-5">
					  <h4 id="list-item-6"> String Comparison Operator</h4>
					  <p class="ml-5">
					  	The String comparison operators <em> ==  , !=  , >  , <  , >=  , <=  </em> , and the <em>equals()</em>  and <em>equalsIgnoreCase()</em>  methods allow you to make alphabetic comparisons between Strings. They're useful for sorting and alphabetizing, among other things.
					  </p>
					 
					  <h5>Hardware Required:</h5>
						<p class="ml-5">
							Arduino or Genuino Board
						</p>  

					  		<div class="embed-responsive embed-responsive-16by9">
								<video width="320" height="240" controls>  <source src="../../video/ComparisonOperator.mp4" type="video/mp4"></video>
					 		</div> 
				</div>
				<div class="mb-5">
					  <h4 id="list-item-7"> String Constructors</h4>
					  <p class="ml-5">
					  	The String object allows you to manipulate strings of text in a variety of useful ways. You can append characters to Strings, combine Strings through concatenation, get the length of a String, search and replace substrings, and more. This tutorial shows you how to initialize String objects.
					  </p>
					 
					  <h5>Hardware Required:</h5>
						<p class="ml-5">
							Arduino or Genuino Board
						</p>  

					  		<div class="embed-responsive embed-responsive-16by9">
								<video width="320" height="240" controls>  <source src="../../video/Constructors.mp4" type="video/mp4"></video>
					 		</div> 
				</div>
				<div class="mb-5">
					  <h4 id="list-item-8"> String Index Of</h4>
					  <p class="ml-5">
					  	The String object <em>indexOf()</em> method gives you the ability to search for the first instance of a particular character value in a String. You can also look for the first instance of the character after a given offset. The <em>lastIndexOf()</em> method lets you do the same things from the end of a String.
					  </p>
					 
					  <h5>Hardware Required:</h5>
						<p class="ml-5">
							Arduino or Genuino Board
						</p>  

					  		<div class="embed-responsive embed-responsive-16by9">
								<video width="320" height="240" controls>  <source src="../../video/INDEXOF.mp4" type="video/mp4"></video>
					 		</div> 
				</div>
				<div class="mb-5">
					  <h4 id="list-item-9">String Starts with Ends with</h4>
					  <p class="ml-5">
					  	The String functions <em>startsWith()</em>  and <em>endsWith()</em> allow you to check what character or substring a given String starts or ends with. They're basically special cases of <em>substring.</em>

					  </p>
					 
					  <h5>Hardware Required:</h5>
						<p class="ml-5">
							Arduino or Genuino Board
						</p>  

					  		<div class="embed-responsive embed-responsive-16by9">
								<video width="320" height="240" controls>  <source src="../../video/StartswithEndswith.mp4" type="video/mp4"></video>
					 		</div> 
				</div>
				<div class="mb-5">
					  <h4 id="list-item-10">String Substrings</h4>
					  <p class="ml-5">
					  	The String function <em>substring()</em>  is closely related to <em> charAt()  , startsWith() </em> and <em>endsWith() </em>. It allows you to look for an instance of a particular substring within a given String.

					  </p>
					 
					  <h5>Hardware Required:</h5>
						<p class="ml-5">
							Arduino or Genuino Board
						</p>  

					  		<div class="embed-responsive embed-responsive-16by9">
								<video width="320" height="240" controls>  <source src="../../video/Substrings.mp4" type="video/mp4"></video>
					 		</div> 
				</div>
				<div class="mb-5">
					  <h4 id="list-item-11">String To Int</h4>
					  <p class="ml-5">
					  	The <em>toInt()</em> function allows you to convert a String to an integer number.


					  </p>
					 
					  <h5>Hardware Required:</h5>
						<p class="ml-5">
							Arduino or Genuino Board
						</p>  

					  		<div class="embed-responsive embed-responsive-16by9">
								<video width="320" height="240" controls>  <source src="../../video/ToInt.mp4" type="video/mp4"></video>
					 		</div> 
				</div>
		
		</div>
		</div>
	</div>

</body>
</html>