<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Budgetpedia - Supporting informed debate about the Toronto budget</title>
	<meta name="description" content="Learn about Budgetpedia">
  	<meta name="keywords" content="Budget, Open Data, Toronto, Canada, Data Visualization, Public Policy">
  	<meta name="author" content="Budgetpedia, Rafi Chaudhury">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="css/material.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/budgetpedia-apr2017.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<link rel="shortcut icon" href="img/budgetpedia-favicon.ico" type="image/x-icon">
	   <!-- Material Design Lite -->
	   <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	   <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	   <!-- Material Design icon font -->
	   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
	<?php include 'nav-menu.php' ?>
	    <div class="page-content"> <!-- CONTAINER-FLUID excluded -->
	    		<div class="row padding-universal" id="site-header">
	    			<div class="col-sm-12">
	    					<div class="center vertical-center">
	    						<h1>Budgetpedia</h1>
	    						<p class="marquee-text-sm light-text">Visualizing the Toronto Budget for Civic Engagement</p> 
	    					</div>
	    			</div>
	    			<!-- COLUMN END -->
	    			<div class="col-sm-4 padded-top center">
	    				<div class="box-1">
	    					<span class="headline-numbers-1">2.6</span> <br>
	    					<span class="number-description">MILLION <br> RESIDENTS</span>	
	    				</div>
	    			</div> 
	    			<!-- COL END -->

	    			<div class="col-sm-4 padded-top center padded-col-left">
	    				<div class="box-1">
	    					<span class="headline-numbers-2">$12</span><br>
	    					<span class="number-description">BILLION <br>CITY BUDGET</span>	
	    				</div>
	    			</div> <!-- COL END -->
	    			<div class="col-sm-4 padded-top center padded-col-left">
	    				<div class="box-1">
	    					<span class="headline-numbers-3">$330</span><br>
	    					<span class="number-description">BILLION <br>GDP</span>
	    				</div>
	    			</div>
	    		</div> <!-- ROW END -->
				<div class="row padding-universal">
					<div class="col-sm-12 padded-content-right">
						<p>Budgetpedia helps demystify city budgets, walks you through the budget-setting process and identifies ways in which you as a resident can have a more <strong>active voice</strong> in deciding how the city spends its money. We use simple, to-the-point charts and other interactive <strong>data visualizations</strong>  to make budgets more accessible to all audiences at all levels of knowledge.</p>
					</div> <!-- COL END -->
				</div> <!-- ROW END -->

				<div class="row padding-universal">
					<div class="col-sm-12">
						<div class="heading_subheading_border heading-color">
							<h1>Visualize the Budget</h1>
							<p>On-demand data when you need it</p>
						</div> <!-- HEADING END -->
					</div> <!-- COL END -->
				</div> <!-- ROW END -->

				<div class="row padding-universal">
					<div class="col-sm-6 padded-top-md padded-content-right">
						<p>Open data is a critical to increasing the transparency and accountability of local governments to its constituents.
						Budgetpedia's <strong>Data Stories</strong> provide helpful additional context designed to assist residents in making sense of the numbers.
						</p>
							<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">TIP</button> <span style="padding-left: 5px; font-size: 1em;">Click on one of the buttons below to generate the chart</span>.
						
							<!-- <span style="display:inline-block; width:50px;"></span> -->
							<ul class="no-bullets padded-top-sm">
								<li><input name="g" class="test" type="radio" value="a">City Revenues</input></li>
								<li><input class="test" name="g" type="radio" value="b">City Expenses</input></li>
								<li><input class="test" name="g" type="radio" value="c">Operating Surplus/Deficit </input></li>
							</ul>
							<p>Check out our more of our <strong>Data Stories</strong> below.</p>	
					</div> <!-- COL END -->
					<div class="col-sm-6 padded-col-left-lg">
						<!-- MDL Square card -->
						<div class="demo-card-square-md mdl-card mdl-shadow--2dp">
						  <div class="mdl-card__title mdl-card--expand" id="homepage-chart-bg">
						    <!-- <h2 class="mdl-card__title-text">Dynamic Charts</h2> -->
						    <div id="homepage-chart"></div>
						  </div>
						  <div class="mdl-card__supporting-text">
						    Hover (or touch) data points to see actual amounts. Click the &#9776; icon for chart download options.
						  </div>
						  <!-- <div class="mdl-card__actions mdl-card--border">
						    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="datastory-surpluses-deficits.php">EXPLORE</a>
						  </div> --> <!-- CARD BORDER END -->
						</div>  <!-- DEMO CARD END -->
					</div>
					</div> <!-- COL END -->			
				</div> <!-- ROW END -->

				<div class="row padding-universal" id="data-stories">
					<div class="col-sm-12">
						<div class="heading_subheading_border heading-color">
							<h1>Data Stories</h1>
							<p>Putting the numbers into context</p>
						</div> <!-- HEADING END -->
					</div> <!-- COL END -->					
				</div> <!-- ROW END -->

				<div class="row padding-universal">
					<div class="col-sm-6">
						<!-- MDL Square card -->
						<div class="demo-card-square mdl-card mdl-shadow--2dp">
						  <div class="mdl-card__title mdl-card--expand" id="surplus-deficit">
						    <h2 class="mdl-card__title-text">Surpluses & Deficits</h2>
						  </div>
						  <div class="mdl-card__supporting-text">
						    How they're calculated and what they mean for you.
						  </div>
						  <div class="mdl-card__actions mdl-card--border">
						    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="datastory-surpluses-deficits.php">EXPLORE</a>
						  </div> <!-- CARD BORDER END -->
						</div>  <!-- DEMO CARD END -->
					</div> <!-- COL END -->

					<div class="col-sm-6">
						<!-- MDL Square card -->
						<div class="demo-card-square mdl-card mdl-shadow--2dp">
						  <div class="mdl-card__title mdl-card--expand" id="city-workforce">
						    <h2 class="mdl-card__title-text">Workforce Size & Salaries</h2>
						  </div>
						  <div class="mdl-card__supporting-text">
						    How the city's 51,000 employees are remunerated.
						  </div>
						  <div class="mdl-card__actions mdl-card--border">
						    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="datastory-city-staffing.php">EXPLORE</a>
						  </div> <!-- CARD BORDER END -->
						</div>  <!-- DEMO CARD END -->
					</div> <!-- COL END -->
				</div> <!-- ROW END -->

				<div class="row padding-universal">
					<div class="col-sm-6 padded-top-sm">
							<div class="heading_subheading_border heading-color">
								<h1>Data Explorer</h1>
								<p>Granular-level data visualization</p>
							</div> <!-- HEADING END -->
							<div class="padded-top-sm">
								<p>The <strong>Data Explorer</strong> is a visualization engine displaying on-demand budget data across various areas including transportation, social services, health and more. For advanced users in publicy policy, education and industry, Budgetpedia offers training on how to effectively use the Explorer to drive decision-making.</p>	
							</div>
					</div> <!-- COL END -->
					<div class="col-sm-6 padded-top-sm padded-col-left-lg">
						<!-- MDL Square card -->
						<div class="demo-card-square-sm mdl-card mdl-shadow--2dp">
						  <div class="mdl-card__title mdl-card--expand" id="data-explorer-card">
						    <!-- <h2 class="mdl-card__title-text"></h2> -->
						  </div>
						  <!-- <div class="mdl-card__supporting-text">
						    How they're calculated and what they mean for you.
						  </div> -->
						  <div class="mdl-card__actions mdl-card--border	">
						  	<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="http://budgetpedia.ca/explorer">
						  	  DATA EXPLORER (BETA)
						  	</a>
						  </div> <!-- CARD BORDER END -->
						</div>  <!-- DEMO CARD END -->
					</div> <!-- COL END -->
				</div> <!-- ROW END -->


				<div class="row padding-universal">
					<div class="col-sm-12">
						<div class="heading_subheading_border heading-color">
							<h1>About Us</h1>
							<p>Budgetpedia's Mission, Vision and Values</p>
						</div> <!-- HEADING END -->
					</div> <!-- COL END -->
				</div> <!-- ROW END -->

				<div class="row padding-universal">
					<div class="col-sm-6">
						<p>Budgetpedia is a nonprofit organization borne out of <strong>CivicTechTO</strong>. The Budgetpedia team comprises civic action leaders, database and web developers with a common interest in leveraging open data to help inform residents regarding how budgets are set, and the impact that revenue and expense decisions have on the welfare of the people in the city. </p>
						<p>To learn more about the team behind Budgetpedia and the methodology underpinning the data visualizations, <a href="about.php">click here</a></p>				
					</div> <!-- COL END -->
					<div class="col-sm-6">
						<img src="img/CTTO-logo-sm.png" class="img-block img-responsive" alt="CivicTechTO logo">
					</div> <!-- COL END -->
				</div> <!-- ROW END -->

				<div class="row padding-universal" id="footer">
					<?php include 'footer.php' ?>
				</div> <!-- ROW END -->
			</div> <!-- CONTAINER END -->	
	    </div> <!-- PAGE CONTENT END -->
	  </main>
	</div>
		
		<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="js/material.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
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