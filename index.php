<?php
$a = 1;
$content = 'main.php';

if (isset($_GET['a']))
    $a = $_GET['a'];

if ($a == 2){
    $content = 'contact.php';
} else if ($a == 3) {
    $content = 'about.php';
} else if ($a == 4) {
    $content = 'policy.php';
}

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Inoltra a bellezza e salute!</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
    <meta name="description" content="Inoltra a bellezza e salute!">

	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="common-css/bootstrap.css" rel="stylesheet">

	<link href="common-css/ionicons.css" rel="stylesheet">


	<link href="css/styles.css" rel="stylesheet">

	<link href="css/responsive.css" rel="stylesheet">

</head>
<body >

	<header>
		<div class="container-fluid position-relative no-side-padding">

			<a href="#" class="logo"><h4><b>A proposito di bellezza</b></h4></a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="./?a=1">Principale</a></li>
				<li><a href="./?a=2">Contatti</a></li>
				<li><a href="./?a=3">Articolo</a></li>
			</ul><!-- main-menu -->

		</div><!-- conatiner -->
	</header>

	<div class="slider">

	</div><!-- slider -->

	<section class="post-area">
		<div class="container">

			<div class="row">
                <?php include($content);?>

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- post-area -->

	<section class="comment-section center-text">
		<div class="container">
            <br>
			<h4><b>Lascia un commento</b></h4>
			<div class="row">

				<div class="col-lg-2 col-md-0"></div>

				<div class="col-lg-8 col-md-12">
					<div class="comment-form">
						<form method="post">
							<div class="row">

								<div class="col-sm-6">
									<input type="text" aria-required="true" id="contact-form-name" class="form-control"
										placeholder="Il tuo nome" aria-invalid="true" required >
								</div><!-- col-sm-6 -->
								<div class="col-sm-6">
									<input type="email" aria-required="true" id="contact-form-email" class="form-control"
										placeholder="Email" aria-invalid="true" required>
								</div><!-- col-sm-6 -->

								<div class="col-sm-12">
									<textarea id="contact-form-message" rows="2" class="text-area-messge form-control"
										placeholder="Testo del commento" aria-required="true" aria-invalid="false"></textarea >
								</div><!-- col-sm-12 -->
								<div class="col-sm-12">
									<button class="submit-btn" type="submit" id="send-comment"><b>Invia un commento</b></button>
								</div><!-- col-sm-12 -->

							</div><!-- row -->
						</form>
					</div><!-- comment-form -->

					<h4><b>Commento</b></h4>

					<div class="commnets-area text-left" style="display: none;" id="comment-list">


					</div><!-- commnets-area -->


				</div><!-- col-lg-8 col-md-12 -->

			</div><!-- row -->

		</div><!-- container -->
	</section>

	<footer>

		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="footer-section">
					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->



				<div class="col-lg-4 col-md-6">
					<div class="footer-section">
						<h4 class="title"><a href="./?a=4">Politica sulla privacy</a></h4>
                        <ul class="icons">
                            <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                        </ul>
					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-section">

                    </div><!-- footer-section -->
                </div><!-- col-lg-4 col-md-6 -->
			</div><!-- row -->
		</div><!-- container -->
	</footer>


	<!-- SCIPTS -->

	<script src="common-js/jquery-3.1.1.min.js"></script>

	<script src="common-js/tether.min.js"></script>

	<script src="common-js/bootstrap.js"></script>

	<script src="common-js/scripts.js"></script>
    <script>
        let date = Date.now();
        $('#send-comment').on('click', function () {
            $('#comment-list').attr('style', 'display: block');
            $('#comment-list').append('<div class="comment" >\n' +
                '\n' +
                '\t\t\t\t\t\t\t<div class="post-info">\n' +
                '\n' +
                '\t\t\t\t\t\t\t\t<div class="left-area">\n' +
                '\t\t\t\t\t\t\t\t\t<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>\n' +
                '\t\t\t\t\t\t\t\t</div>\n' +
                '\n' +
                '\t\t\t\t\t\t\t\t<div class="middle-area">\n' +
                '\t\t\t\t\t\t\t\t\t<a class="name" href="#"><b>' + $('#contact-form-name').val() + '</b></a>\n' +
                '\t\t\t\t\t\t\t\t\t<h6 class="date">' + new Date(Date.now()).toLocaleString() + '</h6>\n' +
                '\t\t\t\t\t\t\t\t</div>\n' +
                '\n' +
                '\t\t\t\t\t\t\t\t<div class="right-area">\n' +
                '\t\t\t\t\t\t\t\t</div>\n' +
                '\n' +
                '\t\t\t\t\t\t\t</div><!-- post-info -->\n' +
                '\n' +
                '\t\t\t\t\t\t\t<p>' + $('#contact-form-message').val() + '</p>\n' +
                '\n' +
                '\t\t\t\t\t\t</div>')
        })
    </script>
</body>
</html>
