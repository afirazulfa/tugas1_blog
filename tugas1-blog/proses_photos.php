<?php
require_once "inc/config.php";

$photos = new photos();

if ($_POST['tsimpan']) {
	$photos->input();
	header("location:index.php?page=photos_tampil");
}

if ($_POST['tedit']) {
	$photos->update();
	header("location:index.php?page=photos_tampil");
}

if ($_GET['delete-id']) {
	$photos->delete($_GET['delete-id']);
	header('location:index.php?page=photos_tampil');
}

?>