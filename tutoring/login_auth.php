<?php

	session_start();
	
	//Get the date from HTML form
	$uname = $_REQUEST["uname"];
	$upass = $_REQUEST["upass"];
		
	if($uname=="admin" and $upass=="admin")
	{

		$_SESSION["usertype"] = "admin";
		$_SESSION["name"] = "Admin";
		//redirect to home page
		header('location:admin_home.php'); 
	}
	
	else
	{
		//connect to the database
		include "dbcon.php";
		
		//prepare the query to check the username and password availability in database
		$qry = "select stud_id, full_name from stud_tbl where username='$uname' and password='$upass'";
		
		//execute the query
		$res = mysqli_query($con, $qry);
		if(mysqli_num_rows($res) > 0) // if  username and pass matches then the records will be pulled and mysqli_num_rows will be 1
		{
			$_SESSION["usertype"] = "stud";
			
			$row = mysqli_fetch_array($res);
			
			$_SESSION["id"] = $row[0];
			$_SESSION["name"] = $row[1];
			header("location:stud_home.php");
		
		// if  username and pass isnt matched mysqli_num_rows will = 0 
		}
		else
		{
			echo "<script>alert('Invalid Login Credentials'); location='index.php';</script>";
		}
	}
	

	