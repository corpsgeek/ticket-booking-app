<!DOCTYPE html>
<html>
<?php
include_once('files\mainhead.php');

?>

<body>
	<h1>Online Flight Ticket Booking</h1>
	<div class="main-agileinfo">
		<div class="sap_tabs">
			<div id="horizontalTab">
				<?php include_once('files\navlink.php'); ?>
				<div class="clearfix"> </div>
				<div class="resp-tabs-container">

					<?php

					if (isset($_GET['trip']) == 'roundtrip') {
						include_once('files\round.php');
					} else {
						echo "<h1>Select your ticket trip</h1>";
				
						}
					if (isset($_GET['onewaytrip'])) {
						include_once('files\oneway.php');
					}
				

					?>



				</div>
			</div>
		</div>
	</div>

	<?php
	include_once('files\footer.php');

	?>
</body>

</html>