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
	<title>Data Story: Budgets & Surpluses - Budgetpedia</title>
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
			
			<div class="row padding-universal">
				<div class="col-sm-12 center padded-content-h">
					<h1>SURPLUSES & DEFICITS</h1>
					<p class="center tiny-padding padded-content-h">How they're calculated and what they mean for you</p>
					<p class="data-story-author">By Rafi Chaudhury, Budgetpedia Project Manager</p>
					<div class="short-border-black"></div>
				</div> <!-- COL-12 END -->
						<div class="col-sm-6 padded-top-sm">
							<p class="body-text">
								In order to better understand how the city makes and spends money, let's take a quick tour of the City of Toronto's audited statement of operations for the year ending <strong>December 31, 2015</strong>. </p>

							<p class="body-text">
								At its simplest level, the annual financial statement represents Toronto's revenues and expenses and shows whether there was a surplus for the year, where revenues exceed expenses, or a deficit, where expenses exceed revenues. 
							</p>
							<p class="body-text">
								In 2015, revenues were higher than expenses, resulting in a surplus of $1.19 billion. According to City policy, 75% of this surplus ($893 million) will be allocated to infrastructure projects within the capital budget. The remaining 25% ($298 million) will be allocated to top up reserves to meet financial obligations. 
							</p>
						</div> <!-- COL-6 END -->
					
					<div class="col-sm-6 center padded-top-sm">
							<span class="marquee-text number-blue">$12.02</span><br>
							<span class="number-blue">billion in Revenue</span> 

							<br>

							<span class="marquee-text"> - </span>
							
							<br>

							<span class="marquee-text number-red">$10.82</span> <br>
							<span class="number-red">billion in Expenses</span>

							
							<br>

							<span class="marquee-text"> = </span>
							
							<br>	
							<span class="marquee-text number-blue">$1.19</span> <br>
							<span class="number-blue">billion in Surplus</span> <br><br>
							2014: <span class="number-blue">$889 million surplus</span>

							<em><p class="data-citation padded-content-h">Source: <a href="https://www1.toronto.ca/wps/portal/contentonly?vgnextoid=c13195932a5e6510VgnVCM10000071d60f89RCRD">City of Toronto website</a><br>
							<a href="https://drive.google.com/open?id=0B208oCU9D8OuTHpNM2JLUllPN0E">(Backup Link)</a>
							</p></em>
					</div> <!-- COL-6 END -->
			</div> <!-- ROW END -->

			<div class="row padding-universal">
						<div class="col-sm-12">
							<h1 class="center">THE HISTORICAL PICTURE</h1>
							<p class="center tiny-padding padded-content-h"><em>Trends since 1998</em></p>
							<div class="short-border-black"></div>
						</div> <!-- COL END -->
						<div class="col-sm-12 padded-top-sm">
							<p class="padded-content-h">
								The chart below tracks city revenues and expenses since 1998. As of 2015, city revenues have almost doubled from the $6.3 billion recorded in 2000. 
							</p>

							<div id="chart"></div>
						</div> <!-- COL END -->
			</div> <!-- ROW END -->

			<div class="row padding-universal">
						<div class="col-sm-6 padded-top-md">
							<p class="padded-content-h">
								 Toronto has run sustained operating surpluses since 2009, when revenues reached $10.9 billion. The highest surplus recorded so far was $1.19 billion in 2015. Operating surpluses are shown in <span style="color: rgb(124,181,236)">blue</span> and deficits are shown in <span style="color: red">red</span>.
							</p>
						</div> <!-- COL END -->
						<div class="col-sm-6">
							<div id="bar-chart"></div>
						</div> <!-- COL-6-END -->
			</div> <!-- ROW END -->
			
			<div class="row padding-universal">
				<div class="col-sm-12">
					<h1 class="center">REVENUES</h1>
					<p class="center tiny-padding padded-content-h"><em>How the city finances operations</em></p>
					<div class="short-border-black"></div>
				</div> <!-- COL END -->
				<div class="col-sm-12">
					<div class="padded-content-h">
						<p>Unlike a business, the City does not make the bulk of its money by selling goods and services. Taxes and funding transfers make up the majority of the funds used by the city to operate. The charts below show the largest revenue sources and their proportion relative to the total revenue base.</p>

						<p class="body-text">Hover over the bars (or touch the bars on mobile) to view the dollar amounts for each category.</p>	
					</div>
				</div> <!-- COL END -->
					
				<div class="col-sm-12">
					<div id="stackedBar"></div>
				</div> <!-- COL-12 END -->
				<div class="col-sm-12">
					<div class="padded-content-h">
						<p class="body-text">The <strong>User Charges</strong> category includes a number of sub-categories that generate fees for the City. This includes transportation services such as the Toronto Transit Commission. It also includes recreational and cultural services such as parks, golf courses and museums.</p>
						
						<p class="body-text">The "Other" category under includes revenues from the following sources: 
							<ul>
								<li>Government Business Enterprise Earnings</li>
								<li>Investment Income</li>
								<li>Development Charges</li>
								<li>Rent and Concessions</li>
								<li>Other expenses</li>
							</ul>
						</p>
					</div>
				</div> <!-- COL END -->
			</div> <!-- ROW END -->

			<div class="row padding-universal">
				<div class="col-sm-12">
					<h1 class="center">EXPENSES</h1>
					<p class="center tiny-padding padded-content-h"><em>What the money was spent on and how much</em></p>
					<div class="short-border-black"></div>
				</div> <!-- COL END -->
				<div class="col-sm-12 padded-content-h">
					<div class="body-text">
						<p>Expenditures in 2015 totaled $10.83 billion, a 3% increase over the $10.46 billion spent in 2014. The largest expenditure categories were Transportation, Social and Family Services and Protection to Persons and Property, which comprised 62% of total expenditure. </p>
					</div>
				</div> <!-- COL END -->
				<div class="col-sm-12">
					<div id="expenses-chart"></div>
				</div> <!-- COL END -->
			</div> <!-- ROW END -->

			<div class="row padding-universal">
				<div class="col-sm-12">
					<h1 class="center">IMPLICATIONS</h1>
					<p class="center tiny-padding padded-content-h"><em>How are surpluses spent?</em></p>
					<div class="short-border-black"></div>
				</div> <!-- COL END -->
				<div class="col-sm-7 padded-content-left">
					<p>Toronto recorded an annual surplus of $1.19 billion in 2015 and has an <strong>accumulated surplus</strong> of $21.24 billion. Does that mean that $21 billion is available for spending on public services?</p>

					<p>Not exactly. As per provincial law, Toronto is required to balance its budget, i.e. ensure that budgeted expenses in a financial year do not exceed budgeted revenues. In practice, this results in operating surpluses due to conservative budgeting practices. Of that surplus, 75% is allocated to spending on projects in the capital budget with the remainder allocated to city reserves to meet various other financial obligations.</p> 

					<p>The accumulated surplus number is arrived at by first adding up the amounts that the city has invested in capital assets (such as land and buildings) and has in operating fund reserves and other types of reserves. Then, the total of expected future payouts and allocations related to the capital fund, mortgages and debt repayments are subtracted. The chart on the right displays how the numbers work out.</p>

					<p>For 2015, $2.73 billion of the accumulated surplus is allocated to funding services in the operating budget. </p>
				</div> <!-- COL END -->
				<div class="col-sm-5 padded-top-md">
					<div id="drilldown"></div>
				</div> <!-- COL END -->
			</div> <!-- ROW END -->

			<!-- <div class="row padding-universal">
				<div class="col-sm-12 padded-content-h">
					<h2 class="center">FURTHER READING</h2>
					<ul>
						<li><a href="https://www1.toronto.ca/wps/portal/contentonly?vgnextoid=4e48a8c973efa410VgnVCM10000071d60f89RCRD&vgnextchannel=729c6cbd2b95a410VgnVCM10000071d60f89RCRD">Understanding the Toronto City Budget (City of Toronto)</a></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div> 
			</div>  -->

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
        			        text: 'Click the columns to view drilldowns. Source: Audited Financial Statements 2015, Note 17'
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