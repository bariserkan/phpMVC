<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>
	<?php 
		$baslik = "";
		if(!empty(SITE_ADI))
			$baslik = SITE_ADI." - ";
		echo  isset($title) ? $baslik.$title : SITE_ADI;

	 ?>
	</title>
	<link rel="stylesheet" href="<?php echo SURL; ?>/tasarim/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-3">

	<nav class="container">
		<ul class="list-inline">
			<li class="list-inline-item"><a href="<?php echo URL ?>">Ana Sayfa</a></li>
			<li class="list-inline-item"><a href="deneme">Deneme</a></li>
		</ul>
	</nav>
	<hr>
