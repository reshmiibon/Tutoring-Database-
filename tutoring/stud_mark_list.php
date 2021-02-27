<?php include "page_header.php"; ?>
<div id="page_title">
	Student Marks 
</div>
<table class="tbl" border="1" width="700px">
	<thead>
		<tr>
			<th>Subject</th>
			<th>Test Date</th>
			<th>Test Name</th>
			<th>Test Mark (%)</th>
		</tr>
	<thead>
	<tbody>

<?php
	include "dbcon.php";

	$qry = "select m.subject, m.mark_date, m.test_name, m.test_mark from marks_tbl m ,stud_tbl s where m.stud_id=s.stud_id and s.stud_id=".$_SESSION["id"];

	$res = mysqli_query($con,$qry);
	while($row = mysqli_fetch_array($res))
	{
?>
		<tr>
			<td><?php echo $row[0]; ?></td>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
			<td><?php echo $row[3]; ?></td>
		</tr>
<?php
	}
?>
	</tbody>
</table>
