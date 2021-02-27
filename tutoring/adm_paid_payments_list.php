<?php include "page_header.php"; ?>
<div id="page_title">
	 Paid Payment Details
</div>
<table class="tbl" border="1" width="700px">
	<thead>
		<tr>
			<th>Stud Id</th>
			<th>Full Name</th>
			<th>Date Due</th>
			<th>Pay Amount</th>
			<th>Status</th>

		</tr>
	<thead>
	<tbody>

<?php
	include "dbcon.php";
	
	$qry = "select p.stud_id, s.full_name, p.date_due, p.pay_amt, p.status from payment_tbl p ,stud_tbl s where p.stud_id=s.stud_id and p.status='Paid'";
	
	$res = mysqli_query($con,$qry);
	while($row = mysqli_fetch_array($res))
	{
?>
		<tr>
			<td><?php echo $row[0]; ?></td>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
			<td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>
		</tr>
<?php
	}
?>