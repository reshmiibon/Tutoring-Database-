<?php include "page_header.php"; ?>
<div id="page_title">
	 Update Payment Details
</div>
<table class="tbl" border="1" width="700px">
	<thead>
		<tr>
			<th>Stud Id</th>
			<th>Full Name</th>
			<th>Date Due</th>
			<th>Pay Amount</th>
			<th>Paid</th>

		</tr>
	<thead>
	<tbody>

<?php
	include "dbcon.php";
	
	$qry = "select p.stud_id, s.full_name, p.date_due, p.pay_amt, p.pay_id from payment_tbl p ,stud_tbl s where p.stud_id=s.stud_id and p.status='Due'";
	
	$res = mysqli_query($con,$qry);
	while($row = mysqli_fetch_array($res))
	{
?>
		<tr>
			<td><?php echo $row[0]; ?></td>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
			<td><?php echo $row[3]; ?></td>
			<td><a href='adm_paid_payments_prc.php?pay_id=<?php echo $row[4]; ?>'>
			<i class="icon-signin"></i> Paid</a></td>
		</tr>
<?php
	}
?>
	</tbody>
</table>
