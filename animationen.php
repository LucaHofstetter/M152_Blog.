<!DOCTYPE HTML>
<html>
	<head>
		<title>M152 Blog. - Animationen</title>
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
						<header id="banner">
							<div class="inner">
								<h2>Animationen</h2>

							</div>
							<a href="#three" class="more scrolly"></a>
						</header>



						<!-- Two -->
							<section id="two" class="wrapper alt style2">
								<section class="spotlight">
									<div class="image">
										<img src="images/gifs/leo.gif"/>
									</div>
									<div class="content">
										<h2>Animiertes GIF</h2>
										<p>Das Graphics Interchange Format (GIF) ist ein Bitmap-Bildformat. Gif unterstützt die Portabilität zwischen Anwendungen und Betriebssystemen.</p>
									</div>
								</section>
								<section class="spotlight">
									<div class="image">
										<img height="320px" src="images/svgs/leo.svg"/>
									</div>
									<div class="content">
										<h2>SVG</h2>
										<p>Da SVG-Bilder in einem Vektorgrafikformat definiert werden und als XML-Dateien abgespeichert werden, können sie ohne Qualitätsverlust skaliert werden.</p>
									</div>
								</section>
							</section>
							<section id="three" class="wrapper alt style2">
								<section class="spotlight">
									<div class="animation">
										<div class="animationObject" data-color="red" data-type="translate"></div>
									</div>
									<div class="content">
										<h2>Animation Translate</h2>
										<section class="wrapper style5">
											<div class="inner">
											<h5>Explanation</h5>
											<blockquote>Eine Translation beschreibt die Veränderung der
												Position eines Objektes.</blockquote>
											<h5>Code</h5>
											<pre><code>
.animationObject {
 height: 50px;
 width: 50px;
 border-radius: 50px;
 <b>transition: .4s;</b>
 display: inline-block;
 position: relative;
}
.animationObject[data-type="translate"]:hover {
 <b>transform: translateX(50px);</b>
}</code></pre>
										</div>
									</section>
									<br>
									</div>
								</section>

								<section class="spotlight">
									<div class="animation">
										<div class="animationObject" data-color="blue" data-type="transition"></div>
									</div>
									<div class="content">
										<h2>Animation Transition</h2>
										<section class="wrapper style5">
											<div class="inner">
											<h5>Erklärung</h5>
											<blockquote>Eine Transition beschreibt den Übergang zwischen
												zwei definierten Zuständen eines HTML-Elements.
											</blockquote>
											<h5>Code</h5>
											<pre><code>
.animationObject {
 height: 50px;
 width: 50px;
 border-radius: 50px;
 <b>transition: .4s;</b>
 display: inline-block;
 position: relative;
}
.animationObject[data-type="transition"]:hover {
 <b>background-color: white;</b>
}</code></pre>
										</div>
									</section>
									<br>
									</div>
								</section>

								<section class="spotlight">
									<div class="animation">
										<div class="animationObject" data-color="green" data-type="transformation"></div>
									</div>
									<div class="content">
										<h2>Animation transformation</h2>
										<section class="wrapper style5">
											<div class="inner">
											<h5>Explanation</h5>
											<blockquote>Eine Transformation beschreibt die Formänderung
											grafischer Merkmale eines Objektes hinsichtlich
											Größe, Form, Farbe oder Textur usw.</blockquote>
											<h5>Code</h5>
											<pre><code>
.animationObject {
 height: 50px;
 width: 50px;
 border-radius: 50px;
 display: inline-block;
 position: relative;
 <b>transform: skewX(40deg);</b>
}</code></pre>
										</div>
									</section>
										<br>
									</div>
								</section>

								<section class="spotlight">
									<div class="animation">
										<div class="animationObject" data-color="purple" data-type="keyframes"></div>
									</div>
									<div class="content">
										<h2>Keyframes</h2>
										<section class="wrapper style5">
											<div class="inner">
											<h5>Erklärung</h5>
											<blockquote>
												Wenn man eine Keyframe-Animation erstellen will, muss
												man dieser einen eindeutigen Namen geben.
												Das kann über den Befehl animation-name erreicht werden.
												Danach muss man auch noch festlegen, wie lange die Animation
												jeweils dauern soll. Das kann mit dem Befehl animation-duration
												erreicht werden.
												Mit dem Befehl animation-iteration-count kann man noch die
												Anzahl Animationswiederholungen festlegen.
												Anstelle von infinite kann auch eine Dezimal-
												zahl eingetragen werden um eine bestimmte Anzahl an
												Wiederholungen zu bestimmen.
											</blockquote>
											<h5>Code</h5>
											<pre><code>
@keyframes changeSize {
 from {
  width: 50px;
  height: 50px;
  border-radius: 50px;
 }

 to {
  width: 100px;
  height: 100px;
  border-radius: 100px;
 }
}

.animationObject[data-type="keyframes"] {
 animation-duration: 400ms;
 animation-name: changeSize;
 animation-iteration-count: infinite;
 animation-direction: alternate;
}</code></pre>
										</div>
									</section>
										<br>
									</div>
								</section>


								<section class="spotlight">
									<div class="animation">
										<canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;"></canvas>
									</div>
									<div class="content">
										<h2>Canvas</h2>
										<section class="wrapper style5">
											<div class="inner">
											<h5>Erklärung</h5>
											<blockquote>
												Das canvas-Element ist zu Beginn eine leere Zeichenfläche. Diese Zeichenfläche
												kann man mithilfe JavaScript mit tollen Animationen gefüllt werden.
											</blockquote>
											<h5>Code</h5>
											<pre><code>
// JavaScript
<.script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");

// gradient
var grd = ctx.createRadialGradient(75, 50, 5, 90, 60, 100);
grd.addColorStop(0, "red");
grd.addColorStop(1, "white");

// Füllen
ctx.fillStyle = grd;
ctx.fillRect(10, 10, 150, 80);
</.script>
// HTML
<.canvas id="myCanvas""></.canvas>
</code></pre>
										</div>
									</section>
										<br>
									</div>
								</section>

								<section class="spotlight reveal">
									<script>
										function reveal() {
										var reveals = document.querySelectorAll(".reveal");

										for (var i = 0; i < reveals.length; i++) {
											var windowHeight = window.innerHeight;
											var elementTop = reveals[i].getBoundingClientRect().top;
											var elementVisible = 250;

											if (elementTop < windowHeight - elementVisible) {
												reveals[i].classList.add("active");
											} else {
												reveals[i].classList.remove("active");
											}
										}
										}

										window.addEventListener("scroll", reveal);
									</script>
									<div class="content">


											<div class="reveal reveal-example">
												<p>Diese Box hat eine Scroll animation :)</p>
											</div>

									</div>

									<div class="content">
										<h2>Animation Scroll</h2>
										<section class="wrapper style5">
											<div class="inner">
											<h5>Erklärung</h5>
											<blockquote>
												In modernen Websites sieht man heutzutage dauernd sollche
												Scroll-Animationen.
											</blockquote>
											<h5>Code</h5>
											<pre><code>
// JavaScript
&lt;script&gt;
function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 250;

    if (elementTop < windowHeight - elementVisible) {
	    reveals[i].classList.add("active");
    } else {
	    reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);
&lt;script&gt;

// CSS
.reveal{
  position: relative;
  transform: translateY(250px);
  opacity: 0;
  transition: 1.5s all ease;
}

.reveal.active{
  transform: translateY(0);
  opacity: 1;
}
</code></pre>
										</div>
									</section>
										<br>
									</div>
								</section>




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
			<script>
			var c = document.getElementById("myCanvas");
			var ctx = c.getContext("2d");

			// gradient
			var grd = ctx.createRadialGradient(75, 50, 5, 90, 60, 100);
			grd.addColorStop(0, "red");
			grd.addColorStop(1, "white");

			// Füllen
			ctx.fillStyle = grd;
			ctx.fillRect(10, 10, 150, 80);
			</script>

	</body>
</html>