<!DOCTYPE HTML>
<html>
	<head>
		<title>M152 Blog. - Testing</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<!--<?php include ($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>-->
					<header id="header" class="alt">
						<h1><a href="index.php">M152 Blog.</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menü</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.php">Home</a></li>
											<li><a href="animationen.php">Animationen</a></li>
											<li><a href="styleguide.php">Styleguide</a></li>
											<li><a href="audioformate.php">Audioformate</a></li>
											<li><a href="videoformate.php">Videoformate</a></li>
											<li><a href="bildformate.php">Bildformate</a></li>
											<li><a href="impressum.php">Impressum</a></li>
											<li><a href="urheberrecht.php">Urheberrecht</a></li>
											<li><a href="dsgvo.php">DSGVO</a></li>
											<li><a href="pagespeed.php">Pagespeed</a></li>
											<li><a href="testing.php">Testing</a></li>
											<li><a href="wireframes.php">Wireframes</a></li>
											<li><a href="reflexion.php">Reflexion</a></li>
											<li><a href="sitemap.php">Sitemap</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>Testing</h2>

						</header>
						<section class="wrapper style5">
							<div class="inner">
								<h2>Testfälle</h2>
								<div class="table-wrapper">
									<table>
										<tr>
											<th>Test Nr.</th>
											<th>Testfall</th>
											<th>Erwartetes Verhalten</th>
											<th>Tatsächliches Verhalten</th>
											<th>Status</th>
										</tr>
										<tr>
											<th>1</th>
											<td>Animationen.php / Animationen</td>
											<td>Alle 5 Animationen werden auf der Seite korrekt dargestellt (Dektop & Mobile)</td>
											<td>wie erwartet</td>
											<td>ok</td>
										</tr>
										<tr>
											<th>2</th>
											<td>Ladeanimationen</td>
											<td>Die Ladeanimationen bei Bannern wird korrekt animiert</td>
											<td>wie erwartet</td>
											<td>ok</td>
										</tr>
										<tr>
											<th>3</th>
											<td>Link (Menu-navigation, Buttons)</td>
											<td>Auf jeder Seite funktionieren alle hinterlegten Links</td>
											<td>wie erwartet</td>
											<td>ok</td>
										</tr>
										<tr>
											<th>4</th>
											<td>Formular (automatisiert & validiert)</td>
											<td>Im Formular sollte der User die Werte, die schon einmal eingeben hat, beim nächsten Mal wiederverwenden können</td>
											<td>wie erwartet</td>
											<td>ok</td>
										</tr>
										<tr>
											<th>5</th>
											<td>Bilder / Videos / Audiofiles</td>
											<td>Bilder / Videos / Audiofiles werden korrekt in sämtlichen Browsern dargestellt</td>
											<td>Bei Audiofiles wird das erste Audio nicht automatisch abgespielt (Browser: Chrome & Microsoft Edge)</td>
											<td>ok</td>
										</tr>
										<tr>
											<th>6</th>
											<td>Responsive Design (Desktop, Tablet, Mobile)</td>
											<td>Das Responsive-design wird in den Browsern Firefox, Microsoft Edge, Google Chrome und Opera fehlerfrei dargestellt </td>
											<td>Bei der Komponente, wo man einen Code auf der Seite darstellen kann, wird in gewissen Browsern nicht schön dargestellt.</td>
											<td>teilweise ok</td>
										</tr>
										<tr>
											<th>7</th>
											<td>Fonts (Schriften)</td>
											<td>Die Fonts (Schriften) sollten auf jedem Browser verfügbar sein</td>
											<td>wie erwartet</td>
											<td>ok</td>
										</tr>
									</table>
									<h2>Testing von Browserkompatibilität</h2>
									<p>Alle Tests wurde mit der Gratisversion von <a href="https://live.browserstack.com/">Browserstack</a> durchgeführt. Die Performance auf den verschiednen Browsern waren überall im grünen Bereich. <br>Screenshots/Videos waren nicht wirklich möglich, da die Gratisversion von Browserstack nur einen Test von 100 Sekunden zulässt.</p>
									<p><b>Die Webseite wurde auf den folgenden Browsern getestet:</b></p>
									<ul>
										<li>Firefox</li>
										<li>Chrome</li>
										<li>Microsoft Edge</li>
										<li>Safari (Mobile & Tablet)</li>
									</ul>
								</div>
							</div>
						</section>

							<!-- CTA -->
								<section id="cta" class="wrapper style4">
									<div class="inner">
										<header>
											<h2>Hier gibt noch mehr!</h2>
											<p>Hier findest du Screenshots von vielen Wireframes, die gebraucht wurden, um die Seite zu realisieren.</p>
										</header>
										<ul class="actions stacked">
											<li><a href="wireframes.php" class="button fit primary">Wireframes</a></li>
										</ul>
									</div>
								</section>


					</article>

				<!-- Footer -->
					<!--<?php include ($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>-->
					<footer id="footer">
						<ul class="icons">
							<li><a href="https://www.instagram.com/luca_hofstetter28/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://www.linkedin.com/in/lucahofstetter-27a82b179" class="icon brands fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="mailto:luca.marco.hofstetter@gmail.com" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; M152 Blog.</li><li>Design: Luca Hofstetter</a></li>
						</ul>
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