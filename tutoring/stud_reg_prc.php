<?php
	
	//Retrieving the data from html
	$stud_id = $_REQUEST["stud_id"];
	$full_name = $_REQUEST["full_name"];
	$phone = $_REQUEST["phone"];
	$grade = $_REQUEST["grade"];
	$school = $_REQUEST["school"];
	$uname = $_REQUEST["uname"];
	$upass = $_REQUEST["upass"];

	
	//connect to database
	include "dbcon.php";
	
	//prepare the query
	$qry = "insert into stud_tbl values($stud_id,'$full_name','$phone','$grade','$school','$uname','$upass')";
	
	//execute the query
	mysqli_query($con, $qry);
	
	echo "<script>alert('Registration Success'); location='index.php';</script>";
	
	
	
	