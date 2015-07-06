<!DOCTYPE html>

<head>
	
	<title>Calculator</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/ajaxcall.js"></script>
	


</head>

<body>


	<div class="container">

			<div class="row top-buffer rowborder">
				
				<div class="col-md-12 text-uppercase text-center">
					<h1 class="" >Calculator</h1>
				</div>
			</div>
			<div class="row top-buffer ">
			  	<div class="col-md-4  col-md-offset-4 text-uppercase">
			  		<form name="formOne" id="formOne" class="well">
						
			  			<input type="hidden" name="function" value="formOne">
						<div class="form-group top-buffer">
					  		<label for="number1">First number:</label>
					  		<input type="number" class="form-control" id="number1" name="number1">
						</div>

						<p>Select operation</p>


						<label class="radio-inline">
							<input type="radio" name="opmethod" id="add" value="Add">
						  	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
						</label>
						<label class="radio-inline">
						  	<input type="radio" name="opmethod" id="sub" value="Sub">
						  	<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> 
						</label>
						<label class="radio-inline">
						  	<input type="radio" name="opmethod" id="mul" value="Mul">
						  	<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> 
						</label>
						<label class="radio-inline">
						  	<input type="radio" name="opmethod" id="div" value="Div">
						  	<span class="glyphicon glyphicon-divide" aria-hidden="true"></span>
						</label>

						<div class="form-group top-buffer">
							<label for="number2">Second number:</label>
							<input type="number" class="form-control" id="number2" name="number2">
						</div>
						<div class="form-actions"> 
							<button id="formOneBtn" class="btn btn-primary">Calculate</button> 
						</div>
						
						<div id="formOneResults" class = "text-uppercase row top-buffer textbold"></div>
					</form>
					
				</div>

			
	</div>

</body>