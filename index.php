<?php

if($_POST["submit"]) {
    $recipient="melody.rackham@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Mel Rackham Portfolio</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper" class="divided">

		<!-- One -->
		<section
			class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
			<div class="content">
				<h1>Mel Rackham</h1>
				<p class="major">I am a full stack web developer based out of Colorado Springs, CO.
					When I'm not coding, I enjoy being outdoors, skiing, and reading. </p>
				<ul class="actions stacked">
					<li><a href="#first" class="button big wide smooth-scroll-middle">View Projects</a></li>
				</ul>
			</div>
			<div class="image">
				<img src="images/colorado.jpg" alt="Bear Lake Estes Park Colorado" />
			</div>
		</section>

		<!-- Two -->
		<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in"
			id="first">
			<div class="content">
				<h2>Sweet Eats Bakery</h2>
				<p>This project was a study of HTML & CSS.</p>
				<ul class="actions stacked">
					<li><a href="https://codepen.io/melody-rackham/pen/mdbqdjX" class="button">View Code</a></li>
				</ul>
			</div>
			<div class="image">
				<img src="images/cupcakes.jpg" alt="pretty baked goods" />
			</div>
		</section>

		<!-- Three -->
		<section class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in">
			<div class="content">
				<h2>Great Idea</h2>
				<p>This was a project using CSS Flexbox properties.</p>
				<ul class="actions stacked">
					<li><a href="https://github.com/MelodyRackham/UI-III-Flexbox" class="button">View Code</a></li>
				</ul>
			</div>
			<div class="image">
				<img src="images/lightBulb.jpg" alt="" />
			</div>
		</section>

		<!-- Four -->
		<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in">
			<div class="content">
				<h2>Responsive Design</h2>
				<p>This was a project using media quieries to create an adaptive version of the
					"Great Idea" design listed above. This project works on desktop, tablet, and mobile view.</p>
				<ul class="actions stacked">
					<li><a href="https://github.com/MelodyRackham/responsive-web-design-I" class="button">View Code</a>
					</li>
				</ul>
			</div>
			<div class="image">
				<img src="images/tech.jpg" alt="laptop, phone, de and tablet" />
			</div>
		</section>

		<!-- Five -->
		<section class="wrapper style1 align-center">
			<div class="inner">
				<h2>Let's Work Together!</h2>
				<p>I would love to connect and add value to your business using my skills.</p>
			</div>

			<!-- Gallery
			
			<div class="gallery style2 medium lightbox onscroll-fade-in">
				<article>
					<a href="images/gallery/fulls/01.jpg" class="image">
						<img src="images/gallery/thumbs/01.jpg" alt="" />
					</a>
					<div class="caption">
						<h3>Ipsum Dolor</h3>
						<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
						<ul class="actions fixed">
							<li><span class="button small">Details</span></li>
						</ul>
					</div>
				</article>
				<article>
					<a href="images/gallery/fulls/02.jpg" class="image">
						<img src="images/gallery/thumbs/02.jpg" alt="" />
					</a>
					<div class="caption">
						<h3>Feugiat Lorem</h3>
						<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
						<ul class="actions fixed">
							<li><span class="button small">Details</span></li>
						</ul>
					</div>
				</article>
				<article>
					<a href="images/gallery/fulls/03.jpg" class="image">
						<img src="images/gallery/thumbs/03.jpg" alt="" />
					</a>
					<div class="caption">
						<h3>Magna Amet</h3>
						<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
						<ul class="actions fixed">
							<li><span class="button small">Details</span></li>
						</ul>
					</div>
				</article>
				<article>
					<a href="images/gallery/fulls/04.jpg" class="image">
						<img src="images/gallery/thumbs/04.jpg" alt="" />
					</a>
					<div class="caption">
						<h3>Sed Tempus</h3>
						<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
						<ul class="actions fixed">
							<li><span class="button small">Details</span></li>
						</ul>
					</div>
				</article>
				<article>
					<a href="images/gallery/fulls/05.jpg" class="image">
						<img src="images/gallery/thumbs/05.jpg" alt="" />
					</a>
					<div class="caption">
						<h3>Ultrices Magna</h3>
						<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
						<ul class="actions fixed">
							<li><span class="button small">Details</span></li>
						</ul>
					</div>
				</article>
				<article>
					<a href="images/gallery/fulls/06.jpg" class="image">
						<img src="images/gallery/thumbs/06.jpg" alt="" />
					</a>
					<div class="caption">
						<h3>Sed Tempus</h3>
						<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
						<ul class="actions fixed">
							<li><span class="button small">Details</span></li>
						</ul>
					</div>
				</article>
				<article>
					<a href="images/gallery/fulls/07.jpg" class="image">
						<img src="images/gallery/thumbs/07.jpg" alt="" />
					</a>
					<div class="caption">
						<h3>Ipsum Lorem</h3>
						<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
						<ul class="actions fixed">
							<li><span class="button small">Details</span></li>
						</ul>
					</div>
				</article>
				<article>
					<a href="images/gallery/fulls/08.jpg" class="image">
						<img src="images/gallery/thumbs/08.jpg" alt="" />
					</a>
					<div class="caption">
						<h3>Magna Risus</h3>
						<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
						<ul class="actions fixed">
							<li><span class="button small">Details</span></li>
						</ul>
					</div>
				</article>
				<article>
					<a href="images/gallery/fulls/09.jpg" class="image">
						<img src="images/gallery/thumbs/09.jpg" alt="" />
					</a>
					<div class="caption">
						<h3>Tempus Dolor</h3>
						<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
						<ul class="actions fixed">
							<li><span class="button small">Details</span></li>
						</ul>
					</div>
				</article>
				<article>
					<a href="images/gallery/fulls/10.jpg" class="image">
						<img src="images/gallery/thumbs/10.jpg" alt="" />
					</a>
					<div class="caption">
						<h3>Sed Etiam</h3>
						<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
						<ul class="actions fixed">
							<li><span class="button small">Details</span></li>
						</ul>
					</div>
				</article>
				<article>
					<a href="images/gallery/fulls/11.jpg" class="image">
						<img src="images/gallery/thumbs/11.jpg" alt="" />
					</a>
					<div class="caption">
						<h3>Magna Lorem</h3>
						<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
						<ul class="actions fixed">
							<li><span class="button small">Details</span></li>
						</ul>
					</div>
				</article>
				<article>
					<a href="images/gallery/fulls/12.jpg" class="image">
						<img src="images/gallery/thumbs/12.jpg" alt="" />
					</a>
					<div class="caption">
						<h3>Ipsum Dolor</h3>
						<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
						<ul class="actions fixed">
							<li><span class="button small">Details</span></li>
						</ul>
					</div>
				</article>
			</div>

		</section>

		Six
			<section class="wrapper style1 align-center">
				<div class="inner">
					<h2>Ipsum sed consequat</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id ante sed ex pharetra lacinia
						sit
						amet vel massa. Donec facilisis laoreet nulla eu bibendum. Donec ut ex risus. Fusce lorem
						lectus,
						pharetra pretium massa et, hendrerit vestibulum odio lorem ipsum.</p>
					<div class="items style1 medium onscroll-fade-in">
						<section>
							<span class="icon style2 major fa-gem"></span>
							<h3>Lorem</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget
								orci
								amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
						</section>
						<section>
							<span class="icon solid style2 major fa-save"></span>
							<h3>Ipsum</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget
								orci
								amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
						</section>
						<section>
							<span class="icon solid style2 major fa-chart-bar"></span>
							<h3>Dolor</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget
								orci
								amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
						</section>
						<section>
							<span class="icon solid style2 major fa-wifi"></span>
							<h3>Amet</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget
								orci
								amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
						</section>
						<section>
							<span class="icon solid style2 major fa-cog"></span>
							<h3>Magna</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget
								orci
								amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
						</section>
						<section>
							<span class="icon style2 major fa-paper-plane"></span>
							<h3>Tempus</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget
								orci
								amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
						</section>
						<section>
							<span class="icon solid style2 major fa-desktop"></span>
							<h3>Aliquam</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget
								orci
								amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
						</section>
						<section>
							<span class="icon solid style2 major fa-sync-alt"></span>
							<h3>Elit</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget
								orci
								amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
						</section>
						<section>
							<span class="icon solid style2 major fa-hashtag"></span>
							<h3>Morbi</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget
								orci
								amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
						</section>
						<section>
							<span class="icon solid style2 major fa-bolt"></span>
							<h3>Turpis</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget
								orci
								amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
						</section>
						<section>
							<span class="icon solid style2 major fa-envelope"></span>
							<h3>Ultrices</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget
								orci
								amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
						</section>
						<section>
							<span class="icon solid style2 major fa-leaf"></span>
							<h3>Risus</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget
								orci
								amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
						</section>
					</div>
				</div>
			</section>
		</section>

		Seven
		<section class="wrapper style1 align-center">
			<div class="inner medium">
				<h2>Get in touch</h2>
				<form method="post" action="#">
					<div class="fields">
						<div class="field half">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" value="" />
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" value="" />
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6"></textarea>
						</div>
					</div>
					<ul class="actions special">
						<li><input type="submit" name="submit" id="submit" value="Send Message" /></li>
					</ul>
				</form>

			</div>
		</section> -->

			<!-- Footer -->

			<h2>Contact Me!</h2>

			<form method="post" action="iindex.php">
				<label>Name:</label>
				<input name="sender">

				<label>Email address:</label>
				<input name="senderEmail">

				<label>Message:</label>
				<textarea rows="5" cols="20" name="message"></textarea>

				<input type="submit" name="submit">
			</form>


			<footer class="wrapper style1 align-center">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a>
						</li>
						<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a>
						</li>
						<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a>
						</li>
						<li><a href="#" class="icon brands style2 fa-linkedin-in"><span
									class="label">LinkedIn</span></a>
						</li>
						<li><a href="#" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<p>&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
				</div>
			</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>