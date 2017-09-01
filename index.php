<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Budgetpedia - Supporting informed debate about the Toronto budget</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="description" content="Learn about Budgetpedia">
  	<meta name="keywords" content="Budget, Open Data, Toronto, Canada, Data Visualization, Public Policy">
  	<meta name="author" content="Budgetpedia, Rafi Chaudhury">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
	<link rel="stylesheet" href="css/budgetpedia-apr2017.css">
	<link rel="stylesheet" href="css/pushy.css">
	<link rel="shortcut icon" href="img/budgetpedia-favicon.ico" type="image/x-icon">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="js/pushy.js"></script>
</head>
<body>
<!-- 	************* SITE DESIGN & STRATEGY: RAFI CHAUDHURY ************* -->


	<div class="container-fluid" id="container-1">
		<?php include 'nav-menu.php' ?>
	</div> <!-- CONTAINER-1 END -->

	<div class="container-fluid">
		
		<div class="row padding-universal" id="site-header">
			<div class="col-sm-12">
					<div class="center vertical-center">
						<span class="budgetpedia-logo">BUDGETPEDIA</span>
						<h2 class="light-text">Supporting informed debate about the Toronto budget</h2> 
					</div>
			</div><!-- COLUMN END -->
			<div class="col-sm-4 padded-top center">
				<div id="box-1">
					<span class="headline-numbers-1">2.6</span> <br>
					<span class="number-description">MILLION <br> RESIDENTS</span>	
				</div>
			</div> <!-- COL END -->

			<div class="col-sm-4 padded-top center padded-col-left">
				<div id="box-2">
					<span class="headline-numbers-2">$12</span><br>
					<span class="number-description">BILLION <br>CITY BUDGET</span>	
				</div>
			</div> <!-- COL END -->
			<div class="col-sm-4 padded-top center padded-col-left">
				<div id="box-3">
					<span class="headline-numbers-3">$330</span><br>
					<span class="number-description">BILLION <br>GDP</span>
				</div>
			</div>
		</div> <!-- ROW END -->

		
		<div class="row padding-universal">
			<div class="col-sm-12 padded-content-h">
				<h1 class="center">WELCOME</h1>
				<p>Budgetpedia helps demystify city budgets, walks you through the budget-setting process and identifies ways in which you as a resident can have a more <strong>active voice</strong> in deciding how the city spends its money. </p>

				<p>We use simple, to-the-point charts and other interactive <strong>data visualizations</strong>  to make budgets more accessible to all audiences at all levels of knowledge. Our goal is to make Budgetpedia a one-stop shop for the easy discovery of financial data on a wide variety of operations in City of Toronto. </p>
			</div>
		</div> <!-- ROW END -->

		<div class="row padding-universal">
			<div class="col-sm-12 padded-content-h">
				<h1 class="center">THE BUDGET</h1>
				<p>The Toronto budget is divided into <strong>operating</strong> and <strong>capital</strong> budgets. Operating budgets account for day-to-day costs of running services using available resources. The capital budgets account for costs of creating new assets, like community centres or roads. </p>

				<p>The operating budget for 2017 was listed at <strong>$12.4 billion</strong>, which is over <strong>$4,300</strong> for every man, woman, and child in the City. The capital budget for the year was listed at over $3B. For the time being, Budgetpedia's current focus is on understanding the operating budget.</p> 
				<a class="button button-shadow" href="about-the-budget.php">LEARN MORE</a>
			</div>
		</div> <!-- ROW END -->

		<div class="row padding-universal">
			<div class="col-sm-12 padded-content-h">
				<h1 class="center">DATA STORIES</h1>
			</div>
			<div class="col-sm-6 padded-content-h">
				<p class="padded-top-md">Relevant data is often obscured within highly complex financial reports that are difficult to understand. Budgetpedia extracts the raw data from government disclosures and converts them into engaging data visualizations. </p>
				
				<p>Open data is a critical to increasing the transparency and accountability of local governments to its constituents. 
				Budgetpedia's <strong>Data Stories</strong> provide helpful additional context designed to assist residents in making sense of the numbers and play a more active role in determining where funding goes. 
				</p>

				<p>Want to learn what budget surpluses and deficits mean for you? Click below.</p>

				<a class="button button-shadow" href="datastory-surpluses-deficits.php">DATA STORY</a>
			</div> <!-- COL END -->
			<div class="col-sm-6">
						<div><p>Click on one of the buttons below to generate the chart</p></div>
						<!-- <span style="display:inline-block; width:50px;"></span> -->
						<ul class="no-bullets">
							<li><input name="g" class="test" type="radio" value="a">City Revenues</input></li>
							<li><input class="test" name="g" type="radio" value="b">City Expenses</input></li>
							<li><input class="test" name="g" type="radio" value="c">Operating Surplus/Deficit </input></li>
						</ul>
						
						<!-- <span style="display:inline-block; width:50px;"></span> -->

						
						<!-- <span style="display:inline-block; width:50px;"></span> -->

					<div id="homepage-chart"></div>
					<p class="small center"><em>Hover (or touch) data points to see actual amounts. Click the &#9776; icon for chart download options.</em></p>
				</div> <!-- COL END -->
		</div> <!-- ROW END -->

		<div class="row padding-universal">
			<div class="col-sm-12 padded-content-h">
				<h1 class="center">BUDGETPEDIA EXPLORER</h1>
				<p>The <strong>Data Explorer</strong> is a detailed visualization engine displaying on-demand budget data across various areas including transportation, social services, health and more. For advanced users in publicy policy, education and industry, Budgetpedia offers training on how to effectively use the Explorer to drive decision-making.</p>

				<a class="button button-shadow" href="http://budgetpedia.ca/explorer">DATA EXPLORER</a>
			</div> <!-- COL END -->
		</div> <!-- ROW END -->

		<div class="row padding-universal">
			<div class="col-sm-12 padded-content-h">
				<h1 class="center">ABOUT US</h1>
			</div> <!-- COL END -->
			<div class="col-sm-6 padded-top">
				<img src="img/CTTO-logo-sm.png" class="img-block img-responsive" alt="CivicTechTO logo">
			</div> <!-- COL END -->
			<div class="col-sm-6">
				<p>Budgetpedia is a nonprofit organization borne out of CivicTechTO. The Budgetpedia team comprises civic action leaders, database and web developers with a common interest in leveraging open data to help inform residents regarding how budgets are set, and the impact that revenue and expense decisions have on the welfare of the people in the city. </p>
				<p>To learn more about the team behind Budgetpedia and the methodology underpinning the data visualizations, <a href="about.html">click here</a></p>				
			</div> <!-- COL END -->

		</div> <!-- ROW END -->

		<div class="row padding-universal" id="footer">
			<?php include 'footer.php' ?>
		</div> <!-- ROW END -->
	</div> <!-- CONTAINER END -->
	
		<script src="js/highcharts.js"></script>
		<script src="js/modules.js"></script>
		<script src="js/exporting.js"></script>
		<script>
			$(function () {
			    var chart = new Highcharts.Chart({
			        chart: {
			            renderTo: 'homepage-chart',
			            type: 'line',
			            title: 'please select a category',
			            backgroundColor: 'rgba(0,0,0,0)'

			        },

			        xAxis: {
			            categories: ['1998','1999','2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015'],
			            labels: {
			                      style: {color: '#EEE'}
			                    }
			        },
			        yAxis: {
			            labels:{
			            	style: {color: '#EEE'}
			            }
			        },
			        credits: {
			            enabled: false
			        }
			    });

			    $("#chartType").change(function() {
			        var type = this.value;
			        if(type !== '0') {
			            $(chart.series).each(function(){
			                this.update({
			                    type: type 
			                }, false);
			            });
			            chart.redraw();
			        }
			    });
			    
			    $(".test").change(function() {
			        var value = this.getAttribute("value");
			        while (chart.series.length > 0) {
			            chart.series[0].remove(true);
			        }   
			        if (value == 'a') {
			            chart.yAxis[0].setTitle(
			            	{ 
			            		text: "$ 000s",
			            		style:{
			            			color: '#EEE'
			            		}
			            	});
			            chart.setTitle(
			            	{
			            		text: "Revenues, 1998-2015",
			            		style:{color: '#f1c40f'}
			            	});
			            chart.addSeries({
			                name: 'Revenues',
			                type: 'line',
			                color: '#f1c40f',  
			                data:[6510513,6316052,6345333,6745486,7084372,7246787,7378993,7879032,8511672,8837997,9408473,10414491,11057740,11311103,11711147,10918942,11249617,12020523]
			            });      
			            
			        } else if (value == 'b') {
			            chart.addSeries({
			                name: 'Expenses',
			                type: 'line',
			                color: '#f1c40f',  
			                data:[10826108,6344384,6574632,6845851,7081194,7384434,7751536,8111105,8575931,9368619,9963305,9917288,10542178,10650071,10650071,10461634,10210891,10826108]
			            });
	              
			            chart.yAxis[0].setTitle({ text: "Expenses" });
			            chart.setTitle(
			            	{
			            		text: "Expenses, 1998-2015",
								style:{color: '#f1c40f'}
			            	});
			        } else if (value == 'c') {
			            chart.addSeries({
			                name: 'Surplus/Deficit',
			                type: 'column',
			                color: '#f1c40f',  
			                data:[-4315595,-28332,-229299,-100365,3178,-137647,-372543,-232073,-64259,-530622,-554832,497203,515562,661032,1061076,457308,1038726,1194415],
	                		negativeColor: 'red'            
			            });
	                    chart.setTitle(
	                    	{
	                    		text: "Surplus/Deficit, 1998-2015",
	        					style:{color: '#f1c40f'}
	                    	});

			        } else {
			                chart.addSeries({
			                name: 'total number of learners',
			                type: 'column',
			                color: '#ffcc99',  
			                data:[100,0,200,0,300,100,400,100,500,200,500,300]             
			            }); 
			        }
			    });
			});
		</script>
</body>
</html>