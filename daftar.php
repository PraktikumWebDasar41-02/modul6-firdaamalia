
<form method="post">
	Nama:<br><input type="text" name="nama"><br>

	NIM:<br><input type="text" name="nim"><br>

	Kelas: <br>
	<input type="radio" name="kelas[]" value="4101">MI4101<br>
	<input type="radio" name="kelas[]" value="4102">MI4102<br>
	<input type="radio" name="kelas[]" value="4103">MI4103<br>
	<input type="radio" name="kelas[]" value="4104">MI4104<br>

	Jenis Kelamin:
	<input type="radio" name="jenis[]" value="laki-laki">laki-laki
	<input type="radio" name="jenis[]" value="perempuan">perempuan<br>

	Hobi: <br>
	<input type="checkbox" name="hobi[]" value="renang">Renang<br>
	<input type="checkbox" name="hobi[]" value="membaca">Membaca<br>
	<input type="checkbox" name="hobi[]" value="traveling">Traveling<br>
	<input type="checkbox" name="hobi[]" value="menulis">Menulis<br>

	Fakultas<select name="fakultas">
	<option>==Pilih==</option>
	<option value="fit">FIT</option>
	<option value="fte">FTE</option>
	<option value="fri">FRI</option>
	<option value="fi">FI</option>
	</select><br><br>

	Alamat:<br>
	<textarea name="alamat"></textarea><br>

	<input type="submit" name="submit" value="submit">

</form>




<<?php 
$conek=mysqli_connect("localhost", "root","","ta_firda");

if(isset($_POST['submit'])){
	session_start();
	
	
	
	$nim   =$_POST['nim'];
	$nama  =$_POST['nama'];
	$kelas =$_POST['kelas'];
	$jenis =$_POST['jenis'];
	$hobi  =$_POST['hobi'];
	$fakultas =$_POST['fakultas'];
	$alamat=$_POST['alamat'];



	$database = "INSERT INTO jurnal (nim,nama,kelas,jenis,hobi,fakultas,alamat) VALUES('$nim','$nama','$kelas','$jenis','$hobi','$fakultas','$alamat')";
	$qr=mysqli_query($conek,$database);

	if(strlen($nama)>=30){
		echo "nama  harus 30 karakter";
	}else{
		echo"";
	}


	if(strlen($nim)!=10){
		echo"nim anda tidak valid";
	}else{
		echo"";
	}


	if($qr){
		echo "data berhasil di inputkan";
		header("Location: lgn.php");
	}else{
		echo "data tidak berhasil di inputkan";
	}


	
	
	$_SESSION['nim'] = $nim;
	$_SESSION['nama'] = $nama;
	$_SESSION['kelas'] = $nama;
	$_SESSION['jenis'] = $nama;
	$_SESSION['hobi'] = $hobi;
	$_SESSION['fakultas'] = $fakultas;
	$_SESSION['alamat'] = $alamat;
}

 ?>