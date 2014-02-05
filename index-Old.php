<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
		More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>BoilerMake Hackathon</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt">

	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content=""/>
	<meta property="og:title" content=""/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
		However, there is a blank style.css in the css directory should you prefer -->
	<link rel="stylesheet" href="css/gumby.css">
	<!-- <link rel="stylesheet" href="css/style.css"> -->
  
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/libs/Box2dWeb-2.1.a.3.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/libs/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="js/libs/jcanvas.min.js"></script>
	<script type="text/javascript" src="js/libs/jquery.shuffleLetters.js"></script>
	<script type="text/javascript" src="js/shuffle.js"></script>
	<script type="text/javascript" src="js/physics.js"></script>
	<script src="js/waypoints.js"></script>
	<script src="js/waypoints-sticky.js"></script>
	<script type="text/javascript" src="js/jquery.youtubeplaylist.js"></script>
	<script type="text/ecmascript">
		$(function() {
			$("ul.gallery").ytplaylist({
				addThumbs:true, 
				autoPlay: false,
				onChange: function() {
					console.log('changed');
				},
				holderId: 'youtube'});
		});
	</script>

</head>
	<body onload="init();" id="top">
		<header>
			<div class="row">
				<div class="twelve columns">
					<canvas id="canvas" width="1200" height="930"></canvas>
					<p id="logo">
						<img src="images/logo.png" alt="BoilerMake" />
					</p>
					<p id="cohost">
						<a href="#" gumby-update gumby-goto="#sponsors" gumby-offset="-48" class="skip">
							<img src="images/cohost.png" alt="Interactive Intelligence" />
						</a>
					</p>
					<h1 id="site-title">BoilerMake</h1>
					<h2 id="register"><div class="large primary btn separate"><a href="#">Register</a></div></h2>
					<div class="navbar" id="navigation">
						<div class="row">
							<a class="toggle" gumby-trigger="#drop" href="#"><i class="icon-menu"></i></a>
							<div class="four columns">
								<a href="#" gumby-goto="#top" class="skip"><img src="images/logo-small.png" /></a>
							</div>
							<div class="eight columns">
								<ul id="drop">
									<li><a href="#" gumby-update gumby-goto="#event" gumby-offset="-48" class="skip">What is it?</a></li>
									<li><a href="#" gumby-update gumby-goto="#schedule" gumby-offset="-48" class="skip">Schedule</a></li>
									<li><a href="#" gumby-update gumby-goto="#location" gumby-offset="-48" class="skip">Where is it?</a></li>
									<li><a href="#" gumby-update gumby-goto="#overview" gumby-offset="-48" class="skip">Overview</a></li>
									<li><a href="#" gumby-update gumby-goto="#sponsors" gumby-offset="-48" class="skip">Sponsors</a></li>
									<li><a href="#">Register</a></li>
								</ul>
							</div>
						</div>
					</div>
					<p id="circle1">
						October<br/>
						11th-13th
					</p>
					<p id="circle2">
						Over $10,000<br/>
						In Prizes
					</p>
					<p id="circle3">
						36<br/>
						Hours
					</p>
				</div>
			</div>
		</header>
		<section id="text-rotator">
			<div class="row">
				<div class="twelve columns">
					<h2 id="shuffling">Hackers make awesome stuff.</h2>
				</div>
			</div>
		</section>
		<section id="event">
			<article>
				<div class="row">
					<div class="six columns">
						<h2>What is BoilerMake?</h2>
						<b>BoilerMake</b> is a 36-hour Hackathon which will be hosted at Purdue from October 11-13. 
						The BoilerMake team is made up of people from the Computer Science Undergraduate Student 
						Board (USB), Association for Computing Machinery (ACM), and the Entrepreneurship and 
						Innovation Club. The Hackathon will be an event where <b>students can come together for 36-hours 
						to develop their software or hardware</b> ideas and compete against each other to win prizes.
						<div class="tcenter">
							<div class="large primary btn separate"><a href="#">Register</a></div>
						</div>
					</div>
					<div class="six columns">
						<div id="youtube"></div>
						<div class="row">
							<div class="twelve columns">
								<ul class="gallery four_up tiles">
									<li><a href="http://www.youtube.com/watch?v=msrbh89rWjs"></a></li>
									<li><a href="http://www.youtube.com/watch?v=lRlFOcQs640"></a></li>
									<li><a href="http://www.youtube.com/watch?v=msrbh89rWjs"></a></li>
									<li><a href="http://www.youtube.com/watch?v=msrbh89rWjs"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</article>
		</section>
		<section id="schedule">
			<article>
				<div class="row">
					<div class="twelve columns">
						<h2>The Schedule</h2>
					</div>
				</div>
				<div class="row">
					<div class="twelve columns">
						<div class="respond">
							<a href="#"  class="toggle" gumby-trigger="#oct11">
								<h4><i class="icon-arrow-combo"></i> Friday, October 11th</h4>
							</a>
							<div class="drawer active" id="oct11">
								<span class="event">&nbsp;</span>
								<span class="time">4am</span>
								<span class="time">5</span>
								<span class="time">6</span>
								<span class="time">7</span>
								<span class="time">8</span>
								<span class="time">9</span>
								<span class="time">10</span>
								<span class="time">11</span>
								<span class="time">12pm</span>
								<span class="time">1</span>
								<span class="time">2</span>
								<span class="time">3</span>
								<span class="time">4</span>
								<span class="time">5</span>
								<span class="time">6</span>
								<span class="time">7</span>
								<span class="time">8</span>
								<span class="time">9</span>
								<span class="time">10</span>
								<span class="time">11</span>
								<div class="slot">
									<span class="event">Hacker Check-In</span>
									<span class="during" style="left:800px;right:120px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
								<div class="slot">
									<span class="event">Pizza/"Late	Night Snack"</span>
									<span class="during" style="left:800px;right:80px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
								<div class="slot">
									<span class="event">Opening	Ceremonies</span>
									<span class="during" style="left:840px;right:80px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
								<div class="slot">
									<span class="event">Hacking Kickoff</span>
									<span class="during" style="left:880px;right:0px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="respond">
							<a href="#"  class="toggle" gumby-trigger="#oct12">
								<h4><i class="icon-arrow-combo"></i> Saturday, October 12th</h4>
							</a>
							<div class="drawer" id="oct12">
								<span class="event">&nbsp;</span>
								<span class="time">4am</span>
								<span class="time">5</span>
								<span class="time">6</span>
								<span class="time">7</span>
								<span class="time">8</span>
								<span class="time">9</span>
								<span class="time">10</span>
								<span class="time">11</span>
								<span class="time">12pm</span>
								<span class="time">1</span>
								<span class="time">2</span>
								<span class="time">3</span>
								<span class="time">4</span>
								<span class="time">5</span>
								<span class="time">6</span>
								<span class="time">7</span>
								<span class="time">8</span>
								<span class="time">9</span>
								<span class="time">10</span>
								<span class="time">11</span>
								<div class="slot">
									<span class="event">Snack</span>
									<span class="during" style="left:160px;right:760px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
								<div class="slot">
									<span class="event">Breakout Session 1</span>
									<span class="during" style="left:320px;right:600px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
								<div class="slot">
									<span class="event">Breakout Session 2</span>
									<span class="during" style="left:400px;right:520px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
								<div class="slot">
									<span class="event">Breakout Session 3</span>
									<span class="during" style="left:480px;right:440px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
								<div class="slot">
									<span class="event">Breakout Session 4</span>
									<span class="during" style="left:560px;right:0360px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
								<div class="slot">
									<span class="event">Breakout Session 5</span>
									<span class="during" style="left:640px;right:280px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
								<div class="slot">
									<span class="event">Breakout Session 6</span>
									<span class="during" style="left:720px;right:200px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="respond">
							<a href="#"  class="toggle" gumby-trigger="#oct13">
								<h4><i class="icon-arrow-combo"></i> Sunday, October 13th</h4>
							</a>
							<div class="drawer" id="oct13">
								<span class="event">&nbsp;</span>
								<span class="time">12am</span>
								<span class="time">1</span>
								<span class="time">2</span>
								<span class="time">3</span>
								<span class="time">4</span>
								<span class="time">5</span>
								<span class="time">6</span>
								<span class="time">7</span>
								<span class="time">8</span>
								<span class="time">9</span>
								<span class="time">10</span>
								<span class="time">11</span>
								<span class="time">12pm</span>
								<span class="time">1</span>
								<span class="time">2</span>
								<span class="time">3</span>
								<span class="time">4</span>
								<span class="time">5</span>
								<span class="time">6</span>
								<span class="time">7</span>
								<div class="slot">
									<span class="event">Raffles</span>
									<span class="during" style="left:200px;right:720px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
								<div class="slot">
									<span class="event">Snack #2</span>
									<span class="during" style="left:320px;right:600px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
								<div class="slot">
									<span class="event">Deadline</span>
									<span class="during" style="left:560px;right:3600px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
								<div class="slot">
									<span class="event">Expo</span>
									<span class="during" style="left:600px;right:280px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
								<div class="slot">
									<span class="event">Closing Ceremonies</span>
									<span class="during" style="left:700px;right:220px;"></span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span><span class="time">&nbsp;</span>
									<span class="time">&nbsp;</span><span class="time">&nbsp;</span>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</article>
		</section>
		<section id="location" data-target="location">
			<div class="white-fade"></div>
			<article>
				<div class="row">
					<div class="twelve columns">
						<h2>Where is it?</h2>
						<div id="map">
							<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="//www.google.com/maps?sll=41.49753199831615,-81.70648354841785&amp;sspn=0.47583002734531044,1.1544667185917314&amp;t=m&amp;q=purdue+university&amp;dg=opt&amp;ie=UTF8&amp;hq=purdue+university&amp;ll=40.440628,-86.926121&amp;spn=0.055603,0.033976&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?sll=41.49753199831615,-81.70648354841785&amp;sspn=0.47583002734531044,1.1544667185917314&amp;t=m&amp;q=purdue+university&amp;dg=opt&amp;ie=UTF8&amp;hq=purdue+university&amp;ll=40.440628,-86.926121&amp;spn=0.055603,0.033976&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
						</div>
					</div>
				</div>
			</article>
		</section>
		<section id="overview" data-target="overview">
			<article>
				<div class="row">
					<div class="twelve columns">
						<h2>Overview</h2>
						BoilerMake is a 36-hour Hackathon which will be hosted at Purdue from October 11-13.
						The BoilerMake team is made up of people from the Computer Science Undergraduate Student 
						Board (USB), Association for Computing Machinery (ACM), and the Entrepreneurship and Innovation Club. The Hackathon will be an event where students can come together for 36-hours 
						to develop their software or hardware ideas and compete against each other to win prizes.
						<br/></br>
						The BoilerMake Hackathon is completely open ended. Over the 36 hours students can 
						utilize any platform, framework, or hardware that they want. Of course the cooler, more interesting, and cleverer the tools used by the hackers the more likely they are to place high and win big! 
						Students’ hacks can win them prizes if the panel of judges place them in the top three. Students 
						can also win sponsor branded prizes by placing first in a sponsor’s miniHack.
						<br/></br>
						The entire event will actually last longer than 36 hours (closer to 48) and is composed of 
						2 main parts. The first part is the BoilerMake Hackathon. This is the actual 36-hour section of 
						the entire event. During this time students have the opportunity to create their product, idea, or 
						program. This time also gives the students several opportunities to eat, listen to tech talks, meet 
						with potential employers and socialize! The second part is the BoilerMake Expo. The expo is 
						one hour after the Hackathon ends. Here the students will be able to demo their projects to both 
						the public and to the panel of judges.
					</div>
				</div>
			</article>
		</section>
		<section id="sponsors" data-target="sponsors">
			<article>
				<div class="row">
					<div class="twelve columns">
						<h2>Our Sponsors</h2>
						<h4>Co-Host:</h4>
						<div class="row">
							<div class="centered eight columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
						</div>
						<h4>Grande Sponsors:</h4>
						<div class="row">
							<div class="six columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
							<div class="six columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
						</div>
						<div class="row">
							<div class="six columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
							<div class="six columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
						</div>
						<div class="row">
							<div class="six columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
							<div class="six columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
						</div>
						<div class="row">
							<div class="six columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
							<div class="six columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
						</div>
						<div class="row">
							<div class="six columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
							<div class="six columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
						</div>
						<div class="row">
							<div class="six columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
						</div>
						<h4>Tall Sponsors:</h4>
						<div class="row">
							<div class="four columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
							<div class="four columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
							<div class="four columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
						</div>
						<h4>Short Sponsors:</h4>
						<div class="row">
							<div class="four columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
							<div class="four columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
							<div class="four columns">
								<img src="images/sponsors/interactiveintel.jpg" alt="Interactive Intelligence" />
							</div>
						</div>
					</div>
				</div>
			</article>
		</section>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#navigation').waypoint('sticky', {
					offset: 0
				});
			});
		</script>
		
		<script src="js/libs/gumby.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>