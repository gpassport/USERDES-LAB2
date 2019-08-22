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
			<img src="img/activities2.jpg" alt="image of first slider">
			<div class="carousel-caption">
				<h1 class="display-2">ACTIVITIES</h1>
				<p class="h3 subtitle">A1-A7</p>
				<button type="button" class="btn btn-outline-light btn-lg">View All Activiies</button>
				<button type="button" class="btn btn-primary btn-lg">Back Home</button>
			</div>
		</div>
	</div>
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>Activity 3: How would you design an interface for a 1000 floor elevator?</h2>
			<p><style> p {text-indent:50px;t}</style>A 1000 floor elevator is something right out of a fictional novel. Questions like this run
your imagination wild, with thoughts of how could structure that largely maintain its height? Or
how huge would the elevator space be?? Is the elevator even meant for people? Or is it for the
cargo of goods or other things? All in all, the point is, it is something that is unthinkable that
could be possible in our time and age. The tallest building in the world, Burj Khalifa has only 163
floors, and it is massive enough to awe the people of its size. But let&#39;s get back to the main topic.
Designing an interface for a 1000 floored elevator. I&#39;ll just assume that it is for people because
designing an interface for cargo seems pointless; or rather seems wasted. If it is just for goods,
why not just make it automatic instead?</p>
			<p>Because I don&#39;t know most of the technicalities of the elevator, let&#39;s just assume that it
has a size that is above the average space for an elevator. Not too large, because we don&#39;t want
too many people entering and delaying the people going to further floors.</p>
            <p>I think the most important part is the user interface of the control panel. Having a
thousand floors, we can&#39;t have buttons ranging from 1 to a thousand. So, I think the best UI is
having a simple numeric keypad which we all are already used to. Where the user can enter the
number of the floor that they want, and an enter button to confirm the inputted number. The
control panel would not be placed inside the elevator but, outside, on each floor, on every
entrance for the elevator.</p>
            <p>Now the problem is the elevator&#39;s speed, having a thousand floors means a longer time
getting up and down. That is why AI is a must. An AI that is capable of detecting and prioritizing
the route and speed of the data the users entered, specifically their destination and what floor
they are in. Without an AI the elevator would just pass by each floor users are queueing and
wasting a lot of time. And include multiple carts on each floor, plenty of time will be saved than
any traditional elevator. I think that the essence of saving time when using elevators is a must
because we don&#39;t ride elevators to save our energy, but to save the time we could be wasting
climbing up hundreds of floors using the stairs.</p>
        <div class="col-lg-6">
		</div>
			<br>
			<a href="activities2.php" class="btn btn-primary">Previous Page</a>
            <a href="activities4.php" class="btn btn-primary">Next Page</a>
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
