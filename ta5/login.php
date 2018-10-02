<?php
if (isset($_GET['error']))
{
$error=$_GET['error'];
}
else
{
$error="";
}

$pesan="";
if ($error=="setvariabel")
{
$pesan="anda harus mengakses halaman ini dari login.php";
}
if ($error=="namakosong")
{
$pesan=" nama atau password harus diisi";
}
if ($error=="harushuruf")
{
$pesan=" nama harus berupa huruf";
}
if($error=="kelebihan")
{
	$pesan="kelebihan huruf";
}
?>
  
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>input</title>
</head>
<body >

<?php
echo $pesan;
?>
<h2>Login</h2>
<form action="proses.php" method="get">


	<table>

<tr><td>Nama<td>: <td><input type="text" name="nama" />
<tr><td>password<td>: <td><input type="password" name="password" />

<tr><td><input type="submit" value="masuk" >

</form>
</body>
</html>