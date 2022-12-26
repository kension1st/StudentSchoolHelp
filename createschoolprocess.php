<?php 
include 'koneksi.php';
 
$name = $_POST['schoolname'];
$address = $_POST['address'];
$city = $_POST['city'];

$sql=mysqli_query($koneksi,"insert into school values('','$name','$address','$city')");
if ($sql) {
		$data = mysqli_query($koneksi,"select * from school where schoolName='$name' and address='$address'");
		$query=mysqli_fetch_array($data);
		$schoolID = $query['schoolID'];
		header("location:newSchooladmin.php?id=$schoolID");
}else{
echo "<script>alert('Gagal');
	location.href='CreateNewSchool.php'</script>";
}
 
?>