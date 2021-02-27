<?php

	//Retrieving the data from html
	$pay_amt = $_REQUEST["pay_amt"];
	$date_due = $_REQUEST["date_due"];
	$stud_id = $_REQUEST["stud_id"];

	
	//connect to database
	include "dbcon.php";

	//prepare the query
	$qry = "insert into payment_tbl (pay_amt, date_due, stud_id) values('$pay_amt','$date_due','$stud_id')";

	//execute the query
	mysqli_query($con, $qry);

	echo "<script>alert('Payment Details Added Successfully'); location='adm_insert_pay.php';</script>";



