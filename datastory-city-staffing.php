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
	   <!-- <script src="https://code.getmdl.io/1.3.0/material.min.js"></script> -->
	   <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	   <!-- Material Design icon font -->
	   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
	<?php include 'nav-menu.php' ?>
	    <div class="page-content"> <!-- CONTAINER-FLUID excluded -->
			<div class="row" id="city-staffing">
				<div class="col-sm-12"> <!-- page-title -->
							<span class="sub-headline-data-story">CITY OF TORONTO</span><br><br>
							<span class="headline-data-story">DATA STORY</span>	
				</div> <!-- COL END -->
				<div class="col-sm-4 padded-top padded-col-left-sm">
						<span class="headline-numbers">$5.5</span><br>
						<span class="number-description">BILLION SALARY COSTS</span>	
				</div>
				<div class="col-sm-4 padded-top padded-col-left-sm">
					<span class="headline-numbers">51,437</span><br>
					<span class="number-description">EMPLOYEES</span>
				</div>
				<div class="col-sm-4 padded-top padded-col-left-sm">
					<span class="headline-numbers">51</span> <br>
					<span class="number-description">OPERATING DIVISIONS</span>
				</div>
			</div> <!-- ROW END -->

			<div class="row padding-universal">
				<div class="col-sm-12">
					<div class="heading_subheading_border heading-color">
						<h1>The City's Workforce</h1>
						<p>Staff Numbers and Salary Information for City of Toronto Employees</p>
						<p><em>by <strong>Rafi Chaudhury</strong>, Budgetpedia Project Manager</em></p>
					</div> <!-- HEADING END -->
				</div> <!-- COL-12 END -->
			</div> <!-- ROW END -->
			

			<div class="row padding-universal">
				<div class="col-sm-12">
					<p>
						A total of <strong>51,437</strong> people worked for the City of Toronto across 51 operational divisions in 2017, according to Operating Budget Estimates. In that year, a total of <strong>$5.5 billion</strong> was spent in salaries and benefits for all City workers, making up 51% of total City Expenses.
					</p>
				</div> <!-- COL END -->
			</div> <!-- ROW END -->
			<div class="row padding-universal">
				<div class="col-sm-8 col-sm-offset-2">
					<div id="stacked-col"></div>	
				</div> <!-- COL END -->
				<div class="col-sm-12 padded-top-sm">
					<p>
						Information about staff numbers are usually excluded from the City's consolidated financial statements, appearing instead as disclosures and analyst note documents in the annual Operating Budget cycle. An example of a disclosure from the 2017 Operating Budget cycle can be found <a href="http://www.toronto.ca/legdocs/mmis/2017/ex/bgrd/backgroundfile-100667.pdf">here</a>.
					</p>
				</div> <!-- COL END -->
			</div> <!-- ROW END -->

			<div class="row padding-universal">
				<div class="col-sm-12">
					<div class="heading_subheading_border heading-color">
						<h2>Staff Count</h2>
						<p>How many are employed at individual divisions?</p>
					</div> <!-- HEADING END -->
				</div> <!-- COL END -->
				<div class="col-sm-12 padded-top-sm">
					<p>
						The Toronto Transit Commission comprises the largest of the 51 divisions with <strong>14,005</strong> employees. The Toronto Police Service is second-largest at <strong>7,881</strong>. In all, there are 12 divisions with over 1,000 employees. The table below can be sorted alphabetically and from largest to smallest.</p>
				</div>
				<div class="col-sm-12">
						<table id="staff-numbers-table" class="tablesorter">
							<thead><tr class="tableizer-firstrow"><th class="">Division Name</th><th>2017</th><th>2016</th><th>2015</th><th>2014</th></tr></thead><tbody>
							 <tr><td>311 Toronto</td><td>173</td><td>145</td><td>157</td><td>158</td></tr>
							 <tr><td>Affordable Housing Office</td><td>19</td><td>19</td><td>19</td><td>19</td></tr>
							 <tr><td>Arena Boards of Management</td><td>67.7</td><td>67.7</td><td>66.6</td><td>67.4</td></tr>
							 <tr><td>Association of Community Centres</td><td>77.9</td><td>77.9</td><td>77.9</td><td>77.4</td></tr>
							 <tr><td>Auditor General's Office</td><td>32</td><td>31.5</td><td>29.5</td><td>29.5</td></tr>
							 <tr><td>Children's Services</td><td>982.5</td><td>977.8</td><td>967.6</td><td>942.7</td></tr>
							</tbody>
						</table>
					<div class="padded-top">
							<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" data-toggle="modal" data-target="#staffSizeModal">FULL TABLE</button>	
						</div>
					</div> <!-- COL END -->
				</div>
			</div> <!-- ROW END -->

			<div class="modal fade" dialog data-backdrop="false" id="staffSizeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Staff Count per Operating Division</h4>
			      </div>
			      <div class="modal-body">
					<table id="staff-numbers-table-full" class="tablesorter">
						<thead><tr class="tableizer-firstrow"><th>Division Name</th><th>2017</th><th>2016</th><th>2015</th><th>2014</th></tr></thead><tbody>
						 <tr><td>311 Toronto</td><td>173</td><td>145</td><td>157</td><td>158</td></tr>
						 <tr><td>Affordable Housing Office</td><td>19</td><td>19</td><td>19</td><td>19</td></tr>
						 <tr><td>Arena Boards of Management</td><td>67.7</td><td>67.7</td><td>66.6</td><td>67.4</td></tr>
						 <tr><td>Association of Community Centres</td><td>77.9</td><td>77.9</td><td>77.9</td><td>77.4</td></tr>
						 <tr><td>Auditor General's Office</td><td>32</td><td>31.5</td><td>29.5</td><td>29.5</td></tr>
						 <tr><td>Children's Services</td><td>982.5</td><td>977.8</td><td>967.6</td><td>942.7</td></tr>
						 <tr><td>City Clerk's Office</td><td>402.6</td><td>403.6</td><td>403.9</td><td>439.7</td></tr>
						 <tr><td>City Council</td><td>180</td><td>180</td><td>176</td><td>176</td></tr>
						 <tr><td>City Manager's Office</td><td>428</td><td>413</td><td>424.5</td><td>410.5</td></tr>
						 <tr><td>City Planning</td><td>377</td><td>368</td><td>360</td><td>352</td></tr>
						 <tr><td>Court Services</td><td>252</td><td>282</td><td>282</td><td>282</td></tr>
						 <tr><td>Economic Development & Culture</td><td>300.5</td><td>297.5</td><td>300.6</td><td>289</td></tr>
						 <tr><td>Engineering & Construction Services</td><td>570.1</td><td>131.9</td><td>133</td><td>133.8</td></tr>
						 <tr><td>Exhibition Place</td><td>359</td><td>356</td><td>390</td><td>392.5</td></tr>
						 <tr><td>Facilities, Real Estate, Environment & Energy</td><td>1000</td><td>927.5</td><td>925.5</td><td>799.7</td></tr>
						 <tr><td>Fire Services</td><td>3176.3</td><td>3168.3</td><td>3154.8</td><td>3126.8</td></tr>
						 <tr><td>Fleet Services</td><td>181</td><td>176</td><td>176</td><td>174</td></tr>
						 <tr><td>Heritage Toronto</td><td>7</td><td>7</td><td>7</td><td>7</td></tr>
						 <tr><td>Information & Technology</td><td>846</td><td>619</td><td>587</td><td>593</td></tr>
						 <tr><td>Integrity Commissioner's Office</td><td>3</td><td>3</td><td>3</td><td>2</td></tr>
						 <tr><td>Legal Services</td><td>351.9</td><td>305.9</td><td>302.4</td><td>297</td></tr>
						 <tr><td>Lobbyist Registrar</td><td>8.3</td><td>8.3</td><td>8.3</td><td>8.3</td></tr>
						 <tr><td>Long Term Care Homes & Services</td><td>2373.9</td><td>2372</td><td>2225.9</td><td>2179.7</td></tr>
						 <tr><td>Mayor's Office</td><td>20</td><td>20</td><td>20</td><td>9</td></tr>
						 <tr><td>Municipal Licensing and Standards</td><td>473.5</td><td>460</td><td>460</td><td>456</td></tr>
						 <tr><td>Office of the Chief Financial Officer</td><td>116</td><td>103</td><td>102</td><td>100</td></tr>
						 <tr><td>Office of the Ombudsman</td><td>12</td><td>12</td><td>12</td><td>11</td></tr>
						 <tr><td>Office of the Treasurer</td><td>655.2</td><td>680.2</td><td>693</td><td>684</td></tr>
						 <tr><td>Parking Tag Enforcement & Operations</td><td>394</td><td>394</td><td>394</td><td>394</td></tr>
						 <tr><td>Parks, Forestry & Recreation</td><td>4416.7</td><td>4503.5</td><td>4454.8</td><td>4347.6</td></tr>
						 <tr><td>Policy, Planning, Finance and Administration</td><td>188.4</td><td>196.4</td><td>199.4</td><td>200.4</td></tr>
						 <tr><td>Shelter, Support & Housing Administration</td><td>758.1</td><td>756.5</td><td>707.2</td><td>718.6</td></tr>
						 <tr><td>Social Development, Finance & Administratio</td><td>147</td><td>136.5</td><td>127.5</td><td>126.3</td></tr>
						 <tr><td>Solid Waste Management Services</td><td>-</td><td>1108.7</td><td>1081.7</td><td>1075.7</td></tr>
						 <tr><td>Theatres</td><td>186.7</td><td>171.9</td><td>163.1</td><td>156.5</td></tr>
						 <tr><td>Toronto & Region Conservation Authority</td><td>426.6</td><td>419.6</td><td>&nbsp;</td><td>&nbsp;</td></tr>
						 <tr><td>Toronto Atmospheric Fund</td><td>-</td><td>8</td><td>8</td><td>8</td></tr>
						 <tr><td>Toronto Building</td><td>468</td><td>456</td><td>442</td><td>425</td></tr>
						 <tr><td>Toronto Employment & Social Services</td><td>2012</td><td>2120</td><td>2092</td><td>2148.5</td></tr>
						 <tr><td>Toronto Paramedic Services</td><td>1446.3</td><td>1444.8</td><td>1391.3</td><td>1325</td></tr>
						 <tr><td>Toronto Parking Authority</td><td>-</td><td>302.4</td><td>299.4</td><td>297.4</td></tr>
						 <tr><td>Toronto Police Service</td><td>7881</td><td>7881</td><td>7883</td><td>7870</td></tr>
						 <tr><td>Toronto Police Services Board</td><td>7</td><td>7</td><td>7</td><td>8</td></tr>
						 <tr><td>Toronto Public Health</td><td>1830.5</td><td>1850</td><td>1841.6</td><td>1838.7</td></tr>
						 <tr><td>Toronto Public Library</td><td>1732.3</td><td>1736</td><td>1739.9</td><td>1737.4</td></tr>
						 <tr><td>Toronto Transit Commission - Conventional</td><td>14005</td><td>11870</td><td>11691</td><td>11179</td></tr>
						 <tr><td>Toronto Transit Commission - Wheel-Trans</td><td>571</td><td>565</td><td>562</td><td>557</td></tr>
						 <tr><td>Toronto Water</td><td>-</td><td>1753.7</td><td>1710.3</td><td>1702.3</td></tr>
						 <tr><td>Toronto Zoo</td><td>394</td><td>394</td><td>402.5</td><td>410.2</td></tr>
						 <tr><td>Transportation Services</td><td>1120</td><td>1030.5</td><td>1028.8</td><td>1055.4</td></tr>
						 <tr><td>Yonge-Dundas Square</td><td>6.5</td><td>6.5</td><td>6.5</td><td>6.5</td></tr>
						</tbody>
					</table>
			      </div> <!-- MODAL-BODY END -->
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div> <!-- FOOTER END -->
			    </div>
			  </div>
			</div> <!-- MODAL END -->

			<div class="row padding-universal">
				<div class="col-sm-12">
					<div class="heading_subheading_border heading-color">
						<h2>Average Staff Salaries</h2>
						<p>Estimating Employee Remuneration</p>
					</div> <!-- HEADING END -->
				</div> <!-- COL END -->
				<div class="col-sm-12 padded-top-sm">
					<p>
						The chart below shows the staff counts and average salaries at the 10 largest operating divisions in the City of Toronto. The size of individual circles is a proportional representation of the number of the employees in that division. </p>
				</div> <!-- COL END -->
				<div class="col-sm-4">
					<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">TIP</button>
						<p class="padded-top-sm">Tap the individual circles or hover over them to view staff numbers and dollar figures.</p>		
				</div>
			</div> <!-- ROW END -->

			<div class="row padding-universal">
				<div class="col-sm-12">
					<div id="chart" class="padded-bottom-md"></div>
				</div> <!-- COL END -->
				<div class="col-sm-12">
					<p class="padded-content-h"><strong>NOTE:</strong> the Operating Budget reports disclose salaries as "Salaries & Benefits" and report them as totals. The average reported here is calculated by dividing the reported salary total by the number of employees working as of 2016.</p>
					<p class="padded-content-h">The City  does not disclose salaries of individual City employees making over a certain amount in salaries. The province of Ontario however does <a href="https://www.ontario.ca/page/public-sector-salary-disclosure-2016-all-sectors-and-seconded-employees
					">disclose</a> information on provincial employees making over $100,000 annually as part of the <em>Public Salary Disclosure Act</em>.</p>
				</div> <!-- COL END -->
				<div class="col-sm-12">
					<h4 class="center">Total Salary Expenses ($000s)</h4>
					<table id="division-size-table" class="tablesorter">
						<thead><tr class="tableizer-firstrow"><th>Operating Division</th><th>2017</th><th>2016</th><th>2015</th><th>2014</th></tr></thead><tbody>
						 <tr><td>311 Toronto</td><td>15,956</td><td>15,413</td><td>15,372</td><td>15,915</td></tr>
						 <tr><td>Affordable Housing Office</td><td>2,836</td><td>2,283</td><td>2,245</td><td>2,230</td></tr>
						 <tr><td>Arena Boards of Management</td><td>4,692</td><td>4,479</td><td>4,348</td><td>4,185</td></tr>
						 <tr><td>Association of Community Centres</td><td>6,968</td><td>6,787</td><td>6,621</td><td>6,372</td></tr>
						 <tr><td>Auditor General's Office</td><td>5,377</td><td>4,783</td><td>4,521</td><td>4,542</td></tr>
						 <tr><td>Children's Services</td><td>88,751</td><td>84,382</td><td>86,276</td><td>80,238</td></tr>
						 <tr><td>City Clerk's Office</td><td>40,435</td><td>39,233</td><td>39,265</td><td>44,063</td></tr>
						</tbody>
					</table> <!-- TABLE END -->
					<div class="padded-top">
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" data-toggle="modal" data-target="#myModal">FULL TABLE</button>		
					</div>
				</div> <!-- COL END -->
			</div> <!-- ROW END -->

			<!-- Modal -->
			<div class="modal fade" id="myModal" dialog data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Salary Expenses for Operating Divisions ($000s)</h4>
			      </div>
			      <div class="modal-body">
			        <table id="division-size-table-full" class="tablesorter">
			        	<thead><tr class="tableizer-firstrow"><th>Operating Division</th><th>2017</th><th>2016</th><th>2015</th><th>2014</th></tr></thead><tbody>
			        	 <tr><td>311 Toronto</td><td>15,956</td><td>15,413</td><td>15,372</td><td>15,915</td></tr>
			        	 <tr><td>Affordable Housing Office</td><td>2,836</td><td>2,283</td><td>2,245</td><td>2,230</td></tr>
			        	 <tr><td>Arena Boards of Management</td><td>4,692</td><td>4,479</td><td>4,348</td><td>4,185</td></tr>
			        	 <tr><td>Association of Community Centres</td><td>6,968</td><td>6,787</td><td>6,621</td><td>6,372</td></tr>
			        	 <tr><td>Auditor General's Office</td><td>5,377</td><td>4,783</td><td>4,521</td><td>4,542</td></tr>
			        	 <tr><td>Children's Services</td><td>88,751</td><td>84,382</td><td>86,276</td><td>80,238</td></tr>
			        	 <tr><td>City Clerk's Office</td><td>40,435</td><td>39,233</td><td>39,265</td><td>44,063</td></tr>
			        	 <tr><td>City Council</td><td>18,472</td><td>18,622</td><td>18,672</td><td>20,208</td></tr>
			        	 <tr><td>City Manager's Office</td><td>51,073</td><td>49,814</td><td>50,442</td><td>51,315</td></tr>
			        	 <tr><td>City Planning</td><td>42,579</td><td>40,046</td><td>39,656</td><td>37,314</td></tr>
			        	 <tr><td>Court Services</td><td>20,430</td><td>19,045</td><td>19,783</td><td>20,372</td></tr>
			        	 <tr><td>Economic Development & Culture</td><td>30,456</td><td>28,973</td><td>28,715</td><td>26,602</td></tr>
			        	 <tr><td>Engineering & Construction Services</td><td>64,566</td><td>61,536</td><td>58,244</td><td>56,978</td></tr>
			        	 <tr><td>Exhibition Place</td><td>31,491</td><td>31,140</td><td>33,109</td><td>31,992</td></tr>
			        	 <tr><td>Facilities, Real Estate, Environment & Energy</td><td>95,313</td><td>95,517</td><td>94,291</td><td>83,140</td></tr>
			        	 <tr><td>Fire Services</td><td>405,327</td><td>400,651</td><td>400,338</td><td>393,961</td></tr>
			        	 <tr><td>Fleet Services</td><td>19,206</td><td>18,225</td><td>17,473</td><td>17,067</td></tr>
			        	 <tr><td>Heritage Toronto</td><td>525</td><td>541</td><td>550</td><td>550</td></tr>
			        	 <tr><td>Information & Technology</td><td>99,334</td><td>96,806</td><td>94,654</td><td>83,687</td></tr>
			        	 <tr><td>Integrity Commissioner's Office</td><td>482</td><td>455</td><td>388</td><td>278</td></tr>
			        	 <tr><td>Legal Services</td><td>48,022</td><td>41,634</td><td>40,464</td><td>38,003</td></tr>
			        	 <tr><td>Long-Term Care Homes & Services</td><td>208,625</td><td>206,805</td><td>197,781</td><td>189,824</td></tr>
			        	 <tr><td>Mayor's Office</td><td>2,204</td><td>2,201</td><td>2,200</td><td>1,030</td></tr>
			        	 <tr><td>Municipal Licensing & Standards</td><td>45,055</td><td>42,365</td><td>42,022</td><td>41,176</td></tr>
			        	 <tr><td>Non-Program Expenditures</td><td>97,637</td><td>110,905</td><td>55,041</td><td>52,841</td></tr>
			        	 <tr><td>Office of the Chief Financial Officer</td><td>15,996</td><td>15,529</td><td>15,431</td><td>15,172</td></tr>
			        	 <tr><td>Office of the Lobbyist Registrar</td><td>1,064</td><td>1,053</td><td>1,036</td><td>1,022</td></tr>
			        	 <tr><td>Office of the Ombudsman</td><td>1,617</td><td>1,554</td><td>1,494</td><td>1,386</td></tr>
			        	 <tr><td>Office of the Treasurer</td><td>59,533</td><td>65,441</td><td>64,410</td><td>62,265</td></tr>
			        	 <tr><td>Parks, Forestry & Recreation</td><td>300,297</td><td>293,260</td><td>288,072</td><td>273,326</td></tr>
			        	 <tr><td>Policy, Planning, Finance & Administration</td><td>18,887</td><td>18,940</td><td>18,995</td><td>19,109</td></tr>
			        	 <tr><td>Shelter, Support & Housing Administration</td><td>74,055</td><td>70,651</td><td>68,281</td><td>67,202</td></tr>
			        	 <tr><td>Social Development, Finance & Administration</td><td>17,414</td><td>16,203</td><td>14,695</td><td>14,174</td></tr>
			        	 <tr><td>Solid Waste Management Services</td><td>96,237</td><td>92,632</td><td>93,898</td><td>92,402</td></tr>
			        	 <tr><td>Theatres</td><td>13,288</td><td>11,725</td><td>10,653</td><td>10,412</td></tr>
			        	 <tr><td>Toronto & Region Conservation Authority</td><td>34,532</td><td>33,120</td><td>32,520</td><td>30,785</td></tr>
			        	 <tr><td>Toronto Atmospheric Fund</td><td>1,148</td><td>964</td><td>953</td><td>949</td></tr>
			        	 <tr><td>Toronto Building</td><td>48,708</td><td>46,187</td><td>44,512</td><td>42,460</td></tr>
			        	 <tr><td>Toronto Employment & Social Services</td><td>184,739</td><td>192,098</td><td>187,756</td><td>190,740</td></tr>
			        	 <tr><td>Toronto Paramedic Services</td><td>175,870</td><td>170,236</td><td>164,586</td><td>154,358</td></tr>
			        	 <tr><td>Toronto Parking Authority</td><td>25,959</td><td>24,179</td><td>23,279</td><td>22,458</td></tr>
			        	 <tr><td>Toronto Police Service</td><td>1,006,150</td><td>1,011,507</td><td>1,028,822</td><td>966,681</td></tr>
			        	 <tr><td>Toronto Police Services Board</td><td>1,020</td><td>963</td><td>969</td><td>1,022</td></tr>
			        	 <tr><td>Toronto Public Health</td><td>182,168</td><td>180,921</td><td>181,685</td><td>177,908</td></tr>
			        	 <tr><td>Toronto Public Library</td><td>147,655</td><td>143,803</td><td>141,222</td><td>137,798</td></tr>
			        	 <tr><td>Toronto Transit Commission - Conventional</td><td>1,307,006</td><td>1,273,307</td><td>1,212,667</td><td>1,156,115</td></tr>
			        	 <tr><td>Toronto Transit Commission - Wheel Trans</td><td>59,030</td><td>57,658</td><td>57,920</td><td>58,076</td></tr>
			        	 <tr><td>Toronto Water</td><td>174,920</td><td>169,746</td><td>171,294</td><td>164,735</td></tr>
			        	 <tr><td>Toronto Zoo</td><td>29,640</td><td>29,267</td><td>28,945</td><td>28,151</td></tr>
			        	 <tr><td>Transportation Services</td><td>103,096</td><td>98,037</td><td>99,099</td><td>95,019</td></tr>
			        	 <tr><td>Yonge-Dundas Square</td><td>602</td><td>582</td><td>570</td><td>542</td></tr>
			        	</tbody>
			        </table>
			      </div> <!-- MODAL-BODY END -->
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div> <!-- FOOTER END -->
			    </div>
			  </div>
			</div> <!-- MODAL END -->

			<div class="row padding-universal">
				<div class="col-sm-12">
					<div class="heading_subheading_border heading-color">
						<h2>Salaries by Function</h2>
					</div> <!-- HEADING END -->
				</div>
				<div class="col-sm-4 padded-top-sm">
					<p>For some city divisions, the totals spent on salaries are disclosed as components of an operating function. The treemap on the right displays the breakdown for Toronto Paramedic Services. No such breakdown is available, say for Toronto Police Services however; the budgeted total salary expense for 2017 were reported only as a single value of <strong>$1,006,149,800</strong>.</p>
					
					<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">TIP</button>
						<p class="padded-top-sm">Tap/hover over the blocks to see the dollar figures	</p>
				</div><!-- COL END -->
				<div class="col-sm-8 padded-top-sm">
					<div> <!-- id="container" --> 
						<script async src="//jsfiddle.net/rchaudhury/9u5j04sg/embed/result/"></script>
					</div>
				</div><!-- COL END -->
			</div><!-- ROW END -->

			<div class="row padding-universal">
				<div class="col-sm-4 padded-top-md">
					<p>Toronto Water is another city division that provides salary expense breakdowns by activity. However, without knowing the number of employees assigned to these activity areas, it is not possible to derive anything more than a broad average for the entire city division. 
				</div><!-- COL END -->
				<div class="col-sm-8 padded-top-sm">
					<div> <!-- id="treemap-toronto-water" --> 
						<script async src="//jsfiddle.net/rchaudhury/b1bvyc62/embed/result/"></script>
					</div>
				</div><!-- COL END -->
			</div><!-- ROW END -->
			
			<div class="row padding-universal">
				<div class="col-sm-12">
					<div class="heading_subheading_border heading-color">
						<h2>Takeaways</h2>
						<p>Improving Quality of Disclosures</p>
					</div> <!-- HEADING END -->

					<p class="padded-top-sm">
						The availability of detailed information about municipal operations is key to helping Toronto residents understand how the city allocates and remunerates human resources across different functional areas . This data story attempts to translate the current status of disclosures into a broader understanding of staffing and remuneration and identify gaps in the available data. Some caveats of the above analysis include:</p>
				
					<p>
							The data sources include budgeted estimates approved by the City Council. The actual numbers for salaries are shown as lump sums in the audited annual reports, and thus the variance from the budgeted amounts is not easily calculated. Additionally, the available salary information is shown as gross amounts and include the value of benefits. As benefits vary widely according to staff seniority, salary range, unionization status and other factors, the estimates for average salary should be taken with caution.
					</p>
				</div> <!-- COL END -->
			</div> <!-- ROW END -->

				<div class="row padding-universal" id="about-the-author">
					<?php include 'authors/author-rafi.php' ?>
			</div> <!-- ROW END -->

			<div class="row padding-universal" id="footer">
				<?php include 'footer.php' ?>
			</div> <!-- ROW END -->
	
	</div> <!-- CONTAINER END -->
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript" src="js/material.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/highcharts.js"></script>
	<script src="js/highcharts-more.js"></script>
	<script src="js/treemap.js"></script>
	<script src="js/modules.js"></script>
	<script src="js/exporting.js"></script>
	

	<script> 
	// SORTABLE TABLE
		$(document).ready(function() 
		    { 
		        $("#division-size-table").tablesorter({
		        	cssAsc: "headerSortUp",
		        	cssDesc: "headerSortDown",
		        	cssHeader: "header"
		        }); 

		        $("#division-size-table-full").tablesorter({
		        	cssAsc: "headerSortUp",
		        	cssDesc: "headerSortDown",
		        	cssHeader: "header"
		        }); 
		    } 
		); 

		$(function () {
		       $.tablesorter.defaults.groupSeparator = ",";
		       $.tablesorter.formatFloat = function (s) {
		           var regexp = new RegExp("[" + this.defaults.groupSeparator + "]","g")
		           var i = parseFloat(s.replace(regexp, ''));
		           return (isNaN(i)) ? 0 : i;
		       };
		       $("#staff-numbers-table").tablesorter();
		       $("#staff-numbers-table-full").tablesorter();
		       $("#division-size-table").tablesorter();
		       $("#division-size-table-full").tablesorter();
		   });
	</script>


	<script>
// STACKED COLUMN BAR
	$(function(){
		var stackedBar = Highcharts.chart('stacked-col', {
		    chart: {
		        type: 'column'
		    },
		    title: {
		        text: 'Salary Expenses relative to Total Expenses'
		    },
		    labels: {
		        format: '$ {value:,.1f}'
		    },
		    lang: {
		            numericSymbols: [' thousands', ' millions', ' billions']
		        },
		    credits: {
		            enabled: false
		        },
		    xAxis: {
		        categories: ['2017 Budget', '2016', '2015', '2014']
		    },
		    yAxis: {
		        min: 0,
		        title: {
		            text: 'Total Expenditure ($)'
		        },
		        stackLabels: {
		            enabled: true,
		            style: {
		                fontWeight: 'bold',
		                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
		            }
		        }
		    },
		    legend: {
		        align: 'right',
		        x: -30,
		        verticalAlign: 'top',
		        y: 25,
		        floating: true,
		        backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
		        borderColor: '#CCC',
		        borderWidth: 1,
		        shadow: false
		    },
		    tooltip: {
		        headerFormat: '<b>{point.x}</b><br/>',
		        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
		    },
		    plotOptions: {
		        column: {
		            stacking: 'normal',
		            dataLabels: {
		                enabled: true,
		                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
		            }
		        }
		    },
		    series: [{
		        name: 'Salaries',
		        data: [5526443998, 5442207302, 5306232986, 5088151274]
		    }, {
		        name: 'All Other Expenses',
		        data: [6795328002, 5985275698, 4904658014, 5737956726]
		    }]
		});
	})

	// BUBBLE CHART

		$(function () { 
		    var myChart = Highcharts.chart('chart', {

		        chart: {
		            type: 'bubble',
		            plotBorderWidth: 1,
		            zoomType: 'xy'
		        },

		        legend: {
		            enabled: false
		        },

		        title: {
		            text: 'City of Toronto Staff & Salaries - Top 10'
		        },
		        credits: {
		            enabled: false
		        },

		        subtitle: {
		            text: 'Source: Operating Budget 2016'
		        },

		        xAxis: {
		            gridLineWidth: 1,
		            title: {
		                text: 'Number of Employees'
		            },
		            labels: {
		                format: '{value}'
		            },
		            plotLines: [{
		                color: 'black',
		                dashStyle: 'dot',
		                width: 2,
		                value: 0,
		                label: {
		                    rotation: 0,
		                    y: 104455,
		                    style: {
		                        fontStyle: 'italic'
		                    },
		                    text: 'Weighted Avg Salary'
		                },
		                zIndex: 3
		            }]
		        },

		        yAxis: {
		            startOnTick: false,
		            endOnTick: false,
		            title: {
		                text: 'Average Salary'
		            },
		            labels: {
		                format: '$ {value:,.1f}'
		            },
		            maxPadding: 0.2,
		            plotLines: [{
		                color: 'black',
		                dashStyle: 'dot',
		                width: 2,
		                value: 104455,
		                label: {
		                    align: 'right',
		                    style: {
		                        fontStyle: 'italic'
		                    },
		                    text: 'Weighted Avg Salary $104,455',
		                    x: -10
		                },
		                zIndex: 3
		            }]
		        },

		        tooltip: {
		            useHTML: true,
		            headerFormat: '<table>',
		            pointFormat: '<tr><th colspan="2"><h3>{point.country}</h3></th></tr>' +
		                '<tr><th>Employees:</th><td>{point.x}</td></tr>' +
		                '<tr><th>Average Salary:</th><td>${point.y}</td></tr>' +
		                '<tr><th>Employees % of Top 10 Total :</th><td>{point.z}%</td></tr>',
		            footerFormat: '</table>',
		            followPointer: true
		        },

		        plotOptions: {
		            series: {
		                dataLabels: {
		                    enabled: true,
		                    format: '{point.name}'
		                }
		            }
		        },

		        series: [{
		            data: [
		            	{ x: 1736, y: 82836, z: 4, name: 'TPL', country: 'Toronto Public Library' },
		                { x: 1754, y: 96793, z: 5, name: 'TW', country: 'Toronto Water' },
		                { x: 7881, y: 102271, z: 20, name: 'TPS', country: 'Toronto Police Service' },
		                { x: 2120, y: 90612, z: 5, name: 'EMP', country: 'Employment & Social Services' },
		                { x: 3168.3, y: 128348, z: 8, name: 'TFS', country: 'Fire Services' },
		                { x: 4503.5, y: 65118, z: 12, name: 'P&R', country: 'Parks, Forestry & Recreation' },
		                { x: 2372, y: 87185.8, z: 6, name: 'LTC', country: 'Long-Term Care Homes & Services' },
		                { x: 1850, y: 97795, z: 5, name: 'TPH', country: 'Toronto Public Health' },
		                { x: 1446, y: 117826, z: 4, name: 'TPS', country: 'Toronto Paramedic Services' },
		                { x: 11870, y: 107271, z: 31, name: 'TTC', country: 'Toronto Transit Commission-Conventional' }
		            ]
		        }]

		    });
		   });

		$(function () {
		    Highcharts.setOptions({
				lang: {
					thousandsSep: ','
				}
			})
		});

		// TREEMAP 1

		// 	$(function () { 
		// 		var treeMap = Highcharts.chart('container', {
		// 	    series: [{
		// 	        type: "treemap",
		// 	        layoutAlgorithm: 'squarified',
		// 	        data: [{
		// 	            name: 'Pre-Hospital Emergency Care',
		// 	            value: 147638266,
		// 	            color: '#4ECDC4'
		// 	        }, {
		// 	            name: 'Emergency Medical Dispatch & Preliminary Care',
		// 	            value: 21797640,
		// 	            color: '#A2DED0'
		// 	        }, {
		// 	            name: 'Critical Care Transport',
		// 	            value: 3666469,
		// 	            color: '#87D37C'
		// 	        }, {
		// 	            name: 'City Emergency & Major Event Mass Casualty Care',
		// 	            value: 1328680,
		// 	            color: '#90C695'
		// 	        }, {
		// 	            name: 'Community Healthcare Outreach & Referral',
		// 	            value: 543843,
		// 	            color: '#03C9A9'
		// 	        }, {
		// 	            name: 'Citizen First Response Education',
		// 	            value: 895553,
		// 	           	color: '#C8F7C5'
		// 	        }]
		// 	    }],
		// 	    labels: {
		// 	        format: '$ {value:,.1f}'
		// 	    },
		// 	    title: {
		// 	        text: 'Toronto Paramedic Services Total Salaries'
		// 	    },
		// 	    credits: {
		// 	        enabled: false
		// 	    }
		// 	})
		// });

		// // 
		// 	$(function () { 
		// 		var treeMap2 = Highcharts.chart('treemap-toronto-water', {
		// 	    series: [{
		// 	        type: "treemap",
		// 	        layoutAlgorithm: 'squarified',
		// 	        data: [{
		// 	            name: 'Stormwater Collection',
		// 	            value: 10754393,
		// 	            color: '#F27935'
		// 	        }, {
		// 	            name: 'Stormwater Treatment',
		// 	            value: 3536761,
		// 	            color: '#F39C12'
		// 	        }, {
		// 	            name: 'Wastewater Collection',
		// 	            value: 29970592,
		// 	            color: '#F9690E'
		// 	        }, {
		// 	            name: 'Wastewater Treatment',
		// 	            value: 56336026,
		// 	            color: '#FDE3A7'
		// 	        }, {
		// 	            name: 'Water Distribution',
		// 	            value: 44842602,
		// 	            color: '#FABE58'
		// 	        }, {
		// 	            name: 'Water Treatment',
		// 	            value: 29479430,
		// 	            color: '#F5AB35'
		// 	        }]
		// 	    }],
		// 	    labels: {
		// 	        format: '$ {value:,.1f}'
		// 	    },
		// 	    title: {
		// 	        text: 'Toronto Water Salary Expenses by Operations'
		// 	    },
		// 	    credits: {
		// 	        enabled: false
		// 	    }
		// 	})
		// });
	</script>
</body>