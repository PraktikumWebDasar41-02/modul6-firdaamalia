
Nama<input type="text" name="nama"><br>
Nim<input type="text" name="nim"><br>

<input type="submit" name="submit" value="submit">

</form>

<?php 
if(isset($_POST['submit'])){
	session_start();
	$nama =$_POST['nama'];
	$nim =$_POST['nim'];

	if($nama = $_SESSION['nama'] || $nim = $_SESSION['nim']){
		header("location: tampil.php");
	}

}else{
	echo "Login Error";
}




 ?>


