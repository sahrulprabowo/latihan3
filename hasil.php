<html>
<head>
<title>Hasil Kalkulator</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body background="masjid3.jpg">
	<br>
	<h1 style="color: white">Hasil Kalkulator</h1>

	<form>		
	<?php
	$angka1 = $_GET['angka1'];
	$angka2 = $_GET['angka2'];
	$operator = $_GET['operator'];

	if($operator == '+'){
		$hasil = $angka1 + $angka2;
	}else if($operator == '-'){
		$hasil = $angka1 - $angka2;

	}else if($operator == '/'){
		$hasil = $angka1 / $angka2;

	}else if($operator == '*'){
		$hasil = $angka1 * $angka2;
	}
	echo $angka1 . $operator . $angka2 . '=' . $hasil;
	?>
	<p></p>
	<a href="index.html">Kembali</a>
	<a type="button" onclick="return window.print();">Cetak</a>
</form>
</body>
</html>