<!DOCTYPE html>
<html>
<head>
<?php
	include('templates/head.html');
?>
</head>
<body>
<?php
	include('templates/navbar.html');
?>
<div class="container" id="container">
   <?php
	include('templates/category.html');
?>
<div class="container" id="container">
<?php
	include('templates/news.php');
?>
</div>
<?php
   include('templates/scripts.html');
?>
</body>
</html>