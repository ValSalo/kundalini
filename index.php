<!DOCTYPE HTML>
<!--
	Reflex by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>Кундалини йога</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<?php
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){

      session_start();

      if($_POST == $_SESSION['oldPOST']) $_POST = array(); else $_SESSION['oldPOST'] = $_POST;

      // Check input errors before sending email
      if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"])){
          // Recipient email address
    			$email = $_POST["email"];
					$phone = $_POST["phone"];
    			$message = $_POST["message"];
    			$name = $_POST["name"];
					$time = $_POST["time"];
    			$subject = 'Zapytanie przez formularz kontaktowy';
          $to = 'salovaleriia@gmail.com';

          // Create email headers
          $headers = 'From: '. $name . "\r\n" .
          'Reply-To: '. $email . "\r\n" .
          'X-Mailer: PHP/' . phpversion();

          // Sending email
          if (mail($to, $subject, $message, $headers)) {
            echo '<p class="success-msg">Wiadomość wysłana! Odpowiem możliwie szybko.</p>';
          }

      }
    }
    ?>

		<!-- Header -->
			<header id="header">
				<nav>
					<ul>
						<li><a href="#menu">Меню</a></li>
					</ul>
				</nav>
			</header>

		<!-- Menu -->

			<nav id="menu">
				<h2>Меню</h2>
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Ipsum veroeros</a></li>
					<li><a href="generic.html">Tempus etiam</a></li>
					<li><a href="generic.html">Consequat dolor</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
				<!-- <ul class="actions stacked">
					<li><a href="#" class="button fit primary">Get Started</a></li>
					<li><a href="#" class="button fit">Log In</a></li>
				</ul> -->
			</nav>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper featured style1">
						<div class="inner">
							<span class="image"><img src="images/pic01.jpg" alt="" /></span>
							<div class="content">
								<header>
									<h1>Кундалини йога класс</h1>
									<p>Кундалини йога - самая эффективная<br />
									из всех современных и актуальных практик йоги,<br />
									основанная на древних традициях северной Индии.</p>
								</header>
								<footer>
									<ul class="actions">
										<li><a href="#footer" class="button big">Пробное занятие</a></li>
									</ul>
								</footer>
							</div>
						</div>
					</section>

				<!-- One -->
					<section class="wrapper style2 special">
						<div class="inner">
							<header>
								<h2>Кундалини йога - это</h2>
								<p>древняя наука, которой на Западе,
									начал обучать Йоги Бхаджан, мастер кундалини йоги,
									во второй половине прошлого века. Ранее эта наука,
									в виду своей высокой эффективности практиковалась в закрытых кругах индийских сикхов.
									Сейчас у всех народов есть возможность практиковать эту дисциплину открыто.
										<ul class="actions special">
											<li><a href="kundalini.html" class="button">Подробнее</a></li>
										</ul>
							</header>

	<!-- <ul class="icons major style2">
		<li><span class="icon solid fas fa-wind"><span class="label">Дыхание</span></span></li><li>
		<span class="icon solid fa-cog"><span class="label">Асаны</span></span></li><li>
		<span class="icon solid fa-gem"><span class="label">Внимание</span></span></li><li>
		<span class="icon solid fa-camera-retro"><span class="label">Мантра</span></span></li><li>
		<span class="icon solid fa-briefcase"><span class="label">Tempus</span></span></li>
	</ul> -->

	<ul class="icons major style2">
		<li><a href="breathe.html" class="icon solid fa-code fa-wind"><br><span class="">Дыхание</span></a></li><li>
		<a href="asana.html" class="icon solid fa-praying-hands"><br><span class="">Асаны</span></a></li><li>
		<a href="attention.html" class="icon solid fa-brain"><br><span class="">Внимание</span></a></li><li>
		<a href="naad.html" class="icon solid fa-om"><br><span class="">Наад</span></a></li>
		<!-- <li> -->
		<!-- <span class="icon solid fa-briefcase"><br><span class="">Tempus</span></span></li> -->
	</ul>


							<p><blockquote>Кундалини йога работает со всей тотальностью человека: телом, умом, эмоциями и духом.
Это наука "самовозвышения". Наука, используя инструменты которой, вы возвышаете уровень своей осознанности. [подробнее] ниже идут иконки и цитата: «Кундалини Йога возвращает человеку его собственную силу, она дает ему дисциплину, меняет биохимический состав крови, стимулирует железы внутренней секреции, а также учит человека расслабляться».<br />
© Йоги Бхаджан</blockquote></p>
							<!-- <footer>
								<ul class="actions special">
									<li><a href="#" class="button">Подробнее</a></li>
								</ul>
							</footer> -->
						</div>
					</section>

				<!-- Two -->
					<section class="wrapper style1 special">
						<div class="inner">
							<header>
								<h2>Rutrum facilisis</h2>
								<p>Rutrum facilisis. Class aptent taciti sociosqu<br />
								litora torquent et conubia etiam nostra.</p>
							</header>
							<section class="spotlight">
								<span class="image"><img src="images/pic02.jpg" alt="" /></span>
								<div class="content">
									<header>
										<h3>Занятия в группе.</h3>
									</header>
									<p>Класс состоит от 5 до 15 практикующих. 3 занятия в неделю. Групповые занятия включают: </br>
										Теоретическую часть: "тема дня", разминку, крию (системную последовательность практических упражнений, медитацию и релаксацию.</p>
									<footer>
										<ul class="actions">
											<li><a href="#footer" class="button">Записаться на занятие</a></li>
										</ul>
									</footer>
								</div>
							</section>
							<section class="spotlight">
								<span class="image"><img src="images/pic03.jpg" alt="" /></span>
								<div class="content">
									<header>
										<h3>Индивидуальные практики</h3>
									</header>
									<p>Самый эффективный способ достижения быстрых результатов. Многогранный подход в достижении индивидуальной цели.</p>
									<footer>
										<ul class="actions">
											<li><a href="personal-class.html" class="button">Подробнее</a></li>
										</ul>
									</footer>
								</div>
							</section>
							<section class="spotlight">
								<span class="image"><img src="images/pic04.jpg" alt="" /></span>
								<div class="content">
									<header>
										<h3>Онлайн марафон</h3>
									</header>
									<p>Цикл систематических занятий продолжительностью от 2х до 6 недель</p>
									<footer>
										<ul class="actions">
											<li><a href="#" class="button">Подробнее</a></li>
										</ul>
									</footer>
								</div>
							</section>
							<section class="spotlight">
								<span class="image"><img src="images/pic14.jpg" alt="" /></span>
								<div class="content">
									<header>
										<h3>Интенсив</h3>
									</header>
									<p>Глубокое погружении в практику на протяжении целого дня. Включает в себя теоретическую составляющую по заранее оглашенной теме и комплекс практики с медицацией</p>
									<footer>
										<ul class="actions">
											<li><a href="#" class="button">Подробнее</a></li>
										</ul>
									</footer>
								</div>
							</section>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos malesuada fames ac turpis egestas. In non lorem amet. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique eu nibh.</p>
							<footer>
								<ul class="actions special">
									<li><a href="#" class="button">Details</a></li>
								</ul>
							</footer> -->
						</div>
					</section>

				<!-- Three -->
					<section class="wrapper style3 special">
						<div class="inner">
							<header>
								<h2>Мы всегда готовы предоставить Вам лучший сервис.</h2>

								<p>Наши преподаватели - это квалифицированные специалисты в области кундалини йоги и психологии,<br />
								поэтому Вы можете быть уверены в том, что каждое занятие будет организовано качественно,<br />
								а конфиденциальная информация о Вас - таковой и останеться.</p>
							</header>
							<!-- <footer>
								<ul class="actions special">
									<li><a href="#" class="button big">Get Started</a></li>
								</ul>
							</footer> -->
						</div>
					</section>

				<!-- Footer -->
					<section id="footer" class="wrapper split style2">
						<div class="inner">
							<section>
								<header>
									<h3>Запись на занятие</h3>
								</header>
								<p>Воспользуйтесь формой, чтобы записаться на занятие или задать свой вопрос. Присоединяйтесь к нашему сообществу и следите за новостями kundalini в соц сетях: </p>
								<ul class="icons">
									<!-- <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li> -->
									<li><a href="https://www.instagram.com/kundalini.in.ua/" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<!-- <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
									<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li> -->
								</ul>
							</section>
							<section>
								<form method="post" action="index.php">
									<div class="fields">
										<div class="field half"><input type="text" name="name" id="name" placeholder="Имя" /></div>
										<div class="field half"><input type="email" name="email" id="email" placeholder="Email" /></div>
										<div class="field half"><input type="phone" name="phone" id="phone" placeholder="Телефон" /></div>
										<div class="field half"><input type="time" name="time" id="time" placeholder="Время" /></div>
										<div class="field"><textarea name="message" id="message" placeholder="Дополгительные пожелания или вопросы" rows="4"></textarea></div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Записаться на занятие" /></li>
									</ul>
								</form>
							</section>
						</div>
						<div class="copyright">
							<p>&copy; Untitled. All rights reserved. Lorem ipsum dolor sit amet nullam.</p>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
        setTimeout(() => {
  				$('.success-msg').addClass('hidden');
        }, 4000);
			</script>

	</body>
</html>
