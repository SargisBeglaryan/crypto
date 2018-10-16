<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Money, Calculate, currency, usd, euro">
    <meta name="description" content="Check you currency">
	<title>Currency</title>
	<link rel="stylesheet" type="text/css" href="css/icons.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="node_modules/jquery/dist/jquery.min.js"></script>

</head>

<body>
	<?php
		include_once('layouts/header.php')
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 col-lg-5 text-left">
				<h1 class="page-title">CONVERT EURO TO US DOLLAR</h1>
				<p class="currencyCalc">EUR/USD Currency Calculator</p>
				<p class="currencyUpdate">Updates: <span>29 minutes ago</span></p>
			</div>
			<div class="col-sm-6 col-lg-7">
				<div class="banner"></div>
			</div>
		</div>
	</div>
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-sm-12">
				<div class="position-relative">
					<div class="currency-select-content float-left">
						<button type="button" class="currency-select-button text-dark text-left btn">
							USD <span class="icon-angle-down float-right"></span>
						</button>
						<div class="currency-list-content position-absolute mt-3">
							<div class="scrollbar">
								<ul class="list-group">
									<li class="list-group-item">
										<h6 class="mb-0">Dollar - USD</h6>
										<span>Currency of Us</span>
									</li>
									<li class="list-group-item">
										<h6 class="mb-0">Euro - Eur</h6>
										<span>Currency of Eurozone</span>
									</li>
									<li class="list-group-item">
										<h6 class="mb-0">Bosnia and Hercegovina Convertable Mark - BAM</h6>
										<span>Currency of Bosnia and Hercegovina Convertable Mark - BAM</span>
									</li>
									<li class="list-group-item">
										<h6 class="mb-0">Trinidad And Tobago Dollar - TTD</h6>
										<span>Currency of Trinidad And Tobago Dollar - TTD</span></li>
									<li class="list-group-item"><h6 class="mb-0">Netherlands Antillien Guilder - ANG</h6>
										<span>Currency of Netherlands Antillien Guilder - ANG</span></li></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="convert-icon-content float-left text-center"><i class="icon-transfer"></i></div>
					<div class="search-currency-content float-left position-relative">
						<label for="search-currency" class="currency-icon-content">
							<span class="icon-search"></span>
						</label>
						<input type="text" class="form-control pr-4" id="search-currency" placeholder="Search for current country">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-lg-9" >
				<form method="get">
					<div class="current-currency-data">1 EUR <span>=</span></div>
					<div class="current-currency-convert">
						<span class="main-currency-number">1.</span>
						<span class="currency-blue">17</span>
						<span class="currency-grey">694</span>
						<span class="currency-currency-name">USD</span>
					</div>
					<div class="float-left corrency-invert-sum">
						<input type="number" class="form-control" name="currency-invert-sum">
					</div>
					<div class="float-left corrency-invert-submit">
						<button type="submit" class="btn btn-primary currency-invert-button">Invert currency <i class="ml-2 ml-sm-3 icon-arrow-right"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row d-none d-sm-block mt-4">
			<div class="col-sm-12 text-right date-info-content">
				<h3>Saturday, September 22nd, 2018, Week 38</h3>
				<p>Trending: Euro exchange rates for the last 24 hours</p>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-sm-6 col-md-4 col-lg-2 text-center">
				<div class="currencyDetailsContent mb-3">
					<a href="#" class="text-dark">
						<strong>EUR/USD</strong>
						<strong>0.90029</strong>
						<span>00000</span>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-2 text-center">
				<div class="currencyDetailsContent mb-3">
					<a href="#" class="text-dark">
						<strong>EUR/USD</strong>
						<strong>0.90029</strong>
						<span>00000</span>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-2 text-center">
				<div class="currencyDetailsContent mb-3">
					<a href="#" class="text-dark">
						<strong>EUR/USD</strong>
						<strong>0.90029</strong>
						<span>00000</span>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-2 text-center">
				<div class="currencyDetailsContent mb-3 active">
					<div class="text-dark">
						<strong>EUR/USD</strong>
						<strong>0.90029</strong>
						<span>00000</span>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-2 text-center">
				<div class="currencyDetailsContent mb-3">
					<a href="#" class="text-dark">
						<strong>EUR/USD</strong>
						<strong>0.90029</strong>
						<span>00000</span>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-2 text-center">
				<div class="currencyDetailsContent mb-3">
					<a href="#" class="text-dark">
						<strong>EUR/USD</strong>
						<strong>0.90029</strong>
						<span>00000</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid mt-4 mb-4">
		<div class="row">
			<div class="col-sm-12 text-left">
				<h3 class="rate-title mt-1 mb-3">Exchange rate in the last 30 days</h3>
				<p class="rate-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-sm-12 text-left">
				<h3 class="rate-title mt-1 mb-3">Exchange rate in the last 30 days</h3>
				<p class="rate-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
	<div class="container-fluid mt-5 mb-5">
		<div class="row">
			<div class="col-sm-6 p-0 mb-3">
				<div class="currency-info-header text-center pb-3 pt-3">
					<div class="currency-header-block">
						<span class="d-block currency-icon">&#128;</span>
						<span class="d-block currency-name">Euro</span>
					</div>
				</div>
				<div class="currency-info-content  pt-4 pl-3 text-left">
					<div class="currency-description-content line pr-4">
						<p class="currency-info-details">
							<strong class="d-block">Country: United States</strong>
							<strong class="d-block">Cod: 3129 3019 2823</strong>
						</p>
						<p class="currency-content-description">
							<strong class="d-block">Description</strong>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>

							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 p-0">
				<div class="currency-info-header text-center">
					<div class="pb-3 pt-3">
						<span class="d-block currency-icon">&#36;</span>
						<span class="d-block currency-name">Dollar</span>
					</div>
				</div>
				<div class="currency-info-content  pt-4 pl-3 text-left">
					<div class="currency-description-content pr-4 pl-sm-3">
						<p class="currency-info-details">
							<strong class="d-block">Country: United States</strong>
							<strong class="d-block">Cod: 3129 3019 2823</strong>
						</p>
						<p class="currency-content-description">
							<strong class="d-block">Description</strong>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>

							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid mt-5 mb-3 guide-container">
		<div class="row">
			<div class="col-sm-12 mb-3">
				<div class="guide-title d-inline-block text-left float-left mt-sm-2 mt-md-0 mt-2">
					Quick Conversion Guide
				</div>
				<button type="button" class="btn btn-primary print float-right">Print
					<span class="ml-2 icon-printer"></span>
				</button>
			</div>
			<div class="col-sm-6 mb-3 guide-columns-content">
				<div class="bg-dark text-center p-2 text-light">display From (EUR) Euros to (USD) Dollars
				</div>
				<div class="col p-0 d-flex guide-columns">
					<div class="col-6 d-inline-block text-right pt-2 pb-2 pl-0 pr-2 bg-grey"><span class="pr-2">&#128;</span>0.85 EUR</div>
					<div class="col-6 d-inline-block guide-column-first text-left pt-2 pb-2 pl-2 pr-0">1 USD</div>
				</div>
				<div class="col p-0 d-flex guide-columns">
					<div class="col-6 d-inline-block text-right pt-2 pb-2 pl-0 pr-2 bg-grey"><span class="pr-2">&#128;</span>0.85 EUR</div>
					<div class="col-6 d-inline-block guide-column-first text-left pt-2 pb-2 pl-2 pr-0">1 USD</div>
				</div>
				<div class="col p-0 d-flex guide-columns">
					<div class="col-6 d-inline-block text-right pt-2 pb-2 pl-0 pr-2 bg-grey"><span class="pr-2">&#128;</span>0.85 EUR</div>
					<div class="col-6 d-inline-block guide-column-first text-left pt-2 pb-2 pl-2 pr-0">1 USD</div>
				</div>
				<div class="col p-0 d-flex guide-columns">
					<div class="col-6 d-inline-block text-right pt-2 pb-2 pl-0 pr-2 bg-grey"><span class="pr-2">&#128;</span>0.85 EUR</div>
					<div class="col-6 d-inline-block guide-column-first text-left pt-2 pb-2 pl-2 pr-0">1 USD</div>
				</div>
				<div class="col p-0 d-flex guide-columns">
					<div class="col-6 d-inline-block text-right pt-2 pb-2 pl-0 pr-2 bg-grey"><span class="pr-2">&#128;</span>0.85 EUR</div>
					<div class="col-6 d-inline-block guide-column-first text-left pt-2 pb-2 pl-2 pr-0">1 USD</div>
				</div>
				<div class="col p-0 d-flex guide-columns">
					<div class="col-6 d-inline-block text-right pt-2 pb-2 pl-0 pr-2 bg-grey"><span class="pr-2">&#128;</span>0.85 EUR</div>
					<div class="col-6 d-inline-block guide-column-first text-left pt-2 pb-2 pl-2 pr-0">1 USD</div>
				</div>
			</div>
			<div class="col-sm-6 mb-3 guide-columns-content">
				<div class="bg-dark text-center p-2 text-light">display From (USD) Dollars to (EUR) Euros
				</div>
				<div class="col p-0 d-flex guide-columns">
					<div class="col-6 d-inline-block guide-column-first text-right pt-2 pb-2 pl-0 pr-2 bg-grey">1 USD</div>
					<div class="col-6 d-inline-block text-left pt-2 pb-2 pl-2 pr-0"><span class="pr-2">&#128;</span>0.85 EUR</div>
				</div>
				<div class="col p-0 d-flex guide-columns">
					<div class="col-6 d-inline-block guide-column-first text-right pt-2 pb-2 pl-0 pr-2 bg-grey">1 USD</div>
					<div class="col-6 d-inline-block text-left pt-2 pb-2 pl-2 pr-0"><span class="pr-2">&#128;</span>0.85 EUR</div>
				</div>
				<div class="col p-0 d-flex guide-columns">
					<div class="col-6 d-inline-block guide-column-first text-right pt-2 pb-2 pl-0 pr-2 bg-grey">1 USD</div>
					<div class="col-6 d-inline-block text-left pt-2 pb-2 pl-2 pr-0"><span class="pr-2">&#128;</span>0.85 EUR</div>
				</div>
				<div class="col p-0 d-flex guide-columns">
					<div class="col-6 d-inline-block guide-column-first text-right pt-2 pb-2 pl-0 pr-2 bg-grey">1 USD</div>
					<div class="col-6 d-inline-block text-left pt-2 pb-2 pl-2 pr-0"><span class="pr-2">&#128;</span>0.85 EUR</div>
				</div>
				<div class="col p-0 d-flex guide-columns">
					<div class="col-6 d-inline-block guide-column-first text-right pt-2 pb-2 pl-0 pr-2 bg-grey">1 USD</div>
					<div class="col-6 d-inline-block text-left pt-2 pb-2 pl-2 pr-0"><span class="pr-2">&#128;</span>0.85 EUR</div>
				</div>
				<div class="col p-0 d-flex guide-columns">
					<div class="col-6 d-inline-block guide-column-first text-right pt-2 pb-2 pl-0 pr-2 bg-grey">1 USD</div>
					<div class="col-6 d-inline-block text-left pt-2 pb-2 pl-2 pr-0"><span class="pr-2">&#128;</span>0.85 EUR</div>
				</div>
			</div>
		</div>
	</div>
<?php
	include_once('layouts/footer.php');
?>
<script src="js/scripts.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>