<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$Username = $_POST['username'];
$Password = $_POST['password'];
$Fullname = $_POST['fullname'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$position = $_POST['position'];

$staffID = $_POST['staffID'];
$schoolID = $_GET['idschool'];

$sql=mysqli_query($koneksi,"insert into user values('','$Username','$Password','$Fullname','$Email','$Phone','schooladmin')");
$sqla=mysqli_query($koneksi,"SELECT 'userID' FROM user");
$idUser = mysqli_num_rows($sqla);
echo $idUser;
$sql2=mysqli_query($koneksi,"insert into schooladmin values('$staffID','$position','$schoolID','$idUser')");
if ($sql) {
		header("location:index.php");
}else{
echo "<script>alert('Gagal');
	location.href='#'</script>";
}
 
?>