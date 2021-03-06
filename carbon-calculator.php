//*********************************************************/
//*  Script for carbon-calculator                         */
//*  Version: 0.11                                       */
//*  Authored by Mark Stout                               */
//*  Copyright 2021 Mark Stout, All rights reserved       */
//*  Distributed under the GNU License                    */
//*********************************************************/

// This function converts electric and natural gas.
function calculateCO2e() {
	// conversion variables
	var tonne  = 2000;         	// lbs per ton
	var mill   = 1000000;	   	// One million
	var iBTU   = 100000;       	// BTUs in a Therm
	var aRate  = 0.00015246;   	// lbs per 1 BTU burning aviation fuel
	var cRate  = 0.00021106;   	// lbs per 1 BTU burning coal
	var gRate  = 0.185;        	// CO2 generated by burning natural gas is 0.185 (kg/kWh)
	var hRate  = 0.00016555;   	// lbs per 1 BTU heating fuel
	var jRate  = 0.00015925;   	// lbs per 1 BTU burning jet fuel
	var kRate  = 0.85;		   	// lbs CO per kWh averaged
	var lRate  = 2.20462;      	// lbs per kg;
	var nRate  = 0.00011665;   	// lbs per 1 BTU burning natural gas 
	var pRate  = 0.00013863;   	// lbs per 1 BTU burning propane gas
	var tRate  = 29.3;         	// kWh per Therm from natural gas;
	var xRate  = 0.23114;      	// kg CO2e per kWh;

  // This following two arrays are used determine the 
  // conversion rate and fuel type  
	var arrRates = {};
		arrRates["a"] = aRate;
		arrRates["c"] = cRate;
		arrRates["h"] = hRate;
		arrRates["j"] = jRate;
		arrRates["n"] = nRate;
		arrRates["p"] = pRate;

	var arrFuelType = {};
		arrFuelType["a"] = "Aviation Fuel";
		arrFuelType["c"] = "Coal (all types)";
		arrFuelType["h"] = "Heating Oil";
		arrFuelType["j"] = "Jet Fuel";
		arrFuelType["n"] = "Natural Gas";
		arrFuelType["p"] = "Propane";

		
	// We get the form field values. This is so we can 
  // send an email and store the vakues in a contact database
	var tName     = document.getElementById("your-name").value;
	var tCompany  = document.getElementById("company-name").value;
	var tIndustry = document.getElementById("industry").value;
	var tEmail    = document.getElementById("email").value;
	var tPhone    = document.getElementById("phone").value;
	var tZipcode  = document.getElementById("zipcode").value;
	var tCountry  = document.getElementById("country").value;
  
  // This sets the vatiable to ue for calculating the CO?? used.
	var tkWh      = document.getElementById("kWh").value;
	var ikWh      = parseInt(tkWh);
	var tFuel     = document.getElementById("fuel-type").value;
  var fUsed     = document.getElementById("fuel-used").value;
  var fRate     = arrRates[tFuel.substring(0,1)];

	// We calculate the CO?? from the electricity used and round
  // the results in tons 
	var co2ekWh   = (ikWh * kRate) / tonne; 
	if(co2ekWh >= 1) {
		co2ekWh = co2ekWh.toFixed(2);
	} else {
		co2ekWh = co2ekWh.toFixed(4);		
	}

	// We calculate the CO?? from the fossil fuel used and round
  // the results in tons 
	var co2eFuel = (fUsed * fRate) / tonne;
	if(co2eFuel >= 1) {
		co2eFuel = co2eFuel.toFixed(0);
	} else {
		co2eFuel = co2eFuel.toFixed(4);		
	}

  // Add CO?? from the electricity and fossil fuel used
	var totalCO2e = Number(co2ekWh) + Number(co2eFuel);
	if(totalCO2e >= 1) {
		totalCO2e = totalCO2e.toFixed(0);
	} else {
		totalCO2e = totalCO2e.toFixed(2);		
	}


	// Formulate the resuonse to be displayed in the showResults DIV
	var txtResponse = "<p>" + tName + ", your company, " + tCompany + ", is emitting " + totalCO2e + "</b> tons of CO?? annually.</p>  <p>By hiring Apollo Energies, and doing a commercial energy audit, " + tCompany + " can reduce their carbon emissions by an estimated <b>" + (totalCO2e * 0.3).toFixed(0) + "</b> tons of CO??. </p><p>Additionally, Apollo Energies will help " + tCompany + " become carbon-free and reduce the remaining tons of <b>" + (totalCO2e * 0.7).toFixed(0) + "</b> CO?? emissions.  This is a significant amount.</p><p>There was <b>" + co2ekWh + "</b> tons of CO?? emitted from electricity used and <b>" + co2eFuel + "</b> tons of CO?? emitted burning of " + arrFuelType[tFuel.substring(0,1)] + ".</p> <p>Bringing the total CO?? emissions for " + tCompany + " to <b>" + totalCO2e + "</b> tons of CO??.</p><p>Let us help you remove <b>" + totalCO2e + "</b> tons of CO??!<p>&nbsp;</p><button class=\"myButtons\" onclick=\"location.href='https://calendly.com/mark-stout/'\" >Schedule a brief meeting!</button>";

	// Sets the title of the results 
	var showResultsTitle = "Carbon Emissions<br>for<br>" + tCompany;

	// Hides the form 
  document.getElementById("container").style.display = 'none';

  // Populate the HTML inside the <p> elements in the showResultsDiv
	document.getElementById("showResultsTitle").innerHTML = showResultsTitle;
	document.getElementById("showResultsResponse").innerHTML = txtResponse;

	// diplays the DIV with the populated HTML in <p> elements 
	document.getElementById("showResultsDiv").style.display = "block";

}


function myAlerts(message) {
	alert(message)
}


function refreshPage() {
	if(confirm("Are you sure, want to refresh?")) {
	 	location.reload(); 
	}
}