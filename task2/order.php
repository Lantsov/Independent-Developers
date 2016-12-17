<?php
$colors = array('черно-красный','silver','red-black');
if (isset($_GET['color']))
	{$activeColor = $_GET['color'];}
else
	{$activeColor = 0;};
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Задание 2</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow|PT+Sans:400,700&amp;subset=cyrillic,latin-ext" rel="stylesheet"> 
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="top_nav">
			<div class="sitename">
				<a href=".">
					<strong class="s_name">NAUSHNIKI</strong>
					<strong class="s_desc">магазин беспроводних наушников</strong>
				</a>
			</div>
			<div class="contacts">
				<img src="img/phone.png" alt="" class="img_tel">
				<a href="tel:+79999999999" class="cont_tel">+7(999) 999-99-99</a>
				Ждем Вашего звонка с 10:00 до 23:00
			</div>
		</div>
		<div class="bottom_nav">
			<div class="nav_align">
				<ul class="nav_main">
					<li><a href="#">Блютуз наушники</a></li>
					<li><a href="#">Микронаушники</a></li>
					<li><a href="#">Блютуз колонки</a></li>
					<li><a href="#">Аксессуары</a></li>
				</ul>
				<ul class="nav_main">	
					<li><a href="#">Доставка и Оплата</a></li>
					<li><a href="#">Гарантия</a></li>
					<li><a href="#">О нас</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</div>
		</div>
		<div class="logo">
			<a href=".">
				<img src="img/logo.jpg" alt="">
			</a>
		</div>
	</header>
	<main>
		<div class="item_top">
			<div class="item_img">
				<div class="item_img_active">
					<span>Powerbeats 2 Wireless</span>
				</div>
			</div>
			<div class="item_main">
				<h1>Beats Powerbeats 2 Wireless (<?php echo $colors[$activeColor];?>)</h1>
				<div class="item_price">
					3690 руб. <del>4790 руб.</del>
					<a href="#buy" class="btn_go_to_buy">Купить</a>
				</div>
				<div class="item_main_text">
					<div class="item_tech">
						<strong>Доступные цвета</strong>
						<ul class="item_tech_color">
							<?php foreach ($colors as $key => $color) {
								echo '<li class="color c_';
								echo $key;
								if ($key == $activeColor) {
									echo " active";
								};
								echo '"><a href="?color=';
								echo $key;
								echo '" title="';
								echo $color;
								echo '">';
								echo $color;
								echo '</a></li>';
							} ?>
						</ul>
						<strong>Характеристики:</strong>
						<ul class="item_tech_list">
							<li>Вид наушников - вкладыши</li>
							<li>Тип подключение - Bluetooth</li>
							<li>Акустическое оформление - закрытое</li>
							<li>Есть микрофон</li>
							<li>Регулятор громкости</li>
						</ul>
					</div>
					<div class="item_text">
						<strong>Описание модели:</strong>
						Точная реплика (включая валидность серийного номера) блютуз наушников для спорта Powerbeats 2 Wireless. Спроектированы специалистами компании для абсолютного удобства и комфорта обладателя. Восхитительное звучание, которым могут обладать только беспроводные наушники Beats с глубокими басами и четкими высокими частотами, высокоточное изготовление корпуса наушников, пото- и влагозащита. Ушные дуги имеют специальный запатентованный механизм, облегчающий надевание наушников. Дизайн переключателя громкости оптимизирован для нажатия на бегу. Держа в руках эту модель блутуз наушников, понимаешь, что они, пожалуй, лучшие bluetooth наушники на сегодня. На создание этой серии специалистов Beats и лично Dr.Dre воодушевила блистательная карьера и упорные тренировки баскетболиста LeBron James.
					</div>
				</div>
			</div>
		</div>
		<div class="item_other">
			<div class="full_tech">
				<strong>Полные технические характеристики:</strong>
				<ul class="full_tech_list">
					<li><span>Сопротивление (impedance):</span><span class="data">16 Ω</span></li>
					<li><span>Батарея (мАч):</span><span class="data">150</span></li>
					<li><span>Рабочее расстояние:</span><span class="data">до 10 м</span></li>
					<li><span>Частотный диапазон:</span><span class="data">20 Гц-20 кГц</span></li>
					<li><span>Микрофон:</span><span class="data">есть</span></li>
					<li><span>Возможность принимать звонки:</span><span class="data">имеется</span></li>
					<li><span>Время зарядки (ч):</span><span class="data">1</span></li>
					<li><span>Время в режиме прослушивания музыки (ч):</span><span class="data">6</span></li>
					<li><span>Время в режиме разговора (ч):</span><span class="data">6</span></li>
					<li><span>Время в режиме ожидания (ч):</span><span class="data">150</span></li>
					<li><span>Вес (гр):</span><span class="data">24</span></li>
				</ul>
			</div>
			<div class="full_desc">
				<div class="full_desc_l">
					<strong class="fdl_perf">Преимущества наушников Beats PowerBeats 2 Wireless:</strong>
					<ul class="fdl_perf_list">
						<li>Разработаны при участии баскетболиста NBA Леброна Джеймса.</li>
						<li>Фирменное звучание Beats с насыщенными басами.</li>
						<li>Беспроводное подключение к любым аудио устройствам по средствам Bluetooth.</li>
						<li>Регулируемое заушное крепление, позволяющее использовать наушники при занятии спортом.</li>
						<li>Защита наушников от попадания пота и влаги.</li>
						<li>Раздельные динамики для средних и низких частот для качественного звучания.</li>
						<li>Встроенный микрофон.</li>
					</ul>
					<strong class="full_othertext">Созданы специально для занятий спортом</strong>
					Наушники PowerBeats 2 подходят для занятия практическим любым видом спорта, включая экстремальные. Регулируемые гибкие душки надежно держат наушники – они не свалится при прыжках, во время бега или от резкого поворота головы.
					<strong class="full_othertext">Эксклюзивные технологии Beats для непревзойденного звучания</strong>
					Благодаря технологиям Beats достигается ясный и объемный звук, плотный бас, плавная передача вокала и четкие высокие частоты.
				</div>
				<div class="full_desc_r">
					<strong class="full_othertext">Наслаждайтесь музыкой и следите за тем, что происходит вокруг</strong>
					В наушниках PowerBeats 2 вы можете работать, стрелять, бегать в парке или нестись на велосипеде максимально безопасно. Конструкция динамиков позволяет слышать все, что происходит вокруг.
					<strong class="full_othertext">Beats PowerBeats работают в любых условиях</strong>
					Прочность и долговечность наушников проверена в самых экстремальных ситуациях. Защита от ультрафиолета позволяет использовать их в самую жаркую погоду.
					<strong class="full_othertext">Без проводов и без потерь</strong>
					Благодаря фирменной технологии Beats и последним разработкам в области технологии BlueTooth, наушники PowerBeats 2 Wireless позволяют передавать звук «по воздуху» без потери качества во всем диапазоне.
					<strong class="full_othertext">Встроенный микрофон</strong>
					PowerBeats 2 можно использовать в качестве гарнитуры для телефона. Функция ControlTalk позволяет совершать звонки с помощью встроенного микрофона.
				</div>
			</div>
		</div>
		<div class="comments">
			<h2>Отзывы</h2>
			<div class="comment" id="comment_0">
				<span class="user">Анатолий, 19.12.2015</span> <span class="rating r_5">Оценка 5</span>
				<p>Не ожидал что качество будет настолько хорошей для реплики! Спасибо за оперативную доставку! Мои рекомендации!</p>
			</div>
			<div class="comment" id="comment_1">
				<span class="user">Мария Сысоева, 1.11.2015</span> <span class="rating r_5">Оценка 5</span>
				<p><br>Очень стильные и качественные!!звук отменный!!Спасибо за оперативную доставку!</p>
			</div>
		</div>
		<div class="add_comment">
			<h2>Добавить отзыв</h2>
			<form action="addcomment.php">
				<input type="text" class="add_comment_name" placeholder="Ваше имя" name="comment_name">
				<div class="rating_line">
					Ваша оценка:
					<input type="radio" class="rg" id="r0_1" name="add_comment_rating">
					<label for="r0_1"><div class="rating_0 r_1">&nbsp;</div></label> |
					<input type="radio" class="rg" id="r0_2" name="add_comment_rating">
					<label for="r0_2"><div class="rating_0 r_2">&nbsp;</div></label> |
					<input type="radio" class="rg" id="r0_3" name="add_comment_rating">
					<label for="r0_3"><div class="rating_0 r_3">&nbsp;</div></label> |
					<input type="radio" class="rg" id="r0_4" name="add_comment_rating">
					<label for="r0_4"><div class="rating_0 r_4">&nbsp;</div></label> |
					<input type="radio" class="rg" id="r0_5" name="add_comment_rating">
					<label for="r0_5"><div class="rating_0 r_5">&nbsp;</div></label>
				</div>
				<textarea name="comment_text" class="add_comment_text" placeholder="Ваш отзыв" rows="4"></textarea>
				<button type="submit" class="btn_yellow">Добавить отзыв</button>
			</form>
		</div>
		<div class="order" id="buy">
			<h2>Тестовая форма</h2>
			<form action="new_order_pickup.php">
				<table class="order_tbl">
					<tr>
						<td><label for="order_name">ФИО</label></td>
						<td>
							<input type="text" id="order_name" placeholder="Введите ФИО" class="order_input">
							<span class="help_1">Да, нужно ввести ФИО</span>
						</td>
					</tr>
					<tr>
						<td><label for="order_phone">Телефон</label></td>
						<td>
							<input type="text" id="order_phone" placeholder="+7 903 999 99 99" class="order_input">
							<span class="help_2">А сюда нужно ввести телефон</span>
						</td>
					</tr>
					<tr>
						<td><label for="order_email">Ваш e-mail<i class="req">*</i></label></td>
						<td>
							<input type="e-mail" id="order_email" placeholder="test@example.ru" class="order_input" required="required">
							<span class="help_3">Внимание! Введя электронную почту, к которой у Вас нет доступа вы не сможете подтвердить заказ.</span>
						</td>
					</tr>
					<tr>
						<td><label for="order_other">Укажите дополнительную информацию<i class="req">*</i></label></td>
						<td>
							<textarea name="order_other" id="order_other" rows="3" class="order_input" placeholder="Введите сюда, то, с чем вы считаете нам необходимо ознакомиться"></textarea>
						</td>
					</tr>
					<tr>
						<td> </td>
						<td>
							<textarea name="order_trash_1" id="order_trash_1" rows="3" class="order_input" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis dolorem delectus ad officia odio aperiam qui. Temporibus magni quisquam molestias dolore tempora dolores delectus laudantium modi excepturi nisi numquam nemo, id dolorem dicta hic consequatur aliquam tempore nam, necessitatibus illum est sit? Ex odit quo reprehenderit minima vero officia. Accusantium iusto asperiores excepturi aspernatur voluptates itaque, cupiditate fugit accusamus architecto possimus, corporis. Quam minima eius enim quo facere. Rem, laborum!"></textarea>
							<span class="help_3">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</span>
						</td>
					</tr>
					<tr>
						<td>Quo vadis?</td>
						<td class="trash_2">
							<input type="radio" class="radio_control" id="rc_0" name="order_trash_2" value="Veni" checked="checked">
							<label for="rc_0"><div class="rcview"> </div> Veni</label>
							<input type="radio" class="radio_control" id="rc_1" name="order_trash_2" value="Vidi">
							<label for="rc_1"><div class="rcview"> </div> Vidi</label>
							<input type="radio" class="radio_control" id="rc_2" name="order_trash_2" value="Vici">
							<label for="rc_2"><div class="rcview"> </div> Vici</label>
							<input type="radio" class="radio_control" id="rc_3" name="order_trash_2" value="Errare Humanum est">
							<label for="rc_3"><div class="rcview"> </div> Errare Humanum est</label>
							<div class="tab">
								<input type="checkbox" class="checkbox_control" id="cc_0" name="order_trash_3" checked="checked">
								<label for="cc_0"><div class="ccview"> </div> Temporibus autem quibusdam et aut officiis debitis aut rerum<i class="req">*</i></label>
							</div>
						</td>
					</tr>
				</table>
				<h2>Выбор доставки</h2>
				<div class="del-select">
					<input type="radio" class="radio_control" id="del-courier" name="order_delivery" value="courier">
					<label for="del-courier" onclick="delivery('courier');"><div class="rcview"> </div> Курьером</label>
					<input type="radio" class="radio_control" id="del-pickup" name="order_delivery" value="pickup" checked="checked">
					<label for="del-pickup" onclick="delivery('pickup');"><div class="rcview"> </div> Самовывоз</label>
				</div>
				<div id="form-pickup" class="">
					<h2>Самовывоз заказа</h2>
					<table class="order_tbl">
						<tr>
							<td> </td>
							<td>
								<select name="order_point" id="order_point" class="order_input">
									<option value="NULL" selected="selected" disabled>Выберите пункт самовывоза</option>
									<option value="pickup_point_0">м. Невский проспект</option>
									<option value="pickup_point_1">м. Пушкинская</option>
									<option value="pickup_point_2">м. Московская</option>
									<option value="pickup_point_3">м. Купчино</option>
								</select>
							</td>
						</tr>
						<tr>
							<td> </td>
							<td>
								<textarea name="order_trash_3" id="order_trash_3" rows="3" class="order_input" placeholder="Вы удивлены почему часть анкеты написана на латыни?"></textarea>
							</td>
						</tr>
					</table>
				</div>
				<div id="form-courier" class="hidden">
					<h2>Доставка курьером</h2>
					<table class="order_tbl">
						<tr>
							<td> </td>
							<td>
								<input type="text" name="order_place_street" placeholder="Улица" class="order_input">
							</td>
						</tr>
						<tr>
							<td> </td>
							<td>
								<input type="text" name="order_place_house" placeholder="Дом" class="order_input">
							</td>
						</tr>
						<tr>
							<td> </td>
							<td>
								<input type="text" name="order_place_door" placeholder="Подъезд" class="order_input">
							</td>
						</tr>
						<tr>
							<td> </td>
							<td>
								<input type="text" name="order_place_locker" placeholder="Домофон" class="order_input">
							</td>
						</tr>
						<tr>
							<td> </td>
							<td>
								<input type="text" name="order_place_floor" placeholder="Этаж" class="order_input">
							</td>
						</tr>
						<tr>
							<td> </td>
							<td>
								<input type="text" name="order_place_apart" placeholder="Квартира" class="order_input">
							</td>
						</tr>
						<tr>
							<td> </td>
							<td>
								<input type="text" name="order_place_build" placeholder="Корпус или строение" class="order_input">
								<span class="help_1">(если есть)</span>
							</td>
						</tr>
						<tr>
							<td> </td>
							<td>
								<textarea name="order_trash_3" id="order_trash_3" rows="3" class="order_input" placeholder="Вы удивлены почему часть анкеты написана на латыни?"></textarea>
							</td>
						</tr>
					</table>
				</div>
				<button class="pull-right btn_round">Вперед →</button>
			</form>
		</div>
	</main>
	<script type="text/javascript" src="js/delivery.js"></script>
	<script>
		delivery('pickup');
	</script>
</body>
</html>