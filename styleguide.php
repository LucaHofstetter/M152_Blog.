<!DOCTYPE HTML>
<html>
	<head>
		<title>M52 Blog. - Styleguide</title>
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
							<h2>Styleguide / Titel Banner</h2>
							<p>Untertitel für Banner</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">

								<section>
									<h4>Text</h4>
									<p>Das ist ein <b>fett unterstrichener text</b> und das ist ein <strong>wichtiger text</strong>. Das ist ein <i>kursiver text</i> und das ist ein <em>hervorgehoberner text</em>.
									Das ist ein <sup>unten ausgerichteter text</sup> und das ist ein <sub>oben ausgerichteter text</sub>.
									Das ist ein <u>unterstrichener</u> und das ist ein Codeausschnitt: <code>for (;;) { ... }</code>. Als letztes kommt noch ein, <a href="#">link</a>.</p>
									<hr />
									<header>
										<h4>Titel mit einem Untertitel</h4>
										<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
									</header>
									<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
									<header>
										<h5>Titel mit einem Untertitel</h5>
										<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
									</header>
									<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
									<hr />
									<h2>Titel Level 2</h2>
									<h3>Titel Level 3</h3>
									<h4>Titel Level 4</h4>
									<h5>Titel Level 5</h5>
									<h6>Titel Level 6</h6>
									<hr />
									<h5>Zitatblock</h5>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h5>Codeblock</h5>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
  print 'Iteration ' + i;
  deck.shuffle();
  i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section>

								<section>
									<h4>Listen</h4>
									<div class="row">
										<div class="col-6 col-12-medium">
											<h5>ungeordnete Liste</h5>
											<ul>
												<li>Dolor pulvinar etiam.</li>
												<li>Sagittis adipiscing.</li>
												<li>Felis enim feugiat.</li>
											</ul>

										</div>
										<div class="col-6 col-12-medium">
											<h5>geordnete Liste</h5>
											<ol>
												<li>Dolor pulvinar etiam.</li>
												<li>Etiam vel felis viverra.</li>
												<li>Felis enim feugiat.</li>
												<li>Dolor pulvinar etiam.</li>
												<li>Etiam vel felis lorem.</li>
												<li>Felis enim et feugiat.</li>
											</ol>
											<h5>Icons</h5>
											<ul class="icons">
												<li><a href="#" class="icon brands fa-linkedin"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon solid fa-envelope"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											</ul>
										</div>
									</div>
									<h5>Aktionen</h5>
									<div class="row">
										<div class="col-6 col-12-medium">
											<ul class="actions">
												<li><a href="#" class="button primary">Standard</a></li>
												<li><a href="#" class="button">Standard</a></li>
											</ul>
											<ul class="actions small">
												<li><a href="#" class="button primary small">Klein</a></li>
												<li><a href="#" class="button small">Klein</a></li>
											</ul>
											<ul class="actions stacked">
												<li><a href="#" class="button primary">Standard</a></li>
												<li><a href="#" class="button">Standard</a></li>
											</ul>
											<ul class="actions stacked">
												<li><a href="#" class="button primary small">Klein</a></li>
												<li><a href="#" class="button small">Klein</a></li>
											</ul>
										</div>
										<div class="col-6 col-12-medium">
											<ul class="actions stacked">
												<li><a href="#" class="button primary fit">Standard</a></li>
												<li><a href="#" class="button fit">Standard</a></li>
											</ul>
											<ul class="actions stacked">
												<li><a href="#" class="button primary small fit">Klein</a></li>
												<li><a href="#" class="button small fit">Klein</a></li>
											</ul>
										</div>
									</div>
								</section>

								<section>
									<h4>Table</h4>
									<h5>Default</h5>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Beschreibung</th>
													<th>Preis</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>


								</section>

								<section>
									<h4>Buttons</h4>
									<ul class="actions">
										<li><a href="#" class="button primary">Primär</a></li>
										<li><a href="#" class="button">Standard</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button large">Gross</a></li>
										<li><a href="#" class="button">Standard</a></li>
										<li><a href="#" class="button small">Klein</a></li>
									</ul>
									<ul class="actions fit">
										<li><a href="#" class="button fit">Fit</a></li>
										<li><a href="#" class="button primary fit">Fit</a></li>
										<li><a href="#" class="button fit">Fit</a></li>
									</ul>
									<ul class="actions fit small">
										<li><a href="#" class="button primary fit small">Fit + Klein</a></li>
										<li><a href="#" class="button fit small">Fit + Klein</a></li>
										<li><a href="#" class="button primary fit small">Fit + Klein</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
										<li><a href="#" class="button icon solid fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button primary disabled">Ausgeblended</span></li>
										<li><span class="button disabled">Ausgeblended</span></li>
									</ul>
								</section>

								<section>
									<h4>Formular</h4>
									<form method="post" action="#">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
											</div>
											<div class="col-12">
												<select name="demo-category" id="demo-category">
													<option value="">- Kategorie -</option>
													<option value="1">Kategorie 1</option>
													<option value="1">Kategorie 2</option>
													<option value="1">Kategorie 3</option>
													<option value="1">Kategorie 4</option>
												</select>
											</div>
											<div class="col-4 col-12-small">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Tief</label>
											</div>
											<div class="col-4 col-12-small">
												<input type="radio" id="demo-priority-normal" name="demo-priority">
												<label for="demo-priority-normal">Normal</label>
											</div>
											<div class="col-4 col-12-small">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">Hoch</label>
											</div>
											<div class="col-6 col-12-small">
												<input type="checkbox" id="demo-newsletter" name="demo-newsletter">
												<label for="demo-copy">Newsletter</label>
											</div>
											<div class="col-6 col-12-small">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">kein Roboter</label>
											</div>
											<div class="col-12">
												<textarea name="demo-message" id="demo-message" placeholder="Kommentar" rows="6"></textarea>
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Send Message" class="primary" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>

								<section>
									<h4>Bilder</h4>
									<h5>Fit</h5>
									<div class="box alt">
										<div class="row gtr-50 gtr-uniform">
											<div class="col-12"><span class="image fit"><img src="images/banner.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
										</div>
									</div>

								</section>

							</div>
						</section>

						<!-- One -->
							<section id="one" class="wrapper style1 special">
								<div class="inner">
									<header class="major">
										<h2>spezieller Bereich</h2>
										<p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br />
										fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>
									</header>
									<ul class="icons major">
										<li><span class="icon fa-gem major style1"><span class="label">Lorem</span></span></li>
										<li><span class="icon fa-heart major style2"><span class="label">Ipsum</span></span></li>
										<li><span class="icon solid fa-code major style3"><span class="label">Dolor</span></span></li>
									</ul>
								</div>
							</section>

						<!-- Two -->
							<section id="two" class="wrapper alt style2">
								<section class="spotlight">
									<div class="image"><img src="images/pic01.jpg" alt="" /></div><div class="content">
										<h2>Teaser / Slidecontent</h2>
										<p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
									</div>
								</section>
								<section class="spotlight">
									<div class="image"><img src="images/pic02.jpg" alt="" /></div><div class="content">
										<h2>Teaser / Slidecontent</h2>
										<p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
									</div>
								</section>
								<section class="spotlight">
									<div class="image"><img src="images/pic03.jpg" alt="" /></div><div class="content">
										<h2>Teaser / Slidecontent</h2>
										<p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
									</div>
								</section>
							</section>



						<!-- Three -->
							<section id="three" class="wrapper style3 special">
								<div class="inner">
									<header class="major">
										<h2>Spezieller Bereich / Seitenübersicht</h2>
										<p>Aliquam ut ex ut augue consectetur interdum. Donec amet imperdiet eleifend<br />
										fringilla tincidunt. Nullam dui leo Aenean mi ligula, rhoncus ullamcorper.</p>
									</header>
									<ul class="features">
										<li class="icon fa-paper-plane">
											<h3>Arcu accumsan</h3>
											<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
										</li>
										<li class="icon solid fa-laptop">
											<h3>Ac Augue Eget</h3>
											<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
										</li>
										<li class="icon solid fa-code">
											<h3>Mus Scelerisque</h3>
											<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
										</li>
										<li class="icon solid fa-headphones-alt">
											<h3>Mauris Imperdiet</h3>
											<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
										</li>
										<li class="icon fa-heart">
											<h3>Aenean Primis</h3>
											<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
										</li>
										<li class="icon fa-flag">
											<h3>Tortor Ut</h3>
											<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
										</li>
									</ul>
								</div>
							</section>

						<!-- CTA -->
							<section id="cta" class="wrapper style4">
								<div class="inner">
									<header>
										<h2>Call to action Teaser</h2>
										<p>Aliquam ut ex ut augue consectetur interdum endrerit imperdiet amet eleifend fringilla.</p>
									</header>
									<ul class="actions stacked">
										<li><a href="#" class="button fit primary">Button</a></li>
										<li><a href="#" class="button fit">Button</a></li>
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