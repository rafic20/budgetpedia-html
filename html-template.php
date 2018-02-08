<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Learn about Budgetpedia">
  	<meta name="keywords" content="Budget, Open Data, Toronto, Canada, Data Visualization, Public Policy">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="css/material.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/budgetpedia-apr2017.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<link rel="shortcut icon" href="img/budgetpedia-favicon.ico" type="image/x-icon">
	   <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<?php include 'nav-menu.php' ?>
	    <div class="page-content"> 
			<div class="row" id=""> <!-- ROW WITH DEFAULT BOOTSTRAP PADDING -->
				<div class="col-sm-12" style="background:yellow; height: 20vh;"> <!-- COLUMN 1 OF 1  -->

					<p>COLUMN 1 of 1 CONTENT <br>
					".col-sm-12" class applied <br>
					DEFAULT BOOTSTRAP PADDING <br>
					</p>


				</div> <!-- COL END -->
			</div> <!-- ROW END -->

			<div class="row padding-universal">
				<div class="col-sm-6" style="background: lightblue; height: 20vh;"> 
					
					<p>HALF-WIDTH COLUMN 1 CONTENT</p>
					".col-sm-6" class applied <br>
					<p>".padding-universal" class applied</p>

				</div> <!-- COLUMN END -->		
				<div class="col-sm-6" style="background: lightgreen;height: 20vh;">
					
					<p>HALF-WIDTH COLUMN 2 CONTENT</p>
					".col-sm-6" class applied <br>
					<p>".padding-universal" class applied</p>

				</div> <!-- COL END -->
			</div> <!-- ROW END -->
			<div class="row">
				<div class="col-sm-3" style="background: lightpink; height: 20vh;">
					
					<p>QUARTER WIDTH COLUMN 1 <br>
					".col-sm-3" class applied <br>
					</p>
				
				</div> <!-- COL END -->
				<div class="col-sm-3" style="background: lightblue; height: 20vh;">
					
					<p>QUARTER WIDTH COLUMN 2</p>
					".col-sm-3" class applied <br>
				
				</div> <!-- COL END -->
				<div class="col-sm-3" style="background: lightgrey; height: 20vh;">
					
					<p>QUARTER WIDTH COLUMN 3</p>
					".col-sm-3" class applied <br>
				
				</div> <!-- COL END -->
				<div class="col-sm-3" style="background: lightgreen; height: 20vh;">
					
					<p>QUARTER WIDTH COLUMN 4</p>
					".col-sm-3" class applied <br>
				
				</div> <!-- COL END -->
			</div> <!-- ROW END -->

			<!-- PAGE FOOTER -->
			<div class="row padding-universal" id="footer">
				<?php include 'footer.php' ?>
			</div> <!-- ROW END -->
		</div> <!-- PAGE-CONTENT END -->

	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/material.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>