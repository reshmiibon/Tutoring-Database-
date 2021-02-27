<?php include "page_header.php"; ?>
<div id="page_title">
	Due Payments
</div>
<table class="tbl" border="1" width="700px">
	<thead>
		<tr>
			<th>Date Due</th>
			<th>Pay Amount ($)</th>
			<th>Status</th>
		</tr>
	<thead>
	<tbody>

<?php
	include "dbcon.php";

	$qry = "select p.date_due, p.pay_amt, p.status from payment_tbl p ,stud_tbl s where p.stud_id=s.stud_id and p.status='Due' and s.stud_id=".$_SESSION["id"];

	
	$res = mysqli_query($con,$qry);
	while($row = mysqli_fetch_array($res))
	{
?>
		<tr>
			<td><?php echo $row[0]; ?></td>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
		</tr>
<?php
	}
?>
	</tbody>
</table>
<?php include "page_footer.php"; ?>