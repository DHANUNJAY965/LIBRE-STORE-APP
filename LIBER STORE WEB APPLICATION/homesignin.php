<?php


$servername ="localhost";
$username = "root";
$password = "";
$dbname = "dhanudatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$email = $_POST["email"];
$password = $_POST["password"];
$salt = "dhanudatabase";
$password_encrypted = sha1($password.$salt);


$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE email = '".$email."' and 
	password = '".$password_encrypted."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	?>
	<script>
		let tem = confirm('YOU HAVE LOGGED IN SUCCESSFULY PLEASE CLICK ON OK BUTTON TO MOVE TO THE LIBRE STORE IF NOT PLEASE PRESS CANCLE')
        new Promise((res, rej) => {
            if (tem == true) {
                res(true)
            } else {
                rej(false)
            }
        }).then((v) => {
            window.location.href = 'index3.html'
        }).catch((v) => {
            window.location.href = 'homepage.php'
        })
	</script>
	
	<?php
}
else{
	?>
	<script>
		alert('LOGIN FAILED YOU ENTRED WRONG CREDIENTIALS');
	</script>
	<?php
}
?>