<?php include "page_header.php"; ?>
<?php
	include "dbcon.php";

	$qry = "select stud_id, full_name from stud_tbl";
	$stud_res = mysqli_query($con, $qry);
	
	$date_due = date('Y-m-d');
?>

	<form action="adm_insert_pay_prc.php" >
		<table width="380px" style="margin:50px auto;border:5px double black;">
			<tr><th colspan=2> <i class="icon-book"></i> Add Payment Details </th></tr>
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
			<tr><td>Payment Amount </td><td> : <input type="text" name="pay_amt"></td></tr>
			<tr><td>Payment Due Date </td><td> : <input type="date" name="date_due" value="<?php echo $date_due; ?>"></td></tr>
			<tr><td colspan=2 class="center">
				<button type="submit" class="btn_red"> 
					<i class="icon-ok"></i> Insert Payment Details
				</button>
			</td></tr>

			
		</table>
	</form>
	


			