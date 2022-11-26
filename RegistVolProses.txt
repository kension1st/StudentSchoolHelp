<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$Username = $_POST['username'];
$Password = $_POST['password'];
$Fullname = $_POST['fullname'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Occupation = $_POST['occupation'];
$DateOfBirth = $_POST['dateofbirth'];

$sql=mysqli_query($koneksi,"insert into user values('','$Username','$Password','$Fullname','$Email','$Phone','volunteer')");
$sqla=mysqli_query($koneksi,"select * from user where username='$Username' and password='$Password'");
$query=mysqli_fetch_array($sqla);
$cek = $query['userID'];
$sql2=mysqli_query($koneksi,"insert into volunteer values('$DateOfBirth','$Occupation','$cek')");
if ($sql) {
    echo "<script>alert('Success Register');
	location.href='login.php'</script>";
}else{
echo "<script>alert('Gagal');
	location.href='Regvolunteer.php'</script>";
}
 
?>