<?php

echo "<H1>DATA DIRI:</H1>";
foreach($_REQUEST as $name => $value){

  if (is_array($value)) {

    echo "$name:<br />";



    $items = $value; 

    foreach ($items as $item) {

      echo "  $item<br />";
      echo "<br>";

    }

  } else {

    echo "$name: $value<br />";

  }
 
 if (empty($name='nama[]')) {
   header("Location:input.php?error=namakosong");
 }
 if (is_numeric($name='nama[]')) {
   die ("maaf nama harus berupa huruf");
 }
}







$file=$_FILES['dokumen'];
$nama_file =$file['name'];
$nama_tmp =$file['tmp_name'];
$upload_dir="upload/";
move_uploaded_file($nama_tmp, $upload_dir.$nama_file);





?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<img width=500px src="<?php echo $upload_dir .$nama_file;?>">

<a href="input.php"><input type="submit" name="hapus" value="hapus"></a>
</body>
</html>

