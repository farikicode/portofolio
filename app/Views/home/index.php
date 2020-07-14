<?= $this->extend('Views/template-frontend/main') ?>

<?= $this->section('content') ?>
<header>
	<div class="container">
		<div class="heading-wrapper">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="info">
						<i class="icon ion-ios-location-outline"></i>
						<div class="right-area">
							<h5>Srikaton Selatan No. 31</h5>
							<h5>Purwoyoso, Ngaliyan</h5>
						</div><!-- right-area -->
					</div><!-- info -->
				</div><!-- col-sm-4 -->

				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="info">
						<i class="icon ion-ios-telephone-outline"></i>
						<div class="right-area">
							<h5>0809-89999</h5>
							<h6>MIN - FRI,8AM - 7PM</h6>
						</div><!-- right-area -->
					</div><!-- info -->
				</div><!-- col-sm-4 -->

				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="info">
						<i class="icon ion-ios-chatboxes-outline"></i>
						<div class="right-area">
							<h5>mr.pudyasto@gmail.com</h5>
							<h6>REPLY IN 24 HOURS</h6>
						</div><!-- right-area -->
					</div><!-- info -->
				</div><!-- col-sm-4 -->
			</div><!-- row -->
		</div><!-- heading-wrapper -->

		<a class="downlad-btn" href="/access">Login Page</a>
	</div><!-- container -->
</header>

<section class="intro-section">
	<div class="container">
		<div class="row">
			<div class="col-md-1 col-lg-2"></div>
			<div class="col-md-10 col-lg-8">
				<div class="intro">
					<div class="profile-img"><img src="/assets/cv/images/profile-1-250x250.jpg" alt=""></div>
					<h2><b>Pudyasto Adi Wibowo</b></h2>
					<h4 class="font-yellow">Web Developer</h4>
					<ul class="information margin-tb-30">
						<li><b>CODING : </b>Laravel / Codeigniter</li>
						<li><b>DATABASE : </b>MS SQL Server / PostgreSQL / MySQL</li>
						<li><b>EMAIL : </b>mr.pudyasto@gmail.com</li>
					</ul>
					<ul class="social-icons">
						<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
						<li><a href="#"><i class="ion-social-linkedin"></i></a></li>
						<li><a href="#"><i class="ion-social-instagram"></i></a></li>
						<li><a href="#"><i class="ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="ion-social-twitter"></i></a></li>
					</ul>
				</div><!-- intro -->
			</div><!-- col-sm-8 -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- intro-section -->

<section class="portfolio-section section">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="heading">
					<h3><b>Portfolio</b></h3>
					<h6 class="font-lite-black"><b>MY WORK</b></h6>
				</div>
			</div><!-- col-sm-4 -->
			<div class="col-sm-8">
				<div class="portfolioFilter clearfix margin-b-80">
					<a href="#" data-filter="*" class="current"><b>ALL</b></a>
					<a href="#" data-filter=".web-design"><b>WEB DESIGN</b></a>
					<a href="#" data-filter=".branding"><b>BRANDING</b></a>
					<a href="#" data-filter=".graphic-design"><b>GRAPHIC DESIGN</b></a>
				</div><!-- portfolioFilter -->
			</div><!-- col-sm-8 -->
		</div><!-- row -->
	</div><!-- container -->

	<div class="portfolioContainer">

		<div class="p-item web-design">
			<a href="/assets/cv/images/portfolio-1-600x400.jpg" data-fluidbox>
				<img src="/assets/cv/images/portfolio-1-600x400.jpg" alt=""></a>
		</div><!-- p-item -->

		<div class="p-item branding graphic-design">
			<a href="/assets/cv/images/portfolio-7-600x800.jpg" data-fluidbox>
				<img src="/assets/cv/images/portfolio-7-600x800.jpg" alt=""></a>
		</div><!-- p-item -->

		<div class="p-item web-design">
			<a href="/assets/cv/images/portfolio-2-600x400.jpg" data-fluidbox>
				<img src="/assets/cv/images/portfolio-2-600x400.jpg" alt=""></a>
		</div><!-- p-item -->

		<div class="p-item p-item-2 graphic-design">
			<a class="img" href="/assets/cv/images/portfolio-8-300x400.jpg" data-fluidbox>
				<img src="/assets/cv/images/portfolio-8-300x400.jpg" alt=""></a>
			<a class="img" href="/assets/cv/images/portfolio-9-300x400.jpg" data-fluidbox>
				<img src="/assets/cv/images/portfolio-9-300x400.jpg" alt=""></a>
		</div><!-- p-item -->

		<div class="p-item branding graphic-design">
			<a href="/assets/cv/images/portfolio-3-600x400.jpg" data-fluidbox>
				<img src="/assets/cv/images/portfolio-3-600x400.jpg" alt=""></a>
		</div><!-- p-item -->

		<div class="p-item graphic-design web-design">
			<a href="/assets/cv/images/portfolio-4-600x400.jpg" data-fluidbox>
				<img src="/assets/cv/images/portfolio-4-600x400.jpg" alt=""></a>
		</div><!-- p-item -->

		<div class="p-item  graphic-design branding">
			<a href="/assets/cv/images/portfolio-5-600x800.jpg" data-fluidbox>
				<img src="/assets/cv/images/portfolio-5-600x800.jpg" alt=""></a>
		</div><!-- p-item -->

		<div class="p-item web-design branding">
			<a href="/assets/cv/images/portfolio-6-600x800.jpg" data-fluidbox>
				<img src="/assets/cv/images/portfolio-6-600x800.jpg" alt=""></a>
		</div><!-- p-item -->

		<div class="p-item p-item-2 graphic-design">
			<a class="img" href="/assets/cv/images/portfolio-10-300x400.jpg" data-fluidbox>
				<img src="/assets/cv/images/portfolio-10-300x400.jpg" alt=""></a>
			<a class="img" href="/assets/cv/images/portfolio-11-300x400.jpg" data-fluidbox>
				<img src="/assets/cv/images/portfolio-11-300x400.jpg" alt=""></a>
		</div><!-- p-item -->

	</div><!-- portfolioContainer -->

</section><!-- portfolio-section -->


<section class="about-section section">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="heading">
					<h3><b>About me</b></h3>
					<h6 class="font-lite-black"><b>PROFESSIONAL PATH</b></h6>
				</div>
			</div><!-- col-sm-4 -->
			<div class="col-sm-8">
				<p class="margin-b-50">Interested in programming since 2008 , started from Visual Basic 6 , Visual Basic .NET and then plunge into the world of web programmer since 2012.

					Focus on PHP language particular CodeIgniter / Laravel PHP Framework.
					Very likes the RDBMS query language such as Microsoft SQL Server , PostgreSQL, MySQL and Oracle databases.

					Always try to challenges and learning about new things.
					<br>
					<b>"Stop learning, start dying"</b>
				</p>

				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="radial-prog-area margin-b-30">
							<div class="radial-progress" data-prog-percent=".80">
								<div></div>
								<h6 class="progress-title">PHP</h6>
							</div>
						</div><!-- radial-prog-area-->
					</div><!-- col-sm-6-->

					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="radial-prog-area margin-b-30">
							<div class="radial-progress" data-prog-percent=".85">
								<div></div>
								<h6 class="progress-title">HTML + CSS</h6>
							</div>
						</div><!-- radial-prog-area-->
					</div><!-- col-sm-6-->

					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="radial-prog-area margin-b-30">
							<div class="radial-progress" data-prog-percent=".84">
								<div></div>
								<h6 class="progress-title">RDBMS</h6>
							</div>
						</div><!-- radial-prog-area-->
					</div><!-- col-sm-6-->

					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="radial-prog-area margin-b-50">
							<div class="radial-progress" data-prog-percent=".81">
								<div></div>
								<h6 class="progress-title">Javascript</h6>
							</div>
						</div><!-- radial-prog-area-->
					</div><!-- col-sm-6-->

				</div><!-- row -->
			</div><!-- col-sm-8 -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- about-section -->

<section class="experience-section section">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="heading">
					<h3><b>Work Experience</b></h3>
					<h6 class="font-lite-black"><b>PREVIOUS JOBS</b></h6>
				</div>
			</div><!-- col-sm-4 -->
			<div class="col-sm-8">

				<div class="experience margin-b-50">
					<h4><b>JUNIOR PROJECT MANAGER</b></h4>
					<h5 class="font-yellow"><b>DESIGN STUDIO</b></h5>
					<h6 class="margin-t-10">MARCH 2015 - PRESENT</h6>
					<p class="font-semi-white margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit,
						quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu,
						eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
					<ul class="list margin-b-30">
						<li>Duis non volutpat arcu, eu mollis tellus.</li>
						<li>Quis consequat nulla effi citur at.</li>
						<li>Sed finibus aliquam neque sit.</li>
					</ul>
				</div><!-- experience -->

				<div class="experience margin-b-50">
					<h4><b>WEB MASTER/WEB DEVELOPER</b></h4>
					<h5 class="font-yellow"><b>DESIGN & WEB STUDIO</b></h5>
					<h6 class="margin-t-10">APRIL 2014 - FEBRUARY 2015</h6>
					<p class="font-semi-white margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit,
						quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu,
						eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
					<ul class="list margin-b-30">
						<li>Duis non volutpat arcu, eu mollis tellus.</li>
						<li>Quis consequat nulla effi citur at.</li>
						<li>Sed finibus aliquam neque sit.</li>
					</ul>
				</div><!-- experience -->

			</div><!-- col-sm-8 -->
		</div><!-- row -->
	</div><!-- container -->

</section><!-- experience-section -->

<section class="education-section section">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="heading">
					<h3><b>Education</b></h3>
					<h6 class="font-lite-black"><b>ACADEMIC CAREER</b></h6>
				</div>
			</div><!-- col-sm-4 -->
			<div class="col-sm-8">
				<div class="education-wrapper">
					<div class="education margin-b-50">
						<h4><b>MASTER DEGREE IN SCIENCE</b></h4>
						<h5 class="font-yellow"><b>UCLA - SCIENCE AND ENGINEERING</b></h5>
						<h6 class="font-lite-black margin-t-10">GRADUATED IN MAY 2010(2 YEARS)</h6>
						<p class="margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit,
							quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu,
							eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
					</div><!-- education -->

					<div class="education margin-b-50">
						<h4><b>COURSE ON COMPUTER SCIENCE</b></h4>
						<h5 class="font-yellow"><b>NEW YORK PUBLIC UNIVERSITY</b></h5>
						<h6 class="font-lite-black margin-t-10">GRADUATED IN MAY 2009(6 MONTHS)</h6>
						<p class="margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit,
							quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu,
							eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
					</div><!-- education -->

					<div class="education margin-b-50">
						<h4><b>GRADUATED VALEDICTERIAN</b></h4>
						<h5 class="font-yellow"><b>PUBLIC COLLEGE</b></h5>
						<h6 class="font-lite-black margin-t-10">GRADUATED IN MAY 2008(4 YEARS)</h6>
						<p class="margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit,
							quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu,
							eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
					</div><!-- education -->
				</div><!-- education-wrapper -->
			</div><!-- col-sm-8 -->
		</div><!-- row -->
	</div><!-- container -->

</section><!-- about-section -->

<section class="counter-section" id="counter">
	<div class="container">
		<div class="row">

			<div class="col-sm-6 col-md-6 col-lg-3">
				<div class="counter margin-b-30">
					<h1 class="title"><b><span class="counter-value" data-duration="400" data-count="3">0</span></b></h1>
					<h5 class="desc"><b>Coder Degrees</b></h5>
				</div><!-- counter -->
			</div><!-- col-md-3-->

			<div class="col-sm-6 col-md-6 col-lg-3">
				<div class="counter margin-b-30">
					<h1 class="title"><b><span class="counter-value" data-duration="1400" data-count="25">0</span></b></h1>
					<h5 class="desc"><b>Project Completed</b></h5>
				</div><!-- counter -->
			</div><!-- col-md-3-->

			<div class="col-sm-6 col-md-6 col-lg-3">
				<div class="counter margin-b-30">
					<h1 class="title"><b><span class="counter-value" data-duration="700" data-count="311">0</span></b></h1>
					<h5 class="desc"><b>Satisfied Clients</b></h5>
				</div><!-- counter -->
			</div><!-- col-md-3-->

			<div class="col-sm-6 col-md-6 col-lg-3">
				<div class="counter margin-b-30">
					<h1 class="title"><b><span class="counter-value" data-duration="2000" data-count="732">0</span></b></h1>
					<h5 class="desc"><b>Finished Projects</b></h5>
				</div><!-- margin-b-30 -->
			</div><!-- col-md-3-->

		</div><!-- row-->
	</div><!-- container-->
</section><!-- counter-section-->

<?= $this->endSection() ?>