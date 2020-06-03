<!DOCTYPE html>

<html>

	<head>
		<title>Sudoku</title>
	</head>

	<header>
		<a href="index.html"><h3>Back Home</h3></a>
	</header>

	<body style="background-color:#c4dd88;">
		<center>
			<h1> Welcome to Sudoku </h1>



			<!-- <input type="submit" class="button" name="easy" value="easy" /> -->

			<form method="post"> 
				<input type="submit" name="easy"
						value="Easy"/> 
				
				<input type="submit" name="medium"
						value="Medium"/>

				<input type="submit" name="hard"
					value="Hard"/> 

					<!-- <input type="submit" name="solution"
						value="Get Solution"/>  -->
			</form> 
			<!-- <form method="post"> 
				
			</form> -->

			<?php

				// $num = shell_exec("sh ./generateuniqueid.sh");
				// echo "<pre>$num</pre>";
				$num = rand(1,1000);
		
				if(isset($_POST['easy'])) { 
					echo "Easy selected";
					callSolve("easy");
				} 
				if(isset($_POST['medium'])) { 
					echo "Medium selected";
					callSolve("medium");
				}
				if(isset($_POST['hard'])) { 
					echo "Hard selected";
					callSolve("hard");
				}
				// if(isset($_POST['solution'])) { 
				// 	//echo "Solutioning";
				// 	$puzzle = shell_exec("sh ./printpuzzle.sh $num");
				// 	echo "<pre>$puzzle</pre>";

				// 	$output = shell_exec("sh ./runsolver.sh $num");
				// 	echo "<pre>$output</pre>";
				// } 

				function callSolve($difficulty) {
					//echo "Solved called";
					//echo "$difficulty";
					//print $num;
					$output = shell_exec("sh ./runbuild.sh $difficulty $num");
					echo "<pre>$output</pre>";
				}
			?>

			



		<center>

		<aside>
			<form method="post"> 
				<input type="submit" name="solution"
						value="Get Solution"/> 
			</form>

			<?php
		
				if(isset($_POST['solution'])) { 
					//echo "Solutioning";
					$puzzle = shell_exec("sh ./printpuzzle.sh");
					echo "<pre>$puzzle</pre>";

					$output = shell_exec("sh ./runsolver.sh");
					echo "<pre>$output</pre>";
				} 
			?>

		</aside>
	</body>

	

	

</html>

