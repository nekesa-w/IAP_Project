<!--
CREDITS FOR TEMPLATE

TemplateMo 557 Grad School
https://templatemo.com/tm-557-grad-school

-->

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title> Faculty of Art </title>

	<!-- Bootstrap core CSS -->
	<link href="{{asset('/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="{{asset('/frontend/assets/css/fontawesome.css') }}">
	<link rel="stylesheet" href="{{asset('/frontend/assets/css/templatemo-grad-school.css') }}">
	<link rel="stylesheet" href="{{asset('/frontend/assets/css/owl.css') }}">
	<link rel="stylesheet" href="{{asset('/frontend/assets/css/lightbox.css') }}">

</head>

<body>

	<header class="main-header clearfix" role="header">
		<div class="logo">
			<a href="{{ route('home') }}"><em>Ver</em>sity</a>
		</div>

		<a href="" class="menu-link"><i class="fa fa-bars"></i></a>

		<nav id="menu" class="main-nav" role="navigation">
			<ul class="main-menu">

				<li><a href="{{ route('application_reg') }}">Future Students</a></li>

				<li class="has-submenu"><a href="">Current Students </a>
					<ul class="sub-menu">
						<li><a href="#section2">AMS Login</a></li>
						<li><a href="#section3">E-Learning Login</a></li>
					</ul>
				</li>

				<li class="has-submenu"><a href="">Staff </a>
					<ul class="sub-menu">
						<li><a href="#section2">Vacancies</a></li>
						<li><a href="#section3">Staff Login</a></li>
					</ul>
				</li>

				<li class="has-submenu"><a href="">Faculty</a>
					<ul class="sub-menu">
						<li><a href="{{ route('faculty_of_art') }}">Faculty of Art</a></li>
						<li><a href="{{ route('faculty_of_design') }}">Faculty of Design</a></li>
					</ul>
				</li>

				<li><a href="">About</a></li>
			</ul>
		</nav>

	</header>

	<section class="section main-banner" id="top" data-section="section1">
		<div class="bg-image">
			<img src="{{ asset('/frontend/assets/images/facultyart.jpg') }}">
		</div>

		<div class="image-overlay header-text">
			<div class="caption">
				<h2>Faculty of Art</h2>
				<p>Educating artists and cultural practitioners who will shape the age of imagination and redefine the meaning of contemporary art practice.</p>
			</div>
		</div>
	</section>

	<section class="section courses" data-section="section4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="course-heading">
						<h2>Choose Your Course</h2>
					</div>
				</div>
				<div class="owl-carousel owl-theme">
					<div class="item">
						<img src="{{ asset('/frontend/assets/images/expanimation.jpg') }}" alt="Experimental Animation">
						<div class="down-content">
							<h4>Experimental Animation</h4>
							<p>Learn the skills to bring your imagination to life in the new Experimental Animation program.</p>
						</div>
					</div>

					<div class="item">
						<img src="{{ asset('/frontend/assets/images/printmaking.jpg') }}" alt="Printmaking & Publications">
						<div class="down-content">
							<h4>Printmaking & Publications</h4>
							<p>Explore our broad approach to contemporary printmaking and publications through prints, books, zines, multiples and installation.</p>
						</div>
					</div>

					<div class="item">
						<img src="{{ asset('/frontend/assets/images/photography.jpeg') }}" alt="Photography">
						<div class="down-content">
							<h4>Photography</h4>
							<p>Approached as a fine-art medium within contemporary art practice, the Photography program emphasizes the development of your artistic vision.</p>
						</div>
					</div>

					<div class="item">
						<img src="{{ asset('/frontend/assets/images/drawingpaint.jpg') }}" alt="Drawing & Painting">
						<div class="down-content">
							<h4>Drawing & Painting</h4>
							<p>Perceive, read and translate the visual world into personal forms of pictorial expression and representation.</p>
						</div>
					</div>

					<div class="item">
						<img src="{{ asset('/frontend/assets/images/intmedia.jpg') }}" alt="Integrated Media">
						<div class="down-content">
							<h4>Integrated Media</h4>
							<p>Integrated Media is an innovative digital and time-based area that encourages an interdisciplinary exploration of media practices.</p>
						</div>
					</div>

					<div class="item">
						<img src="{{ asset('/frontend/assets/images/sculpt.jpg') }}" alt="Sculpture &Installation">
						<div class="down-content">
							<h4>Sculpture & Installation</h4>
							<p>Sculpture & Installation students experiment with the making and transformation of three-dimensional objects in relation to other components, such as space, sound, text and images.</p>
						</div>
					</div>

					<div class="item">
						<img src="{{ asset('/frontend/assets/images/crosdisc.jpg') }}" alt="Cross-Disciplinary Art: Life Studies">
						<div class="down-content">
							<h4>Cross-Disciplinary Art: Life Studies</h4>
							<p>Mapping all existing and potential studies of the figure and the body in contemporary art practices.</p>
						</div>
					</div>

					<div class="item">
						<img src="{{ asset('/frontend/assets/images/critic.jpg') }}" alt="Criticism & Curatorial Practice">
						<div class="down-content">
							<h4>Criticism & Curatorial Practice</h4>
							<p>This cross-disciplinary area is the first undergraduate program in Canada designed to educate artists as curators and critics.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section about" data-section="section5">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h6 class="text-uppercase">Connect</h6>
					<nav>
						<ul class="footer-links nav flex-column">
							<li class="nav-item">
								<a href="" title="Facebook">Facebook</a>
							</li>
							<li class="nav-item">
								<a href="" title="Twitter">Twitter</a>
							</li>
							<li class="nav-item">
								<a href="" title="LinkedIn">LinkedIn</a>
							</li>
							<li class="nav-item">
								<a href="" title="YouTube">YouTube</a>
							</li>
							<li class="nav-item">
								<a href="" title="Instagram">Instagram</a>
							</li>
						</ul>
					</nav>
				</div>

				<div class="col-md-3">
					<h6 class="text-uppercase">Study</h6>
					<nav>
						<ul class="footer-links nav flex-column">
							<li class="nav-item">
								<a href="{{ route('application_reg') }}" title="Applications">Undergraduate Applications</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('faculty_of_art') }}" title="Faculty of Art">Faculty of Art</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('faculty_of_design') }}" title="Faculty of Design">Faculty of Design</a>
							</li>
						</ul>
					</nav>
				</div>

				<div class="col-md-3">
					<h6 class="text-uppercase">Work</h6>
					<nav>
						<ul class="footer-links nav flex-column">
							<li class="nav-item">
								<a href="" title="Careers">Employment Opportunities</a>
							</li>
							<li class="nav-item">
								<a href="" title="Student Jobs">Student Jobs</a>
							</li>
							<li class="nav-item">
								<a href="" title="Alumni Jobs">Alumni Jobs</a>
							</li>
						</ul>
					</nav>
				</div>

				<div class="col-md-3">
					<h6 class="text-uppercase">Contact</h6>
					<nav>
						<ul class="footer-links nav flex-column">
							<li class="nav-item">
								<p>0720022222</p>
							</li>
							<li class="nav-item">
								<p>contact@versity.edu</p>
							</li>
							<li class="nav-item">
								<p>P.O. Box 00000 City Square</p>
							</li>
							<li class="nav-item ">
								<p>Versity Lane, off Versity Road, Nairobi, Kenya </p>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p><i class="fa fa-copyright"></i> Copyright 2022 Versity.
				</div>
			</div>
		</div>
	</footer>

	<!-- Scripts -->
	<!-- Bootstrap core JavaScript -->
	<script src="{{ asset('/frontend/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

	<script src="{{ asset('/frontend/assets/js/isotope.min.js') }}"></script>
	<script src="{{ asset('/frontend/assets/js/owl-carousel.js') }}"></script>
	<script src="{{ asset('/frontend/assets/js/lightbox.js') }}"></script>
	<script src="{{ asset('/frontend/assets/js/tabs.js') }}"></script>
	<script src="{{ asset('/frontend/assets/js/video.js') }}"></script>
	<script src="{{ asset('/frontend/assets/js/slick-slider.js') }}"></script>
	<script src="{{ asset('/frontend/assets/js/custom.js') }}"></script>

</body>

</html>