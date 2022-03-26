<?php 
if(isset($_POST['submit'])){
    $to = "michaelbrady712@gmail.com"; 
	$id = "Form Submission";
    $contact_name = $_POST['contact_name'];
    $student_name = $_POST['student_name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$experience = $_POST['experience'];
    $subject = "Form Submission";
    $message = $_POST['message'];
	$text = "A potential client has filled out your contact form.
		\nContact Name: " . $contact_name . 
		"\nStudent Name: " . $student_name . 
		"\nPhone: " . $phone . 
		"\nEmail:" . $email .
		"\nStudent's Age (if adult - you can just write \"adult\"): " . $age . 
		"\nStudent's Experience (if any): " . $experience . 
		"\nTell me a little about yourself and/or what you would like to learn: " . $message;
    $headers = "From: " . $id;
    mail($to,$subject,$text,$headers);
	header("Location: confirmation.html");
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Piano with Georgia</title>
		<link href="styles.css" type="text/css" rel="stylesheet" />
	</head>
	<body onload=quarternote()>
		<header id="home">
			<div id="topleft"></div>
			<div id="topright"></div>
			<img src="imagesandvideos/logo.png" class="logo"/>
			<a href="home.html" class="title">Piano with Georgia</a>
			<h2>- Creative Piano Lessons in Flagstaff, AZ -</h2>
		</header>
		<nav id="myNav">
				<a href=#home class="link">Home</a>
				<a href=#about class="link">About</a>
				<a href=#lessons class="link">Lessons</a>
				<a href=#contact class="link">Contact</a>
		</nav>
		<video autoplay muted loop>
		<source src="imagesandvideos/piano.mp4" type="video/mp4">
		</video>
		<h3 class="home">Helping people develop into well-rounded, whole musicians.</h3>
		<section class="mid">
			<h4>With over 20 years of teaching experience, Georgia is well equipped to meet any and all learning styles.</h4>
		</section>
		<article id="about">
			<section class="container">
				<h2 class="title">About</h2>
				<img class="headshot" src="imagesandvideos/headshot.jpg"/>
			</section>
			<section class="bio">
				<p>Georgia Sears has been a private piano teacher for over 20 years. While a graduate student at the University of Houston from 
				1994-1997, Georgia was awarded a teaching fellowship and taught private and class piano. After graduation, Georgia served as 
				Professor of Piano at San Jacinto Community College in Houston, Texas until 2000. At this time she began teaching at Grand Canyon 
				University in Phoenix, Arizona where she continued until the year 2007. From 2004-2015 she established and maintained a private 
				studio in Buckeye, AZ which has included students of all ages and levels. Georgia’s students have regularly participated in 
				Phoenix and Arizona State Music Teachers Association events where many have earned top honors. Her students have also gone on 
				to earn scholarships and continue their studies as music majors. Georgia’s top priority in her teaching is to deliver quality 
				musical information in a way that passes along the joy of learning and playing music to her students. She tailors style and musical 
				choices individually to motivate students and help them find their own passions.</p><br>

				<p>Georgia graduated Summa Cum Laude with a Bachelor’s of Music degree in Piano Performance and a mathematics 
				minor from Grand Canyon University in 1994. She earned her Masters of Music degree in Piano Performance and Pedagogy 
				from University of Houston’s Moore’s School of Music in 1997. During this time she was also inducted into the music honor’s 
				society Pi Kappa Lambda. Georgia’s studies included private lessons with Dr. Judy Lively and Nancy Weems. In an effort to 
				continually advance and remain in touch with what it means to be a student, Georgia was accepted by and continued her private 
				study with former Van Cliburn adjudicator, pedagogue and author Dean Elder.</p><br>
				
				<p>Growing up in Arizona, Georgia participated in many local and state level competitions earning honors and awards. 
				Georgia has continued to perform classical music in the Phoenix metro area at various functions and events. Georgia has also 
				served as pianist and accompanist at her church for over 10 years playing classic and contemporary styles.
				</p>
			</section>
		</article>
		<article id="lessons">
			<section class="container">
				<h2 class="title">Lessons</h2>
				<section class="philosophy">
				<h3 class="philosophy">Georgia Sears’ Teaching Philosophies</h3><br>
				
				<p class="philosophy">The most important role I can play in a student’s musical journey is to instill in them a deep connection to music that will last 
				their entire lives. It is my goal to develop lifelong musicians and help every student find their personal path to what 
				that means.<br> 

				For some students, this will mean playing by ear and improvising. For others, it might mean reading music and accompanying other musicians 
				within their community, family, or church. One might play in a rock band while another falls in love with classical music. 
				Some students will play music for fun while others make it their main concentration of study at the university level. 
				There are innumerable paths that a student might take. I am a bridge that will help them get where they want to go.<br>

				My responsibility is to help students develop into well-rounded, whole musicians that can choose any path and feel they were 
				prepared to make that choice. There are several critical components of this.</p><br>

				<b>JOY</b>

				<p class="philosophy"><br>Students young and old must experience joy from the first lesson.They will never be able to overcome the challenges 
				and the many years of practice ahead if they do not enjoy the process. Frances Clark once said, 
				“To your youngest students, you ARE music.” I embody this idea by planning lessons that are engaging, fun, positive and 
				filled with learning.</p><br>

				<b>FUNDAMENTALS</b>
				
				<p class="philosophy"><br>Every student needs to understand scales, chords and arpeggios. These basic fundamentals build technique, theory, a toolbox 
				for improvising, confidence in sight reading, and a framework on which to understand compositions. It is equally important 
				for students to “mess around” with these skills, experiencing improvisation and composition from the earliest of lessons.</p><br>

				<b>TECHNIQUE</b>
				
				<p class="philosophy"><br>Good technique is evidenced by relaxed and efficient use of the fingers, wrist, forearm and shoulders. 
				Students are carefully observed as they play, checking to be sure that they are playing with a relaxed, physical ease. 
				If things start to get tight, it is a sign that they are not yet ready to play whatever it is they are attempting. 
				The idea is explained perfectly in a quote I once saw on the door of a ballet studio. It said, “The importance of good 
				technique is so that the body does not prevent the soul from expressing itself.”</p><br>

				<b>MUSICALITY</b>
				
				<p class="philosophy"><br>Young students can play very beautifully, but they have to learn to listen and know what musical playing sounds like. 
				Experimenting like musical scientists is a fun way to allow them to make decisions about how they play the notes of their 
				songs. It is important that students give thought to how notes should be played and to try playing them in different ways. 
				Students should consider if a note should be played hard or soft and try it both ways. The answer isn’t important, but asking 
				the question is essential. Students learn to play thoughtfully and with more sensitivity when musicality becomes a habit.</p><br>

				<b>PERFORMANCE</b>
				
				<p class="philosophy"><br>Music was made to be shared and played with others. My personal piano education usually consisted of isolated lessons and 
				practice followed by a solemn, solo walk onto a stage where I would nervously hope that I wouldn’t forget everything I knew. 
				I now seek to give my students a different experience of performing. Students perform pieces focused on sharing and collaborating 
				rather than showing off or proving. This shift in mindset offers performance opportunities that are free from fear of judgement 
				and full of comfort in making mistakes and improvising our way through them.</p><br>

				<b>OWNERSHIP</b>
				
				<p class="philosophy"><br>As students mature in their skills, the leadership role must transition to them. I continue to act as a guide, but they 
				start taking more initiative and determine what I can do to support their further development. This transition usually 
				happens in middle school if a student has been taking lessons from a young age. At this point in their lives there are 
				competing activities - many of which involve much more socialization with their friends. Their music needs to become 
				their own and be relevant to their lives.</p><br>

				<b>CONNECTION</b>
				
				<p class="philosophy"><br>I love to connect with and stay in touch with my students. Getting to know them helps inform my instruction and create more 
				meaningful engagement with their music. I send them links to songs that made me think of them or videos I think they will enjoy, 
				even after they are no longer my students. I consider myself a part of their lives and I hope they will 
				continue to be a part of mine.</p>
				</section>
			</section>
		</article>
		<article id="contact">
				<section class="container"><h2 class="title">Contact Me</h2></section>
				<section class="form">
				<form action="" method="post" onsubmit="return validate()">
					Contact Name: <br><input type="text" name="contact_name" placeholder="Name" id="contactname"><div class="error" id="cnameerror">*Field is required</div><br>
					Student Name: <br><input type="text" name="student_name" placeholder="Name" id="studentname"><div class="error" id="snameerror">*Field is required</div><br>
					Phone: <br><input type="text" name="phone" placeholder="e.g. 999-999-9999" id="phone"><div class="error" id="phoneerror">*Field is required</div><br>
					Email: <br><input type="text" name="email" placeholder="email@address.com" id="email"><div class="error" id="emailerror">*Field is required</div><br>
					Student's Age (if adult - you can just write "adult"): <br><input type="text" name="age" placeholder="Age" id="age"><div class="error" id="ageerror">*Field is required</div><br>
					Student's Experience (if any):<br><input type="text" name="experience" placeholder="Experience" id="experience"><div class="error" id="experror">*Field is required</div><br>
					Tell me a little about yourself and/or what you would like to learn! 
					<br><textarea rows="5" name="message" cols="30" placeholder="Message" id="message"></textarea><br><div class="error" id="messageerror">*Field is required</div><br>
					<input type="submit" name="submit" value="Submit" class="submit">
				</form>
			</section>
		</article>
		<footer>
			<div id="botleft"></div>
			<div id="botright"></div>
			<p class="footer">Georgia Sears</p>
				<p class="info"> <b> Teaching location: </b> <br> Flagstaff, AZ or online </p>
				<p class="info"> <b> Email: </b> <br> pianowithgeorgia@gmail.com </p>
				<p class="info"> <b> Phone: </b> <br> 602-405-8935 </p>
		</footer>
	<script src="script.js"></script>
	</body>
</html>