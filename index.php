<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<!-- metas -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Rodrigo Maroto Portfolio 2013 late</title>
	<meta name="author" content="Rodrigo Maroto" />
	<meta name="description" content="portfolio 2013 Rodrigo Maroto" />
	<meta name="keywords"  content="design, mobile, responsive" />
	<meta name="Resource-type" content="Document" />

	<!-- CSS -->
	<!-- Less -->
	<script type="text/javascript">
		// Replace that on final version with CSS compiled version
	    less = { 
	        env: "development", // or "production"
	        async: true,       // load imports async
	        fileAsync: false,   // load imports async when in a page under
	                            // a file protocol
	        poll: 1000,         // when in watch mode, time in ms between polls
	        functions: {},      // user functions, keyed by name
	        dumpLineNumbers: "comments", // or "mediaquery" or "all"
	        relativeUrls: true,// whether to adjust url's to be relative
	    };
	</script>

	<link rel="stylesheet/less" type="text/css" href="css/styles.less" />

	<script type="text/javascript" src="js/less-1.5.0.min.js"></script>

	<!-- js -->
	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>	
	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var pepe = $.fn.fullpage({
				slidesColor: ['#222', '#004EA7', '#F5F5F5', '#3AA8D7', '#230B87', '#FF5600', '#900407', '#1D5EA0'],
				anchors: ['Hi!', 'GO!Chat', 'TouristEye', 'Tactilapp', '900', 'Destinia', 'Monomusic', 'ResiduosElectronicos'],
				menu: '#menu',
				easing: 'easeOutExpo'
			});
			
		});
	</script>

</head>
<body>


<div class="section " id="section0">
	<h1>Rodrigo Maroto</h1>
	<h2>UI & UX DESIGNER</h2>
	<p class="icons">
		<span>
			<a href="http://es.linkedin.com/in/rmaroto" target="_blank">
				<img src="img/ic_linkedin.png" alt="ic_linkedin" width="32" height="32">
			</a>
		</span>
		<span>
			<a href="http://dribbble.com/marotorod" target="_blank">
				<img src="img/ic_dribbble.png" alt="ic_dribbble" width="32" height="32">
			</a>
		</span>
		<span>
			<a href="http://www.behance.net/a1tinta" target="_blank">
				<img src="img/ic_behance.png" alt="ic_behance" width="32" height="32">
			</a>
		</span>
	</p>
	<p class="scroll">scroll to continue</p>
	<img class src="img/ic_scroll.png" alt="ic_scroll" width="24" height="10">
</div>
<div class="section " id="section1">
	<h1><img src="img/img_logo_gochat.png" alt="img_logo_gochat" width="108" height="70"></h1>
	<p>
		<img src="img/img_gochat_ui.png" alt="img_gochat_ui">
	</p>
	<p>
		<h2>ui designer</h2>
		<ul>
			<li>UI, export  and documentation</li>
		</ul>
	</p>
</div>
<div class="section " id="section2">
	<h1><img src="img/img_logo_touristeye.png" alt="img_logo_touristeye" width="268" height="50"></h1>
	<p>
		<img src="img/img_touristeye_desktop.png" alt="img_touristeye_desktop">
	</p>
	<p>
		<h2>ui designer</h2>
		<ul>
			<li>export & optim resources for apps</li>
			<li>design some company web layouts</li>
		</ul>
	</p>
</div>

<div class="section " id="section3">
	<h1><img src="img/img_logo_tactilapp.png" alt="img_logo_tactilapp" width="258" height="78"></h1>
	<p>
		<img src="img/img_tactilapp_desktop.png" alt="img_tactilapp_desktop">
	</p>
	<p>
		<h2>entrepreneur</h2>
		<ul>
			<li>brand manager</li>
			<li>UI & UX</li>
			<li>marketing</li>
		</ul>
	</p>
</div>

<div class="section " id="section4">
	<h1><img src="img/img_logo_novecientos.png" alt="img_logo_novecientos" width="203" height="129"></h1>
	<p>
		<img src="img/img_novecientos_app.png" alt="img_novecientos_app">
	</p>
	<p>
		<h2>UI & UX designer</h2>
		<ul>
			<li>UI & UX</li>
			<li>resources</li>
			<li>marketing</li>
		</ul>
	</p>
</div>

<div class="section " id="section5">
	<h1><img src="img/img_logo_destinia.png" alt="img_logo_destinia" width="278" height="82"></h1>
	<p>
		
	</p>
	<p>
		<h2>concept ui designer</h2>
		<ul>
			<li>concept app for destinia.com</li>
		</ul>
	</p>
</div>

<div class="section " id="section6">
	<h1><img src="img/img_logo_monomusic.png" alt="img_logo_monomusic" width="394" height="110"></h1>
	<p>imagen</p>
	<p>
		<h2>designer</h2>
		<ul>
			<li>planning</li>
			<li>resources</li>
		</ul>
	</p>
</div>

<div class="section " id="section7">
	<h1><img src="img/img_logo_residuos_electronicos.png" alt="img_logo_residuos_electronicos" width="375" height="21"></h1>
	<p>imagen</p>
	<p>
		<h2>marketing manager</h2>
		<ul>
			<li>brand manager</li>
			<li>marketing</li>
			<li>web</li>
			<li>design</li>
		</ul>
	</p>
</div>


</body>
</html>
