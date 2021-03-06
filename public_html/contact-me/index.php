<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Bootstrap Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
				crossorigin="anonymous"/>
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
				integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r"
				crossorigin="anonymous"/>
		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/style.css">

		<script src="../javascript/style.js" type="text/javascript"></script>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<header>
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="../index.php">CP<span class="sr-only">(current)</span></a></li>
						<li><a href="../index.php">About Me</a></li>
						<li><a href="../resume/index.php">Resume </a></li>
						<li><a href="index.php">Contact Me</a></li>
				</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
		</nav>
		</div>
		</header>
				<div class="containier">
					<div class="row">
						<div class="col-md-6">
							<div class="content-box">
								<div class="jumbotron">

									<h2>Connect with and follow me</h2>

									<p>  <a href="https://twitter.com/chrispaul3625" class="btn btn-social-icon btn-twitter">
											<span class="fa fa-twitter"></span> Follow Me On Twitter!

										</a>  </p>
									<p>  <a href="https://www.linkedin.com/in/christopher-paul-669486112" class="btn btn-social-icon btn-linkedin">
											<span class="fa fa-linkedin"></span> Check me out on Linkedin

										</a>  </p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="content-box">
								<div class="jumbotron">
								<h2> Send Me A Message</h2>



									<form id="contact-form" action="../php-libs/phpMailer.php" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label for="name">Your name:</label>
											<input type="text" name="name"  id="name" required>
										</div>
										<div class="form-group">
											<label for="email">Your email:</label>
											<input type="email" name="email"  id="email" required>
										</div>
										<div class="form-group">
											<label for="Subject">Subject:</label>
											<input type="text" name="subject"  id="subject" required>
										</div>
										<div class="form-group">
											<label for="message">Your message:</label>
											<textarea name="message" id="message" required> </textarea>
										</div>
										<div class="form-group">
											<input type="submit" value="Send Message!">
										</div>
									</form>
									<div id="output-area"></div>
							</div>
						</div>
					</div>
				</div>
			</body>

			<footer>
				&copy; 2016 Christopher A Paul
			</footer>
</html>