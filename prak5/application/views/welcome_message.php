<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pweb201</title>


</head>
<body>

	<div id="container">
	<h1>Hello, CodeIgniter!</h1>
	<hr>
	<h2>Ini program pertama saya yang dibuat dengan menggunakan
	PHP Framework CodeIgniter</h2>
	<h1>Link resep makanan</h1>

<a href="<?= base_url()  ?>index.php/resep_pallubasa">Pallubasa</a><br>
<a href="<?= base_url()  ?>index.php/resep_balado">Balado ayam pandan</a><br>
<a href="<?= base_url()  ?>index.php/resep_buntutsapi">Buntut sapi minang</a><br>
<a href="<?= base_url()  ?>index.php/resep_coto">Coto Makassar</a><br>
<a href="<?= base_url()  ?>index.php/resep_gado2">Gado-gado Surabaya</a><br>

</body>
</html>
