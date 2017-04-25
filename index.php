<?php

	require_once("lib/class.AddressBook.php");
	require_once("lib/class.Contact.php");

	$addressBook = new AddressBook();
	$addressBook->addContact(new Contact("Jean", "06 25 15 12 32"));
	$addressBook->addContact(new Contact("Jean", "06 25 15 12 32"));
	$addressBook->addContact(new Contact("Jean", "06 25 15 12 32"));
	$addressBook->addContact(new Contact("Jean", "06 25 15 12 32"));
	$addressBook->addContact(new Contact("Jean", "06 25 15 12 32"));

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Address_book</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- Fonts CSS -->
	<link href="css/style.fonts.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">



	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<!-- Page Content -->
	<div class="container">

		<div class="col-lg-12">
			<h1 class="title">My Address Book</h1>
		</div>

		<div class="row">

			<?php
				foreach ($addressBook as $currentContact)
				{
			?>
			<div class="col-lg-4 col-xs-6 thumb">
				<button class="contact" data-toggle="modal" data-target="#myModal">

					<span class="contact_icon"></span>
					<span class="contact_infos">
						<span class="contact_infos__name">
							<?php echo $currentContact->getName(); ?>
						</span>
						<span class="contact_infos__phone">
							<?php echo $currentContact->getNumber(); ?>
						</span>
					</span>
				</button>



			</div>
			<?php
				}
			?>
		</div>
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
    
      <div class="modal-content">

        <div class="modal-body">
        	<span class="contact_icon"></span>
					<span class="contact_infos">
						<span class="contact_infos__name">
							<?php echo $currentContact->getName(); ?>
						</span>
						<span class="contact_infos__phone">
							<?php echo $currentContact->getNumber(); ?>
						</span>
					</span>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>


      </div>
      
    </div>
  </div>

		<hr>

		<!-- Footer -->
		<footer>
		  
		</footer>

	</div>
	<!-- /.container -->

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

</body>

</html>
