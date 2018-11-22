<?php
/* الاتصال بقاعدة البيانات */
include('connect.php');

/* جملة الاستعلام*/
$sql="insert into books_pc2 values('$_REQUEST[id_book]','$_REQUEST[title_book]','$_REQUEST[doe_book]','$_REQUEST[copies_book]')";

/* تنفيذ الاستعلام */
mysqli_query($con,$sql) or die("Error query!");

/* نتيجة الاستعلام */
echo"Record Inserted =". mysqli_affected_rows($con) ;
 
/* غلق الاتصال بقاعدة البيانات */
mysqli_close($con);
?>
