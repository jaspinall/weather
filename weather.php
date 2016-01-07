<!doctype html>
<html>
<head>
    <title>Example Domain</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<style>

	html, body {
		height:100%;
	}
	
	
	#topContainer {
		background-image:url("weather.jpeg");
		height:100%;
		width:100%;
		background-size:cover;
		background-position:center;
		padding-top:150px;
	}	
	
	.textContainer {
		padding:10px;
	}
	
	.center {
		text-align: center;
	}
	
	.white {
		color: white;
	}
	

	p {
		padding-top:30px;
		padding-bottom:10px; 
	
	}
	
	.alert {
		margin-top:30px;
		display:none;
	
	}

</style>

</head>

<body>

	<div id="topContainer">
	
		<div class="row textContainer">
			
			<div class="col-md-6 col-md-offset-3">
			
			<h1 class="center white">Whatever the weather...</h1>
			
			<h3 class="center white">...be prepared</h3>
			
			<p class="center lead">Check the weather in your location. Enter your zip code to begin!</p>
			
			<form>
				<div class="form-group">
					<input type="text" class="form-control" name="city" id="city" placeholder="e.g. London, Paris, San Francisco"/>
				</div>
				<div class="center">
					<button id="findWeather" type="submit" class="btn btn-default center">Let's Go!</button>
				</div>	
			</form>
		
			<div id="success" class="alert alert-success">demo demo;</div>
			
			<div id="fail" class="alert alert-danger">Sorry, we couldn't find any weather data for that city. Please try again.</div>
			
			<div id="noCity" class="alert alert-danger">Please enter a city.</div>
			
			</div>
	
		</div>
		
	</div>
		
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
		
		$("#findWeather").click(function(event) {
		
			event.preventDefault();
			
			 if ($("#city").val()!="") {
		
			$.get("scraper.php?city="+$("#city").val(), function(data) {
				
				if (data=="") {
				
					$("#success").html(data).hide();
					$("#noCity").hide();
					$("#fail").fadeIn();
				
				} else {
				
					$("#fail").hide();
					$("#noCity").hide();
					$("#success").html(data).fadeIn();
					
					};
					
				});	
			
			} else {
			
				$("#success").hide();
				$("#fail").hide();
				$("#noCity").fadeIn();
		
		}
		
		});

</script>
</body>
</html>