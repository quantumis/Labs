<?php $a;$b;$chet;$chis;$simple;$temp;$scale1;$scale2; ?>

<h1>Lab #1</h1>
<h2>Task #1</h2>
<br>
<form name="form" method="GET">
	<input name="first" id="first" type="number">
	<input name="second" id="second" type="number">
	<input type="submit">
</form>

<?php
	if(isset($_GET["first"]) && isset($_GET["second"])){
		$a = $_GET["first"];
		$b = $_GET["second"];

		if($a<$b){echo $a;}else{echo $b;}
	}
?>

<br><br>
<h2>Task #2</h2>
<form name="form" method="GET">
	<input name="chet" id="chet" type="number">
	<input type="submit">
</form>

<?php
	if(isset($_GET["chet"])){
		$chet = $_GET["chet"];

		if($chet%2==0){echo "Четное";}else{echo "Нечетное";}
	}
?>

<br><br>
<h2>Task #3</h2>
<form name="form" method="GET">
	<input name="chis" id="chis" type="number">
	<input type="submit">
</form>

<?php
	if(isset($_GET["chis"])){
		$chis = $_GET["chis"];

		if(is_numeric($chis)){
			if($chis<0){echo "Отицательное число";}
			if($chis==0){echo "Нуль";}
			if($chis>0){echo "Положительное число";}
		}else{
			echo "Введено не число";
		}
	}
?>

<br><br>
<h2>Task #4-5</h2>
<form name="form" method="GET">
	<input name="simple" id="simple" type="number">
	<input type="submit">
</form>

<?php 
	if(isset($_GET["simple"])){
		$simple = $_GET["simple"];

		if(is_simple($simple)){echo "Простое чило";}else{echo "Не простое число";}
	}
?>

<br><br>
<h2>Task #6</h2>
<form name="form" method="GET">
	<input name="temp" id="temp" type="number">
	<select name="scale1" id="scale1">
		<option value="Цельсия">Цельсия</option>
		<option value="Фаренгейта">Фаренгейта</option>
	</select>
	<select name="scale2" id="scale2">
		<option value="Цельсия">Цельсия</option>
		<option value="Фаренгейта">Фаренгейта</option>
	</select>
	<input type="submit">
</form>

<?php
	if(isset($_GET["temp"]) && isset($_GET["scale1"]) && isset($_GET["scale2"])){
		$temp = $_GET["temp"];
		$scale1 = $_GET["scale1"];
		$scale2 = $_GET["scale2"];

		temp_convert($temp, $scale1, $scale2);
	}
?>

<?php
//Functons

function is_simple($simple){
	if($simple*$simple%24 == 1 || $simple==1 || $simple==2 || $simple==3){return true;}else{return false;}
}

function temp_convert($temp, $scale1, $scale2){
	if($scale1 == $scale2){echo $temp;}
	if($scale1 == "Цельсия" && $scale2 == "Фаренгейта"){echo 1.8*$temp+32;}
	if($scale1 == "Фаренгейта" && $scale2 == "Цельсия"){echo ($temp - 32)/1.8;}
}

?>