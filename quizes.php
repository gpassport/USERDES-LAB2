<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Complete Bootstrap 4 Website Layout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>


<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a href="index.php" class="navbar-brand"><img src="img/logo.png" alt="Brand Logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="activities.php" class="nav-link">Activities</a></li>
				<li class="nav-item"><a href="reflections.php" class="nav-link">Reflections</a></li>
				<li class="nav-item"><a href="quizes.php" class="nav-link">Quizes</a></li>
				<!---<li class="nav-item"><a href="abooutme.php" class="nav-link">About me</a></li>--->
			</ul>
		</div>
	</div>
</nav>

<!---carousel--->
<div id="slides" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/quizes2.jpg" alt="image of first slider">
			<div class="carousel-caption">
				<h1 class="display-2">QUIZES</h1>
				<p class="h3 subtitle"></p>
				<button type="button" class="btn btn-outline-light btn-lg">View All Quizes</button>
				<button type="button" class="btn btn-primary btn-lg">Back Home</button>
			</div>
		</div>
	</div>
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>Quiz 1: Worst UI Practice</h2>
            <p1>1st Attempt:</p1>
            <img src="img/firstattempt.png" alt="Picture of Phil Ho" class="card-img-top">

            <p1>2nd Attempt:</p1>
            <img src="img/2ndattempt.png" alt="Picture of Phil Ho" class="card-img-top">
        <div class="col-lg-6">
		</div>
			<br>
            <a href="index.php" class="btn btn-primary">Back Home</a>
		</div>
		
	</div>
</div>

<hr class="my-4">

<!--- Fixed background -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">

		</div>
	</div>
</figure>

  
<!--- Outputs -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h2 class="display-4">My Outputs</h2>
		</div>
		<hr>
	</div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
	<div class="row padding card-deck">
		<div class="card">
			<img src="img/activities.jpg" alt="Picture of John Doe" class="card-img-top">
			<div class="card-body">
				<h3 class="card-title">Activities</h3>
				<p class="card-text">Our activities in our User Design class are there to make us think more about how we can implement UX in everything we create.</p>
				<a href="activities.php" class="btn btn-outline-secondary">View</a>
			</div>
		</div>
		<div class="card">
			<img src="img/reflection.jpg" alt="Picture of Mary Jo" class="card-img-top">
			<div class="card-body">
				<h3 class="card-title">Reflections</h3>
				<p class="card-text">Reflection papers in our User Design class lets us review what we have learned and experienced throughout the week and enables us to absorb more of what we have encountered.</p>
				<a href="reflections.php" class="btn btn-outline-secondary">View</a>
			</div>
		</div>
		<div class="card">
			<img src="img/quizes.jpg" alt="Picture of Phil Ho" class="card-img-top">
			<div class="card-body">
				<h3 class="card-title">Quizes</h3>
				<p class="card-text">Quizes in our User Design class is more of a learning experience rather than a burden for our minds.</p>
				<a href="quizes.php" class="btn btn-outline-secondary">View</a>
			</div>
		</div>
	</div>
</div>


<!--- Footer -->
<footer>
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-4">
				<img src="img/logo.png">
				<hr class="light">
				<p>776-07-05</p>
				<p><a href="mailto:pasaporte.gab@gmail.com">pasaporte.gab@gmail.com</a></p>
				<p>Asia Pacific College</p>
				<p>Makati City, Magallanes, 3 Humabon Place</p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>Hours</h5>
				<hr class="light">
				<p>Monday: 7:30am - 9:30pm</p>
				<p>Thursday: 7:30am - 9:30pm</p>
				<p>Other days: N/A</p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>Supported by:</h5>
				<hr class="light">
				<p>Digital Design BSCS-SS 181 2019</p>
				<p>Asia Pacific College</p>
				<p>By myslef XD</p>
			</div>
			<div class="col-12">
				<hr class="light-100">
				<p>&copy; gppasaporte@student.apc.edu.ph</p>
			</div>
		</div>
	</div>
</footer>



</body>
</html>
