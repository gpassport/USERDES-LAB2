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

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/background.png" alt="image of first slider">
			<div class="carousel-caption">
				<h1 class="display-2">USER DESIGN WEBPAGE</h1>
				<p class="h3 subtitle">My Personal Portfolio</p>
				<!--<button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
				<button type="button" class="btn btn-primary btn-lg">Get Started</button>-->
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/background2.png" alt="image of second slider">
		</div>
		<div class="carousel-item">
			<img src="img/background3.png" alt="image of third slider">
		</div>
	</div>
</div>

<!--- Jumbotron -->
<div class="container-fluid">
	<div class="row jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">Creating a webpage wasn't easy. I have created a previous page for our lab1. Want to see it?</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<a href="https://digedes-lab-1.herokuapp.com/">
				<button type="button" class="btn btn-outline-secondary btn-lg">View Lab 1</button>
			</a>
		</div>
	</div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h2 class="display-4">Tools Used</h2>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead">This are the building blocks of this website. With this tools a extremely hard task became a hard task.</p>
		</div>
	</div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fas fa-code"></i>
			<h3>HTML5</h3>
			<p>Built with the latest version of HTML, HTML5.</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fas fa-bold"></i>
			<h3>BOOTSTRAP</h3>
			<p>Built with the latest version of Bootstrap, Bootstrap 4.</p>
		</div>
		<div class="col-sm-12 col-md-4">
			<i class="fab fa-css3"></i>
			<h3>CSS</h3>
			<p>Built with the latest version of CSS, CSS3.</p>
		</div>
	</div>
	<hr class="my-4">
</div>

<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>My Guide</h2>
			<p>This website was created with the help of w3newbie.com tutorials, more specifically Drew Ryan's Youtube channel.</p>
			<p>Beggining with complete know knowledge about HTML, CSS, and Bootstrap. Drew Ryan's tutorial videos was a godsend.</p>
			<p>You can check his videos on Youtube for complete guides in web development:</p>
			<br>
			<a href="https://www.youtube.com/channel/UCtXGz0MBuqZUC8rmGddc07Q" class="btn btn-primary">Learn More</a>
		</div>
		<div class="col-lg-6">
			<img src="img/tutorial.png" alt="woman sitting on a desk" class="img-fluid">
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

<!--- Emoji Section -->
<button class="fun" data-toggle="collapse" data-target="#emoji">click for fun</button>
<div id="emoji" class="collapse">
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-sm-6 col-md-3">
				<img src="img/gif/panda.gif" alt="gif of panda emoji" class="gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img src="img/gif/poo.gif" alt="gif of poo emoji" class="gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img src="img/gif/unicorn.gif" alt="gif of unicorn emoji" class="gif">
			</div>
			<div class="col-sm-6 col-md-3">
				<img src="img/gif/chicken.gif" alt="gif of chicken emoji" class="gif">
			</div>
		</div>
	</div>
</div>
  
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
				<p class="card-text">Our activites in our User Design class are there to make us think more about how we can implement UX in everything we create.</p>
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

<!--- Two Column Section -->
<!---\<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>Our Philosophy</h2>
			<p>We know that greatness in a distruptive era requires bold ambition, curious talent, and a culture that believes we're smarter together.</p>
			<p>We approach every challenge holistically, with best-in-class expertise in data, creativity, media, technology, search, social, and more. We call this Alchemy. It has the power to build our clients' brands and transform their business. And while it may seem like magic, we've got it down to science.</p>
			<br>
		</div>
		<div class="col-lg-6">
			<img src="img/bootstrap2.png" alt="logo of Bootstrap" class="img-fluid">
		</div>
	</div>
</div>--->

<hr class="my-4">
<!--- Connect -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>
		<div class="col-12 social padding">
			<a href="https://www.facebook.com/gab.pasaporte"><i class="fab fa-facebook"></i></a>
			<a href="https://twitter.com/settings/profile"><i class="fab fa-twitter"></i></a>
			<a href="https://steamcommunity.com/id/fuwafuwarifuwafuwaru/"><i class="fab fa-steam"></i></a>
			<a href="https://www.instagram.com/ninanniyan/"><i class="fab fa-instagram"></i></a>
			<a href="https://www.youtube.com/channel/UC-lHJZR3Gqxm24_Vd_AJ5Yw"><i class="fab fa-youtube"></i></a>
		
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
