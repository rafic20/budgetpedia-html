<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Financing the Toronto Paramedic Services - Budgetpedia</title>
	<meta name="description" content="Learn about Budgetpedia">
  	<meta name="keywords" content="Budget, Open Data, Toronto, Canada, Data Visualization, Public Policy">
  	<meta name="author" content="Budgetpedia, Rafi Chaudhury">
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
	    <div class="page-content"> <!-- CONTAINER-FLUID excluded -->
			<div class="row" id="toronto-paramedics-datastory">
				<div class="col-sm-12"> <!-- page-title -->
							<span class="sub-headline-data-story">CITY OF TORONTO</span><br><br>
							<span class="headline-data-story">DATA STORY</span>	
				</div> <!-- COL END -->
				<div class="col-sm-4 padded-top padded-col-left-sm">
						<span class="headline-numbers">1,074</span><br>
						<span class="number-description">PARAMEDICS</span>	
				</div>
				<div class="col-sm-4 padded-top padded-col-left-sm">
					<span class="headline-numbers">125</span><br>
					<span class="number-description">MEDICAL DISPATCHERS</span>
				</div>
				<div class="col-sm-4 padded-top padded-col-left-sm">
					<span class="headline-numbers">222,538</span> <br>
					<span class="number-description">PATIENTS TRANSPORTED</span>
				</div>
			</div> <!-- ROW END -->
			
			<div class="row padding-universal">
				<div class="col-sm-12">
					<div class="heading_subheading_border heading-color">
						<h1>Toronto Paramedic Services</h1>
						<p>Understanding its operating capacity and financing </p>
						<p><em>by <strong>Rafi Chaudhury</strong></em></p>
					</div> <!-- HEADING END -->
				</div> <!-- COL-12 END -->
				<div class="col-sm-6 padded-top-md padded-col-right">
					<p>
						Toronto Paramedic Services (TPS) comprise a critical piece of the City’s emergency services, along with the police and fire department. </p>

					<p>According to the <a href="https://www.toronto.ca/wp-content/uploads/2017/11/9172-TPS-2018-Operating_Budget_Notes-v1.pdf">Operating Budget Notes</a> for 2018,  TPS is responsible for <em>"...providing integrated, mobile, paramedic-based health care and transportation of patients with health emergencies as well as pre-hospital and out-of- hospital medical care to the special needs of vulnerable communities."</em></p>

					<p>Changes in Toronto demographics, namely the growth in the total city population as well as increased numbers of aging residents, have led to a 64% increase in emergency transport cases since 2005, rising from 141,409 in that year to an estimated 231,440 in 2017. </p>
					</em>
				</div> <!-- COL-6 END -->
					
					<div class="col-sm-6 padded-top-sm">
						<!-- MDL Square card -->
						<div class="demo-card-square mdl-card mdl-shadow--2dp">
						  <div class="mdl-card__title mdl-card--expand" id="paramedics-card">
						    <span class="mdl-card__title-text">
						    	<h2>$214.9 million</h2>
						    	<br><br>
						    </span>
						  </div>
						  <div class="mdl-card__supporting-text">
						    Toronto Paramedic Services 2018 Preliminary Operating Budget. In 2017, the passed budget amount was $212.1 million. 
						    						        	<br><br>
						    						        	<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="https://www.toronto.ca/wp-content/uploads/2017/11/9172-TPS-2018-Operating_Budget_Notes-v1.pdf">SOURCE</a>
						  </div>
						</div>  <!-- DEMO CARD END -->
					</div> <!-- COL-6 END -->
			</div> <!-- ROW END -->

			<div class="row padding-universal">
				<div class="col-sm-12">
					<div class="heading_subheading_border heading-color">
						<h2>The Historical Picture</h2>
						<p>Trends since 2011</p>
					</div> <!-- HEADING END -->
				</div> <!-- COL-12 END -->
			</div> <!-- ROW END -->

			<div class="row padding-universal">
				<div class="col-sm-10">
					<p>The chart below shows the total budgeted expenditures for TPS from 2011 onwards. Since 2015, more granular data has become available, with budgeted expenses displayed  across operating categories such as <strong>Community Paramedicine</strong>, <strong>Emergency Medical Care</strong> and <strong>Major Event Mass Casualty Care</strong>.</p>

                    <p>Click the individual bars from 2015 to 2018 to see how the expenses were divided. <strong>Emergency Medical Care</strong> comprises an average of <strong>89%</strong> of budgeted expenditures each year.</p>
				</div> <!-- COL END -->
                
                <div class="col-sm-10 col-sm-offset-1 padded-top-sm">
                            <div id="drilldown-paramedics-totalexp"></div>    
    
                            <br><br>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">TIP</button> 
                            <p>Click or tap any bar from 2015 - 2018 to view the drilldown categories</p>
                </div> <!-- COL END -->
			</div> <!-- ROW END -->
				
			<div class="row padding-universal padded-top-sm">
				<div class="col-sm-12">
					<div class="heading_subheading_border heading-color">
						<h2>TPS Programs</h2>
						<p>Click the tabs below to learn about TPS Functional Areas</p>
					</div> <!-- HEADING END -->
				</div> <!-- COL END -->
            </div> <!-- ROW END -->

				<div class="row padding-universal">
                    <div class="col-sm-12">
                            <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                              <div class="mdl-tabs__tab-bar">
                                  <a href="#paramedicine-panel" class="mdl-tabs__tab is-active no-underline">COMMUNITY PARAMEDICINE</a>
                                  <a href="#medical-dispatch-panel" class="mdl-tabs__tab no-underline">EMERGENCY MEDICAL DISPATCH</a>
                                  <a href="#medical-care-panel" class="mdl-tabs__tab no-underline">EMERGENCY MEDICAL CARE</a>
                            </div> 

                    <!-- START OF NESTED COLUMNS -->
                    <div class="mdl-tabs__panel is-active" id="paramedicine-panel">
                        <div class="col-sm-6 padded-top-sm">
                            <p>
                                The <strong>Community Paramedicine & Emergency Call Mitigation</strong> division works to provide primary medical care and referrals to community-based care centres. Such referrals support aging-at-home care, injury prevention efforts and is intended to reduce the overall volume of 911 calls.</p>
                            
                            <p> This division is also responsible for providing first-responder education for citizens, to allow them to provide supporting services for paramedics. In 2018, it is estimated that the department will offer 800 Emergency Medical Training Courses, up from 729 courses that were actually delivered in 2016.    
                            </p>

                            <p>The division also provides training courses in using Automated External Defribillators (AED). In 2018, it is estimated that 1,575 AEDs will be registered, up from 1,547 in 2016.</p>
                        </div> <!-- NESTED COL END -->
                        <div class="col-sm-6">
                            <div id="community-paramedicine-chart"></div>
                        </div>
                    </div> <!-- TAB CONTENT END -->

                    <div class="mdl-tabs__panel" id="medical-dispatch-panel">
                        <div class="col-sm-6 padded-top-sm">
                          <p>The <strong>Emergency Medical Dispatch & Preliminary Care</strong> service is the initial access point to City of Toronto's Paramedic Services. This service responds to victims of illness or injury through its Central Ambulance Communications Centre (CACC).</p>

                          <p>The key performance metrics for this division are:
                              <ul>
                                  <li><strong># Minutes to process emergency calls (life-threatening)</strong>: In 2018, TPS has set a target of processing 90% of calls in a 2:53 minute timeframe</li>
                                  <li>
                                      <strong># of Emergency Calls Processed:</strong>TPS is expected to process <strong>389,862</strong> calls in 2018. This is up from 360,449 calls processed in 2016. The number of calls is projected to increase by 4% annually.
                                  </li>
                              </ul>
                          </p>
                        </div> <!-- COL END -->
                        <div class="col-sm-6">
                            <div id="medical-dispatch-chart"></div>
                        </div> <!-- NESTED COL END -->
                    </div> <!-- TAB CONTENT END -->
                
                  <div class="mdl-tabs__panel" id="medical-care-panel">
                    <div class="col-sm-6 padded-top-sm">
                       <p>
                           The <strong>Emergency Medical Care</strong> service provides emergency and preventative care for Toronto residents through pre-hospital emergency care, inter-facility patient transport services and mass casualty care. Its budget is the largest of all TPS programs; $184.3 million is budgeted for this division in 2018. 
                       </p>

                       <p>The EMC service comprises three operating areas:
                         <ul>
                           <li><strong>Pre-Hospital Emergency Care</strong></li>
                           <li><strong>Critical Care Transport</strong>: In 2018, TPS estimates 240,700 emergency transports will be required, an average of <strong>659 per day.</strong> This is a 7.5% increase over the <strong>222,538</strong> patient transports that occurred in 2016. </li>
                           <li><strong>City Emergency & Major Event Mass Casualty Care</strong></li>
                         </ul>

                        Drilldown data is available for 2018 and 2017. 
                       </p>
                    </div> <!-- COL END -->
                    <div class="col-sm-6">
                        <div id="emergency-medical-services-chart"></div>
                    </div>
                  </div> <!-- TAB CONTENT END -->
                </div>
                </div> <!-- COL END -->
			</div> <!-- ROW END -->

      <div class="row padding-universal padded-top-sm">
        <div class="col-sm-12">
          <div class="heading_subheading_border heading-color">
            <h2>Further Reading</h2>
            <p>Detailed information available in TPS Annual Reports</p>
          </div> <!-- HEADING END -->
        </div> <!-- COL END -->
      </div> <!-- ROW END -->

      <div class="row padding-universal">
        <div class="col-sm-10">
          <p>
            An excellent source of information about the TPS performance metrics and strategic objectives is their annual reports. Check out the links below to access the full reports.

            <ul>
              <li>2016 Annual Report: <a href="https://drive.google.com/open?id=1E-0or9tXBWO5mYayb_xG9GOwWwufNSGU">[Google Drive]</a> <a href=
              "http://torontoparamedicservices.ca/toronto-paramedic-services-2016-annual-report/">[TPS website link]</a></li>
              <li>2015 Annual Report: <a href="https://drive.google.com/open?id=1TzwMRNRHYwONmc5JU7VIv3TWhpCl-Xfp">[Google Drive]</a> <a href=
              "http://torontoparamedicservices.ca/toronto-paramedic-services-2015-annual-report/">[TPS website link]</a></li>
              <li>2014 Annual Report: <a href="https://drive.google.com/open?id=1VIcfl7IF0BaXHCq6uobetrCJNuesMrX6">[Google Drive]</a> <a href=
              "http://torontoparamedicservices.ca/toronto-paramedic-services-annual-report/">[TPS website link]</a></li>
            </ul>
          </p>
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
            var myDrilldown = Highcharts.chart('drilldown-paramedics-totalexp', {
                        chart: {
                            type: 'column'
                        },
                        lang: {
                          decimalPoint: '.',
                          thousandsSep: ','
                        },
                        title: {
                            text: 'Total Budgeted Expenditures ($ millions)'
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
                        exporting: { enabled: true },
                        plotOptions: {
                            series: {
                                borderWidth: 0,
                                dataLabels: {
                                    // enabled: true,
                                    // format: '{point.y:,.0f}',
                                 pointPadding: 0,
                                 groupPadding: 0.1,
                                },
                            }
                        },

                        responsive: {
                            rules: [{
                                condition: {
                                    maxWidth: 320
                                },
                                chartOptions: {
                                    legend: {
                                        align: 'center',
                                        verticalAlign: 'bottom',
                                        layout: 'horizontal'
                                    },
                                    yAxis: {
                                        labels: {
                                            align: 'left',
                                            x: 0,
                                            y: -5
                                        },
                                        title: {
                                            text: null
                                        }
                                    },
                                    subtitle: {
                                        text: null
                                    },
                                    credits: {
                                        enabled: false
                                    }
                                }
                            }]
                        },

                        series: [{
                            name: 'Budgeted Expenditures',
                            colorByPoint: true,
                            colors: [
                                    '#4054B2',
                                    '#4054B2',
                                    '#4054B2',
                                    '#4054B2',
                                    '#663399',
                                    '#663399',
                                    '#663399',
                                    '#663399',

                                ],
                            data: [
                                {
                                    name: '2018',
                                    y: 214874400,
                                    drilldown: '2018'
                                },
                                {
                                    name: '2017',
                                    y: 210483557,
                                    drilldown: '2017'
                                },
                                {
                                  name: '2016',
                                  y: 204393526.36,
                                  drilldown: '2016'  
                                },
                                {
                                  name: '2015',
                                  y: 198108999,
                                  drilldown: '2015'  
                                },
                                {
                                  name: '2014',
                                  y: 198108999
                                  // drilldown: '2014'  
                                },
                                {
                                  name: '2013',
                                  y: 181367448
                                  // drilldown: '2013'  
                                },
                                {
                                  name: '2012',
                                  y: 169535510
                                  // drilldown: '2012'  
                                },
                                {
                                  name: '2011',
                                  y: 170774323.49
                                  // drilldown: '2011'  
                                }
                            ]
                        }],
                        drilldown: {
                            series: [{
                                name: '2015',
                                id: '2015',
                                negativeColor: 'red',
                                data: [
                                        ['Community Paramedicine & Emergency Call Mitigation', 3322798],
                                        ['Emergency Medical Care', 163755579],
                                        ['Emergency Medical Dispatch & Preliminary Care', 26561276],
                                        ['City Emergency & Major Event Mass Casualty Care', 4469346]
                                    ] //end data property array
                                },
                                {
                                name: '2016',
                                id: '2016',
                                negativeColor: 'red',
                                data: [
                                        ['Community Paramedicine & Emergency Call Mitigation', 2532121.94],
                                        ['Emergency Medical Care', 175224114.27],
                                        ['City Emergency & Major Event Mass Casualty Care', 26637290.15]
                                ] //end data property array
                            },{
                                name: '2017',
                                id: '2017',
                                negativeColor: 'red',
                                data: [
                                        ['Community Paramedicine & Emergency Call Mitigation', 2153904],
                                        ['Emergency Medical Care', 181041853],
                                        ['City Emergency & Major Event Mass Casualty Care', 27287800]
                                ] //end data property array
                            },{
                                name: '2018',
                                id: '2018',
                                negativeColor: 'red',
                                data: [
                                        ['Community Paramedicine & Emergency Call Mitigation', 2423200],
                                        ['Emergency Medical Care', 184326700],
                                        ['City Emergency & Major Event Mass Casualty Care', 28124500]
                                ] //end data property array
                            }]//end series object array
                        }// end of drilldown property
                      }); //end of Series array
                    });  

        $(function () { 
            var commParamedicine = Highcharts.chart('community-paramedicine-chart', {
                        chart: {
                            type: 'column'
                        },
                        lang: {
                          decimalPoint: '.',
                          thousandsSep: ','
                        },
                        title: {
                            text: 'Budgeted Expenditures ($)'
                        },

                        credits: {
                            enabled: false
                        },
                        xAxis: {
                            type: 'category'
                        },
                        yAxis: {
                            title: {
                                text: '$'
                            }
                        },
                        exporting: { enabled: true },
                        plotOptions: {
                            series: {
                                borderWidth: 0,
                                dataLabels: {
                                    // enabled: true,
                                    // format: '{point.y:,.0f}',
                                 pointPadding: 0,
                                 groupPadding: 0.1,
                                },
                            }
                        },
                        series: [{
                            name: 'Budgeted Expenditures',
                            colorByPoint: true,
                            colors: [
                                    '#4054B2',
                                    '#4054B2',
                                    '#663399',
                                    '#663399'
                                ],
                            data: [
                                {
                                    name: '2018',
                                    y: 2423200,
                                    drilldown: '2018'
                                },
                                {
                                    name: '2017',
                                    y: 2153904,
                                    drilldown: '2017'
                                },
                                {
                                  name: '2016',
                                  y: 2532121.94
                                },
                                {
                                  name: '2015',
                                  y: 3322798
                                }
                            ]
                        }],
                        drilldown: {
                            series: [{
                                name: '2018',
                                id: '2018',
                                negativeColor: 'red',
                                data: [
                                        ['Citizen First Response Education', 1460700],
                                        ['Community Healthcare Outreach & Referral', 962500]
                                    ] //end data property array
                                },
                                {
                                name: '2017',
                                id: '2017',
                                negativeColor: 'red',
                                data: [
                                        ['Citizen First Response Education', 1437032],
                                        ['Community Healthcare Outreach & Referral', 716872]
                                    ] //end data property array
                            }]//end series object array
                        }// end of drilldown property
                      }); //end of Series array
                    });     

        $(function(){
            var medicalDispatch = Highcharts.chart('medical-dispatch-chart',{
                chart: {
                    type:'column',
                },
                title:{
                    text:'Budgeted Expenditure ($)'
                },
                credits: {
                    enabled: false
                },
                yAxis: {
                    title: {
                        text: '$'
                    }
                },
                xAxis: {
                    categories: ['2018','2017','2016','2015']
                },
                series:[{
                        name: 'Budgeted Expenditure ($)',
                        data:[28124500, 27287800, 26637290.15, 26561276]
                        // negativeColor: 'red'
                    }]
            })
        });

        $(function () { 
            var emergencyMedical = Highcharts.chart('emergency-medical-services-chart', {
                        chart: {
                            type: 'column'
                        },
                        lang: {
                          decimalPoint: '.',
                          thousandsSep: ','
                        },
                        title: {
                            text: 'Budgeted Expenditures ($)'
                        },

                        credits: {
                            enabled: false
                        },
                        xAxis: {
                            type: 'category'
                        },
                        yAxis: {
                            title: {
                                text: '$'
                            }
                        },
                        exporting: { enabled: true },
                        plotOptions: {
                            series: {
                                borderWidth: 0,
                                dataLabels: {
                                    // enabled: true,
                                    // format: '{point.y:,.0f}',
                                 pointPadding: 0,
                                 groupPadding: 0.1,
                                },
                            }
                        },
                        series: [{
                            name: 'Budgeted Expenditures',
                            colorByPoint: true,
                            colors: [
                                    '#4054B2',
                                    '#4054B2',
                                    '#663399',
                                    '#663399'
                                ],
                            data: [
                                {
                                    name: '2018',
                                    y:  184326700 ,
                                    drilldown: '2018'
                                },
                                {
                                    name: '2017',
                                    y:  181041853,
                                    drilldown: '2017'
                                },
                                {
                                  name: '2016',
                                  y: 175224114.27
                                },
                                {
                                  name: '2015',
                                  y: 163755579
                                }
                            ]
                        }],
                        drilldown: {
                            series: [{
                                name: '2018',
                                id: '2018',
                                // negativeColor: 'red',
                                data: [
                                        ['City Emergency & Major Event Mass Casualty Care', 2519400],
                                        ['Critical Care Transport', 4002900],
                                        ['Pre-Hospital Emergency Care', 177804400]
                                    ] //end data property array
                                },
                                {
                                name: '2017',
                                id: '2017',
                                negativeColor: 'red',
                                data: [
                                        ['City Emergency & Major Event Mass Casualty Care', 2199584],
                                        ['Critical Care Transport', 4267592],
                                        ['Pre-Hospital Emergency Care', 174574677]
                                    ] //end data property array
                            }]//end series object array
                        }// end of drilldown property
                      }); //end of Series array
                    });     
  </script>
</body>
</html>