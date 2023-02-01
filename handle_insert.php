<?php
$name = $_POST['name'];
$fname = $_POST['fname'];
$education = $_POST['education'];
$sect = $_POST['sect'];
$nation = $_POST['nation'];



$connection = mysqli_connect("localhost","root","","faisalcom");
$query = "INSERT INTO worker values (null,'$name','$fname','$education','$sect','$nation')";
mysqli_query($connection,$query);


echo "<h1>data insert</h1>";
echo "<button><a href='index.php'>add more data</a></button>";



?>