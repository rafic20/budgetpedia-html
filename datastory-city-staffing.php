<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<meta name="keywords" content="Budget, Open Data, Toronto, Canada, Data Visualization, Public Policy">
	<meta name="author" content="Budgetpedia, Rafi Chaudhury">
	<title>Data Story: City Staffing</title>
	 <meta name="author" content="Rafi Chaudhury">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/budgetpedia-apr2017.css">
	<link rel="stylesheet" href="css/pushy.css">
	<link rel="shortcut icon" href="img/budgetpedia-favicon.ico" type="image/x-icon">
	<script src="js/pushy.js"></script>
</head>
<body>
	<div class="container-fluid" id="container-1">
		<?php include 'nav-menu.php' ?>
	</div> <!-- CONTAINER-1 END -->
	<div class="container-fluid">
			<div class="row" id="understanding-the-numbers">
				<div class="col-sm-12"> <!-- page-title -->
							<span class="sub-headline-data-story">CITY OF TORONTO</span><br>
							<span class="headline-data-story">DATA STORY</span>	
				</div> <!-- COL END -->
				<div class="col-sm-4 padded-top">
					<span class="headline-numbers">2,615,000</span><br>
					<span class="number-description">RESIDENTS</span>
				</div>
				<div class="col-sm-4 padded-top">
					<span class="headline-numbers">690,000</span><br>
					<span class="number-description">FAMILIES</span>
				</div>
				<div class="col-sm-4 padded-top">
					<span class="headline-numbers">100+</span> <br>
					<span class="number-description">LANGUAGES</span>
				</div>
			</div> <!-- ROW END -->
				<div class="row padding-universal" id="about-the-author">
					<?php include 'authors/author-rafi.php' ?>
			</div> <!-- ROW END -->

			<div class="row padding-universal" id="footer">
				<?php include 'footer.php' ?>
			</div> <!-- ROW END -->
	
	</div> <!-- CONTAINER END -->
	<script src="js/highcharts.js"></script>
	<script src="js/modules.js"></script>
	<script src="js/exporting.js"></script>

</body>