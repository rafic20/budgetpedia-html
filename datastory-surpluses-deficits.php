<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Understanding Budget Surpluses and Deficits - Budgetpedia</title>
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
			<div class="row" id="understanding-the-numbers">
				<div class="col-sm-12"> <!-- page-title -->
							<span class="sub-headline-data-story">CITY OF TORONTO</span><br><br>
							<span class="headline-data-story">DATA STORY</span>	
				</div> <!-- COL END -->
				<div class="col-sm-4 padded-top padded-col-left-sm">
						<span class="headline-numbers">2,615,000</span><br>
						<span class="number-description">RESIDENTS</span>	
				</div>
				<div class="col-sm-4 padded-top padded-col-left-sm">
					<span class="headline-numbers">690,000</span><br>
					<span class="number-description">FAMILIES</span>
				</div>
				<div class="col-sm-4 padded-top padded-col-left-sm">
					<span class="headline-numbers">100+</span> <br>
					<span class="number-description">LANGUAGES</span>
				</div>
			</div> <!-- ROW END -->
			
			<div class="row padding-universal">
				<div class="col-sm-12">
					<div class="heading_subheading_border heading-color">
						<h1>Surpluses & Deficits</h1>
						<p>How they're calculated and what they mean for you</p>
						<p><em>by <strong>Rafi Chaudhury</strong>, Budgetpedia Project Manager</em></p>
					</div> <!-- HEADING END -->
				</div> <!-- COL-12 END -->
				<div class="col-sm-6 padded-top-sm">
					<p>
						In order to better understand how the city makes and spends money, let's take a quick tour of the City of Toronto's audited Statement of Operations for the year ending <strong>December 31, 2015</strong>. </p>

					<p>
						At its simplest level, the annual financial statement shows whether there was a surplus for the year, in which revenues exceeded expenses, or a deficit, in which expenses exceeded revenues. 
					</p>
					<p>
						In 2015, revenues were higher than expenses, resulting in a surplus of <strong>$1.19 billion</strong>. According to City policy, 75% of this surplus ($893 million) will be allocated to infrastructure projects within the capital budget. The remaining 25% ($298 million) will be allocated to top up reserves to meet financial obligations. 
					</p>
				</div> <!-- COL-6 END -->
					
					<div class="col-sm-6 padded-top-sm">
						<!-- MDL Square card -->
						<div class="demo-card-square mdl-card mdl-shadow--2dp">
						  <div class="mdl-card__title mdl-card--expand" id="surplus-calculation">
						    <span class="mdl-card__title-text">
						    	<h2 class="marquee-text">$1.19 Billion</h2>
						    	<br><br>
						    </span>
						  </div>
						  <div class="mdl-card__supporting-text">
						    Toronto's 2015 Operating Surplus. In 2014, the reported surplus was <strong>$889 million</strong>. 
						    						        	<br><br>
						    						        	<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="https://www1.toronto.ca/wps/portal/contentonly?vgnextoid=c13195932a5e6510VgnVCM10000071d60f89RCRD">SOURCE</a>
						  </div>
						</div>  <!-- DEMO CARD END -->
					</div> <!-- COL-6 END -->
			</div> <!-- ROW END -->

			<div class="row padding-universal">
				<div class="col-sm-12">
					<div class="heading_subheading_border heading-color">
						<h2>The Historical Picture</h2>
						<p>Trends since 1998</p>
					</div> <!-- HEADING END -->
				</div> <!-- COL-12 END -->
			</div> <!-- ROW END -->

			<div class="row padding-universal">
				<div class="col-sm-12 padded-top-sm">
					<div id="chart"></div>
					<p class="padded-top-sm">This chart displays city revenues and expenses since 1998. As of 2015, city revenues have almost doubled from the $6.3 billion recorded in 2000. </p>
					<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">TIP</button>
					 <p class="small padded-top-sm">Tap on points on the chart (or hover your mouse) to see the dollar amount for that year. Move your finger across the chart to see values for each year.</p>
						        			    	
				</div> <!-- COL END -->
			</div> <!-- ROW END -->

			<div class="row padding-universal">
				<div class="col-sm-6 padded-top-sm">
					<div class="heading_subheading_border heading-color">
						<h2>Operating Balance Trends</h2>
						<!-- <p></p> -->
					</div> <!-- HEADING END -->
						<p class="padded-top">Toronto has run sustained operating surpluses since 2009, when revenues reached $10.9 billion. The highest surplus recorded so far was $1.19 billion in 2015. Operating surpluses are shown in <span style="color: rgb(124,181,236)">blue</span> and deficits are shown in <span style="color: red">red</span>. 
			        	</p>
				</div> <!-- COL END -->				
				<div class="col-sm-6">
					<div class="demo-card-square-lg mdl-card mdl-shadow--2dp">
					  <div class="mdl-card__title mdl-card--expand" id="col-6-chart">
					    <div id="bar-chart"></div>
					  </div>
					  <div class="mdl-card__supporting-text">
					    Hover (or touch) data points to see actual amounts. Click the &#9776; icon for chart download options.
					  </div>
					  <div class="mdl-card__actions mdl-card--border">
					    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="datastory-surpluses-deficits.php">EXPLORE</a>
					  </div> <!-- CARD BORDER END -->
					</div>  <!-- DEMO CARD END -->
				</div> <!-- COL END -->
			</div> <!-- ROW END -->
			
			<div class="row padding-universal">
				<div class="col-sm-12">
					<div class="heading_subheading_border heading-color">
						<h2>Revenues</h2>
						<p>How the city finances operations</p>
					</div> <!-- HEADING END -->
				</div> <!-- COL END -->
			</div> <!-- ROW END -->

			<div class="row padding-universal">
				<div class="col-sm-10 col-sm-offset-1 padded-top-sm">
					<div id="stackedBar"></div>
				</div> <!-- COL END -->
				
				<div class="col-sm-12">
		        	<p>Unlike a business, the City does not make the bulk of its money by selling goods and services. Taxes and funding transfers make up the majority of the funds used by the city to operate. The charts below show the largest revenue sources and their proportion relative to the total revenue base.</p>

					<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">TIP</button>
					<p class="padded-top-sm small">Tap the legend labels to remove them from the series. Tap again to add them back. This lets you view individual numbers in isolation.</p>

					<p>The <strong>User Charges</strong> category includes a number of sub-categories that generate fees for the City. This includes transportation services such as the Toronto Transit Commission. It also includes recreational and cultural services such as parks, golf courses and museums.</p>
					
					<p>The "Other" category under includes revenues from the following sources: 
						<ul>
							<li>Government Business Enterprise Earnings</li>
							<li>Investment Income</li>
							<li>Development Charges</li>
							<li>Rent and Concessions</li>
							<li>Other expenses</li>
						</ul>
					</p>
				</div> <!-- COL END -->
			</div> <!-- ROW END -->
				
				
			<div class="row padding-universal">
				<div class="col-sm-12">
					<div class="heading_subheading_border heading-color">
						<h2>City Expenses</h2>
						<p>What the money was spent on and how much</p>
					</div> <!-- HEADING END -->
				</div> <!-- COL END -->
			</div> <!-- ROW END -->

			<div class="row padding-universal">
				<div class="col-sm-12">
					<p>Expenditures in 2015 totaled $10.83 billion, a 3% increase over the $10.46 billion spent in 2014. The largest expenditure categories were Transportation, Social and Family Services and Protection to Persons and Property, which comprised 62% of total expenditure.</p> <br><br>
			    	<div id="expenses-chart"></div>

					<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">TIP</button>
						<p class="small padded-top-sm">
							Tap the legend labels to remove them from the series. Tap again to add them back. This lets you view individual numbers in isolation.	
						</p>
				</div> <!-- COL END -->
			</div> <!-- ROW END -->
				

			<div class="row padding-universal">
				<div class="col-sm-12">
					<div class="heading_subheading_border heading-color">
						<h2>Spending Implications</h2>
						<p>How are surpluses spent?</p>
					</div> <!-- HEADING END -->
				</div> <!-- COL END -->

				<div class="col-sm-6 padded-top-sm">
					<div class="padded-content-h-left">
						<p>Toronto recorded an annual surplus of $1.19 billion in 2015 and has an <strong>accumulated surplus</strong> of $21.24 billion. Does that mean that $21 billion is available for spending on public services?</p>

						<p>Not exactly. As per provincial law, Toronto is required to balance its budget, i.e. ensure that budgeted expenses in a financial year do not exceed budgeted revenues. In practice, this results in operating surpluses due to conservative budgeting practices. Of that surplus, 75% is allocated to spending on projects in the capital budget with the remainder allocated to city reserves to meet various other financial obligations.</p> 

						<p>The accumulated surplus number is arrived at by first adding up the amounts that the city has invested in capital assets (such as land and buildings) and has in operating fund reserves and other types of reserves. Then, the total of expected future payouts and allocations related to the capital fund, mortgages and debt repayments are subtracted. The chart on the right displays how the numbers work out.</p>

						<p>For 2015, <strong>$2.73 billion</strong> of the accumulated surplus is allocated to funding services in the operating budget. </p>
					</div>
				</div> <!-- COL END -->
				<div class="col-sm-5 padded-top-sm">
					<!-- MDL Square card -->
					<div class="demo-card-square mdl-card mdl-shadow--2dp">
					  <div class="mdl-card__title mdl-card--expand">
					    <div id="drilldown"></div>
					  </div>
<!-- 					  <div class="mdl-card__supporting-text">

					  	</div>
 -->					  <div class="mdl-card__actions mdl-card--border">
					    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">TIP</button> <p class="small padded-top-sm">Click or tap the individual bars to drill down into the sub-categories.</p>
					  </div> <!-- CARD BORDER END -->
					</div>  <!-- DEMO CARD END -->
				</div> <!-- COL END -->
			</div> <!-- ROW END -->


			<div class="row padding-universal" id="about-the-author">
					<?php include 'authors/author-rafi.php' ?>
			</div> <!-- ROW END -->

			<div class="row padding-universal" id="footer">
				<?php include 'footer.php' ?>
			</div> <!-- ROW END -->
	
	</div> <!-- PAGE CONTENT END -->
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/material.min.js"></script>
	<script src="js/highcharts.js"></script>
	<script src="js/modules.js"></script>
	<script src="js/exporting.js"></script>
	<script src="js/drilldown.js"></script>
<script>

        $(function () { 
            var myChart = Highcharts.chart('chart', {
                // chart: {
                //     type: 'line'
                // },
                title: {
                    text: 'Toronto City Finance Snapshot ($000s)'
                },
                xAxis: {
                    categories: ['1998','1999','2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015']
                },
                yAxis: {
                    title: {
                        text: '$000s'
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                    type: 'line',
                    name: 'Revenue',
                    data: [6510513,6316052,6345333,6745486,7084372,7246787,7378993,7879032,8511672,8837997,9408473,10414491,11057740,11311103,11711147,10918942,11249617,12020523]
                }, {
                    type: 'line',
                    name: 'Expenses',
                    data: [10826108,6344384,6574632,6845851,7081194,7384434,7751536,8111105,8575931,9368619,9963305,9917288,10542178,10650071,10650071,10461634,10210891,10826108]
                }]
            });
        });


        $(function(){
        	var myBar = Highcharts.chart('bar-chart',{
        		chart: {
        			type:'line',
        		},
        		title:{
        			text:'Spending Balance (Surplus/Deficit)'
        		},
        		credits: {
        		    enabled: false
        		},
        		yAxis: {
                    title: {
                        text: '$ 000s'
                    }
                },
                xAxis: {
                    categories: ['1998','1999','2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015']
                },
                series:[{
                		name: 'Surplus/Deficit',
                		data:[-4315595,-28332,-229299,-100365,3178,-137647,-372543,-232073,-64259,-530622,-554832,497203,515562,661032,1061076,457308,1038726,1194415],
                		negativeColor: 'red'
                	}]
        	})
        });

        $(function(){
        	var myStackBar = Highcharts.chart('stackedBar', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'City Revenue Categories, 2015 and 2014'
            },
            credits: {
        		    enabled: false
        	},
            xAxis: {
                categories: ['2015 Revenue ($m)', '2014 Revenue ($m)']
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Revenue ($ millions)'
                }
            },
            legend: {
                reversed: true
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },
            series: [{
                name: 'Property Taxes',
                data: [3879, 3768]
            }, {
                name: 'Funding Transfers from Other Governments',
                data: [2862, 2752]
            }, {
                name: 'User Charges',
                data: [2781, 2753 ]
            },{
                name: 'Other',
                data: [1887, 1415 ]
            },{
                name: 'Municipal Land Transfer Tax',
                data: [524, 450 ]
            },{
                name: 'Taxation from Other Governments',
                data: [86, 112]
            }]
        })
       });

         $(function(){
         	var expensesStackBar = Highcharts.chart('expenses-chart', {
             chart: {
                 type: 'bar'
             },
             title: {
                 text: 'City Expense Categories, 2015 and 2014'
             },
             credits: {
         		    enabled: false
         	},
             xAxis: {
                 categories: ['2015 Expenses ($m)', '2014 Expenses ($m)']
             },
             yAxis: {
                 min: 0,
                 title: {
                     text: 'Expenses ($ millions)'
                 }
             },
             legend: {
                 reversed: true
             },
             plotOptions: {
                 series: {
                     stacking: 'normal'
                 }
             },
             series: [{
                 name: 'Transportation',
                 data: [2943.786, 2819.666]
             }, {
                 name: 'Social & Family Svcs',
                 data: [2023.91, 1915.78]
             }, {
                 name: 'Protection to persons and property',
                 data: [1807.909, 1820.074]
             },{
                 name: 'Recreation & Cultural Svcs',
                 data: [989.349, 911.428]
             },
             {
                 name: 'Environmental Svcs',
                 data: [940.017, 919.204]
             },
             	{
                 name: 'Social Housing',
                 data: [775.45, 727.715]
             },{
                 name: 'General government',
                 data: [747.196, 798.088]
             },
             	{
                 name: 'Health Svcs',
                 data: [452.389, 429.491]
             },
             	{
                 name: 'Planning & Development',
                 data: [146.102, 120.188]
             }]
         })
        });

        $(function () { 
        	var myDrilldown = Highcharts.chart('drilldown', {
        			    chart: {
        			        type: 'column'
        			    },
        			    lang: {
        			      decimalPoint: '.',
        			      thousandsSep: ','
        			    },
        			    responsive: {
        			      rules: [{
        			        condition: {
        			          maxWidth: 500
        			        },
        			        chartOptions: {
        			          legend: {
        			            enabled: false
        			          }
        			        }
        			      }]
        			    },
        			    title: {
        			        text: 'Accumulated Surplus: Where the money goes'
        			    },
        			    subtitle: {
        			        text: 'Source: Audited Financial Statements 2015, Note 17'
        			    },
        			    credits: {
        			    	enabled: false
        			    },
        			    xAxis: {
        			        type: 'category'
        			    },
        			    yAxis: {
        			        title: {
        			            text: 'Million $'
        			        }

        			    },
        			    legend: {
        			        enabled: false
        			    },
        			    exporting: { enabled: false },
        			    plotOptions: {
        			        series: {
        			            borderWidth: 0,
        			            dataLabels: {
        			                // enabled: true,
        			                // format: '{point.y:,.0f}',
        			             pointPadding: 0,
        			             groupPadding: 0.1,
        			            },
        			         // colors:['#4183D7','#548FDB','#679BDF','#7AA7E3','#8DB3E7','#A0BFEB','#B3CBEF','#C6D7F3']
        			        }
        			    },

        			    series: [{
        			        name: 'Allocations',
        			        colorByPoint: true,
        			        data: [{
        			            name: 'Surplus Investments',
        			            y: 30596,
        			            drilldown: 'Surplus Investments'
        			        },
        			        {
        			            name: 'Surplus Payouts',
        			            y: -9353,
        			            drilldown: 'Surplus Payouts'
        			        }]
        			    }],
        			    drilldown: {
        			        series: [{
        			            name: 'Surplus Investments',
        			            id: 'Surplus Investments',
        			            negativeColor: 'red',
        			            data: [
        				                ['Tangible Capital Assets', 26965],
        				                ['Operating Fund', 2735],
        				                ['Reserve Fund', 1826],
        				                ['Capital Fund', -930]
        			            	] //end data property array
        			        	},
        			        	{
        			            name: 'Surplus Payouts',
        			            id: 'Surplus Payouts',
        			            negativeColor: 'red',
        			            data: [
        				                ['Landfill Closure Liabilities', -142],
        				                ['Other', -393],
        				                ['Mortgages', -511],
        				                ['Employee Benefits', -3599],
        				                ['Net Long Term Debt', -4713]
        			            ] //end data property array
        			        }]//end series object array
        			    }// end of drilldown property
        			  });
        			}); 
  </script>
</body>
</html>