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
			<h2>Activity 2: Tell Me About Your Favorite Application</h2>
			<p><style> p {text-indent:50px;t}</style>My favorite application is Internet Download Manager (IDM). It is a desktop application,
available to install in Windows where it speeds up any direct download from almost any server.
What it does is that it divides the file you desire to download, into a number of parts, which you
can adjust in the settings. The app then requests the file’s data on the server multiple times and
is distributed on each specific part that the program divided. This then allows the download
speed to multiply depending on the bandwidth of your internet connection. This is called multi-
threading download, this is a feature that is the main attraction of the IDM application. This is an
extremely powerful app that is useful in handling your downloads in different situations. And is
very helpful in boosting the download speeds if the server of the files is slow. It also has a bunch
of other features, such as enabling you to resume a download even if it fails, or sorting your files
in different folders depending on the file type and plenty of other simple and complicated
features. And because I like saving media files offline for later, this is an application that really
boosted my efficiency.</p>
			<p>Other applications that I am also very fond of are on android. Youtube Vanced is one of
the applications that I use almost every day. Unlike the normal Youtube application, Youtube
Vanced is a modded version of Youtube and it enables you to play a video on the background
even when your phone is locked or you’re on different apps, this enables me to use Youtube as
a music player also. And before installing in has different versions which only affects the color of
the whole UI, colors such as blue, pink, black and dark. Another application would be Videoder,
another media downloading application but only available in android. It is a video downloading
app that lets you download for a bunch of different sites, but I mostly use it to download videos
from Youtube. And it can also immediately convert the video to MP3 if you want to or download
on different resolutions available for the video. And when downloading on Youtube you don’t
need to switch applications, you just need to go to sharing the video and choosing Videoder,
and then it overlays on the application you are using. This app also enables multi-threading
download like IDM that boosts the download speed multiple times and doesn’t have a cap on
how many downloads you can queue.</p>
        <div class="col-lg-6">
			<img src="img/idm.png" alt="woman sitting on a desk" class="img-fluid">
		</div>
			<br>
			<a href="activities.php" class="btn btn-primary">Previous Page</a>
            <a href="activities3.php" class="btn btn-primary">Next Page</a>
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
