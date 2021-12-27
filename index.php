<!DOCTYPE>
<!-- -----------------------------
Name     : carbon free calculator 
Version  : 0.11
Developer: Mark Stout
Company  : Apollo Energies, Inc.
Copyright: 2021-2022 Apollo Energies, Inc. 
           All rights reserved
--------------------------------->      
<html >  
	<head>
		<!--meta http-equiv="Content-type" content="text/html;charset=UTF-8" -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--link rel="stylesheet" media="screen and (min-width: 900px)" href="widescreen.css" -->
		<!--link rel="stylesheet" media="screen and (max-width: 600px)" href="smallscreen.css" -->
		<link rel="stylesheet" type="text/css" media="all" href="styles.css">
		<script type="text/javascript" src="carbon-calculator.php"></script>

		<title>Carbon-Free Calculator</title>

	</head>
	<body>

		<div id="container" class="centered borderShadow" >
			<div id="containerInner">
				<p class="pageTitle">Online Carbon Calculator</p>
			</div>

			<p class="formTitle" >Your Company Information</p>

			<div id="containerForm" class="centered">
				<div>
		    		<label class="labels" for="your-name">Your Name</label>
	 			</div>
	  			<div>
		   			<input tabindex="1" type="text" id="your-name" name="your-name" placeholder="What is your name?" value="Mark">
	 			</div>

	 			<div>
	 				<label  class="labels" for="company-name">Company Name</label>
	 			</div>
	  			<div>
	   				<input tabindex="2" type="text" id="company-name" name="company-name" placeholder="What is your company name?" value="EERE Consulting">
	 			</div>

	 			<div>
	    			<label  class="labels" for="employees">Number of employees</label>
	  			</div>
	  			<div>
	  				<input tabindex="3" type="text" id="employees" name="employees" placeholder="How many employees do you have?">
	 			</div>

	 			<div>
	    			<label  class="labels" for="industry">Industry</label>
	 			</div>
	  			<div>
		   			<select tabindex="4" id="industry" name="industry" placeholder="Select your industry">
						<option value="">What's your industry</option>
						<option value="Agency">Agency</option>
						<option value="Agriculture">Agriculture</option>
						<option value="Apparal">Apparal</option>
						<option value="Automotive">Automotive</option>
						<option value="Banking">Banking</option>
						<option value="Chemicals">Chemicals</option>
						<option value="Communications">Communications</option>
						<option value="Construction">Construction</option>
						<option value="Consulting">Consulting</option>
						<option value="E-Commerce">E-Commerce</option>
						<option value="Education">Education</option>
						<option value="Electronics">Electronics</option>
						<option value="Energy">Energy</option>
						<option value="Engineering">Engineering</option>
						<option value="Environmental">Environmental</option>
						<option value="Event Planning">Event Planning</option>
						<option value="Financial Services">Financial Services</option>
						<option value="Food & Beverage">Food & Beverage</option>
						<option value="Government">Government</option>
						<option value="Healthcare">Healthcare</option>
						<option value="Hospitality">Hospitality</option>
						<option value="Insurance">Insurance</option>
						<option value="Manufacturing">Manufacturing</option>
						<option value="Media">Media</option>
						<option value="Not for Profit">Not for Profit</option>
						<option value="Private Aviation">Private Aviation</option>
						<option value="Real Estate">Real Estate</option>
						<option value="Retail">Retail</option>
						<option value="Technology">Technology</option>
						<option value="Transportation">Transportation</option>
						<option value="Travel Aggregators">Travel Aggregators</option>
						<option value="Utilities">Utilities</option>
						<option value="Other">Other</option>
	   				</select>
	 			</div>

	 			<div>
					<label  class="labels" for="email">Email</label>
	 			</div>
	  			<div>
					<input tabindex="5" type="text" id="email" name="email" placeholder="What is a good email for you?">
	 			</div>

	 			<div>
	 				<label  class="labels" for="phone">Phone</label>
	 			</div>
	  			<div>
	  				<input tabindex="6" type="text" id="phone" name="phone" placeholder="What is a good phone number?">
	 			</div>

	  			<div>
					<label  class="labels" for="zipcode">Zip Code</label>
	 			</div>
	  			<div>
	   				<input tabindex="7" type="text" id="zipcode" name="zipcode" placeholder="What is your zip code?"">
	 			</div>

	 			<div>
	  				<label f class="labels" for="country">Country</label>
	 			</div>
	  			<div>
					<select tabindex="8" id="country" name="country"  placeholder="Select your country">
	   					<option value="Australia">Australia</option>
	   					<option value="Canada">Canada</option>
	  	  				<option selected value="USA">USA</option>
	    			</select>
	 			</div>

	 			<div>
					<label  class="labels" for="kWh">Annual kWh Hours</label>
	 			</div>
	  			<div>
					<input tabindex="9" type="text" id="kWh" name="kWh" placeholder="What's your annual kWh hours used" value="1500000">
	 			</div>

	 			<div>
					<label  class="labels" for="fuel-type">Type of Fuel Use</label>
	 			</div>
	  			<div>
		   			<select tabindex="10" id="fuel-type" name="fuel-type" placeholder="Select your fuel type">
						<option  value=""></option>
						<option value="pRate">Propane</option>
						<option selected value="nRate">Natural Gas</option>
						<option value="cRate">Coal (all types)</option>
						<option value="jRate">Jet Fuel</option>
						<option value="aRate">Aviation Fuel</option>
						<option value="hRate">Heating Fuels</option>
						<option value=""></option>
					</select>
	 			</div>

	 			<div>
					<label class="labels" for="fuel-used">Annual Fuel Used</label>
	 			</div>
	  			<div>
					<input tabindex="11" type="text" id="fuel-used" name="fuel-used" placeholder="What's your annual fuel use?"  value="55000">
	 			</div>

				<p>
					<button class="myButtons" tabindex="12" onclick="calculateCO2e()">Calculate</button>&nbsp &nbsp
					<!-- button class="myButtons" tabindex="13" onclick="refreshPage()">Reset</button -->
				</p>
			</div>
		</div>

		<div id="showResultsDiv" class="container centered borderShadow">
			<div><p id="showResultsTitle" class="formTitle borderShadow"></p></div>
			<div><p id="showResultsResponse" class="borderShadow"></p></div>
		</div>

	</body>
</html>

