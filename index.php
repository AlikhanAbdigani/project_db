<?php
					$link = new PDO("mysql:host=localhost;dbname=project", "root", "");
					$info = [];
					if($query = $link->query("select * from popcour")){
						$info = $query->fetchAll(PDO::FETCH_ASSOC);
					}
					$link2 = new PDO("mysql:host=localhost;dbname=project", "root", "");
					$info2 = [];
					if($query2 = $link2->query("select * from poptech")){
						$info2 = $query2->fetchAll(PDO::FETCH_ASSOC);
					}
					$link4 = new PDO("mysql:host=localhost;dbname=project", "root", "");
					$info4 = [];
					if($query4 = $link4->query("select * from courserating")){
						$info4 = $query4->fetchAll(PDO::FETCH_ASSOC);
					}
					$link5 = new PDO("mysql:host=localhost;dbname=project", "root", "");
					$info5 = [];
					if($query5 = $link5->query("select * from teacherrating")){
						$info5 = $query5->fetchAll(PDO::FETCH_ASSOC);
					}
				?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SDATAU</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/bootsnav.css">
	<link rel="stylesheet" href="css/component.css">
	<link rel="stylesheet" href="css/slicknav.min.css">
	<link rel="stylesheet" href="css/style.css">
	
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<body class="body" id="body">
<div class="v3_2"><div class="v3_3"></div><div class="v3_4"></div><span class="v2_39">SDataU</span><span class="v3_7">SDateU is about helping students on their way to graduate from university. And the main purpose of project is to give students statistics about certain courses and teachers so that they know which courses to enroll in advance.</span><div class="v2_38"><div class="name"></div><div class="name"></div><div class="name"></div><span class="v3_28">SDataU</span><span class="v2_3">University portal ratings</span></div></div>
<style>* {
  box-sizing: border-box;
}
body {
  font-size: 14px;
}
.v3_2 {
  width: 100%;
  height: 808px;
  background: rgba(255,255,255,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v3_3 {
  width: 100%;
  height: 806px;
  background: url("img/sdu.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  opacity: 1;
  position: absolute;
  top: 2px;
  left: 0px;
  overflow: hidden;
}
.v3_4 {
  width: 100%;
  height: 808px;
  background: rgba(0,0,0,0.5799999833106995);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v2_39 {
  width: 565px;
  color: rgba(255,255,255,1);
  position: absolute;
  top: 234px;
  left: 800px;
  text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.3499999940395355);
  font-family: Poppins;
  font-weight: SemiBold;
  font-size: 150px;
  opacity: 1;
  text-align: right;
}
.v3_7 {
  width: 944px;
  color: rgba(255,255,255,1);
  position: absolute;
  top: 430px;
  left: 400px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 25px;
  opacity: 1;
  text-align: right;
}
.v2_38 {
  width: 285px;
  height: 84px;
  background: url("../images/v2_38.png");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  opacity: 1;
  position: absolute;
  top: 55px;
  left: 82px;
  overflow: hidden;
}
.v59_2 {
  width: 87px;
  height: 71px;
  background: url("../images/v59_2.png");
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
}
.v3_28 {
  width: 187px;
  color: rgba(234,234,234,1);
  position: absolute;
  top: 1px;
  left: 98px;
  font-family: Poppins;
  font-weight: Medium;
  font-size: 50px;
  opacity: 1;
  text-align: left;
}
.v2_3 {
  width: 181px;
  color: rgba(234,234,234,1);
  position: absolute;
  top: 61px;
  left: 101px;
  font-family: Poppins;
  font-weight: Medium;
  font-size: 15px;
  opacity: 1;
  text-align: left;
}
</style>
<!-- 
///////////////////////////////////////////////////////////////////////////////////////////
The ICONS SECTION STARTS HERE
/////////////////////////////////////////////////////////////////////////////////////////// 
-->
<div class="container-fluid">
<div class="row col-md-12 col-sm-12">
    <div class="main clearfix center">
				<navicon id="menu" class="navicon row">					
					<ul>
						<li>
							<a href="#services">
								<span class="icon">
								</span>
								<span>Popular Courses</span>
							</a>
						</li>
						<li>
							<a href="#client">
								<span class="icon"> 
								</span>
								<span>Popular Teacher</span>
							</a>
						</li>
						<li>
							<a href="#portfolio">
								<span class="icon"></span>
								<span>Calculate GPA</span>
							</a>
						</li>
						<li>
							<a href="#works">
								<span class="icon"></span>
								<span>Courses Ratings</span>
							</a>
						</li>
						<li>
							<a href="#works">
								<span class="icon"></span>
								<span>Teachers Ratings</span>
							</a>
						</li>
						<li>
							<a href="#contact">
								<span class="icon"></span>
								<span>Calculate Retakes</span>
							</a>
						</li>
					</ul>
				</navicon>
			</div>
			</div>
</div>
<!-- 
///////////////////////////////////////////////////////////////////////////////////////////
The ICONS SECTION ENDS HERE
/////////////////////////////////////////////////////////////////////////////////////////// 
-->




<div class="container-fluid animated bounceInRight" id="services">
	
	    <div class="col-md-12 col-sm-12 inner-row">
		    <div class="title"> <h2>Popular <span class="titleblue">Courses</span> </h2> </div>
		    <div class="services">
		    <ul>
		    	<?php foreach ($info as $data): ?>
		    	<li>Course code: <?php echo $data['ders_cod']; ?>
		    	</br>
		    		Teachers: <?php echo $data['teachers']; ?>
		    	</li>
		    	<?php endforeach; ?>
		    </ul>
		    </div>
    </div>
</div>

<!-- THIS IS THE CLIENTS SECTION -->
<div id="client" class="container-fluid">
	<div class="col-md-12 col-sm-12 inner-row">	
	  <div class="title"> <h2>popular <span class="titleblue">teacher</span> </h2> </div>
    	<div class="client">
    		<ul>
    			<?php foreach ($info2 as $data2): ?>
    			<li>Course code: <?php echo $data2['ders_cod']; ?> Teachers: <?php echo $data2['teachers']; ?>
		    	</li>
		    	<?php endforeach; ?>
    		</ul>
    	</div>
    </div>
</div>
<!-- THIS IS THE CLIENTS SECTION -->
<div class="container-fluid animated bounceInRight" id="portfolio">
	
	    <div class="col-md-12 col-sm-12 inner-row">
		    <div class="title"> <h2>Calculate <span class="titleblue">gpa</span> </h2> </div>
		    <div class="services">
		    <ul>
		    	<div class="topnav">
  <input type="text" placeholder="Search..">
</div>
		    </ul>
		    </div>
    </div>
</div>
<!-- THIS IS THE CLIENTS SECTION -->
<div class="container-fluid"> 
<div class="title" id="works"> <h2> <span class="titleblue">Ratings</span> </h2> </div>
	<div class="col-md-12 col-sm-12 inner-row nopadding">	
	 
    	<div class="col-md-6  bgblue height nopadding" ><h2> <span class="titlered">Courses</span><?php foreach ($info4 as $data4): ?>
    			<li>Course code: <?php echo $data4['ders_cod']; ?> Rating: <?php echo $data4['rating']; ?>
		    	</li>
		    	<?php endforeach; ?> </h2></div>
    	<div class="col-md-6 height nopadding"><h2> <span class="titlered">Teachers</span> <?php foreach ($info5 as $data5): ?>
    			<li>Course code: <?php echo $data5['Teacher']; ?> Rating: <?php echo $data5['rating']; ?>
		    	</li>
		    	<?php endforeach; ?> </h2></div>
    </div>
</div>
<div class="container-fluid animated bounceInRight" id="contact">
	
	    <div class="col-md-12 col-sm-12 inner-row">
		    <div class="title"> <h2>Calculate <span class="titleblue">Retakes</span> </h2> </div>
		    <div class="services">
		    <ul>
		    	
		    </ul>
		    </div>
    </div>
</div>

<footer class="nav navbar-fixed-bottom navbar-default"><span class="copyright">&copy 2022 | KaAbMy </span> </footer>

<body>
	
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.easings.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.slicknav.min.js"></script>



<script>
$(document).ready(function(){
	$('#mmenu').slicknav();
});

$(document).ready(function(){
$(".services li:odd").css({"background-color" : "#1691be", "color" : "#ffffff !important"});
});

//Scrolling	
$("body").niceScroll({
cursorcolor:"#1691be",
cursorwidth:"5px"
});

$('#body').onePageNav({
	currentClass: 'current',
	changeHash: false,
	scrollSpeed: 1400,
	scrollThreshold: 0.5,
	filter: '',
	easing: 'swing',
	begin: function() {
		//I get fired when the animation is starting
	},
	end: function() {
		//I get fired when the animation is ending
	},
	scrollChange: function($currentListItem) {
		//I get fired when you enter a section and I pass the list item of the section
	}
});




</script>
</html>