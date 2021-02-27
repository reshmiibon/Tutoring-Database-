<?php include "page_header.php"; ?>

<?php 

	include "dbcon.php";
	$qry = "select stud_id, full_name from stud_tbl";
	$stud_res = mysqli_query($con, $qry);
	
	$mark_date = date('Y-m-d');
?>
	<form action="adm_add_marks_prc.php" method="post" enctype="multipart/form-data">
		<table width="380px" style="margin:50px auto;border:5px double black;">
			<tr><th colspan=2> <i class="icon-book"></i> Add Student's Marks </th></tr>
			<tr><td colspan=2><hr></td></tr>


<tr><td>Stud Id </td><td> : 
			<select name="stud_id">
				<option value="0">Select</option>

			<?php
				while($srow = mysqli_fetch_array($stud_res))
				{
					echo "<option value='".$srow[0]."'> $srow[0] : $srow[1] </option>";
				}
			?>
			</select>
			</td><tr>
				
			<tr><td>Subject </td><td> : <select name="subject">
				<option>Math</option>
				<option>English</option>
				<option>Science</option>
			</td></tr>
			<tr><td>Test Name </td><td> : <input type="text" name="test_name"></td></tr>
			<tr><td>Test Mark (%) </td><td> : <input type="text" name="test_mark"></td></tr>
			<tr><td>Test Date </td><td> : <input type="date" name="mark_date" value="<?php echo $mark_date; ?>"></td></tr>

			<tr><td colspan=2 class="center">
				<button type="submit" class="btn_red"> 
					<i class="icon-ok"></i> Insert Mark Details
				</button>
			</td></tr>


			
			

			
		</table>
	</form>
	
