//DROPDOWN SELECTION BASED CHARTS
	// $(function () {
		var i;
	    function dropdownSelectVariable(){
		    var dropdownSelect = document.getElementById("exp-categories").value;
		    var newArray = new Array();
	    	var datesArray = new Array();
	    	var chartTitle	= dropdownSelect + ' ' + 'expenses, 1998-2016';
	    	var categoryDefinition;

	            $.getJSON('https://getbridgeapp.co/api/budgetpedia/torontoexpenses19982016', function(result) {
	            	console.log(result)
	                // Populate series
	                for (var i = 0; i < result.length; i++){
				 		if (result[i].category == dropdownSelect){
				 	     newArray.push(result[i].amount_thousands);
				 	    datesArray.push(result[i].year);    
				 		};
				 	if(dropdownSelect == "PLANNING"){
				 		categoryDefinition = result[202].definitions;
				 		$('#category-definition').html(categoryDefinition);
				 		}
				 	else if (dropdownSelect == "CULTURE"){
				 		categoryDefinition = result[201].definitions;
				 		$('#category-definition').html(categoryDefinition);
				 		}
				 	else if (dropdownSelect == "HOUSING"){
				 		categoryDefinition = result[200].definitions;
				 		$('#category-definition').html(categoryDefinition);
				 		}
				 	else if (dropdownSelect == "SOCIALSERVICES"){
				 		categoryDefinition = result[199].definitions;
				 		$('#category-definition').html(categoryDefinition);
				 		}
				 	else if (dropdownSelect == "HEALTH"){
				 		categoryDefinition = result[198].definitions;
				 		$('#category-definition').html(categoryDefinition);
				 		}
				 	else if (dropdownSelect == "ENVIRONMENT"){
				 		categoryDefinition = result[197].definitions;
				 		$('#category-definition').html(categoryDefinition);
				 		}
				 	else if (dropdownSelect == "TRANSPORTATION"){
				 		categoryDefinition = result[196].definitions;
				 		$('#category-definition').html(categoryDefinition);
				 		}
				 	else if (dropdownSelect == "PROTECTION"){
				 		categoryDefinition = result[195].definitions;
				 		$('#category-definition').html(categoryDefinition);
				 		}
				 	else if (dropdownSelect == "GOVERNMENT"){
				 		categoryDefinition = result[194].definitions;
				 		$('#category-definition').html(categoryDefinition);
				 		}
				 	}
	             
	                // draw chart
	                $('#container').highcharts({
	                    chart: {
	                        type: "line"
	                    },
	                    title: {
	                        text: chartTitle
	                    },
	                    credits: {
	                        enabled: false
	                    },
	                    xAxis: {
	                        categories: datesArray
	                        },
	                    series: [{
		                    name: 'Amount Spent ($000s)',
	                        data: newArray
	                    }]
	                   }); 
	        		});
		};


		
		//DEFAULT CHART: Show total expenses;
		// RADIO BUTTONS FOR SAMPLE SUBCATEGORIES: 
		//OPTIONS: Show as table 
