<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel = "stylesheet" type = "text/css" href="css/stylesheet.css">
		<title>Cornell Organizational Robotics Lab</title>
		<script type = "text/javascript">
		//inspiratition from http://www.webdeveloper.com/forum/showthread.php?218226-hide-show-or-expand-collapse-DIV-need-a-simple-code
			function showMore(div_id, text_id) {
				var div_id = document.getElementById(div_id);
				var text_id = document.getElementById(text_id)
				if(div_id.style.display != "block") {
					div_id.style.display = "block";
					text_id.innerHTML = "Collapse";
				}
				else {
					div_id.style.display = "none";
					text_id.innerHTML = "Expand";
				}
			}

		</script>
	</head>

	<body>
		<!-- Inspiration for single-page design from https://codeplanet.io/how-to-make-a-single-page-website/ -->
		<div id = "nav">
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#news">News</a></li>
				<li><a href = "#research">Research</a></li>	
				<li><a href="#team">Team</a></li>
				<li><a href="#contact">Contact</a></li>
				<!-- <li><a href="#login">Login</a></li> -->
			</ul>
		</div>

		<div id = "home">
			The Robot and Social Dynamics Lab was founded to better understand the relationship between robotics and human communication. 
			For our experiments, we test the interpersonal relationships of several diverse groups across varying communicative levels. 
			We facilitate these tests through interactions with robots, hopefully increasing the chances of reducing verbal disagreement, 
			improving conflict resolution skills, and furthering our evaluation on interactional dynamics. 
			Visit our <a href = "#research">research</a> page to learn a bit more about what we're currently working on.
		</div>
		<hr>
		<div id = "news">
			News content here.
		</div>
		<hr>

		<div id = "research">
			Project: Teamwork and Robots <br><br>
			To understand and drive the effective integration of robots into teamwork, the broad long term objective of our research is to identify 
			the mechanisms through which robots shape the emotion regulatory dynamics of teamwork and to design, implement, and evaluate capabilities 
			for robots to act upon these mechanisms to improve team performance. More specifically we focus on three specific areas:<br><br>
			Area 1: Examine emotion propagation, regulation, and mediation in robot assisted teamwork. Through qualitative field-work and systematic 
			observation of behavior in robotic surgery and laboratory studies this project will examine how propagation and regulation of emotion is 
			initiated and mediated in robot supported teamwork dependent on the structure of the team, and the presence remote operators.
			<br>Area 2: Develop emotion regulation capabilities for robots. Through iterative design and evaluation cycles this project will develop 
			and systematically evaluate new technical systems for robots to regulate and mediate emotions in teams either through targeted interventions
			 or continuous regulation.
			<br>Area 3: Examine how robots’ emotion regulatory behaviors affect team performance. Through a series of carefully controlled laboratory 
			studies this project will examine the mechanisms through which a robot’s influence on emotion regulation within a team affects subjective 
			and objective team performance.
			<br><br>
			
			<div id = "click" onclick = "showMore('moreResearch', 'click')">Expand</div>

  			<div id="moreResearch">
				Project: Affective Grounding<br><br>
				Communication tools and social media have the potential to allow people to interact fluidly across national, cultural and linguistic boundaries 
				in ways that would have been difficult if not impossible in the past. In virtual organizations, teams of people from across the globe now work 
				together on common problems, each bringing his or her own perspective and expertise. Despite the promise of new media for interaction across 
				national and cultural boundaries, however, much of this potential fails to be realized. Multicultural teams are challenged by mismatches in social 
				conventions, work styles, power relationships and conversational norms, which can lead to misunderstandings that negatively affect relationships among 
				team members and the quality of group work. <br>
				We propose to develop new interventions to help intercultural teams overcome their challenges, based on an understanding of moment-by-moment team dynamics. 
				We introduce the term "affective grounding" to refer to the coordination of affect in team interaction. Just as successful teams work together to ground the 
				informational content of their messages, they need to likewise work together to build a shared understanding about the emotional meaning of each other's behavior. 
				Previous work has shown that a team's ability to emotionally regulate itself is a significant predictor of its later performance. We propose to identify the ways in 
				which affective grounding is more problematic in intercultural teams than same culture teams, and then to prototype and evaluate a set of tools to improve affective grounding."

				<br><br> Project: Robotics Surgery
				<br><br>This study addresses the complex collaborative dynamics that arise when robotic surgical systems are deployed into the operating room. While some work has studied the 
				effectiveness of such systems on surgical outcomes, less has focused on how these systems affect social, emotional, and collaborative processes at the team level that are crucial 
				to the performance, experience and effectiveness of the collaborative surgical team. To help bridge this gap this project seeks to explore through a comparative analysis of teamwork 
				in laparoscopic and robotic surgery, how a robotic surgical system (the daVinci surgical system) affects teamwork and specifically emotion regulation at the team level.
				<br>
				A secondary focus is to gather information regarding the redistribution of work and changes in surgical training techniques that result from the introduction of complex robotic tools. 
				By collaborating with a surgical team at Weill Medical College in New York the study will gather ethnographic, video, and interview data on laparoscopic and robot-assisted surgical teamwork 
				and training that can help answer these questions, while illuminating how technological advances within the healthcare system affect collaborative work and the regulation of emotion in 
				tightly- collaborative environments.

				<br><br>Project: Socially Assistive Robots
				<br><br>Several studies have shown that the kind of strategies people use to regulate their internal emotional state affect their overall well-being and health. Previous research on 
				emotion regulation and health has particularly distinguished antecedent and response focused emotion regulation strategies and found that the earlier are more effective in promoting well-being. 
				In our second year we will examine whether a robot that employs strategies to support intra-personal emotion regulation can help children acquire emotion regulation skills that support 
				processes such as learning and stress regulation. For example a study could expose children to an emotionally arousing stimulus while a robot suggest various emotion regulation strategies 
				the effectiveness in health maintenance of which can then be evaluated.
				<br>
				While robots have been used to actively regulate emotions of people interacting with a robot, no research has explored whether a robot can take the role of a mediator and regulate the 
				quality of social interactions between two or more people. In year three we will explore how a robot can aid interpersonal emotion regulation by helping children learn effective interpersonal 
				emotion regulation skills and by directly regulating the emotional quality of a social interaction.
			</div>
		</div>
		<hr>
		<div id = "team">
			Malte Jung<br><br>
			Malte Jung is an Assistant Professor in Information Science at Cornell University and the Nancy H. ’62 and Philip M. ’62 Young Sesquicentennial Faculty Fellow. 
			His research focuses on the intersections of teamwork, technology, and emotion. The goal of his research is to inform our basic understanding of technology supported teamwork as well as to inform 
			how we design technology to support teamwork across a wide range of settings.<br>
			mfj28@cornell.ed 206 Gates Hall / 607-255-2845<br><br>
			Solace Shen<br><br>
			Solace Shen is a postdoctoral associate in the Department of Information Science at Cornell University. Her research centers on understanding people’s social and
			 moral interactions with personified technologies that are designed to socially engage humans (e.g., robots, virtual agents, etc.), and the effects of such
			  interactions on human, especially children’s, social and moral development. She seeks to bring insights from developmental psychology to theoretically ground
			   the design of personified technologies in ways that can enhance human experience and development. Her current projects focus on whether and how interaction with 
			   social robots can facilitate children’s development and use of social and emotional skills in the context of social conflict.
			<br>solace.shen@cornell.edu / 220 Gates Hall / 607-243-2986
		</div>
		<hr>
		<div id = "contact">
			Contact content here.
		</div>
		<hr>
	</body>
</html>