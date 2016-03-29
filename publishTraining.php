<!DOCTYPE php>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boxen Trainingsplan</title>
	<style>
		td, th		{ width: 200px; height: 50px; }
	</style>
	<script type="text/javascript" src="js/publishTraining.js"></script>
	<script language="JavaScript" src="js/publishTraining.js"></script>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link rel="stylesheet" href="css/publishTraining.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">Boxen Trainingsplan</a>
            <a href="index.html" class="fa fa-1x fa fa-home wow bounceIn text-primary navbar-toggle collapsed" role="button"></a>
        </div>
    </div>
</nav>

<header>
    <div class="header-chooseTraining">
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Ihr Trainingsplan</h1>
            </div>
        </div>
    </div>
</header>



<section class="bg-primary" id="choices">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 text-center">
			<div class="btn-group">
			<?php echo $_GET["Dauer"]; ?>
			<script language="JavaScript">
				setPlan2();
					
			</script>
			
				<h2>1. Woche</h2>
				<h3>1. Tag</h3>
				<table id="plan">
					<tr>
						<th>Liegestützen</th>
						<th id="satz">3 Sätze</th>
						<th>15 Wiederholungen</th>
					</tr>
					
					<tr>
						<th>Crunches</th>
						<th>3 Sätze</th>
						<th>15 Wiederholungen</th>
					</tr>
					
					<tr>
						<th>Situps</th>
						<th>3 Sätze</th>
						<th>20 Wiederholungen</th>
					</tr>
				</table>

				<h1>Countdown Clock</h1>
					<div id="clockdiv">
					  <div>
						<span class="days"></span>
						<div class="smalltext">Days</div>
					  </div>
					  <div>
						<span class="hours"></span>
						<div class="smalltext">Hours</div>
					  </div>
					  <div>
						<span class="minutes"></span>
						<div class="smalltext">Minutes</div>
					  </div>
					  <div>
						<span class="seconds"></span>
						<div class="smalltext">Seconds</div>
					  </div>
					</div>
			</div>
		</div>
	</div>
</section>

<!-- Socket.io.js -->
<script src="http://localhost:5555/ws/socket.io/socket.io.js"></script>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/wow.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/creative.js"></script>

</body>
</html>