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
					<strong>Преимущества наушников Beats PowerBeats 2 Wireless:</strong>
					<ul>
						<li>Разработаны при участии баскетболиста NBA Леброна Джеймса.</li>
						<li>Фирменное звучание Beats с насыщенными басами.</li>
						<li>Беспроводное подключение к любым аудио устройствам по средствам Bluetooth.</li>
						<li>Регулируемое заушное крепление, позволяющее использовать наушники при занятии спортом.</li>
						<li>Защита наушников от попадания пота и влаги.</li>
						<li>Раздельные динамики для средних и низких частот для качественного звучания.</li>
						<li>Встроенный микрофон.</li>
					</ul>
				</div>
				<div class="full_desc_r">
					
				</div>
			</div>








		</div>
	</main>
</body>
</html>