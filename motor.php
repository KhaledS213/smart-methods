<?php
// indexإستقبال البيانات القادمة من الحقول في صفحة 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$r1 = $_POST["range1"];
$r2 = $_POST["range2"];
$r3 = $_POST["range3"];
$r4 = $_POST["range4"];
$r5 = $_POST["range5"];
$r6 = $_POST["range6"];

}

// معلومات الإتصال بقاعدة البيانات

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "index";

// إنشاء الإتصال

$conn = mysqli_connect($servername, $username, $password, $dbname);
// إختبار الإتصال
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$_POST['save'];
$sql = "INSERT INTO mytable (range1,range2,range3,range4,range5,range6)
VALUES ('$s1','$s2','$s3','$s4','$s5','$s6')";

if (mysqli_query($conn, $sql)) {
echo "تم إرسال معلومات بنجاح";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>