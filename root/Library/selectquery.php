<?php

/* الربط بملف التنسيقات */
echo "<link  href='mainformatting.css'   type='text/css'  rel='stylesheet'>";

/* الاتصال بقاعدة البيانات */
include('connect.php');

/* جملة الاستعلام*/
$sql = "select * from books_pc2 where copies_book >= '$_REQUEST[copies_book]' " ;

/* تنفيذ الاستعلام*/
$result = mysqli_query($con, $sql);


/* نتيجة الاستعلام على شكل جدول */
echo"<table>";

/* ادراج رأس الجدول الذي يحتوي على عناوين الأعمدة */
echo "<tr>
		<th>Book ID</th>
		<th>Book Title</th>
		<th>Date of Editon</th>
		<th>Copies of the Book</th>
	</tr> ";
	

/*  نتيجة الاستعلام - الجملة التكرارية */
while ( $row = mysqli_fetch_array($result) )

{

/*  نتيجة الاستعلام - عرض الحقول المطلوبة */
	echo "<tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td> $row[2] </td> ";
	if ( $row[3] <= 20) { echo "<td style='background-color:darkred'> $row[3] </td>"; }	
	else { echo "<td> $row[3]</td>"; }
	echo "tr";
}


/* اغلاق الجدول */
echo"</table>";

/*  ادراج سطر جديد فارغ */
echo"<br/>";

/*   عدد سجلات  نتيجة الاستعلام */
echo  mysqli_affected_rows($con)  . "= Number Of Selected Records" ;

/* غلق الاتصال بقاعدة البيانات */
mysqli_close($con);


?>