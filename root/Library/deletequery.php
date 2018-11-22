<?php
/* الاتصال بقاعدة البيانات */

include('connect.php');


/* جملة الاستعلام*/

$sql=" delete from books_pc2 where copies_book= '$_REQUEST[copies_book]' " ;


/* تنفيذ الاستعلام */

mysqli_query($con, $sql) or die ("error query");

/* نتيجة الاستعلام */

if(mysqli_affected_rows($con)==0)
  echo " record not found";
else
 echo mysqli_affected_rows($con)."record DELETED successfully ";


/* غلق الاتصال بقاعدة البيانات */
mysqli_close($con);

?>
