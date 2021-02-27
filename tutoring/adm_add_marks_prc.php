<?php

	//Retrieving the data from html
	$subject = $_REQUEST["subject"];
	$test_name = $_REQUEST["test_name"];
	$test_mark = $_REQUEST["test_mark"];
	$mark_date= $_REQUEST["mark_date"];
	$stud_id = $_REQUEST["stud_id"];


	//connect to database
	include "dbcon.php";

	//prepare the query
	$qry = "insert into marks_tbl (test_name, test_mark, subject, mark_date,stud_id) values('$test_name','$test_mark','$subject','$mark_date','$stud_id')";
	//echo $qry;
	//execute the query
	mysqli_query($con, $qry);

	

	echo "<script>alert('Mark Details Added Successfully'); location='adm_add_marks.php';</script>";



