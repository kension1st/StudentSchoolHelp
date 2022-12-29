<?php 
session_start();
// koneksi database
include 'koneksi.php';
 
// get data
$remarks = $_POST['remarks'];
$OfferDate = date("Y/m/d");

$requestID = $_GET['requestID'];

$userID=$_SESSION['userID'];

$sql=mysqli_query($koneksi,"insert into offer values('','$OfferDate','$remarks','PENDING','$requestID','$userID')");
if ($sql) {
		header("location:index.php");
}else{
echo "<script>alert('Gagal');
	location.href='#'</script>";
}
 
?>