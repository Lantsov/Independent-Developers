<?php
include_once 'connect.php';
if (isset($_POST['order_delivery'])) {
	$order->name = $_POST['order_name'];
	$order->phone = $_POST['order_phone'];
	$order->mail = $_POST['order_email'];
	$order->other = $_POST['order_other'];
	if ($_POST['order_delivery'] == 'pickup') {
		$order->point = $_POST['order_point'];
		$dbh = new PDO('mysql:host=localhost;dbname=task2;charset=utf8', $db_user, $db_pass);
		try {
			$dbh->beginTransaction();
			$dbh->exec("insert into pickup (name, phone, mail, other, point) values ('$order->name', '$order->phone', '$order->mail', '$order->other', '$order->point')");
			$dbh->commit();
			echo "3";
		} catch (Exception $e) {
			$dbh->rollBack();
			echo "Ошибка: " . $e->getMessage();
		};
		header("Location:order.php?ok=true");
	} else {
		$order->adress = $_POST['order_place_street'].', '.$_POST['order_place_house'].', '.$_POST['order_place_door'].', '.$_POST['order_place_locker'].', '.$_POST['order_place_floor'].', '.$_POST['order_place_apart'].', '.$_POST['order_place_build'];
		$dbh = new PDO('mysql:host=localhost;dbname=task2;charset=utf8', $db_user, $db_pass);
		try {
			$dbh->beginTransaction();
			$dbh->exec("insert into courier (name, phone, mail, other, adress) values ('$order->name', '$order->phone', '$order->mail', '$order->other', '$order->adress')");
			$dbh->commit();
		} catch (Exception $e) {
			$dbh->rollBack();
			echo "Ошибка: " . $e->getMessage();
		};
		header("Location:order.php?ok=true");
	}
	
};

?>