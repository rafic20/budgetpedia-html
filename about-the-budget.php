<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About the Budget - Budgetpedia - Supporting informed debate about the Toronto budget</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="description" content="Learn about the Toronto Budget">
  	<meta name="keywords" content="Budget, Open Data, Toronto, Canada, Data Visualization, Public Policy">
  	<meta name="author" content="Budgetpedia">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
	<link rel="stylesheet" href="css/budgetpedia-apr2017.css">
	<link rel="stylesheet" href="css/pushy.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<link rel="shortcut icon" href="img/budgetpedia-favicon.ico" type="image/x-icon">
	<script src="js/pushy.js"></script>
</head>
<body>
	<div class="container-fluid" id="container-1">
		<? include 'nav-menu.php' ?>
	</div> <!-- CONTAINER-1 END -->

	<div class="container-fluid">
		<div class="row" id="about-header">
			<div class="col-sm-12">
				<div class="center vertical-center">
					<span class="page-title">ABOUT THE BUDGET</span>
				</div>
			</div> <!-- COL-12 END -->
		</div>	<!-- ROW END -->
		<div class="row padding-universal">
			<div class="col-sm-12 padded-content-h justify">
				<h2 class="center">BUDGET BASICS</h2>
				<p><em>by Henrik Bechmann. Updated: August 26, 2017.</em></p>
				
				<blockquote class="pull-right gap-left">
					<em>“Don’t tell me where your priorities are. Show me where you spend your money and I’ll tell you what they are.”</em> <br>– <strong>James W. Frick</strong>
				</blockquote>
				<p>
					The City of Toronto budget cycle is rather classic:</p>
				<ul>
					<li>Create budget (May - February)</li>
					<li>Spend money (January to December, overlapping the end of the budget cycle)</li>
					<li>Get variance reports (budget vs actual, quarterly)</li>
					<li>Get year-end audited statements on results (July)</li>
				</ul>
					
					<p>The budget itself is written on a cash basis, meaning that when it’s adopted by Council, it is authorization for cash that is provided. Likewise variance reports are done on a cash basis. Audited statements however are presented on an accrual basis (taking into account payables and receivables at the end of the reporting period). Audited statements also take non-cash costs into account, like depreciation.
					</p>

					<p>The budget is divided into operating and capital budgets. Operating budgets account for day-to-day costs of running services using available resources. The capital budgets account for costs of creating new assets, like community centres or roads. For now at budgetpedia, we’re focussed on understanding City of Toronto operating budgets.</p>

					<p>There’s a lot of money involved, too. The operating budget for 2017 was listed as about $12.4B (over $4,300 for every man, woman, and child in the City). The capital budget for the year was listed at over $3B.</p>

					<p>Budgets can be hard to understand. But they don’t have to be hard to understand. That’s what budgetpedia is about. We’re trying to bridge that gap to make budgets more understandable. We’re also trying to make them more helpful.</p>

					<p>We have several challenges:</p>
					
					<ul>
						<li>Numbers are inherently difficult (or boring) for most people. Our challenge is to humanize the numbers as much as possible</li>
						<li>The City of Toronto doesn’t adhere to open data standards (like the Open Data Charter). Not even close. Fortunately there are City efforts underway to change that. Until then even basic budget information is very hard to acquire and process</li>
						<li>The City doesn’t release detailed information. There are about 13,000 cost centres in the City, details of which are not published. Most people have very local or specialized interests, and would benefit from access to such detailed information. This is perhaps our biggest challenge</li>
						<li>City staff still largely work in a bubble. This is historical and cultural, and tends to reduce quality of data. But this should change with modern tools like open data, open government, digital platforms, and collaborative management styles</li>
					</ul>

				<h2 class="center">CLASSIFICATION SCHEMES</h2>

				<p>Classification schemes are used to create simplified models that focus on the most relevant aspects of an organization or budget, and therefore make it easier to find and use information. Classification schemes tend to vary according to the user groups who create them, to satisfy differing needs. The main schemes we use are functional, structural, and accounting schemes.</p>

				<p>For example  internal City budgets are grouped in large part according to the type of organization that is reporting, whether City Divisions or Agencies. That is relevant internally because City Divisions (like Parks, Forestry & Recreation) are under the managerial control of the City Manager, whereas Agencies (like Police and TTC) are more independent. This is called a structural classification.</p>

				<p>Most users of City services on the other hand are more interested in the types of services that are offered. So budgetpedia developed a functional classification scheme that makes it easier for most to understand what the City does. At the highest level the functional groupings are:</p>

				<ul>
					<li>General Services, like transportation, water, libraries, and parks</li>
					<li>Citizen Support Services, like housing, income, and child support</li>
					<li>Administrative Services, like city council, the City Manager’s office, and things you would generally find at City Hall</li>
				</ul>

				<p>Another important classification scheme is the accounting classification scheme, which groups numbers according to type of accounting activity. Examples are revenue, expense, and surplus accounts.</p>

				<p>All classification schemes provide the basis for the important drill-down capability that allows users to explore and become familiar with the context of their interest, the better to find relevant information.</p>

				<p>For functional taxonomy, see <a href="https://docs.google.com/presentation/d/18E0u8k9y9ThnflzZWS3XYCopefVqIuX6ZPrJ6j7gock/edit#slide=id.g239205a8ef_0_0">here</a>, from slide 3, and <a href="http://bit.ly/2hOenoT">this chart</a> <br>
				For accounting classification, see <a href="https://medium.com/budgetpedia/a-clearer-view-of-the-2017-toronto-operating-budget-a-big-surplus-23c0f6d8a51c">this blog post</a>. <br>
				For structural taxonomy, see <a href="http://bit.ly/2nDvwF5">this chart</a>.

			</div> <!-- COL END -->
		</div> <!-- ROW END -->
		<div class="row padding-universal" id="footer">
			<? include 'footer.php' ?>
		</div> <!-- ROW END -->
	</div> <!-- CONTAINER END -->
</body>
</html>