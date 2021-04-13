<!DOCTYPE html>
<html>
<head>
	<title>Business Website</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body {
		background: #000000;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #434343, #000000);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #434343, #000000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


		}
		h3 {
			color: #FFFFFF;
			font-family: 'Roboto Mono', sans-serif !important;
		}
		.logo {
			width: 75px;
			height: 75px;
		}
		.contact {
			text-align: center;
			padding-top: 125px;

		}
		p {
			font-family: 'Raleway', sans-serif !important;
		}
		footer {
			color: #FFFFFF;
			text-align: center;
			padding-top: 175px;
		}
		.contact_form {
			width: 100%;
			height: 100%;

		}

		
	</style>
</head>
<body>
<div id="outterwrapper">
		<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#"><img src="logo-1.png" class="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="businesswebsite.html">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="assignments.html">Projects</a>
      <a class ="nav-link" href="Services.html">Services</a>
      <a class="nav-link" href="Contact.php">Contact Me</a>
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>
<div class="contact">
<h3>Contact Me</h3>


<div class="contact_form">
	<form class="contact-form" action="contactform.php" method="post">
		<input type="text" name="name" placeholder="Full Name">
		<input type="text" name="mail" placeholder="You E-mail">
		<input type="text" name="subject" placeholder="Subject">
		<textarea name="message" placeholder="Message"></textarea>
		<button type="submit" name="submit">Send Mail</button>
	</form>
</div>
		<p>
			<a href="mailto:drelumpkin99@gmail.com"><img src="iconfinder_gmail_1220367.png" width="100px" height="100px"></a>
			<a href="https://twitter.com/SkubaQuan"><img id="logo" src="Twitter_Logo_Blue.png" width="100px" height="100px"></a>
		</p>	

</div>

<footer>
	<p>&copy; Copyright school year 2019-2020 |PTC Web Dev|</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>