<?php
// إستقبال البيانات القادمة من الحقول في صفحة task1.html.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["user_name"];
$email = $_POST["email"];

}

// معلومات الإتصال بقاعدة البيانات

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "control_panel";

// إنشاء الإتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);
// إختبار الإتصال
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO mytable (user_name, email)
VALUES ('$name', '$email')";

if (mysqli_query($conn, $sql)) {
echo "تم إرسال معلومات بنجاح";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>