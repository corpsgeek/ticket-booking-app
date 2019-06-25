<div class="tab-1 resp-tab-content oneway">
	<form action="#" method="post">
		<div class="from">
			<h3>From</h3>
			<input type="text" name="from_city" class="city1" placeholder="Type Departure City" required="">
		</div>
		<div class="to">
			<h3>To</h3>
			<input type="text" name="to_city" class="city2" placeholder="Type Destination City" required="">
		</div>
		<div class="clear"></div>
		<div class="date">
			<div class="depart">
				<h3>Depart</h3>
				<input class="date" id="datepicker2" name="depart_date" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
			
			</div>
		</div>
		<div class="class">
			<h3>Class</h3>
			<select name="flight_class" id="w3_country1" onchange="change_country(this.value)" class="frm-field required">
				<option value="Economy">Economy</option>
				<option value="Premium Economy">Premium Economy</option>
				<option value="Business">Business</option>
				<option value="First Class">First class</option>
			</select>

		</div>
		<div class="clear"></div>
		<div class="numofppl">
			<div class="adults">
				<h3>Adult:(12+ yrs)</h3>
				<div class="quantity">
				<div class="quantity">
					<div class="quantity-select">
						<input name="adult_num" type="number" class="entry value" />

					</div>
				</div>
				</div>
			</div>
			<div class="child">
				<h3>Child:(2-11 yrs)</h3>
				<div class="quantity">
					<div class="quantity-select">
						<input name="child_num" type="number" class="entry value" />

					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<input type="submit" value="Book Flight" name="book">
	</form>

</div>


<?php
include_once('files\script.php');

?>


<?php

require_once('db\dbconnect.php');
if (isset($_POST['book'])) {
	#get user entry
	echo $from = $_POST['from_city'];
	echo  $to = $_POST['to_city'];
	echo  $depart =  $_POST['depart_date'];
	echo  $class =  $_POST['flight_class'];
	echo  $adult =  $_POST['adult_num'];
	echo $child =  $_POST['child_num'];

	#insert entry into database
	$query = "INSERT INTO `oneway`
	 (`from_destination`, `to_destination`, `depart_date`, 
	 `flight_class`, `num_adult`, `num_child`) 
	 VALUES ('$from', '$to', '$depart', '$class', '$adult', '$child')";

	#run query
	$run_query = $dbconnect->query($query);
	if ($run_query) {
		echo "Yes";
	 } else {
		echo mysqli_error($dbconnect);
	}
}

?>