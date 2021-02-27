<nav>
	<?php
	if($_SESSION['usertype']=="admin") {
	?>
	<a href="admin_home.php"><i class="icon-home"></i> Home</a>
	<a href="adm_add_marks.php"><i class="icon-book"></i> Add Marks</a>
	<a href="adm_insert_pay.php"><i class="icon-arrow-right"></i> Insert Payment Details</a>
	<a href="adm_due_payments_list.php"><i class="icon-arrow-right"></i> View Due Payments</a>
	<a href="adm_paid_payments.php"><i class="icon-arrow-right"></i> Update Paid Payments</a>
	<a href="adm_paid_payments_list.php"><i class="icon-arrow-right"></i> View Paid Payments</a>
	<a href="adm_view_stud.php"><i class="icon-user"></i> View Students</a>
	<a href="index.php"><i class="icon-off"></i> Log Out</a>
	<?php
		}
		else
		{
	?>
	
	<a href="stud_home.php"><i class="icon-home"></i> Home</a>
	<a href="stud_profile.php"><i class="icon-user"></i> <?php echo $_SESSION['name']; ?>'s Details</a>
	<a href="stud_mark_list.php"><i class="icon-book"></i> View Marks</a>
	<a href="stud_paid_payments_list.php"><i class="icon-book"></i> View Paid Payments</a>
	<a href="stud_due_payments_list.php"><i class="icon-book"></i> View Due Payments</a>
	<a href="index.php"><i class="icon-off"></i> Log Out</a>

	<?php
		}
	?>
</nav>