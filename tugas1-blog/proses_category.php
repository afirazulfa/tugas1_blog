<?php
require_once "inc/config.php"

$category = new category();

if ($_POST['tsimpan']) {
	$category->input();
	header("location:index.php?page=category_tampil");
}

if ($_POST['tedit']) {
	$category->update();
	header("location:index.php?page=category_tampil");
}

if ($_GET['delete-id']) {
	$category->delete($_GET['delete-id']);
	header('location:index.php?page=category_tampil');
}

?>