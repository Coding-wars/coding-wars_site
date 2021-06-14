<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@300;400;500;600&family=Major+Mono+Display&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&display=swap" rel="stylesheet">
	<title>Coding Wars</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/mobile.css">
</head>
<body>
<?php 	
require 'scripts/connect.php';
$sms = $mysql->query("SELECT * FROM `user` WHERE `sms`='$sms'");
$sms =filter_var(trim($_POST['sms']), FILTER_SANITIZE_STRING);

 ?>
	<!-- Header -->
	<header class="header">
		
	<div class="header__inner" id="top">
				
			<!-- Logo -->	
			<div class="header__logo">
				
				<a class="logo" href="/"><img class="logo_image" src="img/logo.png" alt=""></a>

			</div>

			<!-- Nav -->
			 <nav class="nav nav_PC" id="menu_PC">
				
				<a href="/" class="nav__link selected">Главная</a>
				<a href="#stories_of_succes" class="nav__link">История развития</a>
				<a href="#courses" class="nav__link">Курсы</a>
				<a href="forums.php" id="forums" class="nav__link">Форум "Forum Coding"</a>
				<a href="#download__app" class="nav__link last_link">Скачать</a>		
				<?php
				if ($_COOKIE['user'] == ''):
				?>

				<a id="open_entrance" class="nav__button nav__button1">Войти</a >
				<a id="open_registration" class="nav__button nav__button2">Зарегистрироваться</a>
				<?php else: ?>
					<div class="hello">Привет <b><?=$_COOKIE['user']?></b>, у тебя <a class="nav__button nav__button1" id="open_sms_window"><?php $_POST['sms'] ?>0 сообщений.</a><br><a href="../scripts/exit.php" class="nav__button nav__button1">Выйти</a>если что-то случилось...</div>
			<?php endif; ?>
			</nav>

				<div class="social_icons_pc">
					<a href="#"><img src="img/instagram.png" alt="instagram" class="icon"></a>
					<!-- <a href="#"><img src="img/facebook.png" alt="facebook" class="icon"></a> -->
					<a href="https://github.com/minej2004/CodingWar.git"><img src="img/github.png" alt="github" class="icon"></a>
					<a href="https://t.me/joinchat/I5L55Bh9BiEOOc2MQnxQRw"><img src="img/telegram.png" alt="telegram" class="icon"></a>
				</div>



		<div class="mobile__menu" id="mobile__menu">
			<nav class="menu_mobile_window">

				<a class="nav_modal_mobile" id="nav_close_mobile" href="#nav_close_mobile">
				<span></span>
				</a> 
				
				<ul>
				<li><a href="/" class="nav__link nl_2 selected">Главная</a></li>
				<li><a href="#stories_of_succes" class="nav__link nl_2">История Развития Проекта</a></li>
				<li><a href="#courses" class="nav__link nl_2">Курсы</a></li>
				<li><a href="#download__app" class="nav__link nl_2 last_link">Скачать</a></li>
				<li><a href="forums.php" id="forums" class="nav__link nl_2 last_link">Форум "Forum Coding"</a></li>
				<?php
				if ($_COOKIE['user'] == ''):
				?>
				<li><a id="open_entrance_mobi" class="nav__link nl_2">Войти</a ></li>
				<li><a id="open_registration_mobi" class="nav__link nl_2">Зарегистрироваться</a></li>
			<?php else: ?>
					<p class=" hello">Привет <b><?=$_COOKIE['user']?></b>, у тебя <a id="open_modal_window" class="nav__button nav__button1"><?=$_COOKIE['sms'] ?>0 сообщений.</a><br><a href="../scripts/exit.php" class="nav__button nav__button1">Выйти</a> если что-то случилось...</p>
			<?php endif; ?>
			
					<div class="social_icons_mobile">
							<!-- <a href="#" class="icon">
								<img src="img/facebook.png" class="icon">
							</a> -->
							<a href="#" class="icon">
								<img src="img/instagram.png" class="icon">
							</a>
							<a href="https://github.com/minej2004/CodingWar.git" class="icon">
								<img src="img/github.png" class="icon">
							</a>
							<a href="https://t.me/joinchat/I5L55Bh9BiEOOc2MQnxQRw" class="icon">
								<img src="img/telegram.png" class="icon">
							</a>
					</div>
				</ul>
			</nav>
		</div>
			<a class="nav_modal_mobile" href="#mobile__menu">
				<span></span>
				<span></span>
				<span></span>
				</a>
		
		<div class="modal_window logine" id="entrance">
          <div class="exit" id="show_entrance">
          &#215
      	  </div>
          <form action="../scripts/auth.php" method="post">
              <h2>Log In</h2>
              <h5>Войти</h5>
              <input class="intep" type="text" name="login" placeholder="Логин"><br>
           <input class="intep" type="password" name="pass" placeholder="Секретный код"><br>
           <a class="help_pass" href="">Забыли пароль? Ща напомним...</a>
              <input class="intep nav__button2" type="submit" class="log_in" value ="Войти">
          </form>
        </div>

	<div class="logine modal_window" id="registration">
      <form action="../scripts/check.php" method="post">
      	<div class="exit" id="show_registration">
      	&#215
        </div>
          <h2>Registration</h2>
          <h5>Зарегестрироваться</h5>
          <input class="intep" type="text" name="login" placeholder="Логин"><br>
          <input class="intep" type="text" name="email" placeholder="Еmail"><br>
          <input class="intep" type="text" name="name" placeholder="Имя"><br>
          <input class="intep" type="password" name="pass" placeholder="Секретный код"><br>
          <input class="intep nav__button2" type="submit" value="Зарегестрироваться">
      </form>
    </div>
		</div>
		</div>
	</header>

			<div class="scroll_top">
				<a href="#top" class="scroll_tops" style="color: orange;">	&#8593 </a>
			</div>

	<!-- Intro -->
	<div class="intro">
		
		<div class="intro__inner">
			
			<h1 class="intro__title">coding Wars</h1>
			<p class="intro_paragraph"> Hello Wars! Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Fugiat eius fugit sit ut ullam, rerum, atque optio, dicta, vitae consectetur quaerat cumque blanditiis quisquam molestiae quae obcaecati ducimus perferendis reprehenderit.
			Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Quo nulla enim qui! Magnam, expedita soluta, deserunt delectus nam maiores? Dolorem ea dicta reiciendis officia animi nostrum, mollitia impedit nemo aut.<br>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa iste in labore sit distinctio! Adipisci, unde saepe expedita vero omnis accusamus nam rem id quisquam neque cupiditate vel nisi, quos.</p>

			<div class="intro__buttons">

				<a class="intro__button intro__button1 scroll" href="#download__app">Скачать</a>
				<a class="intro__button intro__button2 scroll" href="#courses">Курсы</a>

			</div>

		</div>

	</div>

	<!-- Main -->
	<main class="main">
		
		<div class="main__inner">
			
			<div class="main__container">

				<!-- Section 1 -->
				<section class="section_1">
					
					<div class="section_1__inner">
						
						<div class="section__title motivations">
							
							<h2 class="main__title ">Развивайся в любимом деле вместе с нами</h2>
							<p class="main__title_p">Да-да, и мы учимся - и вы, и это наше общее, любимое дело.</p>

						</div>	
						<div class="section1__main">
							<div id="help">
							<div class="l1">
								<img class="list_image list_image_1" src="img/icons/book.svg" alt="">
								<p class="section1_list_text section1_list_text_1">Выбирай курс</p>
							</div >
							<hr class="section1_list__line line_1">

							<div class="l2">
								<img class="list_image list_image_2" src="img/icons/book_2.svg" alt="">
								<p class="section1_list_text section1_list_text_2">Учись в собственном <br>ритме</p>
							</div> 
							<hr class="section1_list__line line_2">

							<div class="l3">
								<img class="list_image list_image_3" src="img/icons/book_3.svg" alt="">
								<p class="section1_list_text section1_list_text_3">Получай результат</p>
							</div>	
						</div>
					</div>
				</div>	
		

				</section>
			</div>

				<section class="section_2" id="stories_of_succes">
						
					<div class="main__container section_2__inner">
						
						<div class="section__title">
							
							<h2 class="main__title news_title">История Развития Проекта</h2>
							
							<p class="main__title_p news_title_p">В этом разделе вы будете наблюдать за развитием проекта (сайта и приложения). Новости короче</p>

						</div>

						<div class="section2__main">

							<h3 class="section2__photo1__title">Новость от 02.06.2021</h3>
							<p class="section2__photo1__paragraph">Потихоньку идут обновления, на этих неделях альфа-версию приложения можно будет уже показывать.
							Ну а сайт по внешности уже практически допилен - на смартфонах уже читаемо)) Продолжаем работать, в поте лица.</p>


							<h3 class="section2__photo1__title">Новость от 11.02.2021</h3>
							<p class="section2__photo1__paragraph">Сегодня (дата выше &#8593), команда разработчиков из двух человек дописали сайт, сделали первоначальную настройку, и выложили на хостинг. Знаменательный день для сайта И проекта.
							Если вы не ознакомлены с проектом - описание будет выше.</p>

								
							<!-- <img class="section2__photo1" src="img/photo.png" alt="new"> -->

							<h3 class="section2__photo1__title">Новость от 21.12.2020</h3>
							<p class="section2__photo1__paragraph">Вышеуказаная дата - дата созания группы программистов которые хотят обучить желающих простых смертных в настоящих, качественных кодеров, </p>

						</div>

					</div>

				</section>

			<div class="">
				<section class="section_3" id="courses">					
					<div class="section_3__inner">					
						<div class="section__title">							
							<h2 class="main__title">Наши Курсы</h2>
							<p class="main__title_p">Выбирайте курс по ссылке в описании и учитесь :) .</p>

						</div>
						<div class="section3__main main__container">	
							<div class="section_3__block">
								<h2 class="section_3__block__title">Python</h2>		
								<p class="section_3__block__p">Самый простой, высокоуровневый и функциональныцй язык. Используеться во многих отраслях. Тоесть общего назначения. Его достопримечательность - интрпретируемый, то есть не требующий предварительной компиляции.</p>
								  <div class="intro__button button_new"><a class="intro__a" href="#download__app">Скачайте приложение</br> чтобы пройти курс</a></div>
							</div>


							<div class="section_3__block">
								<h2 class="section_3__block__title">Java</h2>		
								<p class="section_3__block__p">Java не похож на JavaScript. Вообще! Современный, высокоуровневый, строго типизированый объектно-ориентированый язык програмирования. Наименован в честь острова Ява. В основном для разработки на смартфоны с операционной системой Android.</p>
								  <div class="intro__button button_new"><a class="intro__a" href="#download__app">Скачайте приложение</br> чтобы пройти курс</a></div>
							</div>


							<div class="section_3__block">
								<h2 class="section_3__block__title">HTML and CSS</h2>		
								<p class="section_3__block__p">Язык разметки и стилей. Основа веб-програмирования, веб-разработки и веб-дизайна. HTML - Hyper Text Markup Language - язык гипретекстовой разметки страницы. CSS - Cascading Style Sheets - Кааскадные табллицы стилей. Маленький и основной курс по вебу. То есть начинать надо этого курса</p>
								  <div class="intro__button button_new"><a class="intro__a" href="#download__app">Скачайте приложение</br> чтобы пройти курс</a></div>
							</div>


							<div class="section_3__block">
								<h2 class="section_3__block__title">JavaScript</h2>		
								<p class="section_3__block__p">Прототипно-ориентированый, сценарийный языки прог... ну вы поняли. Самый запутаный, и при этом самый функциональный. Кстати, по научному его называют ECMAScript. Имеет много фреймворков и библиотек, которые облегчают работу, но их тоже нужно изучить. Отдельно желательно.</p>
								  <div class="intro__button button_new"><a class="intro__a" href="#download__app">Скачайте приложение</br> чтобы пройти курс</a></div>
							</div>

							<div class="section_3__block">
								<h2 class="section_3__block__title">PHP</h2>		
								<p class="section_3__block__p">PHP - < ? PreProcessor  Hypertext ? > - ПреПроцессор Гипертекста, хотя поже переназван в Personal Home Page - персональная домашняя страница. Применяеться в основном в веб-разработке в backend части. Он прост и сложен одновременно. И курс построили так что-бы Вы изучили бысто и просто.</p>
								  <div class="intro__button button_new"><a class="intro__a" href="#download__app">Скачайте приложение</br> чтобы пройти курс</a></div>
							</div>

							<div class="section_3__block">
								<h2 class="section_3__block__title">C++</h2>		
								<p class="section_3__block__p">Очень замудрёный, его могут выучить лишь еденицы... и если вы терьпеливы и умны - это ваш язык. Ходят легенды что Microsoft Office написали именно на этом языке... и хоть мы и постараемся облегчить его изучение, но мы не даём гаранти что вы его выучите... так что хорошенько подумайте, перед тем как выбрать этот язык. </p>
								  <div class="intro__button button_new"><a class="intro__a" href="#download__app">Скачайте приложение</br> чтобы пройти курс</a></div>

							</div>
						</div>
					</div>
				</section>
			</div>
		</div>

				<section class="section_4"  id="download__app">		
					<div class="section_4__inner">
						
						<div id="load" class="section__title">
							
							<h2 class="main__title">Coding Wars</h2>
							<p class="main__title_p">Скачивайте приложение, чтобы пройти курсы, научиться программировать, научить других, участвовать в соревнованиях... Да короче, чего я тут распинаюсь? Скачивайте.</p>

						</div>

						<div class="section_4__main">

							<a id="download" class="section_4__button section_4__button3" >Скачать с GooglePlay</a>
							<a id="downloads" class="section_4__button section_4__button1" >Скачать (Android)</a>
							<a id="downloadse" class="section_4__button section_4__button2" onclick="">Скачать (iOS)</a>
							
						</div>
					</div>
				</section>
			</div>

		<div class="comments">
			<div class="autor"></div>
			<div class="data"></div>
			<div class="text"></div>


		</div>

	</main>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/mobile-detect@1.4.4/mobile-detect.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.4/mobile-detect.min.js"></script>
<script src="js/script.js"></script>
	<!-- Footer -->
	<footer class="footer">
		
		<div class="footer__inner">
			<div id="pp">Правила Пользования</div>
			<div id="p2">Политика Конфидициальности</div>
			
			<p class="footer_p">© 2021 All Rights Reserved</p>

		</div>

	</footer>

</body>
</html>