<?php
	$name = check($_GET['name'], $error);

	$fullName = "";
	$imgPath = array();
	$about = array();

	if($name == "joyce" || $name == "hsu"){
		$fullName = "JOYCE HSU";
		$position = "COMMUNICATIONS LEAD, TECHSOUP CANADA";
		$imgpath1 = "hsu.jpg";
		$about1 = "Joyce is the Communications Lead at TechSoup Canada. She manages TechSoup Canada&#39;s external communications including branding, social media, blogs, graphic design, events and email campaigns. Having worked in the charitable sector as an event planner, program coordinator and fundraiser, Joyce understands what it means to wear &#34;multiple hats&#34; and the vital role technology plays in helping nonprofits accomplish the impossible. She has a deep love for the world of philanthropy and seeks to help nonprofits be more efficient and effective with technology. Twitter handle: @fuuyin";
		
		array_push($imgPath, $imgpath1);
		array_push($about, $about1);

	}else if($name == "denny" || $name == "young"){
		$fullName = "DENNY YOUNG";
		$position = "COORDINATOR, FUNDRAISING MANAGEMENT CERTIFICATE PROGRAM AT HUMBER COLLEGE";
		
		$path = "dy.jpg";
		$about_text = "Honoured in November as the Outstanding Fundraising Professional of 2014 by the Toronto Chapter of the Association of Fundraising Professionals, Denny Young has been in the profession for over 20 years and shown exemplary leadership as an executive, educator and mentor. His experience includes senior fundraising and communications roles in a number of sectors including health, social service, and the arts. Denny has a Masters degree in Philanthropy and Development from Saint Mary&#39;s University of Minnesota, has completed the Ivey School of Business Executive Program, and has a certificate in the Foundations of Coaching from the Adler Graduate Professional School. He is a Certified Fund Raising Executive (CFRE).";
		array_push($imgPath, $path);
		array_push($about, $about_text);

	}else if($name == "jessica" || $name == "green"){
		$fullName = "JESSICA GREEN";
		$position = "CO-FOUNDER, CURSIVE PR CHIEF FUNDRAISER, THE CORSAGE PROJECT";

		$path = "green.jpg";
		$about_text = "Jessica is a communications and social media marketing specialist with clients ranging from tech start-ups and local retailers to non-profits and national apparel manufacturers. With a focus on corporate communications, community management, email marketing, web development, search engine performance, analytics/insights, and writing/editing, Cursive PR was created to help brands discover untapped digital opportunities that inspire conversations and convert fans to ambassadors.<br/><br/>
Jessica is the head of fundraising for the Corsage Project, a nonprofit organization that works in partnership with the Children&#39;s Aid Foundation to provide formal attire - free of charge - and educational bursaries to Toronto-area students in need. She also sits on the Communications Committee of Art of Fashion, a non-profit that helps Canadian fashion and accessory designers reach consumers and media, and launch their careers.";
		array_push($imgPath, $path);
		array_push($about, $about_text);
	}else if($name == "canfar"){
		$fullName = "CANFAR";
		$position = "NON-PROFIT ORGANIZATION";

		$path = "canfar.png";
		$about_text = "The Canadian Foundation for AIDS Research (CANFAR) is Canada&#39;s only independent charitable foundation dedicated to eliminating AIDS through research. Since inception in 1987, CANFAR has invested more than $18 million in research initiatives across Canada. By funding promising Canadian HIV and AIDS research and promoting prevention through educational campaigns, CANFAR is working to end AIDS globally.<br/><br/>
	Each year it is the responsibility of CANFAR&#39;s Scientific Advisory Committee (SAC) to evaluate which research proposals seem most promising and likely to make a worthwhile contribution to the international body of HIV and AIDS research. CANFAR is dedicated to funding all aspects of research, including: fundamental and applied research; educational and prevention; care; psychosocial initiatives; and, community research.";
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