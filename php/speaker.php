<?php
	$name = check($_GET['name'], $error);

	$fullName = "";
	$imgPath = array();
	$about = array();

	if($name == "jeff&kyle" || $name == "jeff" || $name == "kyle"){
		$fullName = "JEFF GALLANT & KYLE MACDONALD";
		$position = "CO-FOUNDERS, CAPITALIZE FOR KIDS";
		$imgpath1 = "gallant.jpg";
		$about1 = "Jeff Gallant is an Analyst at Alignvest Capital Management. Prior to joining Alignvest, Jeff worked on the North American equity long short mandates at Gluskin Sheff + Associates in Toronto. To date, he has obtained the Chartered Investment Manager and Chartered Strategic Wealth Professional designations, and is currently a candidate for the Chartered Financial Analyst designation. In 2012, Jeff was recognized as a Global Shaper by the World Economic Forum. Jeff received an Honours Bachelor of Commerce degree from Queen&#39;s University. He was also educated at the Stockholm School of Economics in Sweden through an international exchange and the Wharton School of the University of Pennsylvania through a leadership program.";
		$imgpath2 = "macdonald.jpg";
		$about2 = "Kyle MacDonald spends his time outside Capitalize for Kids at Veritas Investment Research covering financial services. He began his career at Ernst & Young in their Assurance and Advisory practice before moving on to equity research. Kyle graduated from Queen&#39;s University with a Bachelor of Commerce, specializing in Accounting and Finance. He holds the designation of Chartered Professional Accountant, and was awarded National Honor Roll status for his performance on the 2012 Uniform Final Exam (UFE). Kyle is currently a Level III candidate in the Chartered Financial Analyst program.";
		
		array_push($imgPath, $imgpath1, $imgpath2);
		array_push($about, $about1, $about2);

	}else if($name == "jim" || $name == "leech"){
		$fullName = "JIM LEECH";
		$position = "CHANCELLOR, QUEEN&#39;S UNIVERSITY <br/>FORMER CEO, ONTARIO TEACHERS&#39; PENSION PLAN";
		
		$path = "leech1.jpg";
		$about_text = "Mr. Leech joined Teachers&#39; in 2001 to lead Teachers&#39; Private Capital and was appointed President & CEO in 2007. Under his leadership, the organization became one of the world&#39;s leading private equity investors.<br/><br/>
						Mr. Leech has gained recognition for his expertise and leadership in the private equity industry and as CEO of several public companies. He has a solid reputation for building businesses and strong management teams and has led large public companies operating and investing in the financial services, real estate and energy industries, as well as start-up technology businesses.<br/><br/>
						Before joining Teachers&#39;, Mr. Leech was president and CEO of Unicorp Canada Corporation, one of Canada&#39;s first public merchant banks, and Union Energy Inc., then one of North America&#39;s largest integrated energy and pipeline companies. During the 1990s, he guided two start-up technology companies - Disys Corporation and Kasten Chase Applied Research - to the revenue generation stage.<br/><br/>
						Mr. Leech holds a B.Sc. (Hons Math and Physics) from the Royal Military College of Canada and an MBA from Queen&#39;s University. He is also a graduate of the Institute of Corporate Directors.<br/><br/>
						Mr. Leech is chair of the board of Toronto General and Western Hospital Foundation. He is a member of the board of the MasterCard Foundation and was a founding director of Right To Play International. He has been named Chancellor-designate of Queen&#39;s University, effective July 1, 2014 and currently chairs the advisory board of the Queen&#39;s School of Business.";
		array_push($imgPath, $path);
		array_push($about, $about_text);

	}else if($name == "ene" || $name == "underwood"){
		$fullName = "ENE UNDERWOOD";
		$position = "CEO, HABITAT FOR HUMANITY GTA";

		$path = "underwood.jpg";
		$about_text = "Ene Underwood was appointed CEO of Habitat for Humanity Toronto in April 2013. Ene&#39;s introduction to grassroots community building began as a child growing up on a farm in a tight-knit community in southwestern Ontario. In adulthood, Ene&#39;s career began in the private sector, first in computer systems, then as a strategy consultant with McKinsey & Company. A lifelong attraction to promoting individual and community wellbeing led Ene to spend the majority of her career in health care and, more recently, in child welfare.<br/><br/>
						Ene&#39;s public sector leadership roles have included: CEO of a large public- private medical laboratory organization providing services to nine Toronto hospitals; leadership responsibility for strategic planning and amalgamation of a number of health services in Toronto; and Chair of a provincial Commission developing and implementing changes to promote sustainable child welfare.<br/><br/>
						In her volunteer life, Ene has served on various community boards including Dixon Hall and the Children&#39;s Aid Society of Toronto. Ene has an Honours B.A. in Social Development Studies from the University of Waterloo and an MBA from the Ivey School of Business. Ene lives in Toronto and is the proud parent of a teenaged son.<br/><br/>
						On April 1, 2014—within her first year as CEO at Habitat for Humanity Toronto, Ene&#39;s hands-on leadership led the affiliates of Brampton Caledon, Toronto and York Region to amalgamate into one new affiliate serving all three regions forming Habitat for Humanity Greater Toronto Area.";
		array_push($imgPath, $path);
		array_push($about, $about_text);
	}else if($name == "dave" || $name =="dryden"){
		$fullName = "DAVE DRYDEN";
		$position = "CHAIR OF BOARD, SLEEPING CHILDREN AROUND THE WORLD";

		$path = "dryden.jpg";
		$about_text = "Dave Dryden is a former NHL and WHA Goaltender who played for the Chicago Black Hwks, Chicago Cougars, Buffalo Sabres, and Edmonton Oilers. He also holds degrees in education from York University and Niagara University and has worked for the Peel Board of Education.<br/><br/>
						He is currently the Chair of Board of the organization Sleeping Children Around the World (SCAW), which was founded Murray and Margaret Dryden in 1970. SCAW uses 100% of its donations to provide bedkits to children of any race and/or religion who will benefit the most; typically being located in underdeveloped and developing countries. The idea behind this organization is to create &#34;A world in which every child benefits from the comfort of a good night&#39;s sleep.&#34;<br/><br/>
						For each $35 donation, SCAW provides a child with a kit consisting of a mat or mattress, pillow, bedsheet, blanket, mosquito net, clothes, towels, and school supplies. The kits are created in the country where they are to be distributed. This helps reduce transportation and material costs as well as providing an economic benefit to the targeted area. Since 1970, bed kits have been provided to 900 000 children.";
		array_push($imgPath, $path);
		array_push($about, $about_text);
	}else if($name == "andrea" || $name="varga"){
		$fullName = "ANDREA ZEELIE-VARGA";
		$position = "NATIONAL PROGRAMS MANAGER, CANADIAN FOUNDATION FOR AIDS RESEARCH";

		$path = "zeelie-varga.jpg";
		$about_text = "With a background in politics and health, Andrea has always been involved in various aspects of philanthropy in both South Africa and Canada. In the past she has championed other causes in various roles such as Project Coordinator for Parent Action on Drugs and Communications Coordinator for HC Link. She brings her excellent research, communication skills, and creativity to every role.<br/><br/>
						Andrea is currently the National Programs Manager for The Canadian Foundation for AIDS Research (CANFAR), which is the only national charitable foundation that raises awareness to generate funds for research into all aspects of HIV infection and AIDS. Since inception in 1987, CANFAR has invested more than $18 million in research initiatives across Canada. In her role, Andrea is responsible for the development of &#34;CANFAR Clubs&#34; on campuses across Canada and she also runs CANFAR&#39;s national high school awareness program called &#34;Kisses 4 CANFAR&#34; which reaches more than two million students annually.";
		array_push($imgPath, $path);
		array_push($about, $about_text);
	}

	function check($data, $error){
		$data = strtolower($data);
		return $data;
	}
?>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Allerta' rel='stylesheet' type='text/css'>
	
	<link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="./css/navbar.css" rel="stylesheet"/>
	<link href="./css/about.css" rel="stylesheet"/>
	<!--
	<link href="./css/general.css" rel="stylesheet"/>
	-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="./js/navbar.js"></script>
	<?php
		include_once('./include/analytics.php');
	?>
	<link rel="SHORTCUT ICON" href="./imgs/qcop.png"/>
	<style>
		/*
		.speakerName{
			font-size: 24px;

		}
		.speakerInfo{
			font-size: 16px;
		}
		.speakerSM{
			font-size: 16px;
		}
		*/
		.speaker_title{
			font-size: 42px;
			font-family: 'Allerta', sans-serif;
		}
		.speaker_text{
			font-family: 'Allerta', sans-serif;
			font-size: 18px;
		}
		.speaker_position{
			font-size: 32px;
			font-family: 'Allerta', sans-serif;
		}
	</style>
</head>
<body>

<?php
	include_once('./include/navbar.php');
?>


<div class="outter_wrapper">
	<!--
	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h1 style="color:white;">Speakers</h1>
			</div>
		</div>
		
		<div class="row">
			<div style="height:40px;width:100%;position:relative;"></div>
		</div>
	</div>
	-->


	<div class="container">
		<div class="row ">
			
			<div class="col-sm-8 col-sm-offset-2 text-center">
				<?php
					for($i = 0;$i < count($imgPath);$i++){
						echo '<img src="./imgs/speakers/'  . $imgPath[$i] . '" style="width:200px;border-radius:50%;">';
					}
				?>
				
				<!--
				<div style="margin-top:14px;margin-bottom:14px;">
					<img src="./imgs/me.jpg" style="width:200px;float:left;">
					
					
					
					<p style="float:left;padding:6px 6px;">
						<span class="speakerName">Keith Weaver</span>
						<br/>
						<span class="speakerInfo">Position, Company Name</span><br/>
						<span class="speakerSM"><a href="#">@kweaver</a></span><br/>

					</p>
				</div>
				-->
			</div>
			<div class="col-sm-8 col-sm-offset-2 text-center">
				<?php
					echo '<h1 class="speaker_title">' . $fullName . '</h1>';
					
				?>
				
			</div>
			<div class="col-sm-8 col-sm-offset-2">
				<?php
					echo '<h1 class="speaker_position">' . $position . '</h1>';
				?>
			</div>
			<div class="col-sm-8 col-sm-offset-2">
				<?php
					for($i = 0;$i < count($about);$i++){
						echo '<p class="speaker_text">';
							echo $about[$i];
						echo '</p>';
					}
				?>
				
					
				
			</div>
		</div>
	</div>
</div>
<div style="height:40px;width:100%;"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>