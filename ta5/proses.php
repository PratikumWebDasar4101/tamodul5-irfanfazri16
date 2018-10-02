<?php
if (isset($_GET['nama']) AND isset($_GET['password']))
{
	
$nama=$_GET['nama'];
$password=$_GET['password'];

  
}
else
{
   header("Location:login.php?error=setvariabel");
}
  
if(empty($nama))
{
   header("Location:login.php?error=namakosong");
}  else{



if (empty($password))
{
      header("Location:login.php?error=namakosong");
}

else
{
if (is_numeric($nama))
{
      header("Location:login.php?error=harushuruf");
}






else
{
header("Location:input.php");
}
}



}  
?>