<?php

	//Retrieving the data from html
	$pay_id = $_REQUEST["pay_id"];
	

	//connect to database
	include "dbcon.php";

	//prepare the query
	$qry = "update payment_tbl set status='Paid' where pay_id=$pay_id";

	//execute the query
	mysqli_query($con, $qry);

	echo "<script>alert('Book Returned Successfully'); location='adm_paid_payments_list.php';</script>";



