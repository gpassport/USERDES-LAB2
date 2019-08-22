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
			<h2>Activity 4: Group Project Proposal</h2>
			<p><style> p {text-indent:50px;t}</style>Everyone in the world have things that they cherish, are at least we use every
day. It could be our smart phones, our clothes, or even the old stuffed toys we hug
every night when we go to sleep. But as time passes, the things we use almost every
day, turn into things that we set aside under our beds or inside our closets. This is
because like us, our things also get old. Some become defective, others we don’t use
because we lost interest in. Almost inside any home there are old things that are not
used anymore and ending up just collecting dust. These can be old clothes, books,
gadgets, toys or any other things that we used and took interest in. Even if we notice
our old stuff, we can’t think of any way we could use them anymore. This leads us to
either leaving them to clutter up, donating them for charity and worse is throwing them
away.</p>
			<p>We even buy new things that is only the newer version of the old things we set
aside at home. There are even reports that people nowadays consume twice as many
material goods today as we did 50 years ago. [1] This may also due to the amount of
consumer advertisements and goods available in the market than years before. There
are more malls available now, only shopping is the norm and different trends in clothing
and technology change at a faster pace. And because of all the clutter in our homes we
end up losing our things rummaging through our stuff. It is said that over the course of
our lifetime, we will spend a total of 2.5 days a year looking for misplaced items. The
most items that are misplaced are TV remotes (45%), phones (33%), car &amp; keys (28%),
glasses (27%), shoes (24%) and wallets/purses (20%).</p>
            <p>That is why rather than abandoning our things in the corners of your home we
find ways of making use of our stuff at home. Some can be given for charity, but other
things are valuable to the point of thinking that it is such a waste to give away. This is
where other people resort to opening a garage sale or selling them online. But these
strategies are not full proof.</p>
            <p>Our team thought of creating an application where people can share the old
things that they do not use anymore. Where they can share images and videos clips of
the stuff, they deem to still be adequate and trade them with other items they may like
that other people have no use for anymore. It is like a social platform where
communities could be created gathering of the things they once used and still take
interests. People could simply upload an image; of the thing they want to trade away
place a description of the necessary information and communicate with the ones that
are interested. They could privately message each other to settle on how they can settle
the trades by meeting up on places closest to their location. Our team are also planning
on creating a delivery service of our own, where items can only be delivered if the
quality of the goods match the description, they have set online. And unlike years before

where using the old things other people used are a sort of taboo, more people settle
with secondhand consumption.</p>
            <p>An application like this could help the people to reduce clutter inside their closets,
reduce throwing away things that end up as garbage, and even save up money. Having
a mindset of using things the things we can still use and trying to ask others if they
could make use of the stuff, we can’t could greatly help not only ourselves but to all the
people around us.</p>
        <div class="col-lg-6">
		</div>
			<br>
			<a href="activities3.php" class="btn btn-primary">Previous Page</a>
            <a href="activities5.php" class="btn btn-primary">Next Page</a>
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
