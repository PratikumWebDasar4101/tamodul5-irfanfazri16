<?php
if (isset($_POST['error']))
{
$error=$_POST['error'];
}
else
{
$error="";
}

$pesan="";

if ($error=="namakosong")
{
$pesan=" anda harus mengisi nama";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
         


	<form action="data.php" method="post" enctype="multipart/form-data">
		<TABLE>

  Data diri:<br>
  <tr><td>Nama<td>:<td><input type="text" name="Nama[]" >
  <tr><td>Alamat<td>:<td><input type="text" name="Alamat[]" >
  <tr><td>Tgl_lahir<td>:<td><input type="date" name="Tgl_lahir[]" >
  </tr>
  	
  <tr><td>Program Studi<td>:
    <td><select name="Program Studi[]" id="dropdown">
      <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
      <option value="S1 Desain Interior">S1 Desain Interior</option>
      <option value="S1 Ilmu komunikasi">S1 Ilmu komunikasi</option>
    </select></td></td></tr>


  <tr><td>Fakultas<td>:
    <td><select name="Fakultas[]" id="dropdown">
      <option value="FIT">FIT</option>
      <option value="FIK">FIK</option>
      <option value="FKB">FKB</option>
    </select></td></td></tr>






    <tr><td> Hobi<td>:
          <td><input type="checkbox" name="hobi[]" value="nonton">nonton<br>
           <td><input type="checkbox" name="hobi[]" value="futsal">futsal<br></td></td></tr>

    <tr><td> Jenis kelamin<td>:
          <td><input type="radio" name="jenis kelamin[]" value="laki-laki">laki-laki<br>
           <td><input type="radio" name="jenis kelamin[]" value="perempuan">perempuan<br></td></td></tr>
       


 


		<tr><td><input type="file" name="dokumen" id="dokumen"/>
		<tr><td><input type="submit" name="upload" id="upload" value="upload foto">

		</table>
	</form>

</body>
</html>