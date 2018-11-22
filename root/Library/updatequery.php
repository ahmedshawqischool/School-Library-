<?php

/* الاتصال بقاعدة البيانات */
include('connect.php');

/* جملة الاستعلام*/
$sql = "update  books_pc2  set 
title_book='$_REQUEST[title_book]',
doe_book = '$_REQUEST[id_book]',
copies_book = '$_REQUEST[copies_book]'
where id_book='$_REQUEST[id_book]'";

/* تنفيذ الاستعلام */
mysqli_query($con,$sql) or die("Error query!");

/* نتيجة الاستعلام */
echo mysqli_affected_rows($con)."Record Updated ";
 
/* غلق الاتصال بقاعدة البيانات */
mysqli_close($con);

?>
